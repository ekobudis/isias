<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 04 /07 /15
 * Time: 20.23
 */

ob_start();

include 'class.UnitSekolah.php';

$pk = htmlspecialchars($_POST['nama']);
$nama_unit = htmlspecialchars($_POST['unitname']);
$memo = htmlspecialchars($_POST['keterangan']);

$isi = new UnitSekolah();

switch ( $_GET['p'] ) {
    case "add":

        $isi->AddUnitSekolah($pk,$nama_unit,$memo);
        header('location: ../main.php?m=005');
        break;
    case "edit":
        $id = $_REQUEST['kode'];
        $isi->EditUnitSekolah($nama_unit,$memo,$id);
        header('location: ../main.php?m=005');
        break;
    case "del":
        $id = $_REQUEST['kode'];
        $isi->AddDelete($id);
        header('location: ../main.php?m=005');
        break;
    //default: echo "Not Founds";
}

ob_end_flush();