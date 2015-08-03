<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.Akuns.php';

$coa  = new Akuns();

$stmt = $coa->countAll();

?>
<!-- HTML form for creating a product -->
<div class='box box-info'>
    <div class="box-body">
        <div class="row col-md-12" align="left">
            <form class="form-horizontal" role="form" method="post" action="">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="noakun" class="col-md-2 control-label" align="left">No Jurnal</label>
                        <div class="input-group col-md-3">
                            <input class="form-control" type="text" name="nojurnal" id="nojurnal" placeholder="No Jurnal" required>
                            <div class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="namaakun" class="col-md-2 control-label">Tanggal Jurnal</label>
                        <div class="input-group col-md-3">
                            <input class="form-control input-md" type="date" id="tgljurnal" name="tgljurnal" required>
                            <div class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subakun" class="col-md-2 control-label">Keterangan</label>
                        <div class="col-md-10">
                            <input class="form-control input-sm" type="text" id="keterangan" name="keterangan" required>

                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row col-sm-12">
            <button type="submit" name="submit" value="Submit" class="btn btn-submit btn-info" data-toggle="modal" data-target="#add-Data"><i class="fa fa-plus-square-o"></i></button>
            <div class="table-responsive">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th style="width:40px">#</th>
                        <th style="width:60px">No Akun</th>
                        <th style="width:180px">Nama Akun</th>
                        <th style="width:60px">Ledger</th>
                        <th style="width:120px">Debet</th>
                        <th style="width:110px">Credit</th>
                        <th style="width:110px">Memo</th>
                        <th style="width:40px"></th>
                    </tr>
                    </thead>
                    <tbody id="pageData"> <!-- Auto Refresh in here ! -->

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="add-Data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Entry Data</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="form-horizontal" role="form" method="post" action="classes/crud_jurnal.php?p=add">
                        <div class="col-sm-12">
                            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                            <div class="form-group">
                                <label for="tipeakun" class="col-md-3 control-label">Na Akun</label>
                                <div class="input-group col-md-9">
                                    <select class="form-control input-md" name="tipe" id="tipe">
                                        <option value="0" selected> -- Pilih Salah Satu -- </option>
                                        <?php
                                            $coa->getPopulateAkun('');
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="noakun" class="col-md-3 control-label">Debet</label>
                                <div class="input-group col-md-4">
                                    <input class="form-control" type="number" name="debet" id="debet" placeholder="Debet...">
                                    <div class="input-group-addon"><span class="glyphicon"></span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="namaakun" class="col-md-3 control-label">Credit</label>
                                <div class="input-group col-md-4">
                                    <input class="form-control input-md" type="number" id="credit" name="credit" placeholder="0">
                                    <div class="input-group-addon"><span class="glyphicon"></span></div>
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="subakun" class="col-md-3 control-label">Memo</label>
                                <div class="col-md-9" >
                                    <input class="form-control input-md" type="text" id="memo" name="memo" placeholder="Memo..." required>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="submit" value="Submit" class="btn btn-submit btn-info"><i class="fa fa-plus-square-o"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->
</div>