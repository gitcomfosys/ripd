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
                <tr><th colspan="6" style="text-align: center;">লেনাদেনা চার্ট</th></tr>
                <tr>
                    <td>
                        <div>                           
                            <div id="accordion" style="width: 100%;">
                                <h></h>
                                <div>	
                                    <table  class="formstyle"> 
                                        <tr align="left" id="table_row_odd"> 
                                            <td><a href="in_amount_local_office.php">ইন এমাউন্ট</a></td>
                                            <td><a href="out_in_amount_local_office.php">আউট এমাউন্ট</a></td> 
                                            <td><a href="send_amount_local_office.php">সেন্ড এমাউন্ট</a></td>
                                            <td><a href="transefer_amount_local_office.php">ট্রান্সফার এমাউন্ট</a></td> 
                                                 
                                        </tr> 
                                    </table>
                                    <table  class="formstyle"> 
                                        <tr align="left" id="table_row_odd">  
                                            <td><a href="in_send_amount_local_office.php">ইন দেন সেন্ড</a></td> 
                                            <td><a href="in_transfer_amount_local_office.php">ইন দেন ট্রান্সফার</a></td>                                           
                                            <td><a href="balanced_amount_local_office.php">ব্যালেন্সড এমাউন্ট</a></td>  
                                            <td><a href="change_password.php">চেইঞ্জ পাসওয়ার্ড</a></td>      
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