<?php
include_once 'includes/header.php';
include_once 'includes/MiscFunctions.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<script type="text/javascript"> 
    $(function (){   
        var count = 2;
              
        $('p#add_field').click(function (){
            if(count<8){
            $('#container_others').append( '<tr><td>পরীক্ষার নাম / ডিগ্রী '+count
                + '<input class="textfield" id="field1" name="field1[]" type="text" /></td>' 
                + ' <td>পশের সাল' 
                + '<input class="box5" id="field2" name="field2[]" type="text" /></td>'
                + ' <td>প্রতিষ্ঠানের নাম' 
                + '<input class="textfield" id="field3" name="field3[]" type="text" /></td>'
                + ' <td>বোর্ড / বিশ্ববিদ্যালয়' 
                + '<input class="textfield" id="field4" name="field4[]" type="text" /></td>'
                + ' <td>জি.পি.এ / বিভাগ' 
                + '<input class="box5" id="field5" name="field5[]" type="text" /></td></tr>'
        );	
            count = count + 1;
            }
        });
    });
    
      
    $(function a(){   
        var count1 = 2;
              
        $('p#add_field1').click(function a(){
            if(count1<8){
            $('#container_others1').append( '<tr><td>পরীক্ষার নাম / ডিগ্রী '+count1
                + '<input class="textfield" id="field1" name="field1[]" type="text" /></td>' 
                + ' <td>পশের সাল' 
                + '<input class="box5" id="field2" name="field2[]" type="text" /></td>'
                + ' <td>প্রতিষ্ঠানের নাম' 
                + '<input class="textfield" id="field3" name="field3[]" type="text" /></td>'
                + ' <td>বোর্ড / বিশ্ববিদ্যালয়' 
                + '<input class="textfield" id="field4" name="field4[]" type="text" /></td>'
                + ' <td>জি.পি.এ / বিভাগ' 
                + '<input class="box5" id="field5" name="field5[]" type="text" /></td></tr>'
        );	
            count1 = count1 + 1;
            }
        });
    });
    
    $(function b(){   
        var count2 = 2;
              
        $('p#add_field2').click(function b(){
            if(count2<8){
            $('#container_others2').append( '<tr><td>পরীক্ষার নাম / ডিগ্রী '+count2
                + '<input class="textfield" id="field1" name="field1[]" type="text" /></td>' 
                + ' <td>পশের সাল' 
                + '<input class="box5" id="field2" name="field2[]" type="text" /></td>'
                + ' <td>প্রতিষ্ঠানের নাম' 
                + '<input class="textfield" id="field3" name="field3[]" type="text" /></td>'
                + ' <td>বোর্ড / বিশ্ববিদ্যালয়' 
                + '<input class="textfield" id="field4" name="field4[]" type="text" /></td>'
                + ' <td>জি.পি.এ / বিভাগ' 
                + '<input class="box5" id="field5" name="field5[]" type="text" /></td></tr>'
        );	
            count2 = count2 + 1;
            }
        });
    });
    
    $(function c(){   
        var count3 = 2;
              
        $('p#add_field3').click(function c(){
            if(count3<6){
            $('#container_others3').append( '<tr>'+count3
                + ' <td > :   <select class="box2" name="cust_children_age" style =" font-size: 11px"><option>একটি নির্বাচন করুন</option><option>৪</option><option>৫</option><option>৬</option><option>৭</option><option>৮</option><option>৯</option><option>১০</option><option>১১</option><option>১২</option><option>১৩</option>\n\
       <option>১৪</option> <option>১৫</option><option>১৬</option><option>১৭</option><option>১৮</option><option>১৯</option><option>২০</option><option>২১</option><option>২২</option>\n\
<option>২৩</option><option>২৪</option><option>২৫</option><option>২৬</option><option>২৭</option><option>২৮</option><option>২৯</option><option>৩০</option></select> </td> </tr>'
        );	
            count3 = count3 + 1;
            }
        });
    });
    
    $(function d(){   
        var count4 = 2;
              
        $('p#add_field4').click(function d(){
            if(count4<6){
            $('#container_others4').append( '<tr>'+count4
                + ' <td > :   <select class="box2" name="cust_children_age" style =" font-size: 11px"><option>একটি নির্বাচন করুন</option><option>৪</option><option>৫</option><option>৬</option><option>৭</option><option>৮</option><option>৯</option><option>১০</option><option>১১</option><option>১২</option><option>১৩</option>\n\
       <option>১৪</option> <option>১৫</option><option>১৬</option><option>১৭</option><option>১৮</option><option>১৯</option><option>২০</option><option>২১</option><option>২২</option>\n\
<option>২৩</option><option>২৪</option><option>২৫</option><option>২৬</option><option>২৭</option><option>২৮</option><option>২৯</option><option>৩০</option></select> </td> </tr>'
        );	
            count4 = count4 + 1;
            }
        });
    });
    
    $(function e(){   
        var count5 = 2;
              
        $('p#add_field5').click(function e(){
            if(count5<6){
            $('#container_others5').append( '<tr>'+count5
                + ' <td > :   <select class="box2" name="cust_children_age" style =" font-size: 11px"><option>একটি নির্বাচন করুন</option> <option>১ম</option><option>২য়</option><option>৩য়</option><option>৪র্থ</option>\n\
                                    <option>৫ম</option><option>৬ষ্ঠ</option><option>৭ম</option> <option>৮ম</option> <option>৯ম</option><option>১০ম</option>\n\
                                    <option>এস.এস.সি</option> <option>এইচ.এস.সি</option> <option>অনার্স</option> <option>মাষ্টার্স</option><option>ডিগ্রী</option><option>বি.এস.সি</option><option>এম.এস.সি</option> <option>এম.ফিল</option> <option>পি.এইচ.ডি</option></select> </td> </tr>'
        );	
            count5 = count5 + 1;
            }
        });
    });
    
    $(function f(){   
        var count6 = 2;
              
        $('p#add_field6').click(function f(){
            if(count6<6){
            $('#container_others6').append( '<tr>'+count6
                + ' <td > :   <select class="box2" name="cust_children_age" style =" font-size: 11px"><option>একটি নির্বাচন করুন</option> <option>১ম</option><option>২য়</option><option>৩য়</option><option>৪র্থ</option>\n\
                                    <option>৫ম</option><option>৬ষ্ঠ</option><option>৭ম</option> <option>৮ম</option> <option>৯ম</option><option>১০ম</option>\n\
                                    <option>এস.এস.সি</option> <option>এইচ.এস.সি</option> <option>অনার্স</option> <option>মাষ্টার্স</option><option>ডিগ্রী</option><option>বি.এস.সি</option><option>এম.এস.সি</option> <option>এম.ফিল</option> <option>পি.এইচ.ডি</option></select> </td> </tr>'
        );	
            count6 = count6 + 1;
            }
        });
    });
      
    
</script> 

<div class="column6">
    <div class="main_text_box"> 
        <div class="domtab">
            <ul class="domtabs">
                <li class="current"><a href="#01">ব্যাক্তিগত  তথ্য</a></li> <li class="current"><a href="#02">শিক্ষাগত যোগ্যতা</a></li><li class="current"><a href="#03"> যোগাযোগের ঠিকানা</a></li>
            </ul>
        </div>      

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">   
                    <tr><td colspan="4" ></td></tr>
                    <tr>
                        <td  >নাম </td>
                        <td>:    <input  class="box" type="text" id="cust_name" name="cust_name" /></td>    
                    </tr>

                    <tr>
                        <td> পিতার নাম </td>
                        <td>:    <input  class="box" type="text" id="cust_name" name="cust_name" /></td>    
                    </tr>
                    <tr>
                        <td>মাতার নাম </td>
                        <td>:    <input  class="box" type="text" id="cust_name" name="cust_name" /></td>    
                    </tr>
                    <tr>
                        <td>  স্পাউস নাম </td>
                        <td>:    <input  class="box" type="text" id="cust_name" name="cust_name" /></td>    
                    </tr>
                    <tr>
                        <td>  ফ্যামিলি  মেম্বার সংখ্যা </td>
                        <td>:    <input  class="box" type="text" id="cust_name" name="cust_name" /></td>    
                    </tr>
                    <tr>
                        <td> জেন্ডার </td>
                        <td>:    <input  class="box" type="text" id="cust_name" name="cust_name" /></td>    
                    </tr>
                    <tr>
                        <td > জাতীয়তা </td>
                        <td>:   <input class="box" type="text" id="cust_nationality" name="cust_nationality" /> </td>			
                    </tr>
                    <tr>
                        <td> ধর্ম  </td>
                        <td>:   <input  class="box" type="text" id="cust_religion" name="cust_religion" /></td>	                         
                    </tr>
                    <tr>
                        <td> পেশা  </td>
                        <td>:   <input  class="box" type="text" id="cust_occupation" name="cust_occupation" /></td>	                         
                    </tr>
                    <tr>
                        <td>   মাসিক আয় </td>
                        <td>:   <input  class="box" type="text" id="cust_occupation" name="cust_occupation" /></td>	                         
                    </tr>
                    <tr>
                        <td>   শিক্ষাগত যোগ্যতা  </td>
                        <td>:   <input  class="box" type="text" id="cust_education" name="cust_education" /></td>	                         
                    </tr>
                    <tr>
                        <td> সেল  নাম্বার   </td>
                        <td>:   <input  class="box" type="text" id="cust_cellnumber" name="cust_cellnumber" /></td>	                         
                    </tr>
                    <tr>
                        <td>  ই মেইল  নাম্বার   </td>
                        <td>:   <input  class="box" type="text" id="cust_email" name="cust_email" /></td>	                         
                    </tr>
                    <tr>
                        <td> সাক্ষর </td>
                        <td>
                            :   <input class="box" type="file" id="scanDoc_hand" name="scanDoc_hand" style="font-size:10px;"/>
                        </td>             
                    </tr>
                    <tr>
                        <td> ছবি </td>
                        <td>
                            :   <input class="box" type="file" id="scanDoc_picture" name="scanDoc_picture" style="font-size:10px;"/>
                        </td>             
                    </tr>
                    <tr>
                        <td> একউন্টের সুযোগ - সুবিধা</td>
                        <td>:   <input  class="box" type="text" id="cust_account" name="cust_account" /></td>	   
                    </tr>
                    <tr>
                        <td> ইনটার্মস</td>
                        <td>:   <input  class="box" type="text" id="cust_account" name="cust_account" /></td>	   
                    </tr>
                    <tr>                    
                        <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>        
                </table>
            </form>
        </div>

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">                              
                    <tr><td colspan="4" ></td></tr>      
                    <tr>
                        <td colspan="2" >
                            <table width="100%">
                                <tr>	
                                    <td  colspan="2"   style =" font-size: 14px"><b> শিক্ষাগত যোগ্যতা</b></td>                                                
                                </tr>
                                <tr>                      
                                    <td>
                                        <table id="container_others">
                                            <tr>
                                                <td>পরীক্ষার নাম / ডিগ্রী  1<input class="textfield" id="field1" name="field1[]" type="text" /></td>
                                                <td>পশের সাল<input class="box5" id="field2" name="field2[]" type="text" /></td>
                                                <td>প্রতিষ্ঠানের নাম <input class="textfield" id="field3" name="field3[]" type="text" /></td>
                                                <td>বোর্ড / বিশ্ববিদ্যালয়<input class="textfield" id="field4" name="field4[]" type="text" /></td>
                                                <td>জি.পি.এ / বিভাগ <input class="box5" id="field5" name="field5[]" type="text" /></td>
                                                <td><p id="add_field"><a href="#"><br/><img alt="Add Field" width="20px" height="18px" src="images/addSign.png"></a></p></td>
                                            </tr>
                                         
                                        </table>
                                    </td>
                                </tr>
                                  <tr>                    
                                                <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                                                    <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                                            </tr>     
                            </table>
                        </td>
                    </tr>    
                  
                </table>
            </form>
        </div>

        <div>
            <h2><a name="03" id ="03"></a></h2><br/>
            <form method="POST" onsubmit="">	
                <table  class="formstyle">                             
                    <tr><td colspan="4" ></td></tr>
                   </tr>	
                            <td  colspan="2" style =" font-size: 14px"><b>বর্তমান ঠিকানা </b></td>                            
                            <td colspan="2" style =" font-size: 14px"><b> স্থায়ী ঠিকানা   </b></td>
                        </tr>
                        <tr>
                            <td  >বাড়ির নাম / ফ্ল্যাট নং</td>
                            <td >:  <input class="box" type="text" id="house" name="house" /></td>
                            <td  >বাড়ির নাম / ফ্ল্যাট নং</td>
                            <td >:  <input class="box" type="text" id="house" name="house" /></td>
                        </tr>
                        <tr>
                            <td  >গ্রাম / বাড়ি নং</td>
                            <td >:  <input class="box" type="text" id="village" name="village" /></td>
                            <td >গ্রাম / বাড়ি নং</td>
                            <td>:  <input class="box" type="text" id="village" name="village" /></td>
                        </tr>
                        <tr>
                            <td >পোষ্ট / রোড নং</td>
                            <td>:  <input class="box" type="text" id="road" name="road" /> </td>
                            <td >পোষ্ট / রোড নং</td>
                            <td>:  <input class="box" type="text" id="road" name="road" /></td>
                        </tr>
                        <tr>
                            <td >পোষ্ট কোড</td>
                            <td>:  <input class="box" type="text" id="post_code" name="post_code" /></td>
                            <td >পোষ্ট কোড</td>
                            <td>:  <input class="box" type="text" id="post_code" name="post_code" /></td>
                        </tr>
                        <tr>
                            <td>উপজেলা / থানা</td>
                            <td>:  <input class="box" type="text" id="thana_name" name="thana_name" /></td>
                            <td >উপজেলা / থানা</td>
                            <td>:  <input class="box" type="text" id="thana_name" name="thana_name" /></td>
                        </tr>
                        <tr>
                            <td >জেলা</td>
                            <td>:  <input class="box" type="text" id="district_name" name="district_name" /></td>
                            <td >জেলা</td>
                            <td>:  <input class="box" type="text" id="district_name" name="district_name" /></td>
                        </tr>
                        <tr>
                            <td >বিভাগ</td>
                            <td>:  <input class="box" type="text" id="division_name" name="division_name" /></td>
                            <td >বিভাগ</td>
                            <td>:  <input class="box" type="text" id="division_name" name="division_name" /></td>
                        </tr>        
                    <tr>                    
                        <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>               
                </table>
            </form>
        </div>
    </div> 
       </div>    
    <?php include_once 'includes/footer.php'; ?>
