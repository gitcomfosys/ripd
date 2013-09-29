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
if ($_GET['opt'] == 'submit_ticket') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="payment_payout.php"><b>ফিরে যান</b></a></div> 
            <div>
                <form method="POST" onsubmit="" action="payment_payout.php?opt=accept_price">	
                    <table  class="formstyle">          
                        <tr><th colspan="4" style="text-align: center;">চেক</th></tr>                                
                        <tr>
                            <td style="width: 40%;text-align: center" colspan="2"></td>
                        </tr>
                        <tr>  
                            <td colspan="2" style="padding-left: 0;">
                                <div style="width: 700px; height: 300px; background-color: gray; margin: 0 auto;">
                                </div>
                            </td>
                        </tr>        
                        <tr>  
                            <td colspan="2" style="padding-left: 0;">
                                <div style="width: 700px; height: 300px; background-color: #EEE; margin: 0 auto">
                                </div>
                                Some info will be added
                            </td>
                        </tr>
                        <tr>                    
                            <td colspan="2" style="padding-left: 290px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit_ticket" value="সেভ করুন" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                        </tr>    
                    </table>
                </form>
            </div>
        </div>      
    </div>
    <?php
} else 
{
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=VA"><b>ফিরে যান</b></a></div> 
            <div>
                <form method="POST" onsubmit="" action="payment_payout.php?opt=submit_ticket">	
                    <table  class="formstyle">          
                        <tr><th colspan="4" style="text-align: center;">পেমেন্ট পেআউট</th></tr>
                        <tr>  
                        </tr>         
                        <tr>
                            <td>টোটাল এমাউন্ট</td>
                            <td>: ৩৪৩৫৪৬৬৪৬</td>                   
                        </tr>
                        <tr>
                            <td>নিড এমাউন্ট</td>
                            <td>:   <input class="box" type="text" id="program_name" name="program_name" />                           
                        </tr>
                        <tr>
                            <td>ট্রাস্ট এমাউন্ট</td>
                            <td>:   <input class="box" type="text" id="program_name" name="program_name" />                           
                        </tr>
                        <tr>
                            <td>আর্ন এমাউন্ট</td>
                            <td>:   <input class="box" type="text" id="program_name" name="program_name" />                           
                        </tr>
                        <tr>
                            <td>ট্যাক্স</td>
                            <td>:   <input class="box" type="text" id="program_name" name="program_name" />                           
                        </tr>
                         <tr>
                            <td>ক্রম</td>
                            <td>:   <input class="box" type="text" id="program_name" name="program_name" />                           
                        </tr>
                        <tr>                    
                            <td colspan="2" style="padding-left: 290px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                        </tr>    
                    </table>
                </form>
            </div>
        </div>      
    </div>
    <?php
}
include 'includes/footer.php';
?>