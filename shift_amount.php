<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
if (isset($_POST['submit1'])) {
    $office_no = $_POST['office_no'];
    $offc_query = mysql_query("SELECT * FROM  $dbname.office where office_number = '$office_no'");
    $offc_row = mysql_fetch_assoc($offc_query);
    $off_id = $offc_row['idOffice'];  
    $ons_amount1 = $_POST['ons_amount1'];
    $ons_amount2 = $_POST['ons_amount2'];
    $ons_amount = $ons_amount1.".".$ons_amount2;
    $amount_query = mysql_query("INSERT into $dbname.ons_account 
                                          (ons_amount, ons_accid, ons_acc_type,ons_date_time)
                                     VALUES ( '$ons_amount', '$off_id','office',NOW())");
    if ($amount_query) {
        $msg = "তথ্য সংরক্ষিত হয়েছে";
    } else {
        $msg = "ভুল হয়েছে";
    }
}
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<script>
    function show_office(offc) // for types dropdown list
    {
        var xmlhttp;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                if(offc.length ==0)
                {
                    document.getElementById('show_office').style.display = "none";
                }
                else
                {document.getElementById('show_office').style.display = "inline"; }
                document.getElementById('show_office').innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","get_office.php?key="+offc,true);
        xmlhttp.send();	
    }
        
     function numbersonly(e)
   {
   
var unicode=e.charCode? e.charCode : e.keyCode
    if (unicode!=8)
    { //if the key isn't the backspace key (which we should allow)

        if (unicode<48||unicode>57) //if not a number
        return false //disable key press
    }
}
</script>
<?php
if ($_GET['opt'] == 'submit_ticket') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="shift_amount.php"><b>ফিরে যান</b></a></div> 
            <div>
                <form method="POST" onsubmit="" action="shift_amount.php?opt=accept_price">	
                    <table  class="formstyle">          
                        <tr><th colspan="4" style="text-align: center;">চেক</th></tr>                                
                        <tr>
                            <td style="width: 40%;text-align: center" colspan="2"></td>
                        </tr>
                        <tr>  
                            <td colspan="2" style="padding-left: 0;">
                                <div style="width: 700px; height: 300px; background-color: gray; margin: 0 auto;">
                                </div>
                            </td>
                        </tr>        
                        <tr>  
                            <td colspan="2" style="padding-left: 0;">
                                <div style="width: 700px; height: 300px; background-color: #EEE; margin: 0 auto">
                                </div>
                                Some info will be added
                            </td>
                        </tr>
                        <tr>                    
                            <td colspan="2" style="padding-left: 290px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit_ticket" value="সেভ করুন" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                        </tr>    
                    </table>
                </form>
            </div>
        </div>      
    </div>
    <?php
} else {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 182px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div> 
            <div class="domtab" style="padding-left: 182px;">
                <ul class="domtabs" style=" padding-left: 53px;width: 500px;">
                    <li class="current"><a href="#01">সিফট ফ্রম আদার অফিস</a></li>
                    <li class="current"><a href="#02">সিফট স্টেটমেন্ট</a></li> 
                </ul>
            </div>  
            <div>
                <h2><a name="01" id="01"></a></h2><br/>
                <div>
                    <form method="POST" onsubmit="" style=" padding-left: 70px;" action="shift_amount.php?opt=submit_ticket">	
                        <table  class="formstyle" style=" width: 85%;padding-bottom: 8px;">          
                            <tr><th colspan="4" style="text-align: center;">সিফট ফ্রম আদার অফিস</th></tr>
                            <tr>  
                            </tr>                            
                            <?php
                            if ($msg != "") {
                                echo '<tr><td ></td><td colspan="4" style="text-allign: center; color: green; font-size: 15px"><b>' . $msg . '</b></td></tr>';
                            }
                            ?>
                            <tr>
                                <?php
                                if (isset($_GET['code'])) {
                                    $id = $_GET['code'];
                                    $offc_query = mysql_query("SELECT * FROM  $dbname.office where idOffice =$id");
                                    $offc_name_row = mysql_fetch_assoc($offc_query);
                                    $off_name = $offc_name_row['office_name'];
                                    $off_no = $offc_name_row['office_number'];
                                }
                                ?> 
                                <td>এন্টার অফিস নেইম</td>
                                <td>:   <input class="box" type="text" id="office_name" name="office_name" onkeyup="show_office(this.value)" value="<?php echo $off_name; ?>" />  </br>
                                    <div id="show_office" style="position:absolute;top:260px;left:500px;width:155px;z-index:10;padding:5px;border: 1px inset black; overflow:auto; height:65px; background-color:#F5F5FF;display: none; "> </div>
                            </tr>
                            <tr>
                                <td>অফিস নাম্বার</td>
                                <td>:   <input class="box" type="text" id="office_no" name="office_no" readonly="" value="<?php echo $off_no; ?>" />                           
                            </tr>
                            <tr>
                                <td>এন্টার এমাউন্ট</td>
                                <td>:   <input class="box4" style="text-align: right" type="text"  id="ons_amount1" name="ons_amount1" onkeypress="return numbersonly(event)" />
                                 . <input class="boxTK" type="text" maxlength="2"  id="ons_amount2" name="ons_amount2" onkeypress="return numbersonly(event)" />TK<em> (ইংরেজিতে লিখুন)</em></td>                           
                            </tr>
                            <tr>                    
                                <td colspan="2" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit1" value="সেভ করুন" />
                                    <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                            </tr>    
                        </table>
                    </form>
                </div>                                
            </div>

            <div>
                <h2><a name="02" id="02"></a></h2><br/>
                <div>
                    <form method="POST" onsubmit="" action="shift_amount.php?opt=submit_ticket">	
                        <table  class="formstyle">                                       
                            <tr><th colspan="4" style="text-align: center;">সিফট স্টেটমেন্ট</th></tr>
                            <tr><td>
                                    <div class="domtab">
                                        <ul class="domtabs">
                                            <li class="current"><a href="#03">সিফট ইন</a></li>
                                            <li class="current"><a href="#04">সিফট আউট</a></li> 
                                        </ul>
                                    </div></td>
                            </tr>
                            <tr>
                                <td> <div>
                                        <h2><a name="03" id="03"></a></h2><br/>
                                        <table  class="formstyle"> 
                                            <tr>
                                                <td ><b>শুরুর তারিখঃ </b><input type="text" name="date_from" id="date_from" placeholder="Date From"  style="">&nbsp;&nbsp;</td>
                                                <td  ><b>শেষের তারিখঃ </b><input type="text" name="date_to" id="date_to" placeholder="Date To"  onclick="infoProgramFromThana()"></td>
                                                <td  style="vertical-align: bottom; padding-bottom: 25px;"><input type="submit" value="সাবমিট"></td>
                                                <td ><b>সার্চ/খুঁজুন :</b>                        
                                                    <input class="box" type="hidden" id="method" value="infoFromThana()">
                                                    <input class="box" type = "text" id ="search_box_filter">         
                                                </td> 
                                            </tr>
                                            <tr align="left" id="table_row_odd">
                                                <td>তারিখ</td>
                                                <td>অফিস নেইম</td>
                                                <td>অফিস নাম্বার</td>
                                                <td>চেক নাম্বার</td> 
                                                <td>এমাউন্ট</td>
                                            </tr> 
                                            <tr>
                                                <td>১২-০৫-২০১৩</td>
                                                <td>হেড অফিস</td>
                                                <td>৫৪৪১৫</td>
                                                <td>AC-03848888</td>
                                                <td>৫৪১৫৪৮৪৮৪১৫</td>
                                            </tr>
                                            <tr align="left" id="table_row_odd" >                                                 
                                                <td colspan="4" style="text-align: right;">টোটাল:</td>
                                                <td colspan="3" style="text-align: left;">৫৪৮৪৮৪৫১৭৮৫১৫/=</td>
                                            </tr>
                                        </table>
                                    </div>
                                </td> 
                            </tr>
                            <tr>
                                <td> <div>
                                        <h2><a name="04" id="04"></a></h2><br/>
                                        <table  class="formstyle"> 
                                            <tr>
                                                <td ><b>শুরুর তারিখঃ </b><input type="text" name="date_from" id="date_from" placeholder="Date From"  style="">&nbsp;&nbsp;</td>
                                                <td  ><b>শেষের তারিখঃ </b><input type="text" name="date_to" id="date_to" placeholder="Date To"  onclick="infoProgramFromThana()"></td>
                                                <td  style="vertical-align: bottom; padding-bottom: 25px;"><input type="submit" value="সাবমিট"></td>
                                                <td ><b>সার্চ/খুঁজুন :</b>                        
                                                    <input class="box" type="hidden" id="method" value="infoFromThana()">
                                                    <input class="box" type = "text" id ="search_box_filter">         
                                                </td> 
                                            </tr>
                                            <tr align="left" id="table_row_odd">
                                                <td>তারিখ</td>
                                                <td>অফিস নেইম</td>
                                                <td>অফিস নাম্বার</td>
                                                <td>চেক নাম্বার</td> 
                                                <td>এমাউন্ট</td>
                                            </tr> 
                                            <tr>
                                                <td>১২-০৫-২০১৩</td>
                                                <td>হেড অফিস</td>
                                                <td>৫৪৪১৫</td>
                                                <td>AC-03848888</td>
                                                <td>৫৪৪১৫</td>
                                            </tr>
                                            <tr align="left" id="table_row_odd" >                                                 
                                                <td colspan="4" style="text-align: right;">টোটাল:</td>
                                                <td colspan="3" style="text-align: left;">৪৫১৭৮৫১৫/=</td>
                                            </tr>
                                        </table>
                                    </div>
                                </td> 
                            </tr>
                        </table>
                    </form>
                </div>                                
            </div>

        </div>      
    </div>
    <?php
}
include 'includes/footer.php';
?>