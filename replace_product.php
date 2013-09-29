<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
//include 'includes/header.php';
error_reporting(0);
?>
<style type="text/css">
    @import "css/bush.css";
    @import "css/expand_collapse.css";
</style>
<script type="text/javascript" src="javascripts/expand_collapse01.js"></script>
<script type="text/javascript" src="javascripts/expand_collapse02_ui.js"></script>
<script>    
    $(function() {
        $( "#accordion" ).accordion();
    });
</script>
<?php
include 'includes/header.php';
?>

<?php
$invoice_number_given = $_POST['invoice_number'];
if (isset($_POST['search']) && $invoice_number_given != '') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>

            <div>
                <form method="POST" onsubmit="" name="frm">	
                    <table  class="formstyle">          
                        <tr><th colspan="4" style="text-align: center;">রিপ্লেস প্রোডাক্ট</th></tr>
                        <tr>
                            <td colspan="4" style="text-align: right;"><a><img alt="Add Field" width="100px" height="80px" src="images/big_pic.jpg"></a><br />একাউন্টধারীর নাম: আলিম</td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">ইন ভয়েস নাম্বার</td><td style="text-align: left;">: <input class="box" type="text" name="accou" id="invoice_number" readonly=""></td>

                            <td style="text-align: right;">একাউন্ট নাম্বার</td><td style="text-align: left;">: <input class="box" type="text" name="account_number" id="account_number" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">প্রতিষ্ঠান নাম</td><td style="text-align: left;">: <input class="box" type="text" name="organization_name" id="organization_name" readonly=""></td>                        

                            <td style="text-align: right;">ক্রয়ের তারিখ</td><td style="text-align: left;">: <input class="box" type="text" name="buying_date" id="buying_date" readonly=""></td>
                        </tr> 
                        <tr>
                            <td colspan="4">
                                <table>
                                    <tr><th colspan="9" style="text-align: left;">রিপ্লেস প্রোডাক্ট চার্ট</th></tr>
                                    <tr id="table_row_odd">
                                        <td>ক্রম</td>
                                        <td>প্রোডাক্ট নাম</td>
                                        <td>ব্রান্ড</td>
                                        <td>পরিমান</td>
                                        <td>মূল্য</td>
                                        <td>পি.ভি</td>
                                        <td>সেলিং কোয়ান্টিটি</td>
                                        <td>এমাউন্ট</td>
                                        <td>রিপ্লেস কোয়ান্টিটি</td>
                                    </tr>
                                    <tr>
                                        <td>০১</td>
                                        <td>ডাল</td>
                                        <td>দেশী</td>
                                        <td>১০</td>
                                        <td>১০০</td>
                                        <td>১৩</td>                                
                                        <td><input class="box1" type="text" name ="selling_amount" id="selling_amount"></td>
                                        <td><input class="box5" type="text" name ="amount" id="amount"></td>              
                                        <td><input class="box1" type="text" name ="replace_amount" id="replace_amount"></td>
                                    </tr> 
                                    <tr>
                                        <td>০২</td>
                                        <td>আটা</td>
                                        <td>ইন্ডিয়ান</td>
                                        <td>৩০</td>
                                        <td>৫৪৫</td>
                                        <td>২২</td>
                                        <td><input class="box1" type="text" name ="selling_amount" id="selling_amount"></td>
                                        <td><input class="box5" type="text" name ="amount" id="amount"></td>              
                                        <td><input class="box1" type="text" name ="replace_amount" id="replace_amount"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="text-align: right;">মোট পি.ভি :</td>
                                        <td>3223</td>
                                        <td style="text-align: right;">মোট এমাউন্ট :</td>
                                        <td>4523</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                <table>
                                    <tr><th colspan="9" style="text-align: left;">নতুন প্রোডাক্ট চার্ট</th></tr>
                                    <tr id="table_row_odd">
                                        <td>ক্রম</td>
                                        <td>প্রোডাক্ট নাম</td>
                                        <td>ব্রান্ড</td>
                                        <td>পরিমান</td>
                                        <td>মূল্য</td>
                                        <td>পি.ভি</td>
                                        <td>সেলিং কোয়ান্টিটি</td>
                                        <td>এমাউন্ট</td>
                                    </tr>
                                    <tr>
                                        <td>০১</td>
                                        <td>ডাল</td>
                                        <td>দেশী</td>
                                        <td>১০</td>
                                        <td>১০০</td>
                                        <td>১৩</td>                                
                                        <td><input class="box1" type="text" name ="selling_amount" id="selling_amount"></td>
                                        <td><input class="box5" type="text" name ="amount" id="amount"></td>       
                                    </tr> 
                                    <tr>
                                        <td>০২</td>
                                        <td>আটা</td>
                                        <td>ইন্ডিয়ান</td>
                                        <td>৩০</td>
                                        <td>৫৪৫</td>
                                        <td>২২</td>
                                        <td><input class="box1" type="text" name ="selling_amount" id="selling_amount"></td>
                                        <td><input class="box5" type="text" name ="amount" id="amount"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="text-align: right;">মোট পি.ভি :</td>
                                        <td>3223</td>
                                        <td style="text-align: right;">মোট এমাউন্ট :</td>
                                        <td>4523</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">রিপ্লেস প্রোডাক্ট মোট পি.ভি</td><td style="text-align: left;">: <input class="box" type="text" name="replace_product_total_pv" id="replace_product_total_pv" readonly=""></td>

                            <td style="text-align: right;">মোট মূল্য</td><td style="text-align: left;">: <input class="box" type="text" name="replace_product_total_price" id="replace_product_total_price" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">নতুন প্রোডাক্ট মোট পি.ভি</td><td style="text-align: left;">: <input class="box" type="text" name="new_product_total_pv" id="new_product_total_pv" readonly=""></td>

                            <td style="text-align: right;">মোট মূল্য</td><td style="text-align: left;">: <input class="box" type="text" name="new_product_total_price" id="new_product_total_price" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">রিপড পাবে</td><td style="text-align: left;">: <input class="box" type="text" name="total_pv_difference" id="total_pv_difference" readonly=""></td>

                            <td style="text-align: right;">রিপড পাবে</td><td style="text-align: left;">: <input class="box" type="text" name="total_price_difference" id="total_price_difference" readonly=""></td>
                        </tr>
                        <tr>                    
                            <td colspan="4" style="text-align: center; " ><input class="btn" style =" font-size: 14px; " type="submit" name="confirm_submit" value="সেভ" />
                        </tr>    
                    </table>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <?php
} elseif (isset($_POST['confirm_submit'])) {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>

            <div>
                <form method="POST" onsubmit="" name="frm">	
                    <table  class="formstyle">          
                        <tr><th colspan="4" style="text-align: center;">রিপ্লেস প্রোডাক্ট</th></tr>
                        <tr>
                            <td colspan="2" style="text-align: right;">রিপড ইউনিভার্সাল</td>
                            <td colspan="2"><a><img alt="Add Field" width="100px" height="80px" src="images/big_pic.jpg"></a></td>
                        </tr> 
                        <tr>
                            <td style="text-align: right;">প্রতিষ্ঠান নাম</td><td>: <input class="box" type="text" name="organization_name" id="organization_name" readonly=""></td>

                            <td style="text-align: right;">ঠিকানা</td><td>: <input class="box" type="text" name="address" id="address" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">ফোন নাম্বার</td><td>: <input class="box" type="text" name="cell_number" id="cell_number" readonly=""></td>

                            <td style="text-align: right;">ই-মেইল</td><td>: <input class="box" type="text" name="email" id="email" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">ক্রয়কারীর নাম</td><td>: <input class="box" type="text" name="buyers_name" id="buyers_name" readonly=""></td>

                            <td style="text-align: right;">একাউন্ট নাম্বার</td><td>: <input class="box" type="text" name="account_number" id="account_number" readonly=""></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table>
                                    <tr><th colspan="9" style="text-align: left;">রিপ্লেস প্রোডাক্ট চার্ট</th></tr>
                                    <tr id="table_row_odd">
                                        <td>ক্রম</td>
                                        <td>প্রোডাক্ট নাম</td>
                                        <td>ব্রান্ড</td>
                                        <td>পরিমান</td>
                                        <td>মূল্য</td>
                                        <td>পি.ভি</td>
                                        <td>সেলিং কোয়ান্টিটি</td>
                                        <td>এমাউন্ট</td>
                                        <td>রিপ্লেস কোয়ান্টিটি</td>
                                    </tr>
                                    <tr>
                                        <td>০১</td>
                                        <td>ডাল</td>
                                        <td>দেশী</td>
                                        <td>১০</td>
                                        <td>১০০</td>
                                        <td>১৩</td>                                
                                        <td><input class="box1" type="text" name ="selling_amount" id="selling_amount"></td>
                                        <td><input class="box5" type="text" name ="amount" id="amount"></td>              
                                        <td><input class="box1" type="text" name ="replace_amount" id="replace_amount"></td>
                                    </tr> 
                                    <tr>
                                        <td>০২</td>
                                        <td>আটা</td>
                                        <td>ইন্ডিয়ান</td>
                                        <td>৩০</td>
                                        <td>৫৪৫</td>
                                        <td>২২</td>
                                        <td><input class="box1" type="text" name ="selling_amount" id="selling_amount"></td>
                                        <td><input class="box5" type="text" name ="amount" id="amount"></td>              
                                        <td><input class="box1" type="text" name ="replace_amount" id="replace_amount"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="text-align: right;">মোট পি.ভি :</td>
                                        <td>3223</td>
                                        <td style="text-align: right;">মোট এমাউন্ট :</td>
                                        <td>4523</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                <table>
                                    <tr><th colspan="9" style="text-align: left;">নতুন প্রোডাক্ট চার্ট</th></tr>
                                    <tr id="table_row_odd">
                                        <td>ক্রম</td>
                                        <td>প্রোডাক্ট নাম</td>
                                        <td>ব্রান্ড</td>
                                        <td>পরিমান</td>
                                        <td>মূল্য</td>
                                        <td>পি.ভি</td>
                                        <td>সেলিং কোয়ান্টিটি</td>
                                        <td>এমাউন্ট</td>
                                    </tr>
                                    <tr>
                                        <td>০১</td>
                                        <td>ডাল</td>
                                        <td>দেশী</td>
                                        <td>১০</td>
                                        <td>১০০</td>
                                        <td>১৩</td>                                
                                        <td><input class="box1" type="text" name ="selling_amount" id="selling_amount"></td>
                                        <td><input class="box5" type="text" name ="amount" id="amount"></td>       
                                    </tr> 
                                    <tr>
                                        <td>০২</td>
                                        <td>আটা</td>
                                        <td>ইন্ডিয়ান</td>
                                        <td>৩০</td>
                                        <td>৫৪৫</td>
                                        <td>২২</td>
                                        <td><input class="box1" type="text" name ="selling_amount" id="selling_amount"></td>
                                        <td><input class="box5" type="text" name ="amount" id="amount"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="text-align: right;">মোট পি.ভি :</td>
                                        <td>3223</td>
                                        <td style="text-align: right;">মোট এমাউন্ট :</td>
                                        <td>4523</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">রিপ্লেস প্রোডাক্ট মোট পি.ভি</td><td style="text-align: left;">: <input class="box" type="text" name="replace_product_total_pv" id="replace_product_total_pv" readonly=""></td>

                            <td style="text-align: right;">মোট মূল্য</td><td style="text-align: left;">: <input class="box" type="text" name="replace_product_total_price" id="replace_product_total_price" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">নতুন প্রোডাক্ট মোট পি.ভি</td><td style="text-align: left;">: <input class="box" type="text" name="new_product_total_pv" id="new_product_total_pv" readonly=""></td>

                            <td style="text-align: right;">মোট মূল্য</td><td style="text-align: left;">: <input class="box" type="text" name="new_product_total_price" id="new_product_total_price" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">রিপড পাবে</td><td style="text-align: left;">: <input class="box" type="text" name="total_pv_difference" id="total_pv_difference" readonly=""></td>

                            <td style="text-align: right;">রিপড পাবে</td><td style="text-align: left;">: <input class="box" type="text" name="total_price_difference" id="total_price_difference" readonly=""></td>
                        </tr>
                        <tr><td><br/></td></tr>
                        <tr>
                            <td  colspan="2" style="text-align: left;">------------------<br/>রিসিভড বাই</td> 
                            <td  colspan="2" style="text-align: right;">------------------<br/>অথোরাইজ বাই</td> 
                        </tr>
                        <tr>
                            <td td colspan="4">
                                <table style="text-align: center;">
                                    <th>পেইমেন্ট বাই</th>
                                    <tr>
                                        <td style="text-align: center;">ক্যাশ: <input class="box" type="text" name="cash" id="cash"></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">একাউন্ট: <input class="box" type="text" name="account_number" id="account_number"> পাসওয়ার্ড: <input class="box" type="password" name="password" id="password"></td>
                                    </tr>
                                </table>                                        
                            </td>
                        </tr> 
                        <tr>       
                            <td colspan="4" style="text-align: center; " >
                                <input class="btn" style =" font-size: 12px; width: auto" type="submit" name="confirm_submit_save" value="সেভ করুন" />                                
                                <input class="btn" style =" font-size: 12px; width: auto" type="submit" name="confirm_submit_save_print" value="সেভ এন্ড প্রিন্ট" />
                        </tr>    
                    </table>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <?php
} elseif ((isset($_POST['search'])) && $invoice_number_given == '') { //($_POST['account_number'] == 'no_account') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>

            <div>
                <form method="POST" onsubmit="" name="frm">	
                    <table  class="formstyle">          
                        <tr><th colspan="4" style="text-align: center;">রিপ্লেস প্রোডাক্ট</th></tr>
                        <tr>
                            <td colspan="2" style="text-align: right;">রিপড ইউনিভার্সাল</td>
                            <td colspan="2"><a><img alt="Add Field" width="100px" height="80px" src="images/big_pic.jpg"></a></td>
                        </tr> 
                        <tr>
                            <td style="text-align: right;">ইন ভয়েস নাম্বার</td><td style="text-align: left;">: <input class="box" type="text" name="accou" id="invoice_number" readonly=""></td>

                            <td style="text-align: right;">ক্রয়কারীর নাম</td><td td style="text-align: left;">: <input class="box" type="text" name="buyers_name" id="buyers_name" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">ঠিকানা</td><td td style="text-align: left;">: <input class="box" type="text" name="address" id="address" readonly=""></td>
                            <td style="text-align: right;">মোবাইল নং</td><td td style="text-align: left;">: <input class="box" type="text" id="cust_mobile" name="cust_mobile"/></td>	
                        </tr>
                        <tr>
                        <td>
                            <br />
                        </td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">প্রতিষ্ঠান নাম</td><td style="text-align: left;">: <input class="box" type="text" name="organization_name" id="organization_name" readonly=""></td>                        

                            <td style="text-align: right;">ক্রয়ের তারিখ</td><td style="text-align: left;">: <input class="box" type="text" name="buying_date" id="buying_date" readonly=""></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table>
                                    <tr><th colspan="9" style="text-align: left;">রিপ্লেস প্রোডাক্ট চার্ট</th></tr>
                                    <tr id="table_row_odd">
                                        <td>ক্রম</td>
                                        <td>প্রোডাক্ট নাম</td>
                                        <td>ব্রান্ড</td>
                                        <td>পরিমান</td>
                                        <td>মূল্য</td>
                                        <td>পি.ভি</td>
                                        <td>সেলিং কোয়ান্টিটি</td>
                                        <td>এমাউন্ট</td>
                                        <td>রিপ্লেস কোয়ান্টিটি</td>
                                    </tr>
                                    <tr>
                                        <td>০১</td>
                                        <td>ডাল</td>
                                        <td>দেশী</td>
                                        <td>১০</td>
                                        <td>১০০</td>
                                        <td>১৩</td>                                
                                        <td><input class="box1" type="text" name ="selling_amount" id="selling_amount"></td>
                                        <td><input class="box5" type="text" name ="amount" id="amount"></td>              
                                        <td><input class="box1" type="text" name ="replace_amount" id="replace_amount"></td>
                                    </tr> 
                                    <tr>
                                        <td>০২</td>
                                        <td>আটা</td>
                                        <td>ইন্ডিয়ান</td>
                                        <td>৩০</td>
                                        <td>৫৪৫</td>
                                        <td>২২</td>
                                        <td><input class="box1" type="text" name ="selling_amount" id="selling_amount"></td>
                                        <td><input class="box5" type="text" name ="amount" id="amount"></td>              
                                        <td><input class="box1" type="text" name ="replace_amount" id="replace_amount"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="text-align: right;">মোট পি.ভি :</td>
                                        <td>3223</td>
                                        <td style="text-align: right;">মোট এমাউন্ট :</td>
                                        <td>4523</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                <table>
                                    <tr><th colspan="9" style="text-align: left;">নতুন প্রোডাক্ট চার্ট</th></tr>
                                    <tr id="table_row_odd">
                                        <td>ক্রম</td>
                                        <td>প্রোডাক্ট নাম</td>
                                        <td>ব্রান্ড</td>
                                        <td>পরিমান</td>
                                        <td>মূল্য</td>
                                        <td>পি.ভি</td>
                                        <td>সেলিং কোয়ান্টিটি</td>
                                        <td>এমাউন্ট</td>
                                    </tr>
                                    <tr>
                                        <td>০১</td>
                                        <td>ডাল</td>
                                        <td>দেশী</td>
                                        <td>১০</td>
                                        <td>১০০</td>
                                        <td>১৩</td>                                
                                        <td><input class="box1" type="text" name ="selling_amount" id="selling_amount"></td>
                                        <td><input class="box5" type="text" name ="amount" id="amount"></td>       
                                    </tr> 
                                    <tr>
                                        <td>০২</td>
                                        <td>আটা</td>
                                        <td>ইন্ডিয়ান</td>
                                        <td>৩০</td>
                                        <td>৫৪৫</td>
                                        <td>২২</td>
                                        <td><input class="box1" type="text" name ="selling_amount" id="selling_amount"></td>
                                        <td><input class="box5" type="text" name ="amount" id="amount"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="text-align: right;">মোট পি.ভি :</td>
                                        <td>3223</td>
                                        <td style="text-align: right;">মোট এমাউন্ট :</td>
                                        <td>4523</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">রিপ্লেস প্রোডাক্ট মোট পি.ভি</td><td style="text-align: left;">: <input class="box" type="text" name="replace_product_total_pv" id="replace_product_total_pv" readonly=""></td>

                            <td style="text-align: right;">মোট মূল্য</td><td style="text-align: left;">: <input class="box" type="text" name="replace_product_total_price" id="replace_product_total_price" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">নতুন প্রোডাক্ট মোট পি.ভি</td><td style="text-align: left;">: <input class="box" type="text" name="new_product_total_pv" id="new_product_total_pv" readonly=""></td>

                            <td style="text-align: right;">মোট মূল্য</td><td style="text-align: left;">: <input class="box" type="text" name="new_product_total_price" id="new_product_total_price" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">রিপড পাবে</td><td style="text-align: left;">: <input class="box" type="text" name="total_pv_difference" id="total_pv_difference" readonly=""></td>

                            <td style="text-align: right;">রিপড পাবে</td><td style="text-align: left;">: <input class="box" type="text" name="total_price_difference" id="total_price_difference" readonly=""></td>
                        </tr>               
                        <tr>                    
                            <td colspan="4" style="text-align: center; " >
                                <input class="btn" style =" font-size: 12px; " type="submit" name="save" value="সেভ" />
                                <input class="btn" style =" font-size: 12px; width: auto;" type="submit" name="save_and_print" value="সেভ এন্ড প্রিন্ট" />
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
            <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>

            <div>
                <form method="POST" onsubmit="" name="frm">	
                    <table  class="formstyle">          
                        <tr><th colspan="2" style="text-align: center;">রিপ্লেস প্রোডাক্ট</th></tr>

                        <tr>
                            <td style="text-align: right;">ইন ভয়েস নাম্বার</td><td style="text-align: left;">: <input class="box" type="text" name="invoice_number" id="invoice_number"></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">একাউন্ট নাম্বার</td><td style="text-align: left;">: <input class="box" type="text" name="account_number" id="account_number"></td>
                        </tr>

                        <tr>                    
                            <td colspan="2" style="text-align: center; " >
                                <input class="btn" style =" font-size: 12px; " type="submit" name="search" value="খুজুন" />
                                <input class="btn" style =" font-size: 12px; " type="submit" name="reset" value="রিসেট" />
                        </tr>
                    </table>
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
