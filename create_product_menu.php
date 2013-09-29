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
            <tr><th style="text-align: center" colspan="2"><h1>প্রোডাক্ট বিষয়ক তথ্য</h1></th></tr>
            <tr>
                <td><a href="make_product_introduce.php">মেইক প্রোডাক্ট ক্যাটাগরি এন্ড টাইপ</a></td>
                <td><a href="product_in.php">প্রোডাক্ট ইনফরমেশন ইন</a></td>
            </tr>
            <tr>
                <td><a href="product_out.php">প্রোডাক্ট আউট</a></td>
                <td><a href="update_pv.php">আপডেট পি.ভি.</a></td>
            </tr>
            <tr>
                <td><a href="product_introduce.php">প্রোডাক্ট ইন্ট্রিডিউসিং</a></td>
                <td><a href="update_product_introduce.php">আপডেট প্রোডাক্ট ইন্ট্রিডিউসিং ইনফরমেশন</a></td>
            </tr>
            <tr>
                <td><a href="product_finder.php">প্রোডাক্ট ফাইন্ডার</a></td>
                <td><a href="#">এবাউট প্রোডাক্ট</a></td>
            </tr>
            <tr>
                <td><a href="previous_product.php">প্রিভিয়াস প্রোডাক্ট</a></td>
                <td><a href="find_selling.php">ফাইন্ড সেলিং</a></td>
            </tr>
            <tr>
                <td><a href="selling_detector.php">সেলিং ডিটেক্টর</a></td>
                <td><a href="published_information.php">পাবলিশড ইনফরমেশন</a></td>
            </tr>
            <tr>              
                <td><a href="update_product_prize.php">আপডেট প্রোডাক্ট প্রাইজ</a></td>
                <td><a href="make_pin.php">মেইক পিন</a></td>
            </tr>
            <tr>
                <td><a href="about_pin.php">এবাউট পিন</a></td>
                <td><a href="postpone_pin.php">পিন স্থগিত করন</a></td>
            </tr>
            <tr>
                <td><a href="restart_pin.php">পিন রিস্টার্ট করন</a></td>
                <td><a href="publised_entry_postpone_pin.php">পাবলিশড এন্ট্রি পোস্টপন্ড পিন</a></td>
            </tr>
        </table>
    </form>
</div>