<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Gedungs extends DBConnection{

	function __construct(){
		parent::__construct();
	}

	//Add New Building Function
	public function AddGedung($building_id, $building_name, $building_addr, $building_room){
		//Query Insert
		$sql = "INSERT INTO m_building (building_id,building_name,building_address,building_room )
			    VALUES ( ? , ? , ? , ? ) ";

		
		$input = array($building_id, $building_name, $building_addr, $building_room);

		$stmt = $this->RunQuery($sql, $input);

		$rowCount = $stmt->rowCount();

		return $rowCount;

	}

    //Add Delete Account Function
    public function AddDelete($id){
        //Query Delete
        $sql = "DELETE FROM m_building WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

	// $table , $pkfield, $field, $data
	public function UpdateAkun($user_id,$password){
		$ratVal = $this->UpdateQuery('m_usersys',$user_id,$password);

		if($ratVal > 0){
			echo "Update Successfull";
		}else {
			echo "Unable to Save Change password !";
		}
	}

    public  function ReadBuilding(){
        $sql = "SELECT id,building_name FROM m_building WHERE building_status <> 1 ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public function GetListBuildings($from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM m_building ORDER BY id ASC LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll(){
        $sql = "SELECT * FROM m_building ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

}