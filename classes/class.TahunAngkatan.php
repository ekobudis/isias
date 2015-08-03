<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class TahunAngkatan extends DBConnection{

	function __construct(){
		parent::__construct();
	}

	//Add Tahun Inserted
	public function AddTahun($tahun_akademik){
		//Query SELECT
		$sql = "INSERT INTO m_angkatan (thn_angkatan) VALUES ( ? )";

		$input = array($tahun_akademik);

		$stmt = $this->RunQuery($sql , $input );

		return $stmt;
	}

	//Edit Tahun
	public function EditTahun($tahun_akademik,$aktif, $id){

		$sql = "UPDATE m_angkatan SET thn_angkatan = ?, status = ? WHERE id = ? ";

		$input = array($tahun_akademik,$aktif, $id);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;
	}

    //Get Tahun Active
    public function GetTahunActived(){

        $sql = "SELECT * FROM m_angkatan WHERE status =  'Y' ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    //Delete Tahun
    public function DelTahun($id){
        $sql = "DELETE FROM m_angkatan WHERE id = ? ";

        $input = array($id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public function GetListTahun($from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM m_angkatan ORDER BY id ASC LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll(){
        $sql = "SELECT * FROM m_angkatan ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
}

?>