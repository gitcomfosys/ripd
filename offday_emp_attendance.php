<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<title>অফডে কর্মচারী হাজিরা</title>
<style type="text/css"> @import "css/bush.css";</style>
<script type="text/javascript" src="javascripts/area.js"></script>
<script type="text/javascript" src="javascripts/external/mootools.js"></script>
<script type="text/javascript" src="javascripts/dg-filter.js"></script>
<script>
    var fieldName='chkName[]';
    function numbersonly(e)
   {
        var unicode=e.charCode? e.charCode : e.keyCode
            if (unicode!=8)
            { //if the key isn't the backspace key (which we should allow)
                if (unicode<48||unicode>57) //if not a number
                return false //disable key press
            }
}
</script>

<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=HRE"><b>ফিরে যান</b></a></div>
          <div>
           <form method="POST"  name="frm" action="">	
               <table  class="formstyle" style="width: 100% !important; font-family: SolaimanLipi !important;">          
                    <tr><th colspan="2" style="text-align: center;">অফডে কর্মচারী হাজিরা শিট</th></tr>
                    <tr>
                    <td colspan="2">
                        <table align="center" style="border: black solid 1px !important; border-collapse: collapse;">
                                    <thead>
                                        <tr><td colspan="13" style="color: sienna; text-align: center; font-size: 20px;">অফিস নাম</td></tr>
                                        <tr><td colspan="13" style="color: sienna; text-align: center; font-size: 16px;">আজকের তারিখঃ <?php $timestamp=time();echo english2bangla(date("d/m/Y", $timestamp));?></td></tr>
                                        <tr>
                                            <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="5%">ক্রম</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="5%">কর্মচারী আইডি</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="7%">নাম</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="10%">হাজিরার ধরন</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="6%">বর্ণনা</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="7%">ইন টাইম</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="8%">আউট টাইম</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="9%">মাইনর গ্যাপ</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="6%">বর্ণনা</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="9%">মেজর গ্যাপ</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="6%">বর্ণনা</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="9%">ওয়ার্ক টাইম</th>
                                        <th style='border-right: 1px solid #000099;border-top: 1px solid #000099;' width="9%">এক্সট্রা টাইম</th>
                                        </tr>
                                </thead>
                                <tbody style="font-size: 12px !important">
                                <?php
                                    $sql_officeTable = "SELECT * from ".$dbname.".office ORDER BY office_name ASC";
                                    $db_slNo = 0;
                                    $rs = mysql_query($sql_officeTable);

                                    while ($row_officeNcontact = mysql_fetch_assoc($rs)) 
                                    {
                                        $sl =  english2bangla($db_slNo);
                                        echo "<tr>";
                                        echo "<td style='border: 1px solid #000;'>$sl</td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><select style='width:100%;height:100%;font-size: 12px !important'>
                                            <option value='1'>উপস্থিত</option>
                                            <option value='2'>অনুপস্থিত</option>
                                            </select></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><textarea style='width:98%;height:100%;margin:0px !important'></textarea></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><input type='time' name='intime' style='height:100%;'/></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><input type='time' name='outtime' style='height:100%;'/></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><select name='min_gap' style='width:100%;height:100%;font-size: 12px !important'>
                                            <option value=''>১৫ মিঃ</option>
                                            <option value=''>২০ মিঃ</option>
                                            <option value=''>৩০ মিঃ</option>
                                            <option value=''>৪০ মিঃ</option>
                                            <option value=''>৫০ মিঃ</option>
                                            </select></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><textarea name='min_gap_des' style='width:98%;height:100%;margin:0px !important'></textarea></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><select name='maj_gap' style='width:100%;height:100%;font-size: 12px !important'>
                                            <option value=''>১ ঘণ্টা</option>
                                            <option value=''>১.৫ ঘণ্টা</option>
                                            <option value=''>২ ঘণ্টা</option>
                                            <option value=''>২.৫ ঘণ্টা</option>
                                            <option value=''>৩ ঘণ্টা</option>
                                            <option value=''>৩.৫ ঘণ্টা</option>
                                            <option value=''>৪ ঘণ্টা</option>
                                            </select></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><textarea name='maj_gap_des' style='width:98%;height:100%;margin:0px !important'></textarea></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><input type='text' readonly style='width:100%;height:100%;' name='worktime'/></td>";
                                        echo "<td style='border: 1px solid #000; padding:0px !important;'><input type='text' readonly style='width:100%;height:100%;' name='xtratime'/></td>";
                                        echo "</tr>";
                                         $db_slNo++;
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
