<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<title>লোন প্রদান</title>
<style type="text/css"> @import "css/bush.css";</style>
<link rel="stylesheet" type="text/css" media="all" href="javascripts/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="javascripts/jsDatePick.min.1.3.js"></script>
<script type="text/javascript" src="javascripts/jquery-1.4.3.min.js"></script>
<script>
    var fieldName='chkName[]';
    function numbersonly(e)
   {
        var unicode=e.charCode? e.charCode : e.keyCode
            if (unicode!=8)
            { //if the key isn't the backspace key (which we should allow)
                if (unicode<48||unicode>57) //if not a number
                return false //disable key press
            }
}
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
        <div style="padding-left: 110px;"><a href="index.php?apps=HRE"><b>ফিরে যান</b></a></div>
        <div>
            <form method="POST" onsubmit="" name="" action="cheque_make_out.php">	
                <table  class="formstyle" style="font-family: SolaimanLipi !important;">          
                    <tr><th colspan="2" style="text-align: center;">লোন প্রদান</th></tr>
                    <tr>
                        <td>
                            <div style="font-family: SolaimanLipi !important;height: 300px;">
                                <div id="left" style="border: 1px solid black; width: 50%; float: left;height: 100%">
                                    <div id="top" style="border-bottom: 1px solid black;padding: 5px;">
                                        <b>কর্মচারী আইডি&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <input class="box" type="text" name="emp_search"/>
                                        <span id="emp_search"></span>
                                    </div>
                                    <div id="bottom" style="padding: 5px;">
                                        <b>লোনের পরিমাণ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <input class="box" type="text" name="emp_search"/> টাকা</br></br>
                                        <b>ফান্ডের নাম&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>  <select class="box2" name="transfer_to" style="width: 167px;">
                                <option value="">পেনশন</option>
                                <option value="">রিপড ইনকাম</option>
                                <option value="">এক্সট্রা</option>
                            </select></br></br>
                                        <b>লোন পরিশোধ সিস্টেম :</b> <input class="box" type="text" name="emp_search"/></br></br>
                                        <b>কিস্তি&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <input class="box" type="text" name="emp_search"/></br></br>
                                        <b>কিস্তির পরিমাণ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <input class="box" type="text" name="emp_search"/>  টাকা
                                    </div>
                                </div>
                                <div id="ri8" style="border: 1px solid black; width: 48%; float: left;height: 100%">
                                    <div id="top" style="border-bottom: 1px solid black;padding: 5px; text-align: center;">
                                        <b>কর্মচারী প্রোফাইল</b> 
                                    </div>
                                    <div id="profile" style="padding: 5px;">
                                        
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>                    
                        <td colspan="2" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                        <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>    
                </table>
                </fieldset>
            </form>
        </div>           
    </div>
    <?php
    include 'includes/footer.php';
    ?>
