<?php
include_once 'includes/ConnectDB.inc';
include_once 'includes/showTables.php';
include_once 'includes/function.php';
include 'includes/columnLeft.php';
?>
<table id="master_chart">
    <thead>
        <tr align="center" id="table_row_odd">
            <th align="center" colspan="3"><?php echo "মাস্টার চার্ট"; ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql_productCategory = "SELECT * from $dbname.product_category ORDER BY category_name ASC";
        $rs_productCategory = mysql_query($sql_productCategory);
        echo "<tr>";
        $loopValue = 0;
        while ($row_productCategory = mysql_fetch_array($rs_productCategory)) {
            if (($loopValue % 3) == 0) {
                echo "</tr><tr>";
            }
            $db_categoryId = $row_productCategory['idProduct_category'];
            $db_categoryName = $row_productCategory['category_name'];
            echo "<td id = \"master-chart_column\">";
            echo "<table border = \"1\" id = \"master_chart_category\"><tr><th>$db_categoryName</th></tr>";
            $sql_productName = "SELECT * from $dbname.product_chart where Product_category_idProduct_category = $db_categoryId ORDER BY product_name ASC";
            $rs_productName = mysql_query($sql_productName);
            while ($row_productName = mysql_fetch_array($rs_productName)) {
                $db_productName = $row_productName['product_name'];
                echo "<tr><td>$db_productName</td></tr>";
            }
            echo "</table></td>";
            $loopValue = $loopValue + 1;
        }
        echo "</tr>";
        ?>
    </tbody>
</table>       
<script type="text/javascript">
    var filter = new DG.Filter({
        filterField : $('office_filter'),
        filterEl : $('office_info')
        //colIndexes : [0,2]
    });
</script>
