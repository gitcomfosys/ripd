<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<div class="column6">
    <div class="main_text_box">	
        <div style="padding-left: 110px;"><a href="index.php?apps=EA"><b>ফিরে যান</b></a></div>
        <div>  
            <form method="POST" onsubmit="">	
                <table  class="formstyle">      
                    <?php
                    $cust_name = 'মোঃ মোখলেছুর রহমান'; //sql query
                    echo "<table  class='formstyle'>";
                    echo "<tr >
                                <th colspan='4' style='text-align: left'>
                                <div style='width: 80%; float: left; padding-top: 18px;'>                                  
                                     <h1>একাউন্টধারীর নাম : $cust_name</h1>
                                    <h2>এওয়ার্ড : ১০০০০ টাকা</h2>
                                </div>
                             </th>
                            </tr>";
                    echo "</table>";
                    ?>
                    </div>
                </table>
            </form>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>