<?php
include 'includes/ConnectDB.inc';
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

            <tr><th style="text-align: center" colspan="2"><h1>একাউন্টসমূহের ভিউ পেইজ</h1></th></tr>
            
            <?php
                $numberOfAllowedPage = count($_SESSION['overallAccess']);
                $remainder = $numberOfAllowedPage % 2;
                $loopCounter = $numberOfAllowedPage;
                /*
                if($remainder==1){
                    $loopCounter = ($numberOfAllowedPage/2) + 1;  
                }
                else{
                    $loopCounter = $numberOfAllowedPage / 2;
                }
                */
                for ($i=0; $i<$loopCounter; $i=$i+2){
                    $page1 = $_SESSION['overallAccess'][$i];
                    $sql1="SELECT * 
                        FROM ".$dbname.".page_security 
                            WHERE idPage_security = '$page1'";
                    $row1 = mysql_fetch_array(mysql_query($sql1));
                    
               echo "<tr>";
               echo "<td><a href=".$row1['page_name'].">".$row1['view_name']."</a></td>";                
               
                $page2 = $_SESSION['overallAccess'][$i+1];
                    $sql2="SELECT * 
                        FROM ".$dbname.".page_security 
                            WHERE idPage_security = '$page2'";
                    $row2 = mysql_fetch_array(mysql_query($sql2));
               echo "<td><a href=".$row2['page_name'].">".$row2['view_name']."</a></td>";         
               
               
               echo "</tr>";
               }         
                
           ?>
        </table>
    </form>
</div>


<!--
<?php
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

            <tr><th style="text-align: center" colspan="2"><h1>একাউন্টসমূহের ভিউ পেইজ</h1></th></tr>
            <tr>                                
                <td><a href="cover_employee_account.php">একাউন্টধারীর কভার পেইজ</a></td> 
                <td><a href="attendence_statement.php">এটেনডেন্স স্টেটমেন্ট</a></td>
            </tr>
            <tr>
                <td><a href="employee_description.php">ডেসক্রিপশন</a></td>
                <td><a href="employee_balance_description.php">ব্যালেন্স ডেসক্রিপশন</a></td>
            </tr>
            <tr>                                
                <td><a href="about_in.php">এবাউট ইন</a></td> 
                <td><a href="payment_payout.php">পেআউট</a></td>
            </tr>
            <tr>                                
                <td><a href="payment_statement_chart.php">পেমেন্ট স্টেটমেন্ট চার্ট</a></td> 
                <td><a href="systemic_earn.php">সিস্টেমিক আর্ন স্টেটমেন্ট</a></td>
            </tr>
            <tr>                                
                <td><a href="send_amount.php">সেন্ড এমাউন্ট</a></td> 
                <td><a href="transfer_amount_customer.php">ট্রান্সফার এমাউন্ট</a></td>
            </tr>
            <tr>                                
                <td><a href="employee_about_me.php">এবাউট মি</a></td> 
            </tr>
            <tr>                                
                <td><a href="employee_loan_amount.php">লোন এমাউন্ট</a></td> 
                <td><a href="employee_award.php">এওয়ার্ড</a></td>
            </tr>
            <tr>  
                <td><a href="#">ই-পারচেইজিং</a></td>
                <td><a href="#">টিকেট পারচেইজিং</a></td> 
            </tr>
        </table>
    </form>
</div>
-->