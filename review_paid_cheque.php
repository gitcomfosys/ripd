<?php include_once 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>

<?php
if (isset($_POST['submit'])) {
    ?>
    <div class="columnSld" style=" padding-left: 50px;">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="recover_password.php"><b>ফিরে যান</b></a></div>
            <div>           
                <form method="POST" onsubmit="">	
                    <table class="formstyle"  style=" width: 98%; ">          
                        <tr>
                        <th style="text-align: center" colspan="3"><h1>চেক সম্পর্কিত তথ্য</h1>
                        </th>
                        </tr>
                        <tr><td colspan="2"></td>
                        </tr>                    
                        <tr>
                            <td style="width: 20%">চেক নাম্বার</td>
                            <td style="width: 55%">: <input  class ="box" type="text" id="cheque_number" name="account_number" value="558495867"/>
                            </td>                                      
                        </tr>
                        <tr>
                            <td style="width: 20%">একাউন্ট নাম্বার</td>
                            <td style="width: 55%">: <input  class ="box" type="text" id="account_number" name="account_number" value="558495867"/>
                            </td>                                      
                        </tr>
                        <tr>
                            <td>মোবাইল নাম্বার</td>
                            <td >:  <input  class ="box" type="text" id="mobile_number" name="mobile_number" value="01717 555888"/> </td>
                        </tr>
                        <tr>
                            <td>টাকা উত্তোলনের তারিখ</td>
                            <td >:  <input  class ="box" type="text" id="password" name="password"  value="007007"/> </td>
                        </tr>
                        <tr>
                            <td>টাকা উত্তোলনের সময়</td>
                            <td >:  <input  class ="box" type="text" id="referrer_account_number" name="referrer_account_number" value="345454867"/> </td>
                        </tr>
                        <tr>
                            <td>রেফারার নাম</td>
                            <td >:  <input  class ="box" type="text" id="referrer_name" name="referrer_name" value="বুশরা রহমান"/> </td>
                        </tr>
                        <tr>
                            <td>রেফারার মোবাইল নাম্বার</td>
                            <td >:  <input  class ="box" type="text" id="referrer_mobile_number" name="referrer_mobile_number" value="01718 995995"/> </td>
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
            <div style="padding-left: 110px;"><a href="index.php?apps=ACC"><b>ফিরে যান</b></a></div>
            <div>           
                <form method="POST" onsubmit="">	
                    <table class="formstyle"  style=" width: 98%; ">          
                        <tr><th style="text-align: center" colspan="3"><h1> রিভিউ পেইড চেক</h1>
                        </th>
                        </tr>
                        <tr><td colspan="2"></td>
                        </tr>                    
                        <tr>
                            <td style="width: 20%">একাউন্ট নাম্বার</td>
                            <td style="width: 55%">: <input  class ="box" type="text" id="account_number" name="account_number" />
                            </td>                                      
                        </tr>
                        <tr>
                            <td>চেক নাম্বার</td>
                            <td >:  <input  class ="box" type="text" id="cheque_number" name="cheque_number" /> </td>
                        </tr>
                        <tr>                    
                            <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="খুঁজুন" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" />
                            </td>                           
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