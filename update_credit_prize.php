<?php include_once 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>

<div class="columnSld" style=" padding-left: 50px;">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=ACC"><b>ফিরে যান</b></a></div>
        <div>           
            <form method="POST" onsubmit="">	
                <table class="formstyle"  style=" width: 98%; ">          
                    <tr><th style="text-align: center" colspan="2"><h1>আপডেট ক্রেডিট প্রাইজ</h1></th></tr>

                    <tr><td colspan="2"></td></tr>                    
                    <tr>
                        <td>চলতি ক্রেডিট পার্সেন্টেজ (%)</td>
                        <td>:    <input  class="box" type="text" id="running_credit_percentage" name="running_credit_percentage" /></td>            
                    </tr>
                    <tr>
                        <td >পরবর্তী ক্রেডিট পার্সেন্টেজ (%)</td>
                        <td>:   <input class="box" type="text" id="next_credit_percentage" name="next_credit_percentage" /></td>                                  
                    </tr>
                    <tr>                    
                        <td colspan="2" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php 
include_once 'includes/footer.php'; 
?>