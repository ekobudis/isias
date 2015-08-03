<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 27 /06 /15
 * Time: 16.59
 */
ob_flush();

include_once 'class.Users.php';
include_once 'password.php';

$user_id = htmlspecialchars($_POST['user_id']);
$pass = htmlspecialchars($_POST['password']);
$emp_pk = ($_POST['emp_pk']);
$kpi_dashboard =($_POST['kpi']);
$administrator =($_POST['administrator']);

$user = new Users();

$pswd = new Password();

$pass_encrypt = $pswd->password_hash($pass, PASSWORD_BCRYPT);

switch ( $_GET['p'] ) {
    case "add":
        $user->AddUser($user_id,$pass_encrypt,$emp_pk,$administrator,$kpi_dashboard);
        header('location: ../main.php?m=142');
        break;
    case "edit":

        break;
    case "del":
        $id = htmlspecialchars($_REQUEST['id']);
        $isi->AddDelete($id);
        header('location: ../main.php?m=142');
        break;
}
ob_end_flush();