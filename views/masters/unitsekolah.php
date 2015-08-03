<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 26 /07 /15
 * Time: 00.23
 */
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.UnitSekolah.php';
include_once '/Applications/MAMP/htdocs/isias/classes/class.Identitas.php';
include_once '/Applications/MAMP/htdocs/isias/classes/paginator.class.php';

$unit = new UnitSekolah();

$stmt= $unit->countAll();

$num_rows=$stmt->rowCount();

if ($num_rows>0){
    $pages = new Paginator($num_rows, 19);

    if(isset($_POST['cari'])){
        $cari = $_POST['cari'];
        $stmt = $unit->GetListUnitSekolah($pages->limit_start, $pages->limit_end);
    }
    else{
        $stmt = $unit->GetListUnitSekolah($pages->limit_start, $pages->limit_end);
    }
}

$info = new Identitas();
$stmt_info = $info->getIdentitas();

$page = isset($_GET['p']) ? $_GET['p'] : null;

switch ($page){
    default:
        echo "<div class='container'>
                <div class='row'>
                    <input class='btn btn-info' onclick=\"window.location.href='?m=005&p=new';\" value='Unit Sekolah Baru'></input>
                </div>
            </div>";
        //<!-- Table Content -->
        echo "</br>
            <div class='box box-info'>
                <div class='box-header'>
                    <h3 class='box-title'>Daftar Unit Sekolah</h3>
                    <div class='box-tools'>
                        <div class='input-group' style='width: 150px;'>
                          <input type='text' name='table_search' class='form-control input-sm pull-right' placeholder='Search' />
                          <div class='input-group-btn'>
                            <button class='btn btn-sm btn-default'><i class='fa fa-search'></i></button>
                          </div>
                        </div>
                    </div>
                </div>
                <div class='box-body table-responsive'>
                    <table class='table no-margin'>
                        <thead>
                        <tr>
                            <th style='width:240px'>Nama Sekolah</th>
                            <th style='width:100px'>Unit</th>
                            <th style='width:120px'>Keterangan</th>
                            <th style='width:70px'>Status</th>
                            <th style='width:40px'></th>
                        </tr>
                        </thead>
                        <tbody id='pageData'>";
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    extract($row);
                    echo "<tr>
                            <td>{$nama_sekolah}</td>
                            <td>{$unit_name}</td>
                            <td>{$unit_desc}</td>";
                        if ($unit_status==1){
                            echo "<td>Suspended</td>";
                        }else{
                            echo "<td>Actived</td>";
                        }
                      echo "<td style='text-align:center;width:160px'>
                                <a class='btn btn-xs btn-warning' href='?m=005&p=change&id={$id}'><i class='glyphicon glyphicon-pencil'></i></a>
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
            </div>";
        //<!-- End of Table Content -->
        break;
    case "new":
        //add focus
        echo "
        <div class='box box-info'>
            <div class='box-body'>
                <div class='row'>
                    <form class='form-horizontal' role='form' method='post' action='classes/crud_unitsekolah.php?p=add'>
                        <div class='col-md-12'>
                            <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span>Required Field</strong></div>
                            <div class='form-group'>
                                <label class='control-label col-md-3'>Nama Sekolah</label>
                                <div class='input-group col-md-8'>
                                    <select name='nama' id='nama' class='form-control input-md'>";
                                        while ($n = $stmt_info->fetch(PDO::FETCH_ASSOC)){
                                            extract($n);
                                            echo "<option value='{$id}'>{$school_name}</option>";
                                        }
                                    echo "
                                    </select>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='control-label col-md-3'>Unit Sekolah</label>
                                <div class='input-group col-md-3'>
                                    <input type='text' class='form-control' id='unitname' name='unitname' placeholder='Nama Unit Sekolah..' required>
                                    <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='control-label col-md-3'>Keterangan</label>
                                <div class='input-group col-md-8'>
                                    <textarea name='keterangan' id='keterangan' class='form-control' rows='3' required></textarea>
                                    <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                </div>
                            </div>
                            <br>
                            <div class='form-group'>
                                <div class='col-md-12'>
                                    <button type='submit' name='submit' value='Submit' class='btn btn-submit btn-info'><i class='fa fa-save'></i> Save</button>
                                    <a href='?m=005' class='btn btn-md btn-success'><i class='glyphicon glyphicon-backward'></i> &nbsp; Kembali</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>";
        break;

    case "change":
        //Change Unit Sekolah
        $unit = new UnitSekolah();

        $pk=$_GET['id'];

        $stmt = $unit->GetByID($pk);

        while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo
            "<div class='box box-info'>
                <div class='box-body'>
                    <div class='row'>
                        <form class='form-horizontal' role='form' method='post' action='classes/crud_unitsekolah.php?p=edit'>
                            <div class='col-md-12'>
                                <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span>Required Field</strong></div>
                                <input type='hidden' id='kode' name='kode' value='$r[id]'/>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Nama Sekolah</label>
                                    <div class='input-group col-md-8'>
                                        <select name='nama' id='nama' class='form-control input-md'>";
                                            while ($n = $stmt_info->fetch(PDO::FETCH_ASSOC)){
                                                extract($n);
                                                echo "<option value='{$id}'>{$school_name}</option>";
                                            }
                                            echo "
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Unit Sekolah</label>
                                    <div class='input-group col-md-3'>
                                        <input type='text' class='form-control' id='unitname' name='unitname' value='$r[unit_name]' placeholder='Nama Unit Sekolah..' required>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Keterangan</label>
                                    <div class='input-group col-md-8'>
                                        <textarea name='keterangan' id='keterangan' class='form-control' rows='3' required>$r[unit_desc]</textarea>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                                <br>
                                <div class='form-group'>
                                    <div class='col-md-12'>
                                        <button type='submit' name='submit' value='Submit' class='btn btn-submit btn-info'><i class='fa fa-save'></i> Update</button>
                                        <a href='?m=005' class='btn btn-md btn-success'><i class='glyphicon glyphicon-backward'></i> &nbsp; Kembali</a>
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