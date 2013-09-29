<?php

include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
?>
<style type="text/css">
    @import "css/iftee_statement.css";
</style>
<script type="text/javascript" src="javascripts/area.js"></script>
<script type="text/javascript" src="javascripts/external/mootools.js"></script>
<script type="text/javascript" src="javascripts/dg-filter.js"></script>
<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=EA"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01"> ইন এমাঊন্ট</a></li> <li class="current"><a href="#02"> আঊট এমাঊন্ট</a></li><li class="current"></a></li>       
            </ul>
        </div>    
        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <form method="POST" onsubmit="">
                <table  class="formstyle">    
                    <tr><th colspan="12" style="text-align: center" ><h1></h1>ব্যালেন্স ডেসঞিপশন</th></tr>
                    <tr><td colspan="2" ></td></tr>
                    <tr align="left" id="table_row_odd">
                        <td>তারিখ</td>
                        <td> বেতনিক মাসের নাম</td>
                        <td> এমাউন্ট</td>
                        <td> ট্রান্সফারারের একাউন্ট নাম্বার</td>
                        <td> পরিমাণ</td>
                        <td>পার্সনাল ইন নাম্বার</td>  
                        <td>পরিমাণ</td>
                        <td> পারচেইজ আর্ন</td>
                        <td> বেতন এমাউন্ট </td>
                        <td> মোট পরিমাণ</td>
                    </tr> 
                    <tr>
                        <td>০১-০৬-২০১৩</td>
                        <td>জুন</td>
                        <td>২৫০০০</td>
                        <td>ac-২০২৩৯</td>  
                        <td> ৩০০০</td>
                        <td> ac- ২০২৩৯</td>
                        <td>৩০০০</td>
                        <td>৩০০০</td>
                        <td>২৮০০০</td>
                        <td>২৮০০০ </td>
                    </tr>
                    <tr>                                   
                        <td></td>
                        <td></td>
                        <td> সর্বমোট এমাউন্ট : ২৫০০০ </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>  সর্বমোট এমাউন্ট : ২৮০০০    </td>
                    </tr>
                </table>
        </div>
        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <form method="POST" onsubmit="">
                <table  class="formstyle">    
                    <tr><th colspan="12" style="text-align: center" ><h1></h1>ব্যালেন্স ডেসঞিপশন</th></tr>
                    <tr><td colspan="4" ></td></tr>

                    <tr align="left" id="table_row_odd">
                        <td>তারিখ</td>
                        <td> চেক নাম্বার</td>
                        <td> এমাউন্ট</td>
                        <td> ট্রান্সফারকৃত নাম্বার</td>
                        <td> একাউন্ট</td>
                        <td> এমাউন্ট</td>  
                        <td> সেন্ড এর পিন নাম্বার</td>     
                        <td>  এমাউন্ট </td>
                        <td> মোট  এমাউন্ট</td>
                    </tr> 
                    <tr>
                        <td>০১-০৬-২০১৩</td>
                        <td>ac-২০২৩৯</td>
                        <td>২৫০০০</td>
                        <td>ac-২০২৩৮</td>  
                        <td> ৩০০০</td>
                        <td> ২৮০০০</td>
                        <td>৩৪৪৩</td>           
                        <td>২৫০০০</td>
                        <td>২৮০০০ </td>
                    </tr>
                    <tr>                                   
                        <td></td>
                        <td></td>
                        <td> সর্বমোট এমাউন্ট : ২৫০০০ </td>
                        <td></td>
                        <td></td>
                        <td> সর্বমোট এমাউন্ট : ২৫০০০ </td>
                        <td></td>
                        <td> সর্বমোটএমাউন্ট : ২৮০০০    </td>
                    </tr>
                   
                </table>
                       </form>
        </div>
    </div>
</div>
<?php

include 'includes/footer.php';
?>