<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<?php

//$user_id = $_SESSION['UserID'];
$user_id = "1";
$current_salestore_id = 1;//need to dynamic query for sales store name
$flag = 'false';
//*****************************************************************
//select office or saleStore_id from cfs_user and office or store relationship using user_id .... Needed

$monthDayNumber = 31;
$dayLoop = 1;
if (isset($_POST['submit'])) {
    for($dayLoop =1; $dayLoop<=$monthDayNumber;$dayLoop++){
        $date_var = "date_".$dayLoop;
        $SONDay = "special_on_day_".$dayLoop;
        $SOffDay = "special_off_day_".$dayLoop;
        $date_date = $_POST[$date_var];
        $special_on_day = $_POST[$SONDay];
        $special_off_day = $_POST[$SOffDay];
        //Check in Special On Day Table
        $check_SOnDay_sql = mysql_query("SELECT * from ".$dbname.".special_onday where spN_date = '$date_date' And office_type='salesStore' And offday_officeStore='$current_salestore_id'");
        $check_SOnDay_row_number = mysql_num_rows($check_SOnDay_sql);
        //check in Special Off Day Table
        $check_SOffDay_sql = mysql_query("SELECT * from ".$dbname.".special_offday where sp_off_day_date = '$date_date' And office_type='salesStore' And offday_officeStore='$current_salestore_id'");
        $check_SOffDay_row_number = mysql_num_rows($check_SOffDay_sql);
        
         //...........................Test Echo for see output.............................................
        //echo "date: ".$date_date." SON: ".$special_on_day." SOFFD:**".$special_off_day."##check_SOnDay_row_number: ".$check_SOnDay_row_number."check_SOffDay_row_number: ".$check_SOffDay_row_number."<br />";
        if($special_on_day!="" && $check_SOnDay_row_number<1){
          $sql_insert_special_onday = "INSERT into $dbname.special_onday (spN_date, spN_description, spN_insert_date, office_type, cfs_user_idUser, offday_officeStore) 
                                                    VALUES ('$date_date', '$special_on_day', NOW(), 'salesStore', '$user_id', '$current_salestore_id')";       
          if(mysql_query($sql_insert_special_onday)){
              $flag = 'true';
          }else{
              $flag = 'false';
              break;
          }
        }
        elseif($check_SOnDay_row_number>0){
            $sql_update_special_onday = "UPDATE ".$dbname.".special_onday SET spN_description='$special_on_day', spN_insert_date=NOW(),cfs_user_idUser='$user_id' where spN_date = '$date_date' And office_type='salesStore' And offday_officeStore='$current_salestore_id'";
            if(mysql_query($sql_update_special_onday)){
              $flag = 'true';
          }else{
              $flag = 'false';
              break;
          }
        }else{}
        //Special Off day
        if($special_off_day!="" && $check_SOffDay_row_number<1){
           $sql_insert_special_offday = "INSERT into $dbname.special_offday (sp_off_day_date, sp_off_day_description, sp_off_day_insert_date, office_type, cfs_user_idUser, offday_officeStore) 
                                                    VALUES ('$date_date', '$special_off_day', NOW(), 'salesStore', '$user_id', '$current_salestore_id')";
           if(mysql_query($sql_insert_special_offday)){
              $flag = 'true';
          }else{
              $flag = 'false';
              break;
          }
        }elseif($check_SOffDay_row_number>0){
            $sql_update_special_offday = "UPDATE ".$dbname.".special_offday SET sp_off_day_description='$special_off_day', sp_off_day_insert_date=NOW(),cfs_user_idUser='$user_id' where sp_off_day_date = '$date_date' And office_type='salesStore' And offday_officeStore ='$current_salestore_id'";
            if(mysql_query($sql_update_special_offday)){
              $flag = 'true';
          }else{
              $flag = 'false';
              break;
          }
        }else{}
    }    
    if($flag=='true'){
        $msg = "Your Operation Has Successfully Completed";
    }else{
        $msg = "Error, Please Try Again.";
    }
}
?>
<style type="text/css">
    @import "css/bush.css";
    .cal_table td{
        text-align: center;
        font-size: 14px;
    }
</style>
<div style="padding-top: 10px;">
    <?php

    class Calendar {

        var $events;

        function Calendar($date) {
            if (empty($date))
                $date = time();
            define('NUM_OF_DAYS', date('t', $date));
            define('CURRENT_DAY', date('j', $date));
            define('CURRENT_MONTH_A', date('F', $date));
            define('CURRENT_MONTH_N', date('n', $date));
            define('CURRENT_YEAR', date('Y', $date));
            define('START_DAY', date('w', mktime(0, 0, 0, CURRENT_MONTH_N, 1, CURRENT_YEAR)));
            define('COLUMNS', 7);
            define('PREV_MONTH', $this->prev_month());
            define('NEXT_MONTH', $this->next_month());
        }

        function dayName($dayNumber) {
            if ($dayNumber == 1) {
                return "রবি";
            } elseif ($dayNumber == 2) {
                return "সোম";
            } elseif ($dayNumber == 3) {
                return "মঙ্গল";
            } elseif ($dayNumber == 4) {
                return "বুধ";
            } elseif ($dayNumber == 5) {
                return "বৃহস্পতি";
            } elseif ($dayNumber == 6) {
                return "শুক্র";
            } else {
                return "শনি";
            }
        }

        function prev_month() {
            return mktime(0, 0, 0, (CURRENT_MONTH_N == 1 ? 12 : CURRENT_MONTH_N - 1), (checkdate((CURRENT_MONTH_N == 1 ? 12 : CURRENT_MONTH_N - 1), CURRENT_DAY, (CURRENT_MONTH_N == 1 ? CURRENT_YEAR - 1 : CURRENT_YEAR)) ? CURRENT_DAY : 1), (CURRENT_MONTH_N == 1 ? CURRENT_YEAR - 1 : CURRENT_YEAR));
        }

        function next_month() {
            return mktime(0, 0, 0, (CURRENT_MONTH_N == 12 ? 1 : CURRENT_MONTH_N + 1), (checkdate((CURRENT_MONTH_N == 12 ? 1 : CURRENT_MONTH_N + 1), CURRENT_DAY, (CURRENT_MONTH_N == 12 ? CURRENT_YEAR + 1 : CURRENT_YEAR)) ? CURRENT_DAY : 1), (CURRENT_MONTH_N == 12 ? CURRENT_YEAR + 1 : CURRENT_YEAR));
        }

        function makeCalendar($current_salestore_id,$msg,$flag) {    
            echo '<div style="padding-left: 50px;"><a href="index.php?apps=CA"><b>ফিরে যান</b></a></div>';
            echo '<form name="calender_form" method="POST" onsubmit="">';
            echo '<table class ="cal_table" cellspacing="0" style="width:90%; margin-left: 50px;"><tr>';
            echo '<td colspan="5" height="40px"><b>সেলস স্টোর ('.$current_salestore_id.') ডে এন্ড অফ ডে ক্যালেন্ডার তৈরি</b></td></tr><tr>';
            if(!empty($msg)){
                if($flag=='true'){
                    echo '<td colspan="5" height="40px"><b><span style="color:green;font-size:25px;"><blink>'.$msg.'</blink></b></td></tr><tr>';
                }else{
                    echo '<td colspan="5" height="40px"><b><span style="color:red;font-size:25px;"><blink>'.$msg.'</blink></b></td></tr><tr>';
                }
            }
            echo '<td><a href="?date=' . PREV_MONTH . '"><img src="images/back.ico" height="35px" width="35px"></img></a></td>';
            echo '<td colspan="3" ><b>' . CURRENT_MONTH_A . ' - ' . CURRENT_YEAR . '</b></td>';
            echo '<td><a href="?date=' . NEXT_MONTH . '"><img src="images/back.ico" height="35px" width="35px" style="-moz-transform: rotate(-180deg);"></img></a></td>';
            echo '</tr>
                <tr bgcolor = #06ACE5>';

            echo '<td>বার</td>';
            echo '<td>তারিখ</td>';
            echo '<td>RIPD and Govt. HD</td>';
            echo '<td>Special On Day</td>';
            echo '<td>Special Off Day</td>';
            echo '</tr>';
            /// Weekly Holyday **************        
            $WHdayValue = '';
            $WHdayValue2 = '';

            //$row_number = 1;
            $dayNumber = 1;
            $sql_WHday = "SELECT * from " . $dbname . ".weekly_holiday where office_type='salesStore' And offday_officeStore ='$current_salestore_id'";
            $rs_WHday = mysql_query($sql_WHday);
            while ($row_WHday = mysql_fetch_array($rs_WHday)) {
                $weekly_hd_value = $row_WHday['holiday_value'];
                $weekly_hd_serial = $row_WHday['holiday_serial'];
                if($weekly_hd_serial==1){
                $WHdayValue = $weekly_hd_value;
                //$row_number = 2;
                }else{
                    $WHdayValue2 = $weekly_hd_value;
                    //$row_number = 1;
                }
            }
            if (empty($WHdayValue)){
                $WHdayValue = 101;
            }
            if (empty($WHdayValue2)){
                $WHdayValue2 = 101;
            }
            
            for ($i = 1; $i <= NUM_OF_DAYS + START_DAY; $i++) {
                if ($i > START_DAY) {
                    $monthDate = $i - START_DAY;
                    //echo $i.''.CURRENT_MONTH_N.''.CURRENT_YEAR;                    
                    $CurDate = CURRENT_YEAR . '-' . CURRENT_MONTH_N . '-' . $monthDate;
                    //echo $CurDate;
                    $colorValueHDay = '#F05656'; //dayValue
                    $colorValueOnDay = '#458F8E';
                    $colorRGovt = '#DBEAF9';
                    $SODayDesc = '';
                    $RGHDayDesc = '';
                    $specialOffDay = '#FBF791';
                    $specialOnDay = '#9BF58E';
                    // Search in Ripd and Govt Holiday Table
                    $sql_RGHoliday=  mysql_query("SELECT * from ".$dbname.".ripd_and_govt_holiday where rng_holiday_date = '$CurDate'");
                    $RGHolidayRow = mysql_fetch_array($sql_RGHoliday);
                    $RGHolidayDesc = $RGHolidayRow['rng_hd_description']; 
                    //Search in Special OnDay Table
                    $sql_SOnDay=  mysql_query("SELECT * from ".$dbname.".special_onday where spN_date = '$CurDate' And office_type='salesStore' And offday_officeStore ='$current_salestore_id'");
                    $SpecialOnDayRow = mysql_fetch_array($sql_SOnDay);
                    $SpecialOnDayDesc = $SpecialOnDayRow['spN_description']; 
                    //Search in Special OffDay Table
                    $sql_SOffDay=  mysql_query("SELECT * from ".$dbname.".special_offday where sp_off_day_date = '$CurDate' And office_type='salesStore' And offday_officeStore ='$current_salestore_id'");
                    $SpecialOffDayRow = mysql_fetch_array($sql_SOffDay);
                    $SpecialOffDayDesc = $SpecialOffDayRow['sp_off_day_description']; 
                    
                    if (($i % $WHdayValue) == 0 OR ($i % $WHdayValue2) == 0) {

                        echo "<tr bgcolor= '$colorValueHDay'><td bgcolor= '$colorValueHDay'>" . $this->dayName($dayNumber) . "</td>";
                        echo "<td><input type=\"hidden\" name=\"date_$monthDate\" value=\"$CurDate\">$CurDate</td>";
                        echo "<td><textarea style=\"height: 30px; width: 165px; margin:0px\" id=\"Ripd_govt\" name=\"Ripd_govt\" readonly>$RGHolidayDesc</textarea></td>";
                        
                        echo "<td bgcolor = '$specialOnDay'><textarea style=\"height: 30px; width: 165px; margin:0px\" id=\"special_on_day\" name=\"special_on_day_$monthDate\">$SpecialOnDayDesc</textarea></td>";
                        echo "<td bgcolor = '$specialOffDay'><textarea style=\"height: 30px; width: 165px; margin:0px\" id=\"special_off_day\" name=\"special_off_day_$monthDate\" readonly></textarea></td></tr>";
                        if (($i % $WHdayValue) == 0) {
                            $WHdayValue = $WHdayValue + 7;
                        }else{
                            $WHdayValue2 = $WHdayValue2 + 7;
                        }
                    } else {
                        echo "<tr><td>" . $this->dayName($dayNumber) . "</td>";
                        echo "<td><input type=\"hidden\" name=\"date_$monthDate\" value=\"$CurDate\"/>$CurDate</td>";
                        echo "<td bgcolor= '$colorRGovt'><textarea style=\"height: 30px; width: 165px; margin:0px\" id=\"Ripd_govt\" name=\"Ripd_govt\" readonly>$RGHolidayDesc</textarea></td>";
                        
                        if($RGHolidayDesc!=""){
                            echo "<td bgcolor = '$specialOnDay'><textarea style=\"height: 30px; width: 165px; margin:0px\" id=\"special_on_day\" name=\"special_on_day_$monthDate\">$SpecialOnDayDesc</textarea></td>";
                            echo "<td bgcolor = '$specialOffDay'><textarea style=\"height: 30px; width: 165px; margin:0px\" id=\"special_off_day\" name=\"special_off_day_$monthDate\" readonly></textarea></td></tr>";
                            }else{
                                echo "<td bgcolor = '$specialOnDay'><textarea style=\"height: 30px; width: 165px; margin:0px\" id=\"special_on_day\" name=\"special_on_day_$monthDate\" readonly></textarea></td>";
                                echo "<td bgcolor = '$specialOffDay'><textarea style=\"height: 30px; width: 165px; margin:0px\" id=\"special_off_day\" name=\"special_off_day_$monthDate\" >$SpecialOffDayDesc</textarea></td></tr>";
                            }
                    }
                } else {
                    if (($i % $WHdayValue) == 0 OR ($i % $WHdayValue2) == 0) {
                        if (($i % $WHdayValue) == 0) {
                            $WHdayValue = $WHdayValue + 7;
                        }else
                            $WHdayValue2 = $WHdayValue2 + 7;
                    }
                }

                if ($i % 7 == 0) {
                    $dayNumber = 1;
                } else {
                    $dayNumber = $dayNumber + 1;
                }
            }
            echo '<tr><td colspan="5" style="text-align:center; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>         
                    </tr>';
    echo '</table>';
    echo '</form>';
            //echo str_repeat('<td width = 11% height =40px style="background-color: #DBEAF9">&nbsp;</td>', (COLUMNS * $row_number) - (NUM_OF_DAYS + START_DAY)) . '</tr></table>';
        }

    }

    $cal = new Calendar($_GET['date']);
    $cal->makeCalendar($current_salestore_id,$msg,$flag);
    ?>
</div>       
<?php
include 'footer.php';
?>