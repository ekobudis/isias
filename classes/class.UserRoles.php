<?php

include_once ('/Applications/MAMP/htdocs/isias/configs/pdo_connection.php');

/*if (!defined('PASSWORD_BCRYPT')) {
    define('PASSWORD_BCRYPT', 1);
    define('PASSWORD_DEFAULT', PASSWORD_BCRYPT);
}*/

class UserRoles extends DBConnection{

	function __construct(){
		parent::__construct();
	}
    
    
}
