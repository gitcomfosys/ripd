<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<div style="font-size: 12px;">
        <form method="POST">
            <div style="padding-top: 10px;"> 
        <div style="padding-left: 110px;"><a href="ecommerce_customer.php"><b>ফিরে যান</b></a></div>   
        </div>
             <div>
        <table class="formstyle"  style=" width:65%; ">    
            <tr><th colspan="2" style="text-align: center;">এডভান্সড এমাউন্ট</th></tr>
             <tr>
        <td> বর্তমান এডভান্সড এমাউন্টঃ</td>
        <td>:    <input  class ="textfield" type="text" id="advance_amount" name="advance_amount" /></td>
        </tr>
        <tr>
        <td> এক্রট্রা  এমাউন্টঃ</td>
        <td>:    <input  class ="textfield" type="text" id="extra_amount" name="extra_amount" /></td>
        </tr>
        <tr>
        <td> টোটাল এমাউন্টঃ</td>
        <td>:    <input  class ="textfield" type="text" id="total_amount" name="total_amount" /></td>
        </tr>
        </table>
                 </div>
            <?php include_once 'includes/footer.php'; ?>