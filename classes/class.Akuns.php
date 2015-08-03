<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Akuns extends DBConnection{

	function __construct(){
		parent::__construct();
	}

	//Add New Account Function
	public function AddAkun($akun_no, $akun_name, $akun_sub, $akun_type){
		//Query Insert
		$sql = "INSERT INTO m_account (acc_no, acc_name, sub_acc_no, acc_type ) 
			    VALUES ( ? , ? , ? , ? ) ";

		$input = array($akun_no, $akun_name, $akun_sub, $akun_type);

		$stmt = $this->RunQuery($sql, $input);

		$rowCount = $stmt->rowCount();

		return json_encode($stmt);

	}

    public function EditAkun($akun_no, $akun_name, $akun_sub, $akun_type,$id){
        //Query Insert
        $sql = "UPDATE m_account SET acc_no = ? , acc_name = ? , sub_acc_no = ? , acc_type = ? WHERE id = ? ";

        $input = array($akun_no, $akun_name, $akun_sub, $akun_type,$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

	//Add Delete Account Function
	public function AddDelete($id){
		//Query Delete
		$sql = "DELETE FROM m_account WHERE id = :id ";
		
		$input = array(':id'=>$id);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;

	}

	// $table , $pkfield, $field, $data
	public function UpdateAkun($akun_no, $akun_name, $akun_sub, $akun_type, $id){

		$ratVal = $this->UpdateQuery('m_usersys',$user_id,$password);

		if($ratVal > 0){
			echo "Update Successfull";
		}else {
			echo "Unable to Save Change password !";
		}
	}

	public function GetByAkun($id){
		//Query SELECT
		$sql = "SELECT * FROM m_account WHERE id = :id ";

		$input = array(':id'=>$id);

		$stmt = $this->RunQuery($sql , $input );

		$rowCount = $stmt->rowCount();

		if ($rowCount > 0 ){
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}else{
			return $rowCount;
		}
	}

	public function getAkunInfo($akun_no){
		$sql = "SELECT acc_no,acc_name FROM m_account WHERE acc_no = ? ";

		$input = array($akun_no);

		$stmt = $this->RunQuery($sql , $input);

        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($rows);
            echo '<option value = ' . $acc_no . ' selected>' . $acc_name . '</option>';
        }
	}

    public function getPopulateAkun($acc_type){

        if($acc_type == ''){
            $sql = "SELECT acc_no,acc_name FROM m_account WHERE sub_acc_no <> '' and acc_status<>1 ";

            $input = array();
        }else{
            $sql = "SELECT acc_no,acc_name FROM m_account WHERE acc_type = ? and sub_acc_no <> '' and acc_status<>1 ";

            $input = array($acc_type);
        }

        $stmt = $this->RunQuery($sql , $input);

        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($rows);
            echo '<option value = ' . $acc_no . '>' . $acc_name . '</option>';
        }
    }

    //get Type ID from Account Type
    public function getAccountByType($type_id){
        $sql = "SELECT acc_no,acc_name FROM m_account WHERE acc_type = ? and acc_status<>1 ";

        $input = array($type_id);

        $stmt = $this->RunQuery($sql , $input);

        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($rows);
            echo '<option value = ' . $acc_no . '>' . $acc_name . '</option>';
        }
        //return $sub_account;
        //$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //echo json_encode($rows);
        //return $stmt;
    }

	public function GetListAkuns($cari,$from_record_num, $records_per_page){
		//Query SELECT
		$sql = "SELECT * FROM list_akun WHERE acc_no LIKE '%$cari%' OR acc_name LIKE '%$cari%' OR typeakun LIKE '%cari%' ORDER BY acc_no ASC LIMIT $from_record_num , $records_per_page  ";

		$input = array($cari);

		$stmt = $this->RunQuery($sql , $input );

		return $stmt;
	}

    public function countAll(){
        $sql = "SELECT * FROM m_account ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

    public function __destruct(){
        //unset Akuns();
        /*unset ($this->akun_no);
        unset ($this->akun_name);
        unset ($this->akun_sub);
        unset ($this->akun_type);*/
        //parent::__destruct();
    }
} 

?>