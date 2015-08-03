<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 26 /07 /15
 * Time: 13.08
 */

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.BeliFormulir.php';
include_once '/Applications/MAMP/htdocs/isias/classes/paginator.class.php';

$data = new PembelianFormulir();

$stmt = $data->countAll();
$num_rows=$stmt->rowCount();

if ($num_rows>0){
    $pages = new Paginator($num_rows, 19);

    if(isset($_POST['cari'])){
        $cari = $_POST['cari'];
        $stmt = $data->GetListPembelianFormulir($pages->limit_start, $pages->limit_end);
    }
    else{
        $stmt = $data->GetListPembelianFormulir($pages->limit_start, $pages->limit_end);
    }
}

$page = isset($_GET['p']) ? $_GET['p'] : null;

switch ($page) {
    default:
        echo "
        <div class='container'>
            <div class='row'>
                <input class='btn btn-info' onclick=\"window.location.href='?m=020&p=new';\" value='Formulir Baru'></input>
                <div class='input-prepend pull-right'>
                    <span class='add-on'><i class='icon-search'></i></span>
                    <input class='span2' id='prependedInput' type='text' name='cari' placeholder='Pencarian..'>

                </div>
            </div>
        </div>
        </br>
        <div class='box box-info'>
            <div class='box-body'>
                <div class='table-responsive'>
                    <table class='table no-margin'>
                        <thead>
                        <tr>
                            <th style='width:220px'>Tahun Angkatan</th>
                            <th style='width:80px'>Status</th>
                            <th style='width:40px'></th>
                        </tr>
                        </thead>
                        <tbody id='pageData'>";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            echo "<tr>
                                        <td>{$thn_angkatan}</td>";
            if($status=='Y'){
                echo "<td>Actived</td>";
            }else{
                echo "<td>Suspended</td>";
            }
            echo"<td style='text-align:center;width:160px'>
                                        <a  class='btn btn-xs btn-warning' href='javascript:;'
                                            data-id='{$id}'
                                            data-tahunangkatan='{$thn_angkatan}'
                                            data-status='{$status}'
                                            data-toggle='modal' data-target='#edit-Data'>
                                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                                        </a>
                                        <a></a>
                                        <a class='btn btn-xs btn-danger' href='javascript:;' data-id='{$id}' data-toggle='modal' data-target='#modal-konfirmasi'>
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
    case "new":
        //add new tahun ajaran
        echo "
        <div class='box box-info'>
            <div class='box-body'>
                <div class='row'>
                    <form class='form-horizontal' role='form' method='post' action='classes/crud_beliformulir.php?p=add'>
                        <div class='col-md-12'>
                            <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span>Required Field</strong></div>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <label>Tahun Angkatan</label>
                                    <div class='input-group'>
                                        <select class='form-control col-md-3' name='semester_open' id='semester_open'>
                                            <option value='0'> Pilih Tahun Angkatan </option>
                                            <option value='1'>2014</option>
                                            <option value='2'>2015-2016</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <label>Token Registrasi Anda</label>
                                    <div class='input-group'>

                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <label>Nama</label>
                                    <div class='input-group'>
                                        <input type='text' class='form-control' id='nama_reg' name='nama_reg' placeholder='Nama Calon Siswa...' required>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <label>No Telepon</label>
                                    <div class='input-group'>
                                        <input type='text' class='form-control' id='no_telp' name='no_telp' placeholder='No Telepon...' required>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <label>Email</label>
                                    <div class='input-group'>
                                        <span class='input-group-addon'>@</span>
                                        <input type='email' class='form-control' name='email' placeholder='Alamat Email...' required>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-12 col-md-12'>
                                    <label>Keterangan</label>
                                    <div class='input-group'>
                                        <textarea name='keterangan' id='keterangan' class='form-control' rows='3'></textarea>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-star-empty'></span></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class='form-group'>
                                <div class='col-md-10'>
                                    <button type='submit' name='submit' value='Submit' class='btn btn-submit btn-info'><i class='fa fa-save'></i> Save</button>
                                    <a href='?m=144' class='btn btn-md btn-success'><i class='glyphicon glyphicon-backward'></i> &nbsp; Kembali</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>";
        break;
    case "change":
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