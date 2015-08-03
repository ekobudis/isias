<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 03 /07 /15
 * Time: 18.43
 */

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.Pejabat.php';
include_once '/Applications/MAMP/htdocs/isias/classes/paginator.class.php';

$pejabat  = new  Pejabat();

$stmt = $pejabat->countAll();

$num_rows=$stmt->rowCount();

if ($num_rows>0){
    $pages = new Paginator($num_rows, 19);

    if(isset($_POST['cari'])){
        $cari = $_POST['cari'];
        $stmt = $pejabat->GetListPejabat($pages->limit_start, $pages->limit_end);
    }
    else{
        $stmt = $pejabat->GetListPejabat($pages->limit_start, $pages->limit_end);
    }
}
?>
<div class="container">
    <div class="row">
        <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal" data-target="#add-Data">Pejabat Baru</a>
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
                    <th style="width:160px">Nama Pejabat</th>
                    <th style="width:180px">Keterangan</th>
                    <th style="width:180px">Pendidikan</th>
                    <th style="width:120px">Jurusan</th>
                    <th style="width:120px">No SK</th>
                    <th style="width:100px">Tgl SK</th>
                    <th style="width:100px">Tgl Pelantikan</th>
                    <th style="width:100px">Masa Tugas</th>
                    <th style="width:100px">Masa Berakhir</th>
                    <th style="width:80px">Status</th>
                    <th style="width:30px"></th>
                </tr>
                </thead>
                <tbody id="pageData">
                <?php
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    echo "<tr>
                                <td>{$nama}</td>
                                <td>{$keterangan}</td>
                                <td>{$pendidikan}</td>
                                <td>{$jurusan}</td>
                                <td>{$nosk}</td>
                                <td>{$tglsk}</td>
                                <td>{$tglpelantikan}</td>
                                <td>{$tglmulai}</td>
                                <td>{$tglselesai}</td>
                                <td>{$offstatus}</td>
                                <td style='text-align:center;width:160px'>
                                <a  class='btn btn-xs btn-warning' href='javascript:;'
                                    data-id='{$id}'
                                    data-nama='{$nama}'
                                    data-keterangan='{$keterangan}'
                                    data-pendidikan='{$idpendidikan}'
                                    data-jurusan='{$jurusan}'
                                    data-no_sk='{$nosk}'
                                    data-tgl_sk='{$tglsk}'
                                    data-tgl_pelantikan='{$tglpelantikan}'
                                    data-tgl_start='{$tglmulai}'
                                    data-tgl_end='{$tglselesai}'
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
<!-- HTML form for creating a product -->
<div id="add-Data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Form Pejabat</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="form-horizontal" role="form" method="post" action="classes/crud_pejabat.php?p=add">
                        <div class="col-md-12">
                            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama Pejabat</label>
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Pejabat..." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Keterangan</label>
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan...">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Pendidikan</label>
                                <div class="input-group col-md-8">
                                    <select class="form-control input-md" name="pendidikan" id="pendidikan">
                                        <option value="0">-- Pilih Salah Satu --</option>
                                        <option value="1">Diploma [D3]</option>
                                        <option value="2">Sarjana [S1]</option>
                                        <option value="3">Magister [S2]</option>
                                        <option value="4">Doktor [S3]</option>
                                        <option value="5">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Jurusan</label>
                                <div class="input-group col-md-6">
                                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Program Keahlian.." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">No SK Pengangkatan</label>
                                <div class="input-group col-md-6">
                                    <input type="text" class="form-control" id="no_sk" name="no_sk" placeholder="No Surat Keputusan..." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Tanggal SK</label>
                                <div class="input-group col-md-6">
                                    <input type="date" class="form-control" id="tgl_sk" name="tgl_sk" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Tgl Pelantikan</label>
                                <div class="input-group col-md-6">
                                    <input type="date" class="form-control" id="tgl_pelantikan" name="tgl_pelantikan" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Tgl Mulai Menjabat</label>
                                <div class="input-group col-md-6">
                                    <input type="date" class="form-control" id="tgl_start" name="tgl_start" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Tgl Terakhir Menjabat</label>
                                <div class="input-group col-md-6">
                                    <input type="date" class="form-control" id="tgl_end" name="tgl_end" required>
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
                <h4 class="modal-title">Form Pejabat</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="form-horizontal" role="form" method="post" action="classes/crud_pejabat.php?p=add">
                        <div class="col-md-12">
                            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama Pejabat</label>
                                <div class="input-group col-md-4">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Pejabat..." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Keterangan</label>
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan...">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Pendidikan</label>
                                <div class="input-group col-md-8">
                                    <select class="form-control input-md" name="pendidikan" id="pendidikan">
                                        <option value="0">-- Pilih Salah Satu --</option>
                                        <option value="1">Diploma [D3]</option>
                                        <option value="2">Sarjana [S1]</option>
                                        <option value="3">Magister [S2]</option>
                                        <option value="4">Doktor [S3]</option>
                                        <option value="5">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Jurusan</label>
                                <div class="input-group col-md-6">
                                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Program Keahlian.." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">No SK Pengangkatan</label>
                                <div class="input-group col-md-6">
                                    <input type="text" class="form-control" id="no_sk" name="no_sk" placeholder="No Surat Keputusan..." required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Tanggal SK</label>
                                <div class="input-group col-md-6">
                                    <input type="date" class="form-control" id="tgl_sk" name="tgl_sk" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Tgl Pelantikan</label>
                                <div class="input-group col-md-6">
                                    <input type="date" class="form-control" id="tgl_pelantikan" name="tgl_pelantikan" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Tgl Mulai Menjabat</label>
                                <div class="input-group col-md-6">
                                    <input type="date" class="form-control" id="tgl_start" name="tgl_start" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Tgl Terakhir Menjabat</label>
                                <div class="input-group col-md-6">
                                    <input type="date" class="form-control" id="tgl_end" name="tgl_end" required>
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
            var nama = div.data('nama');
            var keterangan = div.data('keterangan');
            var pendidikan 	    = div.data('pendidikan');
            var jurusan = div.data('jurusan');
            var no_sk =div.data('no_sk');
            var tgl_sk =div.data('tgl_sk');
            var tgl_pelantikan =div.data('tgl_pelantikan');
            var tgl_start =div.data('tgl_start');
            var tgl_end =div.data('tgl_end');
            var modal 	= $(this)

            // Membuat combobox terpilih berdasarkan jenis kelamin yg tersimpan saat pengeditan
            modal.find('#pendidikan option').each(function(){
                if ($(this).val() == pendidikan )
                    $(this).attr("selected","selected");
            });

            // Isi nilai pada field
            modal.find('#id').attr("value",id);
            modal.find('#nama').attr("value",nama);
            modal.find('#keterangan').attr("value",keterangan);
            modal.find('#pendidikan').attr("value",pendidikan);
            modal.find('#jurusan').attr("value",jurusan);
            modal.find('#no_sk').attr("value",no_sk);
            modal.find('#tgl_sk').attr("value",tgl_sk);
            modal.find('#tgl_pelantikan').attr("value",tgl_pelantikan);
            modal.find('#tgl_start').attr("value",tgl_start);
            modal.find('#tgl_end').attr("value",tgl_end);

        });

    });

</script>