<?php

include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');
require_once ('password.php');

/*if (!defined('PASSWORD_BCRYPT')) {
    define('PASSWORD_BCRYPT', 1);
    define('PASSWORD_DEFAULT', PASSWORD_BCRYPT);
}*/

class Users extends DBConnection{

	function __construct(){
		parent::__construct();
	}
        
    private function get_user_hash($username){

        $sql = "SELECT usr_pswd FROM m_usersys WHERE usr_id = ? ";

        $input = array($username);
        $stmt = $this->RunQuery($sql, $input);

        $row = $stmt->fetch();
        return $row['usr_pswd'];

	}

	public function login($username,$password){

        $pass = new Password();

        $hashed = $this->get_user_hash($username);

        $stmt = $pass->password_verify($password,$hashed);

		if(($stmt) == 1){
		    $_SESSION['loggedin'] = true;
		    return $stmt;
		}
	}
		
	public function logout(){
		session_destroy();
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}		
	}
        
	//Add New User Function
	public function AddUser($user_id,$user_pass,$emp_id,$user_admin,$user_kpi){
		//Query Insert
		$sql = "INSERT INTO m_usersys (usr_id,usr_pswd,emp_pk,usr_adm,usr_kpidashboard) 
			    VALUES ( ? , ? , ? , ? , ? ) ";

        $input = array($user_id,$user_pass,$emp_id,$user_admin,$user_kpi);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;

	}

	// $table , $pkfield, $field, $data
	public function UpdateUser($user_id,$password){
		$ratVal = $this->UpdateQuery('m_usersys',$user_id,$password);

		if($ratVal > 0){
			echo "Update Successfull";
		}else {
			echo "Unable to Save Change password !";
		}
	}

    public  function GetListUser($from_record_num, $records_per_page){
        $sql = "SELECT * FROM list_users WHERE usr_status <> 1 LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

	public function getUserInfo($user_id, $password){
		$sql = "SELECT * FROM m_usersys WHERE usr_id = ? AND usr_pswd = ? ";

		$input = array($user_id, $password);

		$stmt = $this->RunQuery($sql , $input);

		$rowCount = $stmt->rowCount();

		if ($rowCount > 0) {
			return $stmt;
		} else {
			return false;
		}
	}

	public function GetUser($id){
		//Query SELECT
		$sql = "SELECT * FROM list_users WHERE usr_id = ? ";

		$input = array($id);

		$stmt = $this->RunQuery($sql , $input );

		return $stmt;
	}

    public  function CountAll(){
        $sql = "SELECT * FROM m_usersys WHERE usr_status <> 1 ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
}
