<?php
/*
 * Created By Eko Budi Susilo
 * Sublime Text
 * CRUD Kelas For Insert, Edit, Delete
 */
ob_flush();

include 'class.Kelas.php';

$kode = htmlspecialchars($_POST['kelas_id']);
$info = htmlspecialchars($_POST['keterangan']);
$jmlkelas = htmlspecialchars($_POST['jumlah']);
$jurusan=$_POST['jurusan_pk'];

$data = new Kelas();

switch ($_GET['p']){
	case "add":

		$stmt = $data->AddKelas($kode,$info,$jmlkelas,$jurusan);
		header('location:../main.php?m=007');
		break;

	case "edit":

		break;

	case "del":
		$id = htmlspecialchars($_REQUEST['id']);
		
		$stmt = $data->Delete($id);
		header('location:../main.php?m=007');
		break;
	default: echo "Not Founds";
}
ob_end_flush();