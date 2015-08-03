<?php
/*
 * Created By Eko Budi Susilo
 * Sublime Text
 * CRUD Kelas For Insert, Edit, Delete
 */
ob_start();

include 'class.Jurusans.php';

$kode = htmlspecialchars($_POST['kode_jur']);
$nama = htmlspecialchars($_POST['nama_jur']);
$bidang = htmlspecialchars($_POST['keahlian']);
$kompetensi = htmlspecialchars($_POST['kompetisi']);
$spesial = htmlspecialchars($_POST['spesial']);
$kajur = htmlspecialchars($_POST['kajur']);
$notelp = htmlspecialchars($_POST['no_telp']);
$nofax = htmlspecialchars($_POST['no_fax']);
$keterangan = htmlspecialchars($_POST['keterangan']);

$data = new Jurusans();

switch ($_GET['p']){
    case "add":

        $stmt = $data->AddJurusan($kode,$nama,$bidang,$kompetensi,$spesial,$kajur,$notelp,$nofax,$keterangan);
        header('location:../main.php?m=004');
        break;

    case "edit":

        break;

    case "del":
        $id = htmlspecialchars($_REQUEST['id']);

        $stmt = $data->AddDelete($id);
        header('location:../main.php?m=004');
        break;
}
ob_end_flush();