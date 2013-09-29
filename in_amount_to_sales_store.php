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
<script>
    var fieldName='chkName';
    function selectall(){
        var i=document.frm.elements.length;
        var e=document.frm.elements;
        var name=new Array();
        var value=new Array();
        var j=0;
        for(var k=0;k<i;k++)
        {
            if(document.frm.elements[k].name==fieldName)
            {
                if(document.frm.elements[k].checked==true){
                    value[j]=document.frm.elements[k].value;
                    j++;
                }
            }
        }
        checkSelect();
    }
    function selectCheck(obj)
    {
        var i=document.frm.elements.length;
        for(var k=0;k<i;k++)
        {
            if(document.frm.elements[k].name==fieldName)
            {
                document.frm.elements[k].checked=obj;
            }
        }
        selectall();
    }

    function selectallMe()
    {
        if(document.frm.allCheck.checked==true)
        {
            selectCheck(true);
        }
        else
        {
            selectCheck(false);
        }
    }
    function checkSelect()
    {
        var i=document.frm.elements.length;
        var berror=true;
        for(var k=0;k<i;k++)
        {
            if(document.frm.elements[k].name==fieldName)
            {
                if(document.frm.elements[k].checked==false)
                {
                    berror=false;
                    break;
                }
            }
        }
        if(berror==false)
        {
            document.frm.allCheck.checked=false;
        }
        else
        {
            document.frm.allCheck.checked=true;
        }
    }
</script>

<div class="columnSld" style=" padding-left: 50px;">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=PSA"><b>ফিরে যান</b></a></div>
        <div>           
            <form method="POST" onsubmit="" name="frm">	
                <table  class="formstyle">          
                    <tr><th colspan="3" style="text-align: center;">ইন এমাউন্ট টু সেলস স্টোর</th></tr>
                     <tr>
                        <td style="width: 20%">ইন বাবদ</td>
                        <td style="width: 1%">:</td>
                        <td style="width: 55%"><select class="box" name="in_type" style="width: 150px;">
                                <option value="">প্রোডাক্ট ক্রয়</option>
                                <option value="">অন্যান্য</option>
                            </select>
                        </td>                                      
                    </tr>                    
                    <tr>
                        <td>বর্ণনা</td>
                        <td>:</td>
                        <td style="padding-left: 0px"><textarea id="cause" name="cause" ></textarea>
                    </tr>
                    <tr>
                        <td>আউট ফান্ড</td>
                        <td>:</td>
                        <td><select class="box" name="fund_name" style="width: 150px;">
                                <option value="">ফান্ড ১</option>
                                <option value="">ফান্ড ২</option>
                                <option value="">ফান্ড ৩</option>
                                <option value="">ফান্ড ৪</option>
                            </select>
                        </td>                                      
                    </tr>    
                    <tr>
                        <td>আউটের ধরন</td>
                        <td>:</td>
                        <td><select class="box" name="out_type" style="width: 150px;">
                                <option value="">লোন</option>
                                <option value="">আর্ন</option>
                                <option value="">অতিরিক্ত</option>
                            </select>
                        </td>                                      
                    </tr>
                    <tr> 
                        <td colspan="3" style="text-align: center">
                            <?php
                            include_once 'includes/areaSearch.php';
                            getArea("infoProgramFromThana()");
                            ?>
                        </td>                    
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table>
                                <tr align="left" id="table_row_odd">
                                    <td>ক্রম</td>
                                    <td>সেলস স্টোর নাম</td>
                                    <td>মোট ব্যালেন্সড</td>
                                    <td>ইন এমাউন্ট</td>
                                    <td><input type="checkbox" name="allCheck" onClick="selectallMe()"></td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>সেলস স্টোর ০৩</td>
                                    <td>১০৩৪০০০</td>
                                    <td><input type="text" name ="need_amount" id="in_amount" readonly></td>
                                    <td><input type="checkbox"  name="chkName" onClick="selectall()" /></td>
                                </tr> 
                                <tr>
                                    <td>02</td>
                                    <td>সেলস স্টোর ০৪</td>
                                    <td>১০২৪০০</td>
                                    <td><input type="text" name ="need_amount" id="in_amount" readonly></td>
                                    <td><input type="checkbox"  name="chkName" onClick="selectall()" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>   

                    <tr>                    
                        <td colspan="3" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>    
                </table>
                </fieldset>
            </form>
        </div>
    </div>
</div>
    <?php
    include 'includes/footer.php';
    ?>