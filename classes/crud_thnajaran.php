<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 05 /07 /15
 * Time: 21.32
 */

ob_start();

include 'class.TahunAjaran.php';

$thnakademik = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$thn_pk = htmlspecialchars($_POST['tahunangkatan']);
$isi = new TahunAjaran();

switch ( $_GET['p'] ) {
    case "add":

        $isi->AddTahun($thnakademik);
        header('location: ../main.php?m=144');
        break;
    case "edit":
        $id = $_REQUEST['id'];
        $status = htmlspecialchars($_REQUEST['status']);

        $isi->EditTahun($thnakademik,$status,$id);
        header('location: ../main.php?m=144');
        break;
}

ob_end_flush();