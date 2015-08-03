<?php
/**
 * Created by PhpStorm.
 * User: ekobudisusilo
 * Date: 26 /06 /15
 * Time: 07.29
 */
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once '/Applications/MAMP/htdocs/isias/classes/class.Akuns.php';

$type = $_REQUEST['tipe_id'];

$list = new Akuns();

$list->getAccountByType($type);

