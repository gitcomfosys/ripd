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
        <div style="padding-left: 110px;"><a href="index.php?apps=REPORT"><b>ফিরে যান</b></a></div>
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
                <tr><th colspan="7" style="text-align: center;">দৈনিক এক্সপেন্ডিচার স্টেটমেন্ট</th></tr>
                <tr>
                    <td colspan="2"><b>প্যাকেজ টাইপঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- প্যাকেজ -</option>
                            <option value="">মাস্টার প্যাকেজ</option>
                            <option value="">সুপার প্যাকেজ</option>
                            <option value="">স্ট্যান্ডার্ড প্যাকেজ</option>
                            <option value="">ইকনোমি প্যাকেজ</option>
                            <option value="">স্টার্টার প্যাকেজ</option>
                        </select>    
                    </td>     
                    <td colspan="3"><b>এক্সপেন্ডিচারের ধরণঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- এক্সপেন্ডিচার -</option>
                            <option value="">চলমান এক্সপেন্ডিচার</option>
                            <option value="">সাম্ভাব্য এক্সপেন্ডিচার</option>
                        </select>    
                    </td>                     
                    <td rowspan="2" style="vertical-align: middle"><input type="submit" value="সাবমিট"></td>
                </tr>
                <tr>
                    <td colspan="2" ><b>শুরুর তারিখঃ </b><input type="text" name="date_from" id="date_from" placeholder="Date From"  style="">&nbsp;&nbsp;</td>
                    <td colspan="3" ><b>শেষের তারিখঃ </b><input type="text" name="date_to" id="date_to" placeholder="Date To"  onclick="infoProgramFromThana()"></td>
                </tr>
                <tr align="left" id="table_row_odd">
                    <td>তারিখ</td>
                    <td>একাউন্ট সংখ্যা</td>
                    <td>সর্বমোট পি ভি</td>                            
                    <td>সর্বমোট এমাউন্ট</td>    
                    <td>গড় পি ভি</td>                            
                    <td>গড় এমাউন্ট</td>    
                </tr> 
                <tr>
                    <td>12-12-12</td>
                    <td>231</td>
                    <td>43242</td>
                    <td>25337.87/=</td>     
                    <td>34435</td> 
                    <td>66565.87/=</td>      
                </tr>
            </table>
        </div>   

        <div>
            <h2><a name="02" id="02"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">সাপ্তাহিক এক্সপেন্ডিচার স্টেটমেন্ট</th></tr>
                <tr>
                    <td colspan="2"><b>প্যাকেজ টাইপঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- প্যাকেজ -</option>
                            <option value="">মাস্টার প্যাকেজ</option>
                            <option value="">সুপার প্যাকেজ</option>
                            <option value="">স্ট্যান্ডার্ড প্যাকেজ</option>
                            <option value="">ইকনোমি প্যাকেজ</option>
                            <option value="">স্টার্টার প্যাকেজ</option>
                        </select>    
                    </td>     
                    <td colspan="3"><b>এক্সপেন্ডিচারের ধরণঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- এক্সপেন্ডিচার -</option>
                            <option value="">চলমান এক্সপেন্ডিচার</option>
                            <option value="">সাম্ভাব্য এক্সপেন্ডিচার</option>
                        </select>    
                    </td>                     
                    <td rowspan="2" colspan="2" style="vertical-align: middle"><input type="submit" value="সাবমিট"></td>
                </tr>
                <tr>                    
                    <td>
                        <b>মাসঃ </b>
                        <select class='box2' name='month_name_from'>
                            <?php
                            $inc=1; $month_array = array('জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগষ্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');
                            while (list ($inc, $val) = each ($month_array)) echo "<option value='$inc'>$val</option>";
                            ?>
                        </select>
                    </td>                    
                    <td>
                        <b>বছরঃ </b>
                        <select class='box2' name='year_from'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>$inc_year</option>";
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
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>$inc_year</option>";
                            ?>
                        </select>
                    </td>     
                </tr>
                <tr align="left" id="table_row_odd" style="vertical-align: middle">
                    <td>মাসের নাম</td>
                    <td>সপ্তাহ</td>
                    <td>একাউন্ট সংখ্যা</td>
                    <td>সর্বমোট পি ভি</td>                            
                    <td>সর্বমোট এমাউন্ট</td>    
                    <td>গড় পি ভি</td>                            
                    <td>গড় এমাউন্ট</td>    
                </tr> 
                <tr>
                    <td>ফেব্রুয়ারি</td>
                    <td>প্রথম সপ্তাহ</td>
                    <td>231</td>
                    <td>43242</td>
                    <td>25337.87/=</td>     
                    <td>34435</td> 
                    <td>66565.87/=</td>      
                </tr>
            </table>
        </div>

        <div>
            <h2><a name="03" id="03"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">মাসিক এক্সপেন্ডিচার স্টেটমেন্ট</th></tr>
                <tr>
                    <td colspan="2"><b>প্যাকেজ টাইপঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- প্যাকেজ -</option>
                            <option value="">মাস্টার প্যাকেজ</option>
                            <option value="">সুপার প্যাকেজ</option>
                            <option value="">স্ট্যান্ডার্ড প্যাকেজ</option>
                            <option value="">ইকনোমি প্যাকেজ</option>
                            <option value="">স্টার্টার প্যাকেজ</option>
                        </select>    
                    </td>     
                    <td><b>এক্সপেন্ডিচার ধরণঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- এক্সপেন্ডিচার -</option>
                            <option value="">চলমান এক্সপেন্ডিচার</option>
                            <option value="">সাম্ভাব্য এক্সপেন্ডিচার</option>
                        </select>    
                    </td>                   
                    <td>
                        <b>বছরঃ </b>
                        <select class='box2' name='year_from'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>$inc_year</option>";
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
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>$inc_year</option>";
                            ?>
                        </select>
                    </td>                          
                    <td style="vertical-align: middle"><input type="submit" value="সাবমিট"></td>        
                </tr>
                <tr align="left" id="table_row_odd" style="vertical-align: middle">
                    <td>মাসের নাম</td>
                    <td>সপ্তাহ</td>
                    <td>একাউন্ট সংখ্যা</td>
                    <td>সর্বমোট পি ভি</td>                            
                    <td>সর্বমোট এমাউন্ট</td>    
                    <td>গড় পি ভি</td>                            
                    <td>গড় এমাউন্ট</td>    
                </tr> 
                <tr>
                    <td>ফেব্রুয়ারি</td>
                    <td>প্রথম সপ্তাহ</td>
                    <td>231</td>
                    <td>43242</td>
                    <td>25337.87/=</td>     
                    <td>34435</td> 
                    <td>66565.87/=</td>      
                </tr>
            </table>
        </div>

        <div>
            <h2><a name="04" id="04"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">ত্রৈমাসিক এক্সপেন্ডিচার স্টেটমেন্ট</th></tr>
                <tr>
                    <td colspan="2"><b>প্যাকেজ টাইপঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- প্যাকেজ -</option>
                            <option value="">মাস্টার প্যাকেজ</option>
                            <option value="">সুপার প্যাকেজ</option>
                            <option value="">স্ট্যান্ডার্ড প্যাকেজ</option>
                            <option value="">ইকনোমি প্যাকেজ</option>
                            <option value="">স্টার্টার প্যাকেজ</option>
                        </select>    
                    </td>     
                    <td><b>এক্সপেন্ডিচার ধরণঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- এক্সপেন্ডিচার -</option>
                            <option value="">চলমান এক্সপেন্ডিচার</option>
                            <option value="">সাম্ভাব্য এক্সপেন্ডিচার</option>
                        </select>    
                    </td>                   
                    <td>
                        <b>বছরঃ </b>
                        <select class='box2' name='year_from'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>$inc_year</option>";
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
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>$inc_year</option>";
                            ?>
                        </select>
                    </td>                          
                    <td style="vertical-align: middle"><input type="submit" value="সাবমিট"></td>        
                </tr>
                <tr align="left" id="table_row_odd" style="vertical-align: middle">
                    <td>বছর</td>
                    <td>ত্রৈমাসিক ক্রম</td>
                    <td>একাউন্ট সংখ্যা</td>
                    <td>সর্বমোট পি ভি</td>                            
                    <td>সর্বমোট এমাউন্ট</td>    
                    <td>গড় পি ভি</td>                            
                    <td>গড় এমাউন্ট</td>    
                </tr> 
                <tr>
                    <td>২০১৩</td>
                    <td>১ম</td>
                    <td>231</td>
                    <td>43242</td>
                    <td>25337.87/=</td>     
                    <td>34435</td> 
                    <td>66565.87/=</td>      
                </tr>
            </table>
        </div>

        <div>
            <h2><a name="05" id="05"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">ষান্মাসিক এক্সপেন্ডিচার স্টেটমেন্ট</th></tr>
                <tr>
                    <td colspan="2"><b>প্যাকেজ টাইপঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- প্যাকেজ -</option>
                            <option value="">মাস্টার প্যাকেজ</option>
                            <option value="">সুপার প্যাকেজ</option>
                            <option value="">স্ট্যান্ডার্ড প্যাকেজ</option>
                            <option value="">ইকনোমি প্যাকেজ</option>
                            <option value="">স্টার্টার প্যাকেজ</option>
                        </select>    
                    </td>     
                    <td><b>এক্সপেন্ডিচার ধরণঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- এক্সপেন্ডিচার -</option>
                            <option value="">চলমান এক্সপেন্ডিচার</option>
                            <option value="">সাম্ভাব্য এক্সপেন্ডিচার</option>
                        </select>    
                    </td>                   
                    <td>
                        <b>বছরঃ </b>
                        <select class='box2' name='year_from'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>$inc_year</option>";
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
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>$inc_year</option>";
                            ?>
                        </select>
                    </td>                          
                    <td style="vertical-align: middle"><input type="submit" value="সাবমিট"></td>        
                </tr>
                <tr align="left" id="table_row_odd" style="vertical-align: middle">
                    <td>বছর</td>
                    <td>ষান্মাসিক ক্রম</td>
                    <td>একাউন্ট সংখ্যা</td>
                    <td>সর্বমোট পি ভি</td>                            
                    <td>সর্বমোট এমাউন্ট</td>    
                    <td>গড় পি ভি</td>                            
                    <td>গড় এমাউন্ট</td>    
                </tr> 
                <tr>
                    <td>২০১৩</td>
                    <td>১ম</td>
                    <td>231</td>
                    <td>43242</td>
                    <td>25337.87/=</td>     
                    <td>34435</td> 
                    <td>66565.87/=</td>      
                </tr>
            </table>
        </div>

        <div>
            <h2><a name="06" id="06"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">বাৎসরিক এক্সপেন্ডিচার স্টেটমেন্ট</th></tr>
                <tr>
                    <td><b>প্যাকেজ টাইপঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- প্যাকেজ -</option>
                            <option value="">মাস্টার প্যাকেজ</option>
                            <option value="">সুপার প্যাকেজ</option>
                            <option value="">স্ট্যান্ডার্ড প্যাকেজ</option>
                            <option value="">ইকনোমি প্যাকেজ</option>
                            <option value="">স্টার্টার প্যাকেজ</option>
                        </select>    
                    </td>     
                    <td><b>এক্সপেন্ডিচার ধরণঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- এক্সপেন্ডিচার -</option>
                            <option value="">চলমান এক্সপেন্ডিচার</option>
                            <option value="">সাম্ভাব্য এক্সপেন্ডিচার</option>
                        </select>    
                    </td>                   
                    <td colspan="3">
                        <b>বছর শুরুঃ</b>&nbsp;
                        <select class='box2' name='year_from'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>$inc_year</option>";
                            ?>
                        </select><br />
                        <b>বছর শেষঃ </b>
                        <select class='box2' name='year_to'>
                            <?php
                            for($inc_year=2013; $inc_year <= 2099; $inc_year=$inc_year+1) echo "<option value='$inc_year'>$inc_year</option>";
                            ?>
                        </select>
                    </td>                          
                    <td style="vertical-align: middle"><input type="submit" value="সাবমিট"></td>        
                </tr>
                <tr align="left" id="table_row_odd" style="vertical-align: middle">
                    <td>বছর</td>
                    <td>একাউন্ট সংখ্যা</td>
                    <td>সর্বমোট পি ভি</td>                            
                    <td>সর্বমোট এমাউন্ট</td>    
                    <td>গড় পি ভি</td>                            
                    <td>গড় এমাউন্ট</td>    
                </tr> 
                <tr>
                    <td>২০১৩</td>
                    <td>231</td>
                    <td>43242</td>
                    <td>25337.87/=</td>     
                    <td>34435</td> 
                    <td>66565.87/=</td>      
                </tr>
            </table>
        </div>

        <div>
            <h2><a name="07" id="07"></a></h2><br/>
            <table  class="formstyle">          
                <tr><th colspan="7" style="text-align: center;">বাৎসরিক এক্সপেন্ডিচার স্টেটমেন্ট</th></tr>
                <tr>
                    <td colspan="2"><b>প্যাকেজ টাইপঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- প্যাকেজ -</option>
                            <option value="">মাস্টার প্যাকেজ</option>
                            <option value="">সুপার প্যাকেজ</option>
                            <option value="">স্ট্যান্ডার্ড প্যাকেজ</option>
                            <option value="">ইকনোমি প্যাকেজ</option>
                            <option value="">স্টার্টার প্যাকেজ</option>
                        </select>    
                    </td>     
                    <td colspan="2"><b>এক্সপেন্ডিচার ধরণঃ </b>
                        <select class="box2" name="package_type">
                            <option value="">- এক্সপেন্ডিচার -</option>
                            <option value="">চলমান এক্সপেন্ডিচার</option>
                            <option value="">সাম্ভাব্য এক্সপেন্ডিচার</option>
                        </select>    
                    </td>                        
                    <td style="vertical-align: middle"><input type="submit" value="সাবমিট"></td>        
                </tr>
                <tr align="left" id="table_row_odd" style="vertical-align: middle">
                    <td>একাউন্ট সংখ্যা</td>
                    <td>সর্বমোট পি ভি</td>                            
                    <td>সর্বমোট এমাউন্ট</td>    
                    <td>গড় পি ভি</td>                            
                    <td>গড় এমাউন্ট</td>    
                </tr> 
                <tr>
                    <td>231</td>
                    <td>43242</td>
                    <td>25337.87/=</td>     
                    <td>34435</td> 
                    <td>66565.87/=</td>      
                </tr>
            </table>
        </div>

    </div>
    <?php

    include 'includes/footer.php';
    ?>