<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 04 /07 /15
 * Time: 19.37
 */
ob_start();

include 'class.Grade.php';

$dari_nilai = htmlspecialchars($_POST['dari_nilai']);
$sampai_nilai = htmlspecialchars($_POST['sampai_nilai']);
$grade = htmlspecialchars($_POST['grade']);
$keterangan =htmlspecialchars($_POST['keterangan']);

$isi = new Grade();

switch ( $_GET['p'] ) {
    case "add":

        $isi->AddGrade($dari_nilai,$sampai_nilai,$grade,$keterangan);
        header('location: ../main.php?m=008');
        break;
    case "edit":

        break;
    case "del":
        $id = $_GET['id'];
        $isi->AddDelete($id);
        header('location: ../main.php?m=008');
        break;
    //default: echo "Not Founds";
}

ob_end_flush();