<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 14 /07 /15
 * Time: 23.41
 */

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.Siswa.php';
include_once '/Applications/MAMP/htdocs/isias/classes/paginator.class.php';

$coa  = new Akuns();

$stmt = $coa->countAll();

$num_rows=$stmt->rowCount();

$pages = new Paginator($num_rows, 19);

if(isset($_POST['cari'])){
    $cari = $_POST['cari'];
    $stmt = $coa->GetListAkuns($cari,$pages->limit_start, $pages->limit_end);
}
else{
    $stmt = $coa->GetListAkuns('',$pages->limit_start, $pages->limit_end);
}

?>

<div class="container">
    <div class="row">
        <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal" data-target="#add-Data">Akun Baru</a>
        <div class="input-prepend pull-right">
            <span class="add-on"><i class="icon-search"></i></span>
            <input class="span2" id="prependedInput" type="text" name="cari" placeholder="Pencarian..">

        </div>
    </div>
</div>
<!--define the table using the proper table tags, leaving the tbody tag empty -->
</br>
<div class='box box-info'>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table no-margin">
                <thead>
                <tr>
                    <th style="width:60px">No Akun</th>
                    <th style="width:180px">Nama Akun</th>
                    <th style="width:60px">Group</th>
                    <th style="width:120px">Tipe Akun</th>
                    <th style="width:110px">Status Akun</th>
                    <th style="width:40px"></th>
                </tr>
                </thead>
                <tbody id="pageData">
                <?php
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    echo "<tr>
                                <td>{$acc_no}</td>
                                <td>{$acc_name}</td>
                                <td>{$sub_acc_no}</td>
                                <td>{$typeakun}</td>
                                <td>{$status}</td>
                                <td style='text-align:center;width:160px'>
                                <a  class='btn btn-xs btn-warning' href='javascript:;'
                                    data-id='{$id}'
                                    data-nomer='{$acc_no}'
                                    data-nama='{$acc_name}'
                                    data-subakun='{$sub_acc_no}'
                                    data-acctipe='{$acc_type}'
                                    data-toggle='modal' data-target='#edit-Data'>
                                    <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                                </a>
                                <a class='btn btn-xs btn-danger' href='javascript:;' data-id='{$id}' data-toggle='modal' data-target='#modal-konfirmasi'>
                                <span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
                            </td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
            <?php
            echo"<div class='container'>
                    <ul class='pagination pagination-sm'>";
            echo $pages->display_pages();
            echo "</ul>
                </div>";
            ?>
        </div>
    </div>
</div>