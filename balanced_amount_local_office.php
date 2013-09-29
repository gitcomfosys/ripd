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
<script type="text/javascript" src="javascripts/area.js"></script>
<script type="text/javascript" src="javascripts/external/mootools.js"></script>
<script type="text/javascript" src="javascripts/dg-filter.js"></script>

<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>  

        <div>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th  colspan="2" style="text-align: center; width: 520px;height: 80px;">ব্যালেন্সড এমাউন্ট</th> </tr>
                        <tr>
                            <td>
                                <div class="domtab">
                                    <ul class="domtabs">
                                        <li class="current"><a href="#02">ইন ডেসক্রিপশন</a></li><li class="current"><a href="#03">আউট ডেসক্রিপশন</a></li><li class="current"><a href="#04">সর্বমোট ব্যালেন্স</a></li>
                                    </ul>
                                </div> 
                           </td>
                        </tr>
                </table>

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="2" style="text-align: center;">ইন ডেসক্রিপশন</th></tr>     
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
                    <tr><th colspan="6" style="text-align: center;">আউট ডেসক্রিপশন</th></tr>
                    <tr>                    
                        <td colspan="2" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>   
                </table>
                </fieldset>
            </form>
        </div>   

        <div>
            <h2><a name="04" id="04"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">সর্বমোট ব্যালেন্সড</th></tr>
                <tr>
                    <td colspan="2" ><b>শুরুর তারিখঃ </b><input type="text" name="date_from" id="date_from" placeholder="Date From"  style="">&nbsp;&nbsp;</td>
                    <td colspan="2" ><b>শেষের তারিখঃ </b><input type="text" name="date_to" id="date_to" placeholder="Date To"  onclick="infoProgramFromThana()"></td>
                    <td colspan="1" style="vertical-align: bottom"><input type="submit" value="সাবমিট"></td>
                </tr>
                <tr align="left" id="table_row_odd">
                    <td></td>
                    <td>তারিখ</td>
                    <td>মোট ইন এমাউন্ট</td>
                    <td>মোট আউট এমাউন্ট</td>
                    <td>ব্যালেন্সড এমাউন্ট</td> 
                </tr> 
                <tr>
                    <td>গতকাল</td>
                    <td>১২-০৫-২০১৩</td>
                    <td>৫৫৪৫৫১৫১</td>
                    <td>৫৪৪১৫</td>                            
                    <td>৫৪৮৮৮৫১৫১৫</td>
                </tr>
                <tr>
                    <td>আজ</td>
                    <td>১৩-০৫-২০১৩</td>
                    <td>৬৪৮৪১৫</td>
                    <td>৪৮৪৮৪</td>                            
                    <td>৯৮৮৫১১১</td>
                </tr>
                <tr align="left" id="table_row_odd" >                                                 
                    <td colspan="4" style="text-align: right;">টোটাল:</td>
                    <td colspan="3" style="text-align: left;">৫৪৮৪৮৪৫১৭৮৫১৫/=</td>
                </tr>
            </table>
            
        </div>
                
            </form>
        </div>
    </div>
    <?php

    include 'includes/footer.php';
    ?>