<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.Gedungs.php';
include_once '/Applications/MAMP/htdocs/isias/classes/paginator.class.php';

$gedung  = new  Gedungs();

$stmt = $gedung->countAll();

$num_rows=$stmt->rowCount();

$pages = new Paginator($num_rows, 19);

if(isset($_POST['cari'])){
    $cari = $_POST['cari'];
    $stmt = $gedung->GetListBuildings($pages->limit_start, $pages->limit_end);
}
else{
    $stmt = $gedung->GetListBuildings($pages->limit_start, $pages->limit_end);
}

?>
<div class="container">
    <div class="row">
        <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal" data-target="#add-Data">Gedung Baru</a>
        <div class="input-prepend pull-right">
            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            <input class="form-control input-sm pull-right" type="text" name="cari" placeholder="Cari...">
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
                    <th style="width:60px">Kode</th>
                    <th style="width:180px">Nama Gedung</th>
                    <th style="width:180px">Alamat</th>
                    <th style="width:120px">Jumlah Room</th>
                    <th style="width:110px">Status</th>
                    <th style="width:40px"></th>
                </tr>
                </thead>
                <tbody id="pageData">
                <?php
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    echo "<tr>
                                <td>{$building_id}</td>
                                <td>{$building_name}</td>
                                <td>{$building_address}</td>
                                <td>{$building_room}</td>
                                <td>";
                                if($building_status==0){
                                    echo "Active";
                                }else{
                                    echo "Suspended";
                                }
                          echo "</td>
                                <td style='text-align:center;width:160px'>
                                <a  class='btn btn-xs btn-warning' href='javascript:;'
                                    data-id='{$id}'
                                    data-kode_gedung='{$building_id}'
                                    data-nama_gedung='{$building_name}'
                                    data-alamat='{$building_address}'
                                    data-jml_ruangan='{$building_room}'
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
<!-- End of Table Content -->
<!-- HTML form for creating a product -->
<div id="add-Data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Form Gedung</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            <form class="form-horizontal" role="form" method="post" action="classes/crud_building.php?p=add">
                <div class="col-md-12">
                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Kode Gedung</label>
                        <div class="input-group col-md-4">
                            <input type="text" class="form-control" name="kode_gedung" id="kode_gedung" placeholder="Kode Gedung" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Nama Gedung</label>
                        <div class="input-group col-md-8">
                            <input type="text" class="form-control" id="nama_gedung" name="nama_gedung" placeholder="Nama Gedung" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Alamat</label>
                        <div class="input-group col-md-8">
                            <textarea name="alamat" id="alamat" class="form-control" rows="5" placeholder="Alamat Gedung" required></textarea>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Ruangan</label>
                        <div class="input-group col-md-6">
                            <input type="number" class="form-control" id="jml_ruangan" name="jml_ruangan" placeholder="Jumlah Ruangan" required>
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

<!--Edit Mode-->
<div id="edit-Data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Form Gedung</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="form-horizontal" role="form" method="post" action="classes/crud_building.php?p=edit">
                        <div class="col-md-12">
                            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Kode Gedung</label>
                                <div class="input-group col-md-4">
                                    <input type="text" class="form-control" name="kode_gedung" id="kode_gedung" placeholder="Kode Gedung" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama Gedung</label>
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" id="nama_gedung" name="nama_gedung" placeholder="Nama Gedung" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Alamat</label>
                                <div class="input-group col-md-8">
                                    <textarea name="alamat" id="alamat" class="form-control" rows="5" placeholder="Alamat Gedung" required></textarea>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Ruangan</label>
                                <div class="input-group col-md-6">
                                    <input type="number" class="form-control" id="jml_ruangan" name="jml_ruangan" placeholder="Jumlah Ruangan" required>
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
            modal.find('#hapus-true').attr("href","classes/crud_building.php?p=del&id="+id);

        });
        // Untuk sunting
        $('#edit-Data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

            var id 		    = div.data('id');
            var kode_gedung = div.data('kode_gedung');
            var nama_gedung = div.data('nama_gedung');
            var alamat 	    = div.data('alamat');
            var jml_ruangan = div.data('jml_ruangan');

            var modal 	= $(this)

            // Membuat combobox terpilih berdasarkan jenis kelamin yg tersimpan saat pengeditan
            modal.find('#tipe option').each(function(){
                if ($(this).val() == acctipe )
                    $(this).attr("selected","selected");
            });

            // Isi nilai pada field
            modal.find('#id').attr("value",id);
            modal.find('#kode_gedung').attr("value",kode_gedung);
            modal.find('#nama_gedung').attr("value",nama_gedung);
            modal.find('#alamat').attr("value",alamat);
            modal.find('#jml_ruangan').attr("value",jml_ruangan);

        });

    });

</script>