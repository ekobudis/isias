<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.Rooms.php';
include_once '/Applications/MAMP/htdocs/isias/classes/class.Gedungs.php';
include_once '/Applications/MAMP/htdocs/isias/classes/paginator.class.php';

$build = new Gedungs();

$n= $build->ReadBuilding();

$data = new Rooms();
$stmt = $data->countAll();
$num_rows=$stmt->rowCount();

if ($num_rows>0){
    $pages = new Paginator($num_rows, 19);

    if(isset($_POST['cari'])){
        $cari = $_POST['cari'];
        $stmt = $data->GetListRooms($pages->limit_start, $pages->limit_end);
    }
    else{
        $stmt = $data->GetListRooms($pages->limit_start, $pages->limit_end);
    }
}
?>
<div class="container">
    <div class="row">
        <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal" data-target="#add-Data">Ruangan Baru</a>
        <div class="input-prepend pull-right">
            <span class="add-on"><i class="icon-search"></i></span>
            <input class="span2" id="cari" type="text" name="cari" placeholder="Pencarian...">
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
                    <th style="width:120px">Kode Ruangan</th>
                    <th style="width:180px">Keterangan</th>
                    <th style="width:180px">Gedung</th>
                    <th style="width:80px">Lantai</th>
                    <th style="width:100px">Max Siswa</th>
                    <th style="width:100px">Max Ujian</th>
                    <th style="width:80px">Status</th>
                    <th style="width:40px"></th>
                </tr>
                </thead>
                <tbody id="pageData">
                <?php
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    echo "<tr>
                            <td>{$room_no}</td>
                            <td>{$room_desc}</td>
                            <td>{$building_name}</td>
                            <td>{$building_floor}</td>
                            <td>{$room_max}</td>
                            <td>{$room_exam_max}</td>
                            <td>{$status}</td>
                            <td style='text-align:center;width:160px'>
                                <a  class='btn btn-xs btn-warning' href='javascript:;'
                                    data-id='{$id}'
                                    data-room_no='{$room_no}'
                                    data-room_desc='{$room_desc}'
                                    data-build_pk='{$building_pk}'
                                    data-build_floor='{$building_floor}'
                                    data-room_max='{$room_max}'
                                    data-room_exam='{$room_exam_max}'
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
        <h4 class="modal-title">Form Ruangan</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            <form class="form-horizontal" role="form" method="post" action="classes/crud_rooms.php?p=add">
                <div class="col-md-12">
                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Kode Ruangan</label>
                        <div class="input-group col-md-4">
                            <input type="text" class="form-control" name="room_id" id="room_id" placeholder="Kode Ruangan" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Keterangan</label>
                        <div class="input-group col-md-8">
                            <input type="text" class="form-control" name="room_desc" id="room_desc" placeholder="Keterangan" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Gedung</label>
                        <div class="input-group col-md-8">
                            <select class="form-control input-md" name="building_id" id="building_id">
                                <option value="0"> -- Pilih Salah Satu -- </option>
                                <?php
                                while ($row = $n->fetch(PDO::FETCH_ASSOC)) {
                                    // extract row
                                    // this will make $row['name'] to
                                    // just $name only
                                    extract($row);
                                    echo "<option value={$id}>{$building_name}</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Lantai Gedung</label>
                        <div class="input-group col-md-4">
                            <input type="number" class="form-control" name="floor_no" id="floor_no" placeholder="Lantai..." required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Kapasitas Ruangan</label>
                        <div class="input-group col-md-4">
                            <input type="number" class="form-control" name="kap_ruangan" id="kap_ruangan" placeholder="Kapasitas Ujian" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Kapasitas Ujian</label>
                        <div class="input-group col-md-4">
                            <input type="number" class="form-control" name="kap_ujian" id="kap_ujian" placeholder="Kapasitas Ujian" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
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
                <h4 class="modal-title">Form Ruangan</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="form-horizontal" role="form" method="post" action="classes/crud_rooms.php?p=add">
                        <div class="col-md-12">
                            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label class="control-label col-md-4">Kode Ruangan</label>
                                <div class="input-group col-md-4">
                                    <input type="text" class="form-control" name="room_id" id="room_id" placeholder="Kode Ruangan" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Keterangan</label>
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" name="room_desc" id="room_desc" placeholder="Keterangan" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Gedung</label>
                                <div class="input-group col-md-8">
                                    <select class="form-control input-md" name="building_id" id="building_id">
                                        <option value="0"> -- Pilih Salah Satu -- </option>
                                        <?php
                                        while ($row = $n->fetch(PDO::FETCH_ASSOC)) {
                                            // extract row
                                            // this will make $row['name'] to
                                            // just $name only
                                            extract($row);
                                            echo "<option value={$id}>{$building_name}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Lantai Gedung</label>
                                <div class="input-group col-md-4">
                                    <input type="number" class="form-control" name="floor_no" id="floor_no" placeholder="Lantai..." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Kapasitas Ruangan</label>
                                <div class="input-group col-md-4">
                                    <input type="number" class="form-control" name="kap_ruangan" id="kap_ruangan" placeholder="Kapasitas Ujian" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Kapasitas Ujian</label>
                                <div class="input-group col-md-4">
                                    <input type="number" class="form-control" name="kap_ujian" id="kap_ujian" placeholder="Kapasitas Ujian" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
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
            modal.find('#hapus-true').attr("href","classes/crud_rooms.php?p=del&id="+id);
        });
        // Untuk sunting
        $('#edit-Data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

            var id 		    = div.data('id');
            var room_no     = div.data('room_id');
            var room_desc   = div.data('room_desc');
            var build_pk    = div.data('building_id');
            var build_floor = div.data('floor_no');
            var room_max    = div.data('kap_ruangan');
            var room_exam   = div.data('kap_ujian');

            var modal 	= $(this)

            // Membuat combobox terpilih berdasarkan jenis kelamin yg tersimpan saat pengeditan
            modal.find('#build_pk option').each(function(){
                if ($(this).val() == build_pk )
                    $(this).attr("selected","selected");
            });
            // Isi nilai pada field
            modal.find('#id').attr("value",id);
            modal.find('#room_id').attr("value",room_no);
            modal.find('#room_desc').attr("value",room_desc);
            modal.find('#building_id').attr("value",build_pk);
            modal.find('#floor_no').attr("value",build_floor);
            modal.find('#kap_ruangan').attr("value",room_max);
            modal.find('#kap_ujian').attr("value",room_exam);
        });
    });

</script>