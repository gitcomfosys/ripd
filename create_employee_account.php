<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
error_reporting(0);
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
    $employee_fatherName = $_POST['employee_fatherName'];
    $employee_motherName = $_POST['employee_motherName'];
    $employee_spouseName = $_POST['employee_spouseName'];
    $employee_occupation = $_POST['employee_occupation'];
    $employee_religion = $_POST['employee_religion'];
    $employee_natonality = $_POST['employee_natonality'];
    $dob_day = $_POST['date'];
    $dob_month = $_POST['month'];
    $dob_year = $_POST['year'];
    $dob = $dob_year . "-" . $dob_month . "-" . $dob_day; //Concating different strings of date written in php function
    $employee_national_ID = $_POST['employee_national_ID'];
    $employee_passport = $_POST['employee_passport'];
    $employee_birth_certificate_No = $_POST['employee_birth_certificate_No'];
    // picture, sign, sign
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
    $sql_update_employee = mysql_query("UPDATE $dbname.employee_information SET employee_fatherName='$employee_fatherName', 
                                     employee_motherName='$employee_motherName', employee_spouseName='$employee_spouseName', 
                                     employee_occupation='$employee_occupation', employee_religion='$employee_religion', employee_natonality='$employee_natonality',
                                     employee_national_ID='$employee_national_ID', employee_passport='$employee_passport', employee_date_of_birth='$dob',
                                     employee_birth_certificate_No='$employee_birth_certificate_No' ,emplo_scanDoc_signature='$image_path', emplo_scanDoc_picture='$sing_path',  scanDoc_finger_print='$finger_path'
                                     WHERE Employee_idEmployee='1'");

    $result = mysql_query("Select  * from $dbname.employee_information where Employee_idEmployee='1'");
    $employee_id = mysql_fetch_array($result);
    $emp = $employee_id['idEmployee_information'];
    //Current Address Infromation
    $e_Village_idVillage = $_POST['village_id1'];
    $e_Post_idPost = $_POST['post_id1'];
    $e_Thana_idThana = $_POST['thana_id1'];
    $e_house = $_POST['e_house'];
    $e_house_no = $_POST['e_house_no'];
    $e_village = $_POST['e_village'];
    $e_road = $_POST['e_road'];
    $e_post = $_POST['e_post'];
    $e_post_code = $_POST['e_post_code'];
    //Permanent Address information
    $ep_Village_idVillage = $_POST['village_id2'];
    $ep_Post_idPost = $_POST['post_id2'];
    $ep_Thana_idThana = $_POST['thana_id2'];
    $ep_house = $_POST['ep_house'];
    $ep_house_no = $_POST['ep_house_no'];
    $ep_village = $_POST['ep_village'];
    $ep_road = $_POST['ep_road'];
    $ep_post = $_POST['ep_post'];
    $ep_post_code = $_POST['ep_post_code'];
    //employee address_type=Present
    $sql_e_insert_current_address = mysql_query("INSERT INTO $dbname.address 
                                    (address_type, house, house_no, road, address_whom, post_code,Thana_idThana, post_idpost, village_idvillage ,adrs_cepng_id)
                                     VALUES ('Present', '$e_house', '$e_house_no', '$e_road', 'emp', '$e_post_code','$e_Thana_idThana','$e_Post_idPost', '$e_Village_idVillage', '$emp')");
    //employee address_type=Permanent
    $sql_ep_insert_permanent_address = mysql_query("INSERT INTO $dbname.address 
                                    (address_type, house, house_no, road, address_whom, post_code,Thana_idThana,  post_idpost, village_idvillage ,adrs_cepng_id)
                                     VALUES ('Permanent', '$ep_house', '$ep_house_no', '$ep_road', 'emp', '$ep_post_code','$ep_Thana_idThana', '$ep_Post_idPost', '$ep_Village_idVillage', '$emp')");

    if ($sql_update_employee || $sql_e_insert_current_address || $sql_ep_insert_permanent_address) {
        $msg = "তথ্য সংরক্ষিত হয়েছে";
    } else {
        $msg = "ভুল হয়েছে";
    }
} elseif (isset($_POST['submit2'])) {
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
                                       '$nominee_age','$nominee_passport_ID','$image_path','emp','$emp1')");
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
        $sql_insert_emp_edu = "INSERT INTO " . $dbname . ".`education` ( `exam_name` ,`passing_year` ,`institute_name`,`board`,`gpa`,`education_type`,`cepn_id`) VALUES ('$e_ex_name[$i]', '$e_pass_year[$i]','$e_institute[$i]','$e_board[$i]','$e_gpa[$i]','emp','$emp2');";
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
    $result = mysql_query("Select  * from $dbname.employee_information where Employee_idEmployee='1'");
    $employee_id = mysql_fetch_array($result);
    $emp3 = $employee_id['idEmployee_information'];
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
                                 '$pathArray[5]',  '$pathArray[7]', '$pathArray[8]', 'emp','$emp3')");
    if ($sql_images_scan_doc) {
        $msg_scan_doc = "তথ্য সংরক্ষিত হয়েছে";
    } else {
        $msg_scan_doc = "ভুল হয়েছে";
    }
}
?>
<!-- *****************************Form Number 1********************************-->
<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=HRE"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">মূল তথ্য</a></li><li class="current"><a href="#02">নমিনির তথ্য</a></li><li class="current"><a href="#03">শিক্ষাগত যোগ্যতা</a></li><li class="current"><a href="#04">প্রয়োজনীয় ডকুমেন্টস</a></li>
            </ul>
        </div>  

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <form method="POST" onsubmit="" style=" padding-right: 70px;" enctype="multipart/form-data" action="" id="emp_form" name="emp_form">	
                <table class="formstyle" > 
                    <tr><th colspan="4" style="text-align: center" colspan="2"><h1>কর্মচারীর একাউন্ট তৈরির ফর্ম</h1></th></tr>
                    <tr>
                        <td colspan="4" ><hr /></td>
                    </tr>
                    <?php
                    if ($msg != "") {
                        echo '<tr><td colspan="4" style="text-allign: center; color: green; font-size: 15px"><b>' . $msg . '</b></td></tr>';
                    }
                    ?>
                    <tr>	
                        <td  colspan="4" style =" font-size: 14px"><b>ব্যাক্তিগত  তথ্য</b></td>                            
                    </tr>
                    <tr>
                        <td >বাবার নাম </td>
                        <td>:  <input class="box" type="text" id="employee_fatherName" name="employee_fatherName" /></td>
                        <td   font-weight="bold" >পাসপোর্ট ছবি </td>
                        <td >:   <input class="box" type="file" id="image" name="image" style="font-size:10px;"/></td>    
                    </tr>
                    <tr>
                        <td >মার নাম </td>
                        <td>:  <input class="box" type="text" id="employee_motherName" name="employee_motherName"/></td>
                        <td  font-weight="bold" >স্বাক্ষর</td>
                        <td >:  <input class="box1" type="file" id="scanDoc_signature" name="scanDoc_signature" style="font-size:10px;"/> </td>
                    </tr>
                    <tr>
                        <td >দম্পতির নাম  </td>
                        <td>:  <input class="box" type="text" id="employee_spouseName" name="employee_spouseName" /> </td>	
                        <td font-weight="bold" > টিপসই</td>
                        <td >:   <input class="box5" type="file" id="scanDoc_finger_print" name="scanDoc_finger_print" style="font-size:10px;"/> </td> 		
                    </tr>
                    <tr>
                        <td >পেশা</td>
                        <td>:  <input class="box" type="text" id="employee_occupation" name="employee_occupation" /></td>                         
                    </tr>
                    <tr>
                        <td>ধর্ম </td>
                        <td>:  <input  class="box" type="text" id="employee_religion" name="employee_religion" /></td>	                             
                    </tr>
                    <tr>
                        <td >জাতীয়তা</td>
                        <td>:  <input class="box" type="text" id="employee_natonality" name="employee_natonality" /> </td>			
                    </tr>
                    <td>জন্মতারিখ</td>
                    <td >:   <select  class="box1"  name="date" style =" font-size: 11px">
                            <option >দিন</option>
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                $date = english2bangla($i);
                                echo "<option value=$i>" . $date . "</option>";
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
                                echo "<option value=$i>" . $year . "</option>";
                            }
                            ?>
                        </select>
                    </td>			
                    </tr>                     
                    <td >জাতীয় পরিচয়পত্র নং</td>
                    <td>:  <input class="box" type="text" id="employee_national_ID" name="employee_national_ID" /></td>			
                    </tr>
                    <tr>
                        <td >পাসপোর্ট আইডি নং</td>
                        <td>:  <input class="box" type="text" id="employee_passport" name="employee_passport" /></td>			
                    </tr>
                    <tr>
                        <td >জন্ম সনদ নং</td>
                        <td>:  <input class="box" type="text" id="employee_birth_certificate_No" name="employee_birth_certificate_No" /></td>			
                    </tr>
                    <tr>
                        <td colspan="4" ><hr /></td>
                    </tr>	
                    <td  colspan="2" style =" font-size: 14px"><b>বর্তমান ঠিকানা </b></td>                            
                    <td colspan="2" style =" font-size: 14px"><b> স্থায়ী ঠিকানা   </b></td>
                    </tr>
                    <tr>
                        <td  >বাড়ির নাম / ফ্ল্যাট নং</td>
                        <td >:   <input class="box" type="text" id="e_house" name="e_house" /></td>
                        <td  >বাড়ির নাম / ফ্ল্যাট নং</td>
                        <td >:   <input class="box" type="text" id="ep_house" name="ep_house" /></td>
                    </tr>
                    <tr>
                        <td  >বাড়ি নং</td>
                        <td >:   <input class="box" type="text" id="e_house_no" name="e_house_no" /></td>
                        <td >বাড়ি নং</td>
                        <td>:   <input class="box" type="text" id="ep_house_no" name="ep_house_no" /></td>
                    </tr>
                    <tr>
                        <td >রোড নং</td>
                        <td>:   <input class="box" type="text" id="e_road" name="e_road" /> </td>
                        <td >রোড নং</td>
                        <td>:   <input class="box" type="text" id="ep_road" name="ep_road" /></td>
                    </tr>
                    <tr>
                        <td >পোষ্ট কোড</td>
                        <td>:   <input class="box" type="text" id="e_post_code" name="e_post_code" /></td>
                        <td >পোষ্ট কোড</td>
                        <td>:   <input class="box" type="text" id="ep_post_code" name="ep_post_code" /></td>
                    </tr> 
                    <tr>
                        <td >বিভাগ</td>
                        <td>:  <select class="box2" type="text" id="division_id_1" name="e_division_name" onChange="getDistrict1()" />
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
                    <td>:  <select class="box2" type="text" id="division_id_2" name="ep_division_name" onChange="getDistrict2()" />
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
                        <td colspan="4" style="padding-top: 10px; padding-left: 250px;padding-bottom: 5px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit1" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" />
                        </td>                           
                    </tr> 
                </table>
            </form>
        </div>

        <!--******************Form Number 2********************************* -->
        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <form method="POST" onsubmit="" style=" padding-right: 70px;" enctype="multipart/form-data" action="" id="emp_form1" name="emp_form1">	
                <table  class="formstyle">     
                    <tr><th colspan="4" style="text-align: center" colspan="2"><h1>কর্মচারীর একাউন্ট তৈরির ফর্ম</h1></th></tr>
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
        <!--********************Form number 3****************** -->

        <div>
            <h2><a name="03" id="03"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="4" style="text-align: center" colspan="2"><h1>কর্মচারীর একাউন্ট তৈরির ফর্ম</h1></th></tr>
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
                                    <td  colspan="2"   style =" font-size: 14px"><b>কর্মচারীর শিক্ষাগত যোগ্যতা</b></td>                                                
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
        <!-- **********************Form Number 4***************************-->

        <div>
            <h2><a name="04" id="04"></a></h2><br/>
            <form name="scanDoc_form" method="POST" enctype="multipart/form-data" onsubmit="">	
                <table  class="formstyle">     
                    <tr><th colspan="4" style="text-align: center" colspan="2"><h1>কর্মচারীর একাউন্ট তৈরির ফর্ম</h1></th></tr>
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