<div class="column1">
 <div class="left_box">
        <div class="top_left_box">
        </div>
        <div class="center_left_box">
            <div class="box_title"><span> ইউজার</span> মেনু</div>
                    <div class="navbox">
                        <ul class="nav">
                            
                              <?php
                        //$i=0;
                        foreach ($quickLinkList as $key => $value) {
                            if (!isset($_SESSION['Module']) OR $_SESSION['Module'] == '') {
                                $_SESSION['Module'] = $key;
                            }
                            if ($key == $_SESSION['Module']) {
                                echo '<li><a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?apps=' . $key . '" class="current">' . $value . '</a></li>';
                                //if($key == 'PK') tourPackages ();
                            } else {
                                echo '<li><a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?apps=' . $key . '">' . $value . '</a></li>';
                                //if($key == 'PK') tourPackages ();
                            }
                            //$i++;
                        }
                        ?>
                            
                            		
                        </ul>
                    </div>
        </div>
        <div class="bottom_left_box">
        </div>
    </div> 

</div>