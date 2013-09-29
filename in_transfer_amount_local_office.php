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
                <li class="current"><a href="#01">ইন দেন ট্রান্সফার</a></li> <li class="current"><a href="#02">ইন দেন সেন্ড</a></li>
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="2" style="text-align: center;">ইন দেন ট্রান্সফার</th></tr>
                    <tr>
                        <td>এন্টার একাউন্ট নাম্বার</td>
                        <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                    </tr>
                    <tr>
                        <td >ট্রান্সফারার সেল নাম্বার</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td>                                  
                    </tr>
                    <tr>
                        <td>রিসীভারার একাউন্ট নাম্বার</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td>                                  
                    </tr>
                    <tr>
                        <td>টোটাল এমাউন্ট</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td> 
                    </tr>
                    <tr>
                        <td>ইন এমাউন্ট</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td> 
                    </tr>
                    <tr>
                        <td>ট্রান্সফার বিডিটি</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td> 
                    </tr>
                    <tr>
                        <td>ট্রাস্ট প্রোপারটি</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td> 
                    </tr>
                    <tr>
                        <td>আর্ন এমাউন্ট</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td> 
                    </tr>
                    <tr>
                        <td>ট্যাক্স</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td> 
                    </tr>
                    <tr>
                        <td>সার্ভিস চার্জ</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td> 
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
            <h2><a name="02" id="02"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="2" style="text-align: center;">ইন দেন সেন্ড</th></tr>
                    <tr>
                        <td>এন্টার একাউন্ট নাম্বার</td>
                        <td>:    <input  class="box" type="text" id="total_amount" name="total_amount" /></td>            
                    </tr>
                    <tr>
                        <td >ট্রান্সফারার সেল নাম্বার</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td>                                  
                    </tr>
                    <tr>
                        <td>রিসীভারার একাউন্ট নাম্বার</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td>                                  
                    </tr>
                    <tr>
                        <td>টোটাল এমাউন্ট</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td> 
                    </tr>
                    <tr>
                        <td>ইন এমাউন্ট</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td> 
                    </tr>
                    <tr>
                        <td>সেন্ড বিডিটি</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td> 
                    </tr>
                    <tr>
                        <td>ট্রাস্ট প্রোপারটি</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td> 
                    </tr>
                    <tr>
                        <td>আর্ন এমাউন্ট</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td> 
                    </tr>
                    <tr>
                        <td>ট্যাক্স</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td> 
                    </tr>
                    <tr>
                        <td>সার্ভিস চার্জ</td>
                        <td>:   <input class="box" type="text" id="t_amount" name="t_amount" /></td> 
                    </tr>        
                    <tr>                    
                        <td colspan="2" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>    
                </table>
                </fieldset>
            </form>
        </div>        
    </div>
    <?php

    include 'includes/footer.php';
    ?>