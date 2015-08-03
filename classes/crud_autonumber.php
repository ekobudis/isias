<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 04 /07 /15
 * Time: 20.23
 */

ob_start();

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include 'class.ProgramParameters.php';

//$idprog = $_POST['idprog'];
$fm_nomer = htmlspecialchars($_POST['format_no']);
$ganti = htmlspecialchars($_POST['change_no']);
$panjang = ($_POST['ukuran']);

$data = new ProgramParameters();

    $pk = $_REQUEST['kode'];
    //$data = array('prg_pk'=>$id);
    //$n = array($fm_nomer,$ganti,$panjang,$pk);
    //echo "Hasilnya " . $n[0] . ", " . $n[1] . ", " . $n[2] . " and " . $pk . "";
    $data->UpdAutoNumbers($fm_nomer,$ganti,$panjang,$pk);
    header('location: ../main.php?m=140');

ob_end_flush();