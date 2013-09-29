<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
//include 'includes/header.php';
error_reporting(0);
?>
<style type="text/css">
    @import "css/bush.css";
    @import "css/expand_collapse.css";
</style>
<script type="text/javascript" src="javascripts/expand_collapse01.js"></script>
<script type="text/javascript" src="javascripts/expand_collapse02_ui.js"></script>
<script>    
    $(function() {
        $( "#accordion" ).accordion();
    });
</script>
<?php
include 'includes/header.php';
?>
<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=ASS"><b>ফিরে যান</b></a></div>
        <div>
            <form method="POST" onsubmit="" name="frm">                
                <table  class="formstyle">          
                    <tr><th style="text-align: center;">ব্যালেন্সড এমাউন্ট </th></tr>
                    <tr><td>
                            <div id="accordion" style="width: 100%;">
                                <h3>ব্যালেন্সড টুডে </h3>
                                <div>	
                                    <form method="POST" onsubmit="" name="frm">	
                                        <table  class="formstyle">     
                                            <tr id="table_row_odd">
                                                <td style="width: 10%">ক্রম</td>
                                                <td>ইন ব্যালেন্সড </td>
                                                <td>আউট ব্যালেন্সড </td>
                                                <td style="width: 25%">তারিখ</td>
                                            </tr> 
                                            <tr>
                                                <td>১</td>
                                                <td> ১৩৪৫</td>
                                                <td> ২০০০</td>
                                                <td> ১৯/০৫/১৩</td>
                                            </tr>
                                            <tr>
                                                <td>২</td>
                                                <td>১৫০০</td>
                                                <td>১১৩০</td>
                                                <td>২০/০৫/১৩</td>
                                            </tr>
                                            <tr>
                                                <td>৩</td>
                                                <td>১৭০০</td>
                                                <td>১৫০০</td>
                                                <td>২২/০৫/১৩</td>
                                            </tr>
                                            <tr>
                                                <td>৪</td>
                                                <td>১৯০০</td>
                                                <td>৬০০০</td>
                                                <td>২৮/০৫/১৩</td> 
                                            </tr>
                                        </table>
                                </div>
                                <h3> ব্যালেন্সড ইস্টারডে</h3>
                                <div>	
                                    <form method="POST" onsubmit="" name="frm">	
                                        <table  class="formstyle">     
                                            <tr id="table_row_odd">
                                                <td style="width: 10%">ক্রম</td>
                                                <td> পূর্বের  ইন এমাউন্ট</td>
                                                <td>পূর্বের  আউট এমাউন্ট</td>
                                                <td style="width: 25%">তারিখ</td>
                                            </tr> 
                                            <tr>
                                                <td>১</td>
                                                <td>১৪০০</td>
                                                <td> ১২০০</td>
                                                <td> ২২/০৫/১৩</td>
                                            </tr>
                                            <tr>
                                                <td>২</td>
                                                <td>১৮০০</td>
                                                <td>২০০০</td>
                                                <td>২৫/০৫/১৩</td>
                                            </tr>
                                        </table>
                                </div>
                                <h3>বেসিক  ব্যালেন্সড</h3>
                                <div>	
                                    <table  class="formstyle">                         
                                        <tr id="table_row_odd">
                                            <td style="width: 10%">ক্রম</td>
                                            <td >পূর্বের ব্যালেন্সড</td>
                                            <td > রানিং ব্যালেন্সড</td>
                                        </tr>
                                        <tr>
                                            <td>১</td>
                                            <td> ১৪০০</td>
                                            <td>২০০০</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:left"width="40%"><b> টোটাল এমাউন্টঃ  </b> </td>
                                            <td> ৩৪০০</td>
                                        </tr>
                                         <tr>
                                            <td style="text-align:left"width="40%"><b> টোটাল এমাউন্টঃ  </b> </td>
                                            <td> ৬০০</td>
                                        </tr>
                                    </table>                      
                                    </table>
                                    </form>
                                </div>
                            </div>
                            </div>
                            <?php
                            include 'includes/footer.php';
                            ?>
