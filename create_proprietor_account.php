<?php
error_reporting(0);
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include_once 'includes/header.php';
include_once 'includes/MiscFunctions.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<script type="text/javascript" src="javascripts/division_district_thana.js"></script>
<script type="text/javascript" src="javascripts/jquery-1.4.3.min.js"></script>
<script type="text/javascript">    
    $('.del2').live('click',function(){
        $(this).parent().parent().remove();
    });
    $('.add2').live('click',function()
    {var count3 = 2;
        if(count3<6){
            var appendTxt= "<tr> <td><input class='textfield'  name='e_ex_name[]' type='text' /></td><td><input class='box5'  name='e_pass_year[]' type='text' /></td><td><input class='textfield'  name='e_institute[]' type='text' /></td><td><input class='textfield'  name='e_board[]' type='text' /></td><td><input class='box5' name='e_gpa[]' type='text' /></td><td style='padding-right: 3px;'><input type='button' class='del2' /></td><td>&nbsp;<input type='button' class='add2' /></td></tr>";
            $("#container_others32:last").after(appendTxt);          
        }  
        count3 = count3 + 1;        
    })
          
    $('.del3').live('click',function(){
        $(this).parent().parent().remove();
    });
    $('.add3').live('click',function()
    {var count4 = 2;
        if(count4<6){
            var appendTxt= "<tr> <td><input class='textfield'  name='n_ex_name[]' type='text' /></td><td><input class='box5'  name='n_pass_year[]' type='text' /></td><td><input class='textfield'  name='n_institute[]' type='text' /></td><td><input class='textfield'  name='n_board[]' type='text' /></td><td><input class='box5' name='n_gpa[]' type='text' /></td><td style='padding-right: 3px;'><input type='button' class='del3' /></td><td>&nbsp;<input type='button' class='add3' /></td></tr>";
            $("#container_others33:last").after(appendTxt);           
        }  
        count4 = count4 + 1;        
    })        
</script>
<?php
if (isset($_POST['submit1'])) {
    $prop_father_name = $_POST['prop_father_name'];
    $prop_motherName = $_POST['prop_motherName'];
    $prop_spouseName = $_POST['prop_spouseName'];
    $prop_occupation = $_POST['prop_occupation'];
    $prop_religion = $_POST['prop_religion'];
    $prop_natonality = $_POST['prop_natonality'];
    $prop_nationalID_no = $_POST['prop_nationalID_no'];
    $prop_passportID_no = $_POST['prop_passportID_no'];
    $prop_birth_certificate_no = $_POST['prop_birth_certificate_no'];
    $dob_day = $_POST['date'];
    $dob_month = $_POST['month'];
    $dob_year = $_POST['year'];
    $dob = $dob_year . "-" . $dob_month . "-" . $dob_day;
    // picture, sign, finger print
    $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
    $extension = end(explode(".", $_FILES["image"]["name"]));
    $image_name = "picture" . "_" . $_FILES["image"]["name"];
    $image_path = "pic/" . $image_name;
    if (($_FILES["image"]["size"] < 999999999999) && in_array($extension, $allowedExts)) {
        move_uploaded_file($_FILES["image"]["tmp_name"], "pic/" . $image_name);
    } else {
        echo "Invalid file format.";
    }

    $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
    $extension = end(explode(".", $_FILES["scanDoc_signature"]["name"]));
    $sign_name = "signature" . "_" . $_FILES["scanDoc_signature"]["name"];
    $sing_path = "sign/" . $sign_name;
    if (($_FILES["scanDoc_signature"]["size"] < 999999999999) && in_array($extension, $allowedExts)) {
        move_uploaded_file($_FILES["scanDoc_signature"]["tmp_name"], "sign/" . $sign_name);
    } else {
        echo "Invalid file format.";
    }

    $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
    $extension = end(explode(".", $_FILES["scanDoc_finger_print"]["name"]));
    $finger_name = "fingerprint" . "_" . $_FILES["scanDoc_finger_print"]["name"];
    $finger_path = "fingerprints/" . $finger_name;
    if (($_FILES["scanDoc_finger_print"]["size"] < 999999999999) && in_array($extension, $allowedExts)) {
        move_uploaded_file($_FILES["scanDoc_finger_print"]["tmp_name"], "fingerprints/" . $finger_name);
    } else {
        echo "Invalid file format.";
    }
    $sql_update_proprietor = mysql_query("UPDATE $dbname.proprietor_account SET prop_father_name='$prop_father_name', prop_motherName='$prop_motherName', prop_spouseName='$prop_spouseName', 
                                                        prop_occupation='$prop_occupation', prop_religion='$prop_religion', prop_natonality='$prop_natonality', prop_nationalID_no='$prop_nationalID_no', 
                                                        prop_passportID_no='$prop_passportID_no', prop_date_of_birth='$dob', prop_birth_certificate_no='$prop_birth_certificate_no',  
                                                        prop_scanDoc_picture='$image_path', prop_scanDoc_signature='$sing_path',  prop_scanDoc_finger_print='$finger_path'
                                                        WHERE cfs_user_idUser='4' AND Office_idOffice='2' ");
      
    $result = mysql_query("Select  * from $dbname.proprietor_account where cfs_user_idUser='4'");
    $proprietor_id = mysql_fetch_array($result);
    $prop = $proprietor_id['idpropaccount'];                 
    //proprietor's Current Address Infromation
    $p_Village_idVillage = $_POST['village_id1'];
    $p_Post_idPost = $_POST['post_id1'];
    $p_Thana_idThana = $_POST['thana_id1'];
    $p_house = $_POST['p_house'];
    $p_house_no = $_POST['p_house_no'];
    $p_road = $_POST['p_road'];
    $p_post_code = $_POST['p_post_code'];
    //proprietor's Permanent Address information
    $pp_Village_idVillage = $_POST['village_id2'];
    $pp_Post_idPost = $_POST['post_id2'];
    $pp_Thana_idThana = $_POST['thana_id2'];
    $pp_house = $_POST['pp_house'];
    $pp_house_no = $_POST['pp_house_no'];
    $pp_road = $_POST['pp_road'];
    $pp_post_code = $_POST['pp_post_code'];    
   //address_type=Present
    $sql_p_insert_current_address = mysql_query("INSERT INTO $dbname.address 
                                    (address_type, house, house_no, road, address_whom, post_code,Thana_idThana, post_idpost, village_idvillage ,adrs_cepng_id)
                                     VALUES ('Present', '$p_house', '$p_house_no', '$p_road', 'pwr', '$p_post_code','$p_Thana_idThana','$p_Post_idPost', '$p_Village_idVillage', '$prop')");
    //address_type=Permanent
    $sql_pp_insert_permanent_address = mysql_query("INSERT INTO $dbname.address 
                                    (address_type, house, house_no, road, address_whom, post_code,Thana_idThana,  post_idpost, village_idvillage ,adrs_cepng_id)
                                     VALUES ('Permanent', '$pp_house', '$pp_house_no', '$pp_road', 'pwr', '$pp_post_code','$pp_Thana_idThana', '$pp_Post_idPost', '$pp_Village_idVillage', '$prop')");

    if ($sql_update_proprietor || $sql_p_insert_current_address || $sql_pp_insert_permanent_address) {
        $msg = "তথ্য সংরক্ষিত হয়েছে";
    } else {
        $msg = "ভুল হয়েছে";
    }
}elseif (isset($_POST['submit2'])) {
    $nominee_name = $_POST['nominee_name'];
    $nominee_age = $_POST['nominee_age'];
    $nominee_relation = $_POST['nominee_relation'];
    $nominee_mobile = $_POST['nominee_mobile'];
    $nominee_email = $_POST['nominee_email'];
    $nominee_national_ID = $_POST['nominee_national_ID'];
    $nominee_passport_ID = $_POST['nominee_passport_ID'];

    $result = mysql_query("Select  * from $dbname.employee_information where Employee_idEmployee='1'");
    $employee_id = mysql_fetch_array($result);
    $emp1 = $employee_id['idEmployee_information'];
    //Insert Into Nominee table
    $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
    $extension = end(explode(".", $_FILES["nominee_picture"]["name"]));
    $image_name = "picture" . "_" . $_FILES["nominee_picture"]["name"];
    $image_path = "pic/" . $image_name;
    if (($_FILES["nominee_picture"]["size"] < 999999999999) && in_array($extension, $allowedExts)) {
        move_uploaded_file($_FILES["nominee_picture"]["tmp_name"], "pic/" . $image_name);
    } else {
        echo "Invalid file format.";
    }

    $sql_nominee = mysql_query("INSERT INTO $dbname.nominee(nominee_name, nominee_relation, nominee_mobile,
                                       nominee_email, nominee_national_ID, nominee_age, nominee_passport_ID, nominee_picture,cep_type, cep_nominee_id) 
                                       VALUES('$nominee_name','$nominee_relation','$nominee_mobile','$nominee_email','$nominee_national_ID',
                                       '$nominee_age','$nominee_passport_ID','$image_path','pwr','$emp1')");
    //Current Address Infromation
    $n_Village_idVillage = $_POST['village_id5'];
    $n_Post_idPost = $_POST['post_id5'];
    $n_Thana_idThana = $_POST['thana_id5'];
    $n_house = $_POST['n_house'];
    $n_house_no = $_POST['n_house_no'];
    $n_village = $_POST['n_village'];
    $n_road = $_POST['n_road'];
    $n_post = $_POST['n_post'];
    $n_post_code = $_POST['n_post_code'];
    //Permanent Address information
    $np_Village_idVillage = $_POST['village_id6'];
    $np_Post_idPost = $_POST['post_id6'];
    $np_Thana_idThana = $_POST['thana_id6'];
    $np_house = $_POST['np_house'];
    $np_house_no = $_POST['np_house_no'];
    $np_village = $_POST['np_village'];
    $np_road = $_POST['np_road'];
    $np_post = $_POST['np_post'];
    $np_post_code = $_POST['np_post_code'];
    //nominee address_type=Present
    $sql_n_insert_current_address = mysql_query("INSERT INTO $dbname.address 
                                    (address_type, house, house_no,road, address_whom, post_code,Thana_idThana,  post_idpost, village_idvillage ,adrs_cepng_id)
                                     VALUES ('Present', '$n_house', '$n_house_no', '$n_road', 'nmn', '$n_post_code', '$n_Thana_idThana', '$n_Post_idPost', '$n_Village_idVillage','$emp1')");
    //nominee address_type=Permanent
    $sql_np_insert_permanent_address = mysql_query("INSERT INTO $dbname.address 
                                    (address_type, house, house_no, road, address_whom,post_code,Thana_idThana,  post_idpost, village_idvillage ,adrs_cepng_id)
                                     VALUES ('Permanent', '$np_house', '$np_house_no','$np_road', 'nmn',  '$np_post_code','$np_Thana_idThana','$np_Post_idPost', '$np_Village_idVillage','$emp1')");

    if ($sql_nominee || $sql_n_insert_current_address || $sql_np_insert_permanent_address) {
        $msg1 = "তথ্য সংরক্ষিত হয়েছে";
    } else {
        $msg1 = "ভুল হয়েছে";
    }
} elseif (isset($_POST['submit3'])) {
    $result = mysql_query("Select  * from $dbname.employee_information where Employee_idEmployee='1'");
    $employee_id = mysql_fetch_array($result);
    $emp2 = $employee_id['idEmployee_information'];
    //customer education
    $e_ex_name = $_POST['e_ex_name'];
    $e_pass_year = $_POST['e_pass_year'];
    $e_institute = $_POST['e_institute'];
    $e_board = $_POST['e_board'];
    $e_gpa = $_POST['e_gpa'];
    $a = count($e_ex_name);
    for ($i = 0; $i < $a; $i++) {
        $sql_insert_emp_edu = "INSERT INTO " . $dbname . ".`education` ( `exam_name` ,`passing_year` ,`institute_name`,`board`,`gpa`,`education_type`,`cepn_id`) VALUES ('$e_ex_name[$i]', '$e_pass_year[$i]','$e_institute[$i]','$e_board[$i]','$e_gpa[$i]','pwr','$emp2');";
        $emp_edu = mysql_query($sql_insert_emp_edu) or exit('query failed: ' . mysql_error());
    }
    //nominee education
    $n_ex_name = $_POST['n_ex_name'];
    $n_pass_year = $_POST['n_pass_year'];
    $n_institute = $_POST['n_institute'];
    $n_board = $_POST['n_board'];
    $n_gpa = $_POST['n_gpa'];
    $b = count($n_ex_name);
    for ($i = 0; $i < $b; $i++) {
        $sql_insert_nom_edu = "INSERT INTO " . $dbname . ".`education` ( `exam_name` ,`passing_year` ,`institute_name`,`board`,`gpa`,`education_type`,`cepn_id`) VALUES ('$n_ex_name[$i]', '$n_pass_year[$i]','$n_institute[$i]','$n_board[$i]','$n_gpa[$i]','nmn','$emp2');";
        $nom_edu = mysql_query($sql_insert_nom_edu) or exit('query failed: ' . mysql_error());
    }
    if ($emp_edu || $nom_edu) {
        $msg2 = "তথ্য সংরক্ষিত হয়েছে";
    } else {
        $msg2 = "ভুল হয়েছে";
    }
}elseif (isset($_POST['submit4'])) {
    $result = mysql_query("Select  * from $dbname.proprietor_account where cfs_user_idUser='4'");
    $proprietor_id = mysql_fetch_array($result);
    $prop3 = $proprietor_id['idpropaccount'];
    $pathArray = array();
    for ($i = 1; $i < 12; $i++) {
        $scan_document = "";
        $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG", "pdf"); //File Type
        $scanDoc = "scanDoc" . $i;
        $files_sequence = array(1 => "ssc", "nationalID", "hsc", "birth_certificate", "onars", "chairman_cert", "masters", "other");
        $file_name = $files_sequence[$i];
        $t = time();
        $extension = end(explode(".", $_FILES[$scanDoc]['name']));
        $scan_doc_name = $account_number . "_" . $file_name . "_" . $t . "_" . $_FILES[$scanDoc]['name'];
        $scan_doc_path_temp = "images/scan_documents/" . $scan_doc_name;
        if (($_FILES[$scanDoc]['size'] < 999999999999) && in_array($extension, $allowedExts)) {
            move_uploaded_file($_FILES[$scanDoc]['tmp_name'], $scan_doc_path_temp);
            $scan_document = $scan_doc_path_temp;
            $pathArray[$i] = $scan_document;
        } elseif ($_FILES[$scanDoc]['size'] == 0) {
            $pathArray[$i] = NULL;
        } else {
            echo "Invalid file format.</br>";
        }
    }
    $sql_images_scan_doc = mysql_query("INSERT INTO $dbname.ep_certificate_scandoc_extra
                                 (emplo_scanDoc_national_id, emplo_scanDoc_birth_certificate, emplo_scanDoc_chairman_certificate, scanDoc_ssc, scanDoc_hsc, scanDoc_onars, scanDoc_masters, scanDoc_other, emp_type, emp_id)
                                 VALUES('$pathArray[2]', '$pathArray[4]', '$pathArray[6]', '$pathArray[1]', '$pathArray[3]', 
                                 '$pathArray[5]',  '$pathArray[7]', '$pathArray[8]', 'pwr','$prop3')");
    if ($sql_images_scan_doc) {
        $msg_scan_doc = "তথ্য সংরক্ষিত হয়েছে";
    } else {
        $msg_scan_doc = "ভুল হয়েছে";
    }
}
?>
<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=OSP"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">মূল তথ্য</a></li><li class="current"><a href="#02">নমিনির তথ্য</a></li><li class="current"><a href="#03">শিক্ষাগত যোগ্যতা</a></li><li class="current"><a href="#04">প্রয়োজনীয় ডকুমেন্টস</a></li>
            </ul>
        </div>  

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <form method="POST" onsubmit="" enctype="multipart/form-data" action="" id="prop_form" name="prop_form">	
                <table  class="formstyle">  
                    <tr><th colspan="4" style="text-align: center" colspan="2"><h1>পাওয়ারস্টোর ওউনার একাউন্ট তৈরির ফর্ম</h1></th></tr>
                    <tr><td colspan="4" ></td></tr>
                    <?php
                    if ($msg != "") {
                        echo '<tr><td ></td><td colspan="4" style="text-allign: center; color: red; font-size: 15px"><blink>' . $msg . '</blink></td></tr>';
                    }
                    ?>
                    <tr>
                        <td>পাওয়ার স্টোরের নাম</td>
                        <td >:  <select  class="box2"  name="powerStore_name" style =" font-size: 11px">
                                <option > একটি নির্বাচন করুন</option>
                                <option value=1></option>
                                <option value=2></option>
                                <option value=3></option>
                                <option value=4></option> 
                            </select>	
                        </td>
                        <td >একাউন্ট নং </td>
                        <td>:  <input class="box" type="text" id="powerStore_accountNumber" name="powerStore_accountNumber" /></td>	
                    </tr>
                    <tr>
                        <td colspan="4" ><hr /></td>
                    </tr>
                    <tr>	
                        <td  colspan="4" style =" font-size: 14px"><b>ব্যাক্তিগত  তথ্য</b></td>                            
                    </tr>
                    <tr>
                        <td  >স্বত্বাধিকারীর নাম</td>
                        <td>:  <input  class="box" type="text" id="prop_name" name="prop_name" /></td>   
                        <td font-weight="bold" >ছবি </td>
                        <td>:   <input class="box5" type="file" id="image" name="image" style="font-size:10px;"/></td>               
                    </tr>
                    <tr>
                        <td >বাবার নাম </td>
                        <td>:  <input class="box" type="text" id="prop_father_name" name="prop_father_name" /></td>	
                        <td font-weight="bold" >স্বাক্ষর</td>
                        <td >:   <input class="box5" type="file" id="scanDoc_signature" name="scanDoc_signature" style="font-size:10px;"/> </td> 
                    </tr>
                    <tr>
                        <td >মার নাম </td>
                        <td>:  <input class="box" type="text" id="prop_motherName" name="prop_motherName"/></td>
                        <td font-weight="bold" > টিপসই</td>
                        <td >:   <input class="box5" type="file" id="scanDoc_finger_print" name="scanDoc_finger_print" style="font-size:10px;"/> </td> 
                    </tr>
                    <tr>
                        <td >দম্পতির নাম  </td>
                        <td>:  <input class="box" type="text" id="prop_spouseName" name="prop_spouseName" /> </td>			
                    </tr>
                    <tr>
                        <td >পেশা</td>
                        <td>:  <input class="box" type="text" id="prop_occupation" name="prop_occupation" /></td>                         
                    </tr>
                    <tr>
                        <td>ধর্ম </td>
                        <td>:  <input  class="box" type="text" id="prop_religion" name="prop_religion" /></td>	                             
                    </tr>
                    <tr>
                        <td >জাতীয়তা</td>
                        <td>:  <input class="box" type="text" id="prop_natonality" name="prop_natonality" /> </td>			
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
                    <td>:  <input class="box" type="text" id="prop_nationalID_no" name="prop_nationalID_no" /></td>			
                    </tr>
                    <tr>
                        <td >পাসপোর্ট আইডি নং</td>
                        <td>:  <input class="box" type="text" id="prop_passportID_no" name="prop_passportID_no" /></td>			
                    </tr>
                    <tr>
                        <td >জন্ম সনদ নং</td>
                        <td>:  <input class="box" type="text" id="prop_birth_certificate_no" name="prop_birth_certificate_no" /></td>			
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
                        <td >:   <input class="box" type="text" id="p_house" name="p_house" /></td>
                        <td  >বাড়ির নাম / ফ্ল্যাট নং</td>
                        <td >:   <input class="box" type="text" id="pp_house" name="pp_house" /></td>
                    </tr>
                    <tr>
                        <td  >বাড়ি নং</td>
                        <td >:   <input class="box" type="text" id="p_house_no" name="p_house_no" /></td>
                        <td >বাড়ি নং</td>
                        <td>:   <input class="box" type="text" id="pp_house_no" name="pp_house_no" /></td>
                    </tr>
                    <tr>
                        <td >রোড নং</td>
                        <td>:   <input class="box" type="text" id="p_road" name="p_road" /> </td>
                        <td >রোড নং</td>
                        <td>:   <input class="box" type="text" id="pp_road" name="pp_road" /></td>
                    </tr>
                    <tr>
                        <td >পোষ্ট কোড</td>
                        <td>:   <input class="box" type="text" id="p_post_code" name="p_post_code" /></td>
                        <td >পোষ্ট কোড</td>
                        <td>:   <input class="box" type="text" id="pp_post_code" name="pp_post_code" /></td>
                    </tr> 
                    <tr>
                        <td >বিভাগ</td>
                        <td>:  <select class="box2" type="text" id="division_id_1" name="c_division_name" onChange="getDistrict1()" />
                            <option value=1>-বিভাগ-</option>
                            <?php
                            $division_sql = mysql_query("SELECT * FROM " . $dbname . ".division ORDER BY division_name ASC");
                            while ($division_rows = mysql_fetch_array($division_sql)) {
                                $db_division_id = $division_rows['idDivision'];
                                $db_division_name = $division_rows['division_name'];
                                echo'<option style="width: 96%" value=' . $db_division_id . '>' . $db_division_name . '</option>';
                            }
                            ?>
                            </select></td>                                
                        <td >বিভাগ</td>
                        <td>:  <select class="box2" type="text" id="division_id_2" name="p_division_name" onChange="getDistrict2()" />
                            <option value=1>-বিভাগ-</option>
                            <?php
                            $division_sql = mysql_query("SELECT * FROM " . $dbname . ".division ORDER BY division_name ASC");
                            while ($division_rows = mysql_fetch_array($division_sql)) {
                                $db_division_id = $division_rows['idDivision'];
                                $db_division_name = $division_rows['division_name'];
                                echo'<option style="width: 96%" value=' . $db_division_id . '>' . $db_division_name . '</option>';
                            }
                            ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td >জেলা</td>
                        <td>: <span id="did"></span></td>
                        <td >জেলা</td>
                        <td>: <span id="did2"></span></td>
                    </tr>                        
                    <tr>
                        <td>উপজেলা / থানা</td>
                        <td>: <span id="tidd"></span></td>      
                        <td>উপজেলা / থানা</td>
                        <td>: <span id="tidd2"></span></td>
                    </tr>
                    <tr>
                        <td >পোষ্ট অফিস</td>
                        <td>: <span id="pidd"></span></td> 
                        <td >পোষ্ট অফিস</td>
                        <td>: <span id="pidd2"></span></td> 
                    </tr>
                    <tr>
                        <td  >গ্রাম</td>
                        <td>: <span id="vidd"></span></td> 
                        <td >গ্রাম </td>
                        <td>: <span id="vidd2"></span></td> 
                    </tr>
                    <tr>                    
                        <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit1" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>
                </table>
                </fieldset>
            </form>
        </div>

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <form method="POST" onsubmit="" style=" padding-right: 70px;" enctype="multipart/form-data" action="" id="emp_form1" name="emp_form1">	
                <table  class="formstyle">     
                    <tr><th colspan="4" style="text-align: center" colspan="2"><h1>পাওয়ারস্টোর ওউনার একাউন্ট তৈরির ফর্ম</h1></th></tr>
                    <tr><td colspan="4" ></td>
                        <?php
                        if ($msg1 != "") {
                            echo '<tr> <td colspan="2" style="text-allign: center; color: green; font-size: 15px"><b>' . $msg1 . '</b></td></tr>';
                        }
                        ?>
                    </tr>
                    <tr>
                        <td >নমিনির নাম</td>
                        <td>:  <input class="box" type="text" id="nominee_name" name="nominee_name" /></td>	
                        <td  font-weight="bold" >পাসপোর্ট ছবি </td>
                        <td >:  <input class="box1" type="file" id="nominee_picture" name="nominee_picture" style="font-size:10px;"/></td>
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
                        <td >:   <input class="box" type="text" id="n_house" name="n_house" /></td>
                        <td  >বাড়ির নাম / ফ্ল্যাট নং</td>
                        <td >:   <input class="box" type="text" id="np_house" name="np_house" /></td>
                    </tr>
                    <tr>
                        <td  >বাড়ি নং</td>
                        <td >:   <input class="box" type="text" id="n_house_no" name="n_house_no" /></td>
                        <td >বাড়ি নং</td>
                        <td>:   <input class="box" type="text" id="np_house_no" name="np_house_no" /></td>
                    </tr>
                    <tr>
                        <td >রোড নং</td>
                        <td>:   <input class="box" type="text" id="n_road" name="n_road" /> </td>
                        <td >রোড নং</td>
                        <td>:   <input class="box" type="text" id="np_road" name="np_road" /></td>
                    </tr>
                    <tr>
                        <td >পোষ্ট কোড</td>
                        <td>:   <input class="box" type="text" id="n_post_code" name="n_post_code" /></td>
                        <td >পোষ্ট কোড</td>
                        <td>:   <input class="box" type="text" id="np_post_code" name="np_post_code" /></td>
                    </tr>
                    <tr>
                        <td >বিভাগ</td>
                        <td>:  <select class="box2" type="text" id="division_id_5" name="n_division_name" onChange="getDistrict5()" />
                    <option value=1>-বিভাগ-</option>
                    <?php
                    $division_sql = mysql_query("SELECT * FROM " . $dbname . ".division ORDER BY division_name ASC");
                    while ($division_rows = mysql_fetch_array($division_sql)) {
                        $db_division_id = $division_rows['idDivision'];
                        $db_division_name = $division_rows['division_name'];
                        echo'<option style="width: 96%" value=' . $db_division_id . '>' . $db_division_name . '</option>';
                    }
                    ?>
                    </select></td>                                
                    <td >বিভাগ</td>
                    <td>:  <select class="box2" type="text" id="division_id_6" name="np_division_name" onChange="getDistrict6()" />
                    <option value=1>-বিভাগ-</option>
                    <?php
                    $division_sql = mysql_query("SELECT * FROM " . $dbname . ".division ORDER BY division_name ASC");
                    while ($division_rows = mysql_fetch_array($division_sql)) {
                        $db_division_id = $division_rows['idDivision'];
                        $db_division_name = $division_rows['division_name'];
                        echo'<option style="width: 96%" value=' . $db_division_id . '>' . $db_division_name . '</option>';
                    }
                    ?>
                    </select></td>
                    </tr>
                    <tr>
                        <td >জেলা</td>
                        <td>: <span id="did5"></span></td>
                        <td >জেলা</td>
                        <td>: <span id="did6"></span></td>
                    </tr>                        
                    <tr>
                        <td>উপজেলা / থানা</td>
                        <td>: <span id="tidd5"></span></td>      
                        <td>উপজেলা / থানা</td>
                        <td>: <span id="tidd6"></span></td>
                    </tr>
                    <tr>
                        <td >পোষ্ট অফিস</td>
                        <td>: <span id="pidd5"></span></td> 
                        <td >পোষ্ট অফিস</td>
                        <td>: <span id="pidd6"></span></td> 
                    </tr>
                    <tr>
                        <td  >গ্রাম</td>
                        <td>: <span id="vidd5"></span></td> 
                        <td >গ্রাম </td>
                        <td>: <span id="vidd6"></span></td> 
                    </tr>
                    <tr>                    
                        <td colspan="4" style="padding-top: 10px; padding-left: 250px;padding-bottom: 5px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit2" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" />
                        </td>                           
                    </tr>
                </table>
                </fieldset>
            </form>
        </div>

         <div>
            <h2><a name="03" id="03"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="4" style="text-align: center" colspan="2"><h1>পাওয়ারস্টোর ওউনার একাউন্ট তৈরির ফর্ম</h1></th></tr>
                    <tr><td colspan="4" ></td>
                        <?php
                        if ($msg3 != "") {
                            echo '<tr> <td colspan="2" style="text-allign: center; color: green; font-size: 15px"><b>' . $msg3 . '</b></td></tr>';
                        }
                        ?>
                    </tr>   
                    <tr>
                        <td colspan="2" > 
                    </tr>
                    <tr>
                        <td colspan="2" >
                            <table width="100%">
                                <tr>	
                                    <td  colspan="2"   style =" font-size: 14px"><b>পাওয়ারস্টোর ওউনারের শিক্ষাগত যোগ্যতা</b></td>                                                
                                </tr>
                                <tr>                      
                                    <td>
                                        <table id="container_others32">
                                            <tr>
                                                <td>পরীক্ষার নাম / ডিগ্রী</td>
                                                <td>পাশের সাল</td>
                                                <td>প্রতিষ্ঠানের নাম </td>
                                                <td>বোর্ড / বিশ্ববিদ্যালয়</td>
                                                <td>জি.পি.এ / বিভাগ</td>      
                                            </tr>
                                            <tr>
                                                <td><input class="textfield"  name="e_ex_name[]" type="text" /></td>
                                                <td><input class="box5"  name="e_pass_year[]" type="text" /></td>
                                                <td><input class="textfield" name="e_institute[]" type="text" /></td>
                                                <td><input class="textfield"  name="e_board[]" type="text" /></td>
                                                <td style="padding-right: 45px;"><input class="box5"  name="e_gpa[]" type="text" /></td>                                             
                                                <td  ><input type="button" class="add2" /></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>         
                    <tr>
                        <td colspan="4" ><hr /></td>
                    </tr>
                    <tr>
                        <td colspan="2" >
                            <table width="100%">
                                <tr>	
                                    <td  colspan="2"   style =" font-size: 14px"><b>নমিনির শিক্ষাগত যোগ্যতা</b></td>                                                
                                </tr>
                                <tr>                         
                                    <td>
                                        <table id="container_others33">
                                            <tr>
                                                <td>পরীক্ষার নাম / ডিগ্রী</td>
                                                <td>পাশের সাল</td>
                                                <td>প্রতিষ্ঠানের নাম </td>
                                                <td>বোর্ড / বিশ্ববিদ্যালয়</td>
                                                <td>জি.পি.এ / বিভাগ</td>      
                                            </tr>
                                            <tr>
                                                <td><input class="textfield"  name="n_ex_name[]" type="text" /></td>
                                                <td><input class="box5"  name="n_pass_year[]" type="text" /></td>
                                                <td><input class="textfield"  name="n_institute[]" type="text" /></td>
                                                <td><input class="textfield"  name="n_board[]" type="text" /></td>
                                                <td style="padding-right: 45px;"><input class="box5"  name="n_gpa[]" type="text" /></td>                                             
                                                <td ><input type="button" class="add3" /></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>                    
                        <td colspan="4" style="padding-top: 10px; padding-left: 250px;padding-bottom: 5px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit3" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" />
                        </td>                           
                    </tr>
                </table>
            </form>
        </div>

         <div>
            <h2><a name="04" id="04"></a></h2><br/>
            <form name="scanDoc_form" method="POST" enctype="multipart/form-data" onsubmit="">	
                <table  class="formstyle">     
                    <tr><th colspan="4" style="text-align: center" colspan="2"><h1>পাওয়ারস্টোর ওউনার একাউন্ট তৈরির ফর্ম</h1></th></tr>
                    <tr><td colspan="4" ></td>
                        <?php
                        if ($msg_scan_doc != "") {
                            echo '<tr> <td colspan="2" style="text-allign: center; color: green; font-size: 15px"><b>' . $msg_scan_doc . '</b></td></tr>';
                        }
                        ?>
                    </tr>                  
                    <tr>	
                        <td  style="width: 110px;" font-weight="bold" > এস.এস.সির সার্টিফিকেট</td>
                        <td>:  <input class="box" type="file" id="scanDoc1" name="scanDoc1" style="font-size:10px;"/></td>
                        <td  font-weight="bold" > জাতীয় পরিচয়পত্র</td>
                        <td>:  <input class="box" type="file" id="scanDoc2" name="scanDoc2" style="font-size:10px;"/></td>
                    </tr>
                    <tr>	
                        <td  font-weight="bold"  style="width: 112px;">এইচ.এস.সির সার্টিফিকেট</td>
                        <td>:  <input class="box" type="file" id="scanDoc3" name="scanDoc3" style="font-size:10px;"/></td>
                        <td  font-weight="bold" >জন্ম সনদ</td>
                        <td>:  <input class="box" type="file" id="scanDoc4" name="scanDoc4" style="font-size:10px;"/></td>
                    </tr>
                    <tr>	
                        <td  font-weight="bold" >অনার্সের সার্টিফিকেট</td>
                        <td>:  <input class="box" type="file" id="scanDoc5" name="scanDoc5" style="font-size:10px;"/></td>
                        <td  font-weight="bold" >চারিত্রিক সনদ</td>
                        <td>:  <input class="box" type="file" id="scanDoc6" name="scanDoc6" style="font-size:10px;"/></td>
                    </tr>
                    <tr>	
                        <td  font-weight="bold" >মাস্টার্সের  সার্টিফিকেট</td>
                        <td>:  <input class="box" type="file" id="scanDoc7" name="scanDoc7" style="font-size:10px;"/></td>
                        <td  font-weight="bold" >অন্যান্য </td>
                        <td>:  <input class="box" type="file" id="scanDoc8" name="scanDoc8" style="font-size:10px;"/></td>
                    </tr>
                    <tr>                    
                        <td colspan="4" style="padding-top: 10px; padding-left: 250px;padding-bottom: 5px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit4" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" />
                        </td>                           
                    </tr>
                </table>
            </form>
        </div>
        </div> 
    </div>         
    <?php include_once 'includes/footer.php'; ?>

