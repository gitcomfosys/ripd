<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<style type="text/css">
    @import "css/iftee_statement.css";
</style>

<div class="column6">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=PROD"><b>ফিরে যান</b></a></div>
        <div class="domtab">
            <ul class="domtabs" >
                <li class="current"><a href="#01">দৈনিক</a></li>
                <li class="current"><a href="#02">সাপ্তাহিক</a></li>
                <li class="current"><a href="#03">মাসিক</a></li>
                <li class="current"><a href="#04">ত্রৈমাসিক</a></li>
                <li class="current"><a href="#05">ষান্মাসিক</a></li>
                <li class="current"><a href="#06">বাৎসরিক</a></li>
                <li class="current"><a href="#07">সামগ্রিক</a></li>
            </ul>
        </div>   

        <div>
            <h2><a name="01" id="01"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">দৈনিক সেলিং স্টেটমেন্ট</th></tr>
                        <tr>
                        <td><b>প্রোডাক্ট ক্যাটাগরি : </b><select class="box2" name="transfer_to">
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
                                <td colspan="4"><b>সেলিং এর ধরণ : </b>
                        <select class="box2" name="package_type">
                            <option value="">- সেলিং -</option>
                            <option value="">চলমান সেলিং</option>
                            <option value="">সাম্ভাব্য সেলিং</option>
                        </select>    
                    </td>                                                   
                </tr>
                <tr>
                    <td><b>শুরুর তারিখ : </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="box2" type="text" name="date_from" id="date_from" placeholder="Date From"  style=""></td>
                    <td colspan="4" ><b>শেষের তারিখ : </b>&nbsp;&nbsp;<input class="box2" type="text" name="date_to" id="date_to" placeholder="Date To"  onclick="infoProgramFromThana()">
                    <input type="submit" value="সাবমিট"></td>
                       
                </tr>
                <tr align="left" id="table_row_odd">                 
                     <td  >প্রোডাক্টের নাম</td>
                    <td  style="width: 92px;">ব্র্যান্ড</td>
                    <td style="width: 92px;">পরিমাণ</td>
                     <td >একক</td>                   
                      <td >সেলিং সংখ্যা</td>
                      <td>তারিখ</td>
                </tr>
                <tr>
                    <td>আম</td>
                    <td>আড়ং</td>
                    <td>2</td>     
                    <td>টি</td> 
                    <td>66</td>  
                     <td>12-12-12</td>
                </tr>
            </table>
        </div>   

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">সাপ্তাহিক সেলিং স্টেটমেন্ট</th></tr>
                        <tr>
                            <td colspan="3"><b>প্রোডাক্ট ক্যাটাগরি : </b><select class="box2" name="transfer_to" >
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
                   <td colspan="4"><b>সেলিং এর ধরণ : </b>
                        <select class="box2" name="package_type">
                            <option value="">- সেলিং -</option>
                            <option value="">চলমান সেলিং</option>
                            <option value="">সাম্ভাব্য সেলিং</option>
                        </select>    
                    </td>                                                    
                </tr>
                <tr>                    
                    <td>
                        <b>মাসঃ </b>
                        <select class='box2' name='month_name_from'>
                            <?php
                            $inc=1; $month_array = array('জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ');
                            while (list ($inc, $val) = each ($month_array)) echo "<option value='$inc'>$val</option>";
                            ?>
                        </select>
                    </td>                    
                    <td>
                        <b>বছরঃ </b>
                        <select class='box2' name='year_from'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>".english2bangla($inc_year)."</option>";
                            ?>
                        </select>
                    </td>               
                    <td style="vertical-align: middle">
                        <h1>হতে</h1>
                    </td>                    
                    <td>
                        <b>মাসঃ </b>
                        <select class='box2' name='month_name_to'>
                            <?php
                            $inc=1; $month_array = array('জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ');
                            while (list ($inc, $val) = each ($month_array)) echo "<option value='$inc'>$val</option>";
                            ?>
                        </select>
                    </td>                    
                    <td>
                        <b>বছরঃ </b>
                        <select class='box2' name='year_to'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>".english2bangla($inc_year)."</option>";
                            ?>
                        </select>
                    </td>    
                    <td style="vertical-align: middle"><input type="submit" value="সাবমিট"></td>   
                </tr>
                  <tr align="left" id="table_row_odd">
                   <td>মাসের নাম</td>
                    <td>সপ্তাহ</td>
                     <td  style="width: 92px;">প্রোডাক্টের নাম</td>
                    <td  style="width: 92px;">ব্র্যান্ড</td>
                    <td >পরিমাণ</td>
                     <td >একক</td>                   
                      <td >সেলিং সংখ্যা</td>
                </tr>
                <tr>
                   <td>ফেব্রুয়ারি</td>
                    <td>প্রথম সপ্তাহ</td>
                    <td>আম</td>
                    <td>আড়ং</td>
                    <td>2</td>     
                    <td>টি</td> 
                    <td>66</td>      
                </tr>
            </table>
        </div>

        <div>
            <h2><a name="03" id="03"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">মাসিক সেলিং স্টেটমেন্ট</th></tr>
                        <tr>
                            <td colspan="2"><b>প্রোডাক্ট ক্যাটাগরিঃ </b><select class="box5" name="transfer_to" style="width: 150px;">
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
                   <td colspan="4"><b>সেলিং এর ধরণঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- সেলিং -</option>
                            <option value="">চলমান সেলিং</option>
                            <option value="">সাম্ভাব্য সেলিং</option>
                        </select>    
                    </td>                                                 
                </tr>
                <tr>
                    <td>
                        <b>বছরঃ </b>
                        <select class='box2' name='year_from'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>".english2bangla($inc_year)."</option>";
                            ?>
                        </select>
                    </td>               
                    <td style="vertical-align: middle">
                        <h1>হতে</h1>
                    </td>                        
                    <td colspan="2">
                        <b>বছরঃ </b>
                        <select class='box2' name='year_to'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>".english2bangla($inc_year)."</option>";
                            ?>
                        </select>
                    </td>                          
                    <td style="vertical-align: middle"><input type="submit" value="সাবমিট"></td>        
                </tr>
                  <tr align="left" id="table_row_odd">
                   <td>মাসের নাম</td>
                    <td>সপ্তাহ</td>
                     <td  style="width: 92px;">প্রোডাক্টের নাম</td>
                    <td  style="width: 92px;">ব্র্যান্ড</td>
                    <td >পরিমাণ</td>
                     <td >একক</td>                   
                      <td >সেলিং সংখ্যা</td>
                </tr>
                <tr>
                   <td>ফেব্রুয়ারি</td>
                    <td>প্রথম সপ্তাহ</td>
                    <td>আম</td>
                    <td>আড়ং</td>
                    <td>2</td>     
                    <td>টি</td> 
                    <td>66</td>      
                </tr>
            </table>
        </div>

        <div>
            <h2><a name="04" id="04"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">ত্রৈমাসিক সেলিং স্টেটমেন্ট</th></tr>
                <tr>
                        <td colspan ="3"><b>প্রোডাক্ট ক্যাটাগরি : </b><select class="box5" name="transfer_to" style="width: 150px;">
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
                    <td><b>সেলিং এর ধরণঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- সেলিং -</option>
                            <option value="">চলমান সেলিং</option>
                            <option value="">সাম্ভাব্য সেলিং</option>
                        </select>    
                    </td>              
                    <td>
                        <b>বছরঃ </b>
                        <select class='box2' name='year_from'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>".english2bangla($inc_year)."</option>";
                            ?>
                        </select>
                    </td>               
                    <td style="vertical-align: middle">
                        <h1>হতে</h1>
                    </td>                        
                    <td>
                        <b>বছরঃ </b>
                        <select class='box2' name='year_to'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>".english2bangla($inc_year)."</option>";
                            ?>
                        </select>
                    </td>                          
                    <td style="vertical-align: middle"><input type="submit" value="সাবমিট"></td>        
                </tr>
                  <tr align="left" id="table_row_odd">
                   <td>মাসের নাম</td>
                    <td>সপ্তাহ</td>
                     <td  style="width: 92px;">প্রোডাক্টের নাম</td>
                    <td  style="width: 92px;">ব্র্যান্ড</td>
                    <td >পরিমাণ</td>
                     <td >একক</td>                   
                      <td >সেলিং সংখ্যা</td>
                </tr>
                <tr>
                   <td>ফেব্রুয়ারি</td>
                    <td>প্রথম সপ্তাহ</td>
                    <td>আম</td>
                    <td>আড়ং</td>
                    <td>2</td>     
                    <td>টি</td> 
                    <td>66</td>      
                </tr>
            </table>
        </div>

        <div>
            <h2><a name="05" id="05"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">ষান্মাসিক সেলিং স্টেটমেন্ট</th></tr>
                <tr>
                        <td colspan ="3"><b>প্রোডাক্ট ক্যাটাগরি : </b><select class="box5" name="transfer_to" style="width: 150px;">
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
                    <td><b>সেলিং এর ধরণঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- সেলিং -</option>
                            <option value="">চলমান সেলিং</option>
                            <option value="">সাম্ভাব্য সেলিং</option>
                        </select>    

                    </td>                    
                    <td>
                        <b>বছরঃ </b>
                        <select class='box2' name='year_from'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>".english2bangla($inc_year)."</option>";
                            ?>
                        </select>
                    </td>               
                    <td style="vertical-align: middle">
                        <h1>হতে</h1>
                    </td>                        
                    <td>
                        <b>বছরঃ </b>
                        <select class='box2' name='year_to'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>".english2bangla($inc_year)."</option>";
                            ?>
                        </select>
                    </td>                          
                    <td style="vertical-align: middle"><input type="submit" value="সাবমিট"></td>        
                </tr>
                  <tr align="left" id="table_row_odd">
                   <td>মাসের নাম</td>
                    <td>সপ্তাহ</td>
                     <td  style="width: 92px;">প্রোডাক্টের নাম</td>
                    <td  style="width: 92px;">ব্র্যান্ড</td>
                    <td >পরিমাণ</td>
                     <td >একক</td>                   
                      <td >সেলিং সংখ্যা</td>
                </tr>
                <tr>
                   <td>ফেব্রুয়ারি</td>
                    <td>প্রথম সপ্তাহ</td>
                    <td>আম</td>
                    <td>আড়ং</td>
                    <td>2</td>     
                    <td>টি</td> 
                    <td>66</td>      
                </tr>
            </table>
        </div>

        <div>
            <h2><a name="06" id="06"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">বাৎসরিক সেলিং স্টেটমেন্ট</th></tr>
                        <tr>
                            <td colspan="2"><b>প্রোডাক্ট ক্যাটাগরিঃ </b><select class="box5" name="transfer_to" style="width: 150px;">
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
                   <td colspan="4"><b>সেলিং এর ধরণঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- সেলিং -</option>
                            <option value="">চলমান সেলিং</option>
                            <option value="">সাম্ভাব্য সেলিং</option>
                        </select>    
                    </td>                                                 
                </tr>
                <tr>
                    <td>
                        <b>বছর শুরুঃ </b>
                        <select class='box2' name='year_from'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>".english2bangla($inc_year)."</option>";
                            ?>
                        </select>
                    </td>               
                    <td style="vertical-align: middle">
                        <h1>হতে</h1>
                    </td>                        
                    <td colspan="2">
                        <b>বছর শেষঃ </b>
                        <select class='box2' name='year_to'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>".english2bangla($inc_year)."</option>";
                            ?>
                        </select>
                    </td>                          
                    <td style="vertical-align: middle"><input type="submit" value="সাবমিট"></td>        
                </tr>
                  <tr align="left" id="table_row_odd">
                   <td>মাসের নাম</td>
                    <td>সপ্তাহ</td>
                     <td  style="width: 92px;">প্রোডাক্টের নাম</td>
                    <td  style="width: 92px;">ব্র্যান্ড</td>
                    <td >পরিমাণ</td>
                     <td >একক</td>                   
                      <td >সেলিং সংখ্যা</td>
                </tr>
                <tr>
                   <td>ফেব্রুয়ারি</td>
                    <td>প্রথম সপ্তাহ</td>
                    <td>আম</td>
                    <td>আড়ং</td>
                    <td>2</td>     
                    <td>টি</td> 
                    <td>66</td>      
                </tr>
            </table>
        </div>

        <div>
            <h2><a name="07" id="07"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">সামগ্রিক সেলিং স্টেটমেন্ট</th></tr>
                <tr>
                        <td colspan ="3"><b>প্রোডাক্ট ক্যাটাগরি : </b><select class="box5" name="transfer_to" style="width: 150px;">
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
                     <td colspan="4"><b>সেলিং এর ধরণ : </b>
                        <select class="box2" name="package_type">
                            <option value="">- সেলিং -</option>
                            <option value="">চলমান সেলিং</option>
                            <option value="">সাম্ভাব্য সেলিং</option>
                        </select>  
                         <input type="submit" value="সাবমিট">
                    </td>                                         
                </tr>
                  <tr align="left" id="table_row_odd">
                   <td>মাসের নাম</td>
                    <td>সপ্তাহ</td>
                     <td  style="width: 92px;">প্রোডাক্টের নাম</td>
                    <td  style="width: 92px;">ব্র্যান্ড</td>
                    <td >পরিমাণ</td>
                     <td >একক</td>                   
                      <td >সেলিং সংখ্যা</td>
                </tr>
                <tr>
                   <td>ফেব্রুয়ারি</td>
                    <td>প্রথম সপ্তাহ</td>
                    <td>আম</td>
                    <td>আড়ং</td>
                    <td>2</td>     
                    <td>টি</td> 
                    <td>66</td>      
                </tr>
            </table>
        </div>

    </div>
    <?php

    include 'includes/footer.php';
    ?> 
    
