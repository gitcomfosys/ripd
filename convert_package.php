<?php 
include_once 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>

<div class="columnSld" style=" padding-left: 50px;">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=CRM"><b>ফিরে যান</b></a></div>
        <div>           
            <form method="POST" onsubmit="">	
                <table class="formstyle"  style=" width: 98%; ">          
                    <tr><th style="text-align: center" colspan="2"><h1>কনভার্ট প্যাকেজ</h1></th></tr>

                    <tr><td colspan="2"></td></tr>                    
                    <tr>
                    <td>একাউন্ট নাম্বার</td>
                    <td>:    <input  class ="box" type="text" id="account_number" name="account_number" /></td>
                    </tr>
                    <tr>
                        <td>রেফারার একাউন্ট নাম্বার</td>
                        <td>:    <input  class ="box" type="text" id="referrer_account_number" name="referrer_account_number" /></td>
                    </tr>
                    <tr>
                    <td>পিন নাম্বার</td>
                    <td>:    <input  class ="box" type="text" id="pin_number" name="pin_number" /></td>
                    </tr>
                    <tr>
                        <td>বার কোড</td>
                        <td>:    <input  class ="box" type="text" id="bar_code" name="bar_code" /></td>
                    </tr>
                    <tr>
                        <td>পন্যের নাম</td>
                        <td>:    <input  class ="box" type="text" id="product_name" name="product_name" /></td>
                    </tr>
                    <tr>
                        <td>পি. ভি</td>
                        <td>:    <input  class ="box" type="text" id="pv" name="pv" /></td>
                    </tr>
                    <tr>
                        <td>এমাউন্ট</td>
                        <td>:    <input  class ="box" type="text" id="amnout" name="amnout" /></td>
                    </tr>
                    <tr>
                        <td>টার্গেট প্যাকেজ</td>
                        <td>:    <input  class ="box" type="text" id="target_package" name="target_package" /></td>
                    </tr>
                    <tr>
                        <td>কনভার্ট চার্জ</td>
                        <td>:    <input  class ="box" type="text" id="convert_charge" name="convert_charge" /></td>
                    </tr>
                    <tr>
                        <td>সার্ভিস চার্জ</td>
                        <td>:    <input  class ="box" type="text" id="service_charge" name="service_charge" /></td>
                    </tr>
                    <tr>
                        <td>টোটাল এমাউন্ট</td>
                        <td>:    <input  class ="box" type="text" id="total_amount" name="total_amount" /></td>
                    </tr>
                    <tr>                    
                        <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php include_once 'includes/footer.php'; ?>