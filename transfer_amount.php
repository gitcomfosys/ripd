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

<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=ACC"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">ট্রান্সফার ইন রিপড</a></li> <li class="current"><a href="#02">ট্রান্সফার ইন পাওয়ার স্টোর</a></li><li class="current"><a href="#03">ট্রান্সফার ইন অ্যাকাউন্ট</a></li>
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="2" style="text-align: center;">ট্রান্সফার ইন রিপড</th></tr>
                    <tr>
                        <td>মোট এমাউন্ট</td>
                        <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                    </tr>
                    <tr>
                        <td >এমাউন্ট</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" />  অথবা   <input class="box" type="text" id="p_amount" name="p_amount">(%)</td>                                  
                    </tr>
                    <tr>
                        <td>ট্রানফার টু</td>
                        <td>: <select class="box" name="transfer_to" style="width: 150px;">
                                <option value="">খাত ১</option>
                                <option value="">খাত ২</option>
                                <option value="">খাত ৩</option>
                                <option value="">খাত ৪</option>
                            </select>    
                        </td>                         
                    </tr>
                    <tr>
                        <td >ফান্ডের নাম</td>
                        <td>:  <select class="box" name="fund_name" style="width: 150px;">
                                <option value="">ফান্ড ১</option>
                                <option value="">ফান্ড ২</option>
                                <option value="">ফান্ড ৩</option>
                                <option value="">ফান্ড ৪</option>
                            </select> </td>			
                    </tr>
                    <tr>
                        <td >ফর ট্রানফার</td>
                        <td>:   <select class="box" name="for_transfer" style="width: 150px;">
                                <option value="">লোন পরিশোধ</option>
                                <option value="">ঘাটতি পূরণ</option>
                            </select></td>			
                    </tr>
                    <tr>
                        <td >আউটের ধরন</td>
                        <td>:   
                            <select class="box" name="out_type" style="width: 150px;">
                                <option value="">লোন</option>
                                <option value="">আর্ন</option>
                                <option value="">অতিরিক্ত</option>
                            </select>
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

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="2" style="text-align: center;">ট্রান্সফার ইন পাওয়ার স্টোর</th></tr>
                    <tr>
                        <td>টোটাল এমাউন্ট</td>
                        <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                    </tr>
                    <tr>
                        <td >এমাউন্ট</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" />   অথবা    <input class="box" type="text" id="p_amount" name="p_amount">(%)</td>                                  
                    </tr>
                    <tr>
                        <td>পাওয়ার স্টোরের নাম</td>
                        <td>: <select class="box" name="power_store" style="width: 150px;">
                                <option value="">পাওয়ার স্টোর ১</option>
                                <option value="">পাওয়ার স্টোর ২</option>
                                <option value="">পাওয়ার স্টোর ৩</option>
                                <option value="">পাওয়ার স্টোর ৪</option>
                            </select>    
                        </td>                         
                    </tr>
                    <tr>
                        <td>পাওয়ার স্টোর ফান্ড</td>
                        <td>: <select class="box" name="power_store_fund" style="width: 150px;">
                                <option value="">ফান্ড ১</option>
                                <option value="">ফান্ড ২</option>
                                <option value="">ফান্ড ৩</option>
                                <option value="">ফান্ড ৪</option>
                            </select>    
                        </td>                         
                    </tr>
                    <tr>
                        <td >ফান্ডের নাম</td>
                        <td>:  <select class="box" name="fund_name" style="width: 150px;">
                                <option value="">ফান্ড ১</option>
                                <option value="">ফান্ড ২</option>
                                <option value="">ফান্ড ৩</option>
                                <option value="">ফান্ড ৪</option>
                            </select> </td>			
                    </tr>
                    <tr>
                        <td >ফর ট্রানফার</td>
                        <td>:   <select class="box" name="for_transfer" style="width: 150px;">
                                <option value="">লোন পরিশোধ</option>
                                <option value="">ঘাটতি পূরণ</option>
                            </select></td>			
                    </tr>
                    <tr>
                        <td >আউটের ধরন</td>
                        <td>:   
                            <select class="box" name="out_type" style="width: 150px;">
                                <option value="">লোন</option>
                                <option value="">আর্ন</option>
                                <option value="">অতিরিক্ত</option>
                            </select>
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

        <div>
            <h2><a name="03" id="03"></a></h2><br/>
            <form method="POST" onsubmit="" name="frm">	
                <table  class="formstyle">          
                    <tr><th colspan="6" style="text-align: center;">ট্রান্সফার ইন অ্যাকাউন্ট</th></tr>
                    <tr>
                        <td>টোটাল এমাউন্ট</td>
                        <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                    </tr>
                    <tr>
                        <td >এমাউন্ট</td>
                        <td colspan="4">:   <input class="box" type="text" id="t_amount" name="t_amount" />   অথবা    <input class="box" type="text" id="p_amount" name="p_amount">(%)</td>                                  
                    </tr>
                    <tr>
                        <td>ট্রানফার টু</td>
                        <td>: <select class="box" name="transfer_to" style="width: 150px;">
                                <option value="">খাত ১</option>
                                <option value="">খাত ২</option>
                                <option value="">খাত ৩</option>
                                <option value="">খাত ৪</option>
                            </select>    
                        </td>                         
                    </tr>
                    <tr>
                        <td >ফান্ডের নাম</td>
                        <td>:  <select class="box" name="fund_name" style="width: 150px;">
                                <option value="">ফান্ড ১</option>
                                <option value="">ফান্ড ২</option>
                                <option value="">ফান্ড ৩</option>
                                <option value="">ফান্ড ৪</option>
                            </select> </td>			
                    </tr>
                    <tr>
                        <td >ফর ট্রানফার</td>
                        <td>:   <select class="box" name="for_transfer" style="width: 150px;">
                                <option value="">লোন পরিশোধ</option>
                                <option value="">ঘাটতি পূরণ</option>
                            </select></td>			
                    </tr>
                    <tr>
                        <td>আউটের ধরন</td>
                        <td>:   
                            <select class="box" name="out_type" style="width: 150px;">
                                <option value="">লোন</option>
                                <option value="">আর্ন</option>
                                <option value="">অতিরিক্ত</option>
                            </select>
                        </td>			
                    </tr>   
                    <tr> 
                        <td colspan="4" style="text-align: center">
                            <?php
                            include_once 'includes/areaSearch.php';
                            getArea("infoProgramFromThana()");
                            ?>
                        </td>                    
                    </tr>
                    <tr>
                        <td colspan="6">
                            <table>
                                <tr align="left" id="table_row_odd">
                                    <td>ক্রম</td>
                                    <td>অফিস নাম</td>
                                    <td>মোট ব্যালেন্সড</td>
                                    <td>ফান্ড ব্যালেন্সড</td>
                                    <td>ইন এমাউন্ট</td>
                                    <td><input type="checkbox" name="allCheck" onClick="selectallMe()"></td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>অফিস ০৩</td>
                                    <td>১০৩৪০০০</td>
                                    <td>২৩৯০০</td>  
                                    <td><input type="text" name ="need_amount" id="in_amount" readonly></td>
                                    <td><input type="checkbox"  name="chkName" onClick="selectall()" /></td>
                                </tr> 
                                <tr>
                                    <td>02</td>
                                    <td>অফিস ০৪</td>
                                    <td>১০২৪০০</td>
                                    <td>১২০০</td>  
                                    <td><input type="text" name ="need_amount" id="in_amount" readonly></td>
                                    <td><input type="checkbox"  name="chkName" onClick="selectall()" /></td>
                                </tr>
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