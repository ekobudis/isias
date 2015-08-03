<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 16 /07 /15
 * Time: 23.48
 */

ob_start();

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include 'class.Karyawans.php';

$emp_id = htmlspecialchars($_POST['kodeemp']);
$emp_name = htmlspecialchars($_POST['namaemp']);
$emp_addr = htmlspecialchars($_POST['alamat']);
$emp_status = htmlspecialchars($_POST['statusemp']);
$emp_sex = htmlspecialchars($_POST['sex']);
$emp_child = htmlspecialchars($_POST['jmlanak']);
$emp_phone1 = htmlspecialchars($_POST['notelp1']);
$emp_phone2 = htmlspecialchars($_POST['notelp2']);
$emp_email = htmlspecialchars($_POST['email']);
$emp_birthdate = ($_POST['tgllahir']);
$emp_joindate = ($_POST['tgljoin']);
$emp_identity_id = htmlspecialchars($_POST['jenis_identitas']);
$emp_identity_no = htmlspecialchars($_POST['no_identitas']);
$emp_last_edu = htmlspecialchars($_POST['last_edu']);
$emp_type = htmlspecialchars($_POST['jenis_kary']);

$data = new Karyawans();

switch ( $_GET['p'] ) {
    case "add":

        $data->AddKaryawan($emp_id,$emp_name,$emp_addr,$emp_status,$emp_child,$emp_sex,$emp_phone1,$emp_phone2,$emp_email,
            $emp_birthdate,$emp_joindate,$emp_identity_id,$emp_identity_no,$emp_last_edu,$emp_type);
        //$data->AIsi($emp_id,$emp_name,$emp_addr);
        header('location: ../main.php?m=047');
        break;
    case "edit":
        $id = $_REQUEST['id'];
        

        header('location: ../main.php?m=047');
        break;
    case "del":
        $id = $_REQUEST['id'];
        $data->DeleteKaryawan($id);
        header('location: ../main.php?m=047');
        break;
}

ob_end_flush();