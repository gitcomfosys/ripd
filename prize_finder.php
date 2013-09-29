<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<script type="text/javascript" src="javascripts/external/mootools.js"></script>
<script type="text/javascript" src="javascripts/dg-filter.js"></script>
<style type="text/css">
    body{font-family: Trebuchet MS, Arial;}ul li ul{margin-left:20px;}
</style>    
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
        <div style="padding-left: 110px;"><a href="index.php?apps=VA"><b>ফিরে যান</b></a></div>  

        <div>
            <form method="POST" onsubmit="" name="frm">
                <table  class="formstyle">          
                    <tr><th colspan="8" style="text-align: center;">ফাইন্ড প্রোডাক্ট প্রাইজ</th></tr>
                    <tr></tr>
                    <tr>
                        <td >প্রোডাক্ট ক্যাটাগরি : <select class="box2" name="transfer_to" >
                                <option value="">ভোগ্যপণ্য</option>
                                <option value="">কসমেটিকস</option>
                                <option value="">পোষাক</option>
                                <option value="">ইলেকট্রিক</option>
                                <option value="">প্লাস্টিক</option>
                                <option value="">কুকারিজ</option>
                                <option value="">ট্রাভেল</option>
                                <option value="">বেভারেজ</option>
                                <option value="">মটর</option>
                                <option value="">চিকিৎসা</option>
                                <option value="">আবাসন</option>
                                <option value="">মুদি বাজার</option>
                                <option value="">বাচ্চদের জন্য</option>
                                <option value="">অন্যান্য</option>
                            </select>  
                        </td>                            
                        <td >প্রোডাক্টের নাম : <select class="box2" name="transfer_to" >
                                <option value="">চাউল</option>
                                <option value="">আটা</option>
                            </select>                            
                        </td>                      
                        <td >ব্র্যান্ড :  <select class="box2" name="fund_name" >
                                <option value="">প্রাণ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" ><hr /></td>
                    </tr>
                    <tr>
                        <td ><b>এরিয়া অনুসারে অফিসের নাম ও নাম্বার</b></td>
                    </tr>
                    <tr>
                        <td><label for="filterField">খুঁজুন  :</label> &nbsp;&nbsp;&nbsp;<input class="box" type="text" id="filterField"></td>
                        <td colspan="4">                            
                            <ul id="treeToBeFiltered">
                                সিলেক্ট অল  :  &nbsp;&nbsp;<input type="checkbox" name="allCheck" onClick="selectallMe()">
                                <li><span class="listItem">ঢাকা</span>
                                    <ul>
                                        <li><input type="checkbox"  name="chkName" onClick="selectall()" />  &nbsp;&nbsp;&nbsp;<span class="listItem">মেইন পাওয়ার স্টোর অফিস (PSON-501-501)</span></li>
                                        <li><input type="checkbox"  name="chkName" onClick="selectall()" />  &nbsp;&nbsp;&nbsp;<span class="listItem">হেড স্টোর অফিস (PSON-501-501)</span></li>
                                        <li><input type="checkbox"  name="chkName" onClick="selectall()" />  &nbsp;&nbsp;&nbsp;<span class="listItem">Denmark (PSON-531-501)</span></li>
                                    </ul>
                                </li>
                                <li><span class="listItem">এশিয়া</span>
                                    <ul>
                                        <li><input type="checkbox"  name="chkName" onClick="selectall()" />  &nbsp;&nbsp;&nbsp;<span class="listItem">পাওয়ার স্টোর অফিস (PSON-801-501)</span></li>
                                        <li><input type="checkbox"  name="chkName" onClick="selectall()" />  &nbsp;&nbsp;&nbsp;<span class="listItem">হেড অফিস (PSON-591-501)</span></li>
                                        <li><input type="checkbox"  name="chkName" onClick="selectall()" />  &nbsp;&nbsp;&nbsp;<span class="listItem">অফিস (PSON-901-501)</span></li>
                                    </ul>
                                </li>
                            </ul></td>   
                        <td></td>
                    </tr> 
                    <tr>                    
                        <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>
                    <tr> <td colspan="4">
                            <table id="office_info_filter" border="1" align="center" width= 99%" cellpadding="5px" cellspacing="0px">                
                                <tr align="left" id="table_row_odd">
                                    <th><?php echo "সর্বোচ্চ মূল্য"; ?></th>
                                    <th><?php echo "মধ্যম মূল্য"; ?></th>
                                    <th><?php echo "সর্বনিম্ন মূল্য"; ?></th>
                                    <th><?php echo "সর্বোচ্চ বিক্রয়মূল্য"; ?></th>
                                    <th><?php echo "সর্বনিম্ন বিক্রয়মূল্য"; ?></th>                  
                                </tr>
                            </table> </td></tr>
                </table> 
            </form>
        </div>  
    </div>
</div>
<script type="text/javascript">

    var filter = new DG.Filter({
        filterField : $('filterField'),
        filterEl : $('treeToBeFiltered'),
        xPathFilterElements : '.listItem',
        onMatchShowChildren : true
    });
</script>
<?php
include 'includes/footer.php';
?>