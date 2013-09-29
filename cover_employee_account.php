<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
error_reporting(0);
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
                    $result = mysql_query("Select  * from $dbname.employee_information where idEmployee_information = 1");
                    while ($row = mysql_fetch_array($result)) {
                        $id = $row['idEmployee_information'];
                        $employee_account_number = $row['employee_account_number'];
                        $employee_name = $row['employee_name'];
                        $scanDoc_picture = $row['scanDoc_picture'];
                        $scanDoc_signature = $row['scanDoc_signature'];
                        $employee_mobile = $row['employee_mobile'];
                        $employee_email = $row['employee_email'];
                        $house = $row['house'];
                        $village = $row['village'];
                        $road = $row['road'];
                        $post_code = $row['post_code'];
                        $thana_name = $row['thana_name'];
                        $district_name = $row['district_name'];
                        $division_name = $row['division_name'];
                        
                        echo "<table  class='formstyle'>";
                        echo "<tr>
                                <th colspan='7' style='text-align: center'><h2><font color=\"red\">$employee_name'এর একাউন্ট</font></h2></th>
                            <div style='width: 80%; float: left;'>     
                            <tr>
                                    <td>একাউন্টধারীর একাউন্ট নং </td>
                                    <td>: $employee_account_number</td>          
                                    <td colspan='2'> </td>
                                    <td rowspan='6'><img src='images/demon2.jpg' alt='Iftee'></td>        
                                </tr>
                                <tr>
                                    <td>একাউন্টধারীর নাম </td>
                                    <td>: $employee_name</td>         
                                </tr>                                
                                <tr>
                                    <td >মোবাইল নং</td>
                                    <td>: $employee_mobile</td>			
                                </tr>
                                <tr>
                                    <td >ইমেল</td>
                                    <td>: $employee_email</td>			
                                </tr>";
                    }
              
                    $result2 = mysql_query("SELECT idCustomer_account, Nominee_idNominee FROM $dbname.customer_account WHERE idCustomer_account='$id'");
                    $row2 = mysql_fetch_array($result2);
                    $nominee_id_search = $row2['Nominee_idNominee'];
                    $result_nominee = mysql_query("SELECT * FROM $dbname.nominee WHERE idNominee = '$nominee_id_search'");
                    while ($row = mysql_fetch_array($result_nominee)) {
                      
                        $exam_board = $row['exam_board'];
                        echo "    <tr>
                                        <td >জয়েনের তারিখ ও সময়</td>
                                        <td>:  $nominee_name</td>			
                                    </tr>
                                    <tr>
                                        <td >ইন গ্রেড</td>
                                        <td>: $nominee_age</td>			
                                    </tr>
                                    <tr>
                                        <td >অফিসের নাম ও নাম্বার</td>
                                        <td>: $nominee_relation</td>			
                                    </tr>
                                    <tr>
                                        <td >অফিসে জয়েনের তারিখ ও সময়</td>
                                        <td>: $nominee_mobile</td>			
                                    </tr>
                                    <tr>
                                        <td >সেটেল টাইম</td>
                                        <td>: $nominee_email</td>			
                                    </tr>
                                    <tr>
                                        <td >গ্রেড</td>
                                        <td>: $nominee_national_ID </td>			
                                    </tr>
                                    <tr>
                                        <td >দায়িত্ব</td>
                                        <td>:  $nominee_passport_ID</td>			
                                    </tr>";
                        echo "</table>";
                    }
                    ?>
                    </div>
                </table>
            </form>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>