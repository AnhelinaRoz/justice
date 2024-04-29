<?php
require_once("./php_scripts/env.php");
$connect = mysqli_connect($host, $login, $password, $bd_name);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
function CustomQuery() {
    global $connect;  
    print_r($connect);
}

CustomQuery(); 