<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class PMBS extends DBConnection{
	function __construct(){
		parent::__construct();
	}

	public function AddPMBS($no_reg,$nama,$thn_ajaran,$tmpt_lahir,$tgl_lahir,$phone,$sex,$major_id,$konsentrasi,$alamat,
        $ayah,$job_ayah,$tgl_lhr_ayah,$phone_ayah,$mail_ayah,$ibu,$job_ibu,$tgl_lhr_ibu,$phone_ibu,$mail_ibu,$penghasilan_ortu,
        $alamat_ortu,$nm_wali,$hub_wali,$job_wali,$alamat_wali,$sekolah_asal,$nilai_akhir,$no_ijazah,$tgl_ijazah,$alamat_sekolah,
        $jurusan_sekolah,$nama_foto_peserta,$nama_file_ijazah){

        $sql = "INSERT INTO m_registrasi (reg_no,reg_name,reg_year,reg_birthplace,reg_birthdate,reg_phone,reg_sex,reg_major_id,reg_konsentrasi,
                reg_alamat,reg_ayah,reg_job_ayah,reg_tgl_lahir_ayah,reg_phone_ayah,reg_email_ayah,reg_ibu,reg_job_ibu,reg_tgl_lahir_ibu,reg_phone_ibu,
                reg_email_ibu,reg_penghasilan_ortu,reg_alamat_ortu,reg_nama_wali,reg_hub_wali,reg_pekerjaan_wali,reg_alamat_wali,reg_sekolah_asal,
                reg_nilai_akhir,reg_no_ijazah,reg_tgl_ijazah,reg_alamat_sekolah,reg_jurusan_sekolah,reg_foto_img,reg_ijazah_img)
                VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? )";

        $input = array($no_reg,$nama,$thn_ajaran,$tmpt_lahir,$tgl_lahir,$phone,$sex,$major_id,$konsentrasi,$alamat,
                        $ayah,$job_ayah,$tgl_lhr_ayah,$phone_ayah,$mail_ayah,$ibu,$job_ibu,$tgl_lhr_ibu,$phone_ibu,$mail_ibu,$penghasilan_ortu,
                        $alamat_ortu,$nm_wali,$hub_wali,$job_wali,$alamat_wali,$sekolah_asal,$nilai_akhir,$no_ijazah,$tgl_ijazah,$alamat_sekolah,
                        $jurusan_sekolah,$nama_foto_peserta,$nama_file_ijazah);

        $stmt = $this->RunQuery($sql,$input);

        return $stmt;
	}

    //Add Delete Account Function
    public function DelPMBS($id){
        //Query Delete
        $sql = "DELETE FROM m_official_school WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

    // $table , $pkfield, $field, $data
    public function UpdPMBS($no_reg,$nama,$thn_ajaran,$tmpt_lahir,$tgl_lahir,$phone,$sex,$major_id,$konsentrasi,$alamat,
                            $ayah,$job_ayah,$tgl_lhr_ayah,$phone_ayah,$mail_ayah,$ibu,$job_ibu,$tgl_lhr_ibu,$phone_ibu,$mail_ibu,$penghasilan_ortu,
                            $alamat_ortu,$nm_wali,$hub_wali,$job_wali,$alamat_wali,$sekolah_asal,$nilai_akhir,$no_ijazah,$tgl_ijazah,$alamat_sekolah,
                            $jurusan_sekolah,$id){


        $input= array($no_reg,$nama,$thn_ajaran,$tmpt_lahir,$tgl_lahir,$phone,$sex,$major_id,$konsentrasi,$alamat,
            $ayah,$job_ayah,$tgl_lhr_ayah,$phone_ayah,$mail_ayah,$ibu,$job_ibu,$tgl_lhr_ibu,$phone_ibu,$mail_ibu,$penghasilan_ortu,
            $alamat_ortu,$nm_wali,$hub_wali,$job_wali,$alamat_wali,$sekolah_asal,$nilai_akhir,$no_ijazah,$tgl_ijazah,$alamat_sekolah,
            $jurusan_sekolah,$id);

        $stmt = $this->RunQuery($sql, $input);

/*        $ratVal = $this->UpdateQuery('m_usersys',$user_id,$password);

        if($ratVal > 0){
            echo "Update Successfull";
        }else {
            echo "Unable to Save Change password !";
        }*/
    }

    public function GetByID($id){
        //Query SELECT
        $sql = "SELECT * FROM m_registrasi WHERE id = :id ";

        $input = array(':id'=>$id);

        $stmt = $this->RunQuery($sql , $input );

        $rowCount = $stmt->rowCount();

        if ($rowCount > 0 ){
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return $rowCount;
        }
    }

    public function getPejabatInfo($id){
        $sql = "SELECT id,official_name FROM m_official_school WHERE id = ? ";

        $input = array($id);

        $stmt = $this->RunQuery($sql , $input);

        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($rows);
            echo '<option value = ' . $id . ' selected>' . $official_name . '</option>';
        }
    }

    public function GetListRegistrasi($from_record_num, $records_per_page){
        //Query SELECT
        $sql = "SELECT * FROM list_pejabat ORDER BY id ASC LIMIT $from_record_num , $records_per_page  ";

        $input = array();

        $stmt = $this->RunQuery($sql , $input );

        return $stmt;
    }

    public function countAll(){
        $sql = "SELECT * FROM m_registrasi ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }
}