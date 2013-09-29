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
            <div style="padding-left: 110px;"><a href="out_amount_check.php"><b>ফিরে যান</b></a></div>  
            <div>
                <form method="POST" onsubmit="">	
                    <table  class="formstyle">          
                        <tr><th colspan="2" style="text-align: center;">আউট এমাউন্ট উইথ চেক</th></tr>
                        <tr>
                            <td>একাউন্টধারীর নাম : বাবর</td>  
                            <td>রিসীভারের নাম : বাবর</td>
                        </tr>
                        <tr>
                            <td>ছবি : <img alt="Add Field" width="60px" height="50px" src="images/big_pic.jpg"></td> 
                            <td>ছবি : <img alt="Add Field" width="60px" height="50px" src="images/big_pic.jpg"></td> 
                        </tr>
                        <tr>
                            <td>স্বাক্ষর :</td>
                             <td>স্বাক্ষর :</td>
                        </tr>
                        <tr>
                            <td>সেল নাম্বার :</td>   
                            <td>সেল নাম্বার :</td>   
                        </tr>                    
                        <tr>
                            <td>একাউন্ট ব্যালেন্স :</td>          
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
                        <tr><th colspan="2" style="text-align: center;">আউট এমাউন্ট উইথ চেক</th></tr>
                        <tr>
                            <td>এমাউন্ট</td>
                            <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                        </tr>
                        <tr>
                            <td>একাউন্ট নং</td>
                            <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                        </tr>
                        <tr>
                            <td>রিসীভার একাউন্ট নং</td>
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