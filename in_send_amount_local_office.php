<?php include_once 'includes/header.php'; ?>
<style type="text/css">
    @import "css/bush.css";
</style>
    <div class="columnSld" style=" padding-left: 50px;">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="lenadena_chart.php"><b>ফিরে যান</b></a></div>
            <div>           
                <form method="POST" onsubmit="">	
                    <table class="formstyle"  style=" width: 98%; ">          
                        <tr><th style="text-align: center" colspan="2"><h1>সেন্ড এমাউন্ট</h1></th></tr>

                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <td>এন্টার একাউন্ট নাম্বার</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>সেল নং</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>টোটল এমাউন্ট</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>ইন এমাউন্ট</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>সেন্ড বিডিটি</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>ট্রাস্ট প্রোপারটি</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>আর্ন এমাউন্ট</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>ট্যাক্স</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>সার্ভিস চার্জ</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>                    
                            <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ" />
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