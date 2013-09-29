
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
                    <tr><th style="text-align: center;">আউট এমাউন্ট</th></tr>
                    <tr><td>
                            <div id="accordion" style="width: 100%;">
                                <h3> ফর এক্সট্রা এক্সপেন্ডিচার</h3>
                                <div>
                                    <form method="POST" onsubmit="" name="frm">	
                                        <table  class="formstyle">                                         
                                            <tr>
                                                <td style="text-align: right">এক্সট্রা এক্সপেন্ডিচার এমাউন্টঃ </td>
                                                <td><input class="box" type="text" name="enter_amount"/></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: right"> সাবজ়েক্টঃ </td>
                                                <td style="padding-left: 0px;"><textarea  name="needed_amount"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="text-align: center"><input type="submit" class="btn" name="submit" value="সেভ"></td>
                                                </tr>
                                        </table>
                                </div>
                                <h3>টোটাল এক্সট্রা এক্সপেন্ডিচার </h3>
                                <div>	
                                    <form method="POST" onsubmit="" name="frm">	
                                        <table  class="formstyle">     
                                            <tr id="table_row_odd">
                                                <td style="width: 10%">ক্রম</td>
                                                <td style="width: 25%">এমাউন্ট</td>
                                                <td> টোটাল  এক্সট্রা এক্সপেন্ডিচার</td>
                                                <td> সময়</td>
                                            </tr> 
                                            <tr>
                                                <td>১</td>
                                                <td>১৩৪৫</td>
                                                <td> ২০০০</td>
                                                <td>  ১১.০০</td>
                                            </tr>
                                            <tr>
                                                <td>২</td>
                                                <td>১৫০০</td>
                                                <td>১৪০০</td>
                                                <td>১২.০০</td>
                                            </tr>
                                            <tr>
                                                <td>৩</td>
                                                <td>২০০০</td>
                                                <td>৩০০০</td>
                                                <td>১.০০</td>
                                            </tr>
                                            <tr>
                                                <td>৪</td>
                                                <td>৬০০০</td>
                                                <td>৪০০০</td>
                                                <td>৩.৩০</td> 
                                            </tr>
                                             <tr>
                                                <td colspan="4" style="text-align: center"><input type="submit" class="btn" name="submit" value="প্রিন্ট"></td>
                                                </tr>
                                        </table>
                                </div>
                                <h3> ইন এমাউন্ট টু একাউন্ট</h3>
                                <div>
                                    <table  class="formstyle">     
                                        <tr id="table_row_odd">
                                            <td style="width: 10%">ক্রম</td>
                                            <td style="width: 25%">এমাউন্ট ইন  </td>
                                            <td style="width: 25%">তারিখ</td>
                                        </tr>
                                        <tr>
                                            <td>১</td>
                                            <td>১৪০০</td>
                                            <td>২০/০৫/১৩</td>
                                        </tr>
                                        <tr>
                                            <td>২</td>
                                            <td>১৩৯৮</td>
                                            <td>২৫/০৫/১৩</td>
                                        </tr>
                                        <tr>
                                            <td>৩</td>
                                            <td>৪০০০</td>
                                            <td>২৭/০৫/১৩</td>
                                        </tr>
                                        <tr>
                                            <td>৪</td>
                                            <td>১২০০</td>
                                            <td>৩০/০৫/১৩</td>
                                        </tr>
                                         <tr>
                                                <td colspan="4" style="text-align: center"><input type="submit" class="btn" name="submit" value="প্রিন্ট"></td>
                                                </tr>
                                    </table>
                                </div>
                                <h3>পারচেইজ় ফ্রম আদার্স </h3>
                                <div>
                                    <form method="POST" onsubmit="" name="frm">	
                                        <table  class="formstyle">                                         
                                            <tr>
                                                <td style="text-align: right">  সেলস স্টোর মূল্যঃ</td>
                                                <td><input class="box" type="text" name="enter_amount"/></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: right"> বাইরের ক্রয় মূল্যঃ</td>
                                                <td><input class="box" type="text" name="enter_amount"/></td>
                                            </tr>
                                        </table>
                                </div>
                                <h3> ইন প্রোডাক্ট</h3>
                                <div>
                                    <table  class="formstyle">     
                                        <tr id="table_row_odd">
                                            <td style="width: 10%">ক্রম</td>
                                            <td style="width: 25%"> ক্রয় মূল্য </td>
                                            <td style="width: 25%">তারিখ</td>
                                        </tr>
                                        <tr>
                                            <td>১</td>
                                            <td>১৪০০</td>
                                            <td>২০/০৫/১৩</td>
                                        </tr>
                                        <tr>
                                            <td>২</td>
                                            <td>১৩৯৮</td>
                                            <td>২৫/০৫/১৩</td>
                                        </tr>
                                        <tr>
                                            <td>৩</td>
                                            <td>৪০০০</td>
                                            <td>২৭/০৫/১৩</td>
                                        </tr>
                                        <tr>
                                            <td>৪</td>
                                            <td>১২০০</td>
                                            <td>৩০/০৫/১৩</td>
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
                                            <td >ফর এক্সট্রা এক্সপেন্ডিচার</td>
                                            <td > টোটাল এক্সট্রা এক্সপেন্ডিচার </td>
                                            <td > ইন এমাউন্ট টু একাউন্ট </td>
                                            <td >পারচেইজ় ফ্রম আদার্স  </td>
                                            <td style="width: 25%"> ইন প্রোডাক্ট</td>  
                                        </tr>
                                        <tr>
                                            <td>১</td>
                                            <td> ১৪০০</td>
                                            <td>১২০০</td>
                                            <td>২০০০</td>
                                            <td>১০০০</td>
                                            <td>২০০০</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:left"width="40%"><b> টোটাল এমাউন্টঃ  </b> </td>
                                            <td> ৭৬০০</td>
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
