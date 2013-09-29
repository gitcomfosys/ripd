<link href="style/style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" media="all" href="javascripts/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="javascripts/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
    window.onclick = function()
        {
        new JsDatePick({
                useMode:2,
                target:"date_from",
                dateFormat:"%Y-%m-%d"
                });
        };
    window.onload = function()
        {
        new JsDatePick({
                useMode:2,
                target:"date_to",
                dateFormat:"%Y-%m-%d"
                });
        };
</script>
        
        <fieldset id ="fieldset_style" style="margin-top: 10px; padding: 10px;" >
            <table border="0" style="width: 100%; font-size: 17px">
                <tr align="center">
                    <td><div id="box_style">A/C Opening Date
                            <div id="box_inside_info">
                               <?php echo $acc_openning_date?>
                            </div>
                        </div>
                    </td>
                    <td><div id="box_style">Available Balance
                            <div id="box_inside_info">
                                <?php echo $available_balance; ?>
                            </div>
                        </div>
                    </td>
                    <td><div id="box_style">Last Payment
                            <div id="box_inside_info">

                            </div>
                        </div>
                    </td>
                    <td><div id="box_style">Last Withdrawal
                            <div id="box_inside_info">

                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </fieldset>

    
        <fieldset id="fieldset_style">
            
            <div id="table_header_style">
            <table border="0" style="width: 100%; height: 100%;font-size: 17px">
                <tr align="center">
                    <td style="text-align: center; width: 22%; font-size: 18px; color: #FAF6F6; font-family: cursive">Movement Types of Account</td>
                    </tr>
            </table>
            </div>

            <input type="hidden" name="acc_num" id="acc_num" autocomplete="off" value="<?php echo $search_account;?>" readonly>
            
            <table id="info_table" border="0" align="center" width= 90%" cellpadding="5px" cellspacing="0px">
                <tr id="table_row_odd">
                    <td width="20%">A/C Status</td>
                        <td>:</td>
                        <td width="28%"><?php echo $acc_status; ?></td>
                    <td width="23%"></td>
                        <td></td>
                        <td width="28%"></td>
                </tr>

                <tr id="table_row_even">
                    <td align="left">Last Transaction Date</td>
                        <td>:</td>
                        <td><?php echo $acc_last_transaction_date; ?></td>
                    <td align="left"></td>
                        <td></td>
                        <td></td>
                </tr>

                <tr id="table_row_odd">
                    <td align="left">Interest Rate</td>
                        <td>:</td>
                        <td><?php echo $interest_rate; ?></td>
                    <td align="left"></td>
                        <td></td>
                        <td></td>
                </tr>

                <tr id="table_row_even">
                    <td align="left">A/C Limit</td>
                        <td>:</td>
                        <td><?php echo $acc_limit; ?></td>
                    <td align="left">Limit Expiry Date</td>
                        <td>:</td>
                        <td><?php echo $limit_expiry_date; ?></td>
                </tr>
                
            </table>
            
            <br/>
            <table border="0" style="width: 30%;" align="center">
                <tr align="center" >
                    <td><b>Date From: </b></td>
                    <td><b>Date To: </b></td>
                </tr>
                <tr>
                    <td align="left">
                        <input type="text" name="date_from" id="date_from" placeholder="Date From">
                    </td>
                    <td align="right">
                        <input type="text" name="date_to" id="date_to" placeholder="Date To">
                    </td>
                </tr>
            </table>
            <br/>
            <table align="center" style="width: 30%">
                <tr align="center">
                    <td>
                        <IMG SRC="images/pic1.png" ALT="Transaction List" height="40px" width="200px" onclick="window.open(this.href='transactionList.php?id='+getElementById('acc_num').value+'&df='+getElementById('date_from').value+'&dt='+getElementById('date_to').value); return false">
                    </td>
                    <td>
                        <IMG SRC="images/pic2.png" ALT="Cheque Book Enquiry" height="40px" width="200px" onclick="window.open(this.href='chequeEnquiry.php?id='+getElementById('acc_num').value); return false">
                    </td>
                </tr>
            </table>


        </fieldset>