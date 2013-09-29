<?php
error_reporting(0);
include_once 'includes/';
?>
<style type="text/css">
    @import "css/domtab.css";
</style>
<?php
include_once 'includes/columnLeft.php';
?>
<div class="columnSld">
    <form method="POST" onsubmit="">	
        <table class="formstyle"> 
            <tr><th style="text-align: center" colspan="2"><h1>থানা, জেলা, বিভাগ,পোস্ট অফিস, গ্রাম</h1></th></tr>
            <tr>
                <td><a href="division.php">ক্রিয়েট বিভাগ</a></td>
            </tr>
            <tr>
                <td><a href="district.php">ক্রিয়েট জেলা</a></td>
            </tr>
            <tr>
                <td><a href="thana.php">ক্রিয়েট থানা</a></td>
            </tr>
            <tr>
                <td><a href="post_office.php">ক্রিয়েট পোস্ট অফিস</a></td>
            </tr>
            <tr>
                <td><a href="village.php">ক্রিয়েট গ্রাম</a></td>
            </tr>
        </table>
    </form>
</div>