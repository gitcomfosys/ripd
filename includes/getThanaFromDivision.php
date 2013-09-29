<?php
include 'ConnectDB.inc';


//get thana name
$dv_id = $_GET['tid'];
if ($th_id == "all") {
    $thana_sql = mysql_query("SELECT * FROM $dbname.thana ORDER BY thana_name ASC");
    echo "<select name='thana_id' id='thana_id' required>
                            <option value=''>-থানা-</option>";
    while ($thana_rows = mysql_fetch_array($thana_sql)) {
        $db_thana_id = $thana_rows['idThana'];
        $db_thana_name = $thana_rows['thana_name'];
        echo "<option value='$db_thana_id'>$db_thana_name</option>";
    }
    echo "</select>";
} else {
    $dist_sql = mysql_query("SELECT * FROM ".$dbname.".district WHERE Division_idDivision = '" . $dv_id . "' ORDER BY district_name ASC");
    
echo "<select name='thana_id' id='thana_id' required>
                            <option value=''>-থানা-</option>";
while ($dist_rows = mysql_fetch_array($dist_sql)) {
    $db_dist_id = $thana_rows['idDivision'];
    $thana_id = mysql_query("SELECT * FROM  ".$dbname.".thana WHERE District_idDistrict = '".$db_dist_id."' ORDER BY thana_name ASC");
        
while($thana_number_rows = mysql_fetch_array($thana_id)){
            $db_thana_id1 = $thana_number_rows ['idThana'];
                    $db_thana_name1 = $thana_number_rows ['thana_name'];
                    echo "<option value='$db_thana_id1'>$db_thana_name1</option>";
                        }
}
echo "</select>";
}

?>
