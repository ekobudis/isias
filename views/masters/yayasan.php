<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 25 /07 /15
 * Time: 00.17
 */
include_once '/Applications/MAMP/htdocs/isias/classes/class.Yayasan.php';

$info = new Yayasan();

$stmt = $info->getYayasan();

$nums = $stmt->rowCount();

if ($nums > 0){
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        ?>
        <div class='box box-info'>
            <div class='box-body'>
                <div class='row'>
                    <form role='form' method='post' enctype='multipart/form-data' action='classes/crud_yayasan.php?p=edit'>
                        <div class='col-md-12'>
                            <div class='alert alert-info col-md-12'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                Selamat Datang, Silahkan Edit data Identitas Yayasan ini dengan data yang sebenar-benarnya.
                            </div>
                            <br>
                            <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span> Required Field</strong></div>
                            <div class='form-group'>
                                <label>Nama Yayasan</label>
                                <div class='input-group'>
                                    <input type='text' class='form-control' id='nama' name='nama' value='<?php echo $nama_yayasan;?>' placeholder='Nama Yayasan' required>
                                    <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label>Alamat Yayasan</label>
                                <div class='input-group'>
                                    <textarea class='form-control' id='alamat' name='alamat' rows='3' placeholder='Alamat Yayasan'><?php echo $alamat_yayasan;?></textarea>
                                    <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-5 col-md-5'>
                                    <label>No Telepon</label>
                                    <div class='input-group'>
                                        <input type='text' class='form-control' id='notelp' name='notelp' value='<?php echo $notelp_yayasan;?>' placeholder='Nomer Telepon'>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-star-empty'></span></span>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-5 col-md-5'>
                                    <label>No Fax</label>
                                    <div class='input-group'>
                                        <input type='text' class='form-control' id='nofax' name='nofax' value='<?php echo $nofax_yayasan;?>' placeholder='Nomer Faximile'>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <label>Profinsi</label>
                                    <div class='input-group'>
                                        <input type='text' class='form-control' id='profinsi' name='profinsi' value='<?php echo $profinsi_yayasan;?>' placeholder='Profinsi'>
                                        <span class='input-group-addon'><span class='glyphicon'></span></span>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <label>Kota</label>
                                    <div class='input-group'>
                                        <input type='text' class='form-control' id='kota' name='kota' value='<?php echo $kota_yayasan;?>' placeholder='Kota...'>
                                        <span class='input-group-addon'><span class='glyphicon'></span></span>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <label>NPWP</label>
                                    <div class='input-group'>
                                        <input type='text' class='form-control' id='npwp' name='npwp' value='<?php echo $npwp_yayasan;?>' placeholder='NPWP Yayasan...'>
                                        <span class='input-group-addon'><span class='glyphicon'></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-5 col-md-5'>
                                    <label>PKP</label>
                                    <div class='input-group'>
                                        <select class='form-control input-md' name='pkp' id='pkp'>
                                            <option value=''> -- Pilih -- </option>
                                            <?php
                                                if ($pkp==1){
                                                    echo "<option value='0'>Tidak</option>
                                                    <option value='1' selected>Ya</option>";
                                                }else{
                                                    echo "<option value='0' selected>Tidak</option>
                                                    <option value='1'>Ya</option>";
                                                }
                                            ?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-5 col-md-5'>
                                    <label>E-mail</label>
                                    <div class='input-group'>
                                        <input type='email' class='form-control' id='email' name='email' value='<?php echo $email_yayasan;?>' placeholder='Email Yayasan...'>
                                        <span class='input-group-addon'><span class='glyphicon'></span></span>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-5 col-md-5'>
                                    <label>Website</label>
                                    <div class='input-group'>
                                        <input type='text' class='form-control' id='website' name='website' value='<?php echo $website_yayasan;?>' placeholder='Website Yayasan...'>
                                        <span class='input-group-addon'><span class='glyphicon'></span></span>
                                    </div>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label for='InputEmail'>Logo Yayasan</label>
                                <div class='input-group'>
                                    <input type='file' class='form-control' id='logo' value='<?php echo $logo_yayasan;?>' name='logo' required>
                                    <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                </div>
                            </div>
                            <br>
                            <button type='submit' name='submit' id='buttonsave' value='Submit' class='btn btn-submit btn-info'><i class='fa fa-save'></i> Save</button>
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
                <form role='form' method='post' enctype='multipart/form-data' action='classes/crud_yayasan.php?p=add'>
                    <div class='col-md-12'>
                        <div class='alert alert-info col-md-12'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Selamat Datang, Silahkan Isi data Identitas Yayasan ini dengan data yang sebenar-benarnya.
                        </div>
                        <br/>
                        <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span> Required Field</strong></div>
                        <div class='form-group'>
                            <label>Nama Yayasan</label>
                            <div class='input-group'>
                                <input type='text' class='form-control' id='nama' name='nama' placeholder='Nama Yayasan' required>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label>Alamat Yayasan</label>
                            <div class='input-group'>
                                <textarea class='form-control' id='alamat' name='alamat' rows='3' placeholder='Alamat Yayasan'></textarea>
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
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <label>Profinsi</label>
                                <div class='input-group'>
                                    <input type='text' class='form-control' id='profinsi' name='profinsi' placeholder='Profinsi...'>
                                    <span class='input-group-addon'><span class='glyphicon'></span></span>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <label>Kota</label>
                                <div class='input-group'>
                                    <input type='text' class='form-control' id='kota' name='kota' placeholder='Kota...'>
                                    <span class='input-group-addon'><span class='glyphicon'></span></span>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                <label>NPWP</label>
                                <div class='input-group'>
                                    <input type='text' class='form-control' id='npwp' name='npwp' placeholder='NPWP Yayasan...'>
                                    <span class='input-group-addon'><span class='glyphicon'></span></span>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-5 col-md-5'>
                                <label>PKP</label>
                                <div class='input-group'>
                                    <select class='form-control input-md' name='pkp' id='pkp' required>
                                        <option value=''> -- Pilih -- </option>
                                        <option value='0' selected>Tidak</option>
                                        <option value='1'>Ya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-5 col-md-5'>
                                <label>E-mail</label>
                                <div class='input-group'>
                                    <input type='email' class='form-control' id='email' name='email' placeholder='Email Yayasan'>
                                    <span class='input-group-addon'><span class='glyphicon'></span></span>
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-5 col-md-5'>
                                <label>Website</label>
                                <div class='input-group'>
                                    <input type='text' class='form-control' id='website' name='website' placeholder='Website Yayasan'>
                                    <span class='input-group-addon'><span class='glyphicon'></span></span>
                                </div>
                            </div>
                        </div>
        
                        <div class='form-group'>
                            <label for='InputEmail'>Logo Yayasan</label>
                            <div class='input-group'>
                                <input type='file' class='form-control' id='logo' name='logo'>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                            </div>
                        </div>
                        <br>
                        <button type='submit' name='submit' id='buttonsave' value='Submit' class='btn btn-submit btn-info'><i class='fa fa-save'></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>