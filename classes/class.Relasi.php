<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Relasi extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddRelasi($ledger_name,$ledger_addr,$ledger_phone,$ledger_fax,$ledger_city,$ledger_picname,$ledger_category){

		$sql = "INSERT INTO m_ledger (ldg_name,ldg_address,ldg_phone,ldg_fax,ldg_city,ldg_pic_name,cat_id)
				VALUES ( ? , ? , ? , ? , ? , ? , ? )";

		$input = array($ledger_name,$ledger_addr,$ledger_phone,$ledger_fax,$ledger_city,$ledger_picname,$ledger_category);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;
	}

    //Add Delete Account Function
    public function DelRelasi($id){
        //Query Delete
        $sql = "DELETE FROM m_ledger WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

    public function EditRelasi($ledger_name,$ledger_addr,$ledger_phone,$ledger_fax,$ledger_city,$ledger_picname,$ledger_category,$id){

        $sql = "UPDATE m_ledger SET ldg_name = ?,ldg_address = ?,ldg_phone = ?,ldg_fax = ?,ldg_city = ?,ldg_pic_name = ?,cat_id = ? WHERE id = ?";

        $input = array($ledger_name,$ledger_addr,$ledger_phone,$ledger_fax,$ledger_city,$ledger_picname,$ledger_category,$id);

        $stmt = $this->RunQuery($sql,$input);

        return $stmt;
    }

    public function GetListRelasi($from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM list_ledgers ORDER BY id ASC LIMIT $from_record_num , $records_per_page ";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll(){
        $sql = "SELECT * FROM list_ledgers ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
}