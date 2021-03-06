<?php

session_start();

/* $Id: ConnectDB_mysql.inc 4861 2012-01-31 21:48:58Z vvs2012 $ */

global  $db;

$host = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'ripd_db_comfosys';
/*
 $host = 'localhost';
$dbuser = 'comfosys';
$dbpassword = '**comfo12345';
$dbname = 'comfosys_ripd_db_comfo';
*/
$_SESSION['DatabaseName'] = $dbname;
/*if(!isset($_SESSION['DatabaseName'])){
    $_SESSION['DatabaseName'] = $dbname;
}*/
// Make sure it IS global, regardless of our context
if (!isset($mysqlport)){
	$mysqlport = 3306;
}
$db = mysql_connect($host.':'.$mysqlport , $dbuser, $dbpassword);
mysql_select_db($dbname);
//this statement sets the charset to be used for sending data to and from the db server
//if not set, both mysql server and mysql client/library may assume otherwise
mysql_set_charset('utf8', $db);

//$varabc =  mysql_client_encoding($db);
//printf("client encoding is %s\n", $varabc);


if ( !$db ) {
	echo '<br />' . _('The configuration for the database user name and password do not provide the information required to connect to the database server');
	session_unset();
	session_destroy();
	echo '<p>' . _('Click') . '<a href="index.php">' . _('here') . '</a>' ._('to try logging in
again') . '</p>';

	exit;
}

require_once ('MiscFunctions.php');

//DB wrapper functions to change only once for whole application

function DB_query ($SQL,
		&$Conn,
		$ErrorMessage='',
		$DebugMessage= '',
		$Transaction=false,
		$TrapErrors=true){

	global $debug;
	global $PathPrefix;
	
	$result=mysql_query($SQL,$Conn);
	$_SESSION['LastInsertId'] = mysql_insert_id($Conn);

	if ($DebugMessage == '') {
		$DebugMessage = _('The SQL that failed was');
	}

	if (DB_error_no($Conn) != 0 AND $TrapErrors==true){
		if ($TrapErrors){
			require_once($PathPrefix . 'includes/header.php');
		}
		prnMsg($ErrorMessage.'<br />' . DB_error_msg($Conn),'error', _('Database Error'));
		if ($debug==1){
			prnMsg($DebugMessage. "<br />$SQL<br />",'error',_('Database SQL Failure'));
			}
		if ($Transaction){
			$SQL = 'rollback';
			$Result = DB_query($SQL,$Conn);
			if (DB_error_no($Conn) !=0){
				prnMsg(_('Error Rolling Back Transaction'), '', _('Database Rollback Error') );
			}
		}
		if ($TrapErrors){
			include($PathPrefix . 'includes/footer.php');
			exit;
		}
	}

	return $result;

}

function DB_fetch_row (&$ResultIndex) {

	$RowPointer=mysql_fetch_row($ResultIndex);
	Return $RowPointer;
}

function DB_fetch_assoc (&$ResultIndex) {

	$RowPointer=mysql_fetch_assoc($ResultIndex);
	Return $RowPointer;
}

function DB_fetch_array (&$ResultIndex) {

	$RowPointer=mysql_fetch_array($ResultIndex);
	Return $RowPointer;
}

function DB_data_seek (&$ResultIndex,$Record) {
	mysql_data_seek($ResultIndex,$Record);
}

function DB_free_result (&$ResultIndex){
	mysql_free_result($ResultIndex);
}

function DB_num_rows (&$ResultIndex){
	return mysql_num_rows($ResultIndex);
}
// Added by MGT
function DB_affected_rows(&$ResultIndex){
	return mysql_affected_rows($ResultIndex);
}

function DB_error_no (&$Conn){
	return mysql_errno($Conn);
}

function DB_error_msg(&$Conn){
	return mysql_error($Conn);
}

function DB_Last_Insert_ID(&$Conn,$table, $fieldname){
//	return mysql_insert_id($Conn);
	if (isset($_SESSION['LastInsertId'])) {
		$Last_Insert_ID = $_SESSION['LastInsertId'];
	} else {
		$Last_Insert_ID = 0;
	}
//	unset($_SESSION['LastInsertId']);
	return $Last_Insert_ID;
}

function DB_escape_string($String){
	return mysql_real_escape_string(htmlspecialchars($String, ENT_COMPAT, 'utf-8', false));
}

function DB_show_tables(&$Conn){
	$Result = DB_query('SHOW TABLES',$Conn);
	Return $Result;
}

function DB_show_fields($TableName, &$Conn){
	$Result = DB_query("DESCRIBE $TableName",$Conn);
	Return $Result;
}

function interval( $val, $Inter ){
		global $dbtype;
		return "\n".'interval ' . $val . ' '. $Inter."\n";
}

function DB_Maintenance($Conn){

	prnMsg(_('The system has just run the regular database administration and optimisation routine.'),'info');

	$TablesResult = DB_query('SHOW TABLES',$Conn);
	while ($myrow = DB_fetch_row($TablesResult)){
		$Result = DB_query('OPTIMIZE TABLE ' . $myrow[0],$Conn);
	}

	$Result = DB_query("UPDATE config
				SET confvalue='" . Date('Y-m-d') . "'
				WHERE confname='DB_Maintenance_LastRun'",
				$Conn);
}


function DB_Txn_Begin($Conn){
	mysql_query("SET autocommit=0",$Conn);
	mysql_query("START TRANSACTION",$Conn);
}

function DB_Txn_Commit($Conn){
	mysql_query("COMMIT",$Conn );
	mysql_query("SET autocommit=1",$Conn);
}

function DB_Txn_Rollback($Conn){
    mysql_query("ROLLBACK", $Conn );
}

function DB_IgnoreForeignKeys($Conn){
	mysql_query("SET FOREIGN_KEY_CHECKS=0",$Conn);
}
function DB_ReinstateForeignKeys($Conn){
	mysql_query("SET FOREIGN_KEY_CHECKS=1",$Conn);
}

?>
