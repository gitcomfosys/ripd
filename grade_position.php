<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>

<?php
            function showGrades($gradeName)
            {
            $showGradeName = array('worker' => 'কর্মচারীর', 'presenter' => 'প্রেজেন্টারের', 'programer' => 'প্রোগ্রামারের', 'trainer' => 'ট্রেইনারের');
            $printGradeName = $showGradeName[$gradeName];
            echo "<table  class='formstyle'>";          
                echo "<tr><th colspan='7' style='text-align: center;'>গ্রেড ভিত্তিক $printGradeName সংখ্যা</th></tr>";
                echo "<tr align='left' id='table_row_odd'>
                    <td>গ্রেডের নাম</td>
                    <td colspan='2'>$printGradeName সংখ্যা</td>
                </tr>";
                $query_grade = mysql_query("SELECT idEmployee_grade, grade_name, COUNT(*) FROM employee, employee_grade WHERE Employee_grade_idEmployee_grade=idEmployee_grade AND employee_type='$gradeName' GROUP BY grade_name");
                $total_employee = 0;
                while($rows_grade = mysql_fetch_array($query_grade))
                        {
                        $grade_id = $rows_grade['idEmployee_grade'];
                        $grade_name = $rows_grade['grade_name'];
                        $employee_number = $rows_grade['COUNT(*)'];
                        $total_employee = $total_employee + $employee_number;
                        echo "<tr>
                            <td>$grade_name</td>
                            <td>$employee_number জন</td>
                            <td><a href='grade_position.php?iffimore=00d110t01l11s01&sh110ow1=$gradeName&i010d10=$grade_id'>$printGradeName তালিকা দেখুন</a></td>
                        </tr>";
                        }
                echo "<tr align='left' id='table_row_odd'>                                                 
                    <td style='text-align: right;'>সর্বমোট $printGradeName সংখ্যাঃ</td>
                    <td colspan='2' style='text-align: left;'>$total_employee জন</td>
                </tr>";
            echo "</table>";
            }
?>

<div class="column6">
    
    <?php if($_GET['iffimore'] == '1m10a01i11n') {?>
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=HRE"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">কর্মচারী</a></li>
                <li class="current"><a href="#02">প্রেজেন্টার</a></li>
                <li class="current"><a href="#03">প্রোগ্রামার</a></li>
                <li class="current"><a href="#04">ট্রেইনার</a></li>
            </ul>
        </div>
        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <?php showGrades("worker");?>
        </div>
        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <?php showGrades("presenter");?>
        </div>
        <div>
            <h2><a name="03" id="03"></a></h2><br/>
            <?php showGrades("programer");?>
        </div>
        <div>
            <h2><a name="04" id="04"></a></h2><br/>
            <?php showGrades("trainer");?>
        </div>
    </div>
    <?php
        }
    else if($_GET['iffimore'] == '00d110t01l11s01') {
    ?>
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="grade_position.php?iffimore=1m10a01i11n"><b>ফিরে যান</b></a></div>
        <div>
            <?php
            $dtls_gradeName = $_GET['sh110ow1'];
            $showGradeName = array('worker' => 'কর্মচারীর', 'presenter' => 'প্রেজেন্টারের', 'programer' => 'প্রোগ্রামারের', 'trainer' => 'ট্রেইনারের');
            $printGradeName = $showGradeName[$dtls_gradeName];
            $dtls_grade_id = $_GET['i010d10'];
            echo "<table  class='formstyle'>";          
                echo "<tr><th colspan='9' style='text-align: center;'>গ্রেড ভিত্তিক $printGradeName তালিকা</th></tr>";
                echo "<tr align='left' id='table_row_odd'>
                    <td>ক্রম</td>
                    <td>$printGradeName নাম</td>
                    <td>একাউন্ট নাম্বার</td>
                    <td>গ্রেড</td>
                    <td>গ্রেডের স্থায়িত্বকাল</td>
                    <td>দায়িত্ব</td>
                    <td>অফিসে সময়কাল</td>
                    <td colspan='2'></td>
                </tr>";
                $go2parent = "grade_position.php?iffimore=00d110t01l11s01%%sh110ow1=".$dtls_gradeName."%%i010d10=$dtls_grade_id";
                $row_count = 1;
                $query_employee = mysql_query("SELECT * FROM employee, employee_information, cfs_user, employee_grade
                                                                                WHERE idEmployee = Employee_idEmployee AND idUser = cfs_user_idUser AND idEmployee_grade = Employee_grade_idEmployee_grade
                                                                                        AND employee_type='$dtls_gradeName' AND Employee_grade_idEmployee_grade='$dtls_grade_id'");
                while($rows_employee = mysql_fetch_array($query_employee))
                        {
                        $employee_name = $rows_employee['account_name'];
                        $account_number = $rows_employee['account_number'];
                        $grade_name = $rows_employee['grade_name'];
                        echo "<tr>
                            <td>$row_count</td>
                            <td>$employee_name</td>
                            <td>$account_number</td>
                            <td>$grade_name</td>
                            <td>২ বছর ৩ মাস</td>
                            <td>কেয়ারটেকার</td>
                            <td>১৬ মাস</td>
                            <td><a href='posting_to.php?i001d1=$dtls_grade_id&bkprnt=$go2parent'>পোস্টিং করুন</a></td>
                            <td><a href='make_promotion.php?i001d1=$dtls_grade_id&bkprnt=$go2parent'>প্রোমশন</a></td>
                        </tr>";
                        $row_count = $row_count + 1;
                        }
            echo "</table>";
            ?>
        </div>
    </div>
    <?php }?>
    
    
<?php
include 'includes/footer.php';
?>