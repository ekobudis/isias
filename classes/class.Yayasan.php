<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Yayasan extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddYayasan($nama,$alamat,$notelp,$nofax,$profinsi,$kota,$npwp,$pkp,$email,$website,$logo){
		$sql = "INSERT INTO yayasan (nama_yayasan,alamat_yayasan,notelp_yayasan,nofax_yayasan,profinsi_yayasan,kota_yayasan,
                npwp_yayasan,pkp_yayasan,email_yayasan,website_yayasan,logo_yayasan) VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? )";

		$input = array($nama,$alamat,$notelp,$nofax,$profinsi,$kota,$npwp,$pkp,$email,$website,$logo);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;
	}

    public function EditYayasan($nama,$alamat,$notelp,$nofax,$profinsi,$kota,$npwp,$pkp,$email,$website){

        $sql = "UPDATE yayasan SET nama_yayasan = ? ,alamat_yayasan = ? ,notelp_yayasan = ? ,nofax_yayasan = ? ,profinsi_yayasan = ? ,kota_yayasan = ? ,
                npwp_yayasan = ? ,pkp_yayasan = ? ,email_yayasan = ? ,website_yayasan = ?  ";

        $input =array($nama,$alamat,$notelp,$nofax,$profinsi,$kota,$npwp,$pkp,$email,$website);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public function getYayasan(){
        $sql = "SELECT * FROM yayasan";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
	
}