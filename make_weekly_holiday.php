<?php
error_reporting(0);
include_once 'includes/header.php';
include_once 'includes/ConnectDB.inc';
session_start();
?>
<?php
//$user_id = $_SESSION['UserID'];
$user_id = "1";
// find out office type and office_id or sales_store_id and sales_store_name using user_id
$office_type = 'office';
$office_or_sales_store_id = 1;
$sales_store_name = 'সেলস স্টোর ০১';
$flag_first_holiday = 'false';
$flag_second_holiday = 'false';
if($office_type=='office'){
    $heading_name = "অফিস";
}
if($office_type=='salesStore'){
    $heading_name = "সেলস স্টোর (".$sales_store_name.")";
}

if (isset($_POST['submit'])) {
    $fisrt_holiday_value = $_POST['first_weekly_holiday'];
    $second_holiday_value = $_POST['second_weekly_holiday'];
    $holiday_description = $_POST['holiday_description'];
    //select office_id from cfs_user and office or store relationship using user_id
    //$office_id = 1;
    //echo "First Weekly Holiday: " . $fisrt_holiday_value . "\n" . " Second Weekly Holiday: " . $second_holiday_value . " UserID: " . $user_id . " Description: " . $holiday_description;
    //Check 1st Weekly Holiday entry in weekly holiday Table
    $check_first_whd_sql = mysql_query("SELECT * from " . $dbname . ".weekly_holiday where office_type = '$office_type' And holiday_serial = '1' And offday_officeStore='$office_or_sales_store_id'");
    $check_first_whd_row_number = mysql_num_rows($check_first_whd_sql);
    //Check 1st Weekly Holiday entry in weekly holiday Table
    $check_second_whd_sql = mysql_query("SELECT * from " . $dbname . ".weekly_holiday where office_type = '$office_type' And holiday_serial = '2' And offday_officeStore='$office_or_sales_store_id'");
    $check_second_whd_row_number = mysql_num_rows($check_second_whd_sql);
    if ($check_first_whd_row_number < 1) {
        $sql_insert_weekly_holiday_first = "INSERT into " . $dbname . ".weekly_holiday (holiday_value, holiday_serial, office_type, wh_description, wh_insert_date, cfs_user_idUser, offday_officeStore) 
                                                    VALUES ('$fisrt_holiday_value', '1', '$office_type', '$holiday_description', NOW(), '$user_id', '$office_or_sales_store_id')";
        if (mysql_query($sql_insert_weekly_holiday_first)) {
            $flag_first_holiday = 'true';
        } else {
            $flag_first_holiday = 'false';
            //break;
        }
    } elseif ($check_first_whd_row_number > 0) {
        $sql_update_weekly_holiday_first = "UPDATE " . $dbname . ".weekly_holiday SET holiday_value='$fisrt_holiday_value', wh_description='$holiday_description', wh_insert_date=NOW(),cfs_user_idUser='$user_id' where office_type = '$office_type' And holiday_serial = '1' And offday_officeStore='$office_or_sales_store_id'";
        if (mysql_query($sql_update_weekly_holiday_first)) {
            $flag_first_holiday = 'true';
        } else {
            $flag_first_holiday = 'false';
            //break;
        }
    } else {
        
    }
    if ($check_second_whd_row_number < 1) {
        $sql_insert_weekly_holiday_second = "INSERT into " . $dbname . ".weekly_holiday (holiday_value, holiday_serial, office_type, wh_description, wh_insert_date, cfs_user_idUser, offday_officeStore) 
                                                    VALUES ('$second_holiday_value', '2', '$office_type', '$holiday_description', NOW(), '$user_id', '$office_or_sales_store_id')";
        if (mysql_query($sql_insert_weekly_holiday_second)) {
            $flag_second_holiday = 'true';
        } else {
            $flag_second_holiday = 'false';
            //break;
        }
    } elseif ($check_second_whd_row_number > 0) {
        $sql_update_weekly_holiday_second = "UPDATE " . $dbname . ".weekly_holiday SET holiday_value='$second_holiday_value', wh_description='$holiday_description', wh_insert_date=NOW(),cfs_user_idUser='$user_id' where office_type = '$office_type' And holiday_serial = '2' And offday_officeStore='$office_or_sales_store_id'";
        if (mysql_query($sql_update_weekly_holiday_second)) {
            $flag_second_holiday = 'true';
        } else {
            $flag_second_holiday = 'false';
            //break;
        }
    } else {
        
    }
    if ($flag_first_holiday == 'true' && $flag_second_holiday == 'true') {
        $msg = "Your Operation Has Successfully Completed";
    } else {
        $msg = "Error, Please Try Again.";
    }
}
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<?php
// Search for weekly Holiday Table
$first_weekly_holiday = '';
$second_weekly_holiday = '';
$weekly_hd_desc = "";
//$weekly_hd_row = 1;

$sql_weekly_hd = mysql_query("SELECT * from " . $dbname . ".weekly_holiday where office_type = '$office_type' And offday_officeStore='$office_or_sales_store_id'");
while ($row_weekly_hd = mysql_fetch_array($sql_weekly_hd)) {
    $weekly_hd_serial = $row_weekly_hd['holiday_serial'];
    if ($weekly_hd_serial == '1') {
        $first_weekly_holiday = $row_weekly_hd['holiday_value'];
        $weekly_hd_desc = $row_weekly_hd['wh_description'];
    } else {
        $second_weekly_holiday = $row_weekly_hd['holiday_value'];
        $weekly_hd_desc = $row_weekly_hd['wh_description'];
    }
}
//echo "First_whd: " . $first_weekly_holiday . " seconf_whd: " . $second_weekly_holiday . " WDesc: " . $weekly_hd_desc;
?>
<div class="columnSld" style=" padding-left: 50px;">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=OSP"><b>ফিরে যান</b></a></div>
        <div>           
            <form method="POST" onsubmit="">	
                <table class="formstyle"  style=" width: 98%; ">          
                    <tr><th style="text-align: center" colspan="2"><h1>সাপ্তাহিক ছুটির দিন নির্ধারণ - <?php echo $heading_name;?></h1></th></tr>
                    <?php
                    if (!empty($msg)) {
                        if ($flag_first_holiday == 'true' && $flag_second_holiday == 'true') {
                            echo '<tr><td colspan="2" style="text-align: center;"><b><span style="color:green;font-size:20px;"><blink>' . $msg . '</blink></b></td></tr>';
                        } else {
                            echo '<tr><td colspan="2" style="text-align: center;"><b><span style="color:red;font-size:20px;"><blink>' . $msg . '</blink></b></td></tr>';
                        }
                    }
                    ?>
                    <tr>
                        <td style="width: 50%;">প্রথম সাপ্তাহিক ছুটির দিন</td>
                        <td >: <select class="box2" style="width:150px; height: 30px;" name="first_weekly_holiday" style="width: 150px;">
                                <option <?php if ($first_weekly_holiday == "101" || empty($first_weekly_holiday)) echo 'selected'; ?> value="101">নো ডে</option>
                                <option <?php if ($first_weekly_holiday == "1") echo 'selected'; ?> value="1" >রবি</option>
                                <option <?php if ($first_weekly_holiday == "2") echo 'selected'; ?> value="2">সোম</option>
                                <option <?php if ($first_weekly_holiday == "3") echo 'selected'; ?> value="3">মঙ্গল</option>
                                <option <?php if ($first_weekly_holiday == "4") echo 'selected'; ?> value="4">বুধ</option>
                                <option <?php if ($first_weekly_holiday == "5") echo 'selected'; ?> value="5">বৃহস্পতি</option>
                                <option <?php if ($first_weekly_holiday == "6") echo 'selected'; ?> value="6">শুক্র</option>
                                <option <?php if ($first_weekly_holiday == "7") echo 'selected'; ?> value="7">শনি</option>
                            </select>    
                        </td>
                    </tr>
                    <tr>
                        <td>দ্বিতীয় সাপ্তাহিক ছুটির দিন</td>
                        <td>: <select class="box2" style="width:150px; height: 30px;" name="second_weekly_holiday">
                                <option <?php if ($second_weekly_holiday == "101" || empty($second_weekly_holiday)) echo 'selected'; ?> value="101">নো ডে</option>
                                <option <?php if ($second_weekly_holiday == "1") echo 'selected'; ?> value="1" >রবি</option>
                                <option <?php if ($second_weekly_holiday == "2") echo 'selected'; ?> value="2">সোম</option>
                                <option <?php if ($second_weekly_holiday == "3") echo 'selected'; ?> value="3">মঙ্গল</option>
                                <option <?php if ($second_weekly_holiday == "4") echo 'selected'; ?> value="4">বুধ</option>
                                <option <?php if ($second_weekly_holiday == "5") echo 'selected'; ?> value="5">বৃহস্পতি</option>
                                <option <?php if ($second_weekly_holiday == "6") echo 'selected'; ?> value="6">শুক্র</option>
                                <option <?php if ($second_weekly_holiday == "7") echo 'selected'; ?> value="7">শনি</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>ডেসক্রিপশন</td> 
                        <td style="padding-left: 10px;"><textarea id="holiday_description" name="holiday_description"><?php echo $weekly_hd_desc; ?></textarea></td>
                    </tr>
                    <tr>                    
                        <td colspan="2" style="text-align: center;" ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>         
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php include_once 'includes/footer.php'; ?>
