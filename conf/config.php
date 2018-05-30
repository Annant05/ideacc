<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 27/4/18
 * Time: 10:21 PM
 */

require_once(dirname(dirname(__FILE__)) . '/inc/class/DAL.php');
require_once(dirname(dirname(__FILE__)) . '/inc/class/SharedFunctions.php');


//The Following URL needs to changed when used on local connections
$rootUrl = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

// Database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_DB', 'acc');
define('BR', "<BR>");
define('ROOT_URL', $rootUrl);
define('INSTRUCTOR', "instructor");
define('STUDENT', "student");
?>