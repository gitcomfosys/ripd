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
<script type="text/javascript" src="javascripts/expand_collapse01.js"></script>
<script type="text/javascript" src="javascripts/expand_collapse02_ui.js"></script>
<?php include_once 'includes/header.php'; ?>
 <?php
 $account_id = $_POST['account_number'];
if ((isset($_POST['after_saving'])) && $account_id == '') {
    ?>      
  <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="send_amount_local_office.php"><b>ফিরে যান</b></a></div>
            <div>
                <form method="POST" onsubmit="frm">       
                    <table class="formstyle" style =" width:78%">        
                        <tr><th style="text-align: center" colspan="2"><h1>সেন্ড এমাউন্ট</h1></th></tr> 
                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <td>এন্টার একাউন্ট নাম্বার</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                           <tr>
                            <td>এন্টার  সেল নাম্বার</td>
                            <td>:    <input  class ="textfield" type="text" id="cell_number" name="cell_number" /></td>
                        </tr>
                        
                        <tr>                    
                            <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ" /></td>                           
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
<?php
}
elseif ((isset($_POST['first_page']))  && $account_id == '') {
    ?>
    <div class="columnSld" style=" padding-left: 50px;">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="send_amount_local_office.php"><b>ফিরে যান</b></a></div>
            <div>           
                <form method="POST" onsubmit="frm">	
                    <table class="formstyle"  style=" width: 98%; ">          
                        <tr><th style="text-align: center" colspan="2"><h1>সেন্ড এমাউন্ট</h1></th></tr>
                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <td>টোটাল এমাউন্ট</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>সেন্ড বিডিটি</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>ট্রাস্ট প্রোপারটি</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>আর্ন এমাউন্ট</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>ট্যাক্স</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>সার্ভিস চার্জ</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>                    
                          <tr> <td colspan="11" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="after_saving" value="সেভ" /></td></tr>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <?php
} else {
    ?>
    <div class="columnSld" style=" padding-left: 50px;">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>
            <div>           
                <form method="POST" onsubmit="frm">	
                    <table class="formstyle"  style=" width: 98%; ">          
                        <tr><th style="text-align: center" colspan="2"><h1>সেন্ড এমাউন্ট</h1></th></tr>
                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <td>এন্টার একাউন্ট নাম্বার</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>                    
                            <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="first_page" value="সেভ" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <?php
}
include_once 'includes/footer.php';
?>