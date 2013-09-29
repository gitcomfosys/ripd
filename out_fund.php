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

<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=ACC"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">ব্যালেন্সড ডেসক্রিপশন</a></li>
                <li class="current"><a href="#02">চেক মেইকিং ফর আউট</a></li>  
                <li class="current"><a href="#03">লোন স্টেটমেন্ট</a></li>
                <li class="current"><a href="#04">আর্ন স্টেটমেন্ট</a></li>
                <li class="current"><a href="#05">টোটাল স্টেটমেন্ট</a></li>
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="3" style="text-align: center;">ব্যালেন্সড ডেসক্রিপশন</th></tr>
                <tr>
                    <td style="text-align: center" colspan="3">টোটাল এ্যামাউন্ট :    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                </tr>
                <tr> 
                    <td colspan="8" style="text-align: center">
                        <?php
                        include_once 'includes/areaSearch.php';
                        getArea("infoProgramFromThana()");
                        ?>    
                        সার্চ/খুঁজুন:  <input type="text" id="search_box_filter">
                    </td>                    
                </tr>
                <tr align="left" id="table_row_odd">
                    <td>ক্রম</td>
                    <td>একাউন্ট নাম্বার</td>
                    <td>এডভান্সড এমাউন্ট</td>            
                </tr> 
                <tr>
                    <td>01</td>
                    <td>AC-12-4302-121</td>                
                    <td>10000 /=</td>
                </tr>
                <tr align="left" id="table_row_odd" >                                                 
                    <td colspan="2" style="text-align: right;">টোটাল:</td>
                    <td style="text-align: left;">10000 /=</td>
                </tr>
            </table>
        </div>

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="2" style="text-align: center;">চেক মেইকিং ফর আউট</th></tr>
                    <tr>
                        <td>টোটাল এ্যামাউন্ট</td>
                        <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                    </tr>
                    <tr>
                        <td >নীড এ্যামাউন্ট</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td>                                  
                    <tr>
                        <td >আউটের ধরন</td>
                        <td>:   
                            <select class="box" name="out_type" style="width: 150px;">
                                <option value="">লোন এমাউন্ট</option>
                                <option value="">আর্ন এমাউন্ট</option>
                            </select>
                        </td>			
                    </tr>  
                    <tr>
                        <td >খাত</td>
                        <td>:   
                            <select class="box" name="khatt" style="width: 150px;">
                                <option value="">খাত ০১</option>
                                <option value="">খাত ০২</option>
                                <option value="">খাত ০৩</option>
                                <option value="">খাত ০৪</option>
                            </select>
                        </td>			
                    </tr>
                    <tr>
                        <td >বাবদ</td>
                        <td>:   
                            <select class="box" name="babod" style="width: 150px;">
                                <option value="">লোন পরিশোধ</option>
                                <option value="">ঘাতটি পূরণ</option>
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
            <table  class="formstyle">          
                <tr><th colspan="4" style="text-align: center;"> লোন স্টেটমেন্ট</th></tr>

                <tr align="left" id="table_row_odd">
                    <td>তারিখ</td>
                    <td>সময়</td>
                    <td>চেক নাম্বার</td>
                    <td>এমাউন্ট</td>
                </tr> 
                <tr>
                    <td>02-০4-11</td>
                    <td>3:30 pm</td>
                    <td>AC-9039-1523</td>
                    <td>3000 /=</td>
                <tr align="left" id="table_row_odd" >                                                 
                    <td colspan="3" style="text-align: right;">টোটাল:</td>
                    <td style="text-align: left;">3000 /=</td>
                </tr>
            </table>
        </div>
        <div>
            <h2><a name="04" id="04"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="4" style="text-align: center;"> আর্ন স্টেটমেন্ট</th></tr>

                <tr align="left" id="table_row_odd">
                    <td>তারিখ</td>
                    <td>সময়</td>
                    <td>চেক নাম্বার</td>
                    <td>এমাউন্ট</td>
                </tr> 
                <tr>
                    <td>10-11-11</td>
                    <td>6:30 pm</td>
                    <td>AC-4239-2223</td>
                    <td>13000 /=</td>
                <tr align="left" id="table_row_odd" >                                                 
                    <td colspan="3" style="text-align: right;">টোটাল:</td>
                    <td style="text-align: left;">13000 /=</td>
                </tr>
            </table>
        </div>
        <div>
            <h2><a name="05" id="05"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="4" style="text-align: center;">টোটাল স্টেটমেন্ট</th></tr>

                <tr align="left" id="table_row_odd">
                    <td>তারিখ</td>
                    <td>সময়</td>
                    <td>চেক নাম্বার</td>
                    <td>এমাউন্ট</td>
                </tr> 
                <tr>
                    <td>22-০1-13</td>
                    <td>8:30 pm</td>
                    <td>AC-34539-463</td>
                    <td>5400 /=</td>
                <tr align="left" id="table_row_odd" >                                                 
                    <td colspan="3" style="text-align: right;">টোটাল:</td>
                    <td style="text-align: left;">5400 /=</td>
                </tr>
            </table>
        </div>

    </div>
    <?php
    include 'includes/footer.php';
    ?>