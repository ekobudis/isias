<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Jabatan extends DBConnection{

	function __construct(){
		parent::__construct();
	}

	//Add New Account Function
	public function AddJabatan($yayasan_pk,$nama_jabatan,$memo){
		//Query Insert
		$sql = "INSERT INTO m_pejabatyayasan (yayasan_pk,nama_jabatan,memo_jabatan)
			    VALUES ( ? , ? , ? ) ";

		$input = array($yayasan_pk,$nama_jabatan,$memo);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;

	}

	//Add Delete Account Function
	public function AddDelete($id){
		//Query Delete
		$sql = "DELETE FROM m_pejabatyayasan WHERE id = :id ";
		
		$input = array(':id'=>$id);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;

	}

	// $table , $pkfield, $field, $data
	public function EditYayasan($yayasan_pk,$nama_jabatan,$memo, $id){

        $sql = "UPDATE m_pejabatyayasan SET yayasan_pk = ? ,nama_jabatan = ? ,memo_jabatan = ?
                WHERE id = ? ";

        $input = array($yayasan_pk,$nama_jabatan,$memo);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

	}

	public function GetByID($id){
		//Query SELECT
		$sql = "SELECT * FROM m_pejabatyayasan WHERE id = :id ";

		$input = array(':id'=>$id);

		$stmt = $this->RunQuery($sql , $input );

		$rowCount = $stmt->rowCount();

		if ($rowCount > 0 ){
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}else{
			return $rowCount;
		}
	}

	public function GetListJabatan($from_record_num, $records_per_page){
		//Query SELECT
		$sql = "SELECT * FROM list_jabatan ORDER BY id ASC LIMIT $from_record_num , $records_per_page  ";

		$input = array();

		$stmt = $this->RunQuery($sql , $input );

		return $stmt;
	}

    public function countAll(){
        $sql = "SELECT * FROM m_pejabatyayasan ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }
}

?>