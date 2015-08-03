<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 03 /07 /15
 * Time: 19.20
 */
ob_start();

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include 'class.Pejabat.php';

$nama = htmlspecialchars($_POST['nama']);
$keterangan = htmlspecialchars($_POST['keterangan']);
$pendidikan = htmlspecialchars($_POST['pendidikan']);
$jurusan = htmlspecialchars($_POST['jurusan']);
$no_sk = htmlspecialchars($_POST['no_sk']);
$tgl_sk = ($_POST['tgl_sk']);
$tgl_pelantikan = ($_POST['tgl_pelantikan']);
$tgl_start = ($_POST['tgl_start']);
$tgl_end = ($_POST['tgl_end']);

$data = new Pejabat();

switch ( $_GET['p'] ) {
    case "add":

        $data->AddPejabat($nama,$keterangan,$pendidikan,$jurusan,$no_sk,$tgl_sk,$tgl_pelantikan,$tgl_start,$tgl_end);

        header('location: ../main.php?m=005');
        break;
    case "edit":

        break;
    case "del":
        $id = htmlspecialchars($_REQUEST['id']);
        $data->AddDelete($id);
        header('location: ../main.php?m=005');
        break;
}

ob_end_flush();