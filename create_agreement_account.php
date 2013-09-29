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
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="2" style="text-align: center;">ক্রিয়েট এগ্রিমেন্ট একাউন্ট</th></tr>
                    <tr>
                        <td>একাউন্ট প্যাকেজের ধরণ </td>
                        <td>: <select class="box" name="power_store" style="width: 150px;">
                                <option value=""> মাস্টার প্যাকেজ </option>
                                <option value="">সুপার প্যাকেজ</option>
                                <option value="">স্ট্যান্ডার্ড প্যাকেজ</option>
                                 <option value="">ইকোনমি প্যাকেজ</option>
                                <option value=""> স্টারটার প্যাকেজ </option>
                             
                            </select>    
                        </td>                         
                    </tr>
                    <tr>
                        <td>প্যাকেজ এগ্রিমেন্ট এমাউন্ট</td>
                        <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                    </tr>
                    <tr>                    
                        <td colspan="2" style="padding-left: 250px; " ><a href="#">পরবর্তী  ধাপ</a></td>                           
                    </tr>    
                </table>
                </fieldset>
            </form>
        </div>      
    </div>
   <?php 
    include 'includes/footer.php';
   ?>