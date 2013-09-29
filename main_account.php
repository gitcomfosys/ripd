<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
error_reporting(0);

if($_POST['submit'])
        {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $account_name = $_POST['name'];
        $account_number = $_POST['acc_num'];
        $account_email = $_POST['email'];
        $account_mobile = $_POST['mobile'];
        mysql_query("INSERT into $dbname.cfs_user (user_name, password, blocked, overall_access, account_name, account_number, account_open_date, mobile, email, account_status)
                                                                        VALUES ('$username', '$password', '0', 'blank', '$account_name', '$account_number', NOW(), '$account_mobile', '$account_email', 'active')");
        $cfs_user_id = mysql_insert_id();
        $account_type = $_POST['account_type'];
        if($account_type == "employee")
                {
                $employee_type = $_POST['employee_type'];
                $employee_grade = $_POST['employee_grade'];
                $employee_office = $_POST['office_selection'];
                mysql_query("INSERT into $dbname.employee (status, employee_type, Office_idOffice, cfs_user_idUser, Employee_grade_idEmployee_grade)
                                                                                    VALUES ('Non-posting', '$employee_type', '$employee_office', '$cfs_user_id', '$employee_grade')");
                $employee_id = mysql_insert_id();
                mysql_query("INSERT into $dbname.employee_information (employee_attendance_idemployee_attendance, Employee_idEmployee)
                                                                                                VALUES ('1', '$employee_id')");
                $employee_info_id = mysql_insert_id();
                $pass_message = "create_employee_account.php?=".$employee_info_id;
                }
        else if($account_type == "customer")
                {
                $pin_number = $_POST['pin_num'];
                mysql_query("INSERT into $dbname.employee (status, employee_type, Office_idOffice, cfs_user_idUser, Employee_grade_idEmployee_grade)
                                                                                    VALUES ('Non-posting', '$employee_type', '$employee_office', '$cfs_user_id', '$employee_grade')");
                $employee_id = mysql_insert_id();
                mysql_query("INSERT into $dbname.employee_information (employee_attendance_idemployee_attendance, Employee_idEmployee)
                                                                                                VALUES ('1', '$employee_id')");
                $employee_info_id = mysql_insert_id();
                $pass_message = "create_employee_account.php?=".$employee_info_id;
                }
        }

?>
<style type="text/css">
    @import "css/bush.css";
</style>
<link rel="stylesheet" type="text/css" media="all" href="javascripts/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="javascripts/jsDatePick.min.1.3.js"></script>
<script type="text/javascript" src="javascripts/jquery-1.4.3.min.js"></script>
<script>
  window.onclick = function()
    {
        new JsDatePick({
            useMode: 2,
            target: "date",
            dateFormat: "%Y-%m-%d"
        });
    }
</script>
<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=OSP"><b>ফিরে যান</b></a></div> 
        <div>            
            <form method="POST" onsubmit="">
                <?php
                    $input= $_GET['id'];
                    $arrayAccountType = array('employee' => 'কর্মচারীর', 'customer' => 'কাস্টমারের', 'power' => 'পাওয়ার স্টোরের');
                    $showAccountType  = $arrayAccountType[$input];
                    
                    echo "<tr><td><input type='hidden' value='$input' name='account_type'/></td></tr>";

                    echo "<table  class='formstyle'>          
                    <tr><th colspan='4' style='text-align: center;'>$showAccountType মূল তথ্য</th></tr>  
                    <tr>
                        <td >$showAccountType নাম</td>
                        <td>:   <input class='box' type='text' id='name' name='name'/></td>			
                    </tr>
                    <tr>
                        <td >একাউন্ট নাম্বার</td>
                        <td>:   <input class='box' type='text' id='acc_num' name='acc_num' /></td>			
                    </tr>
                    <tr>
                        <td >ই মেইল</td>
                       <td>:   <input class='box' type='text' id='email' name='email' /></td>			
                    </tr>
                    <tr>
                        <td >মোবাইল</td>
                        <td>:   <input class='box' type='text' id='mobile' name='mobile' /></td>		
                    </tr>";
                    if($input == "customer")
                            {
                            echo "<tr>
                                <td >পিন নাম্বার</td>
                                <td>:   <input class='box' type='text' id='pin_num' name='pin_num' /></td>		
                            </tr>";
                            }
                    echo "
                      <tr>
                        <td>ছবি</td>
                      <td>:   <input type='file' id='pic' name='pic' /></td>
                    </tr>   
                    <tr>
                        <td>ইউজারের নাম</td>
                      <td>:   <input class='box' type='text' id='username' name='username' /></td>
                    </tr>   
                    <tr>
                        <td>পাসওয়ার্ড</td>
                       <td>:   <input class='box' type='password' id='password' name='password' /></td>
                    </tr>
                    <tr>
                        <td>কনফার্ম পাসওয়ার্ড</td>
                       <td>:   <input class='box' type='password' id='password' name='password' /></td>
                    </tr>
                    <tr>
                        <td colspan='2' ><hr /></td>
                    </tr>
                    <tr>
                        <td>কর্মচারীর ধরন</td>
                      <td>:   <select  class='box'  name='date' style =' font-size: 11px'>
                                <option > একটি নির্বাচন করুন</option>
                                <option value=1></option>
                                <option value=2></option>
                                <option value=3></option>
                                <option value=4></option> 
                            </select></td>
                    </tr>   
                    <tr>
                        <td>গ্রেড নির্বাচন</td>
                       <td>:    <select  class='box'  name='date' style =' font-size: 11px'>
                                <option > একটি নির্বাচন করুন</option>
                                <option value=1></option>
                                <option value=2></option>
                                <option value=3></option>
                                <option value=4></option> 
                            </select></td>
                    </tr>
                    <tr>
                        <td>সেলারি</td>
                       <td>:   <input class='box' type='password' id='password' name='password' /> টাকা</td>
                    </tr>
                     <tr>
                        <td>অফিস / সেলস স্টোর / পাওয়ার স্টোর</td>
                        <td>: <input class='box' type='text' id='officesearch' name='officesearch' />
                        </td>            
                    </tr>
                    <tr>
                        <td>দায়িত্ব / পোস্ট</td>
                        <td>: <input class='box' type='text' id='officesearch' name='officesearch' />
                        </td>            
                    </tr>
                    <tr>
                        <td>যোগদানের তারিখ</td>
                        <td>: <input class='box' type='text' id='date' placeholder='Date' name='date' value=''/>
                        </td>            
                    </tr>";
                    echo "<tr>                    
                        <td colspan='4' style='padding-left: 250px; '>";
                    if($_POST['submit'])
                            {
                            echo "<a href='$pass_message'>পরবর্তী ধাপে যেতে ক্লিক করুন</a>";
                            }
                    else echo "<input class='btn' style ='font-size: 12px;' type='submit' name='submit' value='সেভ করুন' />";
                    echo "</td>                           
                    </tr>             
                </table>";
                
                ?>
            </form>
        </div>
    </div>      
</div> 
<?php
include 'includes/footer.php';
?>