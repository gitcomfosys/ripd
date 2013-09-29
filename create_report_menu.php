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
            <tr><th style="text-align: center" colspan="2"><h1>চার্টসমূহ</h1></th></tr>
            <tr>                                
                <td><a href="organizational_chart.php">প্রাতিষ্ঠানিক চার্ট</a></td> 
                <td><a href="replace_chart.php">রিপ্লেস চার্ট</a></td>
            </tr>
            <tr><th style="text-align: center" colspan="2"><h1>স্টেটমেন্ট</h1></th></tr>
            <tr>
                <td><a href="statement_make.php?parent=CA">স্টেটমেন্ট</a></td>
                <td><a href="scan_documents.php?parent=CA">স্ক্যান ডকুমেন্টস</a></td>
            </tr>
            <tr>
                <td><a href="coming_data.php">কামিং ডাটা</a></td>
                <td><a href="attendence_statement_chart.php">এটেন্ডেন্স স্টেটমেন্ট চার্ট</a></td>
            </tr> 
            <tr><th style="text-align: center" colspan="2"><h1>একাউন্ট এক্সপেন্ডিচার</h1></th></tr>
            <tr>
                <td><a href="account_expenditure_statement.php">এরিয়া একাউন্ট ও এক্সপেন্ডিচার স্টেটমেন্ট</a></td>
            </tr>
        </table>
    </form>
</div>