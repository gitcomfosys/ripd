<?php include_once 'includes/header.php'; ?>
<style type="text/css">
    @import "css/bush.css";
</style>
<?php
if (isset($_POST['submit'])) {
    ?>
    <div class="columnSld" style=" padding-left: 50px;">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="in_amount_local_office.php"><b>ফিরে যান</b></a></div>
            <div>           
                <form method="POST" onsubmit="">	
                    <table class="formstyle"  style=" width: 98%; ">          
                        <tr><th style="text-align: center" colspan="2"><h1>ইন এমাউন্ট</h1></th></tr>

                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <td style="width: 30%;">একাউন্টধারীর নাম</td>
                            <td>: সাইফুল</td>
                        </tr>
                        <tr>
                            <td>একাউন্ট নাম্বার</td>
                            <td>: 2329844747</td>
                        </tr>
                        <tr>
                            <td>ছবি</td>
                            <td>: <img src='images/iftee.jpg' alt='Iftee'></td>
                        </tr>
                        <tr>
                            <td>পূর্ববর্তী একাউন্ট ব্যালেন্স</td>
                            <td>: ৬৪৮৪৫</td>
                        </tr>
                        <tr>
                            <td>বর্তমান একাউন্ট ব্যালেন্স</td>
                            <td>: ১৫১৫১৫১</td>
                        </tr>
                        <tr>                    
                            <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ" /></td>                           
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
            <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>
            <div>           
                <form method="POST" onsubmit="">	
                    <table class="formstyle"  style=" width: 98%; ">          
                        <tr><th style="text-align: center" colspan="2"><h1>ইন এমাউন্ট</h1></th></tr>

                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <td>এমাউন্ট</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>একাউন্ট নাম্বার</td>
                            <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                        </tr>
                        <tr>
                            <td>সেল নাম্বার</td>
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
}
include_once 'includes/footer.php';
?>