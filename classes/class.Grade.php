<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Grade extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddGrade($dari,$sampai,$grade,$keterangan){
		$sql = "INSERT INTO m_grade_nilai (dari_nilai,sampai_nilai,grade_nilai,keterangan)
				VALUES ( ? , ? , ? , ? )";

		$input = array($dari,$sampai,$grade,$keterangan);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;
	}

    //Add Delete Account Function
    public function AddDelete($id){
        //Query Delete
        $sql = "DELETE FROM m_grade_nilai WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

    public function GetListGrade($from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM m_grade_nilai ORDER BY id ASC LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll(){
        $sql = "SELECT * FROM m_grade_nilai ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
}