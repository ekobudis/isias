<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class NilaiTest extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddNilaiTest($konfirm_token,$jenis_test,$nilai_test,$memo_test){
		$sql = "INSERT INTO tr_inputnilai_pretest (konfirm_token_pk,jenis_test,nilai_test,memo_test)
				VALUES ( ? , ? , ? , ? )";

		$input = array($konfirm_token,$jenis_test,$nilai_test,$memo_test);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;
	}

    public function EditNilaiTest($konfirm_token,$jenis_test,$nilai_test,$memo_test, $id){
        $sql = "INSERT INTO tr_inputnilai_pretest SET konfirm_token_pk = ? ,jenis_test = ? ,nilai_test = ? ,memo_test = ?
                WHERE id = ? ";

        $input = array($konfirm_token,$jenis_test,$nilai_test,$memo_test, $id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    //Add Delete Account Function
    public function AddDelete($id){
        //Query Delete
        $sql = "DELETE FROM tr_inputnilai_pretest WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

    public function GetListNilaiTest($from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM tr_inputnilai_pretest ORDER BY id ASC LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll(){
        $sql = "SELECT * FROM tr_inputnilai_pretest ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
}