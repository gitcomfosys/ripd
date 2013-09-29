<?php
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
error_reporting(0);
?>
<style type="text/css">
    @import "css/bush.css";
    @import "css/expand_collapse.css";
        .formstyle td{
        padding: 6px;
        text-align: center;
    }
</style>
<script type="text/javascript">   
    $(function a(){
        var count = 2;
        $('p#add_field').click(function a(){
            $('#container_others').append( '<tr><td>বিষয়  '+ count
                + ' : <input class="textfield" id="field1" name="field1[]" type="text" /></td>' 
                + ' <td>পরিমান' 
                + ' : <input class="box" id="field2" name="field2[]" type="text" /></td></tr>'
        );	            
            count = count + 1;
        });
    });
</script> 
<script type="text/javascript" src="javascripts/expand_collapse01.js"></script>
<script type="text/javascript" src="javascripts/expand_collapse02_ui.js"></script>
<script>    
    $(function() {
        $( "#accordion" ).accordion();
    });
</script>
<script type="text/javaScript">
    function moveToRightOrLeft(side){
        var listLeft=document.getElementById('selectLeft');
        var listRight=document.getElementById('selectRight');

        if(side==1){
            if(listLeft.options.length==0){
                alert('সব গুলি ক্ষমতা বিকেন্দ্রীকরণ হয়ে গেছে');
                return false;
            }else{
                var selectedCountry=listLeft.options.selectedIndex;

                move(listRight,listLeft.options[selectedCountry].value,listLeft.options[selectedCountry].text);
                listLeft.remove(selectedCountry);

                if(listLeft.options.length>0){
                    listLeft.options[0].selected=true;
                }
            }
        }else if(side==2){
            if(listRight.options.length==0){
                alert('সব গুলি ক্ষমতা স্থগিতকরন হয়ে গেছে');
                return false;
            }else{
                var selectedCountry=listRight.options.selectedIndex;

                move(listLeft,listRight.options[selectedCountry].value,listRight.options[selectedCountry].text);
                listRight.remove(selectedCountry);

                if(listRight.options.length>0){
                    listRight.options[0].selected=true;
                }
            }
        }
    }

    function move(listBoxTo,optionValue,optionDisplayText){
        var newOption = document.createElement("option");
        newOption.value = optionValue;
        newOption.text = optionDisplayText;
        listBoxTo.add(newOption, null);
        return true;
    }
</script>

<?php
$account_id = $_POST['account_number'];
if ((isset($_POST['customer_submit'])) && $account_id == '') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>
            <div>
                <form method="POST" onsubmit="">
                    <table  class="formstyle">          
                        <tr><th colspan="10" style="text-align: center;">ডেলেভারী কপি</th></tr>
                        <tr>
                            <td colspan="3" style="text-align: right;">রিপড ইউনিভার্সাল</td>
                            <td colspan="4"><a><img alt="Add Field" width="100px" height="80px" src="images/big_pic.jpg"></a></td>
                        </tr> 
                        <tr>
                            <td colspan="2"  style="text-align: right;">একাউন্ট নং</td><td >: <input class="textfield" type="text" name="organization_name" id="organization_name" readonly=""></td>

                            <td colspan="2" style="text-align: right;">ফোন নাম্বার</td><td colspan="3">: <input class="textfield" type="text" name="address" id="address" readonly=""></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right;">রিসীভকারীর ঠিকানা</td><td >: <input class="textfield" type="text" name="cell_number" id="cell_number" readonly=""></td>
                            <td colspan="2" style="text-align: right;">রিসীভকারীর ফোন নাম্বার</td><td colspan="3">: <input class="textfield" type="text" name="email" id="email" readonly=""></td>
                        </tr> 
                        <tr>
                            <td colspan="2" style="text-align: right;">মেইলিং ঠিকানা</td><td >: <input class="textfield" type="text" name="cell_number" id="cell_number" readonly=""></td>
                            <td></td>
                        </tr> 
                        <tr>
                            <td colspan="2" style="text-align: right;">অর্ডার তারিখ ও সময়</td><td >: <input class="textfield" type="text" name="cell_number" id="cell_number" readonly=""></td>
                            <td colspan="2" style="text-align: right;">অর্ডার নং</td><td colspan="3">: <input class="textfield" type="text" name="email" id="email" readonly=""></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right;">ডেলেভারী তারিখ ও সময়</td><td >: <input class="textfield" type="text" name="cell_number" id="cell_number" readonly=""></td>
                            <td colspan="2" style="text-align: right;">ডেলেভারী ইনভয়েস নং</td><td colspan="3">: <input class="textfield" type="text" name="email" id="email" readonly=""></td>
                        </tr>                        

                        <tr align="left" id="table_row_odd">
                            <td>ক্রম</td>
                            <td >প্রোডাক্ট ক্যাটাগরি</td>
                            <td>প্রোডাক্ট নেইম</td>
                            <td>অর্ডারকৃত আইটেম সংখ্যা</td>
                            <td>অফিসে পাওয়া যাবে</td>
                            <td>সেলসস্টোরে পাওয়া যাবে</td>
                            <td>অন্যান্য ইন্সট্রাকশন</td>
                            <td>পি.ভি.</td>
                            <td>বাদ দিন</td>
                        </tr>
                        <tr>
                            <td>১</td>
                            <td >
                                <select class="box2" name="transfer_to" style="width: 150px;">
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
                            <td > <select class="box2" name="transfer_to" style="width: 150px;">
                                    <option value="">চাউল</option>
                                    <option value="">আটা</option>
                                </select>                            
                            </td> 
                            <td>৩</td>
                            <td>২৩</td>
                            <td>৩৪</td>
                            <td>ব্যাগ</td>
                            <td>৩৪</td>                          
                            <td>*</td>
                        </tr>     
                        <tr>
                            <td colspan="8" ><hr /></td>
                        <br/>
                        </tr>                
                        <tr>
                            <td colspan="2" style="text-align: right; padding-top: 14px;vertical-align: top; width: 25%;">অন্যান্য</td>
                            <td colspan="3">
                                <table id="container_others">
                                    <tr>
                                        <td >বিষয় 1 : <input class="textfield" id="field1" name="field1[]" type="text" /></td>
                                        <td>পরিমান : <input class="box" id="field2" name="field2[]" type="text" /></td>
                                        <td style="vertical-align: top;"><p id="add_field"><a href="#"><br /><img alt="Add Field" width="22px" height="20px" src="images//addSign.png"></a></p></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>    
                        <tr>
                            <td colspan="2" style="text-align: right;">এমপ্লয়ী কস্ট</td><td >: <input class="textfield" type="text" name="cell_number" id="cell_number" readonly=""></td>
                            <td colspan="2" style="text-align: right;">কেয়ারিং কস্ট</td><td colspan="3">: <input class="textfield" type="text" name="email" id="email" readonly=""></td>
                        </tr> 
                        <tr>
                            <td colspan="2" style="text-align: right;">প্রোডাক্ট প্রাইজ</td><td >: <input class="textfield" type="text" name="cell_number" id="cell_number" readonly=""></td>
                            <td colspan="2" style="text-align: right;">সার্ভিস চার্জ</td><td colspan="3">: <input class="textfield" type="text" name="email" id="email" readonly=""></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right;">টোটাল এমাউন্ট</td><td >: <input class="textfield" type="text" name="cell_number" id="cell_number" readonly=""></td>
                        </tr>
                        <tr>                    
                            <td colspan="11" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="customer_submit" value="সেভ করুন" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                        </tr>                       
                    </table>
                </form>
            </div>
        </div>
    </div>
    <?php
} elseif ((isset($_POST['delivery_submit'])) && $account_id == '') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>

            <div>
                <form method="POST" onsubmit="" name="frm">	
                    <table  class="formstyle">          
                        <tr><th colspan="9" style="text-align: center;">ডেলেভারী চার্ট</th></tr>
                        <tr align="left" id="table_row_odd">
                            <td>ক্রম</td>
                            <td colspan="3">প্রোডাক্ট ক্যাটাগরি</td>
                            <td>প্রোডাক্ট নেইম</td>
                            <td>অর্ডারকৃত আইটেম সংখ্যা</td>
                            <td>অফিসে পাওয়া যাবে</td>
                            <td>সেলসস্টোরে পাওয়া যাবে</td>
                        </tr>
                        <tr>
                            <td>১</td>
                            <td colspan="3">
                                <select class="box2" name="transfer_to" style="width: 150px;">
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
                            <td > <select class="box2" name="transfer_to" style="width: 150px;">
                                    <option value="">চাউল</option>
                                    <option value="">আটা</option>
                                </select>                            
                            </td> 
                            <td>৩</td>
                            <td>২৩</td>
                            <td>৩৪</td>
                        </tr>   
                        <tr>
                            <th colspan="9">বাইং অর্ডার</th>
                        </tr>
                        <tr>
                            <td colspan="4"  style="text-align: right; padding-right: 75px">সিলেক্ট অর্ডার</td>
                            <td></td>
                            <td colspan="4"style="text-align: left; padding-left: 75px">বাইং অর্ডার লিস্ট</td>
                        </tr>
                        <tr>
                            <td colspan="4" rowspan="3" style="text-align: right">
                                <label>
                                    <select name="selectLeft" size="10" id="selectLeft" style="width: 200px; overflow: auto; padding: 5px; border: 1px solid #808080">
                                        <optgroup label="অফিস" >
                                            <option value="AS" selected="selected">অর্ডার ১</option>
                                            <option value="AS">অর্ডার ২</option>
                                        </optgroup>
                                        <optgroup label="সেলসস্টোর" >
                                            <option value="AS" selected="selected">অর্ডার ৬</option>
                                            <option value="AS">অর্ডার ৫</option>
                                        </optgroup>
                                    </select>
                                </label></td>
                            <td align="left">&nbsp;</td>
                            <td colspan="2" rowspan="3">
                                <select name="selectRight" size="10" id="selectRight" style="width: 200px; overflow: auto; padding: 5px; border: 1px solid #808080;">
                                    <option value="AF" selected="selected">অর্ডার ৪</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center; vertical-align: bottom"><label>
                                    <input name="btnRight" type="button" id="btnRight" value="&gt;&gt;" onClick="javaScript:moveToRightOrLeft(1);">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><label>
                                    <input name="btnLeft" type="button" id="btnLeft" value="&lt;&lt;" onClick="javaScript:moveToRightOrLeft(2);">
                                </label></td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>                    
                            <td colspan="9" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="customer_submit" value="সেভ করুন" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                        </tr>                       
                    </table>
                </form>
            </div>
        </div>
    </div>
    <?php
} elseif ((isset($_POST['order_submit'])) && $account_id == '') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>

            <div>
                <form method="POST" onsubmit="" name="frm">	
                    <table  class="formstyle">          
                        <tr><th colspan="9" style="text-align: center;">অর্ডার চার্ট</th></tr>
                        <tr align="left" id="table_row_odd">
                            <td>ক্রম</td>
                            <td colspan="3">প্রোডাক্ট ক্যাটাগরি</td>
                            <td>প্রোডাক্ট নেইম</td>
                            <td>অর্ডারকৃত আইটেম সংখ্যা</td>
                            <td>অফিসে পাওয়া যাবে</td>
                            <td>সেলসস্টোরে পাওয়া যাবে</td>
                            <td>বাদ দিন</td>
                        </tr>
                        <tr>
                            <td>১</td>
                            <td colspan="3">
                                <select class="box2" name="transfer_to" style="width: 150px;">
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
                            <td > <select class="box2" name="transfer_to" style="width: 150px;">
                                    <option value="">চাউল</option>
                                    <option value="">আটা</option>
                                </select>                            
                            </td> 
                            <td>৩</td>
                            <td>২৩</td>
                            <td>৩৪</td>
                            <td>*</td>
                        </tr>               
                        <tr>                    
                            <td colspan="9" style="text-align: center; " >
                                <input class="btn" style =" font-size: 12px; " type="submit" name="delivery_submit" value="সেভ" />
                        </tr>    
                    </table>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <?php
} else {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=ALO"><b>ফিরে যান</b></a></div>
            <div>
                <form method="POST" onsubmit="" name="frm">                
                    <table  class="formstyle">  
                        <tr><th colspan="6" style="text-align: center;">অর্ডার চার্ট</th></tr>
                        <tr align="left" id="table_row_odd">
                            <td>ক্রম</td>
                            <td colspan="3">রিসীভার ইনফরমেশন</td>
                            <td>রিসীভার ইন্সট্রাকশন</td>
                            <td></td>
                        </tr> 
                        <tr>
                            <td>১</td>
                            <td colspan="3">হেড অফিস</td>
                            <td>দরকার</td>
                            <td><input class="btn" style =" font-size: 12px; " type="submit" name="order_submit" value="ডেলেভারী প্রোডাক্ট" /></td>
                        </tr>
                        <tr>
                            <td>২</td>
                            <td colspan="3">থানা অফিস</td>
                            <td>দরকার</td>
                            <td><input class="btn" style =" font-size: 12px; " type="submit" name="order_submit" value="ডেলেভারী প্রোডাক্ট" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <?php
}
?>
<?php
include 'includes/footer.php';
?>