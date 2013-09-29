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
            <tr><th style="text-align: center" colspan="2"><h1>মূল ফান্ড</h1></th></tr>
            <tr>
                <td><a href="balanced_description.php">ব্যালেন্সড ডেসক্রিপশন</a></td>
                <td><a href="transfer_amount.php">ট্রান্সফার এ্যামাউন্ট</a></td>
            </tr>
            <tr>
                <td><a href="cheque_making_for_in.php">চেক মেইকিং ফর ইন</a></td>
                <td><a href="cheque_making_for_out.php?parent=ACC">চেক মেইকিং ফর আউট</a></td>
            </tr>
            <tr>
                <td><a href="out_fund.php">আউট ফান্ড</a></td>
                <td><a href="update_credit_prize.php">আপডেট ক্রেডিট প্রাইজ</a></td>
            </tr>
            <tr>
                <td><a href="postpone_cheque.php">চেক স্থগিত করন</a></td>
                <td><a href="review_paid_cheque.php">রিভিউ পেইড চেক</a></td>
            </tr>
        </table>
    </form>
</div>