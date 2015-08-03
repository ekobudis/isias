<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Educations extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddEducations($sekolah){
		$sql = "INSERT INTO m_education (education_name)
				VALUES ( ? )";

		$input = array($sekolah);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;
	}

    public function EditEducations($sekolah,$id){
        $sql = "UPDATE m_education SET education_name = ?
                WHERE id = ? ";

        $input = array($sekolah,$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    //Add Delete Account Function
    public function DelEducations($id){
        //Query Delete
        $sql = "DELETE FROM m_education WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

    public function GetListEducations($from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM m_education ORDER BY id ASC LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll(){
        $sql = "SELECT * FROM m_education ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
}