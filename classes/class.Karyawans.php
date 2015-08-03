<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Karyawans extends DBConnection{

	function __construct(){
		parent::__construct();
	}

    /**
     * @param $emp_id
     * @param $emp_name
     * @param $emp_addr
     * @param $emp_married
     * @param $emp_child
     * @param $emp_sex
     * @param $emp_phn1
     * @param $emp_phn2
     * @param $emp_mail
     * @param $emp_birthdate
     * @param $emp_join
     * @param $emp_identity
     * @param $emp_identity_no
     * @param $emp_last_edu
     * @param $emp_type
     * @return mixed
     */
    public function AddKaryawan($emp_id,$emp_name,$emp_addr,$emp_married,$emp_child,$emp_sex,$emp_phn1,$emp_phn2,$emp_mail,
                                $emp_birthdate,$emp_join,$emp_identity,$emp_identity_no,$emp_last_edu,$emp_type){
		//Query Insert $emp_grade
        $sql = "INSERT INTO m_employee (emp_id, emp_name, emp_addr, emp_married,emp_child,emp_sex,emp_phone1,emp_phone2,
                emp_email,emp_birthdate,emp_join_date,emp_identity,emp_identity_no,emp_last_edu,emp_type)
			    VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? ) ";

        $input = array($emp_id,$emp_name,$emp_addr,$emp_married,$emp_child,$emp_sex,$emp_phn1,$emp_phn2,$emp_mail,
                       $emp_birthdate,$emp_join,$emp_identity,$emp_identity_no,$emp_last_edu,$emp_type); //$emp_grade

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
	}

    public function EditKaryawan($emp_id,$emp_name,$emp_addr,$emp_married,$emp_child,$emp_sex,$emp_phn1,$emp_phn2,$emp_mail,
                                $emp_birthdate,$emp_join,$emp_identity,$emp_identity_no,$emp_last_edu,$emp_type,$id){

        $sql = "UPDATE m_employee SET emp_id = ? , emp_name = ? , emp_addr = ? , emp_married = ? ,emp_child = ? ,emp_sex = ? ,emp_phone1 = ? ,
                emp_phone2 = ? , emp_email = ? ,emp_birthdate = ? ,emp_join_date = ? ,emp_identity = ? ,emp_identity_no = ? ,emp_last_edu = ? ,
                emp_type  = ? 
                WHERE id = ?  ";

        $input = array($emp_id,$emp_name,$emp_addr,$emp_married,$emp_child,$emp_sex,$emp_phn1,$emp_phn2,$emp_mail,
                       $emp_birthdate,$emp_join,$emp_identity,$emp_identity_no,$emp_last_edu,$emp_type,$id); //$emp_grade

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

    public function AIsi($emp_id,$emp_name,$emp_addr){
        //Query Insert $emp_grade
        $sql = "INSERT INTO m_employee (emp_id, emp_name, emp_addr)
			    VALUES ( ? , ? , ? ) ";

        $input = array($emp_id,$emp_name,$emp_addr); //$emp_grade

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public  function getEmployeeByName($emp_name){
        $sql = "SELECT id FROM m_employee WHERE emp_name = ? ";

        $input = array($emp_name);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public  function getEmployeeByID($emp_id){
        $sql = "SELECT * FROM m_employee WHERE id = ? ";

        $input = array($emp_id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public  function ReadEmployee(){
        $sql = "SELECT id,emp_name FROM m_employee WHERE emp_status <> 1 ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public  function GetListEmployee($from_record_num, $records_per_page){
        $sql = "SELECT * FROM m_employee WHERE emp_status <> 1 LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public function DeleteKaryawan($id){
        $sql = "DELETE FROM m_employee WHERE id = :id ";

        $input = array(':id'=> $id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public  function CountAll(){
        $sql = "SELECT * FROM m_employee WHERE emp_status <> 1 ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

}
