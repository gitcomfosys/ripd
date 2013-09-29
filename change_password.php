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
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="lenadena_chart.php"><b>ফিরে যান</b></a></div>  
            <div>
                <form method="POST" onsubmit="">	
                    <table  class="formstyle">          
                        <tr><th colspan="2" style="text-align: center;">পাসওয়ার্ড চেইঞ্জ করুন</th></tr>
                        <tr>
                            <td>পূর্ববর্তী পাসওয়ার্ড</td>
                            <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                        </tr>
                        <tr>
                            <td>নতুন পাসওয়ার্ড</td>
                            <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                        </tr>
                        <tr>
                            <td>কনফার্ম পাসওয়ার্ড</td>
                            <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                        </tr>
                        <tr>                    
                            <td colspan="2" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="out_submit" value="সেভ করুন" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                        </tr>    
                    </table>
                </form>
            </div>
        </div>
    </div>
<?php
include 'includes/footer.php';
?>