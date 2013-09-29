<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
error_reporting(0);
if (isset($_POST['submit'])) {
    $e_name = $_POST['e_name'];
    $e_email = $_POST['e_email'];
    $e_subject = $_POST['e_subject'];
    $e_message = $_POST['e_message'];

    $e_sql = mysql_query("INSERT INTO $dbname.email (e_name, e_email, e_subject, e_message, e_date) VALUES ('$e_name', '$e_email', '$e_subject', '$e_message', NOW())");

    if ($e_sql) {
        $msg = "সফলভাবে মেইলটি প্রেরন করা হয়েছে";
    }
    else
        $msg = "দুঃখিত মেইলটি প্রেরন করা যায়নি.. আবার চেষ্টা করুন";
}
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<div class="column6">
    <div class="main_text_box">	      
        <div>  
            <div style="padding-left: 210px;"><a href="index.php?apps=VA"><b>ফিরে যান</b></a></div>
            <form method="POST" onsubmit="" style=" padding-left: 100px;">	
                <table   class="formstyle" style=" width: 80%; padding-left: 15px; padding-top: 10px; padding-bottom: 8px;"> 
                    <?php
                    if ($msg != "") {
                        echo '<tr><td ></td><td colspan="4" style="text-allign: center; color: red; font-size: 15px"><blink>' . $msg . '</blink></td></tr>';
                    }
                    ?>
                    <tr><td>নাম : </td>
                        <td><input type="text" name="e_name" class="box" /></td>
                    </tr>
                    <tr><td>ই-মেইল :</td>
                        <td> <input type="text" name="e_email" class="validate-email box" /></td>
                    </tr>
                    <tr><td>বিষয় : </td>
                        <td><input type="text" name="e_subject" class="box" /></td>
                    </tr>
                    <tr><td>তথ্য : </td>
                        <td><textarea id="text" name="e_message" rows="0" cols="0" class="box"></textarea></td>
                    </tr>
                    <tr>                    
                        <td colspan="4" style="padding-left: 200px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr> 
                </table>
            </form>
        </div>
    </div>
</div>
<?php
include 'includes/footer.php';
?>