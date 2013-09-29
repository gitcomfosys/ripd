<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';


?>
<style type="text/css">
    @import "css/bush.css";
</style>
<script type="text/javascript">
    $(function a() {
        var count1 = 2;

        $('p#add_field1').click(function a() {
            if (count1 < 8) {
                $('#container_others1').append('<tr><td>পরীক্ষার নাম / ডিগ্রী ' + count1
                        + '<input class="textfield" id="field1" name="field1[]" type="text" /></td>'
                        + ' <td>পাশের সাল'
                        + '<input class="box5" id="field2" name="field2[]" type="text" /></td>'
                        + ' <td>প্রতিষ্ঠানের নাম'
                        + '<input class="textfield" id="field3" name="field3[]" type="text" /></td>'
                        + ' <td>বোর্ড / বিশ্ববিদ্যালয়'
                        + '<input class="textfield" id="field4" name="field4[]" type="text" /></td>'
                        + ' <td>জি.পি.এ / বিভাগ'
                        + '<input class="box5" id="field5" name="field5[]" type="text" /></td></tr>'
                        );
                count1 = count1 + 1;
            }
        });
    });

    $(function b() {
        var count2 = 2;

        $('p#add_field2').click(function b() {
            if (count2 < 8) {
                $('#container_others2').append('<tr><td>পরীক্ষার নাম / ডিগ্রী ' + count2
                        + '<input class="textfield" id="field1" name="n_field1[]" type="text" /></td>'
                        + ' <td> পাশের সাল'
                        + '<input class="box5" id="field2" name="n_field2[]" type="text" /></td>'
                        + ' <td>প্রতিষ্ঠানের নাম'
                        + '<input class="textfield" id="field3" name="n_field3[]" type="text" /></td>'
                        + ' <td>বোর্ড / বিশ্ববিদ্যালয়'
                        + '<input class="textfield" id="field4" name="n_field4[]" type="text" /></td>'
                        + ' <td>জি.পি.এ / বিভাগ'
                        + '<input class="box5" id="field5" name="n_field5[]" type="text" /></td></tr>'
                        );
                count2 = count2 + 1;
            }
        });
    });
</script>
<?php
if (isset($_POST['submit1'])) {
    $office_id = $_POST['powerStore_name'];
    $power_store_name = $_POST['powerStore_name'];
    $proprietor_name = $_POST['proprietor_name'];
    $proprietor_fatherName = $_POST['proprietor_fatherName'];
    $proprietor_motherName = $_POST['proprietor_motherName'];
    $proprietor_spouseName = $_POST['proprietor_spouseName'];
    $proprietor_occupation = $_POST['proprietor_occupation'];
    $proprietor_religion = $_POST['proprietor_religion'];
    $proprietor_natonality = $_POST['proprietor_natonality'];
    $proprietor_mobile = $_POST['proprietor_mobile'];
    $proprietor_email = $_POST['proprietor_email'];
    $dob_day = $_POST['date'];
    $dob_month = $_POST['month'];
    $dob_year = $_POST['year'];
    $dob = $dob_year . "-" . $dob_month . "-" . $dob_day; //Concating different strings of date written in php function
    $proprietor_national_ID = $_POST['proprietor_national_ID'];
    $proprietor_passport = $_POST['proprietor_passport'];
    //Current Address Information
    $Thana_idThana = $_POST['c_thana_name'];
    $address_house = $_POST['c_house'];
    $address_village = $_POST['c_village'];
    $adresss_post_road = $_POST['c_road'];
    $adress_post_code = $_POST['c_post_code'];
    //Permanent Address Information
    $p_Thana_idThana = $_POST['p_thana_name_1'];
    $p_address_house = $_POST['p_house'];
    $p_address_village = $_POST['p_village'];
    $p_adresss_post_road = $_POST['p_road'];
    $p_adress_post_code = $_POST['p_post_code'];
    //Update the Power Store Table   
    if(!empty($proprietor_name)){
        //insert Into cfs user
        $sql_cfs_user = mysql_query("INSERT INTO $dbname.cfs_user
                                         (account_name, account_number, account_open_date, mobile, email, Account_type_idAccount_type, overall_access) 
                                          VALUES('$proprietor_name','AC-68687', NOW(),'$proprietor_mobile', '$proprietor_email', '2', 'gjghgjk')");
        //Update the row of power_store
        $sql_update_proprietor = mysql_query("UPDATE $dbname.power_store SET proprietor_fatherName='$proprietor_fatherName', proprietor_motherName='$proprietor_motherName', 
                                                proprietor_spouseName='$proprietor_spouseName', proprietor_occupation='$proprietor_occupation', proprietor_religion='$proprietor_religion', proprietor_natonality='$proprietor_natonality', 
                                                proprietor_national_ID='$proprietor_national_ID', proprietor_passport='$proprietor_passport', proprietor_date_of_birth='$dob', 
                                                proprietor_birth_certificate_No='Birthday Certificate', proprietor_educational_background='মেট্রিক',
                                                Office_idOffice='1' WHERE powerStore_name='power store 1' AND 
                                                powerStore_accountNumber='AC-68687' ");
        $sql_select_proprieter_id=  mysql_query("SELECT * FROM $dbname.power_store WHERE powerStore_name='power store 1' AND 
                                                      powerStore_accountNumber='AC-68687'");
        $row_sql_select_proprieter_id=  mysql_fetch_array($sql_select_proprieter_id);
        $power_store_id=$row_sql_select_proprieter_id['idPower_store'];

    //$power_store_id = mysql_insert_id(); //Contains the last inserted id(power store id)
    //Insert Into address table where address_type=Present
    $sql_insert_current_address = mysql_query("INSERT INTO $dbname.address 
                                    (address_type, house, village, post_office, road, address_whom, Thana_idThana, post_code, adrs_cepng_id)
                                     VALUES ('Present', '$address_house', '$address_village', '$adresss_post_road', '$adresss_post_road', 'pwr', '$Thana_idThana', '$adress_post_code', '$power_store_id')");
    //Insert into address table where address_type=Permanent
    $sql_insert_present_address = mysql_query("INSERT INTO $dbname.address 
                                    (address_type, house, village, post_office, road, address_whom, Thana_idThana, post_code, adrs_cepng_id)
                                     VALUES ('Permanent', '$p_address_house', '$p_address_village', '$p_adresss_post_road', '$p_adresss_post_road', 'pwr', '$p_Thana_idThana', '$p_adress_post_code', '$power_store_id')");
    }
    //Successful Input Condition
    if ($sql_update_proprietor && $sql_insert_current_address && $sql_insert_present_address) {
        $msg = "***************সাক্‌ সেস*************** ";
    } else {
        $msg = "এরর";
    }
}
//For Form 2
elseif (isset($_POST['submit2'])) {
    $nominee_name = $_POST['nominee_name'];
    $nominee_age = $_POST['nominee_age'];
    $nominee_relation = $_POST['nominee_relation'];
    $nominee_mobile = $_POST['nominee_mobile'];
    $nominee_email = $_POST['nominee_email'];
    $nominee_national_ID = $_POST['nominee_national_ID'];
    $nominee_passport_ID = $_POST['nominee_passport_ID'];
    //Current Address Information
    $n_Thana_idThana = $_POST['n_c_thana_name'];
    $n_address_house = $_POST['n_c_house'];
    $n_address_village = $_POST['n_c_village'];
    $n_adresss_post_road = $_POST['n_c_road'];
    $n_adress_post_code = $_POST['n_c_post_code'];
    //Permanent Address Information
    $n_p_Thana_idThana = $_POST['n_p_thana_name'];
    $n_p_address_house = $_POST['n_p_house'];
    $n_p_address_village = $_POST['n_p_village'];
    $n_p_adresss_post_road = $_POST['n_p_road'];
    $n_p_adress_post_code = $_POST['n_p_post_code'];
    $sql_select_proprieter_id=  mysql_query("SELECT * FROM $dbname.power_store WHERE powerStore_name='power store 1' AND 
                                                      powerStore_accountNumber='AC-68687'");
        $row_sql_select_proprieter_id=  mysql_fetch_array($sql_select_proprieter_id);
        $power_store_id=$row_sql_select_proprieter_id['idPower_store'];
    //echo"power_store_id".$power_store_id;
   //Insert Into Nominee table
    if(!empty($nominee_name)){
    $sql_nominee = mysql_query("INSERT INTO $dbname.nominee(nominee_name, nominee_picture, nominee_relation, nominee_mobile,
                                       nominee_email, nominee_national_ID, nominee_age, nominee_passport_ID, cep_type, cep_nominee_id) 
                                       VALUES('$nominee_name','nominee picture','$nominee_relation','$nominee_mobile','$nominee_email','$nominee_national_ID',
                                       '$nominee_age','$nominee_passport_ID','pwr','$power_store_id')");
    $nominee_id = mysql_insert_id(); //Contains the last inserted id (nominee_id)
    //Insert into Addrees table where addresstype=Present 
    $n_sql_insert_current_address = mysql_query("INSERT INTO $dbname.address(address_type, house, village, post_office, road, address_whom, Thana_idThana, post_code,adrs_cepng_id) 
                                                         VALUES('Present','$n_address_house','$n_address_village', '$n_adresss_post_road','$n_adresss_post_road',
                                                         'nmn','$n_Thana_idThana','$n_adress_post_code','$nominee_id')");
    //Insert Into Address table where addresstype=Permanent
    $n_p_sql_insert_current_address = mysql_query("INSERT INTO $dbname.address(address_type, house, village, post_office, road, address_whom, Thana_idThana, post_code,adrs_cepng_id) 
                                                         VALUES('Permanent','$n_p_address_house','$n_p_address_village', '$n_p_adresss_post_road','$n_p_adresss_post_road',
                                                         'nmn','$n_p_Thana_idThana','$n_p_adress_post_code','$nominee_id')");
    }
    if ($sql_nominee && $n_sql_insert_current_address && $n_p_sql_insert_current_address) {
        $msgn = "***************সাক্‌ সেস***************";
    } else {
        $msgn = "এরর";
    }
} 
//For Form 3
elseif (isset($_POST['submit3'])) {
    //Propeitar
    $field1 = $_POST['field1'];
    $field2 = $_POST['field2'];
    $field3 = $_POST['field3'];
    $field4 = $_POST['field4'];
    $field5 = $_POST['field5'];
    //Nominee
    $n_field1 = $_POST['n_field1'];
    $n_field2 = $_POST['n_field2'];
    $n_field3 = $_POST['n_field3'];
    $n_field4 = $_POST['n_field4'];
    $n_field5 = $_POST['n_field5'];
    for ($i = 0; $i < 8; $i++) {
        //Insert infromation into education table wheretype=pwr
        $exam_name = $field1[$i];
        $passing_year = $field2[$i];
        $institute_name = $field3[$i];
        $board = $field4[$i];
        $gpa = $field5[$i];
        //Insert infromation into education table wheretype=nmn
        $exam_name_nominee = $n_field1[$i];
        $passing_year_nominee = $n_field2[$i];
        $institute_name_nominee = $n_field3[$i];
        $board_nominee = $n_field4[$i];
        $gpa_nominee = $n_field5[$i];
        if (!empty($exam_name)) {
            //Insert into educaiton table where educaiton type=pwr           
            $sql_pwr_edu_insert = mysql_query("INSERT INTO $dbname.education (exam_name, passing_year, institute_name, board, gpa, education_type, cepn_id) 
                                                      VALUES('$exam_name','$passing_year','$institute_name','$board','$gpa', 'pwr','1')");
            //Checks whetherthe information of the in nominee education field is empty or not
            if (!empty($exam_name_nominee)) {
                //Insert into educaiton table where educaiton type=nmn
                $sql_nmn_edu_insert = mysql_query("INSERT INTO $dbname.education (exam_name, passing_year, institute_name, board, gpa, education_type, cepn_id) 
                                                VALUES('$exam_name_nominee','$passing_year_nominee','$institute_name_nominee','$board_nominee','$gpa_nominee', 'nmn','1')");
            }
            if ($sql_pwr_edu_insert && $sql_nmn_edu_insert) {
                $msge = "***************সাক্‌ সেস*************** ";
            } else {
                $msge = "এরর";
            }
        } 
        else {
            "";
        }
    }
} 
//Form Number 4
elseif (isset($_POST['submit4'])) {
    $prop_scanDoc_national_id = $_POST['scanDoc_national_id'];
    $prop_scanDoc_birth_certificate = $_POST['prop_scanDoc_birth_certificate'];
    $prop_scanDoc_chairman_certificate = $_POST['prop_scanDoc_chairman_certificate'];
    $scanDoc_ssc = $_POST['scanDoc_ssc'];
    $scanDoc_hsc = $_POST['scanDoc_hsc'];
    $scanDoc_onars = $_POST['scanDoc_onars'];
    $scanDoc_masters = $_POST['scanDoc_masters'];
    $scanDoc_other = $_POST['scanDoc_other'];
    //Update Infromation into poser table
    $slq_images_pwr = mysql_query("UPDATE $dbname.power_store SET prop_scanDoc_national_id='$prop_scanDoc_national_id', prop_scanDoc_birth_certificate='$prop_scanDoc_birth_certificate'
                                          ,prop_scanDoc_chairman_certificate='$prop_scanDoc_chairman_certificate' WHERE `idPower_store`='1'");
    //Insert Into Education Table
    $sql_images_scan_doc = mysql_query("INSERT INTO $dbname.employee_certificate_scandoc_extra (scanDoc_ssc, scanDoc_hsc, scanDoc_onars, scanDoc_masters, scanDoc_other, emp_type,emp_id)
                                                 VALUES('$scanDoc_ssc','$scanDoc_hsc','$scanDoc_onars','$scanDoc_masters','$scanDoc_other', 'pwr','1')");
}
?>

<!-- *********************************Form Number 1******************************-->
<div class="column6">
    <div class="main_text_box">
        <div style="padding-left:110px;"><a href="index.php?apps=CA"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">মূল তথ্য</a></li><li class="current"><a href="#02">নমিনির তথ্য</a></li><li class="current"><a href="#03">শিক্ষাগত যোগ্যতা</a></li><li class="current"><a href="#04">প্রয়োজনীয় ডকুমেন্টস</a></li>
            </ul>
        </div>  

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">  
                    <tr><th colspan="4" style="text-align: center" colspan="2"><h1>পাওয়ার স্টোরের একাউন্ট তৈরির ফর্ম</h1></th></tr>
                    <tr><td colspan="4" ></td></tr>
                    <tr><td colspan="4" ></td></tr>
                        <?php
                        if ($msg != "") {
                            echo '<tr><td colspan="4" style="text-allign: center; color: red; font-size: 25px"><blink>'.$msg.'</blink></td></tr>';
                        }
                        ?>
                    <tr>
                        <td>পাওয়ার স্টোরের নাম</td>
                        <td>:  <input class="box" type="text" id="powerStore_accountNumber" name="powerStore_accountNumber" /></td>	                             

                        </select>	
                        </td>
                        <td >একাউন্ট নং </td>
                        <td>:  <input class="box" type="text" id="powerStore_accountNumber" name="powerStore_accountNumber" /></td>	
                    </tr>
                    <tr>
                        <td colspan="4" ><hr /></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="hseparator"  ></td>
                    </tr>
                    <tr>	
                        <td  colspan="4" style =" font-size: 14px"><b>ব্যাক্তিগত  তথ্য</b></td>                            
                    </tr>
                    <tr>
                        <td  >স্বত্বাধিকারীর নাম</td>
                        <td>:  <input  class="box" type="text" id="proprietor_name" name="proprietor_name" /></td>                                  
                        <td   font-weight="bold" >পাসপোর্ট ছবি </td>
                        <td >:   <input class="box" type="file" id="scanDoc_picture" name="scanDoc_picture" style="font-size:10px;"/></td>             
                    </tr>
                    <tr>
                        <td >বাবার নাম </td>
                        <td>:  <input class="box" type="text" id="proprietor_fatherName" name="proprietor_fatherName" /></td>	
                        <td  font-weight="bold" >স্বাক্ষর</td>
                        <td >:  <input class="box" type="file" id="scanDoc_signature" name="scanDoc_signature"style="font-size:10px;" /> </td>
                    </tr>
                    <tr>
                        <td >মার নাম </td>
                        <td>:  <input class="box" type="text" id="proprietor_motherName" name="proprietor_motherName"/></td>			
                    </tr>
                    <tr>
                        <td >দম্পতির নাম  </td>
                        <td>:  <input class="box" type="text" id="proprietor_spouseName" name="proprietor_spouseName" /> </td>			
                    </tr>
                    <tr>
                        <td >পেশা</td>
                        <td>:  <input class="box" type="text" id="proprietor_occupation" name="proprietor_occupation" /></td>                         
                    </tr>
                    <tr>
                        <td>ধর্ম </td>
                        <td>:  <input  class="box" type="text" id="proprietor_religion" name="proprietor_religion" /></td>	                             
                    </tr>
                    <tr>
                        <td >জাতীয়তা</td>
                        <td>:  <input class="box" type="text" id="proprietor_natonality" name="proprietor_natonality" /> </td>			
                    </tr>
                    <tr>
                        <td >মোবাইল নং</td>
                        <td>:  <input class="box" type="text" id="proprietor_mobile" name="proprietor_mobile"/></td>			
                    </tr>
                    <tr>
                        <td >ইমেল</td>
                        <td>:  <input class="box" type="text" id="proprietor_email" name="proprietor_email" /></td>			
                    </tr>
                    <tr>
                        <td>জন্মতারিখ</td>
                        <td >:   <select  class="box1"  name="date" style =" font-size: 11px">
                                <option >দিন</option>
                                <?php
                                for ($i = 1; $i <= 31; $i++) {
                                    $date = english2bangla($i);
                                    echo "<option value=1>" . $date . "</option>";
                                }
                                ?>
                            </select>				

                            <select class="box1" name="month" style =" font-size: 11px">
                                <option >মাস</option>
                                <option value="1">জানুয়ারি</option>
                                <option value="2">ফেব্রুয়ারী</option>
                                <option value="3">মার্চ</option>
                                <option value="4">এপ্রিল </option>
                                <option value="5">মে</option>
                                <option value="6">জুন</option>
                                <option value="7">জুলাই</option>
                                <option value="8">আগষ্ট</option>
                                <option value="9">সেপ্টেম্বর</option>
                                <option value="10">অক্টোবর </option>
                                <option value="11">নভেম্বর</option>
                                <option value="12">ডিসেম্বর</option> 
                            </select>

                            <select class="box1" id="year" name="year" style =" font-size: 11px" >
                                <option>বছর </option>
                                <?php
                                for ($i = 2020; $i >= 1900; $i--) {
                                    $year = english2bangla($i);
                                    echo "<option value='$i'>" . $year . "</option>";
                                }
                                ?>
                            </select>
                        </td>			
                    </tr>                     
                    <td >জাতীয় পরিচয়পত্র নং</td>
                    <td>:  <input class="box" type="text" id="proprietor_national_ID" name="proprietor_national_ID" /></td>			
                    </tr>
                    <tr>
                        <td >পাসপোর্ট আইডি নং</td>
                        <td>:  <input class="box" type="text" id="proprietor_passport" name="proprietor_passport" /></td>			
                    </tr>
                    <tr>
                        <td >জন্ম সনদ নং</td>
                        <td>:  <input class="box" type="text" id="proprietor_birth_certificate_No" name="proprietor_birth_certificate_No" /></td>			
                    </tr>   
                    <tr>
                        <td colspan="4" ><hr /></td>
                    </tr>
                    <tr>
                        <td  colspan="2" style =" font-size: 14px"><b>বর্তমান ঠিকানা </b></td>                            
                        <td colspan="2" style =" font-size: 14px"><b> স্থায়ী ঠিকানা   </b></td>
                    </tr>
                    <tr>
                        <td  >বাড়ির নাম / ফ্ল্যাট নং</td>
                        <td >:  <input class="box" type="text" id="house" name="c_house" /></td>
                        <td  >বাড়ির নাম / ফ্ল্যাট নং</td>
                        <td >:  <input class="box" type="text" id="house" name="p_house" /></td>
                    </tr>
                    <tr>
                        <td  >গ্রাম / বাড়ি নং</td>
                        <td >:  <input class="box" type="text" id="village" name="c_village" /></td>
                        <td >গ্রাম / বাড়ি নং</td>
                        <td>:  <input class="box" type="text" id="village" name="p_village" /></td>
                    </tr>
                    <tr>
                        <td >পোষ্ট / রোড নং</td>
                        <td>:  <input class="box" type="text" id="road" name="c_road" /> </td>
                        <td >পোষ্ট / রোড নং</td>
                        <td>:  <input class="box" type="text" id="road" name="p_road" /></td>
                    </tr>
                    <tr>
                        <td >পোষ্ট কোড</td>
                        <td>:  <input class="box" type="text" id="post_code" name="c_post_code" /></td>
                        <td >পোষ্ট কোড</td>
                        <td>:  <input class="box" type="text" id="post_code" name="p_post_code" /></td>
                    </tr>
                    <tr>
                        <td>উপজেলা / থানা</td>
                        <td >:  <select  class="box2"  name="c_thana_name" style =" font-size: 11px">
                                <?php
                                $sql_thana = mysql_query("SELECT * FROM  " . $dbname . ".thana");
                                while ($row_thana = mysql_fetch_array($sql_thana)) {
                                    $thana_name = $row_thana['thana_name'];
                                    $thana_id = $row_thana['idThana'];
                                    echo "<option style='width: 96%'value='$thana_id'>$thana_name</option>";
                                }
                                ?></slelect></td>
                        <td >উপজেলা / থানা</td>
                        <td >:  <select  class="box2"  name="p_thana_name_1" style =" font-size: 11px">
                                <?php
                                $sql_thana1 = mysql_query("SELECT * FROM  " . $dbname . ".thana");
                                while ($row_thana = mysql_fetch_array($sql_thana1)) {
                                    $thana_name = $row_thana['thana_name'];
                                    $thana_id = $row_thana['idThana'];
                                    echo "<option style='width: 96%'value='$thana_id'>$thana_name</option>";
                                }
                                ?>
                            </slelect></td>
                    </tr>
                    <tr>
                        <td >জেলা</td>
                        <td>:  <input class="box" type="text" id="district_name" name="c_district_name" /></td>
                        <td >জেলা</td>
                        <td>:  <input class="box" type="text" id="district_name" name="p_district_name" /></td>
                    </tr>
                    <tr>
                        <td >বিভাগ</td>
                        <td>:  <input class="box" type="text" id="division_name" name="c_division_name" /></td>
                        <td >বিভাগ</td>
                        <td>:  <input class="box" type="text" id="division_name" name="p_division_name" /></td>
                    </tr>        
                    <tr>                    
                        <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit1" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>
                </table>
                </fieldset>
            </form>
        </div>

        <!--************************Form Number 2*************************-->
        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="4" style="text-align: center" colspan="2"><h1>পাওয়ার স্টোরের একাউন্ট তৈরির ফর্ম</h1></th></tr>
                    <tr><td colspan="4" ></td><?php
                                if ($msgn != "") {
                                    echo '<tr> <td colspan="2" style="text-allign: center; color: red; font-size: 25px"><blink>'.$msgn.'</blink></td></tr>';
                                }
                                ?>
                    </tr>
                    <tr>
                        <td >নমিনির নাম</td>
                        <td>:  <input class="box" type="text" id="nominee_name" name="nominee_name" /></td>
                        <td   font-weight="bold" >পাসপোর্ট ছবি </td>
                        <td >:   <input class="box" type="file" id="scanDoc_picture" name="scanDoc_picture" style="font-size:10px;"/></td> 
                    </tr>     
                    <tr>
                        <td >বয়স</td>
                        <td>:  <input class="box" type="text" id="nominee_age" name="nominee_age" /></td>
                    </tr>     
                    <tr>
                        <td >সম্পর্ক </td>
                        <td>:  <input class="box" type="text" id="nominee_relation" name="nominee_relation" /> </td>			
                    </tr>
                    <tr>
                        <td >মোবাইল নং</td>
                        <td>:  <input class="box" type="text" id="nominee_mobile" name="nominee_mobile" /></td>			
                    </tr>
                    <tr>
                        <td >ইমেইল</td>
                        <td>:  <input class="box" type="text" id="nominee_email" name="nominee_email" /></td>			
                    </tr>
                    <tr>
                        <td >জাতীয় পরিচয়পত্র নং</td>
                        <td>:  <input class="box" type="text" id="nominee_national_ID" name="nominee_national_ID" /></td>			
                    </tr>
                    <tr>
                        <td >পাসপোর্ট আইডি নং</td>
                        <td>:  <input class="box" type="text" id="nominee_passport_ID" name="nominee_passport_ID" /></td>			
                    </tr> 
                    <tr>
                        <td colspan="4" ><hr /></td>
                    </tr>
                    <tr>	
                        <td  colspan="2" style =" font-size: 14px"><b>বর্তমান ঠিকানা </b></td>                            
                        <td colspan="2" style =" font-size: 14px"><b> স্থায়ী ঠিকানা   </b></td>
                    </tr>
                    <tr>
                        <td  >বাড়ির নাম / ফ্ল্যাট নং</td>
                        <td >:  <input class="box" type="text" id="house" name="n_c_house" /></td>
                        <td  >বাড়ির নাম / ফ্ল্যাট নং</td>
                        <td >:  <input class="box" type="text" id="house" name="n_p_house" /></td>
                    </tr>
                    <tr>
                        <td  >গ্রাম / বাড়ি নং</td>
                        <td >:  <input class="box" type="text" id="village" name="n_c_village" /></td>
                        <td >গ্রাম / বাড়ি নং</td>
                        <td>:  <input class="box" type="text" id="village" name="n_p_village" /></td>
                    </tr>
                    <tr>
                        <td >পোষ্ট / রোড নং</td>
                        <td>:  <input class="box" type="text" id="road" name="n_c_road" /> </td>
                        <td >পোষ্ট / রোড নং</td>
                        <td>:  <input class="box" type="text" id="road" name="n_p_road" /></td>
                    </tr>
                    <tr>
                        <td >পোষ্ট কোড</td>
                        <td>:  <input class="box" type="text" id="post_code" name="n_c_post_code" /></td>
                        <td >পোষ্ট কোড</td>
                        <td>:  <input class="box" type="text" id="post_code" name="n_p_post_code" /></td>
                    </tr>
                    <tr>
                        <td>উপজেলা / থানা</td>
                        <td>:<select  class="box2"  name="n_c_thana_name" style =" font-size: 11px">
                                <?php
                                $sql_n_thana = mysql_query("SELECT * FROM  " . $dbname . ".thana");
                                while ($row_n_thana = mysql_fetch_array($sql_n_thana)) {
                                    $thana_n_name = $row_n_thana['thana_name'];
                                    $thana_n_id = $row_n_thana['idThana'];
                                    echo "<option style='width: 96%'value='$thana_n_id'>$thana_n_name</option>";
                                }
                                ?></slelect></td>
                        <td>উপজেলা / থানা</td>
                        <td>:  <select  class="box2"  name="n_p_thana_name" style =" font-size: 11px"> 
                                <?php
                                $sql_n_thana1 = mysql_query("SELECT * FROM  " . $dbname . ".thana");
                                while ($row_n_thana = mysql_fetch_array($sql_n_thana1)) {
                                    $thana_n_name = $row_n_thana['thana_name'];
                                    $thana_n_id = $row_n_thana['idThana'];
                                    echo "<option style='width: 96%'value='$thana_n_id'>$thana_n_name</option>";
                                }
                                ?>
                            </slelect></td>
                    </tr>
                    <tr>
                        <td>জেলা</td>
                        <td>:  <input class="box" type="text" id="district_name" name="n_c_district_name" /></td>
                        <td>জেলা</td>
                        <td>:  <input class="box" type="text" id="district_name" name="n_p_district_name" /></td>
                    </tr>
                    <tr>
                        <td>বিভাগ</td>
                        <td>:  <input class="box" type="text" id="division_name" name="n_c_division_name" /></td>
                        <td >বিভাগ</td>
                        <td>:  <input class="box" type="text" id="division_name" name="n_p_division_name" /></td>
                    </tr>        
                    <tr>                    
                        <td colspan="4" style="padding-left: 245px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit2" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset2" value="রিসেট করুন" /></td>                           
                    </tr>  
                </table>
                </fieldset>
            </form>
        </div> 

        <!--*************************Form Number 3************************ -->
        <div>
            <h2><a name="03" id="03"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">        
                    <tr><th colspan="4" style="text-align: center" colspan="2"><h1>পাওয়ার স্টোরের একাউন্ট তৈরির ফর্ম</h1></th></tr>
                    <tr><td colspan="4" ></td>
                        <?php
                        if ($msge != "") {
                            echo "<tr>
                                    <td colspan=\"2\" style=\"text-allign: center\"> <font color='green'>$msge</td></font> 
                                     </tr>";
                        }
                        ?>
                    </tr>   
                    <tr>
                        <td colspan="2" >                        
                    <tr>	
                        <td  colspan="2"   style =" font-size: 14px"><b>স্বত্বাধিকারীর শিক্ষাগত যোগ্যতা</b></td>                                                
                    </tr>
                    <tr>                      
                        <td>
                            <table id="container_others1">
                                <tr>
                                    <td>পরীক্ষার নাম / ডিগ্রী  1<input class="textfield" id="field1" name="field1[]" type="text" /></td>
                                    <td>পশের সাল<input class="box5" id="field2" name="field2[]" type="text" /></td>
                                    <td>প্রতিষ্ঠানের নাম <input class="textfield" id="field3" name="field3[]" type="text" /></td>
                                    <td>বোর্ড / বিশ্ববিদ্যালয়<input class="textfield" id="field4" name="field4[]" type="text" /></td>
                                    <td>জি.পি.এ / বিভাগ <input class="box5" id="field5" name="field5[]" type="text" /></td>
                                    <td><p id="add_field1"><a href="#"><br/><img alt="Add Field" width="20px" height="18px" src="images/addSign.png"></a></p></td>
                                </tr>
                            </table>
                        </td>
                    </tr>      
                    <tr>
                        <td colspan="4" ><hr /></td>
                    </tr>
                    <tr>	
                        <td  colspan="2"   style =" font-size: 14px"><b>নমিনির শিক্ষাগত যোগ্যতা</b></td>                                                
                    </tr>
                    <tr>                      
                        <td>
                            <table id="container_others2">
                                <tr>
                                    <td>পরীক্ষার নাম / ডিগ্রী  1<input class="textfield" id="field1" name="n_field1[]" type="text" /></td>
                                    <td>পশের সাল<input class="box5" id="field2" name="n_field2[]" type="text" /></td>
                                    <td>প্রতিষ্ঠানের নাম <input class="textfield" id="field3" name="n_field3[]" type="text" /></td>
                                    <td>বোর্ড / বিশ্ববিদ্যালয়<input class="textfield" id="field4" name="n_field4[]" type="text" /></td>
                                    <td>জি.পি.এ / বিভাগ <input class="box5" id="field5" name="n_field5[]" type="text" /></td>
                                    <td><p id="add_field2"><a href="#"><br/><img alt="Add Field" width="20px" height="18px" src="images/addSign.png"></a></p></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>                    
                        <td colspan="4" style="padding-left: 290px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit3" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>
                    </td>
                    </tr> 
                </table>
                </fieldset>
            </form>
        </div>

        <!--*************************Form Number 4************************ -->

        <div>
            <h2><a name="04" id="04"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">         
                    <tr><th colspan="4" style="text-align: center" colspan="2"><h1>পাওয়ার স্টোরের একাউন্ট তৈরির ফর্ম</h1></th></tr>
                    <tr><td colspan="4" ></td></tr>    
                    <tr>	
                        <td  colspan="2" style =" font-size: 14px"><b>প্রয়োজনীয় ডকুমেন্টস </b></td>                            
                    </tr>     
                    <tr>	
                        <td  style="width: 103px;" font-weight="bold" > এস.এস.সির সার্টিফিকেট</td>
                        <td>:  <input class="box" type="file" id="scanDoc_national_id" name="scanDoc_ssc" style="font-size:10px;"/></td>
                        <td  font-weight="bold" > জাতীয় পরিচয়পত্র</td>
                        <td>:  <input class="box" type="file" id="scanDoc_national_id" name="scanDoc_national_id" style="font-size:10px;"/></td>
                    </tr>
                    <tr>	
                        <td  font-weight="bold" style="width: 112px;">এইচ.এস.সির সার্টিফিকেট</td>
                        <td>:  <input class="box" type="file" id="scanDoc_national_id" name="scanDoc_hsc" style="font-size:10px;"/></td>
                        <td  font-weight="bold" >জন্ম সনদ</td>
                        <td>:  <input class="box" type="file" id="scanDoc_national_id" name="prop_scanDoc_birth_certificate" style="font-size:10px;"/></td>
                    </tr>
                    <tr>	
                        <td  font-weight="bold" >অনার্সের সার্টিফিকেট</td>
                        <td>:  <input class="box" type="file" id="scanDoc_national_id" name="scanDoc_onars" style="font-size:10px;"/></td>
                        <td  font-weight="bold" >চারিত্রিক সনদ</td>
                        <td>:  <input class="box" type="file" id="scanDoc_national_id" name="prop_scanDoc_chairman_certificate" style="font-size:10px;"/></td>
                    </tr>
                    <tr>	
                        <td  font-weight="bold" >মাস্টার্সের  সার্টিফিকেট</td>
                        <td>:  <input class="box" type="file" id="scanDoc_national_id" name="scanDoc_masters" style="font-size:10px;"/></td>
                        <td  font-weight="bold" >অন্যান্য </td>
                        <td>:  <input class="box" type="file" id="scanDoc_national_id" name="scanDoc_other" style="font-size:10px;"/></td>
                    </tr>
                    <tr>                    
                        <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit4" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>
                </table>
                </fieldset>
            </form>
        </div> 
    </div>         
    <?php include_once 'includes/footer.php'; ?>

