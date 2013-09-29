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
            $('#pin_table').append( '<tr><td>'+count +'</td>'
                + '<td>' 
                +  '<select id="category" class="box2">'
                +       '<option value="">সাবান</option>'
                +       '<option value="">টুথপেস্ট</option>'
                +       '<option value="">সয়াবিন তেল</option>'
                +  '</select>'
                + '</td>' 
                + '<td>' 
                +  '<select id="product" class="box2">'
                +       '<option value="">লাক্স</option>'
                +       '<option value="">তিব্বত</option>'
                +       '<option value="">ডেটল</option>'
                +  '</select>'
                + '</td>' 
                +'<td>'
                +  '<select id="size" class="box2">'
                +       '<option value="">বড়</option>'
                +       '<option value="">ছোট</option>'
                +       '<option value="">মাঝারি</option>'
                +  '</select>'
                +'</td>'
                +'<td>'
                +'<input  class="box1"type="text" name="number_of_pin" maxlength="10" placeholder="১"/>'
                +'</td>'       
            
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
                <table class="formstyle">          
                    <tr><th style="text-align: center;" colspan="3">পিন মেইকিং</th></tr>
                    <tr>  
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table id ="pin_table">
                                <tr>
                                    <td><b>ক্রম<b></td>
                                                <td><b>ক্যাটাগরি</b></td>
                                                <td><b>পণ্যের নাম</b></td>
                                                <td><b>সাইজ</b></td>
                                                <td><b>পরিমান</b></td>
                                                <td></td>
                                                </tr>                    
                                                <tr>
                                                    <td>১</td> 
                                                    <td>
                                                        <select id="category" class="box2">
                                                            <option value="">সাবান</option>
                                                            <option value="">টুথপেস্ট</option>
                                                            <option value="">সয়াবিন তেল</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select id="product" class="box2">
                                                            <option value="">সাবান</option>
                                                            <option value="">টুথপেস্ট</option>
                                                            <option value="">সয়াবিন তেল</option>
                                                        </select>                            
                                                    </td>                                                   
                                                    <td>
                                                        <select id="size" class="box2">
                                                            <option value="">বড়</option>
                                                            <option value="">ছোট</option>
                                                            <option value="">মাঝারি</option>
                                                        </select>                            
                                                    </td>  
                                                    <td><input  class="box1"type="text" name="number_of_pin" maxlength="10"/> </td>
                                                    <td style=" padding-top: 0px;"><p id="add_field"><a href="#"><img alt="Add Field" width="22px" height="20px" src="images//addSign.png"></a></p>
                                                    </td>                                                                  
                                                </tr>
                                                </table>
                                                </td>
                                                </tr>
                                                <tr style=" font-size: 15px;">
                                                    <td style="text-align: right">
                                                        মোট মুল্যঃ ১০০ টাকা
                                                    </td>
                                                    <td style="text-align: center">
                                                        মোট পি.ভিঃ ৩
                                                    </td>
                                                    <td style="text-align: left;">
                                                        পিন সংখ্যাঃ <input  class="box1"type="text" name="number_of_pin" maxlength="10" placeholder="১"/> 
                                                    </td>
                                                </tr>
                                                <tr>                    
                                                    <td colspan="6" style="padding-left: 290px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                                                        <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                                                </tr>                                                
                                                </table>
                                                </form>
                                                </div>
                                                hello
                                                </div>      
                                                </div>
                                                <?php

                                                include 'includes/footer.php';
                                                ?>