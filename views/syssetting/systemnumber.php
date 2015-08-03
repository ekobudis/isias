<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 27 /07 /15
 * Time: 15.12
 */


ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.ProgramParameters.php';
include_once '/Applications/MAMP/htdocs/isias/classes/paginator.class.php';

$data = new ProgramParameters();

$stmt = $data->CountAll();
$num_rows=$stmt->rowCount();

if ($num_rows>0){
    $pages = new Paginator($num_rows, 19);

    if(isset($_POST['cari'])){
        $cari = $_POST['cari'];
        $stmt = $data->GetAutonumberParameters($pages->limit_start, $pages->limit_end);
    }
    else{
        $stmt = $data->GetAutonumberParameters($pages->limit_start, $pages->limit_end);
    }
}

$page = isset($_GET['p']) ? $_GET['p'] : null;

switch ($page) {
    default:
        echo "
        <div class='box box-info'>
            <div class='box-body'>
                <div class='table-responsive'>
                    <table class='table no-margin'>
                        <thead>
                        <tr>
                            <th style='width:110px'>ID Program</th>
                            <th style='width:220px'>Nama Module</th>
                            <th style='width:200px'>Format Penomoran</th>
                            <th style='width:120px'>Ganti Saat</th>
                            <th style='width:100px'>Panjang</th>
                            <th style='width:80px'>Status</th>
                            <th style='width:40px'></th>
                        </tr>
                        </thead>
                        <tbody id='pageData'>";

                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            extract($row);
                            echo "<tr>
                                    <td>{$idprog}</td>
                                    <td>{$menu_name}</td>
                                    <td>{$formatno}</td>
                                    <td>{$change_no}</td>
                                    <td>{$panjang}</td>";
                            if($active=='0'){
                                echo "<td>Actived</td>";
                            }else{
                                echo "<td>Suspended</td>";
                            }
                            echo"<td style='text-align:center;width:160px'>
                                    <a class='btn btn-xs btn-warning' href='?m=140&p=change&id={$prg_pk}'><i class='glyphicon glyphicon-pencil'></i></a>
                                    <a></a>
                                    <a class='btn btn-xs btn-danger' href='javascript:;' data-id='{$prg_pk}' data-toggle='modal' data-target='#modal-konfirmasi'>
                                    <span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
                                </td>";
                            echo "</tr>";
                        }
                    echo "
                        </tbody>
                    </table>";

        if($num_rows>0){
            echo"<div class='container'>
                    <ul class='pagination pagination-sm'>";
            echo $pages->display_pages();
            echo "</ul>
                </div>";
        }
        echo "
                </div>
            </div>
        </div>"; 
        break;
    case "change":
        $pk=$_GET['id'];
        $n_stmt = $data->GetAutonumberParametersByID($pk);
        while ($r = $n_stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($r);
            echo "
        <div class='box box-info'>
            <div class='box-body'>
                <div class='row'>
                    <form class='form-horizontal' role='form' method='post' action='classes/crud_autonumber.php'>
                        <div class='col-md-12'>
                            <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span>Required Field</strong></div>
                            <div class='row'>
                                <input type='hidden' class='form-control col-md-4' id='kode' name='kode' value=$pk >
                                <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <label>ID Program</label>
                                    <div class='input-group'>
                                        <input type='text' class='form-control' id='idprog' name='idprog' value='{$idprog}' disabled placeholder='ID Program...' required>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-8 col-md-8'>
                                    <label>Nama Module</label>
                                    <div class='input-group'>
                                        <input type='text' class='form-control' id='menu_name' name='menu_name' value='{$menu_name}' placeholder='Nama Module...' required>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <label>Format Penomoran</label>
                                    <div class='input-group'>
                                        <input type='text' class='form-control' id='format_no' name='format_no' value='{$formatno}' placeholder='Format Penomoran...' required>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <label>Perubahan Nomor</label>
                                    <div class='input-group'>
                                        <input type='text' class='form-control' id='change_no' name='change_no' value='{$change_no}' placeholder='Perubahan Nomor...' required>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <label>Panjang Nomor</label>
                                    <div class='input-group'>
                                        <input type='number' class='form-control' id='ukuran' name='ukuran' value='{$panjang}'  placeholder='Panjang Nomor...' required>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class='form-group'>
                                <div class='col-md-12'>
                                    <button type='submit' name='submit' value='Submit' class='btn btn-submit btn-info'><i class='fa fa-save'></i> Update</button>
                                    <a href='?m=149' class='btn btn-md btn-success'><i class='glyphicon glyphicon-backward'></i> &nbsp; Kembali</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>";
        }
        break;
}

?>
<!-- Delete Form -->
<div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-danger" id="hapus-true">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // Fungsi untuk pengiriman form baca dokumentasinya di https://github.com/malsup/form/
    function set_ajax(identifier){
        // kirim form dengan opsi yang telah dibuat diatas
        $("#"+identifier).ajaxForm();
    }

    $(function(){
        // Hapus
        $('#modal-konfirmasi').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            // Untuk mengambil nilai dari data-id="" yang telah kita tempatkan pada link hapus
            var id = div.data('id')
            //alert ("ID Nya adalah " + id );
            var modal = $(this)
            // Mengisi atribut href pada tombol ya yang kita berikan id hapus-true pada modal.
            modal.find('#hapus-true').attr("href","classes/crud_karyawan.php?p=del&id="+id);
        });
    });
</script>