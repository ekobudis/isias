<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Items extends DBConnection{

	function __construct(){
		parent::__construct();
	}

	//Add New Building Function
	public function AddItems($item_id,$item_name,$item_type,$uom,$cat_id,$price,$id_menu){
		//Query Insert
		$sql = "INSERT INTO m_items (item_id,item_name,item_type,uom_pk,cat_pk,item_price,idprog)
			    VALUES ( ? , ? , ? , ? , ? , ? , ? ) ";

		
		$input = array($item_id,$item_name,$item_type,$uom,$cat_id,$price,$id_menu);

		$stmt = $this->RunQuery($sql, $input);

		$rowCount = $stmt->rowCount();

		return $rowCount;

	}

    //Add Delete Account Function
    public function DelItems($id){
        //Query Delete
        $sql = "DELETE FROM m_items WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

	// $table , $pkfield, $field, $data
	public function EditItems($item_id,$item_name,$item_type,$uom,$cat_id,$price,$id){
		
        $sql = "UPDATE m_items SET item_id = ?,item_name = ?,item_type = ?,uom_pk = ?,cat_pk = ?,item_price = ?
                WHERE id = ? ";

        
        $input = array($item_id,$item_name,$item_type,$uom,$cat_id,$price,$id);

        $stmt = $this->RunQuery($sql, $input);

        $rowCount = $stmt->rowCount();

        return $rowCount;
	}

    public function GetListItems($from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM list_items ORDER BY id ASC LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll(){
        $sql = "SELECT * FROM m_items ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

}