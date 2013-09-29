<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<title>জেনোলজি ট্রি</title>
<style type="text/css"> @import "css/bush.css";</style>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8"/>
<script language="JavaScript" type="text/javascript" src="productsearch.js"></script>
<link rel="stylesheet" href="css/css.css" type="text/css" media="screen" />
 <script src="scripts/tinybox.js" type="text/javascript"></script>
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
                    <tr><th colspan="2" style="text-align: center;">জেনোলজি ট্রি</th></tr>
                    <tr id="print">
                        <td style="text-align: center;">
                            <table style="width: 50%;" cellspacing="0" cellpadding="0">
                                <thead style="background-color: #ffcccc">
                                <th style="border: black 1px solid;">প্যাকেজ</th>
                                <th style="border: black 1px solid;" >অ্যাকাউন্টের সংখ্যা</th>
                                </thead>
                                <tbody>
                                    <td style="border: black 1px solid;"></td>
                                <td style="border: black 1px solid;"></td>
                                <td style="border: black 1px solid;color: brown;">স্টে</br>প</br> ১</td>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table  cellspacing="0" cellpadding="0">
                                <thead style="background-color: #ffcccc">
                                <th style="border: black 1px solid;">ক্রম</th>
                                <th style="border: black 1px solid;" >নাম</th>
                                <th style="border: black 1px solid;">অ্যাকাউন্ট নং</th>
                                <th style="border: black 1px solid;">পিন নং</th>
                                <th style="border: black 1px solid;">প্যাকেজের নাম</th>
                                <th style="border: black 1px solid;">অ্যাকাউন্ট করার তারিখ</th>
                                <th style="border: black 1px solid;">রেফারারের নাম</th>
                                </thead>
                                <tbody>
                                <td style="border: black 1px solid;"></td>
                                <td style="border: black 1px solid;"></td>
                                <td style="border: black 1px solid;"></td>
                                <td style="border: black 1px solid;"></td>
                                <td style="border: black 1px solid;"></td>
                                <td style="border: black 1px solid;"></td>
                                <td style="border: black 1px solid;"></td>
                                <td style="border: black 1px solid;">স্টে</br>প</br> ১</td>
                                </tbody>
                            </table>
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