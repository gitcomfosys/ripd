<?php
error_reporting(0);
include 'ConnectDB.inc';

$type=$_GET['t'];
switch($type)
{
    case 1:
            $psql="SELECT * FROM " . $dbname . ".program WHERE program_type='presentation' AND program_location IS NULL;";
            $prslt=mysql_query($psql) or exit('query failed: '.mysql_error());
            echo '<select class="selectOption" name="nam" onchange="getall(this.value)" style=" width: 167px !important;">';
            echo "<option value=''>----প্রেজেন্টেশন সিলেক্ট করুন-----</option>";
            while($prow=mysql_fetch_assoc($prslt))
            {
                $pid=$prow['idprogram'];
                $name=$prow['program_name'];
                echo "<option value='$pid'>$name</option>";
            }
            echo '</select>';
            echo "<input type='hidden' name='type' value=1 />";
        break;
    case 2:
            $psql="SELECT * FROM " . $dbname . ".program WHERE program_type='program' AND program_location IS NULL;";
            $prslt=mysql_query($psql) or exit('query failed: '.mysql_error());
            echo '<select class="selectOption" onchange="getall(this.value)" style=" width: 167px !important;">';
            echo "<option value=''>----প্রোগ্রাম সিলেক্ট করুন-----</option>";
            while($prow=mysql_fetch_assoc($prslt))
            {
                $pid=$prow['idprogram'];
                $name=$prow['program_name'];
                echo "<option value='$pid'>$name</option>";
            }
            echo '</select>';
            echo "<input type='hidden' name='type' value=2 />";
        break;
    case 3:
            $psql="SELECT * FROM " . $dbname . ".program WHERE program_type='training' AND program_location IS NULL ;";
            $prslt=mysql_query($psql) or exit('query failed: '.mysql_error());
            echo '<select class="selectOption" name="nam" onchange="getall(this.value)" style=" width: 167px !important;">';
            echo "<option value=''>----ট্রেইনিং সিলেক্ট করুন-----</option>";
            while($prow=mysql_fetch_assoc($prslt))
            {
                $pid=$prow['idprogram'];
                $name=$prow['program_name'];
                echo "<option value='$pid'>$name</option>";
            }
            echo '</select>';
            echo "<input type='hidden' name='type' value=3 />";
        break;
    case 4:
            $psql="SELECT * FROM " . $dbname . ".program WHERE program_type='travel' AND program_location IS NULL ;";
            $prslt=mysql_query($psql) or exit('query failed: '.mysql_error());
            echo '<select class="selectOption" onchange="getall(this.value)" style=" width: 167px !important;">';
            echo "<option value=''>----ট্রাভেল সিলেক্ট করুন-----</option>";
            while($prow=mysql_fetch_assoc($prslt))
            {
                $pid=$prow['idprogram'];
                $name=$prow['program_name'];
                echo "<option value='$pid'>$name</option>";
            }
            echo '</select>';
            echo "<input type='hidden' name='type' value=4 />";
        break;
}

$value=$_GET['v'];
if($value !="")
{
$allsql="SELECT * FROM " . $dbname . ".program WHERE idprogram=$value;";
$allrslt=mysql_query($allsql) or exit('query failed: '.mysql_error());
while($all=  mysql_fetch_assoc($allrslt))
{
    $p_name=$all['program_name'];
    $p_no=$all['program_no'];
    $p_date=$all['program_date'];
    $p_time=$all['program_time'];
    $e_id=$all['Employee_idEmployee'];
}
    $sql = "SELECT * FROM cfs_user WHERE idUser = ANY( SELECT cfs_user_idUser FROM employee WHERE idEmployee = $e_id);";
    $finalsql=mysql_query($sql) or exit('query failed: '.mysql_error());
    $finalget=mysql_fetch_assoc($finalsql);
    $e_name=$finalget['account_name'];
    $e_mail=$finalget['email'];
    echo ' <table> ';
    echo " <tr><td style='width: 280px; padding-left: 0px !important;'>প্রেজেন্টেশন / প্রোগ্রাম / ট্রেইনিং / ট্রাভেল এর নাম্বার</td>
                        <td>:    $p_no</td >                
                    </tr>
                    <tr>
                        <td style='width: 280px; padding-left: 0px !important;'>প্রেজেন্টার / প্রোগ্রামার / ট্রেইনার / ট্রাভেলারের নাম</td>
                        <td>:    $e_name </td>            
                    </tr>
                    <tr>
                        <td style='width: 280px; padding-left: 0px !important;'>প্রেজেন্টার / প্রোগ্রামার / ট্রেইনার / ট্রাভেলারের ইমেইল</td>
                        <td>:    $e_mail</td>            
                    </tr>
                    <tr>
                        <td style='width: 280px; padding-left: 0px !important;'>তারিখ</td>
                        <td>:   $p_date </td>            
                    </tr>
                    <tr>
                        <td style='width: 280px; padding-left: 0px !important;'>সময়</td>
                        <td>:  $p_time  </td>
                    </tr>
                    <tr><td>
                    <input type='hidden' name='programID'' value=$value />
                    <input type='hidden' name='programName'  value=$p_name />
                    <input type='hidden' name='programDate'  value=$p_date />
                    <input type='hidden' name='programTime' value=$p_time />
                    <input type='hidden' name='emp_name' value=$e_name />
                    <input type='hidden' name='emp_mail' value=$e_mail />
                    </td></tr>";
    echo '</table>';
}
?>