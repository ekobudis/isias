<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Kategori extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddKategori($kategori){
		$sql = "INSERT INTO m_categorys (cat_name)
				VALUES ( ? )";

		$input = array($kategori);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;
	}

    //Add Delete Account Function
    public function AddDelete($id){
        //Query Delete
        $sql = "DELETE FROM m_categorys WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

    public function GetListKategori($from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM m_categorys ORDER BY id ASC LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll(){
        $sql = "SELECT * FROM m_categorys ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
}