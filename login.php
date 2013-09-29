<?php
error_reporting(0);
$message = '';
include_once 'includes/ConnectDB.inc';
include_once 'includes/MiscFunctions.php';
if (isset($_POST['submit'])) {
    // echo "if Condition";

    if (!isset($PathPrefix)) {
        $PathPrefix = '';
    }

    if (!isset($AllowAnyone)) { // only do security checks if AllowAnyone is not true 
        //echo "if Condition in Anyone";
        include $PathPrefix . 'includes/UserLogin.php'; // Login checking and setup 
        if (isset($_POST['UserNameEntryField']) and isset($_POST['Password'])) {
            $rc = userLogin($_POST['UserNameEntryField'], $_POST['Password'], $db, $dbname);
        } elseif (empty($_SESSION['DatabaseName']) && isset($_SESSION['FormID'])) {
            $rc = UL_SHOWLOGIN;
        } else {
            $rc = UL_OK;
        }

        //  Need to set the theme to make login screen nice 
        //$theme = (isset($_SESSION['Theme'])) ? $_SESSION['Theme'] : 'silverwolf';
        //echo $rc;
        switch ($rc) {
            case UL_OK;
                //echo "UL_OK Case ";
                echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
                exit();
                //break;

            case UL_SHOWLOGIN:
                //include($PathPrefix . 'Login.php');
                //---------echo "UL_ShowLogin Case";
                $message = 'ভুল তথ্য, আবার চেষ্টা করুন';
                //exit();
                break;

            case UL_BLOCKED:
                // die(include($PathPrefix . 'includes/FailedLogin.php'));
                //--------echo "BLOCKED case";
                $message = 'ভুল তথ্য, আবার চেষ্টা করুন';
                //exit();
                break;
            case UL_CONFIGERR:
                //$title = _('Account Error Report');
                //include($PathPrefix . 'includes/header.inc');
                //echo '<br /><br /><br />';
                //prnMsg(_('Your user role does not have any access defined for webERP. There is an error in the security setup for this user account'),'error');
                //include($PathPrefix . 'includes/footer.inc');
                //------echo "ConfigError case";
                $message = 'ভুল তথ্য, আবার চেষ্টা করুন';
                //exit();
                break;

            case UL_NOTVALID:
                //$demo_text = '<font size="3" color="red"><b>' .  _('incorrect password') . '</b></font><br /><b>' . _('The user/password combination') . '<br />' . _('is not a valid user of the system') . '</b>';
                //die(include($PathPrefix . 'login.php'));
                //------echo "NotValid case";
                $message = 'ভুল তথ্য, আবার চেষ্টা করুন';
                //break;
                //exit();
                break;
            case UL_MAINTENANCE:
                // $demo_text = '<font size="3" color="red"><b>' . _('system maintenance') . '</b></font><br /><b>' . _('webERP is not available right now') . '<br />' . _('during maintenance of the system') . '</b>';
                //die(include($PathPrefix . 'login.php'));
                //----echo "\nMaintaina case";
                $message = 'ভুল তথ্য, আবার চেষ্টা করুন';
                //exit();
                break;
        }
    } //only do security checks if AllowAnyone is not true 
    
}

function CryptPass($Password) {
    global $CryptFunction;
    if ($CryptFunction == 'sha1') {
        return sha1($Password);
    } elseif ($CryptFunction == 'md5') {
        return md5($Password);
    } else {
        return $Password;
    }
}

// include_once 'includes/public_header.php';
?>

<div style="margin-top: 10%; margin-left: 40%;margin-bottom: 10%;">

    <div class="left_box">
        <div class="top_left_box"></div>
        <div class="center_left_box">
            <div class="box_title">
                <span>লগইন</span> করুন
            </div>
            <?php 
            echo "<h2 align = 'center' style =\"color:red\"><blink>".$message."</blink></h2>";
            ?>

            <div class="form">
                <form method ="post" onsubmit="">
                   <!-- <input type =" hidden" name =" FormID" value =" <?php echo $_SESSION['FormID'] ?>" /> -->

                    <div class="form_row">
                        <label class="left">ইউজারনেমঃ </label><input type="text"
                                                                     class="form_input" name ="UserNameEntryField"/>
                    </div>
                    <div class="form_row">
                        <label class="left">পাসওয়ার্ডঃ </label><input type="password"
                                                                      class="form_input" name ="Password" />
                    </div>

                    <div style="float: right; padding: 10px 25px 0 0;">
                        <input type="submit" name ="submit" value ="Login"/>
                        <div class="form_row_register">
                            <a href="?apps=REG">রেজিস্টার</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="bottom_left_box"></div>
    </div>
</div>