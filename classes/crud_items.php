<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 04 /07 /15
 * Time: 20.23
 */

ob_start();

include 'class.Items.php';

$item_code = htmlspecialchars($_POST['kategori']);
$item_name = htmlspecialchars($_POST['kategori']);
$item_type = htmlspecialchars($_POST['kategori']);
$uom = htmlspecialchars($_POST['kategori']);
$category_id = htmlspecialchars($_POST['kategori']);
$price = ($_POST['kategori']);
$id_prog = htmlspecialchars($_POST['kategori']);

$data = new Items();

switch ( $_GET['p'] ) {
    case "add":

        $data->AddItems($$item_code,$item_name,$item_type,$uom,$category_id,$price,$id_prog);
        header('location: ../main.php?m=010');
        break;
    case "edit":
        $id = $_REQUEST['id'];
        $data->EditItems($$item_code,$item_name,$item_type,$uom,$category_id,$price,$id_prog,$id);
        break;
    case "del":
        $id = $_REQUEST['id'];
        $isi->AddDelete($id);
        header('location: ../main.php?m=010');
        break;
    //default: echo "Not Founds";
}

ob_end_flush();