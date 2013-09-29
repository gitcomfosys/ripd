<?php
            include 'includes/db.php';
            
            function Title($raw_title)
                {
                $back_dbname = $_SESSION['back_database_name'];
                $title_sql = mysql_query("SELECT * FROM ".$back_dbname.".information WHERE info_type = '$raw_title'");
                while($title_row = mysql_fetch_array($title_sql))
                        {
                        $title = $title_row['info_description'];
                        }
                return (string)$title;
                }              
?>
