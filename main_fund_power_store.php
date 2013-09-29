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
        <div style="padding-left: 110px;"><a href="index.php?apps=PSA"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">ক্রয়মূল্য</a></li>
                <li class="current"><a href="#02">এক্সট্রা প্রফিট</a></li>
                <li class="current"><a href="#03">সেলিং আর্ন</a></li>
                <li class="current"><a href="#04">পেনশন এমাউন্ট</a></li>
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <table  class="formstyle">  
                <tr><td>
                        <div class="domtab">
                            <ul class="domtabs">
                                <li class="current"><a href="#011">ব্যালেন্সড ডেসক্রিপশন</a></li>
                                <li class="current"><a href="#012">ফান্ড এক্সপেন্ড</a></li>
                            </ul>
                        </div>
                    </td></tr>
                <tr>
                    <td>
                        <div>
                            <h2><a name="011" id="011"></a></h2><br/>
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
                                        ?><b>সেলস স্টোর:</b>
                                        <select class="box2" name="sales_store" style="width: 150px;">
                                            <option value="">সেলস স্টোর ০১</option>
                                            <option value="">সেলস স্টোর ০২</option>
                                            <option value="">সেলস স্টোর ০৩</option>
                                            <option value="">অল</option>
                                        </select>    
                                    </td>                    
                                </tr>
                                <tr align="left" id="table_row_odd">
                                    <td>ক্রম</td>
                                    <td>সেলস স্টোর নাম</td>
                                    <td>মোট ব্যালেন্সড</td>
                                    <td>ফান্ড ব্যালেন্সড</td>        
                                </tr> 
                                <tr>
                                    <td>০১</td>
                                    <td>সেলস স্টোর ০৬</td>
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
                        <div>
                            <h2><a name="012" id="012"></a></h2><br/>
                            <table  class="formstyle">          
                                <tr><th colspan="8" style="text-align: center;">ফান্ড এক্সপেন্ড</th></tr>
                               <!--
                               <tr align="left" id="table_row_odd">
                                    <td>ক্রম</td>
                                    <td>প্রোডাক্ট নাম</td>
                                    <td>পি.ভি</td>
                                    <td>স্টোর প্রোডাক্ট</td>                            
                                    <td>মোট বিক্রয়মূল্য</td>
                                    <td>মোট ক্রয়মূল্য</td>
                                    <td>মোট এক্সট্রা প্রোফিট</td>
                                    <td>মোট পি.ভি</td>
                                </tr> 
                                <tr>
                                    <td>12-02-13</td>
                                    <td>AC-0001-2901</td>
                                    <td>একাউন্ট</td>
                                    <td>ফান্ড ০১</td>  
                                    <td>১০%</td>
                                    <td>250000 /=</td>
                                    <td>নাই</td>
                                    <td>লোন</td
                                </tr>     
                               -->
                               <tr><td>Nothing is Given</td></tr>
                            </table>
                        </div>                       

                    </td></tr>
            </table>
        </div>

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="11" style="text-align: center;">এক্সট্রা প্রফিট</th></tr>
                <!--
                <tr> 
                                   
                </tr>
                <tr align="left" id="table_row_odd">
                    
                </tr> 
                <tr>
                    
                </tr>
                -->
                <tr><td>May be same as Main Grid</td></tr>
            </table>
        </div>    

        <div>
            <h2><a name="03" id="03"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="11" style="text-align: center;">সেলিং আর্ন</th></tr>
                <!--
                <tr> 
                    <td colspan="7" style="text-align: right"><b>প্রোডাক্ট ক্যাটাগরী:</b>
                        <select class="box2" name="product_categorty" style="width: 150px;">
                            <option value="">কর্মচারী গ্রেড ০১</option>
                            <option value="">কর্মচারী গ্রেড ০২</option>
                            <option value="">কর্মচারী গ্রেড ০৩</option>
                            <option value="">অল</option>
                        </select>    
                    </td>                   
                </tr>
                <tr align="left" id="table_row_odd">
                    <td>ক্রম</td>
                    <td>সেলস স্টোর নাম</td>
                    <td>বিক্রয়মূল্য</td>
                    <td>ক্রয়মূল্য</td>                           
                    <td>এক্সট্রা প্রফিট</td>
                    <td>পি.ভি</td>
                    <td>স্টোর প্রোডাক্ট</td>                           
                    <td>মোট বিক্রয়মূল্য</td>
                    <td>মোট ক্রয়মূল্য</td>
                    <td>মোট এক্সট্রা প্রোফিট</td>
                    <td>মোট পি.ভি</td>
                </tr> 
                <tr>
                    <td></td>
                    <td>02-82-11</td>
                    <td>AC-03201-2901</td>
                    <td>একাউন্ট</td>
                    <td>ফান্ড ০১</td>  
                    <td>28%</td>
                    <td>38290000 /=</td>
                    <td>নাই</td>
                    <td>অতিরিক্ত</td>
                    <td></td>
                    <td></td>
                </tr>
                -->
                <tr><td>May be same as Main Grid</td></tr>
            </table>
        </div>

        <div>
            <h2><a name="04" id="04"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="11" style="text-align: center;">পেনশন এমাউন্ট</th></tr>
                <tr><td>May be same as Main Grid</td></tr>
            </table>
        </div>

    </div>
    <?php
    include 'includes/footer.php';
    ?>