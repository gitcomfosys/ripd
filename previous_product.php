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
        <div style="padding-left: 110px;"><a href="index.php?apps=PROD"><b>ফিরে যান</b></a></div> 
        <div>         
            <table  class="formstyle">          
                <tr><th colspan="10" style="text-align: center;">প্রিভিয়াস প্রোডাক্ট</th></tr>
                <tr> 
                     <tr>                      
                        <td  colspan ="4">প্রোডাক্ট ক্যাটাগরি  : <select class="box5" name="transfer_to">
                                <option value="">ভোগ্যপণ্য</option>
                                <option value="">কসমেটিকস</option>
                                <option value="">পোষাক</option>
                                <option value="">ইলেকট্রিক</option>
                                <option value="">প্লাস্টিক</option>
                                <option value="">কুকারিজ</option>
                                <option value="">ট্রাভেল</option>
                                <option value="">বেভারেজ</option>
                                <option value="">মটর</option>
                                <option value="">চিকিৎসা</option>
                                <option value="">আবাসন</option>
                                <option value="">মুদি বাজার</option>
                                <option value="">বাচ্চদের জন্য</option>
                                <option value="">অন্যান্য</option>
                            </select>  
                        </td>      
                         <td  colspan ="6">প্রোডাক্টের নাম  : <select class="box5" name="transfer_to" >
                                <option value="">চাউল</option>
                                <option value="">আটা</option>
                            </select>     
                             &nbsp; &nbsp;  সার্চ/খুঁজুন : <input   class="box4" type="text" id="search_box_filter">
                        </td>                     
                </tr>
                <tr>
                    <td >ব্র্যান্ড  </td> <td colspan="4">&nbsp; &nbsp;&nbsp; : <select class="box5" name="fund_name" >
                                <option value=""> প্রাণ </option>
                            </select>    
                        </td>
                    </tr>
                    <tr>
                        <td>সাইজ</td>
                        <td colspan="4">&nbsp; &nbsp;&nbsp; : <select class="box5" name="power_store" >
                                <option value="">ছোট</option>
                                <option value="">মিডিয়াম</option>
                                <option value="">বড়</option>                            
                            </select>
                        </td>  
                    </tr>
                    <tr>
                        <td>একক</td>
                        <td colspan="4">&nbsp; &nbsp;&nbsp; :  <select class="box5" name="power_store" >
                                <option value="">লিটার</option>
                                <option value="">গজ</option>
                                <option value="">কেজি</option>                            
                            </select>                           
                        </td>  
                    </tr>
                                  <tr align="left" id="table_row_odd">
                    <td style="width: 52px;"> &nbsp;ক্রম</td>
                    <td >এক্সট্রা প্রফিট</td>
                    <td >প্রফিট</td>
                    <td>মূল্য</td>
                    <td>সেল শুরু হওয়ার তারিখ</td>
                    <td>সেল বন্ধ হওয়ার তারিখ</td>
                    <td>মোট সেলের পরিমাণ</td>
                    <td>মোট এক্সট্রা প্রফিট</td>
                    <td>মোট প্রফিট</td>
                    <td>সর্বমোট প্রফিট</td>
                </tr> 
                <tr>
                    <td> ০১</td>
                    <td>প্রাণ</td>
                    <td>১০টি</td>
                     <td>লিটার</td>
                    <td>বড়</td>
                    <td>৫০/=</td>
                </tr>
                <tr>
                    <td> ০২</td>
                    <td>ক্যাটস আই</td>
                    <td>১০০টি</td>
                     <td>টি</td>
                    <td>বড়</td>
                    <td>১৫৫০/=</td>
                </tr>
            </table>
        </div>

    </div>
    <?php

    include 'includes/footer.php';
    ?>