<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include_once 'includes/function.php';
error_reporting(0);
?>
<style type="text/css">
    @import "css/bush.css";
    @import "css/expand_collapse.css";
</style>
<script type="text/javascript" src="javascripts/area.js"></script>
<script type="text/javascript" src="javascripts/external/mootools.js"></script>
<script type="text/javascript" src="javascripts/dg-filter.js"></script>
<script type="text/javascript" src="javascripts/expand_collapse01.js"></script>
<script type="text/javascript" src="javascripts/expand_collapse02_ui.js"></script>
<script>    
    $(function() {
        $( "#accordion" ).accordion();
    });
</script>
<?php
include 'includes/header.php';
?>

<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">কামিং অর্ডার</a></li>
                <li class="current"><a href="#02">অর্ডার স্টেটমেন্ট</a></li>  
                <li class="current"><a href="#03">ডেলেভারী স্টেটমেন্ট</a></li>  
                <li class="current"><a href="#04">সেলিং স্টেটমেন্ট</a></li>  
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <table  class="formstyle">
                <tr><th colspan="6" style="text-align: center;">কামিং অর্ডার</th></tr>
                <tr>
                    <td>
                        <?php
                        if (isset($_POST['delivery_submit'])) {
                            ?>
                            <div> 	
                                <table class="formstyle"  style=" width: 98%; ">          
                                    <tr><th style="text-align: center" colspan="2"><h1>সেন্ড এমাউন্ট</h1></th></tr>

                                    <tr><td colspan="2"></td></tr>
                                    <tr>
                                        <td>টোটাল এমাউন্ট</td>
                                        <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                                    </tr>
                                    <tr>
                                        <td>সেন্ড বিডিটি</td>
                                        <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                                    </tr>
                                    <tr>
                                        <td>ট্রাস্ট প্রোপারটি</td>
                                        <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                                    </tr>
                                    <tr>
                                        <td>আর্ন এমাউন্ট</td>
                                        <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                                    </tr>
                                    <tr>
                                        <td>ট্যাক্স</td>
                                        <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                                    </tr>
                                    <tr>
                                        <td>সার্ভিস চার্জ</td>
                                        <td>:    <input  class ="textfield" type="text" id="pin_number" name="pin_number" /></td>
                                    </tr>
                                </table>
                            </div>
                            <?php
                        } else {
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>                           
                                <div id="accordion" style="width: 100%;">
                                    <h3>ই-কমার্স</h3>
                                    <div>	
                                        <table  class="formstyle">  
                                            <tr><th colspan="6" style="text-align: center;">অর্ডার চার্ট</th></tr>
                                            <tr align="left" id="table_row_odd">
                                                <td>ক্রম</td>
                                                <td colspan="3">রিসীভার ইনফরমেশন</td>
                                                <td>রিসীভার ইন্সট্রাকশন</td>
                                                <td></td>
                                            </tr> 
                                            <tr>
                                                <td>১</td>
                                                <td colspan="3">হেড অফিস</td>
                                                <td>দরকার</td>
                                                <td><input class="btn" style =" font-size: 12px; " type="submit" name="delivery_submit" value="ডেলেভারী প্রোডাক্ট" /></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <?php
                                }
                                ?>
                                <h3>রিপড একাউন্ট</h3>
                                <div>
                                    <table  class="formstyle">       
                                    </table>
                                </div>
                            </div>
                        </div>   
                    </td>
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