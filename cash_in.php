<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
?>
<style type="text/css"> @import "css/bush.css";</style>
<link href="css/print.css" rel="stylesheet" type="text/css" media="print"/>


<div class="columnSld" style=" padding-left: 50px;">
    <div class="main_text_box">
        <div id="noprint"style="padding-left: 110px;"><a href="cheque_making_for_in.php"><b>ফিরে যান</b></a></div>
        <div>           
           <table  class="formstyle" style="width: 98%;">          
                    <tr><th colspan="2" style="text-align: center;">ক্যাশ ইন</th></tr>
                    <tr>
                        <td>
                            <div id="cheque" style="width: 100%; height: 380px; font-size: 14px;font-weight: bold;border: blue solid 2px; margin: 0 auto;background-image: url(images/cheque.gif);background-repeat: no-repeat;background-size:100% 100%;">
                                <div id="head" style="width: 100%; height: 50px;">
                                    <div id="company" style="width: 100%; height: 100%; float: left; background-image: url(images/background.gif);background-repeat: no-repeat;background-size:100% 100%;"></div>
                                    <div style="width: 100%;height: 50%;float: left;padding-left: 4px;">
                                        <div id="dt" style="width: 55%;height: 100%;float: left">Date: <?php echo date("d-m-Y");?></div>
                                        <div id="cheque_no" style="width: 44%;height:100%;float: left;text-align: right;padding-right: 2px;">Slip No: <input type="text" readonly="" size="13" value="3433-3434-3433-8786"/></div>
                                    </div>
                                </div>
                                <div style="width:100%;height: 70%;">
                                    <div id="left" style="width: 55%;height: 82%;float: left;padding-top: 10px;">
                                        <div style="height: 15%;">A/C Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" readonly="" style="width: 62%;"/></div>
                                        <div style="height: 15%;">A/C Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" readonly="" style="width:62%;"/></div>
                                        <div style="height: 15%;">Depositor Name&nbsp;&nbsp;:<input type="text" readonly="" style="width: 61%;"/></div>
                                        <div style="height: 15%;">Depositor Mobile :<input type="text" readonly="" style="width: 61%;"/></div>
                                        <div style="height: 14%;width: 98%;padding-right: 4px;">Depositor Address :</br><textarea readonly="" style="width: 99%;float: right;"></textarea></div>
                                    </div>
                                    <div id="ri8" style="width: 43%; height: 80%;float: left;border: black solid 1px;margin-top: 4px;padding-top: 4px;padding-left: 4px;padding-right: 2px;">
                                        <div style="width: 100%;height: 13%;">TK <input type="text" readonly="" size="15" style="height:100%;"/> /= BDT</div>
                                        <div style="width: 100%;height: 50%;">Sum Of Total in Words: </br><textarea readonly="" style="width: 90%;height: 100%;float: left;"></textarea></div>
                                    </div>
                                </div>
                                <div style="width: 100%;height: 10%;padding-top: 25px;">
                                    <div style="width: 55%;height: 100%;float: left;text-align: center"><hr style="width:80%; height: 2px; background-color: black;"/>Depositor Sign</div>
                                    <div style="width: 45%;height: 100%;float: left;text-align: center"><hr style="width:100%; height: 2px; background-color: black;"/>Receiver Sign</div>
                                </div>
                                
                             </div>
                        </td>
                    </tr>
           </table>
        </div>
    </div>
</div>
    <?php
    include 'includes/footer.php';
    ?>