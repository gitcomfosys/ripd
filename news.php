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
                        <tr><th style="text-align: center;">নিউজ</th></tr>
                        <tr><td>
                                <div id="accordion" style="width: 100%;">
                                    <h3>অনলাইন মিডিয়া</h3>
                                    <div>
                                        <form method="POST" onsubmit="" name="frm">	
                                            <table  class="formstyle">                                         
                                                <tr>                                
                                                    <td><a href=" www.prothom alo.com"> প্রথম আলো </a></td>
                                                    <td><a href=" www.kalerkontho.com" > কালের কন্ঠ </a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href=" www.kalerkontho.com" > বাংলাদেশ প্রতিদিন </a></td>
                                                    <td><a href=" www.ajkersomi.com" > আজকের সময় </a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href=" www.jonokontho.com" > জনকন্ঠ </a></td>
                                                    <td><a href=" www.dinkal.com" > দিনকাল </a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href=" www.independent.com" > ইন্ডিপেন্ডেন্ট </a></td>
                                                    <td><a href=" www.dailystar.com" > ডেইলি স্টার </a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href=" www.newage.com" >  নিউইজ </a></td>
                                                    <td><a href=" www.kalerkontho.com" >  </a></td>
                                                </tr>   
                                            </table>
                                    </div>
                                    <h3>প্রিন্ট মিডিয়া</h3>
                                    <div>	
                                        <form method="POST" onsubmit="" name="frm">	
                                            <table  class="formstyle">     
                                                <tr>
                                                    <td><a href=" www.kalerkontho.com">মাতৃভাষা দিবস </a></td>
                                                    <td><a href="#"> </a></td>
                                                </tr>    
                                            </table>
                                    </div>
                                    <h3>ব্লগ </h3>
                                    <div>
                                        <table  class="formstyle">                         
                                            <tr>
                                                <td><a href="www.amrdesh.com"> আমার দেশ </a></td>
                                                <td><a href="www.sundarban.com">সুন্দরবন</a></td>
                                            </tr>    
                                        </table>
                                    </div>
                                    <h3>অনলাইন রেডিও </h3>
                                    <div>	
                                        <table  class="formstyle">                         
                                            <tr>
                                                <td><a href="www.radio furti.com"> রেডিও ফুর্তি </a></td>
                                                <td><a href="ww.radio amr.com"> রেডিও আমার </a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="www.radio today.com"> রেডিও টুডে </a></td>
                                                <td><a href="www.radio abc.com">  রেডিও এবিসি </a></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <h3>অনলাইন  টিভি  </h3>
                                    <div>	
                                        <table  class="formstyle">                         
                                            <tr>
                                                <td><a href="www.channel eye.com">চ্যানেল আই </a></td>
                                                <td><a href="www.atn.com"> এটিএন টিভি </a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="www.etv.com"> একুশে টিভি </a></td>
                                                <td><a href="www.zee bangla.com"> জি বাংলা </a></td>
                                            </tr> 
                                        </table>
                                    </div>
                                    <h3>অনলাইন লাইব্রেরী </h3>
                                    <div>	
                                        <table  class="formstyle">                         
                                            <tr>
                                                <td><a href="www.google library.com"> গুগুল লাইব্রেরী </a></td>
                                                <td><a href="www.w3c school.com">  ডাবলূ৩সি স্কুল </a></td>
                                            </tr>                                                                                                                                                                                                                                                                                                                                                            
                                        </table>
                                    </div>
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
