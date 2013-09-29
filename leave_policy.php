<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
error_reporting(0);
if (isset($_POST['submit'])) {
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
<script type="text/javascript"> 
     $(function (){   
        var count = 0;           
        $('p#add_field').click(function (){
            if(count<1){
                $('#container_others').append( '<table style ="border: 1px solid black;"><tr ><td style ="border: 1px solid black;"> '
                    + 'কর্মচারীর ক্যাটাগরী</td>' 
                    + ' <td style ="border: 1px solid black;">' 
                    + 'গ্রেড'
                    + ' <td style ="border: 1px solid black;">' 
                    + 'ছুটি গণনা</td></tr>'
                +'<tr ><td > '
                    + 'কর্মচারী</td>' 
                    + ' <td >' 
                    + 'এ'
                    + ' <td>' 
                    + '<input class="box2" type="text" name="e_name" class="box" />দিন</td></tr></table>'
            );	
                count = count + 1;
            }
        });
    });  
</script>
<div class="column6">
    <div class="main_text_box">
        <?php
        if ($_GET['action'] == 'new') {
            ?>	      
            <div>  
                <div style="padding-left: 170px;"><a href="index.php?apps=HRE"><b>ফিরে যান</b></a><a style="padding-left: 390px;" href="leave_policy.php?action=new"><b>নতুন ছুটি তৈরী করুন</b></a><a style="padding-left: 10px;" href="leave_policy.php?action=list"><b>ছুটির তালিকা</b></a></div>
                <form method="POST" onsubmit="" style=" padding-left: 60px;">	
                    <table  class="formstyle" style=" width: 85%; padding-left: 5px; padding-top: 10px; padding-bottom: 8px;"> 
                        <?php
                        if ($msg != "") {
                            echo '<tr><td ></td><td colspan="4" style="text-allign: center; color: red; font-size: 15px"><blink>' . $msg . '</blink></td></tr>';
                        }
                        ?>
                        <tr><td>ছুটির নাম : </td>
                            <td><input class="box" type="text" name="e_name" class="box" /></td>
                        </tr>
                        <tr><td>ছুটির কোড :</td>
                            <td> <input class="box" type="text" name="e_email" class="box" /></td>
                        </tr>
                        <tr><td>বর্ণনা : </td>
                            <td><textarea class="box" type="text" name="e_subject" class="box" /></textarea></td>
                        </tr>                       
                        <tr >
                            <td></td>
                            <td id="container_others" ><p id="add_field"><input type="button" class="add4" value="টোটাল ছুটি যোগ করুন"/></p></td>
                        </tr>
                        <tr>                    
                            <td colspan="4" style="padding-left: 200px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                        </tr> 
                    </table>
                </form>
            </div>
            <?php
        } elseif ($_GET['action'] == 'list') {
            ?>
            <div style="padding-top: 10px;">   
                <div style="padding-left: 170px;"><a href="index.php?apps=HRE"><b>ফিরে যান</b></a><a style="padding-left: 390px;" href="leave_policy.php?action=new"><b>নতুন ছুটি তৈরী করুন</b></a><a style="padding-left: 10px;" href="leave_policy.php?action=list"><b>ছুটির তালিকা</b></a></div>
                <form method="POST" onsubmit="" style=" padding-left: 60px;">	
                    <table   class="formstyle">      
                        <tr>
                            <th colspan="8" >ছুটির লিস্ট </th>                        
                        </tr>  
                        <tr id = "table_row_odd">
                            <td>ছুটির ধরণ</td>
                            <td >ছুটির কোড</td>
                            <td >বর্ণনা</td>
                        </tr>
                    </table>
                </form>  
            </div>         
        <?php } ?>
    </div>
</div>
<?php include_once 'includes/footer.php'; ?>