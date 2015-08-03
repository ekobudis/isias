<?php

include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Jurnals extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddHeaderJurnal($jv_no,$jv_date,$jv_desc,$jv_prog){
        $sql = "INSERT INTO tr_jurnalvoucher (jv_no,jv_date,jv_desc,prog_id)
                VALUES ( ? , ? , ? , ? )";

        $input = array($jv_no,$jv_date,$jv_desc,$jv_prog);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public function GetLastInsertID(){

    }

    public function AddDetailJurnal($jv_pk,$acc_pk,$debet,$credit,$memo){
        $sql = "INSERT INTO tr_jurnalvoucher_d (jv_pk,acc_pk,jv_debet,jv_credit,jv_memo)
                VALUES ( ? , ? , ? , ? , ? )";

        $input = array($jv_pk,$acc_pk,$debet,$credit,$memo);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public function  DelDetailByID($id){
        //Query Delete
        $sql = "DELETE FROM tr_jurnalvoucher_d WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public function GetListJurusan($from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM list_jurusan ORDER BY id ASC LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll(){
        $sql = "SELECT * FROM list_jurusan ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
}