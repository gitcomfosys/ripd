<?php

include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
error_reporting(0);
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<script language="javascript" type="text/javascript">

    function getXmlHttpRequestObject() {
	if (window.XMLHttpRequest) {
		return new XMLHttpRequest();
	} else if(window.ActiveXObject) {
		return new ActiveXObject("Microsoft.XMLHTTP");
	} else {
		alert("Your Browser Sucks!");
	}
}

//Our XmlHttpRequest object to get the auto suggest
var searchReq = getXmlHttpRequestObject();

//Called from keyup on the search textbox.
//Starts the AJAX request.

</script>
<div class="column6">
    <div class="main_text_box">    
        <div style="padding-top: 10px;padding-left: 110px; "><a href="index.php?apps=HRE"><b>ফিরে যান</b></a></div>
        <div>
            <form method="POST" onsubmit="">	
                <table  class="formstyle" style =" width:78%"id="make_presentation_fillter">                   
                    <tr>
                        <th colspan="8" > কর্মচারী ছুটি প্রদান</th>                        
                    </tr>          
                    <tr>
                        <td colspan="8" style="text-align: right">
                            <b>প্রোডাক্ট নাম দিন&nbsp;&nbsp; :</b>
                                <input type="text" id="search_account_number" name="search_account_number" onKeyUp="employeeAccountSearch('employee_leave_policy.php');" autocomplete="off" style="width: 290px;"/>
                                <div style="position:absolute;top:340px;left:232px;width:285px;z-index:10;padding:5px;border: 1px inset black; overflow:auto; height:105px; background-color:#ABC5FF;display: none;" id="searchResult" >
                            একাউন্ট নাম্বার:  <input type="text" class="box" id="search_account_number" name="search_account_number" onKeyUp="employeeAccountSearch('employee_leave_policy.php');"/>
                        </td>
                    </tr>                  
                    <tr>                
                    </tr>
                     <?php
                                if (isset($_GET['cfs_id'])) {

                                    $G_summaryID = $_GET['cfs_id'];
                                    $result = mysql_query("SELECT * FROM cfs_user WHERE idUser = '$G_summaryID'");
                                    $row = mysql_fetch_assoc($result);
                                    $db_user_name = $row["user_name"];
                                    $db_account_name = $row["account_name"];
                                    $db_mobile = $row["mobile"];
                                    //$db_procode = $row["ins_product_code"];
                                    //$db_proPV = $row["ins_pv"];
                                    //$db_buyingprice = $row['ins_buying_price'];
                                }
                                ?>
                    <tr>
                        <td >ছুটির টাইপ</td>
                        <td>:  <select class="textfield" name="month" style =" font-size: 11px">
                                <option >টাইপ</option>
                                <option value="1">সাধারণ ছুটি</option>
                                <option value="2">সরকারী ছুটি</option>
                            </select></td>
                        <td rowspan='4'> <img src="images/iftee.jpg" width="128px" height="128px" alt="bush"></td> 	 
                    </tr>  
                    <tr>
                        <td >ছুটি শুরুর তারিখ</td>
                        <td>:  <input class="box" type="text" id="prop_father_name" name="prop_father_name" /></td>	  
                    </tr>  
                    <tr>
                        <td >ছুটির দিনের সংখ্যা</td>
                        <td>:  <input class="box" type="text" id="prop_father_name" name="prop_father_name" /></td>	  
                    </tr>  
                    <tr>
                        <td >বর্ণনা</td>
                        <td>&nbsp;  <textarea class="box" type="text" id="prop_father_name" name="prop_father_name"></textarea></td>
                    </tr> 
                    <tr>
                        <td >স্ক্যান ডকুমেন্টস</td>
                        <td>:   <input class="box" type="file" id="scanDoc_picture" name="scanDoc_picture" style="font-size:10px;"/></td>	 
                        <td>Name: <input type="text" id="user_name" value="<?php echo $db_user_name;?>"/></td>
                    </tr>     
                    <tr>
                        <td></td>
                        <td></td>
                        <td >mobile: <input type="text" id="mobile" value="<?php echo $db_mobile;?>"/></td>
                    </tr>    
                    <tr>
                        <td></td>
                        <td></td>
                        <td >০১৯১১৫৪৯৬৭৭</td>
                    </tr>                 
                </table>
            </form>
        </div>
    </div>
</div>
<?php include_once 'includes/footer.php'; ?>