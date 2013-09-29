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

<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>
        <div>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="4" style="text-align: center;">কামিং অপশন পেমেন্ট চেক</th></tr>                                
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
include 'includes/footer.php';
?>
