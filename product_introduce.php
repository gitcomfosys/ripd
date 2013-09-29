<?php include_once 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>

<div class="columnSld" style=" padding-left: 50px;">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=PROD"><b>ফিরে যান</b></a></div>
        <div>           
            <form method="POST" onsubmit="">	
                <table class="formstyle"  style=" width: 98%; ">          
                    <tr><th style="text-align: center" colspan="3"><h1>প্রোডাক্ট ইন্ট্রিডিউসিং</h1>
                    </th>
                    </tr>
                    <tr><td colspan="3"></td>
                    </tr>                    
                    <tr>
                        <td >প্রোডাক্ট ক্যাটাগরি</td>
                        <td>: <select class="box" name="transfer_to" style="width: 150px;">
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
                    </tr>
                    <tr>
                        <td >প্রোডাক্টের নাম</td>
                        <td>: <select class="box" name="transfer_to" style="width: 150px;">
                                <option value="">চাউল</option>
                                <option value="">আটা</option>
                            </select>                            
                        </td>          
                    </tr>                  
                    <tr>
                        <td>ইনফরমেশন ইন</td>
                        <td>:</td>
                        <td style="padding-left: 0px"></td>
                    </tr>
                    <tr>                    
                        <td colspan="4" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" />
                        </td>                           
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php include_once 'includes/footer.php'; ?>