<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 17 /07 /15
 * Time: 01.54
 */

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.Karyawans.php';
include_once '/Applications/MAMP/htdocs/isias/classes/paginator.class.php';

$emp = new Karyawans();

$stmt= $emp->countAll();

$num_rows=$stmt->rowCount();

if ($num_rows>0){
    $pages = new Paginator($num_rows, 19);

    if(isset($_POST['cari'])){
        $cari = $_POST['cari'];
        $stmt = $emp->GetListEmployee($pages->limit_start, $pages->limit_end);
    }
    else{
        $stmt = $emp->GetListEmployee($pages->limit_start, $pages->limit_end);
    }
}

echo "<div class='container'>
    <div class='row'>
        <input class='btn btn-info' onclick=\"window.location.href='?m=047&p=new';\" value='PMBS Baru'></input>
        <div class='input-prepend pull-right'>
            <span class='add-on'><i class='icon-search'></i></span>
            <input class='span2' id='prependedInput' type='text' name='cari' placeholder='Pencarian..'>

        </div>
    </div>
</div>";
?>
<!-- Table Content -->
</br>
<div class='box box-info'>
    <div class='box-body'>
        <div class='table-responsive'>
            <table class='table no-margin'>
                <thead>
                <tr>
                    <th style='width:140px'>Foto</th>
                    <th style='width:80px'>ID Pendaftar</th>
                    <th style='width:140px'>Nama Pendaftar</th>
                    <th style='width:140px'>Nama Sekolah</th>
                    <th style='width:50px'>Nilai</th>
                    <th style='width:140px'>Status Pendaftaran</th>
                    <th style='width:70px'>Status</th>
                    <th style='width:40px'></th>
                </tr>
                </thead>
                <tbody id='pageData'>
                <?php
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                echo "<tr>
                    <td>{$emp_image}</td>
                    <td>{$emp_id}</td>
                    <td>{$emp_name}</td>
                    <td>{$emp_phone1}</td>
                    <td>{$emp_married}</td>
                    <td>{$emp_join_date}</td>
                    <td>{$emp_status}</td>
                    <td style='text-align:center;width:160px'>
                        <a class='btn btn-xs btn-warning' href='classes/crud_karyawan.php?p=edit&id={$id}'><i class='glyphicon glyphicon-pencil'></i></a>
                        <a  class='btn btn-xs btn-warning' href='javascript:;'
                            data-id='{$id}'
                            data-namaemp='{$emp_name}'
                            data-target='#edit-Data'>
                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                        </a>
                        <a class='btn btn-xs btn-danger' href='javascript:;' data-id='{$id}' data-toggle='modal' data-target='#modal-konfirmasi'>
                            <span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
                    </td>";
                    echo "</tr>";
                }
                echo "</tbody>
            </table>";

            if ($num_rows > 0) {
            echo "<div class='container'>
                <ul class='pagination pagination-sm'>";
                    echo $pages->display_pages();
                    echo "</ul>
            </div>";
            }
            echo "</div>
    </div>
</div>";
                ?>
//<!-- End of Table Content -->
break;
?>