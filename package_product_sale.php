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
$account_id = $_POST['account_number'];
if (isset($_POST['submit']) && $account_id != '') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>

            <div>
                <form method="POST" onsubmit="" name="frm">	
                    <table  class="formstyle">          
                        <tr><th colspan="2" style="text-align: center;">প্যাকেজ প্রোডাক্ট সেলিং - প্যাকেজ চার্ট</th></tr>
                        <tr>
                            <td colspan="2" style="text-align: right;"><a><img alt="Add Field" width="100px" height="80px" src="images/big_pic.jpg"></a><br />একাউন্টধারীর নাম: নোমান</td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">একাউন্ট নাম্বার</td><td>: <input class="box" type="text" name="account_number" id="account_number" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">একাউন্ট ব্যালেন্সড</td><td>: <input class="box" type="text" name="account_balance" id="account_balance" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">সেটল এমাউন্ট</td><td>: <input class="box" type="text" name="settle_amount" id="settle_amount" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">ফোন নাম্বার</td><td>: <input class="box" type="text" name="cell_number" id="cell_number" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">ব্যক্তিগত সেলিং</td><td>: <input class="box" type="text" name="personal_selling" id="personal_selling" readonly=""></td>
                        </tr> 
                        <tr>
                            <td colspan="2">
                                <div>
                                    <table  class="formstyle">                         
                                        <tr>
                                            <th style="text-align: center;">প্রোডাক্ট চার্ট - প্যাকেজ ০১ <br />
                                                প্যাকেজ সংখ্যা : ০২
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>
                                                <table>
                                                    <tr id="table_row_odd">
                                                        <td>ক্রম</td>
                                                        <td>প্রোডাক্ট নাম</td>
                                                        <td>ব্রান্ড</td>
                                                        <td>পরিমান</td>
                                                    </tr>
                                                    <tr>
                                                        <td>০১</td>
                                                        <td>ডাল</td>
                                                        <td>দেশী</td>
                                                        <td>১০</td>
                                                    </tr> 
                                                    <tr>
                                                        <td>০২</td>
                                                        <td>আটা</td>
                                                        <td>ইন্ডিয়ান</td>
                                                        <td>৩০</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">মোট মূল্য = 1000 টাকা</td>
                                                        <td colspan="2">মোট পি.ভি = 20</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>    
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                    <table  class="formstyle">                         
                                        <tr>
                                            <th style="text-align: center;">প্রোডাক্ট চার্ট - প্যাকেজ ০৩ <br />
                                                প্যাকেজ সংখ্যা : ০১
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>
                                                <table>
                                                    <tr id="table_row_odd">
                                                        <td>ক্রম</td>
                                                        <td>প্রোডাক্ট নাম</td>
                                                        <td>ব্রান্ড</td>
                                                        <td>পরিমান</td>
                                                    </tr>
                                                    <tr>
                                                        <td>০১</td>
                                                        <td>ডাল</td>
                                                        <td>দেশী</td>
                                                        <td>১০</td>
                                                    </tr> 
                                                    <tr>
                                                        <td>০২</td>
                                                        <td>আটা</td>
                                                        <td>ইন্ডিয়ান</td>
                                                        <td>৩০</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">মোট মূল্য = 1000 টাকা</td>
                                                        <td colspan="2">মোট পি.ভি = 20</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>                                           
                                    </table>
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>মোট মূল্য = 1450 টাকা</td>
                            <td>মোট পি.ভি = 40</td>
                        </tr>
                        <tr>                    
                            <td colspan="2" style="text-align: center; " ><input class="btn" style =" font-size: 14px; " type="submit" name="confirm_submit" value="সেভ" />
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
                        <tr><th colspan="4" style="text-align: center;">প্যাকেজ প্রোডাক্ট সেলিং - প্রোডাক্ট চার্ট</th></tr>
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
                                <div>
                                    <table  class="formstyle">                         
                                        <tr>
                                            <th style="text-align: center;">প্রোডাক্ট চার্ট - প্যাকেজ ০১ <br />
                                                প্যাকেজ সংখ্যা : ০২
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>
                                                <table>
                                                    <tr id="table_row_odd">
                                                        <td>ক্রম</td>
                                                        <td>প্রোডাক্ট নাম</td>
                                                        <td>ব্রান্ড</td>
                                                        <td>পরিমান</td>
                                                    </tr>
                                                    <tr>
                                                        <td>০১</td>
                                                        <td>ডাল</td>
                                                        <td>দেশী</td>
                                                        <td>১০</td>
                                                    </tr> 
                                                    <tr>
                                                        <td>০২</td>
                                                        <td>আটা</td>
                                                        <td>ইন্ডিয়ান</td>
                                                        <td>৩০</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">মোট মূল্য = 1000 টাকা</td>
                                                        <td colspan="2">মোট পি.ভি = 20</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>    
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div>
                                    <table  class="formstyle">                         
                                        <tr>
                                            <th style="text-align: center;">প্রোডাক্ট চার্ট - প্যাকেজ ০৩ <br />
                                                প্যাকেজ সংখ্যা : ০১
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>
                                                <table>
                                                    <tr id="table_row_odd">
                                                        <td>ক্রম</td>
                                                        <td>প্রোডাক্ট নাম</td>
                                                        <td>ব্রান্ড</td>
                                                        <td>পরিমান</td>
                                                    </tr>
                                                    <tr>
                                                        <td>০১</td>
                                                        <td>ডাল</td>
                                                        <td>দেশী</td>
                                                        <td>১০</td>
                                                    </tr> 
                                                    <tr>
                                                        <td>০২</td>
                                                        <td>আটা</td>
                                                        <td>ইন্ডিয়ান</td>
                                                        <td>৩০</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">মোট মূল্য = 1000 টাকা</td>
                                                        <td colspan="2">মোট পি.ভি = 20</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>                                           
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">মোট মূল্য = 1450 টাকা</td>
                            <td colspan="2">মোট পি.ভি = 40</td>
                        </tr>
                        <tr><td><br/></td></tr>
                        <tr>
                            <td  colspan="2" style="text-align: left;">------------------<br/>রিসিভড বাই</td> 
                            <td  colspan="2" style="text-align: right;">------------------<br/>অথোরাইজ বাই</td> 
                        </tr>
                        <tr>
                            <td td colspan="4">
                                <table border="1px"  style="text-align: center;">
                                    <th>পেইমেন্ট বাই</th>
                                    <tr>
                                        <td style="text-align: center;">ক্যাশ: <input class="box" type="text" name="cash" id="cash"></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">একাউন্ট: <input class="box" type="text" name="account_number" id="account_number"> পাসওয়ার্ড: <input type="password" name="password" id="password"></td>
                                    </tr>
                                </table>                                        
                            </td>
                        </tr> 
                        <tr>       
                            <td colspan="4" style="text-align: center; " >
                                <input class="btn" style =" font-size: 12px; " type="submit" name="confirm_submit_save" value="সেভ করুন" />                                
                                <input class="btn" style =" font-size: 12px" type="submit" name="confirm_submit_save_print" value="সেভ এন্ড প্রিন্ট" />
                                <input class="btn" style =" font-size: 14px; " type="submit" name="create_account" value="একাউন্ট তৈরী"></td>
                        </tr>    
                    </table>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <?php
} elseif (isset($_POST['create_account'])) {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>

            <div>
                <form method="POST" onsubmit="" name="frm">	
                    <table  class="formstyle">          
                        <tr><th colspan="4" style="text-align: center;">প্যাকেজ প্রোডাক্ট সেলিং - প্রোডাক্ট চার্ট</th></tr>
                        <tr>
                            <td style="text-align: right;">প্যাকেজ নাম</td><td>: <input class="box" type="text" name="pin_number" id="account_number" readonly=""></td>

                            <td style="text-align: right;">পিন নাম্বার</td><td>: <input class="box" type="text" name="pin_number" id="account_number" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">নাম</td><td>: <input class="box" type="text" name="account_number" id="name" readonly=""></td>

                            <td style="text-align: right;">পেশা</td><td>: <input class="box" type="text" name="occupation" id="account_balance" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">ঠিকানা</td><td>: <input class="box" type="text" name="address" id="address" readonly=""></td>

                            <td style="text-align: right;">ধর্ম </td>
                            <td>:   <input  class="box" type="text" id="cust_religion" name="cust_religion" /></td>	                         
                        </tr>
                        <tr>
                            <td style="text-align: right;">জাতীয়তা</td>
                            <td>:   <input class="box" type="text" id="cust_nationality" name="cust_nationality" /> </td>			

                            <td style="text-align: right;">মোবাইল নং</td>
                            <td>:   <input class="box" type="text" id="cust_mobile" name="cust_mobile"/></td>			
                        </tr>
                        <tr>
                            <td style="text-align: right;">ইমেল</td>
                            <td>:   <input class="box" type="text" id="cust_email" name="cust_email" /></td>			

                            <td style="text-align: right;">জন্মতারিখ</td>
                            <td >:   <select  class="box1"  name="date" style =" font-size: 11px">
                                    <option >দিন</option>
                                    <?php
                                    for ($i = 1; $i <= 31; $i++) {
                                        $date = english2bangla($i);
                                        echo "<option value=1>" . $date . "</option>";
                                    }
                                    ?>
                                </select>				

                                <select class="box1" name="month" style =" font-size: 11px">
                                    <option >মাস</option>
                                    <option value="January">জানুয়ারি</option>
                                    <option value="February">ফেব্রুয়ারী</option>
                                    <option value="March">মার্চ</option>
                                    <option value="April">এপ্রিল </option>
                                    <option value="May">মে</option>
                                    <option value="June">জুন</option>
                                    <option value="July">জুলাই</option>
                                    <option value="August">আগষ্ট</option>
                                    <option value="September">সেপ্টেম্বর</option>
                                    <option value="October">অক্টোবর </option>
                                    <option value="November">নভেম্বর</option>
                                    <option value="December">ডিসেম্বর</option> 
                                </select>

                                <select class="box1" id="year" name="year" style =" font-size: 11px" >
                                    <option>বছর </option>
                                    <?php
                                    for ($i = 2050; $i >= 1930; $i--) {
                                        $year = english2bangla($i);
                                        echo "<option value=1>" . $year . "</option>";
                                    }
                                    ?>
                                </select>
                            </td>			
                        </tr>
                        <tr>
                            <td style="text-align: right;">ইউজার নাম</td><td>: <input class="box" type="text" name="user_name" id="user_name" readonly=""></td>

                            <td style="text-align: right;">পাসওয়ার্ড</td><td>: <input class="box" type="password" name="password" id="password" readonly=""></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div>
                                    <table  class="formstyle">                         
                                        <tr>
                                            <th style="text-align: center;">প্রোডাক্ট চার্ট - প্যাকেজ ০১ <br />
                                                প্যাকেজ সংখ্যা : ০২
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>
                                                <table>
                                                    <tr id="table_row_odd">
                                                        <td>ক্রম</td>
                                                        <td>প্রোডাক্ট নাম</td>
                                                        <td>ব্রান্ড</td>
                                                        <td>পরিমান</td>
                                                    </tr>
                                                    <tr>
                                                        <td>০১</td>
                                                        <td>ডাল</td>
                                                        <td>দেশী</td>
                                                        <td>১০</td>
                                                    </tr> 
                                                    <tr>
                                                        <td>০২</td>
                                                        <td>আটা</td>
                                                        <td>ইন্ডিয়ান</td>
                                                        <td>৩০</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">মোট মূল্য = 1000 টাকা</td>
                                                        <td colspan="2">মোট পি.ভি = 20</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>    
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div>
                                    <table  class="formstyle">                         
                                        <tr>
                                            <th style="text-align: center;">প্রোডাক্ট চার্ট - প্যাকেজ ০৩ <br />
                                                প্যাকেজ সংখ্যা : ০১
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>
                                                <table>
                                                    <tr id="table_row_odd">
                                                        <td>ক্রম</td>
                                                        <td>প্রোডাক্ট নাম</td>
                                                        <td>ব্রান্ড</td>
                                                        <td>পরিমান</td>
                                                    </tr>
                                                    <tr>
                                                        <td>০১</td>
                                                        <td>ডাল</td>
                                                        <td>দেশী</td>
                                                        <td>১০</td>
                                                    </tr> 
                                                    <tr>
                                                        <td>০২</td>
                                                        <td>আটা</td>
                                                        <td>ইন্ডিয়ান</td>
                                                        <td>৩০</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">মোট মূল্য = 1000 টাকা</td>
                                                        <td colspan="2">মোট পি.ভি = 20</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>                                           
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">মোট মূল্য = 1450 টাকা</td>
                            <td colspan="2">মোট পি.ভি = 40</td>
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
} elseif ((isset($_POST['submit'])) && $account_id == '') { //($_POST['account_number'] == 'no_account') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>

            <div>
                <form method="POST" onsubmit="" name="frm">	
                    <table  class="formstyle">          
                        <tr><th colspan="4" style="text-align: center;">প্যাকেজ প্রোডাক্ট সেলিং - প্রোডাক্ট চার্ট</th></tr>
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
                            <td>
                                <br />
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">ক্রয়কারীর নাম</td><td>: <input class="box" type="text" name="buyers_name" id="buyers_name" readonly=""></td>

                            <td style="text-align: right;">পেশা</td><td>: <input class="box" type="text" name="occupation" id="account_balance" readonly=""></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">ঠিকানা</td><td>: <input class="box" type="text" name="address" id="address" readonly=""></td>

                            <td style="text-align: right;">ধর্ম</td>
                            <td>:   <input  class="box" type="text" id="cust_religion" name="cust_religion" /></td>	                         
                        </tr>
                        <tr>
                            <td style="text-align: right;">জাতীয়তা</td>
                            <td>:   <input class="box" type="text" id="cust_nationality" name="cust_nationality" /> </td>			

                            <td style="text-align: right;">মোবাইল নং</td>
                            <td>:   <input class="box" type="text" id="cust_mobile" name="cust_mobile"/></td>			
                        </tr>
                        <tr>
                            <td style="text-align: right;">ইমেল</td>
                            <td>:   <input class="box" type="text" id="cust_email" name="cust_email" /></td>			
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div>
                                    <table  class="formstyle">                         
                                        <tr>
                                            <th style="text-align: center;">প্রোডাক্ট চার্ট - প্যাকেজ ০১ <br />
                                                প্যাকেজ সংখ্যা : ০২
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>
                                                <table>
                                                    <tr id="table_row_odd">
                                                        <td>ক্রম</td>
                                                        <td>প্রোডাক্ট নাম</td>
                                                        <td>ব্রান্ড</td>
                                                        <td>পরিমান</td>
                                                    </tr>
                                                    <tr>
                                                        <td>০১</td>
                                                        <td>ডাল</td>
                                                        <td>দেশী</td>
                                                        <td>১০</td>
                                                    </tr> 
                                                    <tr>
                                                        <td>০২</td>
                                                        <td>আটা</td>
                                                        <td>ইন্ডিয়ান</td>
                                                        <td>৩০</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">মোট মূল্য = 1000 টাকা</td>
                                                        <td colspan="2">মোট পি.ভি = 20</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>    
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div>
                                    <table  class="formstyle">                         
                                        <tr>
                                            <th style="text-align: center;">প্রোডাক্ট চার্ট - প্যাকেজ ০৩ <br />
                                                প্যাকেজ সংখ্যা : ০১
                                            </th>
                                        </tr>

                                        <tr>
                                            <td>
                                                <table>
                                                    <tr id="table_row_odd">
                                                        <td>ক্রম</td>
                                                        <td>প্রোডাক্ট নাম</td>
                                                        <td>ব্রান্ড</td>
                                                        <td>পরিমান</td>
                                                    </tr>
                                                    <tr>
                                                        <td>০১</td>
                                                        <td>ডাল</td>
                                                        <td>দেশী</td>
                                                        <td>১০</td>
                                                    </tr> 
                                                    <tr>
                                                        <td>০২</td>
                                                        <td>আটা</td>
                                                        <td>ইন্ডিয়ান</td>
                                                        <td>৩০</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">মোট মূল্য = 1000 টাকা</td>
                                                        <td colspan="2">মোট পি.ভি = 20</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>                                           
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">মোট মূল্য = 1450 টাকা</td>
                            <td colspan="2">মোট পি.ভি = 40</td>
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
                        <tr><th style="text-align: center;">প্যাকেজ প্রোডাক্ট সেলিং</th></tr>
                        <tr>
                            <td style="text-align: center; font-size: 12px;">রিপড ইউনিভার্সাল লিমিটেড <br />প্রতিষ্ঠান নাম : <b>সেলস স্টোর</b></td>
                        </tr>
                        <tr>
                            <td>
                                <div id="accordion" style="width: 100%;">
                                    <h3>প্যাকেজ ০১</h3>

                                    <div>	
                                        <table  class="formstyle">                         
                                            <tr>
                                                <th style="text-align: center;">প্রোডাক্ট চার্ট - প্যাকেজ ০১ <br />
                                                    প্যাকেজ সংখ্যা :<select class="box1" name="package_number" style =" font-size: 14px; height: 18px;">
                                                        <option value="01"></option>
                                                        <option value="02">০১</option>
                                                        <option value="03">০২</option>
                                                        <option value="04">০৩ </option>
                                                        <option value="05">০৪</option>
                                                        <option value="05">০৫</option>
                                                        <option value="06">০৬</option>
                                                        <option value="07">০৭</option>
                                                        <option value="08">০৮</option>
                                                        <option value="09">০৯ </option>
                                                        <option value="10">১০</option>
                                                    </select>
                                                </th>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr id="table_row_odd">
                                                            <td>ক্রম</td>
                                                            <td>প্রোডাক্ট নাম</td>
                                                            <td>ব্রান্ড</td>
                                                            <td>পরিমান</td>
                                                        </tr>
                                                        <tr>
                                                            <td>০১</td>
                                                            <td>ডাল</td>
                                                            <td>দেশী</td>
                                                            <td>১০</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>০২</td>
                                                            <td>আটা</td>
                                                            <td>ইন্ডিয়ান</td>
                                                            <td>৩০</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">মোট মূল্য = 1000 টাকা</td>
                                                            <td colspan="2">মোট পি.ভি = 20</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>    
                                        </table>
                                    </div>
                                    <h3>প্যাকেজ ০২</h3>
                                    <div>	
                                        <table  class="formstyle">                         
                                            <tr>
                                                <th style="text-align: center;">প্রোডাক্ট চার্ট - প্যাকেজ ০২ <br />
                                                    প্যাকেজ সংখ্যা :<select class="box1" name="package_number" style =" font-size: 14px; height: 18px;">
                                                        <option value="01"></option>
                                                        <option value="02">০১</option>
                                                        <option value="03">০২</option>
                                                        <option value="04">০৩ </option>
                                                        <option value="05">০৪</option>
                                                        <option value="05">০৫</option>
                                                        <option value="06">০৬</option>
                                                        <option value="07">০৭</option>
                                                        <option value="08">০৮</option>
                                                        <option value="09">০৯ </option>
                                                        <option value="10">১০</option>
                                                    </select>
                                                </th>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr id="table_row_odd">
                                                            <td>ক্রম</td>
                                                            <td>প্রোডাক্ট নাম</td>
                                                            <td>ব্রান্ড</td>
                                                            <td>পরিমান</td>
                                                        </tr>
                                                        <tr>
                                                            <td>০১</td>
                                                            <td>ডাল</td>
                                                            <td>দেশী</td>
                                                            <td>১০</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>০২</td>
                                                            <td>আটা</td>
                                                            <td>ইন্ডিয়ান</td>
                                                            <td>৩০</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">মোট মূল্য = 1000 টাকা</td>
                                                            <td colspan="2">মোট পি.ভি = 20</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>    
                                        </table>
                                    </div>
                                    <h3>প্যাকেজ ০৩</h3>
                                    <div>
                                        <table  class="formstyle">                         
                                            <tr>
                                                <th style="text-align: center;">প্রোডাক্ট চার্ট - প্যাকেজ ০৩ <br />
                                                    প্যাকেজ সংখ্যা :<select class="box1" name="package_number" style =" font-size: 14px; height: 18px;">
                                                        <option value="01"></option>
                                                        <option value="02">০১</option>
                                                        <option value="03">০২</option>
                                                        <option value="04">০৩ </option>
                                                        <option value="05">০৪</option>
                                                        <option value="05">০৫</option>
                                                        <option value="06">০৬</option>
                                                        <option value="07">০৭</option>
                                                        <option value="08">০৮</option>
                                                        <option value="09">০৯ </option>
                                                        <option value="10">১০</option>
                                                    </select>
                                                </th>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr id="table_row_odd">
                                                            <td>ক্রম</td>
                                                            <td>প্রোডাক্ট নাম</td>
                                                            <td>ব্রান্ড</td>
                                                            <td>পরিমান</td>
                                                        </tr>
                                                        <tr>
                                                            <td>০১</td>
                                                            <td>ডাল</td>
                                                            <td>দেশী</td>
                                                            <td>১০</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>০২</td>
                                                            <td>আটা</td>
                                                            <td>ইন্ডিয়ান</td>
                                                            <td>৩০</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">মোট মূল্য = 1000 টাকা</td>
                                                            <td colspan="2">মোট পি.ভি = 20</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>    
                                        </table>
                                    </div>
                                    <h3>প্যাকেজ ০৪</h3>
                                    <div>	
                                        <table  class="formstyle">                         
                                            <tr>
                                                <th style="text-align: center;">প্রোডাক্ট চার্ট - প্যাকেজ ০৪ <br />
                                                    প্যাকেজ সংখ্যা :<select class="box1" name="package_number" style =" font-size: 14px; height: 18px;">
                                                        <option value="01"></option>
                                                        <option value="02">০১</option>
                                                        <option value="03">০২</option>
                                                        <option value="04">০৩ </option>
                                                        <option value="05">০৪</option>
                                                        <option value="05">০৫</option>
                                                        <option value="06">০৬</option>
                                                        <option value="07">০৭</option>
                                                        <option value="08">০৮</option>
                                                        <option value="09">০৯ </option>
                                                        <option value="10">১০</option>
                                                    </select>
                                                </th>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr id="table_row_odd">
                                                            <td>ক্রম</td>
                                                            <td>প্রোডাক্ট নাম</td>
                                                            <td>ব্রান্ড</td>
                                                            <td>পরিমান</td>
                                                        </tr>
                                                        <tr>
                                                            <td>০১</td>
                                                            <td>ডাল</td>
                                                            <td>দেশী</td>
                                                            <td>১০</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>০২</td>
                                                            <td>আটা</td>
                                                            <td>ইন্ডিয়ান</td>
                                                            <td>৩০</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">মোট মূল্য = 1000 টাকা</td>
                                                            <td colspan="2">মোট পি.ভি = 20</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>    
                                        </table>
                                    </div>
                                </div>
                        <tr>
                            <td style="text-align: center;">Account Number: <input class="box" type="text" name="account_number" id="account_number"></td>
                        </tr>
                        <tr>                    
                            <td style="text-align: center; "><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট" /></td>                           
                        </tr>
                        </td>
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
