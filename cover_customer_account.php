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
                     $result3 = mysql_query("SELECT * FROM $dbname.education WHERE edu_customer_id='$id' and type='C' ");
                     
                    $result = mysql_query("Select  * from $dbname.customer_account where idCustomer_account =1");
                    while ($row = mysql_fetch_array($result)) {
                        $id = $row['idCustomer_account'];
                        $cust_name = $row['cust_name'];                        
                        $cust_account_number = $row['employee_account_number'];
                        
                        echo "<table  class='formstyle'>";
                        echo "<tr>
                                <th colspan='7' style='text-align: center'><h2><font color=\"#D12900\">$employee_name</font>'এর একাউন্ট</h2></th>
                            <div style='width: 80%; float: left;'>  
                                <tr>
                                    <td>রেফারার নাম </td>
                                    <td colspan='2' >: <font color=\"#CC0000\"><b>$employee_name</b></font></td>          
                                    <td '> </td>
                                    <td rowspan='6'><img src='images/demon2.jpg' alt='Iftee'></td>            
                                </tr> 
                                <tr>
                                    <td>একাউন্টধারীর নাম </td>
                                    <td>: $cust_name</td>         
                                </tr>   
                            <tr>
                                    <td>একাউন্টধারীর একাউন্ট নং </td>
                                    <td>: $cust_account_number</td>     
                                </tr>   
                                <tr>
                                    <td>একাউন্ট খোলার তারিখ </td>
                                    <td>: $employee_name</td>         
                                </tr>                             
                                <tr>
                                    <td >ডেজিগনেশন</td>
                                    <td>: $employee_mobile</td>			
                                </tr>
                                <tr>
                                    <td >সাব সেটেল / সেটেল এমাউন্ট</td>
                                    <td>: $employee_email</td>			
                                </tr>";
                    }
              
                     $result7 = mysql_query("SELECT * FROM $dbname.address WHERE add_customer_id='$id' and address_whom='C' and address_type='present'");
                        $row = mysql_fetch_array($result7);
                        $address_type = $row['address_type'];
                        $house = $row['house'];
                        $village = $row['village'];
                        $post_office = $row['post_office'];
                        $road = $row['road'];
                        $address_whom = $row['address_whom'];
                        $post_code = $row['post_code'];
                        $thana_id1 = $row['Thana_idThana'];
                        $result12 = mysql_query("SELECT * FROM $dbname.thana, $dbname.district, $dbname.division WHERE District_idDistrict=idDistrict AND Division_idDivision=idDivision AND idThana ='$thana_id1' ");
                        $rows = mysql_fetch_array($result12);

                        $selected_division_name = $rows['division_name'];
                        $selected_district_name = $rows['district_name'];
                        $selected_thana_name = $rows['thana_name'];
                        echo "<tr>
                                    <td ><font color=\"#3933CC\"><b>বর্তমান ঠিকানা</b></font></td>
                                    <td colspan='2'> </td>
                                </tr>
                                <tr>
                                    <td >বাড়ির নাম / ফ্ল্যাট নং</td>
                                    <td colspan='2'>: $house</td>
                                    <td >গ্রাম / বাড়ি নং</td>
                                    <td colspan='2'>: $village</td>		
                                </tr>
                                <tr>
                                    <td >পোষ্ট অফিস </td>
                                    <td colspan='2'>: $post_office </td>
                                    <td >পোষ্ট কোড</td>
                                    <td colspan='2'>: $post_code</td>		
                                </tr>
                                <tr>
                                    <td >রোড নং</td>
                                    <td colspan='2'>: $road</td>
                                    <td >উপজেলা / থানা</td>
                                    <td colspan='2'>: $selected_thana_name</td>		
                                </tr>
                                <tr>
                                    <td >জেলা</td>
                                    <td colspan='2'>: $selected_district_name</td>
                                    <td >বিভাগ</td>
                                    <td colspan='2'>: $selected_division_name</td>		
                                </tr> ";
                        $result8 = mysql_query("SELECT * FROM $dbname.address WHERE  add_customer_id='$id' and address_whom='C' and address_type='permanent'");
                        $row = mysql_fetch_array($result8);
                        $address_type = $row['address_type'];
                        $house = $row['house'];
                        $village = $row['village'];
                        $post_office = $row['post_office'];
                        $road = $row['road'];
                        $address_whom = $row['address_whom'];
                        $post_code = $row['post_code'];
                        $thana_id1 = $row['Thana_idThana'];
                        $result13 = mysql_query("SELECT * FROM $dbname.thana, $dbname.district, $dbname.division WHERE District_idDistrict=idDistrict AND Division_idDivision=idDivision AND idThana ='$thana_id1' ");
                        $rows = mysql_fetch_array($result13);

                        $selected_division_name = $rows['division_name'];
                        $selected_district_name = $rows['district_name'];
                        $selected_thana_name = $rows['thana_name'];
                        echo "<tr>
                                    <td ><font color=\"#3933CC\"><b>স্থায়ী ঠিকানা</b></font></td>
                                    <td colspan='2'> </td>
                                </tr>
                                <tr>
                                    <td >বাড়ির নাম / ফ্ল্যাট নং</td>
                                    <td colspan='2'>: $house</td>
                                    <td >গ্রাম / বাড়ি নং</td>
                                    <td colspan='2'>: $village</td>		
                                </tr>
                                <tr>
                                    <td >পোষ্ট অফিস </td>
                                    <td colspan='2'>: $post_office </td>
                                    <td >পোষ্ট কোড</td>
                                    <td colspan='2'>: $post_code</td>		
                                </tr>
                                <tr>
                                    <td >রোড নং</td>
                                    <td colspan='2'>: $road</td>
                                    <td >উপজেলা / থানা</td>
                                    <td colspan='2'>: $selected_thana_name</td>		
                                </tr>
                                <tr>
                                    <td >জেলা</td>
                                    <td colspan='2'>: $selected_district_name</td>
                                    <td >বিভাগ</td>
                                    <td colspan='2'>: $selected_division_name</td>		
                                </tr> ";  
                        
                    $result2 = mysql_query("SELECT idCustomer_account, Nominee_idNominee FROM $dbname.customer_account WHERE idCustomer_account='$id'");
                    $row2 = mysql_fetch_array($result2);
                    $nominee_id_search = $row2['Nominee_idNominee'];
                    $result_nominee = mysql_query("SELECT * FROM $dbname.nominee WHERE idNominee = '$nominee_id_search'");
                    while ($row = mysql_fetch_array($result_nominee)) {
                      
                        $exam_board = $row['exam_board'];
                        echo "    
                                <tr>
                                    <td colspan='6' ><hr /></td>
                                </tr>
                                <tr>
                                        <td ><font color=\"#3933CC\"><b>পি.ভির পরিমাণ</b></font></td>
                                        <td></td>			
                                    </tr>
                                    <tr>
                                        <td >পার্সোনাল পি.ভি.</td>
                                        <td>: $nominee_age</td>			
                                    </tr>
                                    <tr>
                                        <td >রেফারার ১</td>
                                        <td>: $nominee_relation</td>			
                                    </tr>
                                    <tr>
                                        <td >রেফারার ২</td>
                                        <td>: $nominee_mobile</td>			
                                    </tr>
                                    <tr>
                                        <td >রেফারার ৩</td>
                                        <td>: $nominee_email</td>			
                                    </tr>
                                    <tr>
                                        <td >রেফারার ৪</td>
                                        <td>: $nominee_national_ID </td>			
                                    </tr>
                                    <tr>
                                        <td >রেফারার ৫</td>
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