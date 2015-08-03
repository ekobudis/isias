<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Pejabat extends DBConnection{

	function __construct(){
		parent::__construct();
	}

	//Add New Account Function
	public function AddPejabat($off_name, $off_desc, $off_graduation, $off_program, $off_sk_no,$off_sk_date, $off_ceremony,$off_start, $off_end){
		//Query Insert
		$sql = "INSERT INTO m_official_school (official_name,official_desc,official_graduation,official_program,official_sk_no,
                official_sk_date,official_ceremony,official_start_work,official_end)
			    VALUES ( ? , ? , ? , ? , ? ,  ? , ? , ? , ? ) ";

		$input = array($off_name, $off_desc, $off_graduation, $off_program, $off_sk_no, $off_sk_date, $off_ceremony,$off_start, $off_end);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;

	}

	//Add Delete Account Function
	public function AddDelete($id){
		//Query Delete
		$sql = "DELETE FROM m_official_school WHERE id = :id ";
		
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

	public function GetByID($id){
		//Query SELECT
		$sql = "SELECT * FROM m_official_school WHERE id = :id ";

		$input = array(':id'=>$id);

		$stmt = $this->RunQuery($sql , $input );

		$rowCount = $stmt->rowCount();

		if ($rowCount > 0 ){
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}else{
			return $rowCount;
		}
	}

	public function getPejabatInfo($id){
		$sql = "SELECT id,official_name FROM m_official_school WHERE id = ? ";

		$input = array($id);

		$stmt = $this->RunQuery($sql , $input);

        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($rows);
            echo '<option value = ' . $id . ' selected>' . $official_name . '</option>';
        }
	}

	public function GetListPejabat($from_record_num, $records_per_page){
		//Query SELECT
		$sql = "SELECT * FROM list_pejabat ORDER BY id ASC LIMIT $from_record_num , $records_per_page  ";

		$input = array();

		$stmt = $this->RunQuery($sql , $input );

		return $stmt;
	}

    public function countAll(){
        $sql = "SELECT * FROM list_pejabat ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }
}

?>