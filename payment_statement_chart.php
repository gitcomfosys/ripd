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
            <table  class="formstyle" style="width: 115%; margin: 5px 100px 25px 70px;">   
                                <tr><th colspan="10" style="text-align: center;">পেমেন্ট স্টেটমেন্ট চার্ট</th></tr>
                                <tr> 
                                    <td colspan="8" style="text-align: center">পেআউট টাইপ : 
                                        <select class="box2" name="sales_store" style="height: 21px;">
                                            <option value="">চেক</option>
                                            <option value="">ট্রান্সফার</option>
                                            <option value="">সেন্ড</option>
                                        </select>    
                                    </td>                    
                                </tr>
                                <tr align="left" id="table_row_odd">
                                    <td>তারিখ</td>
                                    <td>আউট টাইপ</td>
                                    <td>ব্যালেন্সড এমাউন্ট</td>
                                    <td>আউট এমাউন্ট</td>
                                    <td>ট্রাস্ট এমাউন্ট</td>
                                    <td>আর্ন এমাউন্ট</td>  
                                    <td>ট্যাক্স</td>
                                    <td>ট্রাস্ট এমাউন্ট</td>
                                    <td>ট্রাস্ট এমাউন্ট</td>
                                </tr> 
                                <tr>
                                    <td>০১-০২-২০১৩</td>
                                    <td>অফিস ০৬</td>
                                    <td>২৭৮১০</td>
                                    <td>২০২৩৯</td>  
                                    <td>অফিস ০৬</td>
                                    <td>২৭৮১০</td>
                                    <td>২০২৩৯</td>
                                    <td>২৭৮১০</td>
                                    <td>২০২৩৯</td>
                                </tr>
                                <tr>                                   
                                    <td></td>
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