<?php
ob_flush();

include 'class.Kelas.php';

$id_kelas = $_GET['kelas'];

$kls = new Kelas();

$data = $kls->GetKelas($id_kelas);

while ($row = $data->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    $row['id']={$id};
    $row['kelas']={$class_id};

    $row_set[]=$row;
}
echo json_encode($row_set);

ob_end_flush();