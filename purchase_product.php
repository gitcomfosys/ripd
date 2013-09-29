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
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">পারচেইজ ফ্রম ওউন</a></li>
                <li class="current"><a href="#02">পারচেইজ ইন রিপড</a></li>  
                <li class="current"><a href="#03">পারচেইজ ফ্রম আদার্স</a></li>  
                <li class="current"><a href="#04">ট্রাঞ্জিট পয়েন্ট</a></li>  
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="6" style="text-align: center;">পারচেইজ ফ্রম ওউন</th></tr>
                <tr>
                        <td >প্রোডাক্ট ক্যাটাগরি</td>
                        <td>: <select class="box" name="transfer_to" style="width: 150px;">
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
                        <td >প্রোডাক্টের নাম</td>
                        <td>: <select class="box" name="transfer_to" style="width: 150px;">
                                <option value="">চাউল</option>
                                <option value="">আটা</option>
                            </select> 
                        </td>          
                    </tr>
                <tr align="left" id="table_row_odd">
                    <td>ক্রম</td>
                    <td>তারিখ</td>
                    <td></td>
                    <td></td>            
                </tr> 
                <tr>
                    <td>১</td>
                    <td>০১-০২-২০১৩</td>
                    <td>অফিস সেলিং চার্ট</td>
                    <td></td>  
                </tr>
            </table>
        </div>
        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="7" style="text-align: center;">পারচেইজ ইন রিপড</th></tr>
                    <tr align="left" id="table_row_odd">
                        <td>ক্রম</td>
                        <td>তারিখ</td>
                        <td>সময়</td>
                        <td>এমাউন্ট</td>
                        <td>চেক</td>
                        <td>ট্রান্সফার</td>      
                        <td>সেন্ট</td>
                    </tr> 
                    <tr>
                        <td>২</td>
                        <td>০১-০২-২০১৩</td>
                        <td>২৭৮১০</td>
                        <td>২০২৩৯</td>  
                        <td>৫৫২</td>
                        <td>২৭৮১০</td>
                        <td>৭৮১০</td>
                    </tr>
                    <tr>                                   
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>মোট এমাউন্ট এক্সপেন্ড : ২০২৩৯</td>
                    </tr>   
                </table>
                </fieldset>
            </form>
        </div>   
        <div>
            <h2><a name="03" id="03"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="7" style="text-align: center;">পারচেইজ ফ্রম আদার্স</th></tr>
                    <tr align="left" id="table_row_odd">
                        <td>ক্রম</td>
                        <td>প্রোডাক্ট এন্ড সাব্জেক্ট ইনফরমেশন</td>
                        <td>প্রাইজ</td>
                    </tr> 
                    <tr>
                        <td>১</td>
                        <td> <input class="box" type="text" id="cust_occupation" name="cust_occupation" /></td>
                        <td> <input class="box" type="text" id="cust_occupation" name="cust_occupation" /></td>
                    </tr>
                    <tr>
                        <td>২</td>
                        <td> <input class="box" type="text" id="cust_occupation" name="cust_occupation" /></td>
                        <td> <input class="box" type="text" id="cust_occupation" name="cust_occupation" /></td>
                    </tr>
                    <tr>                    
                        <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>
                    <tr>                                   
                        <td></td>
                        <td></td>
                        <td>মোট প্রাইজ : ৫০৬</td>
                    </tr>   
                </table>
                </fieldset>
            </form>
        </div>   

        <div>
            <h2><a name="04" id="04"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="7" style="text-align: center;">ট্রাঞ্জিট পয়েন্ট</th></tr>
                    <tr align="left" id="table_row_odd">
                        <td>ক্রম</td>
                        <td>তারিখ</td>
                        <td>সময়</td>
                        <td>এমাউন্ট</td>
                        <td>চেক</td>
                        <td>ট্রান্সফার</td>      
                        <td>সেন্ট</td>
                    </tr> 
                    <tr>
                        <td>২</td>
                        <td>০১-০২-২০১৩</td>
                        <td>২৭৮১০</td>
                        <td>২০২৩৯</td>  
                        <td>৫৫২</td>
                        <td>২৭৮১০</td>
                        <td>৭৮১০</td>
                    </tr>
                    <tr>                                   
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>মোট এমাউন্ট এক্সপেন্ড : ২০২৩৯</td>
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