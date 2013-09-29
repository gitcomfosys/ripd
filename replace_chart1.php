<?php

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
        <div style="padding-left: 110px;"><a href="index.php?apps=CA"><b>ফিরে যান</b></a></div> 
        <div>         
            <table  class="formstyle">          
                <tr><th colspan="11" style="text-align: center;">রিপ্লেস চার্ট</th></tr>  
                <tr>                          
                    <td colspan ="6"><b>সার্চ/খুঁজুন : </b><input   class="box" type="text" id="search_box_filter"></td>
                </tr>
                <tr>                      
                    <td colspan ="7"><b>শুরুর তারিখ : </b><input class="box" type="text" name="date_from" id="date_from" placeholder="Date From"  style="">&nbsp;&nbsp;
                        <b>শেষের তারিখ : </b> <input class="box" type="text" name="date_to" id="date_to" placeholder="Date To"  onclick="">
                        <input type="hidden" id="method" value="infoProgramFromThana()">
                        <input type="submit" value="সাবমিট">
                    </td>
                </tr>
                <tr align="left" id="table_row_odd">
                    <td > &nbsp;ক্রম</td>
                    <td style="width: 92px;">প্রোডাক্ট ক্যাটাগরি</td>
                    <td style="width: 92px;">প্রোডাক্টের নাম</td>
                    <td>রিপ্লেসকৃত প্রোডাক্ট ক্যাটাগরি</td>
                    <td>রিপ্লেসকৃত প্রোডাক্টের নাম</td>
                    <td>তারিখ</td>
                    <td>সময়</td>
                </tr> 
                <tr>
                    <td> ০১</td>

                    <td>ভোগ্যপণ্য</td>
                    <td>চাউল</td>
                    <td>ভোগ্যপণ্য</td>
                    <td>আটা</td>
                    <td>১৪-০৪-১৩</td>
                    <td>১২:০০ পি.এম</td>
                </tr>
                <tr>
                    <td> ০২</td>
                    <td>কসমেটিকস</td>
                    <td> কাজল</td>
                    <td>কসমেটিকস</td>
                    <td> আইলেনার</td>
                    <td>২৪-০৪-১৩</td>
                    <td>১২:০০ এ.এম</td>
                </tr>
            </table>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>