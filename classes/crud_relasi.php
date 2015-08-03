<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 11 /07 /15
 * Time: 20.10
 */
ob_start();

include 'class.Relasi.php';

$nama = htmlspecialchars($_POST['nama']);
$alamat = htmlspecialchars($_POST['alamat']);
$no_telp = htmlspecialchars($_POST['notelp']);
$no_fax =htmlspecialchars($_POST['nofax']);
$kota =htmlspecialchars($_POST['kota']);
$nama_pic =htmlspecialchars($_POST['namapic']);
$kategori_id =htmlspecialchars($_POST['kategori_id']);

$data = new Relasi();

switch ( $_GET['p'] ) {
    case "add":

        $data->AddRelasi($nama,$alamat,$no_telp,$no_fax,$kota,$nama_pic,$kategori_id);
        header('location: ../main.php?m=011');
        break;
    case "edit":
        $id = $_REQUEST['id'];
        $data->EditRelasi($nama,$alamat,$no_telp,$no_fax,$kota,$nama_pic,$kategori_id,$id);
        header('location: ../main.php?m=011');
        break;
    case "del":
        $id = $_REQUEST['id'];
        $isi->AddDelete($id);
        header('location: ../main.php?m=011');
        break;
    //default: echo "Not Founds";
}

ob_end_flush();
