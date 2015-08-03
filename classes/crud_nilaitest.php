<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 28 /06 /15
 * Time: 00.52
 */
ob_start();
include 'class.NilaiTest.php';

$id_pk = htmlspecialchars($_POST['token_pk']);
$jenis_test = htmlspecialchars($_POST['jenis']);
$nilai_test = htmlspecialchars($_POST['nilai']);
$memo_test = htmlspecialchars($_POST['memo']);

$data = new NilaiTest();

switch ( $_GET['p'] ) {
    case "add":

        $data->AddNilaiTest($id_pk,$jenis_test,$nilai_test,$memo_test);
        header('location: ../main.php?m=023');
        break;
    case "edit":
        $id = $_REQUEST['id'];
        $data->EditNilaiTest($id_pk,$jenis_test,$nilai_test,$memo_test);
        header('location: ../main.php?m=023');
        break;
    case "del":
        $id = $_REQUEST['id'];
        $data->AddDelete($id);
        header('location: ../main.php?m=023');
        break;
}
ob_end_flush();