<!--
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 25 /06 /15
 * Time: 23.16
 */-->
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.Users.php';
include_once '/Applications/MAMP/htdocs/isias/classes/class.Karyawans.php';
include_once '/Applications/MAMP/htdocs/isias/classes/paginator.class.php';

$emp = new Karyawans();
$data = $emp->ReadEmployee();

$usr = new Users();

$stmt = $usr->CountAll();
$num_rows=$stmt->rowCount();

if ($num_rows>0){
    $pages = new Paginator($num_rows, 19);

    if(isset($_POST['cari'])){
        $cari = $_POST['cari'];
        $stmt = $usr->GetListUser($pages->limit_start, $pages->limit_end);
    }
    else{
        $stmt = $usr->GetListUser($pages->limit_start, $pages->limit_end);
    }
}

?>

<div class="container">
    <div class="row">
        <a href="#myModal" role="button" class="btn btn-info" data-toggle="modal" data-target="#add-Data">User Baru</a>
        <div class="input-prepend pull-right">
            <span class="add-on"><i class="icon-search"></i></span>
            <input class="span2" id="prependedInput" type="text" name="cari" placeholder="Pencarian..">

        </div>
    </div>
</div>
<!-- Table Content -->
</br>
<div class='box box-info'>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table no-margin">
                <thead>
                <tr>
                    <th style="width:120px">User ID</th>
                    <th style="width:120px">Password</th>
                    <th style="width:220px">Pemilik User</th>
                    <th style="width:80px">Status</th>
                    <th style="width:40px"></th>
                </tr>
                </thead>
                <tbody id="pageData">
                <?php
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                echo "<tr>
                        <td>{$usr_id}</td>
                        <td>{$usr_pswd}</td>
                        <td>{$emp_name}</td>
                        <td>{$status}</td>
                        <td style='text-align:center;width:160px'>
                            <a  class='btn btn-xs btn-warning' href='javascript:;'
                                data-id='{$usr_pk}'
                                data-userid='{$usr_id}'
                                data-userpass='{$usr_pswd}'
                                data-emp_pk='{$emp_pk}'
                                data-kpi='{$usr_kpidashboard}'
                                data-admin='{$usr_adm}'
                                data-toggle='modal' data-target='#edit-Data'>
                                <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                            </a>
                            <a class='btn btn-xs btn-danger' href='javascript:;' data-id='{$usr_pk}' data-toggle='modal' data-target='#modal-konfirmasi'>
                            <span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
                        </td>
                    </tr>";
                }
                ?>
                </tbody>
            </table>
            <?php
            if($num_rows>0){
                echo"<div class='container'>
                            <ul class='pagination pagination-sm'>";
                echo $pages->display_pages();
                echo "</ul>
                        </div>";
            }
            ?>
        </div>
    </div>
</div>
<!-- End of Table Content -->

<!-- HTML form for creating a product -->
<div id="add-Data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Form User</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            <form class="form-horizontal" role="form" method="post" action="classes/crud_users.php?p=add">
                <div class="col-md-12">
                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                    <div class="form-group">
                        <label class="control-label col-md-4">User ID</label>
                        <div class="input-group col-md-4">
                            <input type="text" class="form-control" name="user_id" placeholder="User ID" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Password</label>
                        <div class="input-group col-md-8">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Konfirmasi</label>
                        <div class="input-group col-md-8">
                            <input type="password" class="form-control" name="confirm" placeholder="Konfirmasi Password" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Karyawan</label>
                        <div class="input-group col-md-6">
                            <select class="form-control input-md" name="emp_pk">
                                <option value="0"> -- Pilih Salah Satu -- </option>
                                <?php
                                    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                                        // extract row
                                        // this will make $row['name'] to
                                        // just $name only
                                        extract($row);
                                        echo "<option value={$id}>{$emp_name}</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">KPI Dasboard</label>
                        <div class="input-group col-md-6">
                                <input type="checkbox" name="kpi" value="1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Administrator</label>
                        <div class="input-group col-md-6">
                            <input type="checkbox" name="administrator" value="1">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type='submit' name='submit' value='Submit' class='btn btn-submit btn-info'><i class='fa fa-save'></i> Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- End of Modal content -->
    </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->
</div>
