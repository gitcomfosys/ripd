<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<style type="text/css">
    @import "css/bush.css";
</style>

<?php
if ($_GET['opt'] == 'add') {
    ?>
    <script type="text/javaScript">
        function moveToRightOrLeft(side){
            var listLeft=document.getElementById('selectLeft');
            var listRight=document.getElementById('selectRight');

            if(side==1){
                if(listLeft.options.length==0){
                    alert('সব গুলি সেলস স্টোর ডিভাইড করা হয়ে গেছে');
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
                    alert('সব গুলি সেলস স্টোর সরানো হয়ে গেছে');
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

    <div style="padding-left: 110px;"><a href="manage_role.php"><b>ফিরে যান</b></a></div>
    <div>
        <form method="post" onsubmit="" action="manage_role.php">
            <table class="formstyle" style="width: 75%;">
                <tbody>
                    <tr>
                        <th colspan="3">এরিয়া ডিভাইডার</th>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center">অফিসের নামঃ মৌচাক ব্রাঞ্চ</td>
                    </tr>
                    <tr>
                        <td style="text-align: right; padding-right: 60px">সকল সেলস স্টোর</td><td></td>
                        <td style="text-align: left; padding-left: 60px">অধীনস্থ সেলস স্টোর</td>
                    </tr>
                    <tr>
                        <td rowspan="3" style="text-align: right">
                            <label>
                                <select name="selectLeft" size="10" id="selectLeft" style="width: 200px; overflow: auto; padding: 5px; border: 1px solid #808080">
                                    <option value="SD" selected="selected">সিদ্ধেশ্বরী</option>
                                    <option value="ML">মালিবাগ</option>
                                </select>
                            </label>
                        </td>
                        <td align="left">&nbsp;</td>
                        <td rowspan="3">
                            <select name="selectRight" size="10" id="selectRight" style="width: 200px; overflow: auto; padding: 5px; border: 1px solid #808080;">
                                <option value="MC" selected="selected">মৌচাক</option>
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
                        <td colspan="3" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <?php
} else {
    ?>

    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=OSP"><b>ফিরে যান</b></a></div>
            <div>
                <table  class="formstyle">          
                    <tr><th colspan="4" style="text-align: center;">এরিয়া ডিভাইডার</th></tr>                    
                    <tr align="left" id="table_row_odd">
                        <td>অফিসের নাম</td>
                        <td>অধীনস্থ সেলস স্টোর</td>
                        <td style="text-align: center; width: 15%;">অপশন</td>
                    </tr> 
                    <tr>
                        <td>মৌচাক ব্রাঞ্চ</td>
                        <td>মৌচাক</td>
                        <td style="text-align: center"><a href="area_divider.php?opt=add">পরিবর্তন করুন</a></td>
                    </tr>
                </table>
            </div>    
        </div>
        <?php
    }
    include 'includes/footer.php';
    ?>