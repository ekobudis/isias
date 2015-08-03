<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Rooms extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddRooms($room_no,$room_desc,$building_pk,$building_floor,$room_max,$room_exam_cap){

		$sql = "INSERT INTO m_room (room_no,room_desc,building_pk,building_floor,room_max,room_exam_max)
				VALUES ( ? , ? , ? , ? , ? , ? )";

		$input = array($room_no,$room_desc,$building_pk,$building_floor,$room_max,$room_exam_cap);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;
	}

    //Add Delete Account Function
    public function AddDelete($id){
        //Query Delete
        $sql = "DELETE FROM m_room WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

    public function GetListRooms($from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM list_rooms ORDER BY id ASC LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll(){
        $sql = "SELECT * FROM m_room ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
}