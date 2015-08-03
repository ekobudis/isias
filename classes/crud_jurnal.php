<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 17 /07 /15
 * Time: 19.34
 */
ob_start();

include 'class.Jurnal.php';

protected $tanda;

$jv_no = htmlspecialchars($_POST['nojurnal']);
$jv_date = htmlspecialchars($_POST['tgljurnal']);
$jv_desc = htmlspecialchars($_POST['keterangan']);
$prog_id ='';
//Detail Value
$account_pk =htmlspecialchars($_POST['acc_pk']);
$debet =htmlspecialchars($_POST['debet']);
$credit =htmlspecialchars($_POST['credit']);
$memo =htmlspecialchars($_POST['memo']);

$data = new Jurnals();

$tanda = true;

switch ( $_GET['p'] ) {
    case "add":

        if ($tanda){
            $data->AddHeaderJurnal($jv_no,$jv_date,$jv_desc,$prog_id);

        }else{

        }

        header('location: ../main.php?m=072');
        break;
    case "edit":
        $id = $_REQUEST['id'];
        $isi->EditAkun($no_akun,$nm_akun,$sub_akun,$ty_akun,$id);
        header('location: ../main.php?m=072');
        break;
    case "del":
        $id = $_REQUEST['id'];
        $isi->AddDelete($id);
        header('location: ../main.php?m=072');
        break;
    //default: echo "Not Founds";
}

ob_end_flush();
