<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Kelas extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddKelas($class_id,$class_name,$class_max,$jurusan){
		$sql = "INSERT INTO m_class (class_id,class_info,class_max,major_pk) VALUES ( ? , ? , ? , ? )";

		$input = array($class_id,$class_name,$class_max,$jurusan);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;
	}

    public function  AddDelete($id){
        //Query Delete
        $sql = "DELETE FROM m_class WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public function GetListKelas($from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM list_kelas ORDER BY id ASC LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function GetKelas($class){
        //Query SELECT
        $sql = "SELECT * FROM list_kelas WHERE class_id LIKE '% ? %' ORDER BY id ";

        $input = array($class);

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll(){

        $sql = "SELECT * FROM m_class ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
	
}