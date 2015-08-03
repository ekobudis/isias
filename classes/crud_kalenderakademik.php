<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 12 /07 /15
 * Time: 01.25
 */

ob_start();

include 'class.KalenderAkademiks.php';

$tahun = htmlspecialchars($_REQUEST['tahun_angkatan']);
$dari_tgl= htmlspecialchars($_REQUEST['dari_tgl']);
$sampai_tgl = htmlspecialchars($_REQUEST['sampai_tgl']);
$_warna = htmlspecialchars($_REQUEST['warna']);
$keterangan = htmlspecialchars($_REQUEST['keterangan']);

$isi = new KalenderAkademiks();

switch ( $_GET['p'] ) {
    case "add": 

        $isi->AddKalender($tahun,$dari_tgl,$sampai_tgl,$_warna,$keterangan);
        header('location: ../main.php?m=145');
        break;
    case "edit":
        $id = $_REQUEST['kode'];
        $isi->EditKalender($dari_tgl,$sampai_tgl,$_warna,$keterangan,$id);
        header('location: ../main.php?m=145');
        break;
    case "del":
        $id = $_REQUEST['kode'];
        $isi->DelKalender($id);
        header('location: ../main.php?m=145');
        break;
    //default: echo "Not Founds";
}

ob_end_flush();