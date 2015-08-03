<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 25 /07 /15
 * Time: 10.54
 */

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.Yayasan.php';
include_once '/Applications/MAMP/htdocs/isias/classes/class.Jabatan.php';
include_once '/Applications/MAMP/htdocs/isias/classes/paginator.class.php';

$yayasan = new Yayasan();
$y = $yayasan->getYayasan();

$jbtan = new Jabatan();

$stmt = $jbtan->countAll();
$num_rows=$stmt->rowCount();

if ($num_rows>0){
    $pages = new Paginator($num_rows, 19);

    if(isset($_POST['cari'])){
        $cari = $_POST['cari'];
        $stmt = $jbtan->GetListJabatan($pages->limit_start, $pages->limit_end);
    }
    else{
        $stmt = $jbtan->GetListJabatan($pages->limit_start, $pages->limit_end);
    }
}

?>
<div class="container">
    <div class="row">
        <a href="#myModal" role="button" class="btn btn-info btn-plus" data-toggle="modal" data-target="#add-Data">Jabatan Baru</a>
        <div class="input-prepend pull-right">
            <span class="add-on"><i class="icon-search"></i></span>
            <input class="span2" id="prependedInput" type="text" name="cari" placeholder="Pencarian..">

        </div>
    </div>
</div>
<!-- Table Content -->
</br>
<div class='box box-info'>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table no-margin">
                <thead>
                <tr>
                    <th style="width:220px">Nama Yayasan</th>
                    <th style="width:220px">Nama Jabatan</th>
                    <th style="width:320px">Memo</th>
                    <th style="width:80px">Status</th>
                    <th style="width:40px"></th>
                </tr>
                </thead>
                <tbody id="pageData">
                <?php
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    echo "<tr>
                            <td>{$nama_yayasan}</td>
                            <td>{$nama_jabatan}</td>
                            <td>{$memo_jabatan}</td>";
                    if($status_jabatan==0){
                        echo "<td>Actived</td>";
                    }else{
                        echo "<td>Suspended</td>";
                    }
                    echo"<td style='text-align:center;width:160px'>
                                <a  class='btn btn-xs btn-warning' href='javascript:;'
                                    data-id='{$id}'
                                    data-nama='{$nama_yayasan}'
                                    data-jabatan='{$nama_jabatan}'
                                    data-memo='{$memo_jabatan}'
                                    data-status='{$status_jabatan}'
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
            if($num_rows>0){
                echo"<div class='container'>
                            <ul class='pagination pagination-sm'>";
                echo $pages->display_pages();
                echo "</ul>
                    </div>";
            }
            ?>
        </div>
    </div>
</div>
<!-- End of Table Content -->

<!-- HTML form for creating a room -->
<div id="add-Data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Form Jabatan</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="form-horizontal" role="form" method="post" action="classes/crud_jabatan.php?p=add">
                        <div class="col-md-12">
                            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama Yayasan</label>
                                <div class="input-group col-md-8">
                                    <select name="nama" id="nama" class="form-control input-md">
                                        <?php
                                            while ($n = $y->fetch(PDO::FETCH_ASSOC)){
                                                extract($n);
                                                echo "<option value='{$id}'>{$nama_yayasan}</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama Jabatan</label>
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Nama Jabatan..." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Memo</label>
                                <div class="input-group col-md-8">
                                    <textarea class="form-control" name="memo" id="memo" rows="3" placeholder="Memo Jabatan..."></textarea>
                                    <span class="input-group-addon"><span class="glyphicon"></span></span>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" name="submit" value="Submit" class="btn btn-submit btn-info"><i class="fa fa-save"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->
</div>
<!-- Edit Record -->
<div id="edit-Data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Form Jabatan</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="form-horizontal" role="form" method="post" action="classes/crud_jabatan.php?p=edit">
                        <div class="col-md-12">
                            <input type="hidden" name="id" id="id"/>
                            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama Yayasan</label>
                                <div class="input-group col-md-8">
                                    <select name="nama" id="nama" class="form-control input-md">
                                        <?php
                                        while ($n = $y->fetch(PDO::FETCH_ASSOC)){
                                            extract($n);
                                            echo "<option value='{$id}'>{$nama_yayasan}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama Jabatan</label>
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Nama Jabatan..." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Memo</label>
                                <div class="input-group col-md-8">
                                    <textarea class="form-control" name="memo" id="memo" rows="3" placeholder="Memo Jabatan..."></textarea>
                                    <span class="input-group-addon"><span class="glyphicon"></span></span>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" name="submit" value="Submit" class="btn btn-submit btn-info"><i class="fa fa-save"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->
</div>
<!-- End Edit Form -->
<!-- modal konfirmasi-->
<div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Konfirmasi</h4>
            </div>

            <div class="modal-body" style="background:#d9534f;color:#fff">
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
            modal.find('#hapus-true').attr("href","classes/crud_jabatan.php?p=del&id="+id);

        });
        // Untuk sunting
        $('#edit-Data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

            var id 		        = div.data('id');
            //var nama            = div.data('nama');
            var jabatan         = div.data('jabatan');
            var memo            = div.data('memo');
            var status          = div.data('status');

            var modal 	= $(this)

            modal.find('#nama option').each(function(){
                if ($(this).val() == status )
                    $(this).attr("nama","selected");
            });

            // Isi nilai pada field
            modal.find('#id').attr("value",id);
            //modal.find('#nama').attr("value",nama);
            modal.find('#jabatan').attr("value",jabatan);
            modal.find('#memo').attr("value",memo);
            //modal.find('#status').attr("value",status);

        });

    });

</script>