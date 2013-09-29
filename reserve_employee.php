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
        <div style="padding-left: 110px;"><a href="index.php?apps=HRE"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">ইন চার্জ</a></li>
                <li class="current"><a href="#02">দায়িত্বহীন</a></li>
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">রিজার্ভ কর্মচারী - ইন চার্জ</th></tr>
                <tr> 
                    <td colspan="6" style="text-align: center;">গ্রেড:<select class="box2" name="transfer_type" style="width: 150px;">
                            <option value="">গ্রেড ০১</option>
                            <option value="">গ্রেড ০২</option>
                            <option value="">গ্রেড ০৩</option>
                        </select>    
                    </td>
                    <td>মোট কর্মচারী = 10 জন</td>
                </tr>
                <tr align="left" id="table_row_odd">
                    <td>ক্রম</td>
                    <td>নাম</td>
                    <td>মোবাইল নাম্বার</td>
                    <td>অফিস নাম</td>
                    <td>দায়িত্ব</td>                           
                    <td>রিজার্ভ সময়</td>
                    <td></td>
                </tr> 
                <tr>
                    <td>1</td>
                   <td>অমিত</td>
                    <td>০১৯৪৮৪৫১০৬০</td>
                    <td>অফিস ০১</td>
                    <td>ম্যানাজার</td>  
                    <td>১০ দিন</td>
                    <td><a href="#">পোস্টিং</a></td>
                </tr>
            </table>
        </div>    

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="5" style="text-align: center;">রিজার্ভ কর্মচারী - ইন চার্জ</th></tr>
                <tr> 
                    <td colspan="4" style="text-align: center;">গ্রেড:<select class="box2" name="transfer_type" style="width: 150px;">
                            <option value="">গ্রেড ০১</option>
                            <option value="">গ্রেড ০২</option>
                            <option value="">গ্রেড ০৩</option>
                        </select>    
                    </td>
                    <td>মোট কর্মচারী = 10 জন</td>
                </tr>
                <tr align="left" id="table_row_odd">
                    <td>ক্রম</td>
                    <td>নাম</td>
                    <td>মোবাইল নাম্বার</td>                
                    <td>নিয়োগ তারিখ</td>
                    <td></td>
                </tr> 
                <tr>
                    <td>1</td>
                   <td>কিশোর</td>
                    <td>০১৮৩০৩৫১০৬০</td>
                    <td>১২-১৩-২০১৩</td>
                    <td><a href="#">পোস্টিং</a></td>
                </tr>
            </table>
        </div>

    </div>
    <?php

    include 'includes/footer.php';
    ?>