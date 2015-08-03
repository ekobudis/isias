<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 27 /06 /15
 * Time: 15.36
 */
ob_start();

include 'class.Karyawans.php';

$id_emp = htmlspecialchars($_POST['kodeemp']);
$name_emp = htmlspecialchars($_POST['namaemp']);
$addr_emp = htmlspecialchars($_POST['alamat']);
$married_id =htmlspecialchars($_POST['statusemp']);
$sex = htmlspecialchars($_POST['sex']);
$jml_anak = htmlspecialchars($_POST['jmlanak']);
$no_tlp1 = htmlspecialchars($_POST['notelp1']);
$no_tlp2 =htmlspecialchars($_POST['notelp2']);
$email = htmlspecialchars($_POST['email']);
$tgl_lahir = date('Y-m-d',htmlspecialchars($_POST['tgllahir']));
$tgl_join = date('Y-m-d',htmlspecialchars($_POST['tgljoin']));
$identitas_id =htmlspecialchars($_POST['jenis_identitas']);
$no_identitas = htmlspecialchars($_POST['no_identitas']);
$grade_emp = htmlspecialchars($_POST['']);
$education = htmlspecialchars($_POST['last_edu']);
$emp_tipe =htmlspecialchars($_POST['jenis_kary']);


$isi = new Karyawans();

switch ( $_GET['p'] ) {
    case "add":

        $isi->AddKaryawan($id_emp,$name_emp,$addr_emp,$married_id,$jml_anak,$sex,$no_tlp1,$no_tlp2,$email,$tgl_lahir,$tgl_join,$identitas_id,
            $no_identitas,$grade_emp,$education,$emp_tipe);

        header('location: ../main.php?m=047');
        break;
    case "edit":

        break;
    case "del":
        $id = htmlspecialchars($_POST['id']);
        $isi->AddDelete($id);
        header('location: ../main.php?m=071');
        break;
    case "read":
        $i=1
        $jml_per_halaman = 20; // jumlah data yg ditampilkan perhalaman

        $stmt = $isi->GetListAkuns();

        $jml_data=$stmt->rowCount();
        $jml_halaman = ceil($jml_data/$jml_per_halaman);



        break;
    default: echo "Not Founds";
}

ob_end_flush();