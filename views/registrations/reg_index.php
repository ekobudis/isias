<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info col-md-11">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Selamat Datang, Silahkan isikan data calon siswa sekolah ini dengan data yang sebenar-benarnya.
        </div>
    </div>

    <form role="form">
        <div class="col-md-11">
            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span> Required Field</strong></div>
            <div class="row">
                <div class="col-xs-11 col-sm-3 col-md-3">
                    <label>No Pendaftaran</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Nomer Otomatis" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Nama Pendaftar</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Nama Calon Siswa" required>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-11 col-sm-3 col-md-3">
                    <label>Tempat Lahir</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Tempat Lahir">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-star-empty"></span></span>
                    </div>
                </div>
                <div class="col-xs-11 col-sm-3 col-md-3">
                    <label>Tanggal Lahir</label>
                    <div class="input-group">
                        <input type="date" class="form-control" id="InputEmailSecond" name="InputEmail" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="col-xs-11 col-sm-3 col-md-3">
                    <label>Nomer Telepon</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Nomer Telepon Aktif">
                        <span class="input-group-addon"><span class="glyphicon"></span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-11 col-sm-3 col-md-3">
                    <label>Jenis Kelamin</label>
                    <div class="input-group">
                        <input type="radio" name="sex" id="sex" value="male" checked>
                        Male
                        <input type="radio" name="sex" id="sex" value="female">
                        Female
                    </div>
                </div>
                <div class="col-xs-11 col-sm-3 col-md-3">
                    <label>Agama</label>
                    <div class="input-group">
                        <select class="form-control input-md">
                            <option value="0"> -- Pilih Salah Satu -- </option>
                            <option value="1">Islam</option>
                            <option value="2">Kristen</option>
                            <option value="3">Katolik</option>
                            <option value="4">Hindu</option>
                            <option value="5">Budha</option>
                            <option value="6">Konghuchu</option>
                            <option value="7">Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-11 col-sm-3 col-md-3">
                    <label>Tinggi Badan</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Tinggi Badan">
                        <span class="input-group-addon"><span class="glyphicon">cm</span></span>
                    </div>
                </div>
                <div class="col-xs-11 col-sm-3 col-md-3">
                    <label>Berat Badan</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Berat Badan">
                        <span class="input-group-addon"><span class="glyphicon">kg</span></span>
                    </div>
                </div>
                <div class="col-xs-11 col-sm-3 col-md-3">
                    <label>Penyakit</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Penyakit">
                        <span class="input-group-addon"><span class="glyphicon"></span></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <div class="input-group">
                    <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="Alamat Surat Menyurat" required></textarea>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
                <label for="InputEmail">Sekolah Asal</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Nama Sekolah Asal" required>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-11 col-sm-3 col-md-3">
                        <label for="InputEmail">Nilai Akhir</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Nilai Akhir" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-3 col-md-3">
                        <label for="InputEmail">No Ijazah</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Nomer Ijazah Pendaftar" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-3 col-md-3">
                        <label for="InputEmail">Tanggal Ijazah</label>
                        <div class="input-group">
                            <input type="date" class="form-control" id="InputEmailSecond" name="InputEmail" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-11 col-sm-3 col-md-3">
                        <label for="InputEmail">Nama Orang Tua/Wali</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Nama Oragn Tua/Wali" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-3 col-md-3">
                        <label for="InputEmail">Hubungan Dengan Pendaftar</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Hubungan Dengan Pendaftar" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-3 col-md-3">
                        <label for="InputEmail">Pekerjaan</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Pekerjaan Orang Tua/Wali" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-11 col-sm-3 col-md-3">
                        <label for="InputEmail">Tanggal Lahir Orang Tua/Wali</label>
                        <div class="input-group">
                            <input type="date" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Tanggal Lahir Orang Tua/Wali" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-3 col-md-3">
                        <label for="InputEmail">Nomer Telepon Orang Tua/Wali</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="No Telepon Orang Tua/Wali" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-3 col-md-3">
                        <label for="InputEmail">Alamat Email Orang Tua/Wali</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Alamat Email" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
        </div>
    </form>        
</div>