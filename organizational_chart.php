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
        <div style="padding-left: 110px;"><a href="index.php?apps=REPORT"><b>ফিরে যান</b></a></div> 
        <div>         
            <table  class="formstyle">          
                <tr><th colspan="11" style="text-align: center;">প্রাতিষ্ঠানিক চার্ট</th></tr>
                <tr> 
                     <tr>                      
                        <td  colspan ="2">প্রোডাক্ট ক্যাটাগরি  : <select style="width: 132px;" class="box" name="transfer_to">
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
                    <td  colspan ="2">প্রোডাক্টের নাম  : <select style="width: 112px;" class="box" name="transfer_to" >
                                <option value="">চাউল</option>
                                <option value="">আটা</option>
                            </select>                            
                        </td>        
                <td colspan ="2"><b>সার্চ/খুঁজুন : </b><input   style="width: 132px;" class="box" type="text" id="search_box_filter"></td>
                </tr>
                <tr align="left" id="table_row_odd">
                    <td style="width: 52px;"> &nbsp;ক্রম</td>
                    <td >ব্র্যান্ড</td>
                    <td >পরিমাণ</td>
                    <td>একক</td>
                    <td>সাইজ</td>
                    <td>চলতি বাইং প্রাইজ</td>
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