<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.Karyawans.php';
include_once '/Applications/MAMP/htdocs/isias/classes/paginator.class.php';

$emp = new Karyawans();

$stmt= $emp->countAll();

$num_rows=$stmt->rowCount();

if ($num_rows>0){
    $pages = new Paginator($num_rows, 19);

    if(isset($_POST['cari'])){
        $cari = $_POST['cari'];
        $stmt = $emp->GetListEmployee($pages->limit_start, $pages->limit_end);
    }
    else{
        $stmt = $emp->GetListEmployee($pages->limit_start, $pages->limit_end);
    }
}

$savedata = 'classes/crud_karyawan.php';

$page = isset($_GET['p']) ? $_GET['p'] : null;

switch ($page){
    default:
        echo "<div class='container'>
                <div class='row'>
                    <input class='btn btn-info' onclick=\"window.location.href='?m=047&p=new';\" value='Karyawan Baru'></input>
                    <div class='input-prepend pull-right'>
                        <span class='add-on'><i class='icon-search'></i></span>
                        <input class='span2' id='prependedInput' type='text' name='cari' placeholder='Pencarian..'>

                    </div>
                </div>
            </div>";
        //<!-- Table Content -->
        echo "</br>
            <div class='box box-info'>
                <div class='box-body'>
                    <div class='table-responsive'>
                        <table class='table no-margin'>
                            <thead>
                            <tr>
                                <th style='width:140px'>Foto</th>
                                <th style='width:80px'>ID Karyawan</th>
                                <th style='width:120px'>Nama Karyawan</th>
                                <th style='width:100px'>No Telepon</th>
                                <th style='width:70px'>Kawin</th>
                                <th style='width:60px'>Tanggal Masuk</th>
                                <th style='width:70px'>Status</th>
                                <th style='width:40px'></th>
                            </tr>
                            </thead>
                            <tbody id='pageData'>";
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    extract($row);
                    echo "<tr>
                            <td>{$emp_image}</td>
                            <td>{$emp_id}</td>
                            <td>{$emp_name}</td>
                            <td>{$emp_phone1}</td>
                            <td>{$emp_married}</td>
                            <td>{$emp_join_date}</td>
                            <td>{$emp_status}</td>
                            <td style='text-align:center;width:160px'>
                                <a class='btn btn-xs btn-warning' href='?m=047&p=change&id={$id}'><i class='glyphicon glyphicon-pencil'></i></a>
                                <a class='btn btn-xs btn-danger' href='javascript:;' data-id='{$id}' data-toggle='modal' data-target='#modal-konfirmasi'>
                                <span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
                            </td>";
                    echo "</tr>";
                }
                echo "</tbody>
                    </table>";

                if ($num_rows > 0) {
                    echo "<div class='container'>
                            <ul class='pagination pagination-sm'>";
                    echo $pages->display_pages();
                    echo "</ul>
                        </div>";
                }
                echo "</div>
                </div>
            </div>";
        //<!-- End of Table Content -->
        break;
    case "new":
        //add focus
    echo "<div class='box box-info'>
        <div class='box-body'>
            <div class='row'>
                <form class='form-horizontal' role='form' method='post' action='classes/crud_karyawan.php?p=add'>
                    <div class='col-md-12'>
                        <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span>Required Field</strong></div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>Kode Karyawan</label>
                            <div class='input-group col-md-3'>
                                <input type='text' class='form-control' name='kodeemp' id='kodeemp' placeholder='Kode Karyawan' required>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>Nama Karyawan</label>
                            <div class='input-group col-md-8'>
                                <input type='text' class='form-control' id='namaemp' name='namaemp' placeholder='Nama Karyawan' required>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>Alamat</label>
                            <div class='input-group col-md-8'>
                                <textarea name='alamat' id='alamat' class='form-control' rows='3' required></textarea>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>Status</label>
                            <div class='input-group col-md-3'>
                                <select class='form-control input-md' name='statusemp'>
                                    <option value='0'> -- Pilih Salah Satu -- </option>
                                    <option value='1'>Menikah</option>
                                    <option value='2'>Belum Menikah</option>
                                    <option value='3'>Duda/Janda</option>
                                </select>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>Jenis Kelamin</label>
                            <div class='input-group col-md-8'>
                                <input type='radio' name='sex' id='sex' value='1' checked>
                                Male
                                <input type='radio' name='sex' id='sex' value='0'>
                                Female
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>Jml Anak</label>
                            <div class='input-group col-md-2'>
                                <select class='form-control input-md' name='jmlanak'>
                                    <option value=''> -- Pilih -- </option>
                                    <option value='0'>0</option>
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                </select>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>No Telp 1</label>
                            <div class='input-group col-md-6'>
                                <input type='text' class='form-control' name='notelp1' placeholder='Nomer Telepon 1' required>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>No Telp 2</label>
                            <div class='input-group col-md-6'>
                                <input type='text' class='form-control' name='notelp2' placeholder='Nomer Telepon 2'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>Email</label>
                            <div class='input-group col-md-6'>
                                <span class='input-group-addon'>@</span>
                                <input type='email' class='form-control' name='email' placeholder='Alamat Email' required>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>Tanggal Lahir</label>
                            <div class='input-group col-md-2'>
                                <input type='date' class='form-control' id='tgllahir' name='tgllahir' required>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>Tanggal Bergabung</label>
                            <div class='input-group col-md-2'>
                                <input type='date' class='form-control' id='tgljoin' name='tgljoin' required>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>Jenis Identitas</label>
                            <div class='input-group col-md-5'>
                                <select class='form-control input-md' name='jenis_identitas'>
                                    <option value='0'> -- Pilih Salah Satu -- </option>
                                    <option value='1'>KTP</option>
                                    <option value='2'>SIM</option>
                                    <option value='3'>Pasport</option>
                                    <option value='4'>Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>No Identitas</label>
                            <div class='input-group col-md-5'>
                                <input type='text' class='form-control' name='no_identitas' placeholder='No Identitas'>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>Pendidikan Terakhir</label>
                            <div class='input-group col-md-5'>
                                <select class='form-control input-md' name='last_edu'>
                                    <option value='0'> -- Pilih Salah Satu -- </option>
                                    <option value='1'>SD</option>
                                    <option value='2'>SMP/SLTP</option>
                                    <option value='3'>SMA/SMK/SLTA</option>
                                    <option value='4'>Diploma</option>
                                    <option value='5'>Sarjana</option>
                                    <option value='6'>Master/Magister</option>
                                    <option value='7'>Doktor</option>
                                </select>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>Jenis Karyawan</label>
                            <div class='input-group col-md-8'>
                                <input type='radio' name='jenis_kary' id='jenis_kary' value='1' checked>
                                Guru
                                <input type='radio' name='jenis_kary' id='jenis_kary' value='2'>
                                Staff
                                <input type='radio' name='jenis_kary' id='jenis_kary' value='3'>
                                Lainnya
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>Grade Karyawan</label>
                            <div class='input-group col-md-4'>

                            </div>
                        </div>
                        <br>
                        <div class='form-group'>
                            <div class='col-md-12'>
                                <button type='submit' name='submit' value='Submit' class='btn btn-submit btn-info'><i class='fa fa-save'></i> Save</button>
                                <a href='?m=047' class='btn btn-md btn-success'><i class='glyphicon glyphicon-backward'></i> &nbsp; Kembali</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>";
        break;

    case "change":
        $id=$_GET['id'];
        $nstmt = $emp->getEmployeeByID($id);
        while ($r = $nstmt->fetch(PDO::FETCH_ASSOC)) {
            extract($r);

            echo
            "<div class='box box-info'>
                <div class='box-body'>
                    <div class='row'>
                        <form class='form-horizontal' role='form' method='post' action='classes/crud_karyawan.php?p=edit'>
                            <div class='col-md-12'>
                                <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span>Required Field</strong></div>
                                <div class='form-group'>
                                    <input type='hidden' value='$id' name='id'>
                                    <label class='control-label col-md-3'>Kode Karyawan</label>
                                    <div class='input-group col-md-3'>
                                        <input type='text' class='form-control' name='kodeemp' id='kodeemp' value='{$emp_id}' placeholder='Kode Karyawan' required>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Nama Karyawan</label>
                                    <div class='input-group col-md-8'>
                                        <input type='text' class='form-control' id='namaemp' name='namaemp' value='{$emp_name}' placeholder='Nama Karyawan' required>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Alamat</label>
                                    <div class='input-group col-md-8'>
                                        <textarea name='alamat' id='alamat' class='form-control' rows='3' required>{$emp_addr} </textarea>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Status</label>
                                    <div class='input-group col-md-3'>
                                        <select class='form-control input-md' name='statusemp'>
                                            <option value='0'> -- Pilih Salah Satu -- </option>";
                                            if ($emp_married==1){
                                                echo "
                                                <option value='1' selected>Menikah</option>
                                                <option value='2'>Belum Menikah</option>
                                                <option value='3'>Duda/Janda</option>";
                                            }elseif ($emp_married==2){
                                                echo "
                                                <option value='1' >Menikah</option>
                                                <option value='2' selected>Belum Menikah</option>
                                                <option value='3'>Duda/Janda</option>";
                                            }elseif($emp_married==3){
                                                echo "
                                                <option value='1' >Menikah</option>
                                                <option value='2'>Belum Menikah</option>
                                                <option value='3' selected>Duda/Janda</option>";
                                            }
                                            echo "
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Jenis Kelamin</label>
                                    <div class='input-group col-md-8'>";
                                        if ($emp_sex==1){
                                            echo "
                                            <input type='radio' name='sex' id='sex' value='1' checked>Male
                                            <input type='radio' name='sex' id='sex' value='0'>Female";
                                        }else{
                                            echo "
                                            <input type='radio' name='sex' id='sex' value='1' >Male
                                            <input type='radio' name='sex' id='sex' value='0' checked>Female";
                                        }
                                        echo "
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Jml Anak</label>
                                    <div class='input-group col-md-2'>
                                        <select class='form-control input-md' name='jmlanak'>
                                            <option value=''> -- Pilih -- </option>";
                                            //$i=0;
                                            //$j_anak =$emp_child;
                                            echo "                                           
                                            <option value='0'>0</option>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>No Telp 1</label>
                                    <div class='input-group col-md-6'>
                                        <input type='text' class='form-control' name='notelp1' value='{$emp_phone1}' placeholder='Nomer Telepon 1' required>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>No Telp 2</label>
                                    <div class='input-group col-md-6'>
                                        <input type='text' class='form-control' name='notelp2' value='{$emp_phone2}' placeholder='Nomer Telepon 2'>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Email</label>
                                    <div class='input-group col-md-6'>
                                        <span class='input-group-addon'>@</span>
                                        <input type='email' class='form-control' name='email' value='{$emp_email}' placeholder='Alamat Email' required>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Tanggal Lahir</label>
                                    <div class='input-group col-md-2'>
                                        <input type='date' class='form-control' id='tgllahir' name='tgllahir' value='{$emp_birthdate}' required>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Tanggal Bergabung</label>
                                    <div class='input-group col-md-2'>
                                        <input type='date' class='form-control' id='tgljoin' name='tgljoin' value='{$emp_join_date}' required>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Jenis Identitas</label>
                                    <div class='input-group col-md-5'>
                                        <select class='form-control input-md' name='jenis_identitas'>
                                            <option value='0'> -- Pilih Salah Satu -- </option>
                                            <option value='1'>KTP</option>
                                            <option value='2'>SIM</option>
                                            <option value='3'>Pasport</option>
                                            <option value='4'>Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>No Identitas</label>
                                    <div class='input-group col-md-5'>
                                        <input type='text' class='form-control' name='no_identitas' value='{$emp_identity_no}' placeholder='No Identitas'>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Pendidikan Terakhir</label>
                                    <div class='input-group col-md-5'>
                                        <select class='form-control input-md' name='last_edu'>
                                            <option value='0'> -- Pilih Salah Satu -- </option>
                                            <option value='1'>SD</option>
                                            <option value='2'>SMP/SLTP</option>
                                            <option value='3'>SMA/SMK/SLTA</option>
                                            <option value='4'>Diploma</option>
                                            <option value='5'>Sarjana</option>
                                            <option value='6'>Master/Magister</option>
                                            <option value='7'>Doktor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Jenis Karyawan</label>
                                    <div class='input-group col-md-8'>
                                        <input type='radio' name='jenis_kary' id='jenis_kary' value='1' checked>Guru
                                        <input type='radio' name='jenis_kary' id='jenis_kary' value='2'>Staff
                                        <input type='radio' name='jenis_kary' id='jenis_kary' value='3'>Lainnya
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label col-md-3'>Grade Karyawan</label>
                                    <div class='input-group col-md-4'>

                                    </div>
                                </div>
                                <br>
                                <div class='form-group'>
                                    <div class='col-md-12'>
                                        <button type='submit' name='submit' value='Submit' class='btn btn-submit btn-info'><i class='fa fa-save'></i> Save</button>
                                        <a href='?m=047' class='btn btn-md btn-success'><i class='glyphicon glyphicon-backward'></i> &nbsp; Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>";
        }
    break;
}
?>
<!-- Delete Form -->
<div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body">
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
            modal.find('#hapus-true').attr("href","classes/crud_karyawan.php?p=del&id="+id);
        });
    });
</script>