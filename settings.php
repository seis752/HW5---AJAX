<?php
session_start();
# mysql db constants DB_HOST, DB_USER, DB_PASS, DB_NAME
$DB_HOST = 'mysql.seis752.com';
$DB_USER = 'seis752olga';
$DB_PASS = 'qzWzNEmEhn';
$DB_NAME = 'seis752olga_db';

$con=mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
    if(!$con)
    {
        die('Could not connect:' .mysql_error());
    }
    mysql_select_db($DB_NAME, $con);

if (!isset($_SESSION['user'])){
    header("Location: login.php");
}