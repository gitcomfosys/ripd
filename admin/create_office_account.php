<?php
?>
<div>
           <h2>Create Office Account</h2><br/>
           <form method="POST">
                <fieldset style="margin-top: 5px;width: 80%; margin-bottom: 15px; margin-left:160px; margin-right: 10px; background-color: LightBlue; border:1px solid grey; ">	
                    <table class="entry">          
                           <tr><td colspan="2" ></td></tr>
                        <tr>
                            <td >ব্রাঞ্ছ নেইম</td>
                            <td>:    <input  class="box" type="text" id="branch_name" name="branch_name" /></td>       
                           <td   font-weight="bold" >পাসপোর্ট ছবি </td>
                            <td>
                                :   <input class="box" type="file" id="scanDoc_picture" name="scanDoc_picture" style="font-size:10px;"/>
                            </td>             
                        </tr>
                        <tr>
                            <td>ঠিকানা</td>
                            <td>:   <input class="box" type="text" id="ofiice_address" name="office_address" /></td>                                              
                        </tr>
                        <tr>
                        <tr colspan ="2"> 
                        <legend>এবাউট পজিসনঃ</legend>
                        অফিস স্পেসঃ <input class="box" type="">
                        ভবনের ধরনঃ <>
                        তলা নাম্বারঃ <>
                        <table><tr><td>অফিস স্পেসঃ</td></tr></table>
                        </tr>
                        </tr>
                        <tr>
                            <td  colspan="2" style =" font-size: 14px"><b>শিক্ষাগত যোগ্যতা</b></td>  
                           <td>
                                    <div class="spacer"></div>
                                   <div id="container">
                                   <p id="add_field"><a href="#"><span>&raquo; Add your favourite links.....</span></a></p>
                                   </div>
                                    </td>	
                            <td> <textarea class="box1" cols="20" style="height: 25px;  width: 149px; " id="cust_education" name="cust_education" /></textarea> </td>			
                        </tr>                                  
                    <tr>
                        <td colspan="4" class="hseparator"  ></td>
                        </tr>
                        <tr>	
                            <td  colspan="2" style =" font-size: 14px"><b>বর্তমান ঠিকানা </b></td>                            
                            <td colspan="2" style =" font-size: 14px"><b> স্থায়ী ঠিকানা   </b></td>
                        </tr>
                        <tr>
                            <td  >বাড়ির নাম / ফ্ল্যাট নং</td>
                            <td >:   <input class="box" type="text" id="house" name="house" /></td>
                            <td  >বাড়ির নাম / ফ্ল্যাট নং</td>
                            <td >:   <input class="box" type="text" id="house" name="house" /></td>
                        </tr>
                        <tr>
                            <td  >গ্রাম / বাড়ি নং</td>
                            <td >:   <input class="box" type="text" id="village" name="village" /></td>
                            <td >গ্রাম / বাড়ি নং</td>
                            <td>:   <input class="box" type="text" id="village" name="village" /></td>
                        </tr>
                        <tr>
                            <td >পোষ্ট / রোড নং</td>
                            <td>:   <input class="box" type="text" id="road" name="road" /> </td>
                            <td >পোষ্ট / রোড নং</td>
                            <td>:   <input class="box" type="text" id="road" name="road" /></td>
                        </tr>
                        <tr>
                            <td >পোষ্ট কোড</td>
                            <td>:   <input class="box" type="text" id="post_code" name="post_code" /></td>
                            <td >পোষ্ট কোড</td>
                            <td>:   <input class="box" type="text" id="post_code" name="post_code" /></td>
                        </tr>
                        <tr>
                            <td>উপজেলা / থানা</td>
                            <td>:   <input class="box" type="text" id="thana_name" name="thana_name" /></td>
                            <td >উপজেলা / থানা</td>
                            <td>:   <input class="box" type="text" id="thana_name" name="thana_name" /></td>
                        </tr>
                        <tr>
                            <td >জেলা</td>
                            <td>:   <input class="box" type="text" id="district_name" name="district_name" /></td>
                            <td >জেলা</td>
                            <td>:   <input class="box" type="text" id="district_name" name="district_name" /></td>
                        </tr>
                        <tr>
                            <td >বিভাগ</td>
                            <td>:   <input class="box" type="text" id="division_name" name="division_name" /></td>
                            <td >বিভাগ</td>
                            <td>:   <input class="box" type="text" id="division_name" name="division_name" /></td>
                        </tr>        
                        <tr>
                            <td></td>                                                                  
                            <td style="padding-left: 90px; "><input class="btn" style =" font-size: 12px" type="submit" name="submit" value="সেভ করুন" /></td>
                            <td><input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>
                        </tr>    
                    </table>
                </fieldset>
            </form>
        </div>



