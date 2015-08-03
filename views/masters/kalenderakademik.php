<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 22 /07 /15
 * Time: 22.52
 */

//session_start();
//ini_set('display_errors',1);
//ini_set('display_startup_errors',1);
//error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.KalenderAkademiks.php';
include_once '/Applications/MAMP/htdocs/isias/classes/class.TahunAngkatan.php';
include_once '/Applications/MAMP/htdocs/isias/classes/paginator.class.php';

$kal = new KalenderAkademiks();
//$tahun = $_SESSION['tahun_pk'];

$stmt = $kal->countAll($_SESSION['tahun_pk']);
$num_rows=$stmt->rowCount();

if ($num_rows>0){
    $pages = new Paginator($num_rows, 19);

    $active_year= $_SESSION['tahun_pk'];

    if(isset($_POST['cari'])){
        $cari = $_POST['cari'];
        $stmt = $kal->GetListKalender($active_year,$pages->limit_start, $pages->limit_end);
    }
    else{
        $stmt = $kal->GetListKalender($active_year,$pages->limit_start, $pages->limit_end);
    }
}
$page = isset($_GET['p']) ? $_GET['p'] : null;

switch ($page) {
    default:
?>
        <div class='container'>
            <div class='row'>
                <input class='btn btn-info' onclick="window.location.href='?m=145&p=new';" value="Kalender Akademik Baru"></input>
            </div>
        </div>
        </br>
        <div class='box box-info'>
            <div class='box-body'>
                <div class='table-responsive'>
                    <table class='table no-margin'>
                        <thead>
                        <tr>
                            <th style='width:120px'>Dari Tanggal</th>
                            <th style='width:120px'>Sampai Tanggal</th>
                            <th style='width:320px'>Keterangan</th>
                            <th style='width:40px'></th>
                        </tr>
                        </thead>
                        <tbody id='pageData'>
                        <?php
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                extract($row);
                                echo "<tr>
                                        <td>{$from_date}</td>
                                        <td>{$to_date}</td>
                                        <td>{$description}</td>
                                        <td style='text-align:center;width:160px'>
                                            <a class='btn btn-xs btn-warning' href='?m=145&p=change&id={$id}'><i class='glyphicon glyphicon-pencil'></i></a>
                                            <a class='btn btn-xs btn-danger' href='javascript:;' data-id='{$id}' data-toggle='modal' data-target='#modal-konfirmasi'>
                                            <span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
                                        </td>";
                                echo "</tr>";
                            }
                        echo "
                        </tbody>
                    </table>";

                    if($num_rows>0){
                        echo"<div class='container'>
                                <ul class='pagination pagination-sm'>";
                        echo $pages->display_pages();
                        echo "</ul>
                            </div>";
                    }
                    //end of php
                    ?>
                </div>
            </div>
        </div>
        <?php
        break;
    case "new":
        ?>
        <!--//add new tahun ajaran-->
        <div class='box box-info'>
            <div class='box-body'>
                <div class='row'>
                    <form class='form-horizontal' role='form' method='post' action='classes/crud_kalenderakademik.php?p=add'>
                        <div class='col-md-12'>
                            <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span>Required Field</strong></div>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-3 col-md-3'>
                                    <label>Tahun Akademik</label>
                                    <div class='input-group'>
                                        <select class='form-control col-md-3' name='tahun_angkatan' id='tahun_angkatan'>
                                            <option value='0'> Pilih Tahun Akademik </option>
                                        <?php
                                            $tahun_angkatan = new TahunAngkatan();
                                            $data_tahun = $tahun_angkatan->GetTahunActived();
                                            while ($n_thn = $data_tahun->fetch(PDO::FETCH_ASSOC)) {
                                                //# code...
                                                echo "<option value=$n_thn[id]> $n_thn[thn_angkatan]</option> ";
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-3 col-md-3'>
                                    <label>Dari Tanggal</label>
                                    <div class='input-group'>
                                        <input type='date' class='form-control' id='dari_tgl' name='dari_tgl'>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-3 col-md-3'>
                                    <label>Sampai Tanggal</label>
                                    <div class='input-group'>
                                        <input type='date' class='form-control' id='sampai_tgl' name='sampai_tgl'>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-sm-3 col-md-3'>
                                    <label>Pilih Warna</label>
                                    <div id='colorhexDIV' class='input-group'>
                                        <input type='color' id='html5colorpicker' name='warna' class='form-control' onchange='clickColor(0, -1, -1, 5)' value='#ff0000'>
                                        <span class='input-group-btn'>
                                            <button class='btn btn-default' type='button' onclick='clickColor(0,-1,-1)'>OK</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-12 col-md-12'>
                                    <label>Keterangan</label>
                                    <div class='input-group'>
                                        <textarea name='keterangan' id='keterangan' class='form-control' rows='3'></textarea>
                                        <span class='input-group-addon'><span class='glyphicon glyphicon-star-empty'></span></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class='form-group'>
                                <div class='col-md-10'>
                                    <button type='submit' name='submit' value='Submit' class='btn btn-submit btn-info'><i class='fa fa-save'></i> Save</button>
                                    <a href='?m=145' class='btn btn-md btn-success'><i class='glyphicon glyphicon-backward'></i> &nbsp; Kembali</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        break;
    case "change":
        $pk = $_REQUEST['id'];
        $new = $kal->GetByID($pk);
        while ($r=$new->fetch(PDO::FETCH_ASSOC)){
            extract($r);
        ?>
            <div class='box box-info'>
                <div class='box-body'>
                    <div class='row'>
                        <form class='form-horizontal' role='form' method='post' action='classes/crud_kalenderakademik.php?p=edit'>
                            <div class='col-md-12'>
                                <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span>Required Field</strong></div>
                                <input type='text' id='kode' name='kode' value='<?php echo $pk; ?>' >
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-3 col-md-3'>
                                        <label>Tahun Akademik</label>
                                        <div class='input-group'>
                                            <select class='form-control col-md-3' name='tahun_angkatan' id='tahun_angkatan'>
                                                <option value='0'> Pilih Tahun Akademik </option>
                                            <?php
                                                $tahun_angkatan = new TahunAngkatan();
                                                $data_tahun = $tahun_angkatan->GetTahunActived();
                                                while ($n_thn = $data_tahun->fetch(PDO::FETCH_ASSOC)) {
                                                    //# code...
                                                    if ($n_thn[id]==$schoolyear_id){
                                                        echo "<option value=$n_thn[id] selected> $n_thn[thn_angkatan]</option> ";    
                                                    }
                                                    else{
                                                        echo "<option value=$n_thn[id]> $n_thn[thn_angkatan]</option> ";  
                                                    }
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-3 col-md-3'>
                                        <label>Dari Tanggal</label>
                                        <div class='input-group'>
                                            <input type='date' class='form-control' id='dari_tgl' name='dari_tgl' 
                                            value='<?php echo $from_date; ?>' >
                                        </div>
                                    </div>
                                    <div class='col-xs-12 col-sm-3 col-md-3'>
                                        <label>Sampai Tanggal</label>
                                        <div class='input-group'>
                                            <input type='date' class='form-control' id='sampai_tgl' name='sampai_tgl'
                                            value='<?php echo $to_date; ?>'>
                                        </div>
                                    </div>
                                    <div class='col-xs-12 col-sm-3 col-md-3'>
                                        <label>Pilih Warna</label>
                                        <div id='colorhexDIV' class='input-group'>
                                            <input type='color' id='html5colorpicker' name='warna' class='form-control' 
                                            value='<?php echo $flag_color; ?>'>
                                            <span class='input-group-btn'>
                                                <button class='btn btn-default' type='button' >OK</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-12 col-md-12'>
                                        <label>Keterangan</label>
                                        <div class='input-group'>
                                            <textarea name='keterangan' id='keterangan' class='form-control' rows='3'><?php echo $description ?></textarea>
                                            <span class='input-group-addon'><span class='glyphicon glyphicon-star-empty'></span></span>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class='form-group'>
                                    <div class='col-md-10'>
                                        <button type='submit' name='submit' value='Submit' class='btn btn-submit btn-info'><i class='fa fa-save'></i> Update</button>
                                        <a href='?m=145' class='btn btn-md btn-success'><i class='glyphicon glyphicon-backward'></i> &nbsp; Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>    
            <?php
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
            modal.find('#hapus-true').attr("href","classes/crud_kalenderakademik.php?p=del&id="+id);
        });
    });

    
</script>