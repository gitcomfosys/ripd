<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
?>
<style type="text/css">
    @import "css/iftee_statement.css";
</style>
<script type="text/javascript" src="javascripts/area.js"></script>
<script type="text/javascript" src="javascripts/external/mootools.js"></script>
<script type="text/javascript" src="javascripts/dg-filter.js"></script>

<div class="columnSld" style=" padding-left: 50px;">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=VA"><b>ফিরে যান</b></a></div>
        <div>           
            <table  class="formstyle">   
                                <tr><th colspan="10" style="text-align: center;">সিস্টেমিক আর্ন স্টেটমেন্ট</th></tr>
                                <tr align="left" id="table_row_odd">
                                    <td>ক্রম</td>
                                    <td>তারিখ</td>
                                    <td>এমাউন্ট</td>
                                    <td>মাধ্যম</td> 
                                    <td>ট্যাক্স</td>
                                    <td>চার্জ</td>
                                </tr> 
                                <tr>
                                    <td>০১</td>
                                    <td>০১-০২-২০১৩</td>                                   
                                    <td>২৭৮১০</td>  
                                    <td>সেন্ড</td>
                                    <td>২৭৫</td>
                                    <td>২০২৩৯</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>মোট এমাউন্ট : ২০২৩৯</td>
                                </tr>
                            </table>
        </div>
    </div>
</div>
    <?php
    include 'includes/footer.php';
    ?>