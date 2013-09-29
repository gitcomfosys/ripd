<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<script type="text/javascript" src="javascripts/area.js"></script>
<script type="text/javascript">
    function infoProgramFromThana()
    {
        var xmlhttp;
        if (window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
        else xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) 
                document.getElementById('office').innerHTML=xmlhttp.responseText;
        }
        var division_id, district_id, thana_id, date_from, date_to;
        division_id = document.getElementById('division_id').value;
        district_id = document.getElementById('district_id').value;
        thana_id = document.getElementById('thana_id').value;
        date_from = document.getElementById('date_from').value;
        date_to = document.getElementById('date_to').value;
        xmlhttp.open("GET","includes/infoProgramFromThana.php?dsd="+district_id+"&dvd="+division_id+"&ttid="+thana_id+"&df="+date_from+"&dt="+date_to,true);
        xmlhttp.send();
    }
</script>

<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=PROD"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">সার্চ বাই অফিস</a></li>
                <li class="current"><a href="#02">সার্চ বাই সেলস স্টোর</a></li>                  
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="8" style="text-align: center;">প্রোডাক্ট সার্চ বাই অফিস</th></tr>
                <tr> 
                    <td colspan="4" style="text-align: center">
                        <?php
                        include_once 'includes/areaSearch.php';
                        getArea("infoProgramFromThana()");
                        ?><b>সার্চ/খুঁজুন :</b>                        
                        <input class="box" type="hidden" id="method" value="infoFromThana()">
                        <input class="box" type = "text" id ="search_box_filter">         
                    </td>                    
                </tr>
                <tr></tr>
                <tr><th colspan="8" style="text-align: center;">সার্চ বাই অফিস</th></tr>
                <tr align="left" id="table_row_odd">
                    <td>ক্রম</td>
                    <td>প্রোডাক্ট ক্যাটাগরি</td>
                    <td>প্রোডাক্টের নাম</td>
                    <td>ব্র্যান্ড</td>
                    <td>গ্রুপ</td>
                    <td>সাইজ</td>       
                    <td>একক</td>  
                </tr> 
                <tr>
                    <td> ১ </td>
                    <td>ভোগ্যপণ্য</td>
                    <td>চাউল</td>
                    <td>প্রাণ</td>
                    <td>বাচ্চা</td>
                    <td>ছোট</td>
                    <td>লিটার</td>
                </tr>
                <tr>
                    <td> ২ </td>
                    <td>পোষাক</td>
                      <td>জ়ামা</td>
                    <td> রং </td>
                    <td>বাচ্চা</td>
                    <td>ছোট</td>
                    <td>গজ়</td>
                </tr>
                <tr></tr>
                <tr> <td colspan="8">
                        <table id="office_info_filter" border="1" align="center" width= 99%" cellpadding="5px" cellspacing="0px">                
                            <tr  id="table_row_odd">
                                <th><?php echo "অফিস নং"; ?></th>
                                <th><?php echo "অফিস নেইম"; ?></th>
                                <th><?php echo "অফিস নম্বর"; ?></th>
                                <th><?php echo "ব্রাঞ্চ নেইম"; ?></th>
                                <th><?php echo "ই-মেইল"; ?></th>                  
                            </tr>
                        </table> </td></tr>
            </table>
            </table>          
        </div>

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="8" style="text-align: center;">প্রোডাক্ট সার্চ বাই সেলস স্টোর</th></tr>
                <tr> 
                    <td colspan="4" style="text-align: center">
                        <?php
                        include_once 'includes/areaSearch.php';
                        getArea("infoProgramFromThana()");
                        ?><b >সার্চ/খুঁজুন :</b>                        
                        <input class="box" type="hidden" id="method" value="infoFromThana()">
                        <input class="box" type = "text" id ="search_box_filter">             
                    </td>                    
                </tr>
                <tr></tr>
              <tr><th colspan="8" style="text-align: center;">সার্চ বাই সেলস স্টোর</th></tr>
                <tr align="left" id="table_row_odd">
                    <td>ক্রম</td>
                    <td >প্রোডাক্ট ক্যাটাগরি</td>
                    <td >প্রোডাক্টের নাম</td>
                    <td>ব্র্যান্ড</td>
                    <td>গ্রুপ</td>
                    <td>সাইজ</td>       
                    <td>একক</td>  
                </tr> 
                <tr>
                    <td> ১ </td>
                    <td>ভোগ্যপণ্য</td>
                    <td>চাউল</td>
                    <td>প্রাণ</td>
                    <td>বাচ্চা</td>
                    <td>ছোট</td>
                    <td>লিটার</td>
                </tr>
                <tr>
                    <td> ২ </td>
                    <td>পোষাক</td>
                      <td>জ়ামা</td>
                    <td> রং </td>
                    <td>বাচ্চা</td>
                    <td>ছোট</td>
                    <td>গজ়</td>
                </tr>
                <tr></tr>
                <tr> <td colspan="8">
                        <table id="office_info_filter" border="1" align="center" width= 99%" cellpadding="5px" cellspacing="0px">

                            <tr  id="table_row_odd">
                                <th><?php echo "অফিস নং"; ?></th>
                                <th><?php echo "অফিস নেইম"; ?></th>
                                <th><?php echo "অফিস নম্বর"; ?></th>
                                <th><?php echo "ব্রাঞ্চ নেইম"; ?></th>
                                <th><?php echo "ই-মেইল"; ?></th>                  
                            </tr>
                        </table> </td></tr>
            </table>         
        </div>

    </div>
    <?php
    include 'includes/footer.php';
    ?>