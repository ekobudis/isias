<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 28 /06 /15
 * Time: 00.41
 */
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class Identitas extends DBConnection {
    function __construct(){
        parent::__construct();
    }

    public function AddIdentitas($nama, $alamat, $no_telp,$no_fax,$email, $website, $negara, $lead_name,$jabatan,
                                $lead_name_2,$jabatan_2,$logo){
        $sql = "INSERT INTO identitas (school_name,school_address,school_phone,school_fax,school_email,school_website,
                school_country,school_leadname_1,school_position_1,school_leadname_2,school_position_2,school_logo)
                VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? )";

        $input =array($nama, $alamat, $no_telp,$no_fax,$email, $website, $negara, $lead_name,$jabatan,$lead_name_2,$jabatan_2,$logo);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public function EditIdentitas($nama, $alamat, $no_telp,$no_fax,$email, $website, $negara, $lead_name,$jabatan,
                                  $lead_name_2,$jabatan_2,$logo){
        $sql = "UPDATE identitas SET school_name = ?,school_address = ?,school_phone = ?,school_fax = ?,school_email = ?,school_website = ?,
                school_country = ?,school_leadname_1 = ?,school_position_1 = ?,school_leadname_2 = ?,school_position_2 = ?,school_logo = ? ";

        $input =array($nama, $alamat, $no_telp,$no_fax,$email, $website, $negara, $lead_name,$jabatan,$lead_name_2,$jabatan_2,$logo);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

    public function getIdentitas(){
        $sql = "SELECT * FROM identitas";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }
}