<?php

include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>


<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=PSA"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">ক্রয়মূল্য</a></li>
                <li class="current"><a href="#02">প্রফিট</a></li>
                <li class="current"><a href="#03">পেনশন এমাউন্ট</a></li>
                <li class="current"><a href="#04">অল ইন ওয়ান</a></li>
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="2" style="text-align: center;">ক্রয়মূল্য</th></tr>
                <tr>
                    <td>মোট ফান্ড</td>
                    <td>:    <input  class ="textfield" type="text" id="total_fund" name="total_fund" /></td>
                </tr> 
                <tr>
                    <td>লাস্ট উত্তোলন</td>
                    <td>:    <input  class ="textfield" type="text" id="last_withdrawal" name="last_withdrawal" />&nbsp;
                        তারিখ:    <input  class ="textfield" type="text" id="last_withdrawal_date" name="last_withdrawal_date" /></td>
                </tr>                
            </table>
        </div>

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <table  class="formstyle">
                <tr><td>
                <div class="domtab">
                    <ul class="domtabs">
                        <li class="current"><a href="#021">এক্সট্রা প্রফিট</a></li>
                        <li class="current"><a href="#022">সেলিং আর্ন</a></li>
                        <li class="current"><a href="#023">টোটাল প্রফিট</a></li>
                    </ul>
                </div>
                    </td></tr>
                <tr><td>
                        <div>
                            <h2><a name="021" id="021"></a></h2><br/>
                            <table  class="formstyle">          
                                <tr><th colspan="8" style="text-align: center;">এক্সট্রা প্রফিট</th></tr>
                                <!-- <tr align="left" id="table_row_odd">
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
                                </tr>   -->           
                            </table>
                        </div>                       

                        <div>
                            <h2><a name="022" id="022"></a></h2><br/>
                            <table  class="formstyle">          
                                <tr><th colspan="8" style="text-align: center;">সেলিং আর্ন</th></tr>
                                <!-- <tr align="left" id="table_row_odd">
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
                                </tr>   -->              
                            </table>
                        </div> 

                        <div>
                            <h2><a name="023" id="023"></a></h2><br/>
                            <table  class="formstyle">          
                                <tr><th colspan="8" style="text-align: center;">টোটাল প্রফিট</th></tr>
                                <!-- <tr align="left" id="table_row_odd">
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
                                </tr>   -->             
                            </table>
                        </div>

                    </td></tr>
            </table>
        </div>    

        <div>
            <h2><a name="03" id="03"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="11" style="text-align: center;">পেনশন এমাউন্ট</th></tr>
               <!-- <tr> 
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
            </table>
        </div>

        <div>
            <h2><a name="04" id="04"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="11" style="text-align: center;">অল ইন ওয়ান</th></tr>
                <tr> 
                <tr>
                    <td colspan="4"><b>মোট এমাউন্ট :</b><input  class="box" type="text" id="total_amount" name="total_amount" /></td>       
                    <td colspan="4"><b>সার্চ/খুঁজুন :</b><input type="text" id="search_box_filter">    
                    </td>
                </tr>
                <tr align="left" id="table_row_odd">
                    <td>ক্রম</td>
                    <td>ফান্ড নাম</td>
                    <td>এমাউন্ট</td>
                </tr> 
                <tr>
                    <td>০১</td>
                    <td>ফান্ড ০১</td>
                    <td>১০৩৪৮৯৩</td>
                </tr>
                <tr>
                    <td>০২</td>
                    <td>ফান্ড ০২</td>
                    <td>৩৮৯৩</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right">মোট এমাউন্ট</td>
                    <td>১৫৬৮৯৩</td>
                </tr>

            </table>
        </div>

    </div>
    <?php

    include 'includes/footer.php';
    ?>