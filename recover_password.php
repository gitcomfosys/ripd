<?php
error_reporting(0);
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>

<?php
$flag = "";
$msg = "";
if (isset($_POST['submit'])) {
    $account_number = $_POST['account_number'];
    $sql_account_info = mysql_query("SELECT * from $dbname.customer_account, $dbname.cfs_user where account_number = '$account_number' And cfs_user_idUser=idUser");

    $check_account_info_row = mysql_num_rows($sql_account_info);
    if ($check_account_info_row > 0) {
        $row_account_info = mysql_fetch_array($sql_account_info);
        //print_r($row_account_info);
        //$idCustomer_account = $row_account_info['idCustomer_account'];
        $cust_name = $row_account_info['account_name'];
        $cust_acc_number = $row_account_info['account_number'];
        $cust_father_name = $row_account_info['cust_father_name'];
        $cust_mother_name = $row_account_info['cust_mother_name'];
        $cust_mobile = $row_account_info['mobile'];
        //$scanDoc_picture = $row_account_info['scanDoc_picture']; 
        $scanDoc_picture = "images/demon2.jpg";
        $referer_id = $row_account_info['referer_id'];
        $cfs_user_idUser = $row_account_info['cfs_user_idUser'];
        $user_password = $row_account_info['password'];

        //referer Information
        $sql_referer_info = mysql_query("SELECT * from $dbname.cfs_user where idUser = '$referer_id'");
        //$row_number_referer_info = mysql_num_rows($sql_referer_info);
        $row_referer_info = mysql_fetch_array($sql_referer_info);
        $referer_cust_acc_number = $row_referer_info['account_number'];
        $referer_cust_name = $row_referer_info['account_name'];
        $referer_cust_mobile = $row_referer_info['mobile'];
        //echo "referer Id: ".$referer_id." row_number_referer_info".$row_number_referer_info." referer_cust_acc_number ".$referer_cust_acc_number."referer_cust_name:".$referer_cust_name."referer_cust_mobile".$referer_cust_mobile;
        //referer password
        ?>
        <div class="columnSld" style=" padding-left: 50px;">
            <div class="main_text_box">
                <div style="padding-left: 110px;"><a href="recover_password.php"><b>ফিরে যান</b></a></div>
                <div>           
                    <form method="POST" onsubmit="">	
                        <table class="formstyle"  style=" width: 98%; ">          
                            <tr>
                                <th style="text-align: center" colspan="3"><h1>পাসওয়ার্ড পুনরুদ্ধার</h1>
                            </th>
                            </tr>
                            <tr><td colspan="2"></td>
                            </tr>                          
                            <tr>
                                <td colspan="2"><input class="box" type="hidden" name="cfs_user_id" value="<?php echo $cfs_user_idUser; ?>"></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td style="text-align: right;"><img src='<?php echo $scanDoc_picture; ?>' alt='Iftee'></td>      
                            </tr>

                            <tr>
                                <td>একাউন্ট নাম্বার</td>
                                <td>: <input  class ="box" type="text" id="account_number" name="account_number" value="<?php echo $cust_acc_number; ?>" readonly/></td>                                      
                            </tr>
                            <tr>
                                <td>নাম</td>
                                <td >:  <input  class ="box" type="text" id="name" name="name" value="<?php echo $cust_name; ?>" readonly/> </td>
                            </tr>
                            <tr>
                                <td>পিতার নাম</td>
                                <td >:  <input  class ="box" type="text" id="fathers_name" name="fathers_name" value="<?php echo $cust_father_name; ?>"  readonly/> </td>
                            </tr>
                            <tr>
                                <td>মাতার নাম</td>
                                <td >:  <input  class ="box" type="text" id="Mothers_name" name="Mothers_name" value="<?php echo $cust_mother_name; ?>" readonly/> </td>
                            </tr>
                            <tr>
                                <td>মোবাইল নাম্বার</td>
                                <td >:  <input  class ="box" type="text" id="mobile_number" name="mobile_number" value="<?php echo $cust_mobile; ?>" readonly/></td>
                            </tr>
                            <tr>
                                <td>পাসওয়ার্ড</td>
                                <td >: <input  class ="box" type="text" id="password" name="new_password"  value="<?php echo $user_password; ?>"/> </td>
                            </tr>
                            <tr>
                                <td>রেফারার একাউন্ট নাম্বার</td>
                                <td >:  <input  class ="box" type="text" id="referrer_account_number" name="referrer_account_number" value="<?php echo $referer_cust_acc_number; ?>" readonly/> </td>
                            </tr>
                            <tr>
                                <td>রেফারার নাম</td>
                                <td >:  <input  class ="box" type="text" id="referrer_name" name="referrer_name" value="<?php echo $referer_cust_name; ?>" readonly/> </td>
                            </tr>
                            <tr>
                                <td>রেফারার মোবাইল নাম্বার</td>
                                <td >:  <input  class ="box" type="text" id="referrer_mobile_number" name="referrer_mobile_number" value="<?php echo $referer_cust_mobile; ?>" readonly/> </td>
                            </tr>
                            <tr>                    
                                <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit_confirm" value="সেভ করুন" />
                                    <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" />
                                </td>                           
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <?php
    } else {
        $flag = "false";
        $msg = "There is No User of This account: " . $account_number;
    }
} elseif (isset($_POST['submit_confirm'])) {
    $new_password = $_POST['new_password'];
    $account_number = $_POST['account_number'];
    $cfs_user_id = $_POST['cfs_user_id'];
    //echo "new_password" . $new_password . "account_number" . $account_number . "cfs_user_id" . $cfs_user_id;
    $sql_update_recover_password = "UPDATE " . $dbname . ".cfs_user SET password='$new_password' where idUser='$cfs_user_id'";
    if (mysql_query($sql_update_recover_password)) {
        $flag = "true";
        $msg = "You have successfully Recovered Password of Account Number: " . $account_number;
    } else {
        $flag = "false";
        $msg = "Error, Please try Again";
    }
} else {
    ?>
    <div class="columnSld" style=" padding-left: 50px;">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=CA"><b>ফিরে যান</b></a></div>
            <div>           
                <form method="POST" onsubmit="">	
                    <table class="formstyle"  style=" width: 98%; ">          
                        <tr><th style="text-align: center" colspan="2"><h1>পাসওয়ার্ড পুনরুদ্ধার</h1>
                        </th>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                        </tr>            
                        <tr>
                            <td style="width: 50%; text-align: center;">একাউন্ট নাম্বার</td>
                            <td style="width: 50%">: <input  class ="box" type="text" id="account_number" name="account_number" /></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr>                    
                            <td colspan="2" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="খুঁজুন" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" />
                            </td>                           
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <?php
}
if (!empty($msg)) {
    ?>
    <div class="columnSld" style=" padding-left: 50px;">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=CA"><b>ফিরে যান</b></a></div>
            <div>           
                <form method="POST" onsubmit="">	
                    <table class="formstyle"  style=" width: 98%; ">          
                        <tr><th style="text-align: center" colspan="2"><h1>পাসওয়ার্ড পুনরুদ্ধার</h1>
                        </th>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                        </tr>   
                    <?php
                    if ($flag == 'true') {
                        echo '<td colspan="2" height="40px" style="text-align: center;"><b><span style="color:green;font-size:20px;"><blink>' . $msg . '</blink></b></td></tr><tr>';
                    } else {
                        echo '<td colspan="2" height="40px" style="text-align: center;"><b><span style="color:red;font-size:20px;"><blink>' . $msg . '</blink></b></td></tr><tr>';
                    }
                    ?>              
                        <tr>
                            <td style="width: 50%; text-align: center;">একাউন্ট নাম্বার</td>
                            <td style="width: 50%">: <input  class ="box" type="text" id="account_number" name="account_number" /></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr>                    
                            <td colspan="2" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="খুঁজুন" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" />
                            </td>                           
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <?php
}
include_once 'includes/footer.php';
?>