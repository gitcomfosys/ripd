<?php
error_reporting(0);
include 'includes/ConnectDB.inc';
if (isset($_GET['key']) && $_GET['key'] != '') {
	//Add slashes to any quotes to avoid SQL problems.
	 $offc = $_GET['key'];
	$suggest_query = "SELECT * FROM  office WHERE office_name like  ('%" .$offc . "%') ORDER BY office_name";
	$reslt= mysql_query($suggest_query) or exit("die");
	while($suggest = mysql_fetch_assoc($reslt)) {
	            echo "<a style='text-decoration:none;color:brown;' href=shift_amount.php?code=" . $suggest['idOffice'] . ">" . $suggest['office_name'] . "</a></br>";
        	}
}
?>
