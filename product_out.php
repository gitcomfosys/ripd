<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<script type="text/javascript">
   
    $(function(){
        var count = 2;
        $('p#add_field').click(function(){
            $('#container_others').append( '<tr><td>গ্রহিতার নাম  '+ count
                + ' : <input class="box" id="field1" name="field1[]" type="text" /></td>' 
                + ' <td>গ্রহিতার মোবাইল নাম্বার' 
                + ' : <input class="box" id="field2" name="field2[]" type="text" /></td></tr>'
        );	            
            count = count + 1;
        });
    });
</script> 

<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=PROD"><b>ফিরে যান</b></a></div> 
        <div>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">          
                    <tr><th colspan="4" style="text-align: center;">প্রোডাক্ট আউটের বিষয়সমূহ</th></tr>
                    <tr>  
                    </tr>
                    <tr>
                        <td >প্রতিষ্ঠানের নাম</td>
                        <td>: <select class="box" name="transfer_to" style="width: 150px;">
                                <option value="">নারীমেলা</option>
                                <option value=""> একাল</option>
                            </select>    
                        </td>          
                    </tr>
                    <tr>
                <td colspan="2" >                
                        <tr style="height: 2px; ">
                            <td style="padding-top: 14px;vertical-align:top; width: 25%;">গ্রহিতা</td>
                            <td>
                                <table id="container_others">
                                    <tr>
                                        <td  style="vertical-align:  bottom;"> গ্রহিতার নাম  1 : <input class="box" id="field1" name="field1[]" type="text" /></td>
                                        <td style="vertical-align: bottom;">গ্রহিতার মোবাইল নাম্বার : <input class="box" id="field2" name="field2[]" type="text" /></td>
                                        <td style=" padding-top: 9px;"><p id="add_field"><a href="#"><br /><img alt="Add Field" width="22px" height="20px" src="images//addSign.png"></a></p></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>                  
                </td>
            </tr>                   
                    <tr>                    
                        <td colspan="2" style="padding-left: 290px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
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