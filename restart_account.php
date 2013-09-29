<?php
error_reporting(0);
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<?php
$user_id = 1;

if (isset($_POST['submit']) && ($_GET['action'] == 'restart')) {
    $account_number = $_POST['account_number'];
    $account_status = "restarted";
    $cause = $_POST['cause'];
    //$restarted_customer_acc_id = $_POST['restart_customer_account_id'];
    $scan_document = "";
    
    $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG","pdf");
    //$file_name1 = $_FILES['scan_document_restarted']['name'];
    $extension = end(explode(".", $_FILES['scan_document_restarted']['name']));
    $scan_doc_name = $account_number."_". $_FILES['scan_document_restarted']['name'];
    $scan_doc_path_temp = "images/scan_doc_closed_postpond/".$scan_doc_name;
    if (($_FILES['scan_document_restarted']['size'] < 999999999999) && in_array($extension, $allowedExts)) 
            {
                    move_uploaded_file($_FILES['scan_document_restarted']['tmp_name'], $scan_doc_path_temp);
                    $scan_document = $scan_doc_path_temp;
            } 
    else 
            {
            echo "Invalid file format.";
            }
    //echo "<pre>";       
    //print_r($_POST);
    
    //print_r($_FILES);
    //echo "</pre>";
    //echo "hello world"."scan_document:".$scan_document."File_name: ".$_FILES['scan_document_restarted']['name']." scan_doc_name: ".$scan_doc_name."<br/>";
    $sql_customer_account_row = mysql_query("SELECT * from $dbname.customer_account, $dbname.cfs_user where account_number = '$account_number' And cfs_user_idUser=idUser");
    $row_number_customer_account_row = mysql_num_rows($sql_customer_account_row);
    //echo "row_number_customer_account_row: ".$row_number_customer_account_row;
    if ($row_number_customer_account_row > 0) {
        $row_customer_account = mysql_fetch_array($sql_customer_account_row);
        $idUser = $row_customer_account['idUser'];
        $account_number = $row_customer_account['account_number'];
        $idCustomer_account = $row_customer_account['idCustomer_account'];

        $sql_check_account_close_restart = mysql_query("SELECT * from $dbname.account_close_restart where Customer_account_idCustomer_account = '$idCustomer_account'");
        $check_acr_row_number = mysql_num_rows($sql_check_account_close_restart);
        //echo "check_acr_row_number: ".$check_acr_row_number;
        if ($check_acr_row_number < 1) {
            $msg = "দুঃখিত, এই ".$account_number." নাম্বার টি বন্ধ না। আবার চেষ্টা করুন......";
        } elseif ($check_acr_row_number>0) {
            $row_info_acr = mysql_fetch_array($sql_check_account_close_restart);
            $current_account_status = $row_info_acr['account_status'];
           // echo "current_account_status".$current_account_status;
            
            if ($current_account_status == "confiscated") {
                $sql_update_acr = "UPDATE " . $dbname . ".account_close_restart SET account_status='$account_status', action_date=Now(), action_userID = '$user_id', coz_of_account_close='$cause', scan_doc='$scan_document' where Customer_account_idCustomer_account = '$idCustomer_account'";
                $sql_update_cfs_user = "UPDATE " . $dbname . ".cfs_user SET cfs_account_status='active' where idUser = '$idUser'";
                if (mysql_query($sql_update_acr) && mysql_query($sql_update_cfs_user)) {
                    $msg = "You Have Successfully Restarted Account: " . $account_number;
                } else {
                    $msg = "দুঃখিত, আবার চেষ্টা করুন";
                }
            }elseif ($current_account_status == "closed") {
                $msg = $account_number . " একাউন্ট-টি স্থায়ীভাবে বন্ধ আছে ";
            }else {
                $msg = $account_number . " একাউন্ট-টি চালু বন্ধ আছে ";                
            }
            //echo "check_acr_row_number: ".$check_acr_row_number;            
        } else {}
    } else {
        $msg = "দুঃখিত," . $account_number . " একাউন্ট নাম্বারের কোনো কাস্টমার নেই";
    }
}

//print_r($_POST);
//echo "account_number: ".$account_number." Cause: ".$cause." scan_document:".$scan_document." account_number_id: ".$account_number_id." postpone_type: ".$postpone_type;
//Check in account_close_restart Table
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<script>
    function validateForm()
    {
        var account_id=document.forms["account_restart_form"]["account_number"].value;
        if (account_id==null || account_id=="")
        {
            alert("You Should Give An Account Number");
            return false;
        }
  
        var fup = document.getElementById('scan_document_restarted');
        var fileName = fup.value;
        if(fileName==null || fileName==""){
            alert("আপনি কোনো স্ক্যান ডকুমেন্ট আপলোড করেন নাই। Please, Upload pdf, doc, Gif or Jpg content");
            fup.focus();
            return false;
        }else{
            var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
            if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "doc" || ext == "pdf")
            {
                return true;
            } 
            else
            {
                alert("Please, Upload pdf, doc, Gif or Jpg content");
                fup.focus();
                return false;
            }
        }
    }
</script>
<?php
if ($_GET['action'] == 'restart') {    
    ?>
    <div style="padding-top: 10px;">    
        <div style="padding-left: 110px; width: 47%; float: left"><a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"><b>ফিরে যান</b></a></div>
        <div style=""><a href="restart_account.php?action=restarted_list">পুনরায় চালুকৃত একাউন্ট লিস্ট</a>&nbsp;&nbsp;<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">সাময়িক বন্ধ একাউন্ট লিস্ট</a></div>
    </div>
    <div>           
        <form name="account_restart_form" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">	
            <table class="formstyle"  style=" width: 78%; ">          
                <tr><th style="text-align: center" colspan="3"><h1>একাউন্ট পুনরায় চালু-করণ</h1>
                </th>
                </tr>
                <tr>
                    <td colspan="3" height="25px" style="text-align: center;"><b>
                            <span style="color:green;font-size:20px;">
                            <blink><?php if (!empty($msg)) { echo $msg;} ?></blink></span></b>
                    </td>
                </tr>                    
                <tr>
                    <td style="width: 20%">একাউন্ট নাম্বার</td>
                    <td style="width: 1%">:</td>
                    <?php 
                    $restart_account_number = $_GET['account_number'];
                    echo "<td style=\"width: 55%\"><input  class =\"box\" type=\"text\" id=\"account_number\" name=\"account_number\" value=\"$restart_account_number\" readonly=\"\"/></td>";
                    //$restart_customer_acc_id = $_GET['customer_id'];
                    ?>
                                                         
                </tr>
                <tr>
                    <td>কারন</td>
                    <td>:</td>
                    <td style="padding-left: 0px"><textarea id="cause" name="cause" ></textarea>
                </tr>
                <tr>
                    <td>স্ক্যান ডকুমেন্ট</td>
                    <td>:</td>
                    <td > <input class="box" type="file" id="scan_document_restarted" name="scan_document_restarted" style="font-size:10px;"/> </td>
                </tr>
                <!-- <tr>
                    <td colspan="3"><input type="hidden" name="restart_customer_account_id" value=""></td>
                </tr>!-->
                <tr>                    
                    <td colspan="3" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                        <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" />
                    </td>                           
                </tr>
            </table>
        </form>
    </div>
<?php
} elseif($_GET['action'] == 'restarted_list') {
    ?>
    <div style="padding-top: 10px;">    
        <div style="padding-left: 110px; width: 47%; float: left"><a href="index.php?apps=CRM"><b>ফিরে যান</b></a></div>
        <div style=""><a href="restart_account.php?action=restarted_list"> পুনরায় চালুকৃত একাউন্ট লিস্ট</a>&nbsp;&nbsp;<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">সাময়িক বন্ধ একাউন্ট লিস্ট</a></div>
    </div>
    <div>
        <form method="POST" onsubmit="">	
            <table class="formstyle"  style=" width: 78%;" >      
                <tr>
                    <th colspan="6">পুনরায় চালুকৃত একাউন্ট লিস্ট</th>
                </tr>
                <tr id = "table_row_even" style="text-align: center" >
                    <td style="background-color: #89C2FA" >একাউন্ট নাম</td>
                    <td style="background-color: #89C2FA" >একাউন্ট নাম্বার</td> 
                    <td style="background-color: #89C2FA" >কারন</td>
                    <td style="background-color: #89C2FA" >স্ক্যান ডকুমেন্ট</td>
                    <td style="background-color: #89C2FA" >অ্যাকশন তারিখ</td>
                </tr>
                <?php
                $sql_closed_account_list = mysql_query("SELECT * from $dbname.account_close_restart, $dbname.customer_account, $dbname.cfs_user
                                                                        Where Customer_account_idCustomer_account=idCustomer_account AND cfs_user_idUser=idUser
                                                                                AND account_status = 'restarted' ORDER BY account_name");
                while ($row_closed_account_list = mysql_fetch_array($sql_closed_account_list)) {
                    $account_name = $row_closed_account_list['account_name'];
                    $account_number = $row_closed_account_list['account_number'];
                    $coz_of_account_close = $row_closed_account_list['coz_of_account_close'];
                    $scan_doc = $row_closed_account_list['scan_doc'];
                    $action_date = $row_closed_account_list['action_date'];
                    $customer_id = $row_closed_account_list['Customer_account_idCustomer_account'];
                    echo "<tr>
                        <td>$account_name</td>
                        <td>$account_number</td>
                        <td><textarea style=\"height: 30px; width: 200px; margin:0px\" id=\"cause\" name=\"cause\" readonly>$coz_of_account_close</textarea></td>
                        <td><a href=\"$scan_doc\" target=\"_blank\">স্ক্যান ডকুমেন্ট</a></td>
                        <td>$action_date</td>  
                    </tr>";
                }
                if (mysql_num_rows($sql_closed_account_list) < 1) {
                    echo "<tr><td colspan = '5' style='text-align: center; color: red;'>এই মূহুর্তে পুনরায় চালুকৃত কোনো একাউন্ট নাই</td></tr>";
                }
                ?>
            </table>
        </form>
    </div>
    <?php
} else {
    ?>
    <div style="padding-top: 10px;">    
        <div style="padding-left: 110px; width: 47%; float: left"><a href="index.php?apps=CRM"><b>ফিরে যান</b></a></div>
        <div style=""><a href="restart_account.php?action=restarted_list"> পুনরায় চালুকৃত একাউন্ট লিস্ট</a>&nbsp;&nbsp;<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">সাময়িক বন্ধ একাউন্ট লিস্ট</a></div>
    </div>
    <div>
        <form method="POST" onsubmit="">	
            <table class="formstyle"  style=" width: 78%;" >      
                <tr>
                    <th colspan="6">সাময়িক বন্ধ একাউন্ট লিস্ট</th>
                </tr>
                <tr id = "table_row_even" style="text-align: center" >
                    <td style="background-color: #89C2FA" >একাউন্ট নাম</td>
                    <td style="background-color: #89C2FA" >একাউন্ট নাম্বার</td> 
                    <td style="background-color: #89C2FA" >কারন</td>
                    <td style="background-color: #89C2FA" >স্ক্যান ডকুমেন্ট</td>
                    <td style="background-color: #89C2FA" >অ্যাকশন তারিখ</td>
                    <td style="background-color: #89C2FA" >অপশন</td>
                </tr>
                <?php
                $sql_closed_account_list = mysql_query("SELECT * from $dbname.account_close_restart, $dbname.customer_account, $dbname.cfs_user
                                                                        Where Customer_account_idCustomer_account=idCustomer_account AND cfs_user_idUser=idUser
                                                                                AND account_status = 'confiscated' ORDER BY account_name");
                while ($row_closed_account_list = mysql_fetch_array($sql_closed_account_list)) {
                    $account_name = $row_closed_account_list['account_name'];
                    $account_number = $row_closed_account_list['account_number'];
                    $coz_of_account_close = $row_closed_account_list['coz_of_account_close'];
                    $scan_doc = $row_closed_account_list['scan_doc'];
                    $action_date = $row_closed_account_list['action_date'];
                    $customer_id = $row_closed_account_list['Customer_account_idCustomer_account'];
                    echo "<tr>
                        <td>$account_name</td>
                        <td>$account_number</td>
                        <td><textarea style=\"height: 30px; width: 200px; margin:0px\" id=\"cause\" name=\"cause\" readonly>$coz_of_account_close</textarea></td>
                        <td><a href=\"$scan_doc\" target=\"_blank\">স্ক্যান ডকুমেন্ট</a></td>
                        <td>$action_date</td>
                         <td><a href='restart_account.php?action=restart&account_number=$account_number'>পুনরায় চালু করুন</a></td>  
                    </tr>";
                }
                if (mysql_num_rows($sql_closed_account_list) < 1) {
                    echo "<tr><td colspan = '5' style='text-align: center; color: red;'>এই মূহুর্তে কোনো একাউন্ট সাময়িক বন্ধ নেই</td></tr>";
                }
                ?>
            </table>
        </form>
    </div>    
    <?php
}
include_once 'includes/footer.php';
?>