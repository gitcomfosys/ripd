<?php

include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<?php
$backParent = $_GET['parent'];
?>
<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=<?php echo $backParent;?>"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">চেক</a></li>
                <li class="current"><a href="#02">ট্রান্সফার আউট</a></li>
                <li class="current"><a href="#03">ট্রান্সফার ইন</a></li>
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">চেক তালিকা</th></tr>
                <tr>
                    <td colspan="2" ><b>শুরুর তারিখঃ </b><input type="text" name="date_from" id="date_from" placeholder="Date From"  style="">&nbsp;&nbsp;</td>
                    <td colspan="2" ><b>শেষের তারিখঃ </b><input type="text" name="date_to" id="date_to" placeholder="Date To"  onclick="infoProgramFromThana()"></td>
                    <td colspan="1" style="vertical-align: bottom"><input type="submit" value="সাবমিট"></td>
                </tr>
                <tr align="left" id="table_row_odd">
                    <td>তারিখ</td>
                    <td>চেক নাম্বার</td>
                    <td>একাউন্ট নাম্বার</td>
                    <td>এরিয়া নাম</td>                            
                    <td>মোট পরিমান</td>
                    <td>আউটের ধরন</td>
                    <td></td>
                </tr> 
                <tr>
                    <td>12-12-12</td>
                    <td>CH-0001-2901</td>
                    <td>ac-12-4302-121</td>
                    <td>এরিয়া ০১</td>                            
                    <td>10000 /=</td>
                    <td>লোন</td>
                    <td><a href="#">বিস্তারিত</a></td>
                </tr>
                <tr align="left" id="table_row_odd" >                                                 
                    <td colspan="4" style="text-align: right;">টোটাল:</td>
                    <td colspan="3" style="text-align: left;">10000 /=</td>
                </tr>
            </table>
        </div>

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="8" style="text-align: center;">ট্রান্সফার আউটের তালিকা</th></tr>
                <tr> 
                    <td colspan="2"><b>ট্রান্সফার ধরনঃ</b>
                        <select class="box2" name="transfer_type" style="width: 150px;">
                            <option value="">ধরন ০১</option>
                            <option value="">ধরন ০২</option>
                            <option value="">ধরন ০৩</option>
                        </select>    
                    </td>
                    <td colspan="2" ><b>শুরুর তারিখঃ</b><input type="text" name="date_from" id="date_from" placeholder="Date From"  style="">&nbsp;&nbsp;</td>
                    <td colspan="2" ><b>শেষের তারিখঃ</b> <input type="text" name="date_to" id="date_to" placeholder="Date To"  onclick="infoProgramFromThana()"></td>
                    <td colspan="2" style="vertical-align: bottom"><input type="submit" value="সাবমিট"></td>
                </tr>
                <tr align="left" id="table_row_odd">
                    <td>তারিখ</td>
                    <td>ট্রানফার একাউন্ট নাম্বার</td>
                    <td>ট্রানফার টু</td>
                    <td>ফান্ড নাম /<br />একাউন্ট নাম্বার</td>                           
                    <td>পার্সেন্টেজ (%)</td>
                    <td>এমাউন্ট</td>
                    <td>ট্রানফার বাবদ</td>
                    <td>ট্রান্সফার ধরন</td>
                </tr> 
                <tr>
                    <td>12-02-13</td>
                    <td>AC-0001-2901</td>
                    <td>একাউন্ট</td>
                    <td>ফান্ড ০১</td>  
                    <td>১০%</td>
                    <td>250000 /=</td>
                    <td>নাই</td>
                    <td>লোন</td>
                <tr align="left" id="table_row_odd" >                                                 
                    <td colspan="5" style="text-align: right;">টোটাল:</td>
                    <td colspan="3" style="text-align: left;">250000 /=</td>
                </tr>
            </table>
        </div>    

        <div>
            <h2><a name="03" id="03"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="8" style="text-align: center;">ট্রান্সফার ইনের তালিকা</th></tr>
                <tr> 
                    <td colspan="2"><b>ট্রান্সফার ধরনঃ</b>
                        <select class="box2" name="transfer_type" style="width: 150px;">
                            <option value="">ধরন ০১</option>
                            <option value="">ধরন ০২</option>
                            <option value="">ধরন ০৩</option>
                        </select>    
                    </td>
                    <td colspan="2" ><b>শুরুর তারিখঃ</b><input type="text" name="date_from" id="date_from" placeholder="Date From"  style="">&nbsp;&nbsp;</td>
                    <td colspan="2" ><b>শেষের তারিখঃ</b> <input type="text" name="date_to" id="date_to" placeholder="Date To"  onclick="infoProgramFromThana()"></td>
                    <td colspan="2" style="vertical-align: bottom"><input type="submit" value="সাবমিট"></td>
                </tr>
                <tr align="left" id="table_row_odd">
                    <td>তারিখ</td>
                    <td>ট্রানফার একাউন্ট নাম্বার</td>
                    <td>ট্রানফার টু</td>
                    <td>ফান্ড নাম /<br />একাউন্ট নাম্বার</td>                           
                    <td>পার্সেন্টেজ (%)</td>
                    <td>এমাউন্ট</td>
                    <td>ট্রানফার বাবদ</td>
                    <td>ট্রান্সফার ধরন</td>
                </tr> 
                <tr>
                    <td>02-82-11</td>
                    <td>AC-03201-2901</td>
                    <td>একাউন্ট</td>
                    <td>ফান্ড ০১</td>  
                    <td>28%</td>
                    <td>38290000 /=</td>
                    <td>নাই</td>
                    <td>অতিরিক্ত</td>
                <tr align="left" id="table_row_odd" >                                                 
                    <td colspan="5" style="text-align: right;">টোটাল:</td>
                    <td colspan="3" style="text-align: left;">38290000 /=</td>
                </tr>
            </table>
        </div>

    </div>
    <?php

    include 'includes/footer.php';
    ?>