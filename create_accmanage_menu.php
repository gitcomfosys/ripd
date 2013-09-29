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
            <tr><th style="text-align: center" colspan="2"><h1>ট্রী</h1></th></tr>
            <tr>
                <td><a href="systemtree4.php">সিস্টেম ট্রী</a></td>
                <td><a href="zenology_tree.php">জেনোলোজী ট্রী</a></td>
            </tr>
            <tr>
                <td><a href="dropdown_tree.php">ড্রপডাউন ট্রী</a></td>
            </tr>
        </table>
    </form>
</div>