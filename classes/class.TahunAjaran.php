<?php
include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

class TahunAjaran extends DBConnection{

	function __construct(){
		parent::__construct();
	}

	//Add New Account Function
	public function AddTahunAjaran($thn_angkatan, $jenis_semester,$tgl_bayar_mulai,$tgl_bayar_selesai,$tgl_autodebet_mulai,$tgl_autodebet_selesai,
                    $tgl_mulai_masuk,$tgl_akhir_masuk,$tgl_mulai_midtest,$tgl_akhir_midtest,$tgl_mulai_ujian,$tgl_akhir_ujian,$tgl_input_nilai,$status_tahun_ajaran,$close_tahun_ajaran,$catatan){
		//Query Insert
		$sql = "INSERT INTO tr_tahunajaran (thn_angkatan_pk,year_semester,year_payment_start,year_payment_end,year_autodebet_start,year_autodebet_end,
                year_school_start,year_school_end,year_midtest_start,year_midtest_end,year_exam_start,year_exam_end,year_entry_start,year_open,year_close,year_note)
			    VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? ) ";

		$input = array($thn_angkatan, $jenis_semester,$tgl_bayar_mulai,$tgl_bayar_selesai,$tgl_autodebet_mulai,$tgl_autodebet_selesai,
            $tgl_mulai_masuk,$tgl_akhir_masuk,$tgl_mulai_midtest,$tgl_akhir_midtest,$tgl_mulai_ujian,$tgl_akhir_ujian,$tgl_input_nilai,$status_tahun_ajaran,$close_tahun_ajaran,$catatan);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;

	}

    public function EditTahunAjaran($thn_angkatan, $jenis_semester,$tgl_bayar_mulai,$tgl_bayar_selesai,$tgl_autodebet_mulai,$tgl_autodebet_selesai,
                                    $tgl_mulai_masuk,$tgl_akhir_masuk,$tgl_mulai_midtest,$tgl_akhir_midtest,$tgl_mulai_ujian,$tgl_akhir_ujian,$tgl_input_nilai,$status_tahun_ajaran,$close_tahun_ajaran,$catatan,$id){
        //Query Insert
        $sql = "UPDATE tr_tahunajaran SET thn_angkatan_pk = ? ,year_semester = ? ,year_payment_start = ? ,year_payment_end = ? ,year_autodebet_start = ? ,year_autodebet_end = ? ,
                year_school_start = ? ,year_school_end = ? ,year_midtest_start = ? ,year_midtest_end = ? ,year_exam_start = ? ,year_exam_end = ? ,year_entry_start = ? ,year_open = ? ,
                year_close = ? ,year_note = ? WHERE id = ? ";

        $input = array($thn_angkatan, $jenis_semester,$tgl_bayar_mulai,$tgl_bayar_selesai,$tgl_autodebet_mulai,$tgl_autodebet_selesai,
            $tgl_mulai_masuk,$tgl_akhir_masuk,$tgl_mulai_midtest,$tgl_akhir_midtest,$tgl_mulai_ujian,$tgl_akhir_ujian,$tgl_input_nilai,$status_tahun_ajaran,$close_tahun_ajaran,$catatan,$id);

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;
    }

	//Add Delete Account Function
	public function DelTahunAjaran($id){
		//Query Delete
		$sql = "DELETE FROM tr_tahunajaran WHERE id = :id ";
		
		$input = array(':id'=>$id);

		$stmt = $this->RunQuery($sql, $input);

		return $stmt;

	}

	public function GetByTahunAjaran($id){
		//Query SELECT
		$sql = "SELECT * FROM tr_tahunajaran WHERE id = :id ";

		$input = array(':id'=>$id);

		$stmt = $this->RunQuery($sql , $input );

		$rowCount = $stmt->rowCount();

		if ($rowCount > 0 ){
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}else{
			return $rowCount;
		}
	}

	public function getInfoTahunAjaran($akun_no){
		$sql = "SELECT acc_no,acc_name FROM m_account WHERE acc_no = ? ";

		$input = array($akun_no);

		$stmt = $this->RunQuery($sql , $input);

        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($rows);
            echo '<option value = ' . $acc_no . ' selected>' . $acc_name . '</option>';
        }
	}

    public function getTahunAjaranAktif($acc_type){

        if($acc_type == ''){
            $sql = "SELECT acc_no,acc_name FROM m_account WHERE sub_acc_no <> '' and acc_status<>1 ";

            $input = array();
        }else{
            $sql = "SELECT acc_no,acc_name FROM m_account WHERE acc_type = ? and sub_acc_no <> '' and acc_status<>1 ";

            $input = array($acc_type);
        }

        $stmt = $this->RunQuery($sql , $input);

        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($rows);
            echo '<option value = ' . $acc_no . '>' . $acc_name . '</option>';
        }
    }

    public function GetListTahunAjarans($cari,$from_record_num, $records_per_page){
		//Query SELECT
		$sql = "SELECT * FROM list_akun WHERE acc_no LIKE '%$cari%' OR acc_name LIKE '%$cari%' OR typeakun LIKE '%cari%' ORDER BY acc_no ASC LIMIT $from_record_num , $records_per_page  ";

		$input = array($cari);

		$stmt = $this->RunQuery($sql , $input );

		return $stmt;
	}

    public function countAll(){
        $sql = "SELECT * FROM tr_tahunajaran ";

        $input = array();

        $stmt = $this->RunQuery($sql, $input);

        return $stmt;

    }

} 

?>