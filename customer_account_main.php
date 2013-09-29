 <?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=CA"><b>ফিরে যান</b></a></div> 
        <div>            
            <form method="POST" onsubmit="" name="frm">	
                <table  class="formstyle">          
                    <tr><th colspan="4" style="text-align: center;">মূল তথ্য</th></tr>     
                    <tr>
                        <td  > পিন নং প্রবেশ করুন </td>
                        <td>:  <input  class="box" type="text" id="cust_name" name="cust_name" /></td>	   
                        <td  >রেফারার নাম</td>
                        <td>:  <input  class="box" type="text" id="cust_name" name="cust_name" /></td>	   
                    </tr>
                    <tr>
                        <td >বার কোড</td>
                        <td>:  <input class="box" type="text" id="cust_occupation" name="cust_occupation" /></td>
                        <td >রেফারার একাউন্ট নং</td>
                        <td>:  <input class="box" type="text" id="cust_occupation" name="cust_occupation" /></td>
                    </tr>
                    <tr>
                        <td >পণ্যর নাম</td>
                        <td>:   <input class="box" type="text" id="nominee_email" name="nominee_email" /></td>			
                    </tr>
                    <tr>
                        <td >পি.ভি.</td>
                        <td>:   <input class="box" type="text" id="nominee_email" name="nominee_email" /></td>			
                    </tr>
                    <tr>
                        <td >পরিমাণ</td>
                        <td>:   <input class="box" type="text" id="nominee_email" name="nominee_email" /></td>			
                    </tr>
                    <tr>
                        <td >প্যাকেজের নাম</td>
                        <td>:   <input class="box" type="text" id="nominee_email" name="nominee_email" /></td>			
                    </tr>
                    <tr>
                        <td >সার্ভিস চার্জ</td>
                        <td>:   <input class="box" type="text" id="nominee_email" name="nominee_email" /></td>
                    </tr>                                              
                    <tr>
                        <td colspan="4" ><hr /></td>
                    </tr> 
                    <tr>	
                        <td  colspan="4" style =" font-size: 14px"><b>স্ক্যানড ডকুমেন্টস </b></td>                            
                    </tr>
                    <tr>	
                        <td style="width: 100px;" font-weight="bold" > জাতীয় পরিচয়পত্র</td>
                        <td >:   <input class="box1" type="file" id="scanDoc_national_id" name="scanDoc_national_id" style="font-size:10px;"/> </td>
                    </tr>
                    <tr>	
                        <td  font-weight="bold" >জন্ম সনদ </td>
                        <td >:   <input class="box1" type="file" id="scanDoc_birth_certificate" name="scanDoc_birth_certificate" style="font-size:10px;"/></td>
                    </tr>
                    <tr>	
                        <td  font-weight="bold" >চারিত্রিক সনদ</td>
                        <td >:   <input class="box1" type="file" id="scanDoc_chairman_certificate" name="scanDoc_chairman_certificate" style="font-size:10px;"/></td>
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
<?php
include 'includes/footer.php';
?>