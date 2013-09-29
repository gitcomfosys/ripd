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
if ((isset($_POST['order_submit'])) && $account_id == '') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="selling_statement_ecom.php"><b>ফিরে যান</b></a></div>
            <div>
                <form method="POST" onsubmit="">
                    <table  class="formstyle">          
                        <tr><th colspan="10" style="text-align: center;">সেলিং স্টেটমেন্ট চার্ট</th></tr>
                        <tr  id="table_row_odd">
                            <td>তারিখ ও সময়</td>
                            <td>একাউন্ট নং</td>
                            <td>নাম ও মোবাইল নং</td>
                            <td>চালান নং</td>
                            <td>প্রোডাক্ট নেইম</td>
                            <td>প্রাইজ</td>
                            <td>পরিমাণ</td>
                            <td>পি.ভি.</td>
                            <td>সেলিংয়ের ধরণ</td>
                        </tr> 
                        <tr>
                            <td>০২-০৩-১৩, ৮.৪৫ এ. এম.</td>
                            <td>AC-১৩৪২৩৪৩৪</td>
                            <td>পল্টু ০১৬৭৭৮৮৮৮৮৮৮</td>
                            <td>৮৮৫৫</td>
                            <td>চাল</td>
                            <td>২৩৫৬৪</td>
                            <td>২ কেজি</td>
                            <td>৬৯</td>
                            <td>জেনারেল সেলিং</td>
                        </tr> 
                        <tr>
                            <td>০২-০৩-১৩, ৮.৪৫ এ. এম.</td>
                            <td>AC-১৩৪২৩৪৩৪</td>
                            <td>পল্টু ০১৬৭৭৮৮৮৮৮৮৮</td>
                            <td>মোট প্রাইজঃ ৮৮৫৫</td>
                            <td>চাল</td>
                            <td>২৩৫৬৪</td>
                            <td>২ কেজি</td>
                            <td>মোট পি.ভিঃ ৬৯</td>
                            <td>জেনারেল সেলিং</td>
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
} else {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="ecommerce_admin.php"><b>ফিরে যান</b></a></div>
            <div>
                <form method="POST" onsubmit="" name="frm">                
                    <table  class="formstyle">  
                        <tr><th colspan="9" style="text-align: center;">সেলিং স্টেটমেন্ট</th></tr> 
                        <tr  id="table_row_odd">
                            <td>তারিখ</td>
                            <td>সময়</td>
                            <td>অর্ডার নং</td>
                            <td>একাউন্ট নং</td>
                            <td>সেলিং এমাউন্ট</td>
                        </tr> 
                        <tr>
                            <td>০২-০৩-১৩</td>
                            <td>৮.৪৫ এ. এম.</td>
                            <td>৪</td>
                            <td>AC-১৩৪২৩৪৩৪</td>
                            <td>২৩৩৪৪৪</td>
                        </tr>                                    
                        <tr>
                            <td>০৬-০৩-১৩</td>
                            <td>৮.৪৫ এ. এম.</td>
                            <td>৫</td>
                            <td>AC-৪২৩৪৩৪</td>
                            <td>৩২৩৩৩৩</td>
                        </tr> 
                        <tr>                    
                            <td colspan="9" style="text-align: center"><input class="btn" style =" font-size: 12px; " type="submit" name="order_submit" value="সেভ করুন" />
                                <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" /></td>                           
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