<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<title>চার্জ মেইকিং</title>
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
           <form method="POST" onsubmit="" name="" action="cheque_make_out.php">	
                <table  class="formstyle" style="font-family: SolaimanLipi !important;">          
                    <tr><th colspan="2" style="text-align: center;">চার্জ মেইকিং</th></tr>
                    <tr>
                        <td>অ্যাকাউন্ট খোলার সার্ভিস চার্জ</td>
                        <td>: <input class="box" type="text" id="acc_charge" name="acc_charge" /> <input class="btn"style=" background: red !important;height: 20px !important;width: 90px;" type="button" value="পোস্টপনড"/> <input class="btn" style=" background: green !important;height: 20px !important;width: 90px;" type="button" value="রিস্টার্ট"/>
                        </td>            
                    </tr>
                    <tr>
                        <td>চেক মেইকিং চার্জ</td>
                        <td>:   <input class="box" type="text" id="cheque_charge" name="cheque_charge" /> <input class="btn"style=" background: red !important;height: 20px !important;width: 90px;" type="button" value="পোস্টপনড"/> <input class="btn" style=" background: green !important;height: 20px !important;width: 90px;" type="button" value="রিস্টার্ট"/>
                        </td>                                  
                    </tr>
                    <tr>
                        <td>সেন্ড সার্ভিস চার্জ</td>
                        <td>:   <input class="box" type="text" id="send_charge" name="send_charge" onkeypress=' return numbersonly(event)' /> <input class="btn"style=" background: red !important;height: 20px !important;width: 90px;" type="button" value="পোস্টপনড"/> <input class="btn" style=" background: green !important;height: 20px !important;width: 90px;" type="button" value="রিস্টার্ট"/>
                        </td>                                  
                    </tr>
                    <tr>
                        <td>ট্রান্সফার চার্জ</td>
                        <td>:  <input class="box" type="text" id="trans_charge" name="trans_charge" onkeypress=' return numbersonly(event)' /> <input class="btn"style=" background: red !important;height: 20px !important;width: 90px;" type="button" value="পোস্টপনড"/> <input class="btn" style=" background: green !important;height: 20px !important;width: 90px;" type="button" value="রিস্টার্ট"/>
                        </td>                                  
                    </tr>
                    <tr>
                        <td>ইন ফ্যাসিলিটিস চার্জ</td>
                        <td>:  <input class="box" type="text" id="faci_charge" name="faci_charge" onkeypress=' return numbersonly(event)' /> <input class="btn"style=" background: red !important;height: 20px !important;width: 90px;" type="button" value="পোস্টপনড"/> <input class="btn" style=" background: green !important;height: 20px !important;width: 90px;" type="button" value="রিস্টার্ট"/>
                        </td>                                  
                    </tr>
                    <tr>
                        <td>কনভার্ট চার্জ</td>
                        <td>:  <input class="box" type="text" id="convert_charge" name="convert_charge" onkeypress=' return numbersonly(event)' /> <input class="btn"style=" background: red !important;height: 20px !important;width: 90px;" type="button" value="পোস্টপনড"/> <input class="btn" style=" background: green !important;height: 20px !important;width: 90px;" type="button" value="রিস্টার্ট"/>
                        </td>                                  
                    </tr>
                    <tr>
                        <td>টিকিট মেইকিং চার্জ</td>
                        <td>:  <input class="box" type="text" id="ticket_charge" name="ticket_charge" onkeypress=' return numbersonly(event)' /> <input class="btn"style=" background: red !important;height: 20px !important;width: 90px;" type="button" value="পোস্টপনড"/> <input class="btn" style=" background: green !important;height: 20px !important;width: 90px;" type="button" value="রিস্টার্ট"/>
                        </td>                                  
                    </tr>
                    <tr>                    
                        <td colspan="2" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                        <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>    
                </table>
            </form>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>
