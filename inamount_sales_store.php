<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
//include 'includes/header.php';
error_reporting(0);
?>
<style type="text/css">
    @import "css/bush.css";
    @import "css/expand_collapse.css";
</style>
<script type="text/javascript" src="javascripts/expand_collapse01.js"></script>
<script type="text/javascript" src="javascripts/expand_collapse02_ui.js"></script>
<script>    
    $(function() {
        $( "#accordion" ).accordion();
    });
</script>
<?php
include 'includes/header.php';

    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=ASS"><b>ফিরে যান</b></a></div>
            <div>
                <form method="POST" onsubmit="" name="frm">                
                    <table  class="formstyle">          
                        <tr><th style="text-align: center;">ইন এমাউন্ট</th></tr>
                        <tr><td>
                                <div id="accordion" style="width: 100%;">
                                    <h3>এক্সট্রাইন উইথ লিংক</h3>
                                    <div>
                                        <form method="POST" onsubmit="" name="frm">	
                                            <table  class="formstyle">                                         
                                                <tr>
                                                    <td style="text-align: right"> এন্টার এমাউন্টঃ </td>
                                                    <td><input class="box" type="text" name="enter_amount"/></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"> চেক নাম্বারঃ </td>
                                                    <td><input class="box" type="text" name="check_number"/></td>
                                                </tr>
                                            </table>
                                    </div>
                     
                                    <h3>কামিং এমাউন্ট ফ্রম একাউন্ট</h3>
                                    <div>	
                                        <form method="POST" onsubmit="" name="frm">	
                                            <table  class="formstyle">     
                                                <tr id="table_row_odd">
                                                    <td style="width: 10%">ক্রম</td>
                                                    <td> চেক নাম্বার</td>
                                                    <td> সময়</td>
                                                    <td style="width: 25%">এমাউন্ট</td>
                                                </tr> 
                                                <tr>
                                                    <td>১</td>
                                                    <td>ac-12-4302-121</td>
                                                    <td> ১১.০০</td>
                                                    <td> ১৩৪৫</td>
                                                </tr>
                                                <tr>
                                                    <td>২</td>
                                                    <td>ac-12-4302-121</td>
                                                    <td>১১৩০</td>
                                                    <td>১২.০০</td>
                                                </tr>
                                                <tr>
                                                    <td>৩</td>
                                                    <td>ac-12-4302-121</td>
                                                    <td>১.০০</td>
                                                    <td>২০০০</td>
                                                </tr>
                                                <tr>
                                                    <td>৪</td>
                                                    <td>ac-12-4302-121</td>
                                                    <td>৩.৩০</td>
                                                    <td>৬০০০</td> 
                                                </tr>
                                                 <tr>
                                                <td colspan="4" style="text-align: center"><input type="submit" class="btn" name="submit" value="প্রিন্ট"></td>
                                                </tr>
                                            </table>
                                    </div>
                                    <h3>ইন বাই প্রোডাক্ট সেলিং </h3>
                                    <div>
                                        <table  class="formstyle">     
                                            <tr id="table_row_odd">
                                                <td style="width: 10%">ক্রম</td>
                                                <td style="width: 25%">প্রোডাক্ট সেল </td>
                                                <td style="width: 25%">তারিখ</td>
                                            </tr>
                                            <tr>
                                                <td>১</td>
                                                <td>CH-0001-2901</td>
                                                <td>২০/০৫/১৩</td>
                                            </tr>
                                            <tr>
                                                <td>২</td>
                                                <td>CH-0001-2901</td>
                                                <td>২৫/০৫/১৩</td>
                                            </tr>
                                            <tr>
                                                <td>৩</td>
                                                <td>CH-0001-2901</td>
                                                <td>২৭/০৫/১৩</td>
                                            </tr>
                                            <tr>
                                                <td>৪</td>
                                                <td>CH-0001-2901</td>
                                                <td>৩০/০৫/১৩</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: right" width="30%">টোটাল এমাউন্টঃ </td>
                                                <td><input class="box" type="text" name="total_amount"/></td>
                                            </tr> 
                                             <tr>
                                                <td colspan="4" style="text-align: center"><input type="submit" class="btn" name="submit" value="প্রিন্ট"></td>
                                                </tr>
                                        </table>
                                    </div>
                                    <h3>টোটাল এমাউন্ট  </h3>
                                    <div>	
                                        <table  class="formstyle">                         
                                            <tr id="table_row_odd">
                                                <td style="width: 10%">ক্রম</td>
                                                <td >এক্সট্রাইন উইথ লিংকঃ</td>
                                                <td > কামিং এমাউন্ট ফ্রম একাউন্টঃ</td>
                                                <td style="width: 25%"> ইন বাই প্রোডাক্ট সেলিংঃ</td>  
                                            </tr>
                                            <tr>
                                                <td>১</td>
                                                <td> ১৪০০</td>
                                                <td>১২০০</td>
                                                <td>২০০০</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:left"width="40%"><b> টোটাল এমাউন্টঃ  </b> </td>
                                                <td> ৪৬০০</td>
                                            </tr>
                                        </table>                      
                                        </table>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                       
                                
                            <?php
                            include 'includes/footer.php';
                            ?>
