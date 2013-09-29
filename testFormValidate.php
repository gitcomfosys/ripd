<?php
error_reporting(0);
include_once 'includes/header.php';
include_once 'includes/db.php';
include_once 'includes/ConnectDB.inc';

if (isset($_POST['pro_submit'])) {
    if (isset($_POST['pro_catagory'])) {

        $sql_product_insert = $dbname->prepare("INSERT INTO product_catagory 
                                    (pro_catagory, pro_cat_code, pro_type, pro_type_code)
                                     VALUES  (:pro_catagory, :pro_cat_code, :pro_type, :pro_type_code)");

        $sql_product_insert->bindParam(':pro_catagory', $pro_catagory);
        $sql_product_insert->bindParam(':pro_cat_code', $pro_cat_code);
        $sql_product_insert->bindParam(':pro_type', $pro_type);
        $sql_product_insert->bindParam(':pro_type_code', $pro_type_code);


        $pro_catagory = $_POST['pro_catagory'];
        $pro_cat_code = $_POST['pro_cat_code'];
        $pro_type = $_POST['pro_type'];
        $pro_type_code = $_POST['pro_type_code'];

        $sql_product_insert->execute();

        if ($sql_product_insert) {
            $msg = "তথ্য সংরক্ষিত হয়েছে";
        } else {
            $msg = "ভুল হয়েছে";
        }
    } else {
        $pro_category_code = $_POST['product'];
        $pro_type = $_POST['pro_type'];
        $pro_type_code = $_POST['pro_type_code'];
        $sql_select = mysql_query("Select pro_catagory  from $dbname.product_catagory where pro_cat_code ='$pro_category_code' ");
        $product_result = mysql_fetch_assoc($sql_select);
        $product_cat_name = $product_result['pro_catagory'];
        $sql_product_insert = mysql_query("INSERT INTO $dbname.product_catagory 
                                    (pro_catagory, pro_cat_code, pro_type, pro_type_code)
                                     VALUES  ('$product_cat_name', '$pro_category_code', '$pro_type', '$pro_type_code')");
        if ($sql_product_insert) {
            $msg = "তথ্য সংরক্ষিত হয়েছে";
        } else {
            $msg = "ভুল হয়েছে";
        }
    }
}
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<script>
    function shownew_product_caregory(new_product_category) // for types dropdown list
    {
        var xmlhttp;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById('new_product_category').innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","includes/tablerow.php?id="+new_product_category,true);
        xmlhttp.send();	
    }
</script>
<div class="columnSld" style=" padding-left: 50px;">
    <div class="main_text_box">
        <div style="padding-left: 162px;"><a href="index.php?apps=CA"><b>ফিরে যান</b></a></div>
        <div>           
            <form method="POST" onsubmit="" style=" padding-left: 50px;">	
                <table class="formstyle"  style=" width:560px; ">          
                    <tr><th style="text-align: center" colspan="3"><h1>মেইক প্রোডাক্ট ইন্ট্রিডিউসিং</h1>
                    </th>
                    </tr>
                    <tr><td colspan="6"></td>
                    </tr>
                    <?php
                    if ($msg != "") {
                        echo '<tr><td colspan="4" style="text-allign: center; color: red; font-size: 15px; padding-left: 200px;"><blink>' . $msg . '</blink></td></tr>';
                    }
                    ?>
                    <tr>
                        <td ><b>প্রোডাক্ট ক্যাটাগরি </b> &nbsp;&nbsp;&nbsp;<select class="box2" type="text" id="product_id" name="product" onchange="shownew_product_caregory(this.value)" />
                    <option value='' selected="selected">- প্রোডাক্ট ক্যাটাগরি -</option>
                    <option value="new">নতুন ক্যাটাগরি</option>
                    <?php
                    $product_cat_sql = mysql_query("SELECT DISTINCT pro_catagory, pro_cat_code FROM $dbname.product_catagory");
                    while ($product_cat_rows = mysql_fetch_array($product_cat_sql)) {
                        $db_product_cat_code = $product_cat_rows['pro_cat_code'];
                        $db_product_cat_name = $product_cat_rows['pro_catagory'];
                        echo'<option style="width: 96%" value=' . $db_product_cat_code . '>' . $db_product_cat_name . '</option>';
                    }
                    ?>
                    </select></td> 
                    </tr>
                    <tr id="new_product_category"></tr>   
                    <tr>
                        <td ><b>প্রোডাক্ট টাইপ </b></td>
                        <td><b>প্রোডাক্ট টাইপ কোড</b></td>          
                    </tr>   
                    <tr>
                        <td ><input class="box" type="text" id="pro_type" name="pro_type" /></td>
                        <td><input class="box" type="text" id="pro_type_code" name="pro_type_code" /></td>          
                    </tr>  
                    <tr>                    
                        <td>
                        </td>                           
                    </tr>
                    <tr>                    
                        <td colspan="4" style="padding-left: 150px; " ><input class="btn" style =" font-size: 12px; " type="submit" name="pro_submit" value="সেভ করুন" />
                            <input class="btn" style =" font-size: 12px" type="reset" name="reset" value="রিসেট করুন" />
                        </td>                           
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>   
<?php
include 'includes/footer.php';
?>