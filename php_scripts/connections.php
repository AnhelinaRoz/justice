<?php
global $host, $login, $password, $bd_name;
require_once("./php_scripts/env.php");
$connect = mysqli_connect($host, $login, $password, $bd_name);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
/**
 * @param $sql
 * @param $limit
 * @return array|false|null
 */
function CustomQuery($sql, $limit = false)
{
    global $connect;
    $result = $connect->query($sql);
    if ($limit === 1) {
        return $result->fetch_array(MYSQLI_ASSOC);
    } else {
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

