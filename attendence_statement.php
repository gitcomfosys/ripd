<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>

<style type="text/css">
    @import "css/bush.css";
    .formstyle td{
        padding: 0px;
        text-align: center;
    }
</style>

<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=EA"><b>ফিরে যান</b></a></div> 
        <div>         
            <form>
                <table  class="formstyle" style="width: 102%; margin: 5px 100px 25px 70px;">     
                    <?php
                    $result = mysql_query("Select  * from $dbname. employee_attendance where idemployee_attendance =1");
                    $row = mysql_fetch_array($result);
                    $id = $row['idemployee_attendance'];
                    $entry_date = $row['entry_date'];
                    $employee_intime = $row['employee_intime'];
                    $employee_outtime = $row['employee_outtime'];
                    $employee_worktime = $row['employee_worktime'];
                    $employee_gaptime = $row['employee_gaptime'];
                    $employee_staytime = $row['employee_staytime'];
                    $employee_extratime = $row['employee_extratime'];
                    $employee_stayextratime = $row['employee_stayextratime'];
                    $employee_staygaptime = $row['employee_staygaptime'];
                    $employee_officeday = $row['employee_officeday'];
                    $employee_presentday = $row['employee_presentday'];
                    $employee_attendancepercentage = $row['employee_attendancepercentage'];
                    echo "<table  class='formstyle'>";
                    echo"<tr>
                    <th colspan = '9'style = 'text-align: center;'>এটেন্ডেন্স স্টেটমেন্ট চার্ট<br /> (মোহাম্মদ ইব্রাহীম)
                            </th>
                            </tr>
                  <tr>
                        <td colspan='9' style='text-align: center'>
                            বছরঃ <select name='year' class='selectOption' style='width: 80px;'>
                                <option>২০১৩</option>
                                <option>২০১২</option>
                            </select> &nbsp মাসঃ
                            <select name='month' class='selectOption' style='width: 80px;'>
                                <option>জানুয়ারী</option>
                                <option>ফেব্রুয়ারী</option>
                                <option>মার্চ</option>
                                <option>এপ্রিল</option>
                                <option selected>মে</option>
                                <option>জুন</option>
                                <option>জুলাই</option>
                                <option>আগস্ট</option>
                                <option>সেপ্টেম্বর</option>
                                <option>অক্টোবর</option>
                                <option>নভেম্বর</option>
                                <option>ডিসেম্বর</option>
                            </select>
                        </td>
                    </tr>";

                    $result1 = mysql_query("SELECT * FROM $dbname. employee_attendance WHERE idemployee_attendance='$id' ");
                    echo"<tr  id='table_row_odd'>
                        <td>তারিখ</td>
                        <td>ইন টাইম</td>
                        <td>আউট টাইম</td>
                        <td>ওয়ার্ক টাইম</td>
                        <td>গ্যাপ টাইম</td>
                        <td>এক্সট্রা টাইম</td>
                        <td>স্টে টাইম</td>
                        <td>স্টে গ্যাপ টাইম</td>
                        <td>স্টে এক্সট্রা টাইম</td>
                    </tr>";
                    while ($row = mysql_fetch_array($result1)) {
                    $entry_date = $row['entry_date'];
                    $employee_intime = $row['employee_intime'];
                    $employee_outtime = $row['employee_outtime'];
                    $employee_worktime = $row['employee_worktime'];
                    $employee_gaptime = $row['employee_gaptime'];
                    $employee_staytime = $row['employee_staytime'];
                    $employee_extratime = $row['employee_extratime'];
                    $employee_stayextratime = $row['employee_stayextratime'];
                    $employee_staygaptime = $row['employee_staygaptime'];
                    $employee_officeday = $row['employee_officeday'];
                    $employee_presentday = $row['employee_presentday'];
                    $employee_attendancepercentage = $row['employee_attendancepercentage'];
                    echo "<tr>
                                    <td>$entry_date</td>
                                    <td>$employee_intime</td>
                                    <td>$employee_outtime</td>
                                    <td>$employee_worktime</td>
                                    <td>$employee_gaptime</td>
                                    <td>$employee_staytime</td>        
                                   <td>$employee_extratime</td>
                                   <td>$employee_stayextratime</td>
                                   <td>$employee_staygaptime</td>
                                </tr>";
                    echo"<tr>
                            <th colspan = '9'style = 'text-align: center;'>এটেন্ডেন্স স্টেটমেন্ট চার্ট<br /> (মোহাম্মদ ইব্রাহীম)</th>
                                </tr>
                        <tr id = 'table_row_odd'>
                        <td>এটেন্ডেন্স হার</td>
                        <td>টোটাল অফিস ডে</td>
                        <td>এ্যাবেসেন্ট ডে</td>
                        </tr>
                        <tr>
                        <td>$employee_officeday</td>
                                   <td>$employee_presentday</td>
                                   <td>$employee_attendancepercentage</td>
                        </tr>";
                    }
                    ?>   
            </table>    
            </form>
        </div>
    </div>
</div>
<?php
include 'includes/footer.php';
?>