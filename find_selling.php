<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>

<div class="column6">
    <div class="main_text_box">
      <div style="padding-left: 110px;"><a href="index.php?apps=PROD"><b>ফিরে যান</b></a></div> 
        <div>         
            <table  class="formstyle">          
                <tr><th colspan="11" style="text-align: center;">ফাইন্ড সেলিং</th></tr>  
                <tr>                          
                <td colspan ="6"><b>এন্টার চালান নং : </b><input   class="box" type="text" id="search_box_filter">
                <input type="submit" value="সাবমিট">
               </td>
                </tr>
                <tr align="left" id="table_row_odd">
                    <td > &nbsp;ক্রম</td>
                    <td style="width: 92px;">প্রোডাক্ট ক্যাটাগরি</td>
                    <td style="width: 92px;">প্রোডাক্টের নাম</td>
                    <td >ব্র্যান্ড</td>
                    <td >পরিমাণ</td>
                     <td >একক</td>
                      <td >সাইজ</td>
                </tr> 
                <tr>
                    <td> ০১</td>
                      <td  ><select class="box4" name="transfer_to" >
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
                    <td  ><select class="box4" name="transfer_to" >
                                <option value="">চাউল</option>
                                <option value="">আটা</option>
                            </select>                            
                   </td>    
                                       
                        <td>   প্রাণ                      		
                                   
                        <td>   ২টি                    		
                                   
                        <td>   লিটার                       		
                 
                        <td>  বড়                       		
                    
                </tr>
            </table>
        </div>

    </div>
    <?php
    include 'includes/footer.php';
    ?>