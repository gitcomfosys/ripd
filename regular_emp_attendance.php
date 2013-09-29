<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include 'includes/connectionPDO.php';
$loginUSERname = $_SESSION['UserID'] ;

$sql = "INSERT INTO employee_attendance(emp_intime, emp_outtime, emp_worktime ,emp_extratime , date_of_atnd , emp_atnd_type , present_type ,emp_atnd_desc, emp_min_gaptime, emp_min_gapdesc, emp_maj_gaptime, emp_maj_gapdesc, atnd_making_date, month_no, year_no,emp_user_id, atnd_maker_id  ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,NOW(),?,?,?,?)";
$stmt = $conn->prepare($sql);

$queryemp = mysql_query("SELECT * FROM employee WHERE cfs_user_idUser = ANY(SELECT idUser FROM cfs_user WHERE user_name = '$loginUSERname');");
$emprow = mysql_fetch_assoc($queryemp);
$db_onsid = $emprow['emp_ons_id'];
$queryonsr = mysql_query("SELECT * FROM ons_relation WHERE idons_relation ='$db_onsid' ;");
$onsrow = mysql_fetch_assoc($queryonsr);
$db_catagory = $onsrow['catagory'];
$db_id = $onsrow['add_ons_id'];
switch($db_catagory)
                   {
                       case 'office' : 
                           $offquery=mysql_query("SELECT * FROM office WHERE idOffice= '$db_id';");
                          $offrow = mysql_fetch_assoc($offquery);
                          $db_offname= $offrow['office_name'];
                       break;
                       
                        case 's_store' :
                            $salesquery=mysql_query("SELECT * FROM sales_store WHERE idSales_store=$db_id");
                          $salesrow = mysql_fetch_assoc($salesquery);
                            $db_offname= $salesrow['salesStore_name'];
                        break;
                   }          
if(isset($_POST['submit']))
    {
    $cfsrslt = mysql_query("SELECT * FROM cfs_user WHERE user_name = '$loginUSERname';");
    $cfsrow = mysql_fetch_assoc($cfsrslt);
    $makerid = $cfsrow['idUser'];
    $atten_date = $_POST['date'];
    $count = $_POST['count'];
    $attendance = $_POST['atten'];
    $empid = $_POST['empid'];
    $cause = $_POST['cause'];
    $intime = $_POST['intime'];
    $outtime = $_POST['outtime'];
    $min_gap = $_POST['min_gap'];
    $min_gap_des = $_POST['min_gap_des'];
    $maj_gap = $_POST['maj_gap'];
    $maj_gap_des = $_POST['maj_gap_des'];
    $worktime = $_POST['worktime'];
    $xtratime = $_POST['xtratime'];
    for($i=0;$i<$count;$i++)
    {
        $month = date("n");
        $year=date('Y');
        $atten_type = $attendance[$i];
        if($atten_type == 'yes')
        {
            $type = 'present';
        }
        else
        {
            $type = 'absent';
        }
    $emp = $empid[$i];    
    $causes =$cause[$i];
    $in =$intime[$i];
    $out=$outtime[$i];
    $mingap = $min_gap[$i];
    $mindes=$min_gap_des[$i];
    $majgap=$maj_gap[$i];
    $majdes=$maj_gap_des[$i];
    $work=$worktime[$i];
    $xtra= $xtratime[$i];
        $yes = $stmt->execute(array($in,$out,$work,$xtra,$atten_date,$type,'general',$causes,$mingap,$mindes,$majgap,$majdes,$month,$year,$emp,$makerid));
    }
   
}

?>
<title>নিয়মিত কর্মচারী হাজিরা</title>
<style type="text/css"> @import "css/bush.css";</style>
<link rel="stylesheet" type="text/css" media="all" href="javascripts/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="javascripts/jsDatePick.min.1.3.js"></script>
<script>
    window.onclick = function()
    {
        new JsDatePick({
            useMode: 2,
            target: "date",
            dateFormat: "%Y-%m-%d"
        });
    }
    function basic(i)
    {
         document.getElementById("cause["+i+"]").disabled= true;
        document.getElementById("intime["+i+"]").disabled= true;
              document.getElementById("outtime["+i+"]").disabled= true;
              document.getElementById("min_gap["+i+"]").disabled= true;
              document.getElementById("min_gap_des["+i+"]").disabled= true;
              document.getElementById("maj_gap["+i+"]").disabled= true;
              document.getElementById("maj_gap_des["+i+"]").disabled= true;
              document.getElementById("worktime["+i+"]").disabled= true;
              document.getElementById("xtratime["+i+"]").disabled= true;
    }

function checkAttendance(checkvalue,i)
{
      if(checkvalue == 'yes')
        {
             document.getElementById("cause["+i+"]").disabled= false;
            document.getElementById("intime["+i+"]").disabled= false;
              document.getElementById("outtime["+i+"]").disabled= false;
              document.getElementById("min_gap["+i+"]").disabled= false;
              document.getElementById("min_gap_des["+i+"]").disabled= false;
              document.getElementById("maj_gap["+i+"]").disabled= false;
              document.getElementById("maj_gap_des["+i+"]").disabled= false;
              document.getElementById("worktime["+i+"]").disabled= false;
              document.getElementById("xtratime["+i+"]").disabled= false;
        }
        else
            {
             document.getElementById("cause["+i+"]").disabled= false;  
             document.getElementById("intime["+i+"]").disabled= true;
              document.getElementById("outtime["+i+"]").disabled= true;
              document.getElementById("min_gap["+i+"]").disabled= true;
              document.getElementById("min_gap_des["+i+"]").disabled= true;
              document.getElementById("maj_gap["+i+"]").disabled= true;
              document.getElementById("maj_gap_des["+i+"]").disabled= true;
              document.getElementById("worktime["+i+"]").disabled= true;
              document.getElementById("xtratime["+i+"]").disabled= true;
           }
}
function setWorkandXtra(major,i)
{
    var intime = document.getElementById("intime["+i+"]").value;
    var outtime = document.getElementById("outtime["+i+"]").value;
    var timeStart = new Date("01/01/1990 " + intime).getHours();
    var timeEnd = new Date("01/01/1990 " + outtime).getHours();
    var worktime= (timeEnd - timeStart) - major;
    var xtradiffer = worktime - 8;
    var xtratime = 0;
    if(xtradiffer > 0)
        {
            xtratime = xtradiffer;
        }
            document.getElementById("worktime["+i+"]").value = worktime ;
            document.getElementById("xtratime["+i+"]").value = xtratime;
}
</script>

<div class="column6" style="width: 100% !important;">
    <div class="main_text_box" style="width: 100% !important;">
        <div style="padding-left: 10px;"><a href="index.php?apps=HRE"><b>ফিরে যান</b></a></div>
          <div>
           <form method="POST"  name="frm" action="">	
               <table  class="formstyle" style="width: 100% !important; font-family: SolaimanLipi !important;margin:0 !important;width: 98% !important;">          
                    <tr><th colspan="2" style="text-align: center;">নিয়মিত কর্মচারী হাজিরা শিট</th></tr>
                    <tr>
                    <td colspan="2">
                        <table align="center" style="border: black solid 1px !important; border-collapse: collapse;">
                                    <thead>
                                        <tr><td colspan="13" style="color: sienna; text-align: center; font-size: 20px;"><b><?php echo $db_offname;?></b></td></tr>
                                        <tr><td colspan="13" style="color: sienna; text-align: center; font-size: 16px;">হাজিরার তারিখঃ <input class="textfield" type="text" id="date" placeholder="Date" name="date" value=""/></td></tr>
                                        <tr>
                                            <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="2%">ক্রম</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="10%">কর্মচারী অ্যাকাউন্ট নং</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="14%">নাম</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="7%">হাজিরার ধরন</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="6%">বর্ণনা</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="7%">ইন টাইম</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="7%">আউট টাইম</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="6%">মাইনর গ্যাপ</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="6%">বর্ণনা</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="6%">মেজর গ্যাপ</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="6%">বর্ণনা</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="7%">ওয়ার্ক টাইম</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="7%">এক্সট্রা টাইম</th>
                                        </tr>
                                </thead>
                                <tbody style="font-size: 12px !important">
                                <?php
                                    $db_slNo = 0;
                                    $rs = mysql_query("SELECT * FROM cfs_user WHERE  	cfs_account_status = 'active' AND idUser = ANY(SELECT cfs_user_idUser FROM employee  WHERE emp_ons_id = '$db_onsid');");

                                    while ($rowemployee = mysql_fetch_assoc($rs)) 
                                    {  
                                        $sl =  english2bangla($db_slNo);
                                        $db_empaccount = $rowemployee['account_number'];
                                        $db_empname = $rowemployee['account_name'];
                                        $db_empcfsid = $rowemployee['idUser'];
                                        $emprslt = mysql_query("SELECT * FROM employee WHERE cfs_user_idUser = $db_empcfsid;");
                                        $rowemp = mysql_fetch_assoc($emprslt);
                                        $db_emp_id = $rowemp['idEmployee'];
                                        echo "<tr>";
                                        echo "<td style='border: 1px solid #000;'>$sl</td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><input name='empacc[$db_slNo]' type='hidden' value='$db_empaccount' />$db_empaccount</td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><input name= 'empname[$db_slNo]' type='hidden' value='$db_empname' />$db_empname<input name='empid[$db_slNo]' type='hidden' value='$db_emp_id' /></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'>
                                                    <input type='radio' name='atten[$db_slNo]' value='yes' onclick = 'checkAttendance(this.value,$db_slNo)'/>উপস্থিত</br>
                                                    <input type='radio' name='atten[$db_slNo]' value='no'  onclick = 'checkAttendance(this.value,$db_slNo)' />অনুপস্থিত                                            
                                                    </td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><textarea id='cause[$db_slNo]' name='cause[$db_slNo]' style='width:98%;height:100%;margin:0px !important'></textarea></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><input id='intime[$db_slNo]' type='time' name='intime[$db_slNo]' value='09:00:00' style='height:100%;'/></td>";
                                        echo "<td  style='border: 1px solid #000; padding:0px !important;'><input id='outtime[$db_slNo]' type='time' name='outtime[$db_slNo]' value='17:00:00' style='height:100%;'/></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><select id='min_gap[$db_slNo]' name='min_gap[$db_slNo]' style='width:100%;height:100%;font-size: 12px !important'>
                                        <option>-সিলেক্ট-</option>    
                                        <option value='0' >নাই</option>    
                                        <option value='15'>১৫ মিঃ</option>
                                            <option value='20'>২০ মিঃ</option>
                                            <option value='30'>৩০ মিঃ</option>
                                            <option value='40'>৪০ মিঃ</option>
                                            <option value='50'>৫০ মিঃ</option>
                                            </select></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><textarea id='min_gap_des[$db_slNo]' name='min_gap_des[$db_slNo]' style='width:98%;height:100%;margin:0px !important'></textarea></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><select id='maj_gap[$db_slNo]' name='maj_gap[$db_slNo]' onchange='setWorkandXtra(this.value,$db_slNo)' style='width:100%;height:100%;font-size: 12px !important'>
                                        <option selected>-সিলেক্ট-</option>     
                                        <option value='0' >নাই</option>    
                                        <option value='1'>১ ঘণ্টা</option>
                                            <option value='1.5'>১.৫ ঘণ্টা</option>
                                            <option value='2'>২ ঘণ্টা</option>
                                            <option value='2.5'>২.৫ ঘণ্টা</option>
                                            <option value='3'>৩ ঘণ্টা</option>
                                            <option value='3.5'>৩.৫ ঘণ্টা</option>
                                            <option value='4'>৪ ঘণ্টা</option>
                                            </select></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><textarea id='maj_gap_des[$db_slNo]' name='maj_gap_des[$db_slNo]' style='width:98%;height:100%;margin:0px !important'></textarea></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><input id='worktime[$db_slNo]' type='text' readonly style='width:100%;height:100%;' name='worktime[$db_slNo]'/></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><input id='xtratime[$db_slNo]' type='text' readonly style='width:100%;height:100%;' name='xtratime[$db_slNo]'/></td>";
                                        echo "</tr>";
                                        echo "<script>javascript:basic($db_slNo);</script>";
                                         $db_slNo++;
                                         echo "<input name= 'count' type='hidden' value='$db_slNo' />";
                                    }
                                  ?>
                                </tbody>
                            </table>
                           </td>
                    </tr>    
                    <tr><td colspan='4' ></br><b>আজকের স্ক্যান ডকুমেন্টসঃ </b><input style ='font-size: 12px;' type='file' name='scan_doc'  /></td></tr>
                    <tr>                    
                     <td colspan='4' style='text-align: center' ></br><input class='btn' style ='font-size: 12px;' type='submit' name='submit' value='সেভ করুন' />
                     <input class='btn' style ='font-size: 12px' type='reset' name='reset' value='রিসেট করুন' /></td>                           
                            </tr>
                    </table>
            </form>
        </div>                 
    </div>
    <?php
    include 'includes/footer.php';
    ?>
