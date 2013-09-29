<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>

<style type="text/css">
    @import "css/bush.css";
    .formstyle td{
        padding: 0px;
        text-align: center;
    }
</style>

<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=REPORT"><b>ফিরে যান</b></a></div> 
        <div>         
            <form>
                <table  class="formstyle">   
                    <tr><th colspan="9" style="text-align: center;">এটেন্ডেন্স স্টেটমেন্ট চার্ট<br /> (মোহাম্মদ ইব্রাহীম)</th></tr> 
                    <tr>
                        <td colspan="9" style="text-align: center">
                            বছরঃ <select name="year" class="selectOption" style="width: 80px;">
                                <option>২০১৩</option>
                                <option>২০১২</option>
                            </select> &nbsp মাসঃ
                            <select name="month" class="selectOption" style="width: 80px;">
                                <option>জানুয়ারী</option>
                                <option>ফেব্রুয়ারী</option>
                                <option>মার্চ</option>
                                <option>এপ্রিল</option>
                                <option selected>মে</option>
                                <option>জুন</option>
                                <option>জুলাই</option>
                                <option>আগস্ট</option>
                                <option>সেপ্টেম্বর</option>
                                <option>অক্টোবর</option>
                                <option>নভেম্বর</option>
                                <option>ডিসেম্বর</option>
                            </select>
                        </td>
                    </tr>
                    <tr  id="table_row_odd">
                        <td>তারিখ</td>
                        <td>ইন টাইম</td>
                        <td>আউট টাইম</td>
                        <td>ওয়ার্ক টাইম</td>
                        <td>গ্যাপ টাইম</td>
                        <td>এক্সট্রা টাইম</td>
                        <td>স্টে টাইম</td>
                        <td>স্টে গ্যাপ টাইম</td>
                        <td>স্টে এক্সট্রা টাইম</td>
                    </tr> 
                    <tr>
                        <td>০২-০৩-১৩</td>
                        <td>৮.৪৫ এ. এম.</td>
                        <td>৫.১৫ পি. এম.</td>
                        <td>৪</td>
                        <td>১</td>
                        <td>১</td>
                        <td>২</td>
                        <td>১</td>
                        <td>১</td>
                    </tr>                                    
                    <tr>
                        <td>০২-০৩-১৩</td>
                        <td>৮.৪৫ এ. এম.</td>
                        <td>৫.১৫ পি. এম.</td>
                        <td>৪</td>
                        <td>১</td>
                        <td>১</td>
                        <td>২</td>
                        <td>১</td>
                        <td>১</td>
                    </tr>                                    
                    <tr>
                        <td>০২-০৩-১৩</td>
                        <td>৮.৪৫ এ. এম.</td>
                        <td>৫.১৫ পি. এম.</td>
                        <td>৪</td>
                        <td>১</td>
                        <td>১</td>
                        <td>২</td>
                        <td>১</td>
                        <td>১</td>
                    </tr>                                    
                </table>
            </form>
        </div>
    </div>
</div>
<?php
include 'includes/footer.php';
?>