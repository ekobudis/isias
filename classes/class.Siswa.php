<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Siswa extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddKalender($tahunakademik,$dr_tanggal,$sampai_tanggal,$warna,$keterangan){
		$sql = "INSERT INTO m_kalenderakademik (schoolyear_id,from_date,to_date,flag_date,description)
				VALUES ( ? , ? , ? , ? , ? )";

		$input = array($tahunakademik,$dr_tanggal,$sampai_tanggal,$warna,$keterangan);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;
	}

    //Add Delete Account Function
    public function DelKalender($id){
        //Query Delete
        $sql = "DELETE FROM m_kalenderakademik WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

    public function GetListSiswa($tahun,$from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM m_kalenderakademik WHERE schoolyear_id = ? ORDER BY id ASC LIMIT $from_record_num , $records_per_page ";

        $input = array($tahun);

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll($tahun){
        $sql = "SELECT * FROM m_grade_nilai ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
}