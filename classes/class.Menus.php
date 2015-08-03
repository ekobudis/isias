<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Menus extends DBConnection{

	function __construct(){
		parent::__construct();
	}

	//Header Menu
	public function GetHeaderMenus(){
		//Query SELECT
		$sql = "SELECT group_id,menu_header,menu_desc,menu_imagename FROM menu_id WHERE menu_status<>1 ORDER BY group_id ASC ";

		$input = array();

		$stmt = $this->RunQuery($sql , $input );

		return $stmt;
	}

	//Detail Menu
	public function GetDetailMenus($id){
		$sql = "SELECT idprog,menu_name,sub_idprog,group_id,link_urlmenu,icon FROM program_id WHERE group_id = ? AND prg_status<>1 ORDER BY idprog ASC ";

		$input = array($id);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;
	}

    //Klik Menu & Breadchumb
    public function GetURLMenus($idprog){
        $sql = "SELECT a.idprog,a.menu_name,a.sub_idprog,a.group_id,a.link_urlmenu,a.icon,b.menu_header FROM program_id a
                INNER JOIN menu_id b ON a.group_id=b.group_id  WHERE a.idprog = ? ORDER BY a.idprog ASC ";


        $input = array($idprog);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

}

?>