<?php
//include config
session_start();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require_once('classes/class.Users.php');
require_once('classes/class.TahunAngkatan.php');

$usr = new Users();

$thn_aktif = new TahunAngkatan();

//check if already logged in move to home page
if( $usr->is_logged_in() ){ header('Location: index.php'); }

//process login form if submitted
if(isset($_POST['submit'])){

    $user_name = $_POST['userid'];
    $password = $_POST['password'];

    if ($usr->login($user_name,$password)){

        $stmt = $usr->GetUser($user_name);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $_SESSION['username'] = $user_name;
            $_SESSION['user_pk']=$usr_pk;
            $_SESSION['pk_pegawai']=$emp_pk;
            $_SESSION['nama_pegawai']=$emp_name;
            $tahun = $thn_aktif->GetTahunActived();
            while ($aktif_data = $tahun->fetch(PDO::FETCH_ASSOC) ){
              $_SESSION['tahun_pk'] = $aktif_data['id'];
              //echo $_SESSION['tahun_pk'];  
            }
        }
        header('location: main.php');
        exit;
    }else{
        session_destroy();
        echo "User Name or Password failed!";
        //header('location: main.php');
        exit();
    }

}//end if submit

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>iSIAS | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="public/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="public/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>iSIAS</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="userid" class="form-control" placeholder="User ID"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <a href="#">I forgot my password</a><br>
        
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="public/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
