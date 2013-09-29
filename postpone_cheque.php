<?php include_once 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>

    <div class="columnSld" style=" padding-left: 50px;">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=ACC"><b>ফিরে যান</b></a></div>
            <div>           
                <form method="POST" onsubmit="">	
                    <table class="formstyle"  style=" width: 98%; ">          
                        <tr><th style="text-align: center" colspan="3"><h1>চেক স্থগিত করন</h1>
                        </th>
                        </tr>
                        <tr><td colspan="2"></td>
                        </tr>                    
                        <tr>
                            <td style="width: 20%">একাউন্ট নাম্বার</td>
                            <td style="width: 55%">: <input  class ="box" type="text" id="account_number" name="account_number" />
                            </td>                                      
                        </tr>
                        <tr>
                            <td>চেক নাম্বার</td>
                            <td >:  <input  class ="box" type="text" id="cheque" name="cheque" /> </td>
                        </tr>
                        <tr>                    
                            <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="খুঁজুন" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" />
                            </td>                           
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
<?php
include_once 'includes/footer.php';
?>