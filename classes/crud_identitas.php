<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 28 /06 /15
 * Time: 00.52
 */
ob_start();
include 'class.Identitas.php';

$nama = htmlspecialchars($_POST['nama']);
$alamat = htmlspecialchars($_POST['alamat']);
$no_telp = htmlspecialchars($_POST['notelp']);
$no_fax =htmlspecialchars($_POST['nofax']);
$email = htmlspecialchars($_POST['email']);
$website = htmlspecialchars($_POST['website']);
$negara = htmlspecialchars($_POST['negara']);
$pejabat_1 =htmlspecialchars($_POST['pejabat1']);
$jabatan_1 = htmlspecialchars($_POST['jabatan1']);
$pejabat_2 = htmlspecialchars($_POST['pejabat2']);
$jabatan_2 = htmlspecialchars($_POST['jabatan2']);
$logo =htmlspecialchars($_POST['logo']);

$data = new Identitas();

switch ( $_GET['p'] ) {
    case "add":

        $data->AddIdentitas($nama,$alamat,$no_telp,$no_fax, $email,$website,$negara,$pejabat_1,$jabatan_1,$pejabat_2,$jabatan_2,$logo);
        header('location: ../main.php?m=002');
        break;
    case "edit":
        $data->EditIdentitas($nama,$alamat,$no_telp,$no_fax, $email,$website,$negara,$pejabat_1,$jabatan_1,$pejabat_2,$jabatan_2,$logo);
        header('location: ../main.php?m=002');
        break;
}
ob_end_flush();