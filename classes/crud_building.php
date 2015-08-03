<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 27 /06 /15
 * Time: 20.34
 */
ob_start();

include 'class.Gedungs.php';

$id_gedung = htmlspecialchars($_POST['kode_gedung']);
$nm_gedung = htmlspecialchars($_POST['nama_gedung']);
$alamat = htmlspecialchars($_POST['alamat']);
$jml_ruangan =htmlspecialchars($_POST['jml_ruangan']);

$data = new Gedungs();

switch ( $_GET['p'] ) {
    case "add":

        $data->AddGedung($id_gedung,$nm_gedung,$alamat,$jml_ruangan);
        header('location: ../main.php?m=003');
        break;
    case "edit":

        break;
    case "del":
        $id = htmlspecialchars($_REQUEST['id']);
        $data->AddDelete($id);
        header('location: ../main.php?m=003');
        break;
    //default: echo "Not Founds";
}

ob_end_flush();