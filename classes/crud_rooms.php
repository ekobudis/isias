<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 27 /06 /15
 * Time: 15.36
 */
ob_start();

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include 'class.Rooms.php';

$room_no = htmlspecialchars($_POST['room_id']);
$room_desc = htmlspecialchars($_POST['room_desc']);
$building_pk = ($_POST['building_id']);
$floor_no = ($_POST['floor_no']);
$kap_ruangan = ($_POST['kap_ruangan']);
$kap_ujian = ($_POST['kap_ujian']);

$data = new Rooms();

switch ( $_GET['p'] ) {
    case "add":

        $data->AddRooms($room_no,$room_desc,$building_pk,$floor_no,$kap_ruangan,$kap_ujian);

        header('location: ../main.php?m=006');
        break;
    case "edit":

        break;
    case "del":
        $id = htmlspecialchars($_REQUEST['id']);
        $data->AddDelete($id);
        header('location: ../main.php?m=006');
        break;
    case "read":
        $i=1
        $jml_per_halaman = 20; // jumlah data yg ditampilkan perhalaman





        break;
    default: echo "Not Founds";
}
ob_end_flush();