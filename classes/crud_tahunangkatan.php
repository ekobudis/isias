<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 05 /07 /15
 * Time: 21.32
 */

ob_start();

include 'class.TahunAngkatan.php';

$thnakademik = htmlspecialchars($_POST['tahunangkatan']);

$isi = new TahunAngkatan();

switch ( $_GET['p'] ) {
    case "add":

        $isi->AddTahun($thnakademik);
        header('location: ../main.php?m=011');
        break;
    case "edit":
        $id = $_REQUEST['id'];
        $status = htmlspecialchars($_POST['status']);

        $isi->EditTahun($thnakademik,$status,$id);
        header('location: ../main.php?m=011');
        break;
    case "del":
        $id = $_REQUEST['id'];
        $isi->DelTahun($id);
        header('location: ../main.php?m=011');
        break;
}

ob_end_flush();