<?php
include_once 'includes/ConnectDB.inc';
include_once 'includes/columnLeft.php';
?>

<style>
    #tooltip{
        position:absolute;
        border:1px solid #333;
        background:#f7f5d1;
        font-size: 15px;
        padding:2px 5px;
        color:#333;
        display:none;        
    }
    .date {
        text-decoration: none;
        color: #434849;
        height: 100px;
        width: 120px;
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

        function prev_month() {
            return mktime(0, 0, 0, (CURRENT_MONTH_N == 1 ? 12 : CURRENT_MONTH_N - 1), (checkdate((CURRENT_MONTH_N == 1 ? 12 : CURRENT_MONTH_N - 1), CURRENT_DAY, (CURRENT_MONTH_N == 1 ? CURRENT_YEAR - 1 : CURRENT_YEAR)) ? CURRENT_DAY : 1), (CURRENT_MONTH_N == 1 ? CURRENT_YEAR - 1 : CURRENT_YEAR));
        }

        function next_month() {
            return mktime(0, 0, 0, (CURRENT_MONTH_N == 12 ? 1 : CURRENT_MONTH_N + 1), (checkdate((CURRENT_MONTH_N == 12 ? 1 : CURRENT_MONTH_N + 1), CURRENT_DAY, (CURRENT_MONTH_N == 12 ? CURRENT_YEAR + 1 : CURRENT_YEAR)) ? CURRENT_DAY : 1), (CURRENT_MONTH_N == 12 ? CURRENT_YEAR + 1 : CURRENT_YEAR));
        }
///
        function makeCalendar() {
            echo '<table class ="cal_table" cellspacing="4" ><tr>';
            echo '<td colspan="7"><b>অফিস ডে এন্ড অফ ডে</b></td></tr><tr>';
            echo '<td width = 10% height =40px><a href="?apps=OD&date=' . PREV_MONTH . '"><img src="images/back.ico" height="35px" width="35px"></img></a></td>';
            echo '<td colspan="5" style="text-align:center">' . CURRENT_MONTH_A . ' - ' . CURRENT_YEAR . '</td>';
            echo '<td width = 10% height =40px><a href="?apps=OD&date=' . NEXT_MONTH . '"><img src="images/back.ico" height="35px" width="35px" style="-moz-transform: rotate(-180deg);"></img></a></td>';
            echo '</tr><tr bgcolor = #06ACE5>';
            echo '<td width = 10% height =40px>রবি</td>';
            echo '<td width = 10% height =40px>সোম</td>';
            echo '<td width = 10% height =40px>মঙ্গল</td>';
            echo '<td width = 10% height =40px>বুধ</td>';
            echo '<td width = 10% height =40px>বৃহস্পতি</td>';
            echo '<td width = 10% height =40px>শুক্র</td>';
            echo '<td width = 10% height =40px>শনি</td>';
            echo '</tr><tr>';
            /// Weekly Holyday **************        
            /// Weekly Holyday **************        
            $WHdayValue = '';
            $WHdayValue2 = '';
            $weekly_holiday_row = 1;

            $row_number = 1;
            //$dayNumber = 0;
            $weekly_holiday_desc = "";
            $sql_WHday = "SELECT * from " . $dbname . ".weekly_holiday where office_type ='office'";
            $rs_WHday = mysql_query($sql_WHday);
            while ($row_WHday = mysql_fetch_array($rs_WHday)) {
                $weekly_hd_value = $row_WHday['holiday_value'];
                $weekly_hd_serial = $row_WHday['holiday_serial'];
                $weekly_holiday_desc = $row_WHday['wh_description'];
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
                    $SODayDesc = '';
                    $RGHDayDesc = '';
                    $specialOffDay = '';
                    $specialOnDay = '';
                    if (($i % $WHdayValue) == 0 OR ($i % $WHdayValue2) == 0) {
                        //*******Special Onday
                        $sql_SODay = "SELECT * from ".$dbname.".special_onday where spN_date = '$CurDate' And office_type = 'office' And offday_officeStore = 1";
                        $rs_SODay = mysql_query($sql_SODay);
                        //echo "Rows from spOnday: ".mysql_num_rows($rs_SODay)."<br \>";
                        while ($row_SODay = mysql_fetch_array($rs_SODay)) {
                            $SODayDesc = $row_SODay['spN_description'];
                            $colorValueHDay = 'green';
                        }
                        if($SODayDesc!=""){
                            echo "<td bgcolor= '$colorValueHDay' width = 11% height = 40px><a class='tooltip date' title='$SODayDesc' href='#'><div height='40px' width = '100%'>" . $monthDate . "</div></a></td>";
                        }else{
                        echo "<td bgcolor= '$colorValueHDay' width = 11% height = 40px><a class='tooltip date' title='$weekly_holiday_desc' href='#'> <div height='40px' width = '100%'>" . $monthDate . "</div></a></td>";                         
                        }
                        if (($i % $WHdayValue) == 0) {
                            $WHdayValue = $WHdayValue + 7;
                        }else{
                            $WHdayValue2 = $WHdayValue2 + 7;
                        }
                    } else {
                        //******************* RIPD & Government Holyday
                        $sql_RGHDay = "SELECT * from ".$dbname.".ripd_and_govt_holiday where rng_holiday_date = '$CurDate'";
                        $rs_RGHDay = mysql_query($sql_RGHDay);
                        while ($row_RGHDay = mysql_fetch_array($rs_RGHDay)) {
                            $RGHDayDesc = $row_RGHDay['rng_hd_description'];
                        }
                        if ($RGHDayDesc!="") {
                            $sql_spOnDay = "SELECT * from ".$dbname.".special_onday where spN_date = '$CurDate' And office_type='office' And offday_officeStore = 1";
                            $rs_spOnDay = mysql_query($sql_spOnDay);

                            while ($row_spOnDay = mysql_fetch_array($rs_spOnDay)) {
                                $specialOnDay = $row_spOnDay['spN_description'];
                                $colorValueOnDay = 'green';
                            }
                            if ($specialOnDay!="") {
                                echo "<td bgcolor= '$colorValueOnDay' width = 11% height =40px><a class='tooltip date' title='$specialOnDay' href='#'><div height='40px' width = '100%'>" . $monthDate . "</div></a></td>";
                            } else {
                                echo "<td bgcolor= '$colorValueHDay' width = 11% height =40px><a class='tooltip date' title='$RGHDayDesc' href='#'><div height='40px' width = '100%'>" . $monthDate . "</div></a></td>";
                            }
                        } else {
                            $sql_spOffDay = "SELECT * from ".$dbname.".special_offday where sp_off_day_date = '$CurDate' And office_type='office' And offday_officeStore = 1";
                            $rs_spOffDay = mysql_query($sql_spOffDay);
                            while ($row_spOffDay = mysql_fetch_array($rs_spOffDay)) {
                                $specialOffDay = $row_spOffDay['sp_off_day_description'];
                                $colorValueOnDay = 'yellow';
                            }
                            if($specialOffDay!=""){
                                echo "<td bgcolor= '$colorValueOnDay' width = 11% height =40px><a class='tooltip date' title='$specialOffDay' href='#'><div height='40px' width = '100%'>" . $monthDate . "</div></a></td>";
                            }else{
                                echo "<td bgcolor= '$colorValueOnDay' width = 11% height =40px>" . $monthDate . "</td>";
                            }
                         }
                    }
                } else {
                    if (($i % $WHdayValue) == 0 OR ($i % $WHdayValue2) == 0) {
                        if (($i % $WHdayValue) == 0) {
                            $WHdayValue = $WHdayValue + 7;
                            echo "<td bgcolor= '#F05656' width = 11% height = 40px></td>";
                        }else{
                            $WHdayValue2 = $WHdayValue2 + 7;
                        echo "<td bgcolor= '#F05656' width = 11% height = 40px></td>";
                        }
                    }else{
                    echo "<td bgcolor= '#DBEAF9' width = 11% height = 40px></td>";
                    }
                }

                if ((($i) % COLUMNS) == 0 && $i != NUM_OF_DAYS + START_DAY) {
                    echo '</tr><tr>';
                    $row_number++;
                }
            }
            //echo "Row_number: ".$row_number."Column: ".COLUMNS." Num_of_day: ".NUM_OF_DAYS." Start_day: ".START_DAY;
            echo str_repeat('<td width = 11% height =40px style="background-color: #DBEAF9">&nbsp;</td>', (COLUMNS * ($row_number)) - (NUM_OF_DAYS + START_DAY)) . '</tr></table>';
        }

    }

    $cal = new Calendar($_GET['date']);
    $cal->makeCalendar();
    ?>
</div>