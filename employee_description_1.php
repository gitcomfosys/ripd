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
        <div style="padding-left: 110px;"><a href="index.php?apps=EA"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">প্রমোশন ডেসক্রিপশন</a></li> <li class="current"><a href="#02">পোষ্টিং ডেসক্রিপশন</a></li><li class="current"><a href="#03">সেলারী ডেসক্রিপশন</a></li><li class="current"><a href="#04">পেনশন</a></li>
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="2" style="text-align: center;">প্রমোশন ডেসক্রিপশন</th></tr>
                    <tr>
                        <td>রানিং পজিশন :  ম্যানেজার</td>            
                    </tr>
                    <tr>
                        <td >পজিশন অর্জনের তারিখ :  ১৪-০৪-২০১৩</td>                                  
                    </tr>
                    <tr>
                        <td>প্রথম পজিশন :  ম্যানেজার</td>            
                    </tr>
                    <tr>
                        <td >প্রথম পজিশন অর্জনের তারিখ :  ১৪-০৪-২০১৩</td>                                  
                    </tr>    
                    <tr>
                        <td>পরবর্তী পজিশনস :  ম্যানেজার</td>            
                    </tr>   
                    <tr>
                        <td >পরবর্তী পজিশনস অর্জনের তারিখ :  ১৪-০৪-২০১৩</td>                                  
                    </tr>    
                </table>
                </fieldset>
            </form>
        </div>

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="2" style="text-align: center;">পোষ্টিং ডেসক্রিপশন</th></tr>
                    <tr>
                        <td>প্রথম ইন অফিস নেইম : হেড অফিস</td>            
                    </tr>
                    <tr>
                        <td >অফিস নাম্বার : PSON2356</td>                                  
                    </tr>
                    <tr>
                        <td>ইনের তারিখ : ১৪-৪-১১</td>            
                    </tr>
                    <tr>
                        <td >স্টে টাইম : ২ বছর</td>                                  
                    </tr>    
                    <tr>
                        <td>পোষ্টিংএর তারিখ : ১৪-৪-১৩</td>            
                    </tr>   
                    <tr>
                        <td >পরবর্তী অফিস নেইম : পাওয়ার অফিস</td>                                  
                    </tr>  
                    <tr>
                        <td >অফিস একাউন্ট নাম্বার : AC1222555</td>                                  
                    </tr> 
                    <tr>
                        <td >স্টে টাইম : ৩ দিন</td>                                  
                    </tr> 
                </table>
                </fieldset>
            </form>
        </div>   
        <div>
            <div>
                <h2><a name="03" id="03"></a></h2><br/>
                <form method="POST" onsubmit="" name="frm">	
                    <table  class="formstyle">          
                        <tr><th colspan="6" style="text-align: center;">সেলারী ডেসক্রিপশন</th></tr>
                        <tr>
                            <td> সেলারী ডেসঞিপশনঃ </td>   
                        </tr>
                        <tr>
                            <td > পদবী নামঃ ম্যানেজার </td>                                                 
                        </tr>
                        <tr>
                            <td> চাকুরীর বয়সঃ ৬৫ বছর </td>        
                        </tr>
                        <tr>
                            <td> স্কেলঃ ১৩০০ </td>       
                        </tr>
                        <tr>
                            <td> টিএডিএঃ </td>                   
                        </tr>
                        <tr>
                            <td> হাঊজ রেন্টঃ ২% </td>               
                        </tr>
                        <tr>
                            <td> রেসনঃ ২% </td>                     
                        </tr>
                        <tr>
                            <td>  চিকিৎসাঃ ৮%</td>                   
                        </tr>
                        <tr>
                            <td> বেতনঃ ২৫০০০ </td>             
                        </tr>
                        <tr>
                            <td> মোট বেতনঃ ২০০০০ </td>    
                        </tr>
                        <tr>
                            <td> পেনশনঃ ২০০০০০</td>         
                        </tr>
                        <tr>
                            <td> হাঊজ রেন্ট(যদি রিপড নির্ধারিত হয়) ঃ ৫%</td>
                        </tr>
                        <tr>
                            <td> নিট বেতনঃ ২৪০০০০</td>
                        </tr>
                        <td colspan="2" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           

                    </table>
                </form>
            </div> 
            <div>
                <h2><a name="04" id="04"></a></h2><br/>
                <form method="POST" onsubmit="" name="frm">	
                    <table  class="formstyle">          
                        <tr><th colspan="6" style="text-align: center;">পেনশন</th></tr>
                        <tr>
                            <td> পেনশনঃ ২০০০০০</td>         
                        </tr>
                                            <tr>
                           <td> পেনশন হারঃ ২০%</td>         
                    </tr>
                    </table>
                    </fieldset>
                </form>
            </div>      
        </div>
        <?php

        include 'includes/footer.php';
        ?>