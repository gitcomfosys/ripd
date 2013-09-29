                                                                                                                                                                                                                                                                                                    
<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
//include 'includes/header.php';
error_reporting(0);
?>
<style type="text/css">
    @import "css/bush.css";
    @import "css/expand_collapse.css";
</style>
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
        <div>
            <form method="POST" onsubmit="" name="frm">                
                <table  class="formstyle">      
                    <tr><th style="text-align: center;">জেনোলজি ট্রি</th></tr>
                    <tr><td>
                            <div id="accordion" style="width: 100%;">
                                <h3> রেফারেন্স ১</h3>
                                <div>
                                    <form method="POST" onsubmit="" name="frm">	
                                        <table  class="formstyle">                                         
                                            <tr align="left" id="table_row_odd">
                                                <td>ক্রম</td>
                                                <td > একাউন্টধারীর   নাম</td> 
                                                <td> একাউন্ট নাম্বার</td> 
                                                <td > পিন নাম্বার</td>
                                                <td> প্যাকেজ নেইম</td>
                                                <td> একাউন্ট খোলার তারিখ</td>
                                                <td> রেফারের নাম</td>
                                            </tr>
                                            <tr>
                                                <td>০১</td>                                                          
                                                <td> শ্যামল </td> 
                                                <td>২৩৪৫৬৭৮৯৮৭</td>     
                                                <td>৩৩৪৩২৫৬</td> 
                                                <td> মাস্টার প্যাকেজ</td> 
                                                <td> ২২/০৬/১২</td> 
                                                <td> ইফতেখার আলম</td> 
                                            </tr> 
                                            <tr>                    
                                            <td colspan="8" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ" />
                                                </td>                           
                                            </tr>
                                        </table>
                                </div>
                                <h3>রেফারেন্স ২</h3>
                                <div>	
                                    <form method="POST" onsubmit="" name="frm">	
                                        <table  class="formstyle">     
                                            <tr align="left" id="table_row_odd">
                                                <td>ক্রম</td>
                                                <td > একাউন্টধারীর   নাম</td> 
                                                <td> একাউন্ট নাম্বার</td> 
                                                <td > পিন নাম্বার</td>
                                                <td> প্যাকেজ নেইম</td>
                                                <td> একাউন্ট খোলার তারিখ</td>
                                                <td> রেফারের নাম</td>
                                            </tr>
                                            <tr>
                                                <td>০১</td>                                                          
                                                <td> বুশরা</td> 
                                                <td>২৩৪৫৬৭৮৯৮৬</td>     
                                                <td>৩৩৪৩৫৬২</td> 
                                                <td> মাস্টার প্যাকেজ</td> 
                                                <td>১২/০৮/১২</td> 
                                                <td> ইফতেখার আলম</td> 
                                            </tr> 
                                            <tr>                    
                                              <td colspan="8" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ" />
                                                </td>                           
                                            </tr>
                                        </table>
                                </div>
                                <h3>রেফারেন্স ৩ </h3>
                                <div>	
                                    <form method="POST" onsubmit="" name="frm">	
                                        <table  class="formstyle">     
                                            <tr align="left" id="table_row_odd">
                                                <td>ক্রম</td>
                                                <td > একাউন্টধারীর   নাম</td> 
                                                <td> একাউন্ট নাম্বার</td> 
                                                <td > পিন নাম্বার</td>
                                                <td> প্যাকেজ নেইম</td>
                                                <td> একাউন্ট খোলার তারিখ</td>
                                                <td> রেফারের নাম</td>
                                            </tr>
                                            <tr>
                                                <td>০১</td>                                                          
                                                <td> ইব্রাহীম</td> 
                                                <td>২৩৪৫৬৭৬৮৮৯</td>     
                                                <td>৩৩৪২৫৬৪</td> 
                                                <td> মাস্টার প্যাকেজ</td> 
                                                <td>৩০/১০/১২</td> 
                                                <td> ইফতেখার আলম</td> 
                                            </tr> 
                                            <tr>                    
                                                <td colspan="8" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ" />
                                                </td>                           
                                            </tr>
                                        </table>
                                </div>
                                <h3>রেফারেন্স ৪</h3>
                                <div>	
                                    <form method="POST" onsubmit="" name="frm">	
                                        <table  class="formstyle">     
                                            <tr align="left" id="table_row_odd">
                                                <td>ক্রম</td>
                                                <td > একাউন্টধারীর   নাম</td> 
                                                <td> একাউন্ট নাম্বার</td> 
                                                <td > পিন নাম্বার</td>
                                                <td> প্যাকেজ নেইম</td>
                                                <td> একাউন্ট খোলার তারিখ</td>
                                                <td> রেফারের নাম</td>
                                            </tr>
                                            <tr>
                                                <td>০১</td>                                                          
                                                <td> ইফাত</td> 
                                                <td>২৩৪৫৯৮৮৬৬৭</td>     
                                                <td>৩৩৫৬৮০৭</td> 
                                                <td> মাস্টার প্যাকেজ</td> 
                                                <td>৩০/১১/১২</td> 
                                                <td> ইফতেখার আলম</td> 
                                            </tr> 
                                            <tr>                    
                                                <td colspan="8" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ" />
                                                </td>                           
                                            </tr>
                                        </table>
                                </div>
                                <h3> রেফারেন্স ৫</h3>
                                <div>	
                                    <form method="POST" onsubmit="" name="frm">	
                                        <table  class="formstyle">     
                                            <tr align="left" id="table_row_odd">
                                                <td>ক্রম</td>
                                                <td > একাউন্টধারীর   নাম</td> 
                                                <td> একাউন্ট নাম্বার</td> 
                                                <td > পিন নাম্বার</td>
                                                <td> প্যাকেজ নেইম</td>
                                                <td> একাউন্ট খোলার তারিখ</td>
                                                <td> রেফারের নাম</td>
                                            </tr>
                                            <tr>
                                                <td>০১</td>                                                          
                                                <td> রুমপা</td> 
                                                <td>২৩০৫৮৭৫৬২১</td>     
                                                <td>৩৩৮৯৫২৭</td> 
                                                <td> মাস্টার প্যাকেজ</td> 
                                                <td>২২/১২/১২</td> 
                                                <td> ইফতেখার আলম</td> 
                                            </tr> 
                                            <tr>                    
                                               <td colspan="8" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ" />
                                                </td>                           
                                            </tr>
                                        </table>
                                </div>
                                <tr>                    
                                    <td style="text-align: center; "><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ" />
                                    </td>                           
                                </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
