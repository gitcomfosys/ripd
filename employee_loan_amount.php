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
        <div style="padding-left: 110px;"><a href="index.php?apps=EA"><b>ফিরে যান</b></a></div>
        <div>           
            <table  class="formstyle" style="width: 115%; margin: 5px 100px 25px 70px;">   
                                <tr><th colspan="10" style="text-align: center;"> লোন এমাঊন্ট</th></tr>
                                <tr align="left" id="table_row_odd">
                                    <td> লোন এর  পরিমাণ</td>
                                    <td> লোন এর  কারণ</td>
                                    <td> লোন এর  কিস্তির পরিমাণ </td>
                                    <td> কিস্তি দেয়া হয়ছে  </td>
                                    <td> কিস্তি বাকী আছে  </td>
                                    <td>  লোন  দেয়ার তারিখ</td>  
                               
                                </tr> 
                                <tr>
                                    <td>   ১০০০০০ </td>
                                    <td>  হাঊজ লোন</td>
                                    <td> ২০ </td>
                                    <td>  ০১ </td>  
                                    <td>  ১৯ </td>
                                    <td> ২০- ০৫ - ২০১৩ </td>
                                   
                                </tr>
                                <tr>                                   
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
        </div>
    </div>
</div>
    <?php
    include 'includes/footer.php';
    ?>