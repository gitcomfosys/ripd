<?php
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
                echo "<tr><th colspan='3' style='text-align: center;'>গ্রেড ভিত্তিক $printGradeName সংখ্যা</th></tr>";
                echo "<tr align='left' id='table_row_odd'>
                    <td>গ্রেডের নাম</td>
                    <td colspan='2'>$printGradeName সংখ্যা</td>
                </tr>";
                echo "<tr>
                    <td>গ্রেড - এ</td>
                    <td>১২ জন</td>
                    <td><a href='salary_making.php?iffimore=1ma10k0slr01&sh110ow1=$gradeName&i010d10=111222'>$printGradeName বেতন নির্ধারণ</a></td>
                </tr>";
                echo "<tr>
                    <td>গ্রেড - বি</td>
                    <td>৯ জন</td>
                    <td><a href='#'>$printGradeName বেতন নির্ধারণ</a></td>
                </tr>";
                echo "<tr>
                    <td>গ্রেড - সি</td>
                    <td>২০ জন</td>
                    <td><a href='#'>$printGradeName বেতন নির্ধারণ</a></td>
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
    else if($_GET['iffimore'] == '1ma10k0slr01') {
    ?>
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="salary_making.php?iffimore=1m10a01i11n"><b>ফিরে যান</b></a></div>
        <div>
            <form onsubmit="" method="post">
            <?php
            $dtls_gradeName = $_GET['sh110ow1'];
            $grade_name = "এ-গ্রেড"; //grade from DB and query
            $showGradeName = array('worker' => 'কর্মচারীর', 'presenter' => 'প্রেজেন্টারের', 'programer' => 'প্রোগ্রামারের', 'trainer' => 'ট্রেইনারের');
            $printGradeName = $showGradeName[$dtls_gradeName];
            $grade_id = $_GET['i010d10'];
            $sql_salary = mysql_query("SELECT * FROM 
                                                                    $dbname.salary_criteira as sc LEFT JOIN 
                                                                            (SELECT * FROM $dbname.salary_making WHERE Employee_grade_idEmployee_grade=8) as tab 
                                                                                    ON sc.idSalary_criteira = tab.Salary_criteira_idSalary_criteira");
            echo "<table  class='formstyle'>";          
                echo "<tr><th colspan='2' style='text-align: center;'>$grade_name $printGradeName বেতন নির্ধারণ</th></tr>";
                while($row_salary = mysql_fetch_array($sql_salary))
                        {
                        $criteria_id = $row_salary['idSalary_criteira'];
                        $criteria_name = $row_salary['criteria_name'];
                        $salary_amount= $row_salary['amount'];
                        if($salary_amount == NULL) $salary_amount = 0;
                        echo "<tr align='left'>";
                        echo "<td>$criteria_name</td>";
                        echo "<td>: <input type='text' class='box' name='$criteria_id' value='$salary_amount' style='width: 80px; text-align: right'> টাকা</td>";
                        echo "</tr>";
                        }
            echo "<tr>                    
                            <td colspan='2' style='text-align: center' ><input class='btn' style ='font-size: 12px;' type='submit' name='submit' value='সেভ করুন' />
                                <input class='btn' style ='font-size: 12px' type='reset' name='reset' value='রিসেট করুন' /></td>                           
                    </tr>";
            echo "</table>";
            ?>
            </form>
        </div>
    </div>
    <?php }?>
    
    
<?php
include 'includes/footer.php';
?>