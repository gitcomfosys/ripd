<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include_once 'includes/function.php';
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
        <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div> 

        <div>
            <table  class="formstyle">
                <tr><th colspan="6" style="text-align: center;">ই-কমার্স</th></tr>
                <tr>
                    <td>
                        <div>                           
                            <div id="accordion" style="width: 100%;">
                                <h3>ই-কমার্স একাউন্ট</h3>
                                <div>	
                                    <table  class="formstyle"> 
                                        <tr align="left" id="table_row_odd">        
                                            <td><a href="coming_order_ecom.php">কামিং অর্ডার</a></td>                        
                                            <td><a href="order_statement_ecom.php">অর্ডার স্টেটমেন্ট</a></td>                                                                    
                                            <td><a href="delivery_statement_ecom.php">ডেলেভারী স্টেটমেন্ট</a></td>                        
                                            <td><a href="selling_statement_ecom.php">সেলিং স্টেটমেন্ট</a></td>  
                                        </tr> 
                                    </table>
                                </div>
                                <h3>রিপড একাউন্ট</h3>
                                <div>	
                                    <table  class="formstyle"> 
                                        <tr align="left" id="table_row_odd">        
                                            <td><a href="coming_order_ripd.php">কামিং অর্ডার</a></td>                        
                                            <td><a href="order_statement_ripd.php">অর্ডার স্টেটমেন্ট</a></td>                                                                    
                                            <td><a href="delivery_statement_ripd.php">ডেলেভারী স্টেটমেন্ট</a></td>                        
                                            <td><a href="selling_statement_ripd.php">সেলিং স্টেটমেন্ট</a></td>  
                                        </tr> 
                                    </table>
                                </div>
                            </div>
                        </div>   
                    </td>
                </tr>
            </table>
        </div>   
    </div>
</div>
<?php
include 'includes/footer.php';
?>