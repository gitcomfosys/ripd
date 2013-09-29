<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>

<?php
if ((isset($_POST['out_submit']))) {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="out_amount_pin.php"><b>ফিরে যান</b></a></div>  
            <div>
                <form method="POST" onsubmit="">	
                    <table  class="formstyle">          
                        <tr><th colspan="2" style="text-align: center;">আউট এমাউন্ট উইথ পিন</th></tr>
                        <tr>
                            <td>এমাউন্ট</td>
                            <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                        </tr>
                                                <tr>
                            <td>সার্ভিস চার্জ</td>
                            <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                        </tr>
                                                <tr>
                            <td>রিসীভারের সেল নং</td>
                            <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                        </tr>
                                                <tr>
                            <td>ন্যাশনাল আইডি নং</td>
                            <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                        </tr>
                                                <tr>
                            <td>পাসপোর্ট নং</td>
                            <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                        </tr>
                        <tr>                    
                            <td colspan="2" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="out_submit" value="সেভ করুন" />                                                       
                        </tr>    
                    </table>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <?php
} else {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="out_in_amount_local_office.php"><b>ফিরে যান</b></a></div>  
            <div>
                <form method="POST" onsubmit="">	
                    <table  class="formstyle">          
                        <tr><th colspan="2" style="text-align: center;">আউট এমাউন্ট উইথ পিন</th></tr>
                        <tr>
                            <td>পিন নাম্বার</td>
                            <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                        </tr>
                        <tr>                    
                            <td colspan="2" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="out_submit" value="সেভ করুন" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                        </tr>    
                    </table>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <?php
}
?>

<?php
include 'includes/footer.php';
?>