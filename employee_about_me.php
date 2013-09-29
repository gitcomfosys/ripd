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
                        $employee_fatherName = $row['employee_fatherName'];
                        $employee_motherName = $row['employee_motherName'];
                        $employee_spouseName = $row['employee_spouseName'];
                        $employee_occupation = $row['employee_occupation'];
                        $scanDoc_picture = $row['scanDoc_picture'];
                        $scanDoc_signature = $row['scanDoc_signature'];
                        $employee_religion = $row['employee_religion'];
                        $employee_natonality = $row['employee_natonality'];
                        $employee_mobile = $row['employee_mobile'];
                        $employee_email = $row['employee_email'];
                        $employee_date_of_birth = $row['employee_date_of_birth'];
                        $employee_national_ID = $row['employee_national_ID'];
                        $employee_passport = $row['employee_passport'];
                        $employee_birth_certificate_No = $row['employee_birth_certificate_No'];
                        $employee_education = $row['employee_education'];
                        $house = $row['house'];
                        $village = $row['village'];
                        $road = $row['road'];
                        $post_code = $row['post_code'];
                        $thana_name = $row['thana_name'];
                        $district_name = $row['district_name'];
                        $division_name = $row['division_name'];

                        echo "<table  class='formstyle'>";
                        echo "<tr>
                                <th colspan='7' style='text-align: center'><h2><font color=\"red\">$employee_name </font>'র একাউন্ট</h2></th>
                            <div style='width: 80%; float: left;'>                               
                                <tr>
                                    <td ><font color=\"#3933CC\"><b>ব্যক্তিগত তথ্য</b></font></td>		
                                </tr>
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
                                    <td  >বাবার নাম </td>
                                    <td>: $employee_fatherName</td>  
                                </tr>
                                <tr>
                                    <td>মার নাম </td>
                                    <td>   :  $employee_motherName</td>         
                                </tr>
                                <tr>
                                    <td>স্পাউসের নাম </td>
                                    <td>   :  $employee_spouseName</td>           
                                </tr>
                                <tr>
                                    <td >পেশা</td>
                                    <td>:  $employee_occupation</td>    
                                </tr>
                                <tr>
                                    <td>ধর্ম </td>
                                    <td>: $employee_religion</td>        
                                    <td colspan='2'></td>
                                    <td  rowspan='3'><img src='images/demon sign.png' alt='Iftee'></td>                   	                         
                                </tr>
                                <tr>
                                    <td >জাতীয়তা</td>
                                    <td>: $employee_natonality</td>   			
                                </tr>
                                <tr>
                                    <td >মোবাইল নং</td>
                                    <td>: $employee_mobile</td>			
                                </tr>
                                <tr>
                                    <td >ইমেল</td>
                                    <td>: $employee_email</td>
                                    <td colspan='2'></td>
                                    <td  rowspan='4'><img src='images/demon sign.png' alt='Iftee'></td>    			
                                </tr>
                                <tr>
                                    <td >জন্মতারিখ</td>
                                    <td>: $employee_date_of_birth</td>			
                                </tr>
                                    <tr>
                                        <td >জাতীয় পরিচয়পত্র নং</td>
                                        <td>: $employee_national_ID </td>			
                                    </tr>
                                    <tr>
                                        <td >পাসপোর্ট আইডি নং</td>
                                        <td>:  $employee_passport</td>			
                                    </tr>
                                <tr>
                                    <td >জন্ম সনদ নং</td>
                                    <td>: $employee_birth_certificate_No</td>			
                                </tr>";
                            $result3 = mysql_query("SELECT * FROM $dbname.education WHERE edu_employee_id='$id' and type='E' ");
                        echo "<tr>
                                    <td ><font color=\"#3933CC\"><b>শিক্ষাগত যোগ্যতা</b></font></td>		
                                </tr>
                                <tr>
                                    <td>পরীক্ষার নাম / ডিগ্রী </td>
                                    <td>পশের সাল</td>
                                    <td>প্রতিষ্ঠানের নাম </td>
                                    <td>বোর্ড / বিশ্ববিদ্যালয়</td>
                                    <td>জি.পি.এ / বিভাগ </td>
                                </tr>";
                           while ($row = mysql_fetch_array($result3)) {
                            $exam_name = $row['exam_name'];
                            $gpa = $row['gpa'];
                            $board = $row['board'];
                            $passing_year = $row['passing_year'];
                            $institute_name = $row['institute_name'];

                            echo "<tr>
                                    <td>$exam_name </td>
                                    <td>$passing_year</td>
                                    <td>$institute_name</td>
                                    <td>$board</td>
                                    <td>$gpa </td>
                                </tr>";
                        }
                       $result7 = mysql_query("SELECT * FROM $dbname.address WHERE add_employee_id='$id' and address_whom='E' and address_type='present'");
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

                         $result8 = mysql_query("SELECT * FROM $dbname.address WHERE  add_employee_id='$id' and address_whom='E' and address_type='permanent'");
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
                    
                    }
                    
                    $result2 = mysql_query("SELECT idEmployee_information, Nominee_idNominee FROM $dbname.employee_information WHERE idEmployee_information='$id'");
                    $row2 = mysql_fetch_array($result2);
                    $nominee_id_search = $row2['Nominee_idNominee'];
                    $result_nominee = mysql_query("SELECT * FROM $dbname.nominee WHERE idNominee = '$nominee_id_search'");
                    while ($row = mysql_fetch_array($result_nominee)) {
                        $nominee_name = $row['nominee_name'];
                        $nominee_relation = $row['nominee_relation'];
                        $nominee_mobile = $row['nominee_mobile'];
                        $nominee_email = $row['nominee_email'];
                        $nominee_educational_background = $row['nominee_educational_background'];
                        $nominee_national_ID = $row['nominee_national_ID'];
                        $nominee_passport_ID = $row['nominee_passport_ID'];
                        $nominee_age = $row['nominee_age'];
                        $exam_name = $row['exam_name'];
                        $exam_gpa = $row['exam_gpa'];
                        $exam_board = $row['exam_board'];
                        echo "<tr>
                                        <td colspan='6' ><hr /></td>
                                    </tr>
                                <tr>
                                    <td ><font color=\"#3933CC\"><b>নমিনির তথ্য</b></font></td>		
                                </tr>
                                    <tr>
                                        <td >নমিনির নাম</td>
                                        <td>:  $nominee_name</td>
                                    <td colspan='2'></td>
                                    <td  rowspan='5'><img src='images/stefan.jpg' alt='Iftee'></td> 		
                                    </tr>
                                    <tr>
                                        <td >বয়স</td>
                                        <td>: $nominee_age</td>			
                                    </tr>
                                    <tr>
                                        <td >সম্পর্ক</td>
                                        <td>: $nominee_relation</td>			
                                    </tr>
                                    <tr>
                                        <td >মোবাইল নং</td>
                                        <td>: $nominee_mobile</td>			
                                    </tr>
                                    <tr>
                                        <td >ইমেইল</td>
                                        <td>: $nominee_email</td>			
                                    </tr>
                                    <tr>
                                        <td >জাতীয় পরিচয়পত্র নং</td>
                                        <td>: $nominee_national_ID </td>			
                                    </tr>
                                    <tr>
                                        <td >পাসপোর্ট আইডি নং</td>
                                        <td>:  $nominee_passport_ID</td>			
                                    </tr>";

                          $result4 = mysql_query("SELECT * FROM $dbname.education WHERE edu_employee_id='$id' and type='EN' ");
                        echo "<tr>
                                    <td ><font color=\"#3933CC\"><b>শিক্ষাগত যোগ্যতা</b></font></td>		
                                </tr>
                                <tr>
                                    <td>পরীক্ষার নাম / ডিগ্রী </td>
                                    <td>পশের সাল</td>
                                    <td>প্রতিষ্ঠানের নাম </td>
                                    <td>বোর্ড / বিশ্ববিদ্যালয়</td>
                                    <td>জি.পি.এ / বিভাগ </td>
                                </tr>";
                         while ($row = mysql_fetch_array($result4)) {
                            $exam_name = $row['exam_name'];
                            $gpa = $row['gpa'];
                            $board = $row['board'];
                            $passing_year = $row['passing_year'];
                            $institute_name = $row['institute_name'];

                            echo "<tr>
                                    <td>$exam_name </td>
                                    <td>$passing_year</td>
                                    <td>$institute_name</td>
                                    <td>$board</td>
                                    <td>$gpa </td>
                                </tr>";
                        }
                        
                         $result13 = mysql_query("SELECT * FROM $dbname.address WHERE  add_employee_id='$id' and address_whom='ENO' and address_type='present'");
                        $row = mysql_fetch_array($result13);
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
                        $result14 = mysql_query("SELECT * FROM $dbname.address WHERE  add_employee_id='$id'and address_whom='ENO' and address_type='permanent'");
                        $row = mysql_fetch_array($result14);
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
                    }
                    ?>

                </table>
            </form>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>