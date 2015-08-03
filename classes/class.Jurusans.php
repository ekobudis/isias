<?php

include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Jurusans extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddJurusan($mjr_id,$mjr_name,$mjr_expt,$mjr_compt,$mjr_special,$off_pk,$mjr_phone,$mjr_fax,$mjr_desc){
        $sql = "INSERT INTO m_major (major_id,major_name,major_expertise,major_competence,major_competence_special,official_pk,major_phone,major_fax,major_desc)
                VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ? )";

        $input = array($mjr_id,$mjr_name,$mjr_expt,$mjr_compt,$mjr_special,$off_pk,$mjr_phone,$mjr_fax,$mjr_desc);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public function  AddDelete($id){
        //Query Delete
        $sql = "DELETE FROM m_major WHERE id = :id ";

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