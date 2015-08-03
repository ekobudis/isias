<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 04 /07 /15
 * Time: 19.37
 */
ob_start();

include 'class.Educations.php';

$jenjang = htmlspecialchars($_POST['nama']);

$isi = new Educations();

switch ( $_GET['p'] ) {
    case "add":

        $isi->AddEducations($jenjang);
        header('location: ../main.php?m=141');
        break;
    case "edit":
        $id = $_REQUEST['id'];
        $isi->EditEducations($jenjang,$id);
        header('location: ../main.php?m=141');

        break;
    case "del":
        $id = $_REQUEST['id'];
        $isi->AddDelete($id);
        header('location: ../main.php?m=141');
        break;
    //default: echo "Not Founds";
}

ob_end_flush();