<?php
error_reporting(0);
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<?php
$user_id = 1;

if (isset($_POST['submit']) && ($_GET['action'] == 'new')) {
    $account_number = $_POST['account_number'];
    $account_status = "confiscated";
    $cause = $_POST['cause'];
    $scan_document = "";
    
    $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG","pdf");
    //$file_name1 = $_FILES['scan_document_confiscated']['name'];
    $extension = end(explode(".", $_FILES['scan_document_confiscated']['name']));
    $scan_doc_name = $account_number."_". $_FILES['scan_document_confiscated']['name'];
    $scan_doc_path_temp = "images/scan_doc_closed_postpond/".$scan_doc_name;
    if (($_FILES['scan_document_confiscated']['size'] < 999999999999) && in_array($extension, $allowedExts)) 
            {
                    move_uploaded_file($_FILES['scan_document_confiscated']['tmp_name'], $scan_doc_path_temp);
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
    //echo "file_name1: ".$file_name1." hello world"."scan_document:".$scan_document."File_name: ".$_FILES['scan_document_confiscated']['name']." scan_doc_name: ".$scan_doc_name."<br/>";
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
            //echo "check_acr_row_number: ".$check_acr_row_number;
            $sql_insert_acr = "INSERT into $dbname.account_close_restart (account_status, action_date, action_userID, coz_of_account_close, scan_doc, Customer_account_idCustomer_account) 
                                                    VALUES ('$account_status', Now(), '$user_id', '$cause', '$scan_document', '$idCustomer_account')";
            $sql_update_cfs_user = "UPDATE " . $dbname . ".cfs_user SET cfs_account_status='$account_status' where idUser = '$idUser'";
            if (mysql_query($sql_insert_acr) && mysql_query($sql_update_cfs_user)) {
                $msg = "You Have Successfully Confiscated Account: " . $account_number;
            } else {
                $msg = "দুঃখিত, আবার চেষ্টা করুন......";
            }
        } elseif ($check_acr_row_number>0) {
            $row_info_acr = mysql_fetch_array($sql_check_account_close_restart);
            $current_account_status = $row_info_acr['account_status'];
            //echo "current_account_status".$current_account_status;
            if ($current_account_status == "closed") {
                $msg = $account_number . " একাউন্ট-টি স্থায়ীভাবে বন্ধ আছে ";
            }elseif ($current_account_status == "confiscated") {
                $msg = $account_number . " একাউন্ট-টি সাময়িক বন্ধ আছে ";
            } else {
                $sql_update_acr = "UPDATE " . $dbname . ".account_close_restart SET account_status='$account_status', action_date=Now(), action_userID = '$user_id', coz_of_account_close='$cause', scan_doc='$scan_document' where Customer_account_idCustomer_account = '$idCustomer_account'";
                $sql_update_cfs_user = "UPDATE " . $dbname . ".cfs_user SET cfs_account_status='$account_status' where idUser = '$idUser'";
                if (mysql_query($sql_update_acr) && mysql_query($sql_update_cfs_user)) {
                    $msg = "You Have Successfully Confiscated Account: " . $account_number;
                } else {
                    $msg = "দুঃখিত, আবার চেষ্টা করুন";
                }
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
        var account_id=document.forms["account_confiscate_form"]["account_number"].value;
        if (account_id==null || account_id=="")
        {
            alert("You Should Give An Account Number");
            return false;
        }
  
        var fup = document.getElementById('scan_document_confiscated');
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
if ($_GET['action'] == 'new') {
    ?>
    <div style="padding-top: 10px;">    
        <div style="padding-left: 110px; width: 49%; float: left"><a href="index.php?apps=CRM"><b>ফিরে যান</b></a></div>
        <div style=""><a href="confiscate_account.php?action=new"> একাউন্ট সাময়িক বন্ধ-করন</a>&nbsp;&nbsp;<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">সাময়িক বন্ধ একাউন্ট লিস্ট</a></div>
    </div>
    <div>           
        <form name="account_confiscate_form" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">	
            <table class="formstyle"  style=" width: 78%; ">          
                <tr><th style="text-align: center" colspan="3"><h1>একাউন্ট সাময়িক বন্ধ-করণ</h1>
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
                    <td style="width: 55%"><input  class ="box" type="text" id="account_number" name="account_number" />
                    </td>                                      
                </tr>
                <tr>
                    <td>কারন</td>
                    <td>:</td>
                    <td style="padding-left: 0px"><textarea id="cause" name="cause" ></textarea>
                </tr>
                <tr>
                    <td>স্ক্যান ডকুমেন্ট</td>
                    <td>:</td>
                    <td > <input class="box" type="file" id="scan_document_confiscated" name="scan_document_confiscated" style="font-size:10px;"/> </td>
                </tr>
                <tr>                    
                    <td colspan="3" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                        <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" />
                    </td>                           
                </tr>
            </table>
        </form>
    </div>
    <?php
} else {
    ?>
    <div style="padding-top: 10px;">    
        <div style="padding-left: 110px; width: 49%; float: left"><a href="index.php?apps=CRM"><b>ফিরে যান</b></a></div>
        <div style=""><a href="confiscate_account.php?action=new"> একাউন্ট সাময়িক বন্ধ-করন</a>&nbsp;&nbsp;<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">সাময়িক বন্ধ একাউন্ট লিস্ট</a></div>
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
                    echo "<tr>
                        <td>$account_name</td>
                        <td>$account_number</td>
                        <td><textarea style=\"height: 30px; width: 200px; margin:0px\" id=\"cause\" name=\"cause\" readonly>$coz_of_account_close</textarea></td>
                        <td><a href=\"$scan_doc\" target=\"_blank\">স্ক্যান ডকুমেন্ট</a></td>
                        <td>$action_date</td>  
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