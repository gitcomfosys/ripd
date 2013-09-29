<?php

include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
include_once 'includes/function.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<script type="text/javascript">
</script>

<div class="columnSld" style=" padding-left: 50px;">
    <div class="main_text_box">
        <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>
        <div>           
            <form method="POST" onsubmit="">	
            <table class="formstyle"  style=" width:100%; ">          
                <tr><th style="text-align: center" colspan="3">সিডিঊল   মেকিং</th></tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td style="width: 40%;"> তারিখঃ </td>
                    <td style="width: 1%;">: </td> 
                        <td><input  class ="textfield" type="text" id="date" name="date" /></td>
                </tr>
                <tr>
                    <td>  প্রেজেন্টার  নাম/ একাঊন্ট নাম্বার #ঃ  </td>
                    <td>:</td>
                   
                    <td ><select  class="box2"  name="employee_type" style =" font-size: 11px">
                                    <option > একটি নির্বাচন করুন</option>
                                    <option value=1>শ্যামল</option>
                                    <option value=2>বুশরা</option>
                                    <option value=3> ইব্রাহিম</option>
                                    <option value=4>ইফতি</option> 
                                  </select>	
                            </td>
                </tr>
                <tr>
                    <td>কারন</td>
                    <td>:</td>
                    <td style="padding-left:0px"><textarea id="cause" name="cause" ></textarea>
                </tr>
                <tr>
                <td colspan="3" style="padding-left: 250px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ " /></td>
                </tr>

            </table>
            </form>

        </div>
    </div>
</div>   

<?php include_once 'includes/footer.php'; ?>