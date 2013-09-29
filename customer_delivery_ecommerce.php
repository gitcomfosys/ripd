
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
<?php
$account_id = $_POST['account_number'];
if ((isset($_POST['delivery_copy'])) && $account_id == '') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="ecommerce_customer.php"><b>ফিরে যান</b></a></div>
            <div>
                <form method="POST" onsubmit="" name="frm">    
                    <table class="formstyle" style =" width:78%" >       
                        <tr><th colspan="6" style="text-align: center;">ডেলেভারী কপি</th></tr>
                        <tr>
                            <td colspan="2"  style="text-align: right;"> এমপ্লয়ি কস্ট</td>
                            <td>:    <input  class="box" type="text"  id="cust_employee"name="cust_employee" /></td>    
                        </tr>
                        <tr>
                            <td  colspan="2"  style="text-align: right;"> কেয়ারিং কস্ট </td>
                            <td>:    <input    class="box" type="text"  id="cust_careing" name="cust_careing" /></td>    
                        </tr>
                        <tr>
                            <td  colspan="2"  style="text-align: right;" >  অন্যান্য কস্ট </td>
                            <td>:    <input  class="box" type="text"   id="cust_other" name="cust_other"/></td>    
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right; padding-top: 15px;vertical-align: top; width: 25%;">অন্যান্য</td>
                            <td colspan="2">
                                <table id="container_others">
                                    <tr>
                                        <td >সাবজেক্ট : &nbsp;&nbsp;<input class="box" id="field1" name="field1[]" type="text" /></td>
                                        <td>এমাউন্ট :  &nbsp;&nbsp;<input class="box" id="field2" name="field2[]" type="text" /></td>
                                        <td style="vertical-align: top;"><p id="add_field"><a href="#"><br /><img alt="Add Field" width="22px" height="20px" src="images//addSign.png"></a></p></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>    
                        <tr> <td colspan="11" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="after_saving" value="প্রিন্ট" /></td></tr>
                    </table>
            </div>
        </div>
    </div>
    <?php
} elseif ((isset($_POST['after_saving'])) && $account_id == '') {
    ?>      
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="ecommerce_customer.php"><b>ফিরে যান</b></a></div>
            <div>
                <form method="POST" onsubmit="" name="frm">                
                    <table class="formstyle" style =" width:78%" >   
                        <tr><th colspan="6" style="text-align: center;">ডেলেভারী কপি</th></tr>
                        <tr>
                            <td colspan="2"  style="text-align: right;">প্রোডাক্ট প্রাইজ</td>
                            <td>:  <input  class ="box" type="text" id="product_price" name="product_price" /></td>
                        </tr>
                        <tr>
                            <td colspan="2"  style="text-align: right;">সার্ভিস চার্জ়</td>
                            <td>:  <input  class ="box" type="text" id="service_charge" name="service_charge" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right; padding-top: 15px;vertical-align: top; width: 25%;">অন্যান্য</td>
                            <td colspan="2">
                                <table id="container_others">
                                    <tr>
                                        <td >সাবজেক্ট : &nbsp;&nbsp;<input class="box" id="field1" name="field1[]" type="text" /></td>
                                        <td>এমাউন্ট :  &nbsp;&nbsp;<input class="box" id="field2" name="field2[]" type="text" /></td>
                                        <td style="vertical-align: top;"><p id="add_field"><a href="#"><br /><img alt="Add Field" width="22px" height="20px" src="images//addSign.png"></a></p></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>    
                        <tr>
                            <td colspan="2"  style="text-align: right;">টোটাল এমাউন্ট </td>
                            <td>:  <input  class ="box" type="text" id="total_amount" name="total_amount" /></td>
                        </tr>  
                        <tr>
                            <td colspan="11" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="coming_order" value="প্রিন্ট" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <?php
} elseif ((isset($_POST['coming_order'])) && $account_id == '') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="ecommerce_customer.php"><b>ফিরে যান</b></a></div>
            <div>
                <form method="POST" onsubmit="">       
                    <table class="formstyle" style =" width:78%">        
                        <tr><th style="text-align: center" colspan="3">কামিং অর্ডার</th></tr>                 
                        <tr id = "table_row_odd">
                            <td >তারিখ</td>
                            <td>বার</td>
                            <td > সময় </td>     
                        </tr>
                        <tr>
                            <td>১৬-০৫-১৩</td>
                            <td>রবি</td>
                            <td>১১.০০</td>
                        </tr>
                        <tr>
                            <td colspan="2"  style="text-align: right;">ডেলেভারী ব্যাক্তির একাউন্ট নাম্বার</td>
                            <td>:  <input  class ="box" type="text" id="delivery_accountnumber" name="delivery_accountnumber" /></td>
                        </tr>    
                        <tr>
                            <td colspan="11" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="product_chart" value="প্রিন্ট" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <?php
} elseif ((isset($_POST['product_chart'])) && $account_id == '') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="ecommerce_customer.php"><b>ফিরে যান</b></a></div>
            <form method="POST" onsubmit="" name="frm">	
                <table  class="formstyle" style =" width:78%">          
                    <tr>
                        <th colspan="3" >ক্রয়্কৃত প্রোডাক্ট </th>                        
                    </tr>         
                    <tr id = "table_row_odd">
                        <td >তারিখ</td>
                        <td>বার</td>
                        <td > সময় </td>     
                    </tr>
                    <tr>
                        <td>১৬-০৫-১৩</td>
                        <td>রবি</td>
                        <td>১১.০০</td>
                    </tr>
                    <tr>                    
                        <td colspan="2" style="padding-left: 290px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="check_print" value="সেভ করুন" /></td>                           
                    </tr>  
                </table>
            </form>
        </div>
    </div>
    <?php
} elseif ((isset($_POST['check_print'])) && $account_id == '') {
    ?>
    <div style="padding-top: 10px;">   
        <div style="padding-left: 110px;"><a href="ecommerce_customer.php"><b>ফিরে যান</b></a></div>
    </div>
    <div>
        <form method="POST" onsubmit="">	
            <tr><td colspan="4"><hr></td></tr>
            <table class="formstyle" style =" width:78%">
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
                    <td colspan="2" style="padding-left: 290px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" /></td>                           
                </tr>    
            </table>
        </form>
    </div>
    </div>
    </div>
    <?php
} else {
    ?>        
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="ecommerce_customer.php"><b>ফিরে যান</b></a></div>
            <div>
                <form method="POST" onsubmit="" name="frm">    
                    <table class="formstyle" style =" width:78%" >       
                        <tr><th colspan="6" style="text-align: center;">ডেলেভারী কপি</th></tr>
                        <tr>
                            <td style="width:40%" >একাউন্টর নাম্বার</td>
                            <td>: <input  class="box" type="text" name="presentation_number" value=""/></td>   
                        </tr>
                        <tr>
                            <td >রিসিভকারীর  এড্রেস</td>               
                            <td>: <input  class="box" type="text" name="presentation_name" value=""/></td>   
                        </tr>
                        <tr>
                            <td >রিসিভকারীর এড্রেস</td>               
                            <td>: <input class="box" name="presentar_name" value=""></td>
                        </tr>
                        <tr>
                            <td >সেল নাম্বার</td>
                            <td>: <input  class="box" type="text" name="presentation_date" value=""/></td>
                            </td>   
                        </tr>
                        <tr>
                            <td >ডেলেভারীর তারিখ </td>
                            <td>: <input  class="box" type="text" name="presentation_time" value=""/></td>
                        </tr>      
                        <tr>
                            <td >ডেলেভারীর চালান নং </td>
                            <td>: <input  class="box" type="text" name="presentation_time" value=""/></td>
                        </tr>      
                        <tr>
                            <td >অর্ডার তারিখ  ও সময়</td>
                            <td>: <input  class="box" type="text" name="presentation_time" value=""/></td>
                        </tr>      
                        <tr>
                            <td > অর্ডার নাম্বার</td>
                            <td>: <input  class="box" type="text" name="presentation_time" value=""/></td>
                        </tr>     
                        <tr><td colspan="4"><hr></td></tr>
                        <tr ><th colspan="4" style="text-align: center">
                        <h2>ডেলেভারীর চার্ট</h2></th></tr>
                        <tr>
                            <td colspan="11" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="delivery_copy" value="প্রিন্ট" /></td>
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
