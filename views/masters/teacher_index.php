
<a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Guru Baru</a>	 
<!--define the table using the proper table tags, leaving the tbody tag empty -->
<table id="grid-data" class="table table-condensed table-hover table-striped" data-toggle="bootgrid" data-ajax="true" data-url="../sekolah/apps/controllers/financeaccountings/coas/coa_reads.php">
    <thead>
        <tr>
            <th data-column-id="id" data-type="numeric" data-identifier="true">ID</th>
            <th data-column-id="acc_no">Kode Guru</th>
            <th data-column-id="acc_name" data-type="text">Nama Guru</th>
            <th data-column-id="sub_acc_no">Alamat</th>
            <th data-column-id="sub_acc_no">No Telepon</th>
            <th data-column-id="sub_acc_no">Email</th>
            <th data-column-id="sub_acc_no">Tanggal Join</th>
            <th data-column-id="status" data-type="numeric">Status Guru</th>
            <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
        </tr>
    </thead>	
</table>
<!-- HTML form for creating a product -->

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Form Guru</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            <form class="form-horizontal" role="form" method="post" action="">
                <div class="col-md-12">
                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Kode Guru</label>
                        <div class="input-group col-md-4">
                            <input type="text" class="form-control" name="kodeguru" id="kodeguru" placeholder="Kode Guru" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Nama Guru</label>
                        <div class="input-group col-md-8">
                            <input type="text" class="form-control" id="namaguru" name="namaguru" placeholder="Nama Guru" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Alamat</label>
                        <div class="input-group col-md-8">
                            <textarea name="alamat" id="alamat" class="form-control" rows="5" required></textarea>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">No Telepon</label>
                        <div class="input-group col-md-6">
                            <input type="number" class="form-control" id="notelp" name="notelp" placeholder="Nomer Telepon" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Email</label>
                        <div class="input-group col-md-6">
                            <span class="input-group-addon">@</span>
                            <input type="email" class="form-control" id="email" name="emailguru" placeholder="Alamat Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Tanggal Bergabung</label>
                        <div class="input-group col-md-4">
                            <input type="date" class="form-control" id="tgljoin" name="tgljoin" required>
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
