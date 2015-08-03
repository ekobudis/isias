<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.Akuns.php';
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

<!-- HTML form for creating a coa -->
<div id="add-Data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Form Kode Akun</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="form-horizontal" role="form" method="post" action="classes/crud_coas.php?p=add">
                        <div class="col-sm-12">
                            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                            <div class="form-group">
                                <label for="tipeakun" class="col-md-3 control-label">Tipe Akun</label>
                                <div class="input-group col-md-8">
                                    <select class="form-control input-md" name="tipe" id="tipe">
                                        <option value="0"> -- Pilih Salah Satu -- </option>
                                        <option value="1">Kas & Bank</option>
                                        <option value="2">Piutang Usaha</option>
                                        <option value="3">Piutang Non Usaha</option>
                                        <option value="4">Persediaan</option>
                                        <option value="5">Pekerjaan Dalam Proses</option>
                                        <option value="6">Aktiva Lancar Lainnya</option>
                                        <option value="7">Aktiva Tetap</option>
                                        <option value="8">Akumulasi Depresiasi</option>
                                        <option value="9">Hutang Usaha</option>
                                        <option value="10">Hutang Non Usaha</option>
                                        <option value="11">Hutang Pajak</option>
                                        <option value="12">Pendapatan Diterima Dimuka</option>
                                        <option value="13">Hutang Lancar Lainnya</option>
                                        <option value="14">Hutang Jangka Panjang</option>
                                        <option value="15">Modal</option>
                                        <option value="16">Pendapatan</option>
                                        <option value="17">Harga Pokok Penjualan</option>
                                        <option value="18">Biaya</option>
                                        <option value="19">Pendapatan Lain-Lain</option>
                                        <option value="20">Biaya Lain-Lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="subakun" class="col-md-3 control-label">Sub Akun</label>
                                <div class="col-md-8" >
                                    <select name="subakun" id="subakun" class="form-control input-md" >
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="noakun" class="col-md-3 control-label">No Akun</label>
                                <div class="input-group col-md-6">
                                    <input class="form-control" type="text" name="nomer" id="nomer" placeholder="No Akun" required>
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="namaakun" class="col-md-3 control-label">Nama Akun</label>
                                <div class="input-group col-md-8">
                                    <input class="form-control input-md" type="text" id="nama" name="nama" placeholder="Nama Akun" required>
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-sm-12">
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
<!-- HTML form for Edit a coa -->
<div id="edit-Data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Kode Akun</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="form-horizontal" role="form" method="post" action="classes/crud_coas.php?p=edit" onsubmit="return alert_id();" enctype="multipart/form-data">
                        <div class="col-sm-12">
                            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="tipeakun" class="col-md-3 control-label">Tipe Akun</label>
                                <div class="input-group col-md-8">
                                    <select class="form-control input-md" name="tipe" id="tipe">
                                        <option value="0"> -- Pilih Salah Satu -- </option>
                                        <option value="1">Kas & Bank</option>
                                        <option value="2">Piutang Usaha</option>
                                        <option value="3">Piutang Non Usaha</option>
                                        <option value="4">Persediaan</option>
                                        <option value="5">Pekerjaan Dalam Proses</option>
                                        <option value="6">Aktiva Lancar Lainnya</option>
                                        <option value="7">Aktiva Tetap</option>
                                        <option value="8">Akumulasi Depresiasi</option>
                                        <option value="9">Hutang Usaha</option>
                                        <option value="10">Hutang Non Usaha</option>
                                        <option value="11">Hutang Pajak</option>
                                        <option value="12">Pendapatan Diterima Dimuka</option>
                                        <option value="13">Hutang Lancar Lainnya</option>
                                        <option value="14">Hutang Jangka Panjang</option>
                                        <option value="15">Modal</option>
                                        <option value="16">Pendapatan</option>
                                        <option value="17">Harga Pokok Penjualan</option>
                                        <option value="18">Biaya</option>
                                        <option value="19">Pendapatan Lain-Lain</option>
                                        <option value="20">Biaya Lain-Lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="subakun" class="col-md-3 control-label">Sub Akun</label>
                                <div class="col-md-8" >
                                    <select name="subakun" id="subakun" class="form-control input-md" >
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="noakun" class="col-md-3 control-label">No Akun</label>
                                <div class="input-group col-md-6">
                                    <input type="text" name="nomer" id="nomer" class="form-control" placeholder="No Akun" required>
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="namaakun" class="col-md-3 control-label">Nama Akun</label>
                                <div class="input-group col-md-8">
                                    <input type="text" id="nama"  name="nama" class="form-control input-md" placeholder="Nama Akun" required>
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-submit btn-info"><i class="fa fa-save"></i> Save</button>
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
    $(document).ready(function(){

        $('select#tipe').change(function(){
            var tipe_id=$('select#tipe option:selected').attr('value');
            var dataString = 'tipe_id='+ tipe_id;

            $.ajax
            ({
                type: "POST",
                url: "views/finaccs/sub_accounts.php",
                data: dataString,
                cache: false,
                success: function(html)
                {
                    $("#subakun").html(html);
                }
            });

        });

    });

    function alert_id(){
        if($('#subakun').val() == '')
            alert('Silahkan Pilih Induk Akun yang anda buat!');
        else
           //alert($('#subakun').val());
        return false;
    }

    // Fungsi untuk pengiriman form baca dokumentasinya di https://github.com/malsup/form/
    function set_ajax(identifier){

        /*var options = {
            beforeSend: function() {

                $(".progress-container").show();
                $(".btn-submit").attr("disabled",""); // Membuat button submit jadi tidak bisa terklik

            },
            uploadProgress: function(event, position, total, percentComplete) {

                //$(".progress-bar").attr('style','width'+percentComplete+'%');

            },
            success:function(data, textStatus, jqXHR,ui) {

                if ( data.trim() == "Sukses" ) {

                    //$(".progress-bar").attr('style','width:100%');
                    setTimeout(function(){ location.reload() }, 2000);

                } else {

                    $(".progress-container").hide();
                    $("#pesan-required-field").html(data);
                    $("#modal-peringatan").modal('show');
                    $(".btn-submit").removeAttr('disabled','');
                }

            },
            error: function(jqXHR, textStatus, errorThrown){

                $(".progress-container").hide();
                $("#pesan-required-field").html('Gagal Memproses data<br/> textStatus='+textStatus+', errorThrown='+errorThrown);
                $("#modal-peringatan").modal('show');
            }

        };*/

        // kirim form dengan opsi yang telah dibuat diatas
        $("#"+identifier).ajaxForm();
    }

    $(function(){

        // Untuk pengiriman form tambah
        //set_ajax('add-Data');

        // Untuk pengiriman form sunting
        //set_ajax('edit-Data');

        // Hapus
        $('#modal-konfirmasi').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

            // Untuk mengambil nilai dari data-id="" yang telah kita tempatkan pada link hapus
            var id = div.data('id')

            //alert ("ID Nya adalah " + id );
            var modal = $(this)

            // Mengisi atribut href pada tombol ya yang kita berikan id hapus-true pada modal.
            modal.find('#hapus-true').attr("href","classes/crud_coas.php?p=del&id="+id);

        });


        // Untuk sunting
        $('#edit-Data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

            var id 		= div.data('id');
            var acctipe = div.data('acctipe');
            var nomer 	= div.data('nomer');
            var nama 	= div.data('nama');
            var subakun = div.data('subakun');

            var modal 	= $(this)

            //alert ("Tipe Akunnya Nya adalah " + acctipe );

            // Membuat combobox terpilih berdasarkan jenis kelamin yg tersimpan saat pengeditan
            modal.find('#tipe option').each(function(){
                if ($(this).val() == acctipe )
                    $(this).attr("selected","selected");
            });

            // Isi nilai pada field
            modal.find('#id').attr("value",id);
            modal.find('#nomer').attr("value",nomer);
            modal.find('#nama').attr("value",nama);
            modal.find('#subakun').attr("value",subakun);
            modal.find('#tipe').attr("value",acctipe);

        });

    });

</script>
