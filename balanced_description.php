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
<script type="text/javascript" src="javascripts/external/mootools.js"></script>
<script type="text/javascript" src="javascripts/dg-filter.js"></script>


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

<div class="columnSld" style=" padding-left: 50px;">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=ACC"><b>ফিরে যান</b></a></div>
        <div>           
            <table  class="formstyle">          
                                <tr><th colspan="8" style="text-align: center;">ব্যালেন্সড ডেসক্রিপশন</th></tr>
                                <tr>
                                    <td colspan="8" style="text-align: center;">মোট ফান্ড :<input  class ="textfield" type="text" id="total_fund" name="total_fund" /></td>
                                </tr> 
                                <tr> 
                                    <td colspan="8" style="text-align: center">
                                        <?php
                                        include_once 'includes/areaSearch.php';
                                        getArea("infoProgramFromThana()");
                                        ?><b>অফিস নাম:</b>
                                        <select class="box2" name="sales_store" style="width: 150px;">
                                            <option value="">অফিস ০১</option>
                                            <option value="">অফিস ০২</option>
                                            <option value="">অফিস ০৩</option>
                                            <option value="">অল</option>
                                        </select>    
                                    </td>                    
                                </tr>
                                <tr align="left" id="table_row_odd">
                                    <td>ক্রম</td>
                                    <td>অফিস নাম</td>
                                    <td>মোট ব্যালেন্সড</td>
                                    <td>ফান্ড ব্যালেন্সড</td>        
                                </tr> 
                                <tr>
                                    <td>০১</td>
                                    <td>অফিস ০৬</td>
                                    <td>২৭৮১০</td>
                                    <td>২০২৩৯</td>  
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: right">সর্বমোট ব্যালেন্সড</td>
                                    <td>২৭৮১০</td>
                                    <td>মোট ফান্ড: ২০২৩৯</td>
                                </tr>
                            </table>
        </div>
    </div>
</div>
    <?php
    include 'includes/footer.php';
    ?>