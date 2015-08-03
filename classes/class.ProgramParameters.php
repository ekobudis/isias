<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class ProgramParameters extends DBConnection{

	function __construct(){
		parent::__construct();
	}

	//Header Menu
	public function GetAutonumberParameters($from_record_num, $records_per_page){
		//Query SELECT
		$sql = "SELECT prg_pk,idprog,menu_name,formatno,change_no,panjang,active FROM program_id WHERE prg_format='Y' ORDER BY idprog ASC LIMIT $from_record_num , $records_per_page ";

		$input = array();

		$stmt = $this->RunQuery($sql , $input );

		return $stmt;
	}

	//Detail Menu
	public function GetAutonumberParametersByID($id){

		$sql = "SELECT prg_pk,idprog,menu_name,formatno,change_no,panjang,active FROM program_id WHERE prg_pk = ? ";

		$input = array($id);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;
	}

    public function UpdAutoNumbers($format_no,$change_no,$panjang_no,$prg_pk){

        $sql = "UPDATE program_id SET formatno = ? , change_no = ? , panjang = ?
                WHERE prg_pk = ? ";


        $input = array($format_no,$change_no,$panjang_no,$prg_pk);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;

    }

    public function CountAll(){
        $sql = "SELECT prg_pk,idprog,menu_name,formatno,change_no,panjang,active FROM program_id  WHERE prg_format='Y'";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }
}

?>