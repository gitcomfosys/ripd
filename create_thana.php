<?php include_once 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>

<div class="columnSld" style=" padding-left: 50px;">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=CA"><b>ফিরে যান</b></a></div>
        <div>           
            <form method="POST" onsubmit="">	
                <table class="formstyle"  style=" width: 98%; ">          
                    <tr><th style="text-align: center" colspan="2"><h1>থানা তৈরির ফর্ম</h1></th></tr>

                    <tr><td colspan="2"></td></tr>                    
                    <tr>
                        <td>বিভাগ</td>
                        <td>: <select class="box2" name="division" style="width: 150px;">
                                <option value="">ঢাকা</option>
                                <option value="">চট্টগ্রাম</option>
                                <option value="">সিলেট</option>
                                <option value="">খুলনা</option>
                                <option value="">বরিশাল</option>
                                <option value="">রাজশাহী</option>
                                <option value="">রংপুর</option>
                            </select>    
                        </td>                                      
                    </tr><tr>
                        <td>জেলা</td>
                        <td>:    <select class="box2" name="district" style="width: 150px;">
                                <option value="">ফেনী</option>
                                <option value="">মুন্সিগঞ্জ</option>
                                <option value="">সাভার</option>
                                <option value="">টাঙাইল</option>
                                <option value="">সিরাজগঞ্জ</option>
                                <option value="">বগুড়া</option>
                            </select>    
                        </td>                                      
                    </tr>
                    <tr>
                        <td>থানা নাম</td>
                        <td>:    <input  class ="textfield" type="text" id="thana_name" name="thana_name" /></td>
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