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
        <div style="padding-left: 110px;"><a href="lenadena_chart.php"><b>ফিরে যান</b></a></div> 

        <div>
            <table  class="formstyle">
                <tr><th colspan="6" style="text-align: center;">আউট এমাউন্ট</th></tr>
                <tr>
                    <td>
                        <div>                           
                            <div id="accordion" style="width: 100%;">
                                <h></h>
                                <div>	
                                    <table  class="formstyle"> 
                                        <tr align="left" id="table_row_odd">      
                                            <td><a href="out_amount_check.php">আউট এমাউন্ট উইথ চেক</a></td> 
                                            <td><a href="out_amount_pin.php">আউট এমাউন্ট উইথ পিন</a></td>      
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