<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once ('classes/class.Akuns.php');

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$records_per_page = 25;

$from_record_num = ($records_per_page * $page) - $records_per_page;

$list = new Akuns();
$stmt = $list->GetListAkuns($page, $from_record_num, $records_per_page);

$num=$stmt->rowCount();

?>


<a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Akun Baru</a><br>
<!--define the table using the proper table tags, leaving the tbody tag empty -->
<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th style="width:60px">No Akun</th>
            <th style="width:180px">Nama Akun</th>
            <th style="width:60px">Sub Akun</th>
            <th style="width:120px">Tipe Akun</th>
            <th style="width:60px">Status Akun</th>
            <th style="width:40px"></th>
        </tr>
    </thead>
    <tbody>
    <?php

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            echo "<tr>";
            echo "<td>{$acc_no}</td>";
            echo "<td>{$acc_name}</td>";
            echo "<td>{$sub_acc_no}</td>";
            echo "<td>{$typeakun}</td>";
            echo "<td style='text-align:center;'>
                <a class='btn btn-warning btn-sm' href='' role='button'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
                <a class='btn btn-danger btn-sm' href='' role='button'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
                  </td>
            </td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>

<?php
    $page_dom = "main.php?m=071";
    include 'views/paging.inc.php';
?>

<!-- HTML form for creating a product -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            <select class="form-control input-md" name="tipeakun" id="tipeakun">
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
                    <div class="form-group">
                        <label for="noakun" class="col-md-3 control-label">No Akun</label>
                        <div class="input-group col-md-6">
                            <input class="form-control" type="text" name="noakun" id="noakun" placeholder="No Akun" required>
                            <div class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="namaakun" class="col-md-3 control-label">Nama Akun</label>
                        <div class="input-group col-md-8">
                            <input class="form-control input-md" type="text" id="namaakun" name="namaakun" placeholder="Nama Akun" required>
                            <div class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subakun" class="col-md-3 control-label">Sub Akun</label>
                        <div class="col-md-8">
                            <select class="form-control input-md" name="sub_akun" id="sub_akun">
                                
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary pull-right">Save</button>
                        </div>
                    </div>
                </div>
            </form>        
        </div>
    </div><!-- End of Modal content -->
    </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->
</div>
