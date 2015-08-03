<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 28 /06 /15
 * Time: 00.52
 */
ob_start();
include 'class.Yayasan.php';

//$nama,$alamat,$notelp,$nofax,$profinsi,$kota,$npwp,$pkp,$email,$website,$logo
$nama = htmlspecialchars($_POST['nama']);
$alamat = htmlspecialchars($_POST['alamat']);
$no_telp = htmlspecialchars($_POST['notelp']);
$no_fax =htmlspecialchars($_POST['nofax']);
$profinsi = htmlspecialchars($_POST['profinsi']);
$kota =htmlspecialchars($_POST['kota']);
$npwp = htmlspecialchars($_POST['npwp']);
$pkp = ($_POST['pkp']);
$email = htmlspecialchars($_POST['email']);
$website = htmlspecialchars($_POST['website']);
$logo =htmlspecialchars($_POST['logo']);

$data = new Yayasan();

switch ( $_GET['p'] ) {
    case "add":

        $data->AddYayasan($nama,$alamat,$no_telp,$no_fax,$profinsi,$kota,$npwp,$pkp, $email,$website,$logo);
        header('location: ../main.php?m=001');
        break;
    case "edit":
        $data->EditYayasan($nama,$alamat,$no_telp,$no_fax,$profinsi,$kota,$npwp,$pkp, $email,$website,$logo);
        header('location: ../main.php?m=001');
        break;
}
ob_end_flush();