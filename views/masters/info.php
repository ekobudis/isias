<?php
include_once '/Applications/MAMP/htdocs/isias/classes/class.Identitas.php';
include_once '/Applications/MAMP/htdocs/isias/classes/class.Yayasan.php';

$yys = new Yayasan();
$y = $yys->getYayasan();

$jml_rows = $y->rowCount();

$info = new Identitas();

$stmt = $info->getIdentitas();

$nums = $stmt->rowCount();

if ($nums > 0){
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);

    ?>
    <div class='box box-info'>
        <div class='box-body'>
            <div class='row'>
                <form role='form' method='post' enctype='multipart/form-data' action='classes/crud_identitas.php?p=edit'>
                    <div class='col-md-12'>
                        <div class='alert alert-info col-md-12'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Selamat Datang, Silahkan Edit data Identitas sekolah ini dengan data yang sebenar-benarnya.
                        </div>
                        <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span> Required Field</strong></div>
                        <div class='form-group'>
                            <label>Nama Yayasan</label>
                            <div class='input-group'>
                                <select class="form-control input-md col-md-8" name="yayasan" id="yayasan">
                                <?php
                                    $id_sekolah = $sekolah_pk;
                                    while ($n = $y->fetch(PDO::FETCH_ASSOC)){
                                        extract($n);
                                        if ($id_sekolah==$id){
                                            echo "<option value='{$id}'>{$nama_yayasan}</option>";
                                        }
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label>Nama Sekolah</label>
                            <div class='input-group'>
                                <input type='text' class='form-control' id='nama' name='nama' value='<?php echo $school_name;?>' placeholder='Nama Sekolah' required>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label>Alamat Sekolah</label>
                            <div class='input-group'>
                                <textarea class='form-control' id='alamat' name='alamat' rows='3' placeholder='Alamat Sekolah'><?php echo $school_address;?></textarea>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-5 col-md-5'>
                                <label>No Telepon</label>
                                <div class='input-group'>
                                    <input type='text' class='form-control' id='notelp' name='notelp' value='<?php echo $school_phone;?>' placeholder='Nomer Telepon'>
                                    <span class='input-group-addon'><span class='glyphicon glyphicon-star-empty'></span></span>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-5 col-md-5'>
                                <label>No Fax</label>
                                <div class='input-group'>
                                    <input type='text' class='form-control' id='InputEmailSecond' name='nofax' value='<?php echo $school_fax;?>' placeholder='Nomer Faximile'>
                                    <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-5 col-md-5'>
                                <label>E-mail</label>
                                <div class='input-group'>
                                    <input type='email' class='form-control' id='email' name='email' value='<?php echo $school_email;?>' placeholder='Email Sekolah'>
                                    <span class='input-group-addon'><span class='glyphicon'></span></span>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-5 col-md-5'>
                                <label>Website</label>
                                <div class='input-group'>
                                    <input type='text' class='form-control' id='website' name='website' value='<?php echo $school_website;?>' placeholder='Website Sekolah'>
                                    <span class='input-group-addon'><span class='glyphicon'></span></span>
                                </div>
                            </div>
                        </div>
                        <div class='row'>

                            <div class='col-xs-12 col-sm-3 col-md-3'>
                                <label>Negara</label>
                                <div class='input-group'>
                                    <input type='text' class='form-control' id='negara' name='negara' value='<?php echo $school_country;?>' placeholder='Negara Asal'>
                                    <span class='input-group-addon'><span class='glyphicon'></span></span>
                                </div>
                            </div>
                        </div>

                        <br>
                        <button type="submit" name="submit" value="Submit" class="btn btn-submit btn-info"><i class="fa fa-save"></i> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    }
}
else{
?>
    <div class='box box-info'>
        <div class='box-body'>
            <div class='row'>
                <form role='form' method='post' enctype='multipart/form-data' action='classes/crud_identitas.php?p=add'>
                    <div class='col-md-12'>
                        <div class='alert alert-info col-md-12'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Selamat Datang, Silahkan isikan data Identitas sekolah ini dengan data yang sebenar-benarnya.
                        </div>
                        <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span> Required Field</strong></div>
                        <div class='form-group'>
                            <label>Nama Yayasan</label>
                            <div class='input-group'>
                                <select class="form-control input-md" name="yayasan" id="yayasan">
                                <?php
                                    while ($n = $y->fetch(PDO::FETCH_ASSOC)){
                                        extract($n);
                                        echo "<option value='{$id}'>{$nama_yayasan}</option>";
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label>Nama Sekolah</label>
                            <div class='input-group'>
                                <input type='text' class='form-control' name='nama' id='nama' placeholder='Nama Sekolah' required>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label>Alamat Sekolah</label>
                            <div class='input-group'>
                                <textarea class='form-control' id='alamat' name='alamat' rows='3' placeholder='Alamat Sekolah'></textarea>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-5 col-md-5'>
                                <label>No Telepon</label>
                                <div class='input-group'>
                                    <input type='text' class='form-control' id='notelp' name='notelp' placeholder='Nomer Telepon'>
                                    <span class='input-group-addon'><span class='glyphicon glyphicon-star-empty'></span></span>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-5 col-md-5'>
                                <label>No Fax</label>
                                <div class='input-group'>
                                    <input type='text' class='form-control' id='nofax' name='nofax' placeholder='Nomer Faximile'>
                                    <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-5 col-md-5'>
                                <label>E-mail</label>
                                <div class='input-group'>
                                    <input type='email' class='form-control' id='email' name='email' placeholder='Email Sekolah'>
                                    <span class='input-group-addon'><span class='glyphicon'></span></span>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-5 col-md-5'>
                                <label>Website</label>
                                <div class='input-group'>
                                    <input type='text' class='form-control' id='website' name='website' placeholder='Website Sekolah'>
                                    <span class='input-group-addon'><span class='glyphicon'></span></span>
                                </div>
                            </div>
                        </div>
                        <div class='row'>

                            <div class='col-xs-12 col-sm-3 col-md-3'>
                                <label>Negara</label>
                                <div class='input-group'>
                                    <input type='text' class='form-control' id='negara' name='negara' placeholder='Negara Asal'>
                                    <span class='input-group-addon'><span class='glyphicon'></span></span>
                                </div>
                            </div>
                        </div>

                        <br>
                        <button type='submit' name='submit' value='Submit' class='btn btn-submit btn-info'><i class='fa fa-save'></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>
