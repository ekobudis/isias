<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class KonfirmBayar extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddKonfirmasi($token_pk,$tgl_konfirm,$jumlah,$bank_acc,$bank_name,$bank_payment,$memo){
		$sql = "INSERT INTO tr_konfirmasi_bayar (token_id,konfirm_date,konfirm_amount,konfirm_bank_acc,konfirm_bank_name,konfirm_bank_id,konfirm_memo)
				VALUES ( ? , ? , ? , ? , ? , ? , ?  )";

		$input = array($token_pk,$tgl_konfirm,$jumlah,$bank_acc,$bank_name,$bank_payment,$memo);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;
	}

    //Add Delete Account Function
    public function DelKonfirm($id){
        //Query Delete
        $sql = "DELETE FROM tr_konfirmasi_bayar WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

    public function getListKonfirmasi($from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM tr_konfirmasi_bayar ORDER BY id ASC LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll(){
        $sql = "SELECT * FROM tr_konfirmasi_bayar ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
}