<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>
 <div style="font-size: 12px;">
        <form method="POST">
            <div style="padding-top: 10px;"> 
        <div style="padding-left: 110px;"><a href="ecommerce_customer.php"><b>ফিরে যান</b></a></div>   
        </div>
            <div>
        <table class="formstyle"  style=" width:65%; ">    
            <tr><th colspan="2" style="text-align: center;">রিসীভার কোড</th></tr>
                <td colspan="2">
                        <tr>
                            <td >একাউন্ট নাম্বার : &nbsp;&nbsp;<input class="box" id="field1" name="field1[]" type="text" /></td>
                            <td>এন্টার রিসীভার কোড :  &nbsp;&nbsp;<input class="box" id="field2" name="field2[]" type="text" /></td>
                        </tr>
                         <tr> <td colspan="11" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="after_saving" value="প্রিন্ট" /></td></tr>
        </table>
            </form>
    </div> 
</div>
<?php include_once 'includes/footer.php'; ?>