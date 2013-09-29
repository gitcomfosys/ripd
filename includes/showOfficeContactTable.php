<?php 
include_once 'ConnectDB.inc';
?>
       <table id="info_table" border="1" align="center" width= 100%" cellpadding="5px" cellspacing="0px">       
        <tr id="table_row_odd">
            <th><?php echo Title('ot_no'); ?></th>
            <th><?php echo Title('ot_name'); ?></th>
            <th><?php echo Title('ot_number'); ?></th>
            <th><?php echo Title('ot_address'); ?></th>
            <th><?php echo Title('ot_email'); ?></th>
        </tr>
        <?php
        $sql_officeNcontact = "select * from ".$dbname.".office where Thana_idThana >4";
        $rs_officeNcontact = mysql_query($sql_officeNcontact);
        $db_slNo = 0;
        $flag = true;
        while ($row_officeNcontact = mysql_fetch_array($rs_officeNcontact)) {
            $db_slNo = $db_slNo + 1;
            $db_officeName = $row_officeNcontact['office_name'];
            $db_officeNumber = $row_officeNcontact['office_number'];
            $db_officeAddress = $row_officeNcontact['branch_name'];
            $db_officeEmail = $row_officeNcontact['office_email'];

            if ($flag)
                $row_style = "table_row_even";
            else
                $row_style = "table_row_odd";
            
            echo "<tr id=".$row_style.">";
            echo "<td>$db_slNo</td>";
            echo "<td>$db_officeName</td>";
            echo "<td>$db_officeNumber</td>";
            echo "<td>$db_officeAddress</td>";
            echo "<td>$db_officeEmail</td>";
            echo "</tr>";
            
            $flag = !$flag;
        }
        ?>
        </tbody>

    </table>
</fieldset>

