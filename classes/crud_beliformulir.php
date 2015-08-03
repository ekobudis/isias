<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 24 /07 /15
 * Time: 23.08
 */

ob_start();

include 'class.BeliFormulir.php';

$token_id = '';
$thn_angkatan = htmlspecialchars($_POST['kode_jur']);
$nama = htmlspecialchars($_POST['nama_jur']);
$no_telp = htmlspecialchars($_POST['keahlian']);
$keterangan = htmlspecialchars($_POST['kompetisi']);
$email = htmlspecialchars($_POST['spesial']);

$data = new PembelianFormulir();

switch ($_GET['p']){
    case "add":

        $stmt = $data->AddPembelianFormulir($token_id,$thn_angkatan,$nama,$no_telp,$keterangan,$email);
        header('location:../main.php?m=004');
        break;
    case "edit":

        break;
    case "del":
        $id = htmlspecialchars($_REQUEST['id']);

        $stmt = $data->DelPembelianFormulir($id);
        header('location:../main.php?m=004');
        break;
}
ob_end_flush();