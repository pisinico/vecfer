<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$serverName = "localhost";
$connectionOptions = array(
    "Database" => "numele_bazei_de_date",
    "Uid" => "dutan",
    "PWD" => "parola"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
} else {
    echo "Connected successfully";
}
?>
