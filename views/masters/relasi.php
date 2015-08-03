<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.Relasi.php';
include_once '/Applications/MAMP/htdocs/isias/classes/class.Kategori.php';
include_once '/Applications/MAMP/htdocs/isias/classes/paginator.class.php';
//Kategori List
$cat =new Kategori();
$n = $cat->countAll();

//Get Relation/Ledger/Vendor Data
$ldg = new Relasi();

$stmt = $ldg->countAll();
$num_rows=$stmt->rowCount();

if ($num_rows>0){
$pages = new Paginator($num_rows, 19);

if(isset($_POST['cari'])){
$cari = $_POST['cari'];
$stmt = $ldg->GetListRelasi($pages->limit_start, $pages->limit_end);
}
else{
$stmt = $ldg->GetListRelasi($pages->limit_start, $pages->limit_end);
}
}

?>

<div class="container">
    <div class="row">
        <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal" data-target="#add-Data">Relasi/Ledger Baru</a>
        <div class="input-prepend pull-right">
            <span class="add-on"><i class="icon-search"></i></span>
            <input class="span2" id="prependedInput" type="text" name="cari" placeholder="Pencarian..">

        </div>
    </div>
</div>
</br>
<!--define the table using the proper table tags, leaving the tbody tag empty -->
<div class='box box-info'>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table no-margin">
                <thead>
                <tr>
                    <th style="width:180px">Nama Ledger</th>
                    <th style="width:220px">Alamat</th>
                    <th style="width:120px">No Telepon</th>
                    <th style="width:120px">No Fax</th>
                    <th style="width:200px">Contact Person</th>
                    <th style="width:100px">Kategori</th>
                    <th style="width:100px">Status</th>
                    <th style="width:40px"></th>
                </tr>
                </thead>
                <tbody id="pageData">
                <?php
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    echo "<tr>
                                <td>{$nama}</td>
                                <td>{$alamat}</td>
                                <td>{$notelp}</td>
                                <td>{$nofax}</td>
                                <td>{$picname}</td>
                                <td>{$kategori}</td>
                                <td>{$status}</td>
                                <td style='text-align:center;width:160px'>
                                <a  class='btn btn-xs btn-warning' href='javascript:;'
                                    data-id='{$id}'
                                    data-nama='{$nama}'
                                    data-alamat='{$alamat}'
                                    data-notelp='{$notelp}'
                                    data-nofax='{$nofax}'
                                    data-kota='{$kota}'
                                    data-picname='{$picname}'
                                    data-kategori='{$kategori}'
                                    data-kategori_id='{$idkategori}'
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
<!-- HTML form for creating a product -->

<div id="add-Data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Form Relasi/Ledger</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            <form class="form-horizontal" role="form" method="post" action="classes/crud_relasi.php?p=add">
                <div class="col-md-12">
                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Nama Ledger</label>
                        <div class="input-group col-md-8">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Ledger..." required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Alamat</label>
                        <div class="input-group col-md-8">
                            <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">No Telepon</label>
                        <div class="input-group col-md-8">
                            <input type="number" class="form-control" id="notelp" name="notelp" placeholder="Nomer Telepon..." required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">No Fax</label>
                        <div class="input-group col-md-8">
                            <input type="number" class="form-control" id="nofax" name="nofax" placeholder="Nomer Faximile...">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Kota</label>
                        <div class="input-group col-md-8">
                            <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota...">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Nama PIC</label>
                        <div class="input-group col-md-8">
                            <input type="text" class="form-control" id="namapic" name="namapic" placeholder="Nama PIC/Contact Person..." required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Kategori Ledger</label>
                        <div class="input-group col-md-8">
                            <select class="form-control input-md" name="kategori_id" id="kategori_id">
                                <option value="0"> -- Pilih Salah Satu -- </option>
                                <?php
                                while ($row = $n->fetch(PDO::FETCH_ASSOC)) {
                                    // extract row
                                    // this will make $row['name'] to
                                    // just $name only
                                    extract($row);
                                    echo "<option value={$id}>{$cat_name}</option>";
                                }
                                ?>
                            </select>
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

<!-- Edit Mode -->

<div id="edit-Data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Form Relasi/Ledger</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="form-horizontal" role="form" method="post" action="classes/crud_relasi.php?p=edit">
                        <div class="col-md-12">
                            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama Ledger</label>
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Ledger..." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Alamat</label>
                                <div class="input-group col-md-8">
                                    <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">No Telepon</label>
                                <div class="input-group col-md-8">
                                    <input type="number" class="form-control" id="notelp" name="notelp" placeholder="Nomer Telepon..." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">No Fax</label>
                                <div class="input-group col-md-8">
                                    <input type="number" class="form-control" id="nofax" name="nofax" placeholder="Nomer Faximile...">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Kota</label>
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota...">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama PIC</label>
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" id="namapic" name="namapic" placeholder="Nama PIC/Contact Person..." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Kategori Ledger</label>
                                <div class="input-group col-md-8">
                                    <select class="form-control input-md" name="kategori_id" id="kategori_id">
                                        <option value="0"> -- Pilih Salah Satu -- </option>
                                        <?php
                                        while ($row = $n->fetch(PDO::FETCH_ASSOC)) {
                                            // extract row
                                            // this will make $row['name'] to
                                            // just $name only
                                            extract($row);
                                            echo "<option value={$id}>{$cat_name}</option>";
                                        }
                                        ?>
                                    </select>
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
            modal.find('#hapus-true').attr("href","classes/crud_relasi.php?p=del&id="+id);

        });
        // Untuk sunting
        $('#edit-Data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

            var id 		    = div.data('id');
            var nama     = div.data('nama');
            var alamat   = div.data('alamat');
            var notelp    = div.data('notelp');
            var nofax = div.data('nofax');
            var kota    = div.data('kota');
            var namapic   = div.data('picname');
            var kategori_id    = div.data('kategori_id');

            var modal 	= $(this)

            // Membuat combobox terpilih berdasarkan jenis kelamin yg tersimpan saat pengeditan
            modal.find('#kajur option').each(function(){
                if ($(this).val() == kajur )
                    $(this).attr("selected","selected");
            });

            // Isi nilai pada field
            modal.find('#id').attr("value",id);
            modal.find('#nama').attr("value",nama);
            modal.find('#alamat').attr("value",alamat);
            modal.find('#notelp').attr("value",notelp);
            modal.find('#nofax').attr("value",nofax);
            modal.find('#kota').attr("value",kota);
            modal.find('#namapic').attr("value",namapic);
            modal.find('#kategori_id').attr("value",kategori_id);
        });

    });

</script>