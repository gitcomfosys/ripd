<?php

include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<style type="text/css">
    @import "css/iftee_statement.css";
</style>

<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=VA"><b>ফিরে যান</b></a></div> 
        <div>         
            <table  class="formstyle" style="width: 112%; margin: 5px 100px 5px 20px;">          
                <tr><th colspan="16" style="text-align: center;">রিপ্লেস চার্ট</th></tr>  
                <tr>                          
                    <td colspan ="6"><b>সার্চ/খুঁজুন : </b><input   class="box" type="text" id="search_box_filter"></td>
                </tr>
                <tr>                      
                    <td colspan ="10"><b>শুরুর তারিখ : </b><input class="box" type="text" name="date_from" id="date_from" placeholder="Date From"  style="">&nbsp;&nbsp;
                        <b>শেষের তারিখ : </b> <input class="box" type="text" name="date_to" id="date_to" placeholder="Date To"  onclick="">
                        <input type="hidden" id="method" value="infoProgramFromThana()">
                        <input type="submit" value="সাবমিট">
                    </td>
                </tr>
                <tr align="left" id="table_row_odd">
                    <td rowspan="2">তারিখ</td>
                    <td colspan="2" style="width: 92px; text-align: center;">পার্সোনাল সেলিং</td>
                    <td colspan="2" style="width: 92px;text-align: center;">রেফারার ১</td>
                    <td colspan="2" style="text-align: center;">রেফারার ২</td>
                    <td colspan="2" style="text-align: center;">রেফারার ৩</td>
                    <td colspan="2" style="text-align: center;">রেফারার ৪</td>
                    <td colspan="2" style="text-align: center;">রেফারার ৫</td>                    
                    <td colspan="2" style="text-align: center;">টোটাল এমাউন্ট</td>
                </tr> 
                <tr align="left" id="table_row_odd">
                    <td>পি.ভি.</td>
                    <td>টাকা</td>
                    <td>পি.ভি.</td>
                    <td>টাকা</td>
                    <td>পি.ভি.</td>
                    <td>টাকা</td>
                    <td>পি.ভি.</td>
                    <td>টাকা</td>
                    <td>পি.ভি.</td>
                    <td>টাকা</td>
                    <td>পি.ভি.</td>
                    <td>টাকা</td>
                    <td>পি.ভি.</td>
                    <td>টাকা</td>
                </tr> 
                <tr>
                    <td> ১৪-০৪-১৯৯১</td>
                    <td>৭৫০০</td>
                    <td>৮০০০০০</td>    
                    <td>৭৫০০</td>
                    <td>৬৪০০০</td> 
                    <td>৭৫০০</td>
                    <td>৭৮৬০০০</td> 
                    <td>৭৫০০</td>
                    <td>৯৫৫০০০</td>                       
                    <td>৭৫০০</td>
                    <td>৪৬৬২৬৬০</td> 
                    <td>৭৫০০</td>
                    <td>৫৬০০০০</td>                       
                    <td>৭৫০০</td>
                    <td>৮০০৯৮০</td>                              
                </tr>
                <tr>
                    <td> ২২-০৪-২০১৩</td>
                    <td>৭৫০০</td>
                    <td>৮০০০০০০</td>    
                    <td>৭৫০০</td>
                    <td>৮৪০০০</td> 
                    <td>৭৫০০</td>
                    <td>৭৮৬০০০</td> 
                    <td>৭৫০০</td>
                    <td>৬৯৫০০০</td>                       
                    <td>৭৫০০</td>
                    <td>২৬৬০</td> 
                    <td>৭৫০০</td>
                    <td>৫৬৮০০০০</td>                       
                    <td>৭৫০০</td>
                    <td>৮০০৯৮০</td>                            
                </tr>
            </table>
        </div>

    </div>
    <?php

    include 'includes/footer.php';
    ?>
