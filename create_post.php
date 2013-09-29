<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<title>ক্রিয়েট পোস্ট</title>
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
        <div class="domtab" style="font-family: SolaimanLipi !important;">
            <ul class="domtabs">
                <li class="current"><a href="#01" style="width: 200px !important">ক্রিয়েট নিউ পোস্ট</a></li> 
                <li class="current"><a href="#02">পোস্ট লিস্ট</a>
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <form method="POST" onsubmit="" name="" action="cheque_make_out.php">	
                <table  class="formstyle" style="font-family: SolaimanLipi !important;">          
                    <tr><th colspan="2" style="text-align: center;">ক্রিয়েট নিউ পোস্ট</th></tr>
                    <tr>
                        <td>অফিস / সেলস স্টোর / পাওয়ার স্টোর</td>
                        <td>: <input class="box" type="text" id="officesearch" name="officesearch" />
                        </td>            
                    </tr>
                    <tr>
                        <td>পোস্ট-এর নাম</td>
                        <td>:   <input class="box" type="text" id="post" name="post" /></td>                                  
                    </tr>
                    <tr>
                        <td>নাম্বার অফ পোস্ট</td>
                        <td>:   <input class="box" type="text" id="postmember" name="postmember" onkeypress=' return numbersonly(event)' /> জন</td>                                  
                    </tr>
                    <tr>
                        <td>দায়িত্ব</td>
                        <td>  <textarea id="responsibility" name="responsibility"  style="width: 70%;"></textarea></td>                                  
                    </tr>
                    <tr>                    
                        <td colspan="2" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                        <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>    
                </table>
                </fieldset>
            </form>
        </div>

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <form method="POST" onsubmit="" name="frm" action="cheque_make_out.php">	
                <table  class="formstyle">          
                    <tr><th colspan="2" style="text-align: center;">ভিউ পোস্ট</th></tr>
                      <td colspan="6">
                            <span id="office2">
                                <table  style="border: black solid 1px;" align="center" width= 90%" cellpadding="1px" cellspacing="1px">
                                    <thead>
                                        <tr><td colspan="4" style="color: sienna; text-align: center; font-size: 20px;">অফিস নাম</td></tr>
                                        <tr style="border: black solid 1px;">
                                        <th>পোস্ট</th>
                                        <th>নাম্বার অফ পোস্ট</th>
                                        <th>দায়িত্ব</th>
                                        <th></th>
                                        </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql_officeTable = "SELECT * from ".$dbname.".office ORDER BY office_name ASC";
                                    $db_slNo = 0;
                                    $rs = mysql_query($sql_officeTable);

                                    while ($row_officeNcontact = mysql_fetch_assoc($rs)) 
                                    {
                                        echo "<tr style='border: black solid 1px;'>";
                                        echo "<td></td>";
                                        echo "<td></td>";
                                        echo "<td></td>";
                                        echo "<td><a href='#'>এডিট করুন</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                           </span>  
                        </td>
                    </tr>    
                    </table>
            </form>
        </div>                 
    </div>
    <?php
    include 'includes/footer.php';
    ?>