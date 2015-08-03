<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class PembelianFormulir extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddPembelianFormulir($token_id,$tahun_angkatan,$token_name,$token_phone,$token_desc,$token_mail){
		$sql = "INSERT INTO tr_pembelian_formulir (token_id,thn_angkatan_pk,token_name,token_phone,token_desc,token_mail)
				VALUES ( ? , ? , ? , ? , ? , ? )";

		$input = array($token_id,$tahun_angkatan,$token_name,$token_phone,$token_desc,$token_mail);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;
	}

    //Add Delete Account Function
    public function DelPembelianFormulir($id){
        //Query Delete
        $sql = "DELETE FROM tr_pembelian_formulir WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

    public function GetListPembelianFormulir($from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM m_grade_nilai ORDER BY id ASC LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll(){
        $sql = "SELECT * FROM tr_pembelian_formulir ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
}