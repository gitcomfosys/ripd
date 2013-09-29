<?php 
    include 'includes/session.inc';
    include_once 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<?php 
    if(isset($_POST['submit'])){
        ?>
<div class="columnSld" style=" padding-left: 50px;">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=PROD"><b>ফিরে যান</b></a></div>
        <div>           
            <form method="POST" onsubmit="">	
                <table class="formstyle"  style=" width: 98%; ">          
                    <tr><th style="text-align: center" colspan="2"><h1>এবাউট পিন</h1></th></tr>

                    <tr><td colspan="2"></td></tr>
                    <tr>
                        <td style="width: 30%;">পিন নাম্বার</td>
                        <td>: 1029844747</td>
                    </tr>
                    <tr>
                        <td>রেফারার একাউন্ট নাম্বার</td>
                        <td>: 2329844747</td>
                    </tr>
                    <tr>
                        <td>রেফার্ড একাউন্ট নাম্বার</td>
                        <td>: 1029844747</td>
                    </tr>
                    <tr>
                        <td>একাউন্ট খোলার তারিখ</td>
                        <td>: ১৪-১২-১৩</td>
                    </tr>
                    <tr>
                        <td>একাউন্ট খোলার সময়</td>
                        <td>: ৪.৩০ am</td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

 <?php       
    }else{
?>

<div class="columnSld" style=" padding-left: 50px;">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=PROD"><b>ফিরে যান</b></a></div>
        <div>           
            <form method="POST" onsubmit="">	
                <table class="formstyle"  style=" width: 98%; ">          
                    <tr><th style="text-align: center" colspan="2"><h1>এবাউট পিন</h1></th></tr>

                    <tr><td colspan="2"></td></tr>
                    <tr>
                        <td>পিন নাম্বার</td>
                        <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                    </tr>
                    <tr>                    
                        <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="খুঁজুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php 
    }
include_once 'includes/footer.php'; ?>



