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
    
    $(function(){
        var count = 2;
        $('p#add_field').click(function(){
            $('#container_others').append( '<tr>সাবজেক্ট<td> '+ count
                + ' : <input class="textfield" id="field1" name="field1[]" type="text" /></td>' 
                + ' <td>এমাউন্ট' 
                + ' : <input class="box" id="field2" name="field2[]" type="text" /></td></tr>'
        );	            
            count = count + 1;
        });
    });
</script> 
<div>        
    <form method="POST" onsubmit=""/>	
    <table class="formstyle"  style=" width:60%; ">          
        <tr><th style="text-align: center" colspan="3"><h1> আফটার সেভীং </h1></th></tr>

        <tr><td colspan="3"></td></tr>
        <tr>
            <td> প্রোডাক্ট প্রাইজ</td>
            <td>:    <input  class ="textfield" type="text" id="product_price" name="product_price" /></td>
        </tr>
        <tr>
            <td> সার্ভিস চার্জ়</td>
            <td>:    <input  class ="textfield" type="text" id="service_charge" name="service_charge" /></td>
        </tr>

        <tr>
            <td  >সাবজেক্ট : </td>
            <td>এমাউন্ট : </td>

        </tr>
        <tr>
            <td  ><input class='textfield' id='field1' name='field1[]' type='text' /></td>
            <td> <input class='box'id='field2' name='field2[]' type='text' /></td>
            <td style='vertical-align: top;'><p id='add_field'><a href='#'><br /><img alt='Add Field'width='22px' height='20px' src='images//addSign.png'></a></p></td>
        </tr>
        <tr>
            <td> টোটাল এমাউন্ট </td>
            <td>:    <input  class ="textfield" type="text" id="total_amount" name="total_amount" /></td>
        </tr>  
        <tr><td> <input class="btn" style ="font-size: 12px" type="print" name="print" value="প্রিন্ট" /></td></tr>
        <tr><td colspan='4'><hr></td></tr>
        <tr ><th colspan="4"style="text-align: center">
        <h2>  কামিং  অর্ডার   </h2></th>
        <tr ><th colspan="4" style="text-align: left">
        <h2> <B>অন্য পেজ (product chart)</B></h2>
        </tr>
        <tr>
            <td>  ডেলেভারী ব্যাক্তি একাউন্ট নাম্বার</td>
            <td>:    <input  class ="textfield" type="text" id="delivery_accountnumber" name="delivery_accountnumber" /></td>
        </tr>    
        <tr><td> <input class="btn" style ="font-size: 12px" type="print" name="print" value="প্রিন্ট" /></td></tr>     
        <tr><td colspan='4'><hr></td></tr>
        <tr ><th colspan="4"style="text-align: center">
        <h2> ক্রয়্কৃত প্রোডাক্ট</h2></th>
        <tr>
            <td>  চার্ট করতে হবে</td>
        <tr><td> <input class="btn" style ="font-size: 12px" type="print" name="print" value="প্রিন্ট" /></td></tr>  
        <tr ><th colspan="4" style="text-align: left">
        <h2> অন্য পেজ </h2>
        </tr>     
        <tr>
            <td> চেক প্রিন্ট হবে</td>
            <td>:    <input  class ="textfield" type="text" id="product_price" name="product_price" /></td>
        </tr>   
        <tr><td colspan='3'><hr></td></tr>
        <tr ><th colspan="3"style="text-align: center">
        <h2>   রিসীভার কোড</h2></th>
        <tr>
            <td  > একাউন্ট নাম্বার : </td>
            <td> এন্টার রিসীভার কোড : </td>  
        </tr>    
        <tr>
            <td  ><input class='textfield' id='field1' name='field1[]' type='text' /></td>
            <td> <input class='box'id='field2' name='field2[]' type='text' /></td>
        </tr>
        <tr>                    
            <td  ><input class="btn" style =" font-size: 12px; " type="submit" name="submit" value="সেভ করুন" /></td>
        </tr>     
       <tr><td colspan='3'><hr></td></tr>
        <tr ><th colspan="3"style="text-align: center">
        <h2>   পারচেইজ স্টেটমেন্ট</h2></th>
    <tr>
        <td> statement not include</td>
        </tr>
      <tr><td colspan='3'></td></tr>
        <tr ><th colspan="3"style="text-align: center">
        <h2>  এডভান্সড এমাউন্ট </h2></th>
    <tr>
        <td> বর্তমান এডভান্সড এমাউন্টঃ</td>
        <td>:    <input  class ="textfield" type="text" id="advance_amount" name="advance_amount" /></td>
        </tr>
        <tr>
        <td> এক্রট্রা  এমাউন্টঃ</td>
        <td>:    <input  class ="textfield" type="text" id="extra_amount" name="extra_amount" /></td>
        </tr>
        <tr>
        <td> টোটাল এমাউন্টঃ</td>
        <td>:    <input  class ="textfield" type="text" id="total_amount" name="total_amount" /></td>
        </tr>
    </table>
    <?php include_once 'includes/footer.php'; ?>
