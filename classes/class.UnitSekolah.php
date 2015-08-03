<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class UnitSekolah extends DBConnection{

	function __construct(){
		parent::__construct();
	}

	//Add New Account Function
	public function AddUnitSekolah($sekolah_pk,$unit_name,$memo){
		//Query Insert
		$sql = "INSERT INTO m_unitsekolah (sekolah_pk,unit_name,unit_desc)
			    VALUES ( ? , ? , ? ) ";

		$input = array($sekolah_pk,$unit_name,$memo);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;

	}

	//Add Delete Account Function
	public function AddDelete($id){
		//Query Delete
		$sql = "DELETE FROM m_unitsekolah WHERE id = :id ";
		
		$input = array(':id'=>$id);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;

	}

	// $table , $pkfield, $field, $data
	public function EditUnitSekolah($unit_name,$memo, $id){

        $sql = "UPDATE m_unitsekolah SET unit_name = ? ,unit_desc = ?
                WHERE id = ? ";

        $input = array($unit_name,$memo, $id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

	}

	public function GetByID($id){
		//Query SELECT
		$sql = "SELECT * FROM m_unitsekolah WHERE id = ? LIMIT 1 ";

		$input = array($id);

		$stmt = $this->RunQuery($sql , $input );

		//$rowCount = $stmt->rowCount();

		return $stmt;

		/*if ($rowCount > 0 ){
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}else{
			return $rowCount;
		}*/
	}

	public function GetListUnitSekolah($from_record_num, $records_per_page){
		//Query SELECT
		$sql = "SELECT * FROM list_unitsekolah ORDER BY id ASC LIMIT $from_record_num , $records_per_page  ";

		$input = array();

		$stmt = $this->RunQuery($sql , $input );

		return $stmt;
	}

    public function countAll(){
        $sql = "SELECT * FROM m_unitsekolah ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }
}

?>