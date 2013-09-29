<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
//include 'includes/header.php';
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
            <div style="padding-left: 110px;"><a href="index.php?apps=REPORT"><b>ফিরে যান</b></a></div>
            <div>
                <h2><a name="01" id="01"></a></h2><br/>
                <form method="POST" onsubmit="" name="frm">                
                    <table  class="formstyle">          
                        <tr><th style="text-align: center;">কামিং ডাটা</th></tr>
                        <tr>
                            <td style="text-align: center; font-size: 12px;">রিপড ইউনিভার্সাল লিমিটেড <br />প্রতিষ্ঠান নাম : <b>সেলস স্টোর</b></td>
                        </tr>
                        <tr>
                            <td>
                                <div id="accordion">
                                    <h3>অপঠিত</h3>
                                    <div>
                                        <form method="POST" onsubmit="" name="frm">	
                                            <table  class="formstyle">                         
                                                <tr><th colspan="9" style="text-align: center;">অপঠিত কামিং ডাটা</th></tr>
                                                <tr>
                                                    <td colspan="9">
                                                        <table>
                                                            <tr align="left" id="table_row_odd">
                                                                <td style="width: 10%">ক্রম</td>
                                                                <td style="text-align: left">তথ্য</td>
                                                                <td style="width: 20%">তারিখ</td>
                                                            </tr>
                                                            <tr>
                                                                <td>০১</td>
                                                                <td style="text-align: left">ডাল</td>
                                                                <td>১২-০২-১২</td>
                                                            </tr> 
                                                            <tr>
                                                                <td>০২</td>
                                                                <td style="text-align: left">আটা</td>
                                                                <td>১২-০১-১৩</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>    
                                            </table>
                                    </div>
                                    <h3>পঠিত</h3>
                                    <div>	
                                            <table  class="formstyle">                         
                                                <tr><th colspan="9" style="text-align: center;">পঠিত কামিং ডাটা</th></tr>

                                                <tr>
                                                    <td colspan="9">
                                                        <table>
                                                            <tr align="left" id="table_row_odd">
                                                                 <td style="width: 10%;">ক্রম</td>
                                                                <td tyle="text-align: left">তথ্য</td>
                                                                <td style="width: 20%">তারিখ</td>
                                                            </tr>
                                                            <tr>
                                                                <td>০১</td>
                                                                <td style="text-align: left">ডাল</td>
                                                                <td>১২-০৮-১২</td>
                                                            </tr> 
                                                            <tr>
                                                                <td>০২</td>
                                                                <td style="text-align: left">আটা</td>
                                                                <td>১৩-০৯-১২</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>    
                                            </table>
                                    </div>
                                </div>
                        </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
   
<?php
include 'includes/footer.php';
?>
