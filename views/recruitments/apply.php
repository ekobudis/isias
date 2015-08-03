<!--
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 14 /07 /15
 * Time: 18.48
 */
-->

<div class="row">
    <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Biodata Calon</a></li>
                <li><a href="#tab_2" data-toggle="tab">Orang Tua/Wali</a></li>
                <li><a href="#tab_3" data-toggle="tab">Sekolah Asal</a></li>
                <!--<li><a href="#tab_4" data-toggle="tab">Data Pekerjaan</a></li>-->
                <li><a href="#tab_5" data-toggle="tab">Foto dan Dokumen</a></li>
                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content" id="post_content">
                <div class="tab-pane active" id="tab_1">
                    <div class="row">
                        <div class="col-xs-12 col-md-3">
                            <label>No Pendaftaran</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="no_pmb" name="no_pmb" placeholder="Nomer Registrasi..">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <label>Nama Pendaftar</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nama_reg" name="nama_reg" placeholder="Nama Calon Siswa" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-11 col-md-5">
                            <label>Tahun Angkatan</label>
                            <div class="input-group"><!-- Combo Box Dinamis dari Master Angkatan Aktif -->
                                <select class="form-control col-md-5" name="tahunangkatan" id="tahun">
                                    <option value="0">-- Pilih Tahun Angkatan --</option>
                                    <?php
                                        while ($row = $n->fetch(PDO::FETCH_ASSOC)) {
                                            // extract row
                                            // this will make $row['name'] to
                                            // just $name only
                                            extract($row);
                                            echo "<option value={$id}>{$thn_angkatan}</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <label>Tempat Lahir</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <label>Tanggal Lahir</label>
                            <div class="input-group">
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <label>Nomer Telepon</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomer Telepon Aktif">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="input-group">
                            <input type="radio" name="sex" id="sex" value="1" checked>
                            Male
                            <input type="radio" name="sex" id="sex" value="0">
                            Female
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <label>Jurusan</label> <!-- Jurusan -->
                            <div class="input-group"><!-- Combo Box Dinamis dari Master Angkatan Aktif -->
                                <select class="form-control col-md-6" name="jurusan" id="jurusan">
                                    <option value="0">-- Pilih Salah Satu Jurusan --</option>
                                    <?php
                                    while ($jur = $j->fetch(PDO::FETCH_ASSOC)) {
                                        // extract row
                                        // this will make $row['name'] to
                                        // just $name only
                                        extract($jur);
                                        echo "<option value={$id}>{$namajurusan}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!--<div class="col-xs-12 col-sm-6 col-md-6">
                            <label>Konsentrasi Bidang</label>
                            <div class="input-group">
                                <select class="form-control col-md-6" name="bidang" id="bidang">
                                    <option value="0">-- Pilih Konsentrasi Jurusan --</option>

                                </select>
                            </div>
                        </div>-->
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <div class="input-group">
                            <textarea name="alamat" id="alamat" class="form-control" rows="3"></textarea>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                        </div>
                    </div>

                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <label for="InputEmail">Nama Ayah</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <label for="InputEmail">Pekerjaan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan...">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-11 col-sm-3 col-md-3">
                                <label for="InputEmail">Tanggal Lahir Ayah</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" id="tgl_lahir_ayah" name="tgl_lahir_ayah" placeholder="Tanggal Lahir Ayah">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                            <div class="col-xs-11 col-sm-3 col-md-3">
                                <label for="InputEmail">Nomer Telepon Ayah</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="no_tlp_ayah" name="no_tlp_ayah" placeholder="No Telepon...">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                            <div class="col-xs-11 col-sm-3 col-md-3">
                                <label for="InputEmail">Alamat Email Ayah</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="email_ayah" name="email_ayah" placeholder="Alamat Email">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <label for="InputEmail">Nama Ibu</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <label for="InputEmail">Pekerjaan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Pekerjaan...">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-11 col-sm-3 col-md-3">
                                <label for="InputEmail">Tanggal Lahir Ibu</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" id="tgl_lahir_ibu" name="tgl_lahir_ibu" placeholder="Tanggal Lahir Ibu..">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                            <div class="col-xs-11 col-sm-3 col-md-3">
                                <label for="InputEmail">Nomer Telepon Ibu</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="no_telp_ibu" name="no_telp_ibu" placeholder="No Telepon Ibu..">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                            <div class="col-xs-11 col-sm-3 col-md-3">
                                <label for="InputEmail">Alamat Email Ibu</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="email_ibu" name="email_ibu" placeholder="Alamat Email">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Penghasilan Orang Tua</label>
                        <div class="input-group">
                            <select class="form-control col-md-6" name="penghasilan" id="penghasilan">
                                <option value="0"> -- Pilih Range Penghasilan Orang Tua/Wali -- </option>
                                <option value="1"> < 5.000.000 </option>
                                <option value="2"> 5.000.000 - 10.000.000 </option>
                                <option value="3"> 10.000.000 - 15.000.000 </option>
                                <option value="4"> 15.000.000 - 20.000.000 </option>
                                <option value="5"> 20.000.000 - 25.000.000 </option>
                                <option value="6"> > 25.000.000 </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat Orang Tua</label>
                        <div class="input-group">
                            <textarea name="alamat_ortu" id="alamat_ortu" class="form-control" rows="3"></textarea>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <label for="InputEmail">Nama Wali Murid</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nama_wali" name="nama_wali" placeholder="Nama Wali">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <label for="InputEmail">Hubungan Keluarga</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="hub_keluarga" name="hub_keluarga" placeholder="Hubungan Wali">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <label for="InputEmail">Pekerjaan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" placeholder="Pekerjaan Wali">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat Orang Wali Murid</label>
                        <div class="input-group">
                            <textarea name="alamat_wali" id="alamat_wali" class="form-control" rows="3"></textarea>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                        </div>
                    </div>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                    <div class="form-group">
                        <label for="InputEmail">Sekolah Asal</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="Nama Sekolah Asal" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-11 col-sm-3 col-md-3">
                                <label for="InputEmail">Nilai Akhir</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nilai_akhir" name="nilai_akhir" placeholder="Nilai Akhir" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                            <div class="col-xs-11 col-sm-3 col-md-3">
                                <label for="InputEmail">No Ijazah</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="no_ijazah" name="no_ijazah" placeholder="Nomer Ijazah Pendaftar" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                            <div class="col-xs-11 col-sm-3 col-md-3">
                                <label for="InputEmail">Tanggal Ijazah</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" id="tgl_ijazah" name="tgl_ijazah">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Alamat Sekolah Asal</label>
                        <div class="input-group">
                            <textarea name="alamat_sekolah" id="alamat_sekolah" class="form-control" rows="3"></textarea>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Jurusan</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="jurusan_sekolah" name="jurusan_sekolah" placeholder="Jurusan..." >
                            <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                        </div>
                    </div>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4">

                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_5">
                    <div class="form-group">
                        <form enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputfoto">Upload Foto Peserta</label>
                                <div class="input-group">
                                    <input id="input-foto" type="file" name="input-foto">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputijazah">Upload Ijazah Terakhir</label>
                                <div class="input-group">
                                    <input id="input-ijazah" type="file" name="input-ijazah">
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" name="submit" id="buttonsave" value="Submit" class="btn btn-submit btn-info"><i class="fa fa-save"></i> Save</button>
                </div>
                </br>
            </div>
            </br>
        </div><!-- nav-tabs-custom -->
    </div>
</div>
