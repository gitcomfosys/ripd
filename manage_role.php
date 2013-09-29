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

    <div style="padding-left: 110px;"><a href="manage_role.php"><b>ফিরে যান</b></a></div>
    <div>
        <form method="post" onsubmit="" action="manage_role.php">
            <table class="formstyle" style="width: 75%;">
                <tbody>
                    <tr>
                        <th colspan="3">ক্ষমতা বিকেন্দ্রীকরণ</th>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center">কর্মচারীর নামঃ আব্দুল হালিম</td>
                    </tr>
                    <tr>
                        <td style="text-align: right; padding-right: 75px">সকল দায়িত্ব</td><td></td>
                        <td style="text-align: left; padding-left: 75px">অর্পিত দায়িত্ব</td>
                    </tr>
                    <tr>
                        <td rowspan="3" style="text-align: right">
                            <label>
                                <select name="selectLeft" size="10" id="selectLeft" style="width: 200px; overflow: auto; padding: 5px; border: 1px solid #808080">
                                    <option value="AS" selected="selected">স্ক্যান ডকুমেন্ট</option>
                                    <option value="AS">প্রোডাক্ট ইন</option>
                                </select>
                            </label></td>
                        <td align="left">&nbsp;</td>
                        <td rowspan="3">
                            <select name="selectRight" size="10" id="selectRight" style="width: 200px; overflow: auto; padding: 5px; border: 1px solid #808080;">
                                <option value="AF" selected="selected">টিকেট মেইকিং</option>
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
                    <tr><th colspan="4" style="text-align: center;">ক্ষমতা বিকেন্দ্রীকরণ</th></tr>                    
                    <tr align="left" id="table_row_odd">
                        <td>কর্মচারীর নাম</td>
                        <td>প্রাপ্ত ক্ষমতা</td>
                        <td style="text-align: center; width: 15%;">অপশন</td>
                    </tr> 
                    <tr>
                        <td>আব্দুল হালিম</td>
                        <td>স্ক্যান ডকুমেন্ট, প্রোডাক্ট ইন, আপডেট প্রোডাক্ট প্রাইজ</td>
                        <td style="text-align: center"><a href="manage_role.php?opt=add">পরিবর্তন করুন</a></td>
                    </tr>
                </table>
            </div>    
        </div>
        <?php
    }
    include 'includes/footer.php';
    ?>