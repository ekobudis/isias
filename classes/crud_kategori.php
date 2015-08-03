<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 04 /07 /15
 * Time: 20.23
 */

ob_start();

include 'class.Kategori.php';

$kategori = htmlspecialchars($_POST['kategori']);

$isi = new Kategori();

switch ( $_GET['p'] ) {
    case "add":

        $isi->AddKategori($kategori);
        header('location: ../main.php?m=010');
        break;
    case "edit":

        break;
    case "del":
        $id = $_REQUEST['id'];
        $isi->AddDelete($id);
        header('location: ../main.php?m=010');
        break;
    //default: echo "Not Founds";
}

ob_end_flush();