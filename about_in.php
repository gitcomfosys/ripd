<?php
require_once 'includes/session.inc';
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/header.php';
include_once 'includes/function.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<script type="text/javascript" src="javascripts/area.js"></script>
<script type="text/javascript" src="javascripts/external/mootools.js"></script>
<script type="text/javascript" src="javascripts/dg-filter.js"></script>

<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=VA"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">ইন ডেসক্রিপশন</a></li>
                <li class="current"><a href="#02">ইন এক্সপেন্ডিচার</a></li>  
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="6" style="text-align: center;">ইন ডেসক্রিপশন</th></tr>
                <tr align="left" id="table_row_odd">
                    <td>ক্রম</td>
                    <td>তারিখ</td>
                    <td>সময়</td>
                    <td>ইনের পরিমাণ</td>
                    <td>পার্সনাল</td>
                    <td>ট্রান্সফার</td>            
                </tr> 
                <tr>
                    <td>১</td>
                    <td>০১-০২-২০১৩</td>
                    <td>২৭৮১০</td>
                    <td>২০২৩৯</td>  
                    <td>৫৫২</td>
                    <td>২৭৮১০</td>
                </tr>
                <tr>                                   
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>মোট এমাউন্ট ইন : ২০২৩৯</td>
                </tr>
            </table>
        </div>
        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="7" style="text-align: center;">ইন এক্সপেন্ডিচার</th></tr>
                    <tr align="left" id="table_row_odd">
                    <td>ক্রম</td>
                    <td>তারিখ</td>
                    <td>সময়</td>
                    <td>এমাউন্ট</td>
                    <td>চেক</td>
                    <td>ট্রান্সফার</td>      
                    <td>সেন্ট</td>
                </tr> 
                <tr>
                    <td>২</td>
                    <td>০১-০২-২০১৩</td>
                    <td>২৭৮১০</td>
                    <td>২০২৩৯</td>  
                    <td>৫৫২</td>
                    <td>২৭৮১০</td>
                    <td>৭৮১০</td>
                </tr>
                <tr>                                   
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>মোট এমাউন্ট এক্সপেন্ড : ২০২৩৯</td>
                </tr>   
                </table>
                </fieldset>
            </form>
        </div>    
    </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>