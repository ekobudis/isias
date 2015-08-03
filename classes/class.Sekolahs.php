<?php

class Sekolahs extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddSekolah($nama,$alamat,$no_telp,$no_fax,$email,$website,$negara,$pejabat1,$jabatan1,$pejabat2,$jabatan2,$logo){
		$sql = "INSERT INTO identity (school_name,school_address,school_phone,school_fax,school_email,school_website,school_country,
				school_leadname_1,school_position_1,school_leadname_2,school_position_2,school_logo) 
				VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ?)";

		$input = array($nama,$alamat,$no_telp,$no_fax,$email,$website,$negara,$pejabat1,$jabatan1,$pejabat2,$jabatan2,$logo);

		$stmt = $this->RunQuery($sql,$input);

		return $stmt;
	}

	
}