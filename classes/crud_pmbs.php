<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 08 /07 /15
 * Time: 19.31
 */
ob_start();

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include 'class.PMB.php';

$no_pmb = htmlspecialchars($_POST['no_pmb']);
$nama_reg = htmlspecialchars($_POST['nama_reg']);
$tahun = htmlspecialchars($_POST['tahun']);
$tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
$no_telp = htmlspecialchars($_POST['no_telp']);
$tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);
$sex = htmlspecialchars($_POST['sex']);
$jurusan = htmlspecialchars($_POST['jurusan']);
$bidang = htmlspecialchars($_POST['bidang']);
$alamat = htmlspecialchars($_POST['alamat']);
$nama_ayah = htmlspecialchars($_POST['nama_ayah']);
$pekerjaan = htmlspecialchars($_POST['pekerjaan']);
$tgl_lahir_ayah = htmlspecialchars($_POST['tgl_lahir_ayah']);
$no_tlp_ayah = htmlspecialchars($_POST['no_tlp_ayah']);
$email_ayah = htmlspecialchars($_POST['email_ayah']);
$nama_ibu = htmlspecialchars($_POST['nama_ibu']);
$pekerjaan_ibu = htmlspecialchars($_POST['pekerjaan_ibu']);
$tgl_lahir_ibu = htmlspecialchars($_POST['tgl_lahir_ibu']);
$no_telp_ibu = htmlspecialchars($_POST['no_telp_ibu']);
$email_ibu = htmlspecialchars($_POST['email_ibu']);
$penghasilan = htmlspecialchars($_POST['penghasilan']);
$alamat_ortu = htmlspecialchars($_POST['alamat_ortu']);
$nama_wali = htmlspecialchars($_POST['nama_wali']);
$hub_keluarga = htmlspecialchars($_POST['hub_keluarga']);
$pekerjaan_wali = htmlspecialchars($_POST['pekerjaan_wali']);
$alamat_wali = htmlspecialchars($_POST['alamat_wali']);
$sekolah_asal = htmlspecialchars($_POST['sekolah_asal']);
$nilai_akhir = htmlspecialchars($_POST['nilai_akhir']);
$no_ijazah = htmlspecialchars($_POST['no_ijazah']);
$tgl_ijazah = htmlspecialchars($_POST['tgl_ijazah']);
$alamat_sekolah = htmlspecialchars($_POST['alamat_sekolah']);
$jurusan_sekolah = htmlspecialchars($_POST['jurusan_sekolah']);
$input_foto = htmlspecialchars($_POST['input_foto']);
$input_ijazah = htmlspecialchars($_POST['input_ijazah']);

$data = new PMBS();

/*switch ( $_GET['p'] ) {
    case "add":
*/
        $data->AddPMBS($no_pmb,$nama_reg,$tahun,$tempat_lahir,$no_telp,$tgl_lahir,$sex,$jurusan,$bidang,$alamat,$nama_ayah,
            $pekerjaan,$tgl_lahir_ayah,$no_tlp_ayah,$email_ayah,$nama_ibu,$pekerjaan_ibu,$tgl_lahir_ibu,$no_telp_ibu,$email_ibu,
            $penghasilan,$alamat_ortu,$nama_wali,$hub_keluarga,$pekerjaan_wali,$alamat_wali,$sekolah_asal,$nilai_akhir,$no_ijazah,
            $tgl_ijazah,$alamat_sekolah,$jurusan_sekolah,$input_foto,$input_ijazah);

        header('location: ../main.php?m=005');
/*        break;
    case "edit":

        break;
    case "del":
        //$id = htmlspecialchars($_POST['id']);
        //$data->AddDelete($id);
        //header('location: ../main.php?m=005');
        break;
}
*/
ob_end_flush();