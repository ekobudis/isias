<?php
ob_start();

include 'class.Akuns.php';

$no_akun = htmlspecialchars($_POST['nomer']);
$nm_akun = htmlspecialchars($_POST['nama']);
$ty_akun = htmlspecialchars($_POST['tipe']);
$sub_akun =htmlspecialchars($_POST['subakun']);

$isi = new Akuns();

switch ( $_GET['p'] ) {
    case "add":

        $isi->AddAkun($no_akun,$nm_akun,$sub_akun,$ty_akun);
        header('location: ../main.php?m=071');
        break;
    case "edit":
        $id = $_REQUEST['id'];
        $isi->EditAkun($no_akun,$nm_akun,$sub_akun,$ty_akun,$id);
        header('location: ../main.php?m=071');
        break;
    case "del":
        $id = $_REQUEST['id'];
        $isi->AddDelete($id);
        header('location: ../main.php?m=071');
        break;
    //default: echo "Not Founds";
}

ob_end_flush();

?>