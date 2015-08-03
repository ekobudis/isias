<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 28 /06 /15
 * Time: 00.52
 */
ob_start();
include 'class.Jabatan.php';

$id_pk = htmlspecialchars($_POST['nama']);
$nama = htmlspecialchars($_POST['jabatan']);
$alamat = htmlspecialchars($_POST['memo']);

$data = new Jabatan();

switch ( $_GET['p'] ) {
    case "add":

        $data->AddJabatan($id_pk,$nama,$alamat);
        header('location: ../main.php?m=002');
        break;
    case "edit":
        $data->EditYayasan($id_pk,$nama,$alamat);
        header('location: ../main.php?m=002');
        break;
    case "del":
        $id = $_REQUEST['id'];
        $data->AddDelete($id);
        header('location: ../main.php?m=002');
        break;
}
ob_end_flush();