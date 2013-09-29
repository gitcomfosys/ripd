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
                <li class="current"><a href="#01">রানিং ডকুমেন্টস</a></li>
                <li class="current"><a href="#02">প্রিভিয়াস ডকুমেন্টস</a></li>
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <table  class="formstyle">          
                    <tr><th colspan="7" style="text-align: center;">রানিং ডকুমেন্টস</th></tr>
                    <tr align="left" id="table_row_odd">
                        <td>অফিস নাম</td>
                        <td>চেক নাম্বার</td>
                        <td>এমাউন্ট আউট পয়েন্ট</td>
                        <td>এমাউন্ট পেইডেড</td>
                        <td>পেইডেড তারিখ</td>
                        <td>পেইডেড সময়</td>
                        <td>স্ক্যান কপি</td>
                    </tr>                                      
                </table>
        </div>

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <table  class="formstyle">          
                    <tr><th colspan="8" style="text-align: center;">প্রিভিয়াস ডকুমেন্টস তালিকা</th></tr>
                    
                    <tr align="left" id="table_row_odd">
                        <td>তারিখ</td>
                        <td>চেক নাম্বার</td>
                        <td>ডকুমেন্টস</td>
                    </tr> 
                    <tr>
                        <td>22-02-13</td>
                        <td>AC-0001-2901</td>
                        <td>একাউন্ট</td>
                </table>
        </div>    
    </div>
   <?php 
    include 'includes/footer.php';
   ?>