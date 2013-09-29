<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
error_reporting(0);
session_start();
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<div class="column6">
    <div class="main_text_box">	      
        <div>  
            <div style="padding-left: 110px;"><a href="index.php?apps=VA"><b>ফিরে যান</b></a></div>
            <form method="POST" enctype="multipart/form-data" action="" id="cust_form" name="cust_form">	
                <table  class="formstyle"> 
                    <?php
                 //   $user_id = $_SESSION['UserID'];
                    //      $Customer_account=$_GET['id'];
                    //$result0 = mysql_query("Select  * from $dbname.customer_account");
                    //$row = mysql_fetch_array($result0);
                    //  $id = $row['idCustomer_account'];
                   // $id = '2';
                    
                    $result0 = mysql_query("Select  * from $dbname.cfs_user where idUser=4");
                    $row1 = mysql_fetch_array($result0);
                    
                    $account_name = $row1['account_name'];
                    $mobile = $row1['mobile'];
                    $email = $row1['email'];
                    $result = mysql_query("Select  * from $dbname.customer_account where idCustomer_account =1");
                    $row = mysql_fetch_array($result);

                    $cust_photo = $row['scanDoc_picture'];
                    $cust_sign = $row['scanDoc_signature'];
                    $cust_finger = $row['scanDoc_finger_print'];
                    $cust_father_name = $row['cust_father_name'];
                    $cust_mother_name = $row['cust_mother_name'];
                    $cust_spouse_name = $row['cust_spouse_name'];
                    $cust_family_member = $row['cust_family_member'];
                    $cust_son_no = $row['cust_son_no'];
                    $cust_daughter_no = $row['cust_daughter_no'];
                    $cust_son_student_no = $row['cust_son_student_no'];
                    $cust_daughter_student_no = $row['cust_daughter_student_no'];
                    $scanDoc_picture = $row['scanDoc_picture'];
                    $cust_occupation = $row['cust_occupation'];
                    $scanDoc_signature = $row['scanDoc_signature'];
                    $cust_religion = $row['cust_religion'];
                    $cust_nationality = $row['cust_nationality'];
                    $cust_mobile = $row['cust_mobile'];
                    $cust_email = $row['cust_email'];
                    $cust_nationalID_no = $row['cust_nationalID_no'];
                    $cust_passportID_no = $row['cust_passportID_no'];
                    $birth_certificate_no = $row['birth_certificate_no'];
                    $cust_education = $row['cust_education'];
                    $house = $row['house'];
                    $village = $row['village'];
                    $road = $row['road'];
                    $post_code = $row['post_code'];
                    $thana_name = $row['thana_name'];
                    $district_name = $row['district_name'];
                    $division_name = $row['division_name'];
                    $cust_gurdian_name = $row['cust_gurdian_name'];
                    $cust_gurd_scanpic = $row['cust_gurd_scanpic'];
                    $cust_gurdian_relation = $row['cust_gurdian_relation'];
                    $cust_gurdian_mobile = $row['cust_gurdian_mobile'];
                    $cust_gurdian_email = $row['cust_gurdian_email'];
                    $cust_gurdian_education = $row['cust_gurdian_education'];
                    $cust_gurdian_nationalID_no = $row['cust_gurdian_nationalID_no'];
                    $cust_gurdian_passportID_no = $row['cust_gurdian_passportID_no'];
                    $cust_date_of_birth = $row['cust_date_of_birth'];
                    echo "<table  class='formstyle'>";
                    echo "<tr>
                                <th colspan='7' style='text-align: center'><h2><font color=\"red\">$account_name </font>'র একাউন্ট</h2></th>
                            <div style='width: 80%; float: left;'>  
                               <tr>
                                    <td ><font color=\"#3933CC\"><b>ব্যক্তিগত তথ্য</b></font></td>		
                                </tr>
                                <tr>
                                    <td>একাউন্টধারীর নাম </td>
                                    <td>: $account_name</td>         
                                    <td  colspan='2'> </td>
                                    <td rowspan='5'><img src=$cust_photo width='140px' height='140px'/> </td>           
                                </tr>
                                <tr>
                                    <td  >বাবার নাম </td>
                                    <td>: $cust_father_name</td>   
                                </tr>
                                <tr>
                                    <td>মার নাম </td>
                                    <td>   :  $cust_mother_name</td>             
                                </tr>
                                <tr>
                                    <td>স্পাউসের নাম </td>
                                    <td>   :  $cust_spouse_name</td>             
                                </tr>
                                <tr>
                                    <td >পেশা</td>
                                    <td>:  $cust_occupation</td>                               
                                </tr>
                                <tr>
                                    <td>ধর্ম </td>
                                    <td>: $cust_religion</td>	
                                    <td colspan='2'></td>
                                    <td  rowspan='3'><img src=$cust_sign width='140px' height='70px'/> </td>                  
                                </tr>
                                <tr>
                                    <td >জাতীয়তা</td>
                                    <td>: $cust_nationality</td>			
                                </tr>
                                <tr>
                                    <td >মোবাইল নং</td>
                                    <td>: $mobile</td>			
                                </tr>
                                <tr>
                                    <td >ইমেল</td>
                                    <td>: $email</td>
                                    <td colspan='2'></td>
                                    <td  rowspan='4'><img src=$cust_finger width='140px' height='70px'/> </td>   				
                                </tr>
                                <tr>
                                    <td >জন্মতারিখ</td>
                                    <td>: $cust_date_of_birth</td>		
                                </tr>
                                    <td >জাতীয় পরিচয়পত্র নং</td>
                                    <td>:  $cust_nationalID_no</td>			
                                </tr>
                                <tr>
                                    <td >পাসপোর্ট আইডি নং</td>
                                    <td>: $cust_passportID_no </td>			
                                </tr>
                                <tr>
                                    <td >জন্ম সনদ নং</td>
                                    <td>: $birth_certificate_no </td>			
                                </tr>";

                    $result3 = mysql_query("SELECT * FROM $dbname.education WHERE cepn_id='2' and education_type='cust' ");
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
                    echo "<tr>
                                    <td ><font color=\"#3933CC\"><b>পরিবারিক তথ্য</b></font></td>		
                                </tr>                             
                                <tr>
                                    <td >পরিবারের সদস্য সংখ্যা</td>
                                    <td>: $cust_family_member</td>			
                                </tr>
                                <tr>
                                    <td >ছেলের সন্তানের সংখ্যা</td>
                                    <td colspan='2'>: $cust_son_no</td>
                                    <td >মেয়ের সন্তানের সংখ্যা </td>
                                    <td>: $cust_daughter_no</td>			
                                </tr>
                                <tr>
                                    <td >ছেলে  ষ্টুডেন্ট</td>
                                    <td colspan='2'>: $cust_son_student_no</td>
                                    <td >মেয়ে  ষ্টুডেন্ট</td>
                                    <td>: $cust_daughter_student_no</td>			
                                </tr>";

                    $result5 = mysql_query("SELECT * FROM $dbname.children WHERE Customer_account_idCustomer_account='2' and type='M'");
                    while ($row = mysql_fetch_array($result5)) {
                        $children_age = $row['children_age'];
                        $children_class = $row['children_class'];

                        echo "<tr>
                                    <td >ছেলে সন্তানের বয়স</td>
                                    <td colspan='2'>: $children_age বছর</td>
                                    <td >অধ্যয়ণরত শ্রেণী</td>	
                                    <td >: $children_class</td>	
                                </tr>";
                    }
                    $result6 = mysql_query("SELECT * FROM $dbname.children WHERE Customer_account_idCustomer_account='2' and type='F'");
                    while ($row = mysql_fetch_array($result6)) {
                        $children_age = $row['children_age'];
                        $children_class = $row['children_class'];

                        echo "<tr>
                                    <td >মেয়ে সন্তানের বয়স</td>
                                    <td colspan='2'>: $children_age বছর</td>
                                    <td >অধ্যয়ণরত শ্রেণী</td>	
                                    <td >: $children_class</td>	
                                </tr>";
                    }
                    $result7 = mysql_query("SELECT * FROM $dbname.address WHERE adrs_cepng_id='2' and address_whom='cust' and address_type='Present'");
                    $row = mysql_fetch_array($result7);
                    $address_type = $row['address_type'];
                    $house = $row['house'];
                    $house_no = $row['house_no'];
                    $road = $row['road'];
                    $post_code = $row['post_code'];
                    $address_whom = $row['address_whom'];
                    $thana_id1 = $row['Thana_idThana'];
                    $village_id = $row['village_idvillage'];
                    $post_office_id = $row['post_idpost'];
                    $result12 = mysql_query("SELECT * FROM $dbname.thana, $dbname.district, $dbname.division,$dbname.village,$dbname.post_office WHERE District_idDistrict=idDistrict AND Division_idDivision=idDivision AND idThana ='$thana_id1' AND idPost_office = '$post_office_id' AND idvillage= '$village_id'");
                    $rows = mysql_fetch_array($result12);

                    $selected_division_name = $rows['division_name'];
                    $selected_district_name = $rows['district_name'];
                    $selected_thana_name = $rows['thana_name'];
                    $selected_post_offc_name = $rows['post_offc_name'];
                    $selected_village_name = $rows['village_name'];
                    echo "<tr>
                                    <td ><font color=\"#3933CC\"><b>বর্তমান ঠিকানা</b></font></td>
                                    <td colspan='2'> </td>
                                </tr>
                                <tr>
                                    <td >বাড়ির নাম / ফ্ল্যাট নং</td>
                                    <td colspan='2'>: $house</td>
                                    <td >বাড়ি নং</td>
                                    <td colspan='2'>: $house_no</td>		
                                </tr>
                                <tr>
                                    <td >রোড নং</td>
                                    <td colspan='2'>: $road</td>
                                    <td >পোষ্ট কোড</td>
                                    <td colspan='2'>: $post_code</td>		
                                </tr>
                                <tr>
                                    <td >গ্রাম</td>
                                    <td colspan='2'>: $selected_village_name</td>	
                                    <td >পোষ্ট অফিস </td>
                                    <td colspan='2'>: $selected_post_offc_name </td>	
                                </tr>
                                <tr>
                                    <td >উপজেলা / থানা</td>
                                    <td colspan='2'>: $selected_thana_name</td>
                                    <td >জেলা</td>
                                    <td colspan='2'>: $selected_district_name</td>		
                                </tr>
                                <tr>
                                    <td >বিভাগ</td>
                                    <td colspan='2'>: $selected_division_name</td>		
                                </tr> ";

                    $result8 = mysql_query("SELECT * FROM $dbname.address WHERE  adrs_cepng_id='2' and address_whom='cust' and address_type='Permanent'");
                    $row = mysql_fetch_array($result8);
                    $address_type = $row['address_type'];
                    $house = $row['house'];
                    $house_no = $row['house_no'];
                    $village = $row['village'];
                    $post_office = $row['post_office'];
                    $road = $row['road'];
                    $address_whom = $row['address_whom'];
                    $post_code = $row['post_code'];
                    $thana_id1 = $row['Thana_idThana'];
                    $village_id = $row['village_idvillage'];
                    $post_office_id = $row['post_idpost'];
                    $result13 = mysql_query("SELECT * FROM $dbname.thana, $dbname.district, $dbname.division,$dbname.village,$dbname.post_office WHERE District_idDistrict=idDistrict AND Division_idDivision=idDivision AND idThana ='$thana_id1' AND idPost_office = '$post_office_id' AND idvillage= '$village_id'");
                    $rows = mysql_fetch_array($result13);

                    $selected_division_name = $rows['division_name'];
                    $selected_district_name = $rows['district_name'];
                    $selected_thana_name = $rows['thana_name'];
                    $selected_post_offc_name = $rows['post_offc_name'];
                    $selected_village_name = $rows['village_name'];

                    echo "<tr>
                                    <td ><font color=\"#3933CC\"><b>স্থায়ী ঠিকানা</b></font></td>
                                    <td colspan='2'> </td>
                                </tr>
                                <tr>
                                    <td >বাড়ির নাম / ফ্ল্যাট নং</td>
                                    <td colspan='2'>: $house</td>
                                    <td >বাড়ি নং</td>
                                    <td colspan='2'>: $house_no</td>		
                                </tr>
                                <tr>
                                    <td >রোড নং</td>
                                    <td colspan='2'>: $road</td>
                                    <td >পোষ্ট কোড</td>
                                    <td colspan='2'>: $post_code</td>		
                                </tr>
                                <tr>
                                    <td >গ্রাম</td>
                                    <td colspan='2'>: $selected_village_name</td>	
                                    <td >পোষ্ট অফিস </td>
                                    <td colspan='2'>: $selected_post_offc_name </td>	
                                </tr>
                                <tr>
                                    <td >উপজেলা / থানা</td>
                                    <td colspan='2'>: $selected_thana_name</td>
                                    <td >জেলা</td>
                                    <td colspan='2'>: $selected_district_name</td>		
                                </tr>
                                <tr>
                                    <td >বিভাগ</td>
                                    <td colspan='2'>: $selected_division_name</td>		
                                </tr> ";

                    echo "<tr>
                                    <td colspan='6' ><hr /></td>
                                </tr>
                                <tr>
                                    <td ><font color=\"#3933CC\"><b>অভিভাবকের তথ্য</b></font></td>		
                                </tr>                              
                                <tr>
                                    <td >অভিভাবকের নাম</td>
                                    <td>:  $cust_gurdian_name</td>	
                                    <td colspan='2'></td>
                                    <td  rowspan='5'><img src=$cust_gurd_scanpic width='140px' height='140px'/> </td>		
                                </tr>
                                <tr>
                                    <td >সম্পর্ক</td>
                                    <td>:  $cust_gurdian_relation</td>			
                                </tr>
                                <tr>
                                    <td >মোবাইল নং</td>
                                    <td>:  $cust_gurdian_mobile</td>			
                                </tr>
                                <tr>
                                    <td >ইমেইল</td>
                                    <td>: $cust_gurdian_email </td>			
                                </tr>
                                <tr>
                                    <td >জাতীয় পরিচয়পত্র নং</td>
                                    <td>:  $cust_gurdian_nationalID_no</td>			
                                </tr>
                                <tr>
                                    <td >পাসপোর্ট আইডি নং</td>
                                    <td>: $cust_gurdian_passportID_no </td>			
                                </tr>
                                <tr>
                                    <td >শিক্ষাগত যোগ্যতা</td>
                                    <td>: $cust_gurdian_education </td>			
                                </tr>";
                    $result10 = mysql_query("SELECT * FROM $dbname.address WHERE  adrs_cepng_id='2' and address_whom='cust_prnt' and address_type='Present'");
                    $row = mysql_fetch_array($result10);
                    $address_type = $row['address_type'];
                    $house = $row['house'];
                    $house_no = $row['house_no'];
                    $village = $row['village'];
                    $post_office = $row['post_office'];
                    $road = $row['road'];
                    $address_whom = $row['address_whom'];
                    $post_code = $row['post_code'];
                    $thana_id1 = $row['Thana_idThana'];
                    $village_id = $row['village_idvillage'];
                    $post_office_id = $row['post_idpost'];
                    $result13 = mysql_query("SELECT * FROM $dbname.thana, $dbname.district, $dbname.division,$dbname.village,$dbname.post_office WHERE District_idDistrict=idDistrict AND Division_idDivision=idDivision AND idThana ='$thana_id1' AND idPost_office = '$post_office_id' AND idvillage= '$village_id'");
                    $rows = mysql_fetch_array($result13);

                    $selected_division_name = $rows['division_name'];
                    $selected_district_name = $rows['district_name'];
                    $selected_thana_name = $rows['thana_name'];
                    $selected_post_offc_name = $rows['post_offc_name'];
                    $selected_village_name = $rows['village_name'];
                    echo "<tr>
                                    <td ><font color=\"#3933CC\"><b>বর্তমান ঠিকানা</b></font></td>
                                    <td colspan='2'> </td>
                                </tr>
                                <tr>
                                    <td >বাড়ির নাম / ফ্ল্যাট নং</td>
                                    <td colspan='2'>: $house</td>
                                    <td >বাড়ি নং</td>
                                    <td colspan='2'>: $house_no</td>		
                                </tr>
                                <tr>
                                    <td >রোড নং</td>
                                    <td colspan='2'>: $road</td>
                                    <td >পোষ্ট কোড</td>
                                    <td colspan='2'>: $post_code</td>		
                                </tr>
                                <tr>
                                    <td >গ্রাম</td>
                                    <td colspan='2'>: $selected_village_name</td>	
                                    <td >পোষ্ট অফিস </td>
                                    <td colspan='2'>: $selected_post_offc_name </td>	
                                </tr>
                                <tr>
                                    <td >উপজেলা / থানা</td>
                                    <td colspan='2'>: $selected_thana_name</td>
                                    <td >জেলা</td>
                                    <td colspan='2'>: $selected_district_name</td>		
                                </tr>
                                <tr>
                                    <td >বিভাগ</td>
                                    <td colspan='2'>: $selected_division_name</td>		
                                </tr> ";
                    $result9 = mysql_query("SELECT * FROM $dbname.address WHERE  adrs_cepng_id='2' and address_whom='cust_prnt' and address_type='Permanent'");
                    $row = mysql_fetch_array($result9);
                    $address_type = $row['address_type'];
                    $house = $row['house'];
                    $house_no = $row['house_no'];
                    $village = $row['village'];
                    $post_office = $row['post_office'];
                    $road = $row['road'];
                    $address_whom = $row['address_whom'];
                    $post_code = $row['post_code'];
                    $thana_id1 = $row['Thana_idThana'];
                    $village_id = $row['village_idvillage'];
                    $post_office_id = $row['post_idpost'];
                    $result13 = mysql_query("SELECT * FROM $dbname.thana, $dbname.district, $dbname.division,$dbname.village,$dbname.post_office WHERE District_idDistrict=idDistrict AND Division_idDivision=idDivision AND idThana ='$thana_id1' AND idPost_office = '$post_office_id' AND idvillage= '$village_id'");
                    $rows = mysql_fetch_array($result13);

                    $selected_division_name = $rows['division_name'];
                    $selected_district_name = $rows['district_name'];
                    $selected_thana_name = $rows['thana_name'];
                    $selected_post_offc_name = $rows['post_offc_name'];
                    $selected_village_name = $rows['village_name'];
                    echo "<tr>
                                    <td ><font color=\"#3933CC\"><b>স্থায়ী ঠিকানা</b></font></td>
                                    <td colspan='2'> </td>
                                </tr>
                                <tr>
                                    <td >বাড়ির নাম / ফ্ল্যাট নং</td>
                                    <td colspan='2'>: $house</td>
                                    <td >বাড়ি নং</td>
                                    <td colspan='2'>: $house_no</td>		
                                </tr>
                                <tr>
                                    <td >রোড নং</td>
                                    <td colspan='2'>: $road</td>
                                    <td >পোষ্ট কোড</td>
                                    <td colspan='2'>: $post_code</td>		
                                </tr>
                                <tr>
                                    <td >গ্রাম</td>
                                    <td colspan='2'>: $selected_village_name</td>	
                                    <td >পোষ্ট অফিস </td>
                                    <td colspan='2'>: $selected_post_offc_name </td>	
                                </tr>
                                <tr>
                                    <td >উপজেলা / থানা</td>
                                    <td colspan='2'>: $selected_thana_name</td>
                                    <td >জেলা</td>
                                    <td colspan='2'>: $selected_district_name</td>		
                                </tr>
                                <tr>
                                    <td >বিভাগ</td>
                                    <td colspan='2'>: $selected_division_name</td>		
                                </tr> ";
                    $result_nominee = mysql_query("SELECT * FROM $dbname.nominee WHERE cep_nominee_id = '2'");
                    while ($row = mysql_fetch_array($result_nominee)) {
                        $nominee_name = $row['nominee_name'];
                        $nominee_relation = $row['nominee_relation'];
                        $nominee_mobile = $row['nominee_mobile'];
                        $nominee_email = $row['nominee_email'];
                        $nominee_educational_background = $row['nominee_educational_background'];
                        $nominee_national_ID = $row['nominee_national_ID'];
                        $nominee_passport_ID = $row['nominee_passport_ID'];
                        $nominee_age = $row['nominee_age'];
                        $nominee_picture = $row['nominee_picture'];
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
                                    <td  rowspan='5'><img src=$nominee_picture width='140px' height='140px'/> </td>	
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

                        $result4 = mysql_query("SELECT * FROM $dbname.education WHERE cepn_id='2' and education_type='nmn' ");
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
                        $result13 = mysql_query("SELECT * FROM $dbname.address WHERE  adrs_cepng_id='2' and address_whom='nmn' and address_type='Present'");
                        $row = mysql_fetch_array($result13);
                        $address_type = $row['address_type'];
                        $house = $row['house'];
                        $house_no = $row['house_no'];
                        $village = $row['village'];
                        $post_office = $row['post_office'];
                        $road = $row['road'];
                        $address_whom = $row['address_whom'];
                        $post_code = $row['post_code'];
                        $post = $row['post'];
                        $thana_id1 = $row['Thana_idThana'];
                        $village_id = $row['village_idvillage'];
                        $post_office_id = $row['post_idpost'];
                        $result13 = mysql_query("SELECT * FROM $dbname.thana, $dbname.district, $dbname.division,$dbname.village,$dbname.post_office WHERE District_idDistrict=idDistrict AND Division_idDivision=idDivision AND idThana ='$thana_id1' AND idPost_office = '$post_office_id' AND idvillage= '$village_id'");
                        $rows = mysql_fetch_array($result13);

                        $selected_division_name = $rows['division_name'];
                        $selected_district_name = $rows['district_name'];
                        $selected_thana_name = $rows['thana_name'];
                        $selected_post_offc_name = $rows['post_offc_name'];
                        $selected_village_name = $rows['village_name'];
                        echo "<tr>
                                    <td ><font color=\"#3933CC\"><b>বর্তমান ঠিকানা</b></font></td>
                                    <td colspan='2'> </td>
                                </tr>
                                <tr>
                                    <td >বাড়ির নাম / ফ্ল্যাট নং</td>
                                    <td colspan='2'>: $house</td>
                                    <td >বাড়ি নং</td>
                                    <td colspan='2'>: $house_no</td>		
                                </tr>
                                <tr>
                                    <td >রোড নং</td>
                                    <td colspan='2'>: $road</td>
                                    <td >পোষ্ট কোড</td>
                                    <td colspan='2'>: $post_code</td>		
                                </tr>
                                <tr>
                                    <td >গ্রাম</td>
                                    <td colspan='2'>: $selected_village_name</td>	
                                    <td >পোষ্ট অফিস </td>
                                    <td colspan='2'>: $selected_post_offc_name </td>	
                                </tr>
                                <tr>
                                    <td >উপজেলা / থানা</td>
                                    <td colspan='2'>: $selected_thana_name</td>
                                    <td >জেলা</td>
                                    <td colspan='2'>: $selected_district_name</td>		
                                </tr>
                                <tr>
                                    <td >বিভাগ</td>
                                    <td colspan='2'>: $selected_division_name</td>		
                                </tr> ";
                        $result14 = mysql_query("SELECT * FROM $dbname.address WHERE  adrs_cepng_id='2' and address_whom='nmn' and address_type='Permanent'");
                        $row = mysql_fetch_array($result14);
                        $address_type = $row['address_type'];
                        $house = $row['house'];
                        $house_no = $row['house_no'];
                        $village = $row['village'];
                        $post_office = $row['post_office'];
                        $road = $row['road'];
                        $address_whom = $row['address_whom'];
                        $post_code = $row['post_code'];
                        $thana_id1 = $row['Thana_idThana'];
                        $village_id = $row['village_idvillage'];
                        $post_office_id = $row['post_idpost'];
                        $result13 = mysql_query("SELECT * FROM $dbname.thana, $dbname.district, $dbname.division,$dbname.village,$dbname.post_office WHERE District_idDistrict=idDistrict AND Division_idDivision=idDivision AND idThana ='$thana_id1' AND idPost_office = '$post_office_id' AND idvillage= '$village_id'");
                        $rows = mysql_fetch_array($result13);

                        $selected_division_name = $rows['division_name'];
                        $selected_district_name = $rows['district_name'];
                        $selected_thana_name = $rows['thana_name'];
                        $selected_post_offc_name = $rows['post_offc_name'];
                        $selected_village_name = $rows['village_name'];
                        echo "<tr>
                                    <td ><font color=\"#3933CC\"><b>স্থায়ী ঠিকানা</b></font></td>
                                    <td colspan='2'> </td>
                                </tr>
                                <tr>
                                    <td >বাড়ির নাম / ফ্ল্যাট নং</td>
                                    <td colspan='2'>: $house</td>
                                    <td >বাড়ি নং</td>
                                    <td colspan='2'>: $house_no</td>		
                                </tr>
                                <tr>
                                    <td >রোড নং</td>
                                    <td colspan='2'>: $road</td>
                                    <td >পোষ্ট কোড</td>
                                    <td colspan='2'>: $post_code</td>		
                                </tr>
                                <tr>
                                    <td >গ্রাম</td>
                                    <td colspan='2'>: $selected_village_name</td>	
                                    <td >পোষ্ট অফিস </td>
                                    <td colspan='2'>: $selected_post_offc_name </td>	
                                </tr>
                                <tr>
                                    <td >উপজেলা / থানা</td>
                                    <td colspan='2'>: $selected_thana_name</td>
                                    <td >জেলা</td>
                                    <td colspan='2'>: $selected_district_name</td>		
                                </tr>
                                <tr>
                                    <td >বিভাগ</td>
                                    <td colspan='2'>: $selected_division_name</td>		
                                </tr> ";
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