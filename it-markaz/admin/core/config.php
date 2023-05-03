<?php 

define('DB_NAME', "itmarkaz");
define('DB_HOST', "localhost");
define('DB_USER', "root");
define('DB_PASS', "");
define('URL', "http://it-markaz.uz");
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$link) {
    die("Connnection failed: ".mysqli_connect_error());
}


?>
