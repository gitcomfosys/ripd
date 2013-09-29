<?php

error_reporting(0);
include 'session.php';
$dbhost     = "localhost";
$dbname     = "ripd_db_comfosys";
$dbuser     = "root";
$dbpass     = "";
// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
$conn->exec("set names utf8");
$sql = "INSERT INTO charge(charge_criteria ,charge_amount ,charge_status) 
            VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

$db_charge_criteria = $_POST['acc_open_charge_name'];
$db_charge_amount = $_POST['acc_open_charge'];
$db_charge_status = $_POST['status'];

//print_r($_POST);
$stmt->execute(array($db_charge_criteria, $db_charge_amount,$db_charge_status));
header("charge_making.php");



?>
