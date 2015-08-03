<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.Jurusans.php';
include_once '/Applications/MAMP/htdocs/isias/classes/class.Pejabat.php';
include_once '/Applications/MAMP/htdocs/isias/classes/paginator.class.php';

$pjbt = new Pejabat();
$n = $pjbt->countAll();

$jurusan  = new Jurusans();

$stmt = $jurusan->countAll();

$num_rows=$stmt->rowCount();

if ($num_rows>0){
    $pages = new Paginator($num_rows, 19);

    if(isset($_POST['cari'])){
        $cari = $_POST['cari'];
        $stmt = $jurusan->GetListJurusan($pages->limit_start, $pages->limit_end);
    }
    else{
        $stmt = $jurusan->GetListJurusan($pages->limit_start, $pages->limit_end);
    }
}
?>
<div class="container">
    <div class="row">
        <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal" data-target="#add-Data">Jurusan Baru</a>
        <div class="input-prepend pull-right">
            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            <input class="form-control input-sm pull-right col-md-3" type="text" name="cari" placeholder="Cari...">
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
                    <th style="width:180px">Nama Jurusan</th>
                    <th style="width:120px">Bidang Keahlian</th>
                    <th style="width:120px">Kompetensi</th>
                    <th style="width:100px">Spesial</th>
                    <th style="width:180px">Kepala Jurusan</th>
                    <th style="width:80px">No Telp</th>
                    <th style="width:80px">No Fax</th>
                    <th style="width:120px">Keterangan</th>
                    <th style="width:100px">Status</th>
                    <th style="width:40px"></th>
                </tr>
                </thead>
                <tbody id="pageData">
                <?php
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    echo "<tr>
                                <td>{$kode}</td>
                                <td>{$namajurusan}</td>
                                <td>{$bidangkeahlian}</td>
                                <td>{$kompetensi}</td>
                                <td>{$spesial}</td>
                                <td>{$kajur}</td>
                                <td>{$notelp}</td>
                                <td>{$nofax}</td>
                                <td>{$keterangan}</td>
                                <td>{$status}</td>
                                <td style='text-align:center;width:160px'>
                                <a  class='btn btn-xs btn-warning' href='javascript:;'
                                    data-id='{$id}'
                                    data-kode_jur='{$kode}'
                                    data-nama_jur='{$namajurusan}'
                                    data-keahlian='{$bidangkeahlian}'
                                    data-kompetisi='{$kompetensi}'
                                    data-spesial='{$spesial}'
                                    data-kajur='{$id_kajur}'
                                    data-no_telp='{$notelp}'
                                    data-no_fax='{$nofax}'
                                    data-keterangan='{$keterangan}'
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
        <h4 class="modal-title">Form Jurusan</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            <form class="form-horizontal" role="form" method="post" action="classes/crud_jurusan.php?p=add">
                <div class="col-md-12">
                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Kode Jurusan</label>
                        <div class="input-group col-md-6">
                            <input type="text" class="form-control" name="kode_jur" id="kode_jur" placeholder="Kode Jurusan.." required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Nama Jurusan</label>
                        <div class="input-group col-md-8">
                            <input type="text" class="form-control" id="nama_jur" name="nama_jur" placeholder="Nama Jurusan..." required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Bidang Keahlian</label>
                        <div class="input-group col-md-8">
                            <input type="text" name="keahlian" id="keahlian" class="form-control" placeholder="Bidang Keahlian..." required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Kompetensi</label>
                        <div class="input-group col-md-8">
                            <input type="text" class="form-control" id="kompetisi" name="kompetisi" placeholder="Kompetensi..">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Kompetensi Spesial</label>
                        <div class="input-group col-md-8">
                            <input type="text" class="form-control" id="spesial" name="spesial" placeholder="Kompetensi Spesial..">
                            <span class="input-group-addon"><span class="glyphicon"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Kepala Jurusan</label>
                        <div class="input-group col-md-8">
                            <select class="form-control input-md" name="kajur" id="kajur">
                                <option value="0"> -- Pilih Salah Satu -- </option>
                                <?php
                                while ($row = $n->fetch(PDO::FETCH_ASSOC)) {
                                    // extract row
                                    // this will make $row['name'] to
                                    // just $name only
                                    extract($row);
                                    echo "<option value={$id}>{$nama}</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">No Telepon</label>
                        <div class="input-group col-md-6">
                            <input type="number" class="form-control" id="no_telp" name="no_telp" >
                            <span class="input-group-addon"><span class="glyphicon "></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">No Fax</label>
                        <div class="input-group col-md-6">
                            <input type="number" class="form-control" id="no_fax" name="no_fax" >
                            <span class="input-group-addon"><span class="glyphicon"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Keterangan</label>
                        <div class="input-group col-md-8">
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
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
<!-- Edit Tag here --?>
<!-- HTML form for creating a product -->
<div id="edit-Data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Form Jurusan</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="form-horizontal" role="form" method="post" action="classes/crud_jurusan.php?p=edit">
                        <div class="col-md-12">
                            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label class="control-label col-md-4">Kode Jurusan</label>
                                <div class="input-group col-md-6">
                                    <input type="text" class="form-control" name="kode_jur" id="kode_jur" placeholder="Kode Jurusan.." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama Jurusan</label>
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" id="nama_jur" name="nama_jur" placeholder="Nama Jurusan..." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Bidang Keahlian</label>
                                <div class="input-group col-md-8">
                                    <input type="text" name="keahlian" id="keahlian" class="form-control" placeholder="Bidang Keahlian..." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Kompetensi</label>
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" id="kompetisi" name="kompetisi" placeholder="Kompetensi..">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Kompetensi Spesial</label>
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" id="spesial" name="spesial" placeholder="Kompetensi Spesial..">
                                    <span class="input-group-addon"><span class="glyphicon"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Kepala Jurusan</label>
                                <div class="input-group col-md-8">
                                    <select class="form-control input-md" name="kajur" id="kajur">
                                        <option value="0"> -- Pilih Salah Satu -- </option>
                                        <?php
                                        while ($row = $n->fetch(PDO::FETCH_ASSOC)) {
                                            // extract row
                                            // this will make $row['name'] to
                                            // just $name only
                                            extract($row);
                                            echo "<option value={$id}>{$nama}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">No Telepon</label>
                                <div class="input-group col-md-6">
                                    <input type="number" class="form-control" id="no_telp" name="no_telp" >
                                    <span class="input-group-addon"><span class="glyphicon "></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">No Fax</label>
                                <div class="input-group col-md-6">
                                    <input type="number" class="form-control" id="no_fax" name="no_fax" >
                                    <span class="input-group-addon"><span class="glyphicon"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Keterangan</label>
                                <div class="input-group col-md-8">
                                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
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
            modal.find('#hapus-true').attr("href","classes/crud_jurusan.php?p=del&id="+id);

        });
        // Untuk sunting
        $('#edit-Data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

            var id 		    = div.data('id');
            var kode     = div.data('kode_jur');
            var nama   = div.data('nama_jur');
            var keahlian    = div.data('keahlian');
            var kompetisi = div.data('kompetisi');
            var spesial    = div.data('spesial');
            var kajur   = div.data('kajur');
            var notelp    = div.data('no_telp');
            var nofax = div.data('no_fax');
            var keterangan    = div.data('keterangan');

            var modal 	= $(this)

            // Membuat combobox terpilih berdasarkan jenis kelamin yg tersimpan saat pengeditan
            modal.find('#kajur option').each(function(){
                if ($(this).val() == kajur )
                    $(this).attr("selected","selected");
            });

            // Isi nilai pada field
            modal.find('#id').attr("value",id);
            modal.find('#kode_jur').attr("value",kode);
            modal.find('#nama_jur').attr("value",nama);
            modal.find('#keahlian').attr("value",keahlian);
            modal.find('#kompetisi').attr("value",kompetisi);
            modal.find('#spesial').attr("value",spesial);
            modal.find('#kajur').attr("value",kajur);
            modal.find('#no_telp').attr("value",notelp);
            modal.find('#no_fax').attr("value",nofax);
            modal.find('#keterangan').attr("value",keterangan);
        });

    });

</script>