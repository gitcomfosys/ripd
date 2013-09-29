<?php
error_reporting(0);
include 'ConnectDB.inc';

$type=$_GET['t'];
switch($type)
{
    case 1:
            $psql="SELECT * FROM " . $dbname . ".program WHERE program_type='presentation' AND program_location IS NOT NULL;";
            $prslt=mysql_query($psql) or exit('query failed: '.mysql_error());
            echo '<table>';
            echo '<tr>';
            echo '<td style="width: 40% !important; padding-right: 0px !important; ">প্রেজেন্টেশন- এর নাম</td>';
            echo '<td>';
            echo ': <select class="selectOption" name="ProgName" onchange="getall(this.value)" style=" width: 170px !important;">';
           while($prow=mysql_fetch_assoc($prslt))
            {
                $pid=$prow['idprogram'];
                $name=$prow['program_name'];
                echo "<option value='$pid'>$name</option>";
            }
            echo '</select>';
            echo "<input type='hidden' name='type' value=1 />";
            echo '</td></tr>';
            echo '<tr>                    
                      <td colspan= "2" style="padding-left: 310px ; padding-top: 10px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="ঠিক আছে" /></td>                           
                      </tr> ';
            echo '</table>';
        break;
    case 2:
            $psql="SELECT * FROM " . $dbname . ".program WHERE program_type='program' AND program_location IS NOT NULL;";
            $prslt=mysql_query($psql) or exit('query failed: '.mysql_error());
            echo '<table>';
            echo '<tr>';
            echo '<td style="width: 40% !important; padding-right: 0px !important; ">প্রোগ্রাম- এর নাম</td>';
            echo '<td>';
            echo ': <select class="selectOption" name="ProgName" onchange="getall(this.value)" style=" width: 170px !important;">';
            while($prow=mysql_fetch_assoc($prslt))
            {
                $pid=$prow['idprogram'];
                $name=$prow['program_name'];
                echo "<option value='$pid'>$name</option>";
            }
            echo '</select>';
            echo "<input type='hidden' name='type' value=2 />";
             echo '</td></tr>';
            echo '<tr>                    
                      <td colspan= "2" style="padding-left: 310px ; padding-top: 10px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="ঠিক আছে" /></td>                           
                      </tr> ';
            echo '</table>';
        break;
    case 3:
            $psql="SELECT * FROM " . $dbname . ".program WHERE program_type='training' AND program_location IS NOT NULL;";
            $prslt=mysql_query($psql) or exit('query failed: '.mysql_error());
            echo '<table>';
            echo '<tr>';
            echo '<td style="width: 40% !important; padding-right: 0px !important; ">ট্রেইনিং- এর নাম</td>';
            echo '<td>';
            echo ': <select class="selectOption" name="ProgName" onchange="getall(this.value)" style=" width: 170px !important;">';
            while($prow=mysql_fetch_assoc($prslt))
            {
                $pid=$prow['idprogram'];
                $name=$prow['program_name'];
                echo "<option value='$pid'>$name</option>";
            }
            echo '</select>';
            echo "<input type='hidden' name='type' value=3 />";
             echo '</td></tr>';
            echo '<tr>                    
                      <td colspan= "2" style="padding-left: 310px ; padding-top: 10px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="ঠিক আছে" /></td>                           
                      </tr> ';
            echo '</table>';
        break;
    case 4:
            $psql="SELECT * FROM " . $dbname . ".program WHERE program_type='travel' AND program_location IS NOT NULL;";
            $prslt=mysql_query($psql) or exit('query failed: '.mysql_error());
            echo '<table>';
            echo '<tr>';
            echo '<td style="width: 40% !important; padding-right: 0px !important; ">ট্রাভেল- এর নাম</td>';
            echo '<td>';
            echo ': <select class="selectOption" name="ProgName" onchange="getall(this.value)" style=" width: 170px !important;">';
            while($prow=mysql_fetch_assoc($prslt))
            {
                $pid=$prow['idprogram'];
                $name=$prow['program_name'];
                echo "<option value='$pid'>$name</option>";
            }
            echo '</select>';
            echo "<input type='hidden' name='type' value=4 />";
             echo '</td></tr>';
            echo '<tr>                    
                      <td colspan= "2" style="padding-left: 310px ; padding-top: 10px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="ঠিক আছে" /></td>                           
                      </tr> ';
            echo '</table>';
        break;
}
?>