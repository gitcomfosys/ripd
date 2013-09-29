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
            <form method="POST">	
                <table  class="formstyle" style =" width:78%">          
                    <tr>
                        <th colspan="8" >পারচেইজ স্টেটমেন্ট</th>                        
                    </tr>          
                    <tr>
                        <td colspan="2">খুঁজুন:  <input type="text" class="box2"id="search_filter" name="search" /></td>
                    </tr>
                    <tr id = "table_row_odd">
                        <td > বাইং ডেট</td>
                        <td > রিসীভ কোড</td>
                    </tr>
                    <tr>
                        <td>১৬-০৫-১৩</td>
                        <td> ১২৪৩৫৬</td>
                    </tr>
                </table>
         </form>
        </div>
<?php include_once 'includes/footer.php'; ?>