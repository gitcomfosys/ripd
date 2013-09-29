<?php
        include_once 'includes/ConnectDB.inc';
        include_once 'includes/showTables.php';
        include_once 'includes/function.php';
        include 'includes/columnLeft.php';
?>

<script type="text/javascript" src="javascripts/external/mootools.js"></script>
        <script type="text/javascript" src="javascripts/dg-filter.js"></script>
        <fieldset id="fieldset_style">

            <div id="table_header_style">
                <table border="0" style="width: 100%; height: 100%;font-size: 17px" align="center">
                    <tr align="center">
                        <td><b><?php echo Title('award')?></b></td>
                    </tr>
                </table>
            </div>
           সার্চ/খুঁজুন:  <input type = "text" id ="search_box_filter"><br />
            <span id="office">
                   <br />
                <div>
                     <table id="office_info_filter" border="1" align="center" width= 99%" cellpadding="5px" cellspacing="0px">
                    <thead>
                        <tr align="left" id="table_row_odd">
                            <th><?php echo "ক্রম";?></th>
                            <th><?php echo "এওয়ার্ড নেইম";?></th>
                            <th><?php echo "এওয়ার্ড বর্ণনা";?></th>
                            <th><?php echo "তারিখ";?></th>
                            <th><?php echo "এওয়ার্ড হোল্ডার";?></th>
                        </tr>
                    </thead>
                    <tbody>
                    
<?php
                    $sql_awards = "SELECT * from ".$dbname.".awards ORDER BY award_date ASC";
                    $rs_awards = mysql_query($sql_awards);
                    
                     while($row_awards = mysql_fetch_array($rs_awards))
                         {
                         $db_slNo = $db_slNo + 1;
                         $db_awardId = $row_awards['idAwards'];
                         $db_awardName = $row_awards['award_name'];
                         $db_awardDescription = $row_awards['award_description'];
                         $db_awardDate = $row_awards['award_date'];
                         //$db_awardHolder = $row_awards[''];
                         $db_awardHolder = "হোল্ডার";
                         echo "<tr>";
                         echo "<td>$db_slNo</td>";
                         echo "<td>$db_awardName</td>";
                         echo "<td>$db_awardDescription</td>";
                         echo "<td>$db_awardDate</td>";
                         echo "<td>$db_awardHolder</td>";
                         echo "</tr>";
                         }
?>
             </tbody>
                </table>                       
                    </div>
            </span>          
        </fieldset>

            <script type="text/javascript">
            var filter = new DG.Filter({
                filterField : $('search_box_filter'),
                filterEl : $('office_info_filter')
                //colIndexes : [0,2]
                });
            </script>
