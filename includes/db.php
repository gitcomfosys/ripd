<?php
global $back_con;

$back_host = 'localhost';
$back_dbuser = 'root';
$back_dbpassword = '';
$back_dbname = 'test_ripd';
/*
$back_host = 'localhost';
$back_dbuser = 'comfosys';
$back_dbpassword = '**comfo12345';
$back_dbname = 'comfosys_test_ripd';
 */
$back_con = mysql_connect($back_host, $back_dbuser, $back_dbpassword);
mysql_set_charset('utf8', $back_con);
if (!$back_con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db($back_dbname, $back_con);
if (!isset($_SESSION['back_database_name'])) {
    $_SESSION['back_database_name'] = $back_dbname;
}
?>
