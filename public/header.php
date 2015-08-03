<?php
session_start();
include_once  ('/Applications/MAMP/htdocs/isias/classes/class.Karyawans.php');

function set_progress($val=0){

$data = "<div class='progress-container' style='display:none'>

    <div class='progress'>
        <div class='progress-bar progress-bar-info progress-bar-striped active' role='progressbar' aria-valuenow='0' aria-valuemin='0' aria-valuemax='100' style='width: ". $val. "%'>
        </div>
    </div>

</div>";

return $data;

}
?>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="iSimple ERP">
    <meta name="author" content="Eko Budi Susilo">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>Sistem Informasi Sekolah</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="public/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="public/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="public/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- jQuery 2.1.4 -->
    <script src="public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/plugins/jQuery/jquery.form.js"></script>

    <style>
        .modal {
        position: fixed;
        right: o;
        top: 40px;
        }
        .modal-header,
        .btn-custom {
                background: #ecf0f1;
                color: #0000ff;
        }
        .modal-body {
                background: #FFF;
        }
        .popover   {
                background-color: #e74c3c;
                color: #ecf0f1;
                width: 120px;
        }
        .popover.right .arrow:after {
                border-right-color: #e74c3c;
        }
        .input-group[class*="col-"] {
            padding-right: 15px;
            padding-left: 15px;
        }
        ul.tsc_pagination { margin:4px 0; padding:0px; height:100%; overflow:hidden; font:12px Tahoma; list-style-type:none; }
        ul.tsc_pagination li { float:left; margin:0px; padding:0px; margin-left:5px; }
        ul.tsc_pagination li:first-child { margin-left:0px; }
        ul.tsc_pagination li a { color:black; display:block; text-decoration:none; padding:7px 10px 7px 10px; }
        ul.tsc_pagination li a img { border:none; }
        ul.tsc_paginationC li a { color:#707070; background:#FFFFFF; border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px; border:solid 1px #DCDCDC; padding:6px 9px 6px 9px; }
        ul.tsc_paginationC li { padding-bottom:1px; }
        ul.tsc_paginationC li a:hover,
        ul.tsc_paginationC li a.current { color:#FFFFFF; box-shadow:0px 1px #EDEDED; -moz-box-shadow:0px 1px #EDEDED; -webkit-box-shadow:0px 1px #EDEDED; }
        ul.tsc_paginationC01 li a:hover,
        ul.tsc_paginationC01 li a.current { color:#893A00; text-shadow:0px 1px #FFEF42; border-color:#FFA200; background:#FFC800; background:-moz-linear-gradient(top, #FFFFFF 1px, #FFEA01 1px, #FFC800); background:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0.02, #FFFFFF), color-stop(0.02, #FFEA01), color-stop(1, #FFC800)); }
        ul.tsc_paginationC li a.In-active {
            pointer-events: none;
            cursor: default;
        }
    </style>
</head>
<body class="skin-green sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="main.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>S</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>iSIAS</b></span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                                <span class="hidden-xs"><?php echo $_SESSION['nama_pegawai']; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                                    <p>
                                    <?php
                                        echo $_SESSION['nama_pegawai'];
                                        $emp = new Karyawans();

                                        $stmt = $emp->getEmployeeByID($_SESSION['pk_pegawai']);

                                        while ($data=$stmt->fetch(PDO::FETCH_ASSOC)){
                                            extract($data);
                                            $reg_year = $emp_join_date;
                                        }
                                    ?>
                                    <small><?php echo "Member since " + date_format($reg_year, 'M') ; ?></small></p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $_SESSION['nama_pegawai']; ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/> <!--tambahin search module aplikasi disini -->
                        <span class="input-group-btn">
                            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <?php
                        //Dynamic Menu
                        include_once 'classes/class.Menus.php';

                        $h = new Menus();

                        $stmt = $h->GetHeaderMenus();

                        $num = $stmt->rowCount();

                        if($num>0){
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                // extract row
                                // this will make $row['name'] to
                                // just $name only
                                extract($row);
                                $g_id = $group_id;
                                echo '<li class="treeview">
                                <a href=""
                                    <i class=' . $menu_imagename . '></i>
                                    <span> ' . $menu_header . ' </span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>';

                                $detail = $h->GetDetailMenus($g_id);
                                echo '<ul class="treeview-menu">';
                                while ($d = $detail->fetch(PDO::FETCH_ASSOC)){
                                    extract($d);
                                    $program_id = $idprog;
                                    $url_id = $url;
                                    echo '<li><a href="?m=' . $idprog . '" id="linkmenu"><i class="fa fa-angle-double-right"></i> '. $menu_name . '</a></li>';
                                }
                                echo "</ul>";
                            }
                        }
                    ?>
                </ul>
            </section>
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                  <?php
                      $d_n = $_GET['m'];
                      $stmt = $h->GetURLMenus($d_n);

                      $num = $stmt->rowCount();

                      if($num>0){
                          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                              extract($row);
                              $sub_menuname = $menu_name;
                              $header_menu = $menu_header;
                              echo $menu_name;
                          }
                      }else{
                          echo "Dashboard";
                      }
                  ?>
              </h1>
              <ol class="breadcrumb">
                <li><a href="main.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <?php
                    //make breadcumb in the line
                    if($num>0){
                        echo "<li>$header_menu</li><li class='active'><a href=''><i class='fa'></i>$sub_menuname</a> </li>";
                    }
                ?>
              </ol>
            </section>
            <!-- Right side column. Contains the navbar and content of the page -->
        
