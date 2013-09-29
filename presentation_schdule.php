<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
if (($_POST['new_submit'])) {
    $P_prstn_name = $_POST['presentation_name'];
    $P_prstn_date = $_POST['presentation_date'];
    $sql_presentation_number = mysql_query("SELECT * FROM $dbname .program WHERE program_date='$P_prstn_date'");
    $db_row_numbers = mysql_num_rows($sql_presentation_number);
    //***********Counting the number of rows and concating the date with a single number*********************
    if (!empty($db_row_numbers)) {
        $incremented_value = $db_row_numbers + 1;
    } else {
        $incremented_value = 1;
    }
    $db_prstn_number_final = $P_prstn_date . "-" . $incremented_value;
    $P_prstn_time = $_POST['presentation_time'];
    $P_presenter_name = $_POST['user_name'];
    $sql_get_office_id = mysql_query("SELECT * FROM $dbname.employee, $dbname.office
                                            WHERE employee.Office_idOffice=office.idOffice");
    $db_row_get_office_id = mysql_fetch_array($sql_get_office_id);
    $db_office_id = $db_row_get_office_id['idOffice'];
    $sql = "INSERT INTO  $dbname .program (program_no, program_name, program_date, program_time, program_type, Employee_idEmployee, Office_idOffice) 
              VALUES ('$db_prstn_number_final', '$P_prstn_name', '$P_prstn_date', '$P_prstn_time','presentation', '$P_presenter_name', '$db_office_id')";// office id use korse

    if (mysql_query($sql)) {
        $msg = "তথ্য সংরক্ষিত হয়েছে";
    } else {
        $msg = "ভুল হয়েছে";
    }
}
//###################UPDATE QUERY#######################
elseif (isset($_POST['submit1'])) {
    $P_prstn_unumber = $_POST['presentation_number'];
    $P_prstn_uname = $_POST['presentation_name'];
    $P_prstn_udate = $_POST['presentation_date'];
    //echo $prstn_udate;
    $P_prstn_utime = $_POST['presentation_time'];
    $P_presenter_uname = $_POST['user_name'];
    
    $sql_up = mysql_query("UPDATE $dbname.program 
                                 SET program_name='$P_prstn_uname', program_date='$P_prstn_udate', 
                                 program_time='$P_prstn_utime', Employee_idEmployee='$P_presenter_uname'
                                 WHERE program_no='$P_prstn_unumber'");
    if ($sql_up) {
        $msgi = "তথ্য সংরক্ষিত হয়েছে";
    } else {
        $msgi = "ভুল হয়েছে";
    }
}
?>

<script type="text/javascript" src="javascripts/external/mootools.js"></script>
<script type="text/javascript" src="javascripts/dg-filter.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="javascripts/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="javascripts/jsDatePick.min.1.3.js"></script>
<!--######################Style Script for calender *********************-->
<script type="text/javascript">

    window.onclick = function()
    {
        new JsDatePick({
            useMode: 2,
            target: "presentation_date",
            dateFormat: "%Y-%m-%d"
        });
    }

</script>
<style type="text/css">
    @import "css/bush.css";
</style>

<!--*********************Presentation List****************** -->
<?php
if ($_GET['action'] == 'first') {
    ?>
    <div style="padding-top: 10px;">    
        <div style="padding-left: 110px; width: 49%; float: left"><a href="index.php?apps=PROGRA"><b>ফিরে যান</b></a></div>
        <div><a href="presentation_schdule.php?action=first">প্রেজেন্টেশন লিস্ট</a>&nbsp;&nbsp;<a href="presentation_schdule.php?action=new">মেইক প্রেজেন্টেশন</a>&nbsp;&nbsp;<a href="presentation_schdule.php?action=list">প্রেজেন্টার  লিস্ট</a></div>
    </div>
    <div>
        <form method="POST" onsubmit="">	
            <table  class="formstyle" style =" width:78%"id="make_presentation_fillter">      
                <thead>
                    <tr>
                        <th colspan="8" >প্রেজেন্টেশন সিডিউল</th>                        
                    </tr>          
                    <tr>
                        <td colspan="8" style="text-align: right">খুঁজুন:  <input type="text" class="box"id="search_filter" name="search" /></td>
                    </tr>
                    <tr id = "table_row_odd">
                        <td >প্রেজেন্টশন নাম্বার</td>
                        <td >প্রেজেন্টশন নাম</td>
                        <td >প্রেজেন্টার নাম</td>
                        <td >রিপড ই মেইল</td>
                        <td >তারিখ</td>
                        <td>বার</td>
                        <td > সময় </td>     
                        <td>অপশন</td>
                    </tr>
                </thead>
                <tbody> 

                    <!--######################SELECT QUERY########################## -->
                    <?php
                    $sql = "SELECT * FROM $dbname.program, $dbname.employee, $dbname.cfs_user
                              WHERE program.Employee_idEmployee=employee.idEmployee AND employee.cfs_user_idUser=cfs_user.idUser 
                              AND employee.employee_type='presenter'";

                    $db_result_presenter_name = mysql_query($sql);
                    while ($row_prstn = mysql_fetch_array($db_result_presenter_name)) {
                        $db_rl_prstn_number = $row_prstn['program_no'];
                        $db_rl_prstn_name = $row_prstn['program_name'];
                        $db_rl_presenter_name = $row_prstn['user_name'];
                        $db_rl_presenter_email = $row_prstn['email'];
                        $db_rl_prstn_date = $row_prstn['program_date'];
                        $db_rl_prstn_time = $row_prstn['program_time'];
                        ?>
                        <tr>
                            <td><?php echo $db_rl_prstn_number; ?></td>
                            <td><?php echo $db_rl_prstn_name; ?></td>
                            <td><?php echo $db_rl_presenter_name; ?></td>
                            <td><?php echo $db_rl_presenter_email; ?></td>
                            <td><?php echo $db_rl_prstn_date; ?></td>
                            <td>
                                <?php
                                $timestamp = strtotime($db_rl_prstn_date);
                                $day = date('D', $timestamp);
                                if ($day == 'Wed') {
                                    echo "বুধ";
                                } elseif ($day == 'Thu') {
                                    echo "বিরহস্পতি";
                                } elseif ($day == 'Fri') {
                                    echo "শুক্র";
                                } elseif ($day == 'Sat') {
                                    echo "শনি";
                                } elseif ($day == 'Sun') {
                                    echo "রবি";
                                } elseif ($day == 'Mon') {
                                    echo "সোম";
                                } elseif ($day == 'Tue') {
                                    echo "মঙ্গল";
                                }
                                ?>
                            </td>
                            <td><?php echo $db_rl_prstn_time; ?></td>
                            <td style="text-align: center " > <a href="presentation_schdule.php?action=edit&id=<?php echo $db_rl_prstn_number; ?>"> এডিট সিডিউল </a></td>  
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </form>
    </div>
    <!--******************Make Presentation************** -->
    <?php
} else if ($_GET['action'] == 'new') {
    ?>
    <div style="padding-top: 10px;">    
        <div style="padding-left: 110px; width: 49%; float: left"><a href="index.php?apps=PROGRA"><b>ফিরে যান</b></a></div>
        <div> <a href="presentation_schdule.php?action=first">প্রেজেন্টেশন লিস্ট</a>&nbsp;&nbsp;<a href="presentation_schdule.php?action=new">মেইক প্রেজেন্টেশন</a>&nbsp;&nbsp;<a href="presentation_schdule.php?action=list">প্রেজেন্টার  লিস্ট</a></div>
    </div>

    <div>
        <form method="POST" aciton="presentation_schdule.php?action=first">
            <table class="formstyle" style =" width:78%">

                <tr>
                    <th colspan="2">  মেইক প্রেজেন্টেশন</th>
                </tr>

                <tr>
                    <td >প্রেজেন্টশন নাম</td>               
                    <td>: <input  class="box" type="text" name="presentation_name" value=""/></td>   
                </tr>
                <tr>
                    <td >প্রেজেন্টার নাম</td>               
                    <td>: <select class="box2"  placeholder="Name" name="user_name" style="width: 150px;">
                            <?php
                            $sql = "SELECT * FROM $dbname.cfs_user,$dbname.employee 
                                      WHERE  employee.cfs_user_idUser=cfs_user.idUser 
                                      AND employee.employee_type='presenter' ORDER BY user_name ASC";
                            $db_reuslt = mysql_query($sql);
                            while ($row_prsnt = mysql_fetch_array($db_reuslt)) {
                                $db_user_id = $row_prsnt['idUser'];
                                $db_user_name = $row_prsnt['user_name'];
                                $sql_employee_id = "SELECT * FROM $dbname.employee 
                                                      WHERE employee.cfs_user_idUser='$db_user_id'";
                                $db_result_emplolyee_id = mysql_query($sql_employee_id);
                                $row_employee_id = mysql_fetch_array($db_result_emplolyee_id);
                                $db_employee_id = $row_employee_id['idEmployee'];
                                echo "<option style='width: 96%' value='$db_employee_id'>$db_user_name</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>                
                <tr>
                    <td >তারিখ </td>
                    <td>: <input class="box"type="text" id="presentation_date" placeholder="Date"  style="" name="presentation_date" value=""/></td>   
                    </td>   
                </tr>
                <tr>
                    <td > সময় </td>
                    <td>: <input  class="box" type="text" name="presentation_time" value=""/></td>  
                </tr>
                <?php
                if ($msg != "") {
                    echo "<tr>
                    <td colspan=\"2\" style=\"text-allign: center\"> <font color='green'>$msg</td></font> 
                </tr>";
                }
                ?>
                <tr>
                    <td colspan="2" style="text-align: center"><input type="submit" class="btn" name="new_submit" value="সেভ" >
                        &nbsp;
                        <input type="reset" class="btn" name="reset" value="রিসেট"></td>
                </tr>
            </table>
        </form>
    </div>
    <!--***************Edit Schedule****************** -->
    <?php
} elseif ($_GET['action'] == 'edit') {
    ?>
    <div style="padding-top: 10px;">    
        <div style="padding-left: 110px; width: 49%; float: left"><a href="index.php?apps=PROGRA"><b> ফিরে যান</b></a></div>
        <div> <a href="presentation_schdule.php?action=first">প্রেজেন্টেশন লিস্ট</a>&nbsp;&nbsp;<a href="presentation_schdule.php?action=new">মেইক প্রেজেন্টেশন</a>&nbsp;&nbsp;<a href="presentation_schdule.php?action=list">প্রেজেন্টার  লিস্ট</a></div>
    </div>
    <div>
        <!--PHP coding for SHOWING THE DATA IN EDIT SCHEDULE -->     
        <?php
        $G_presentation_id = $_GET['id'];
        $sql_edit = "SELECT * FROM $dbname.cfs_user, $dbname.program, $dbname.employee
                       WHERE program.Employee_idEmployee=employee.idEmployee AND employee.cfs_user_idUser=cfs_user.idUser
                       AND program.program_type = 'presentation' AND program_no='$G_presentation_id'";
        $db_result_edit = mysql_query($sql_edit);
        $row_edit = mysql_fetch_array($db_result_edit);
        $db_rl_presentation_number = $row_edit['program_no'];
        $db_rl_presentation_name = $row_edit['program_name'];
        $db_rl_prstnr_name = $row_edit['user_name'];
        $db_rl_presentation_date = $row_edit['program_date'];
        $db_rl_presentation_time = $row_edit['program_time'];
        ?>
        <form method="POST"> <!--Redirect from one page to another -->
            <table class="formstyle" style =" width:78%" id="presentation_fillter">       
                <tr>
                    <th colspan="2">  এডিট সিডিউল </th>
                </tr>
                <tr>
                    <td style="width:40%" >প্রেজেন্টশন নাম্বার</td>
                    <td>: <input  class="box" type="text" name="presentation_number" readonly  value="<?php echo $db_rl_presentation_number; ?>"/></td>   
                </tr>
                <tr>
                    <td >প্রেজেন্টশন নাম</td>               
                    <td>: <input  class="box" type="text" name="presentation_name" value="<?php echo $db_rl_presentation_name; ?>"/></td>   
                </tr>
                <tr>
                    <td >প্রেজেন্টার নাম</td>   <!--Writing query for drop-down list -->            
                    <td>: <select class="box2" name="user_name" style="width: 150px;">
                            <?php
                            $sql = "SELECT * FROM $dbname.cfs_user,$dbname.employee 
                                      WHERE  employee.cfs_user_idUser=cfs_user.idUser 
                                      AND employee.employee_type='presenter' ORDER BY user_name ASC";
                            $db_reuslt = mysql_query($sql);
                            while ($row_prsnt = mysql_fetch_array($db_reuslt)) {
                                $db_user_id = $row_prsnt['idUser'];
                                $db_employee_name = $row_prsnt['user_name'];
                                $sql_employee_id = "SELECT * FROM $dbname.employee 
                                                      WHERE employee.cfs_user_idUser='$db_user_id'";
                                $db_result_emplolyee_id = mysql_query($sql_employee_id);
                                $row_employee_id = mysql_fetch_array($db_result_emplolyee_id);
                                $db_employee_id = $row_employee_id['idEmployee'];
                                if ($db_employee_id == $db_rl_prstnr_name) {
                                    echo "<option style='width: 96%' value='$db_employee_id' selected=\"selected\">$db_employee_name</option>";
                                }
                                else
                                    echo "<option style='width: 96%' value='$db_employee_id'>$db_employee_name</option>";
                            }
                            ?>
                        </select>
                    </td>

                </tr>
                <tr>
                    <td >তারিখ</td>
                    <td>: <input class="box" type="text" id="presentation_date" placeholder="Date"  style="" name="presentation_date" value="<?php echo $db_rl_presentation_date; ?>"/></td>
                    </td>   
                </tr>
                <tr>
                    <td > সময় </td>
                    <td>: <input  class="box" type="text" name="presentation_time" value="<?php echo $db_rl_presentation_time; ?>"/></td>
                </tr> 
                <?php
                if ($msgi != "") {
                    echo "<tr>
                    <td colspan=\"2\" style=\"text-allign: center\"> <font color='green'>$msgi</td></font> 
                </tr>";
                }
                ?>

                <tr>
                    <td colspan="2" style="text-align: center"><input type="submit" class="btn" name="submit1" value="সেভ" > 
                        &nbsp;<input type="reset" class="btn" name="reset" value="রিসেট"></td>
                </tr>
            </table>
        </form>
    </div>
    <?php
} elseif ($_GET['action'] == 'list') {
    ?>
    <div style="padding-top: 10px;">    
        <div style="padding-left: 110px; width: 49%; float: left"><a href="index.php?apps=PROGRA"><b> ফিরে যান</b></a></div>
        <div><a href="presentation_schdule.php?action=first">প্রেজেন্টেশন লিস্ট</a>&nbsp;&nbsp;<a href="presentation_schdule.php?action=new">মেইক প্রেজেন্টেশন</a>&nbsp;&nbsp;<a href="presentation_schdule.php?action=list">প্রেজেন্টার  লিস্ট</a> </div> 
    </div> 

    <form method="POST" onsubmit="">	
        <table  class="formstyle" style =" width:78%"id="presentation_fillter">          
            <thead>
                <tr>
                    <th colspan="8" >প্রেজেন্টার  লিস্ট </th>                        
                </tr>             
                <tr >
                    <td colspan="8" style="text-align: right"> খুঁজুন:  <input type="text" class="box"id="search_box_filter" name="search" /></td>
                </tr>
                <tr id = "table_row_odd">
                    <td>প্রেজেন্টার নাম </td>
                    <td >একাউন্ট নাম্বার</td>
                    <td >গ্রেড</td>
                    <td >সেল নাম্বার</td>
                    <td> থানা</td>
                    <td>জেলা</td>
                    <td>বিভাগ</td>
                    <td>অপশন</td>
                </tr>
            </thead>
            <tbody>
                <!--Presenter List Query -->
                <?php
                $sql_list = "SELECT * FROM $dbname.cfs_user, $dbname.employee, $dbname.employee_grade, $dbname.address, $dbname.thana, $dbname.district, $dbname.division  
                             WHERE 
                             cfs_user.idUser=employee.cfs_user_idUser AND employee.Employee_grade_idEmployee_grade=employee_grade.idEmployee_grade 
                             AND address.adrs_cepng_id= employee.idEmployee AND thana.idThana=address.Thana_idThana 
                             AND thana.District_idDistrict=district.idDistrict AND district.Division_idDivision= division.idDivision
                             AND employee.employee_type='presenter'";


                $db_result_presenter_info = mysql_query($sql_list); //Saves the query of Presenter Infromation


                while ($row_prstn = mysql_fetch_array($db_result_presenter_info)) {
                    $db_rl_presenter_name = $row_prstn['user_name'];
                    $db_rl_presenter_acc = $row_prstn['account_number'];
                    $db_rl_presenter_mobile = $row_prstn['mobile'];
                    $db_rl_presenter_id = $row_prstn['idEmployee'];
                    $db_rl_presenter_grade = $row_prstn['grade_name'];
                    $db_rl_presenter_division = $row_prstn['division_name'];
                    $db_rl_presenter_district = $row_prstn['district_name'];
                    $db_rl_presennter_thana = $row_prstn['thana_name'];
                    ?>
                    <tr>
                        <td ><?php echo $db_rl_presenter_name; ?></td>
                        <td><?php echo $db_rl_presenter_acc; ?></td>
                        <td><?php echo $db_rl_presenter_grade; ?></td>
                        <td><?php echo $db_rl_presenter_mobile; ?></td>
                        <td><?php echo $db_rl_presennter_thana; ?></td>
                        <td><?php echo $db_rl_presenter_district; ?></td>
                        <td><?php echo $db_rl_presenter_division; ?></td>
                        <td style="text-align: center " > <a href="presentation_schdule.php?action=sedule&id=<?php echo $db_rl_presenter_id; ?>">সিডিউল </a></td>  
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>
    <script type="text/javascript">
    var filter = new DG.Filter({
        filterField: $('search_box_filter'),
        filterEl: $('presentation_fillter')
    });
    </script>
    <?php
} elseif ($_GET['action'] == 'sedule') {
    ?>
    <div style="padding-top: 10px;">    
        <div style="padding-left: 110px; width: 49%; float: left"><a href="index.php?apps=PROGRA"><b>ফিরে যান</b></a></div>
        <div><a href="presentation_schdule.php?action=first">প্রেজেন্টেশন লিস্ট</a>&nbsp;&nbsp;<a href="presentation_schdule.php?action=new">মেইক প্রেজেন্টেশন</a>&nbsp;&nbsp;<a href="presentation_schdule.php?action=list">প্রেজেন্টার  লিস্ট</a></div>
    </div>
    <form method="POST" onsubmit="">	
        <table  class="formstyle" style =" width:78%"id="presentation_fillter">          
            <tr>
                <th colspan="100" >সিডিউল  </th>                        
            </tr>             
            <tr id = "table_row_odd">
                <td>প্রেজেন্টার নাম </td>
                <td >তারিখ</td>
                <td >সময়</td>
                <td >ভেন্যু</td>                
            </tr>

            <!--Sql query for showing the data of a presenter-->
            <?php
            $G_presenter_id = $_GET['id'];
            $sql_sedule = "SELECT *
                              FROM  $dbname.cfs_user, $dbname .employee,  $dbname .program
                              WHERE  employee.cfs_user_idUser=cfs_user.idUser AND employee.idEmployee= '$G_presenter_id'
                              AND employee.idEmployee = program.Employee_idEmployee AND employee.employee_type='presenter'";
            $db_result_sql_sedule = mysql_query($sql_sedule);
            while ($row_sedule = mysql_fetch_array($db_result_sql_sedule)) {
                $db_sedule_presenter_name = $row_sedule['user_name'];
                $db_sedule_presentaiton_date = $row_sedule['program_date'];
                $db_sedule_presentation_time = $row_sedule['program_time'];
                $db_sedule_presentation_venue = $row_sedule['program_location'];
                ?>            
                <tr>
                    <td ><?php echo $db_sedule_presenter_name; ?></td>
                    <td><?php echo $db_sedule_presentaiton_date; ?></td>                    
                    <td><?php echo $db_sedule_presentation_time; ?></td>
                    <td><?php echo $db_sedule_presentation_venue; ?></td>                    
                </tr>
            <?php } ?>
        </table>
    </form>


    <script type="text/javascript">
    var filter = new DG.Filter({
        filterField: $('search_filter'),
        filterEl: $('make_presentation_fillter')
    });
    </script>

    <?php
}
include_once 'includes/footer.php';
?> 
