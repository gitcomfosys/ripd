<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    $quickLinkList = array(
        'PI' => 'প্রোডাক্ট ইনফরমেশন',
        'OD' => 'অফিস ডে এন্ড অফ ডে',
        'SD' => 'সেলস স্টোর ডে এন্ড অফ ডে',
        'PP' => 'প্রোগ্রাম প্রোফাইল',
        'MA' => 'মেইক আপ্লিকেশন');
    if ($_SESSION['UserID'] == 'admin') {
        $quickLinkList['AREA'] = 'এরিয়া ইনফরমেশন ';
        $quickLinkList['OSP'] = 'অফিস এবং সেলসস্টোর ';
        $quickLinkList['HRE'] = 'এইচ আর এবং কর্মচারী ';
        $quickLinkList['PROGRA'] = 'প্রোগ্রাম সিডিউল ';
        $quickLinkList['CRM'] = 'কাস্টমার রিলেশনশিপ ম্যানেজমেন্ট ';
        $quickLinkList['PROD'] = 'প্রোডাক্ট ইনফরমেশন ';
        $quickLinkList['POS'] = 'পয়েন্ট অফ সেলস';
        $quickLinkList['ACC'] = 'একাউন্টিং সিস্টেম ';
        $quickLinkList['COMM'] = 'কমান্ড এন্ড সিস্টেম ';
        $quickLinkList['ECOM'] = 'ই-কমার্স ';
        $quickLinkList['REPORT'] = 'রিপোর্টিং ';
        $quickLinkList['ACM'] = 'একাউন্ট ম্যানেজমেন্ট ';
        $quickLinkList['PSA'] = 'পাওয়ার স্টোর এডমিন';
        $quickLinkList['ALO'] = 'এডমিন লোকাল অফিস';
        $quickLinkList['ASS'] = 'এডমিন সেলসস্টোর';
        $quickLinkList['NUR'] = 'প্যাটেন্ট নুর হোসাইন';
    } else if ($_SESSION['UserID'] == 'customer') {
        $quickLinkList['VA'] = 'ভিউ একাউন্ট';
    }
    else if ($_SESSION['UserID'] == 'employee') {
        $quickLinkList['EA'] = 'ভিউ একাউন্ট';
    }
    // global $sub_title;
    if (isset($_GET['apps'])) {
        $_SESSION['Module'] = $_GET['apps'];
    }
    else
        $_SESSION['Module'] = key($quickLinkList);
    $sub_title2 = $quickLinkList[$_SESSION['Module']];

    $SubModuleListContact = array('ONC' => 'অফিস এন্ড কন্টাক্ট', 'SNC' => 'সেলস স্টোর এন্ড কন্টাক্ট');
    //global $sub_title;
    if (isset($_GET['apps'])) {
        $_SESSION['Module'] = $_GET['apps'];
    }
    else
        $_SESSION['Module'] = key($SubModuleListContact);
    $sub_title3 = $SubModuleListContact[$_SESSION['Module']];

    $SubModuleListNoticeBoard = array('PROG' => 'প্রোগ্রাম', 'PRES' => 'প্রেজেন্টেশান', 'TRAIN' => 'ট্রেইনিং', 'TRAV' => 'ট্রাভেল');
    //global $sub_title;
    if (isset($_GET['apps'])) {
        $_SESSION['Module'] = $_GET['apps'];
    }
    else
        $_SESSION['Module'] = key($SubModuleListNoticeBoard);
    $sub_title4 = $SubModuleListNoticeBoard[$_SESSION['Module']];

    $ModuleList = array('HM' => 'হোম',
        'MC' => 'মাস্টার চার্ট',
        'CO' => 'কন্টাক্ট',
        'PT' => 'প্যাটেন্ট',
        'AW' => 'এওয়ার্ড',
        'NB' => 'নোটিস বোর্ড');
    //global $sub_title;
    if (isset($_GET['apps'])) {
        $_SESSION['Module'] = $_GET['apps'];
    }
    else
        $_SESSION['Module'] = key($ModuleList);
    $sub_title1 = $ModuleList[$_SESSION['Module']];

    function subMenuContact($SubModuleListContact) {
        echo '<ul>';
        //$i=0;
        foreach ($SubModuleListContact as $sub_key => $sub_value) {
            echo '<li><a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?apps=' . $sub_key . '">' . $sub_value . '</a></li>';
        }
        echo '</ul>';
    }

    function subMenuNoticeBoard($SubModuleListNoticeBoard) {
        echo '<ul>';
        //$i=0;
        foreach ($SubModuleListNoticeBoard as $sub_key => $sub_value) {
            echo '<li><a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?apps=' . $sub_key . '">' . $sub_value . '</a></li>';
        }
        echo '</ul>';
    }
    ?>          
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $sub_title1 . $sub_title2 . $sub_title3 . $sub_title4 . " | রিপড ইউনিভার্সাল" ?></title>
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />  
        <script type="text/javascript" src="javascripts/external/mootools.js"></script>
        <script type="text/javascript" src="javascripts/demo-js/table.js"></script>
        <script type="text/javascript" src="javascripts/dg-filter.js"></script>
        <script type="text/javascript" src="javascripts/domtab.js"></script>	
        <script type="text/javascript" src="javascripts/jquery.js"></script>
        <script src="javascripts/tooltip/jquery.js" type="text/javascript"></script>
        <script src="javascripts/tooltip/main.js" type="text/javascript"></script>

        <script type="text/javascript">	
            var count = 0;
            $(function(){
                $('p#add_field').click(function(){
                    count += 1;
                    $('#container').append(
                    '<strong>Link #' + count + '</strong><br />' 
                        + '<input id="field_' + count + '" name="fields[]' + '" type="text" /><br />' );
	
                });
            });

        </script>
    </head>

    <body>
        <div id="main_container">
            <div id="header">
                <a href="index.php"><div id="logo"></div></a>
                <div class="banner_adds"></div>
                <div class ="login"><?php
    if ($_SESSION['UserID'] == 'admin' || $_SESSION['UserID'] == 'customer' || $_SESSION['UserID'] == 'employee') {
        echo '<a href="?apps=LOG_OUT">সাইন আউট</a>';
    } else {
        echo '<a href="?apps=LOG">সাইন ইন/রেজিস্টার</a>';
    }
    ?></div>
                <div class="banner_sub_adds"></div>
                <div class="menu">
                    <ul>
                        <?php
//$i=0;
                        foreach ($ModuleList as $key => $value) {
                            if (!isset($_SESSION['Module']) OR $_SESSION['Module'] == '') {
                                $_SESSION['Module'] = $key;
                            }
                            if ($key == $_SESSION['Module']) {

                                if ($key == 'CO') {
                                    echo '<li><a href="#" class="current">' . $value . '</a>';
                                    subMenuContact($SubModuleListContact);
                                } else if ($key == 'NB') {
                                    echo '<li><a href="#" class="current">' . $value . '</a>';
                                    subMenuNoticeBoard($SubModuleListNoticeBoard);
                                } else {
                                    echo '<li><a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?apps=' . $key . '" class="current">' . $value . '</a>';
                                }
                                echo "</li>";
                            } else {
                                if ($key == 'CO') {
                                    echo '<li><a href="#">' . $value . '</a>';
                                    subMenuContact($SubModuleListContact);
                                } else if ($key == 'NB') {
                                    echo '<li><a href="#">' . $value . '</a>';
                                    subMenuNoticeBoard($SubModuleListNoticeBoard);
                                } else {
                                    echo '<li><a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?apps=' . $key . '">' . $value . '</a>';
                                }
                                echo "</li>";
                            }
                            //$i++;
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div>
                <?php
                switch ($_SESSION['Module']) {
                    case 'HM': //হোম
                        include 'home_content.php';
                        break;
                    case 'PI': //'প্রোডাক্ট ইনফরমেশন
                        include 'product_info.php';
                        break;
                    case 'MC': //মাস্টার চার্ট
                        include 'masterChart.php';
                        break;
                    //case 'CO': //কন্টাক্ট
                    //include 'officeNcontact.php';
                    // break;
                    case 'PT': //প্যাটেন্ট
                        include 'patent.php';
                        break;
                    case 'AW': //এওয়ার্ড
                        include 'awards.php';
                        break;
                    //case 'NB': //নোটিস বোর্ড
                    // include '';
                    //break;
                    case 'PP': //প্রোগ্রাম প্রোফাইল
                        include 'programProfile.php';
                        break;
                    case 'MA': //মেইক আপ্লিকেশন
                        include 'makeapplication.php';
                        break;
                    case 'PSA': //পাওয়ার স্টোর এডমিন
                        include 'power_store_admin.php';
                        break;
                    case 'COA': //ক্রিয়েট অফিস একাউন্ট
                        include 'create_office_account.php';
                        break;
                    case 'CSA': //ক্রিয়েট সেলস স্টোর একাউন্ট
                        include 'create_salesStore_account.php';
                        break;
                    case 'OD': //অফিস ডে এন্ড অফ ডে
                        include 'calendar.php';
                        break;
                    case 'SD': //সেলস স্টোর ডে এন্ড অফ ডে
                        include 'calendar_salestore.php';
                        break;
                    case 'LOG': //লগইন
                        include 'login.php';
                        break;
                    case 'LOG_OUT'://সাইন আউট
                        include 'logout.php';
                        break;
                    case 'REG': //রেজিস্টার
                        include 'customer_account_1.php';
                        break;
                    case 'ONC': //অফিস এন্ড কন্টাক্ট
                        include 'officeNcontact.php';
                        break;
                    case 'SNC': //সেলস স্টোর এন্ড কন্টাক্ট
                        include 'salesStoreAndContact.php';
                        break;
                    case 'PROG': //প্রোগ্রাম
                        include 'program.php';
                        break;
                    case 'PRES': //প্রেজেন্টেশান
                        include 'presentation.php';
                        break;
                    case 'TRAIN': //ট্রেইনিং
                        include '#'; //training.php
                        break;
                    case 'TRAV': //ট্রাভেল
                        include '#'; //travel.php
                        break;       
                    case 'AREA'://এরিয়া ইনফরমেশন
                        include 'create_area_menu.php';
                        break;
                    case 'OSP'://অফিস এবং সেলসস্টোর
                        include 'create_off_sstore_menu.php';
                        break;
                    case 'HRE'://এইচ আর এবং কর্মচারী
                        include 'create_hr_menu.php';
                        break;
                    case 'PROGRA'://প্রোগ্রাম সিডিউল
                        include 'create_program_menu.php';
                        break;
                    case 'CRM'://কন্টেন্ট রিসোর্স ম্যানেজমেন্ট
                        include 'create_crm_menu.php';
                        break;
                    case 'PROD'://প্রোডাক্ট ইনফরমেশন
                        include 'create_product_menu.php';
                        break;
                    case 'POS'://POS
                        include 'create_pos_menu.php';
                        break;
                    case 'ACC'://একাউন্টিং সিস্টেম
                        include 'create_acc_menu.php';
                        break;
                    case 'COMM'://কমান্ড এন্ড সিস্টেম
                        include 'create_command_menu.php';
                        break;
                    case 'ECOM'://ই-কমার্স 
                        include 'create_ecom_menu.php';
                        break;
                    case 'REPORT'://রিপোর্টিং
                        include 'create_report_menu.php';
                        break;
                    case 'ACM'://একাউন্ট ম্যানেজমেন্ট
                        include 'create_accmanage_menu.php';
                        break;
                    case 'NUR'://নুর হোসেন
                        include 'create_nurhossain_menu.php';
                        break;
                    case 'ALO'://এডমিন লোকাল অফিস
                        include 'admin_local_office.php';
                        break;
                    case 'ASS'://এডমিন লোকাল অফিস
                        include 'admin_sales_store.php';
                        break;
                    case 'VA': //ভিউ কাস্টমার একাউন্ট
                        include 'view_customer_account.php';
                        break;
                    case 'EA': //ভিউ এমপ্লয়ী একাউন্ট
                        include 'view_employee_account.php';
                        break;
                    case 'NoAccess':
                        include 'includes/access_denied.inc';
                        break;
                }
                ?>
            </div>
            <div class="cleaner"></div>
            <div>
                <?php
                include 'includes/footer.php';
                ?>
            </div>
        </div>
    </body>
</html>






