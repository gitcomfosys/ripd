<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>

<script type="text/javascript" src="javascripts/area.js"></script>
<script type="text/javascript" src="javascripts/external/mootools.js"></script>
<script type="text/javascript" src="javascripts/dg-filter.js"></script>

<script>
    var fieldName='chkName1';
    function selectall1(){
        var i=document.frm1.elements.length;
        var e=document.frm1.elements;
        var name=new Array();
        var value=new Array();
        var j=0;
        for(var k=0;k<i;k++)
        {
            if(document.frm1.elements[k].name==fieldName)
            {
                if(document.frm1.elements[k].checked==true){
                    value[j]=document.frm1.elements[k].value;
                    j++;
                }
            }
        }
        checkSelect1();
    }
    function selectCheck1(obj)
    {
        var i=document.frm1.elements.length;
        for(var k=0;k<i;k++)
        {
            if(document.frm1.elements[k].name==fieldName)
            {
                document.frm1.elements[k].checked=obj;
            }
        }
        selectall1();
    }

    function selectallMe1()
    {
        if(document.frm1.allCheck1.checked==true)
        {
            selectCheck1(true);
        }
        else
        {
            selectCheck1(false);
        }
    }
    function checkSelect1()
    {
        var i=document.frm1.elements.length;
        var berror=true;
        for(var k=0;k<i;k++)
        {
            if(document.frm1.elements[k].name==fieldName)
            {
                if(document.frm1.elements[k].checked==false)
                {
                    berror=false;
                    break;
                }
            }
        }
        if(berror==false)
        {
            document.frm1.allCheck1.checked=false;
        }
        else
        {
            document.frm1.allCheck1.checked=true;
        }
    }
</script>

<div class="column6">
    <div class="main_text_box">
      <div style="padding-left: 110px;"><a href="index.php?apps=PROD"><b>ফিরে যান</b></a></div> 
        <div>
            <form method="POST" onsubmit="" name="frm1">
            <table  class="formstyle">          
                  <tr><th colspan="10" style="text-align: center;">পাবলিশড ইনফরমেশন</th></tr>
                    <tr>
                        <td >প্রোডাক্ট ক্যাটাগরি  : <select class="box2" name="transfer_to">
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
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table>
                                <tr align="left" id="table_row_odd">
                                    <td>ক্রম</td>
                                     <td >প্রোডাক্টের নাম</td> 
                                      <td >ব্র্যান্ড</td> 
                                      <td >একক</td>
                                        <td >সাইজ</td>
                                    <td><input type="checkbox" name="allCheck1" onClick="selectallMe1()"></td>
                                </tr>
                                <tr>
                                 <td>০১</td>                                                          
                        <td>চাউল</td> 
                        <td>প্রাণ</td>     
                          <td>লিটার</td> 
                           <td>মিডিয়াম</td> 
                              <td><input type="checkbox"  name="chkName1" onClick="selectall1()" /></td>
                                </tr> 
                                <tr>
                                 <td>০২</td>                                                          
                        <td>আটা </td>  
                         <td>প্রাণ</td>     
                          <td>লিটার</td>
                           <td>ছোট</td> 
                                <td><input type="checkbox"  name="chkName1" onClick="selectall1()" /></td>
                                </tr> 
                                <tr><td colspan="6" style="text-align: center;"><a href="office_search.php">অফিস সিলেক্ট করুন</a></td></tr>
                            </table>
                        </td>
                    </tr> 
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