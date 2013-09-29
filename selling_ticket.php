<?php
error_reporting(0);
include_once 'includes/MiscFunctions.php';
include 'includes/db.php';
include 'includes/ConnectDB.inc';
include 'includes/header.php';
$sqlerror="";
?>
<style type="text/css">
    @import "css/bush.css";
</style>
<link href="css/print.css" rel="stylesheet" type="text/css" media="print"/>
<script  type="text/javascript">
    function getname(type)
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
                document.getElementById('p_name').innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","includes/selectPresentations.php?t="+type,true);
        xmlhttp.send();
    }
    function getAccount()
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
                document.getElementById('acount').innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","includes/getAccount.php?",true);
        xmlhttp.send();
    }
    function showTotal(ticket_prize,making_prize)
    {
        var seat = countCheckboxes();
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
                document.getElementById('prize').innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","includes/getTotal.php?TP="+ticket_prize+"&MP="+making_prize+"&seat="+seat,true);
        xmlhttp.send();
    }
       
</script>
<script type="text/javascript">
    var iCounter = 0;
function checkCounter(refChkBox) 
{
    if(refChkBox.checked) 
    {
        if(iCounter >=10) 
            {
            refChkBox.checked = false;
            alert("দুঃখিত, একসাথে ১০ টার বেশি টিকেট ক্রয় করতে পারবেন না");
            }
    else { iCounter++; }
    }
    else {iCounter--;}
}
</script>
<script>
    function countCheckboxes()
    {
        var inputElems = document.getElementsByTagName("input"),
        count = 0;
        for (var i=0; i<inputElems.length; i++) {
            if (inputElems[i].type === "checkbox" && inputElems[i].checked === true) {
                count++;
            }
}
return count;
    }
</script>
<?php
if(isset($_POST['submit'])) 
{
    $value=$_POST['ProgName'];
    $type = $_POST['type'];
    $allsql="SELECT * FROM " . $dbname . ".program WHERE idprogram= $value ;";
    $allrslt=mysql_query($allsql) or $sqlerror=' অজ্ঞাত ত্রুটি, সিস্টেম অ্যাডমিনের সাথে যোগাযোগ করুন';
    while($all=  mysql_fetch_assoc($allrslt))
        {
            $p_name=$all['program_name'];
            $p_no=$all['program_no'];
            $p_date=$all['program_date'];
            $p_time=$all['program_time'];
            $p_place=$all['program_location'];
            $emp_id=$all['Employee_idEmployee'];
            $ticket_prize=$all['ticket_prize'];
            $making_prize=$all['making_charge'];
        }
    $sql = "SELECT * FROM ". $dbname ." .cfs_user WHERE idUser = ANY( SELECT cfs_user_idUser FROM employee WHERE idEmployee = $emp_id);";
    $finalsql=mysql_query($sql) or $sqlerror=' অজ্ঞাত ত্রুটি, সিস্টেম অ্যাডমিনের সাথে যোগাযোগ করুন';
    $finalget=mysql_fetch_assoc($finalsql);
    $emp_name=$finalget['account_name'];
    $emp_mail=$finalget['email'];
}

if(isset($_POST['submit_ticket'])) 
{
   $value=$_POST['progID'];
   $ownerName=$_POST['owner_name'];
   $ownerMbl=$_POST['owner_mbl'];
   $takaPerTicket=$_POST['ticket'];
   $makePerTicket = $_POST['Maketicket'];
   $arr_checkbox1 = $_POST['checkbox_Seat'];
   $str_SelectedSeat = implode(",", $arr_checkbox1);
   $arr_checkbox2 = $_POST['checkbox_Xtra'];
   $str_SelectedXSeat = implode(",", $arr_checkbox2);
   $freeSeat = countSeat($value);
   $freeXtra = countXtra($value);
   $no_of_seats=count($arr_checkbox1);
   $no_of_xtra=count($arr_checkbox2);
   $total_no_of_seat=$no_of_seats+$no_of_xtra;
   $totalTicketPrize=$total_no_of_seat * $takaPerTicket;
   $totalMakingCharge=$total_no_of_seat * $makePerTicket;
   $totalamount= $totalTicketPrize + $totalMakingCharge;
    
   if(($no_of_seats<=10 && $no_of_seats>0) || ($no_of_xtra<=$freeXtra && $no_of_xtra >0))
   {
       $str_seatstring="";
        $sql="SELECT seat_no FROM " . $dbname . ".ticket WHERE Program_idprogram = $value;";
        $rslt=mysql_query($sql) or $sqlerror=' অজ্ঞাত ত্রুটি, সিস্টেম অ্যাডমিনের সাথে যোগাযোগ করুন';
        while($db_seats=  mysql_fetch_assoc($rslt))
            {
               if($db_seats['seat_no']!="")
                { $str_seatstring = $str_seatstring.",".$db_seats['seat_no']; }
            else
                continue;
             }
            $arr_Seats = explode(',', $str_seatstring);
            $arr_matchSeat= array_intersect($arr_checkbox1, $arr_Seats);
            
            $sqlx="SELECT xtra_seat FROM " . $dbname . ".ticket WHERE Program_idprogram = $value;";
            $rsltx=mysql_query($sqlx) or $sqlerror=' অজ্ঞাত ত্রুটি, সিস্টেম অ্যাডমিনের সাথে যোগাযোগ করুন';
            $str_Xseatstring="";
            while($db_xseat=  mysql_fetch_assoc($rsltx))
                {
                   if($db_xseat['xtra_seat']!="")
                    { $str_Xseatstring = $str_Xseatstring.",".$db_xseat['xtra_seat']; }
                else
                    continue;
                 }
                $arr_Xtra = explode(',', $str_Xseatstring);
               $arr_matchXtra= array_intersect($arr_checkbox2, $arr_Xtra);
               if (count($arr_matchSeat) == 0  && count($arr_matchXtra) == 0 )
               {
                   $tsql="INSERT INTO `ripd_db_comfosys`.`ticket` (`ticket_owner_name` ,`ticket_owner_mobile` ,`no_ofTicket_purchase` ,`seat_no` ,`xtra_seat` ,`total_ticket_prize` ,`total_makingCharge` ,`total_amount`, `Program_idprogram`) VALUES ('$ownerName', '$ownerMbl', $total_no_of_seat , '$str_SelectedSeat' , '$str_SelectedXSeat', $totalTicketPrize, $totalMakingCharge, $totalamount, $value );";
                    $treslt=mysql_query($tsql) or $sqlerror=' অজ্ঞাত ত্রুটি, সিস্টেম অ্যাডমিনের সাথে যোগাযোগ করুন';
                    $TicketID = mysql_insert_id();
               }
               else { $bookedmsg = "error"; }
       }
 }

function freeSeat($progID)
{
    $str_seatstring="";
        $sql="SELECT seat_no FROM " . $dbname . ".ticket WHERE Program_idprogram = $progID;";
        $rslt=mysql_query($sql) or $sqlerror=' অজ্ঞাত ত্রুটি, সিস্টেম অ্যাডমিনের সাথে যোগাযোগ করুন';
        while($db_seats=  mysql_fetch_assoc($rslt))
            {
               if($db_seats['seat_no']!="")
                { $str_seatstring = $str_seatstring.",".$db_seats['seat_no']; }
            else
                continue;
             }
            $arr_Seats = explode(',', $str_seatstring);
        
        $sql2="SELECT total_seat FROM " . $dbname . ".program WHERE idprogram = $progID;";
        $rslt2=mysql_query($sql2) or $sqlerror=' অজ্ঞাত ত্রুটি, সিস্টেম অ্যাডমিনের সাথে যোগাযোগ করুন';
        $totalseat=  mysql_fetch_assoc($rslt2);
        $db_maxSeat=$totalseat['total_seat'];
        $arr_seatNo= range(1,$db_maxSeat);
        $arr_remainSeat = array_diff($arr_seatNo, $arr_Seats);
        return $arr_remainSeat;
}

function showSeats($progID)
{
       $arr_seats =freeSeat($progID);
      foreach ($arr_seats as $seat)
      {         
        echo  "<input type='checkbox' name='checkbox_Seat[]' value=$seat onClick='checkCounter(this)' /> $seat";
        echo "&nbsp&nbsp";
      } 
}

function countSeat($progID)
{
    $arr_seats = freeSeat($progID);
    $count = count($arr_seats);
    return $count;
}

function freeXtraSeat($progID)
{
    $sqlx="SELECT xtra_seat FROM " . $dbname . ".ticket WHERE Program_idprogram = $progID;";
            $rsltx=mysql_query($sqlx) or $sqlerror=' অজ্ঞাত ত্রুটি, সিস্টেম অ্যাডমিনের সাথে যোগাযোগ করুন';
            $str_Xseatstring="";
            while($db_xseat=  mysql_fetch_assoc($rsltx))
                {
                   if($db_xseat['xtra_seat']!="")
                    { $str_Xseatstring = $str_Xseatstring.",".$db_xseat['xtra_seat']; }
                else
                    continue;
                 }
                $arr_Xtra = explode(',', $str_Xseatstring);
        
        $sql2="SELECT extra_seat FROM " . $dbname . ".program WHERE idprogram = $progID;";
         $rslt2=mysql_query($sql2) or $sqlerror=' অজ্ঞাত ত্রুটি, সিস্টেম অ্যাডমিনের সাথে যোগাযোগ করুন';
        $totalseat=  mysql_fetch_assoc($rslt2);
        $db_maxXseat=$totalseat['extra_seat'];
        $arr_XseatNo= range(1,$db_maxXseat);
        $arr_remainXSeat = array_diff($arr_XseatNo, $arr_Xtra);
        return $arr_remainXSeat;
}
function showXtraSeats($progID)
{
       $arr_Xseats =freeXtraSeat($progID);
      foreach ($arr_Xseats as $xseat)
      {         
        echo  "<input type='checkbox' name='checkbox_Xtra[]' value=$xseat onClick='checkCounter(this)' /> $xseat";
        echo "&nbsp&nbsp";
      } 
}
function countXtra($progID)
{
    $arr_Xseats = freeXtraSeat($progID);
    $count = count($arr_Xseats);
    return $count;
}

function showTicket($Tid)
{
    $sql = "SELECT * FROM ". $dbname . ".`ticket` WHERE idticket= $Tid ; ";
    $result = mysql_query($sql) or $sqlerror=' অজ্ঞাত ত্রুটি, সিস্টেম অ্যাডমিনের সাথে যোগাযোগ করুন';
    $row = mysql_fetch_assoc($result);
    $db_pID = $row ['Program_idprogram'];
    
    $sql2 = "SELECT * FROM ". $dbname . ".`program` WHERE idprogram = $db_pID ; ";
    $result2 = mysql_query($sql2) or $sqlerror=' অজ্ঞাত ত্রুটি, সিস্টেম অ্যাডমিনের সাথে যোগাযোগ করুন';
    $row2 = mysql_fetch_assoc($result2);
    
    $progName = $row2['program_name'];
    $location = $row2['program_location'];
    $date = $row2['program_date'];
    $time = $row2['program_time'];
    $type = $row2['program_type'];
    $emp_id=$row2['Employee_idEmployee'];
    
    $fsql = "SELECT * FROM cfs_user WHERE idUser = ANY( SELECT cfs_user_idUser FROM employee WHERE idEmployee = $emp_id);";
    $finalsql=mysql_query($fsql) or $sqlerror=' অজ্ঞাত ত্রুটি, সিস্টেম অ্যাডমিনের সাথে যোগাযোগ করুন';
    $finalget=mysql_fetch_assoc($finalsql);
    $emp_name=$finalget['account_name'];
    $emp_mail=$finalget['email'];
    
    $name = $row['ticket_owner_name'];
    $mobil = $row['ticket_owner_mobile'];
    $str_seats = $row['seat_no'];
    $arr_seats = explode(',', $str_seats);
    $countseats = count($arr_seats);
    $str_xtraseats = $row['xtra_seat'];
    $arr_xtraseats = explode(',', $str_xtraseats );
    $countxtra = count($arr_xtraseats);
        
    if($arr_seats[0] != "")
    {
        for ($i=0; $i<$countseats; $i++)
        {
        echo "<div id='front' style='width: 768px; height: 384px; border: blue dashed 2px; margin: 0 auto;background-image: url(images/watermark.png);background-repeat: no-repeat;background-size:100% 100%; '>
                                    <div id='front_left' style='width: 192px; height: 384px;border-right:blue dotted 1px; float: left;'>
                                         <div style='width: 180px; float: left;padding-left: 4px;text-align: center;'><span style='font-family: SolaimanLipi;color: #3333CC;font-size: 20px;'><span style='color: black;'>$progName</span></span></div>
                                         <div id='entry' style='width: 180px;float:left;padding-top: 5px;text-align: center;'><span style='font-family: SolaimanLipi;color: #3333CC;font-size: 20px;'>এন্ট্রি পাস</span></div>
                                          <div id='owner_info' style='width: 180px; float: left;padding-left: 4px;padding-top: 10px;'>
                                            <span>স্বত্তাধিকারীর নামঃ <span style='color: black;'>$name</span></span></br>
                                            <span>স্বত্তাধিকারীর মোবাইল নাম্বারঃ <span style='color: black;'>$mobil</span></span></br>
                                            <span style='text-align: right;'>আসন নাম্বারঃ <span style='color: black;'>$arr_seats[$i]</span></span></br>
                                            <span>তারিখঃ <span style='color: black;'> $date</span></span></br><span>সময়ঃ <span style='color: black;'>$time</span></span>
                                            </div>
                                    </div>
                                    <div id='front_ri8' style='width: 574px; height: 384px; float: left;'>
                                       <div id='logo' style='width: 80px;height: 80px;float: left;background-image: url(images/logo.png);background-repeat: no-repeat;background-size:100% 80px;'><image /></div>
                                        <div style='width: 450px;height: 80px;float: left;padding-left: 9px;'>
                                            <div><span style='font-family: SolaimanLipi;color: #3333CC;font-size: 35px;'>রিপড ইউনিভার্সাল</span><span style='font-family: SolaimanLipi;color: #3333CC;font-size: 20px;'> লিমিটেড</span></div>
                                            <div><span style='font-family: SolaimanLipi;color: #8A8B8C;font-size: 20px;'>রিলীভ এন্ড ইমপ্রুভমেন্ট প্ল্যান অব ডেপ্রাইভড</span></div>
                                        </div>
                                       <div style='width: 570px; float: left;padding-left: 4px;text-align: center;'><span style='font-family: SolaimanLipi;color: #3333CC;font-size: 20px;'><span style='color: black;'>$progName</span></span></div>
                                        <div id='front_info' style='width: 570px; float: left;padding-left: 4px;'>
                                            <span>";if ($type =='presentation') {echo "প্রেজেন্টারের নামঃ " ;} elseif ($type =='program') {echo "প্রোগ্রামারের নামঃ ";} elseif($type =='training') {echo "ট্রেইনারের নামঃ ";} else{ echo "ট্রাভেলারের নামঃ";} echo"<span style='color: black;'> $emp_name</span></span></br>
                                            <span>";if ($type =='presentation') {echo "প্রেজেন্টারের ই-মেইলঃ " ;} elseif ($type =='program') {echo "প্রোগ্রামারের ই-মেইলঃ ";} elseif($type =='training') {echo "ট্রেইনারের ই-মেইলঃ ";} else{ echo "ট্রাভেলারের ই-মেইলঃ ";} echo"<span style='color: black;'> $emp_mail</span></span></br>
                                            <span>স্থানঃ <span style='color: black;'>$location</span></span></br>
                                            <span>তারিখঃ <span style='color: black;'>$date</span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>সময়ঃ <span style='color: black;'>$time</span></span>
                                        </div>
                                        <div id='entry' style='width: 574px;float:left;padding-top: 5px;text-align: center;'><span style='font-family: SolaimanLipi;color: #3333CC;font-size: 20px;'>এন্ট্রি পাস</span></div>
                                        <div id='owner_info' style='width: 570px; float: left;padding-left: 4px;'>
                                            <span>স্বত্তাধিকারীর নামঃ <span style='color: black;'>$name</span></span></br>
                                            <span>স্বত্তাধিকারীর মোবাইল নাম্বারঃ <span style='color: black;'>$mobil</span></span></br>
                                            <span style='text-align: right;'>আসন নাম্বারঃ <span style='color: black;'>$seatsArray[$i]</span></span></br>
                                            </div>
                                    </div>
                                </div>
                                <div id='back' style='width: 768px; height: 384px;  border: blue dashed 2px;background-color: #fff; margin: 0 auto;'>
                                    <div id='back_ri8' style='width: 574px; height: 384px; float: left;border-right: blue dotted 1px;'>
                                        <div id='back_head' style='text-align: center;padding-top: 10px;'>
                                        <span style='font-family: SolaimanLipi;color: #3333CC;font-size: 20px;'> কার্যবিবরণী</span>
                                        </div>
                                        </div>
                                </div></br><div class='page-break'></div>";
        }
    }
    
    if($arr_xtraseats[0] != "")
    {
        for ($j=0; $j<$countxtra; $j++)
        {
        echo "<div id='front' style='width: 768px; height: 384px; border: blue dashed 2px; margin: 0 auto;background-image: url(images/watermark.png);background-repeat: no-repeat;background-size:100% 100%; '>
                                    <div id='front_left' style='width: 192px; height: 384px;border-right:blue dotted 1px; float: left;'>
                                         <div style='width: 180px; float: left;padding-left: 4px;text-align: center;'><span style='font-family: SolaimanLipi;color: #3333CC;font-size: 20px;'><span style='color: black;'>$progName</span></span></div>
                                         <div id='entry' style='width: 180px;float:left;padding-top: 5px;text-align: center;'><span style='font-family: SolaimanLipi;color: #3333CC;font-size: 20px;'>এন্ট্রি পাস</span></div>
                                          <div id='owner_info' style='width: 180px; float: left;padding-left: 4px;padding-top: 10px;'>
                                            <span>স্বত্তাধিকারীর নামঃ <span style='color: black;'>$name</span></span></br>
                                            <span>স্বত্তাধিকারীর মোবাইল নাম্বারঃ <span style='color: black;'>$mobil</span></span></br>
                                            <span style='text-align: right;'>আসন নাম্বারঃ <span style='color: black;'>ex-$arr_xtraseats[$j]</span></span></br>
                                            <span>তারিখঃ <span style='color: black;'> $date</span></span></br><span>সময়ঃ <span style='color: black;'>$time</span></span>
                                            </div>
                                    </div>
                                    <div id='front_ri8' style='width: 574px; height: 384px; float: left;'>
                                       <div id='logo' style='width: 80px;height: 80px;float: left;background-image: url(images/logo.png);background-repeat: no-repeat;background-size:100% 80px;'><image /></div>
                                        <div style='width: 450px;height: 80px;float: left;padding-left: 9px;'>
                                            <div><span style='font-family: SolaimanLipi;color: #3333CC;font-size: 35px;'>রিপড ইউনিভার্সাল</span><span style='font-family: SolaimanLipi;color: #3333CC;font-size: 20px;'> লিমিটেড</span></div>
                                            <div><span style='font-family: SolaimanLipi;color: #8A8B8C;font-size: 20px;'>রিলীভ এন্ড ইমপ্রুভমেন্ট প্ল্যান অব ডেপ্রাইভড</span></div>
                                        </div>
                                       <div style='width: 570px; float: left;padding-left: 4px;text-align: center;'><span style='font-family: SolaimanLipi;color: #3333CC;font-size: 20px;'><span style='color: black;'>$progName</span></span></div>
                                        <div id='front_info' style='width: 570px; float: left;padding-left: 4px;'>
                                            <span>";if ($type =='presentation') {echo "প্রেজেন্টারের নামঃ " ;} elseif ($type =='program') {echo "প্রোগ্রামারের নামঃ ";} elseif($type =='training') {echo "ট্রেইনারের নামঃ ";} else{ echo "ট্রাভেলারের নামঃ";} echo"<span style='color: black;'> $e_name</span></span></br>
                                            <span>";if ($type =='presentation') {echo "প্রেজেন্টারের ই-মেইলঃ " ;} elseif ($type =='program') {echo "প্রোগ্রামারের ই-মেইলঃ ";} elseif($type =='training') {echo "ট্রেইনারের ই-মেইলঃ ";} else{ echo "ট্রাভেলারের ই-মেইলঃ ";} echo"<span style='color: black;'> $e_mail</span></span></br>
                                            <span>স্থানঃ <span style='color: black;'>$location</span></span></br>
                                            <span>তারিখঃ <span style='color: black;'>$date</span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>সময়ঃ <span style='color: black;'>$time</span></span>
                                        </div>
                                        <div id='entry' style='width: 574px;float:left;padding-top: 5px;text-align: center;'><span style='font-family: SolaimanLipi;color: #3333CC;font-size: 20px;'>এন্ট্রি পাস</span></div>
                                        <div id='owner_info' style='width: 570px; float: left;padding-left: 4px;'>
                                            <span>স্বত্তাধিকারীর নামঃ <span style='color: black;'>$name</span></span></br>
                                            <span>স্বত্তাধিকারীর মোবাইল নাম্বারঃ <span style='color: black;'>$mobil</span></span></br>
                                            <span style='text-align: right;'>আসন নাম্বারঃ <span style='color: black;'>ex-$xtraArray[$j]</span></span></br>
                                            </div>
                                    </div>
                                </div>
                                <div id='back' style='width: 768px; height: 384px;  border: blue dashed 2px;background-color: #fff; margin: 0 auto;'>
                                    <div id='back_ri8' style='width: 574px; height: 384px; float: left;border-right: blue dotted 1px;'>
                                        <div id='back_head' style='text-align: center;padding-top: 10px;'>
                                        <span style='font-family: SolaimanLipi;color: #3333CC;font-size: 20px;'> কার্যবিবরণী</span>
                                        </div>
                                        </div>
                                </div></br><div class='page-break'></div>";
        }
    }
}

function QueryFailedMsg($msg)
{
    echo '<table  class="formstyle" style="color: #3333CC; font-weight:600;">          
              <tr><th colspan="4" style="text-align: center;">টিকেট সেলিং</th></tr>
              <tr><td colspan="2" style="padding-left: 0;"></br>
              <span style="color: red;font-size: 15px; text-decoration: blink;padding-left: 200px;">';
    echo $msg;
    echo '</span></td></tr><tr><td style="padding-left: 350px !important; "></br></br><a href="selling_ticket.php" ><b>ফিরে যান</b></a></br></td></tr></table>';
}
?>

<?php
if ($_GET['opt']=='submit_ticket') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <?php  if($_GET['programID']!=0)
                        { 
                            $value = $_GET['programID']; 
                            $allsql="SELECT * FROM " . $dbname . ".program WHERE idprogram=$value;";
                                $allrslt=mysql_query($allsql) or $sqlerror=' অজ্ঞাত ত্রুটি, সিস্টেম অ্যাডমিনের সাথে যোগাযোগ করুন';
                                while($all=  mysql_fetch_assoc($allrslt))
                                    {
                                        $p_name=$all['program_name'];
                                        $p_no=$all['program_no'];
                                        $p_date=$all['program_date'];
                                        $p_time=$all['program_time'];
                                        $p_place=$all['program_location'];
                                        $emp_id=$all['Employee_idEmployee'];
                                        $ticket_prize=$all['ticket_prize'];
                                        $making_prize=$all['making_charge'];
                                        $db_type = $all['program_type'];
                                    }
                                    if($db_type== 'presentation'){$type=1;} elseif($db_type== 'program'){$type=2;} elseif($db_type== 'training'){$type=3;} else{$type=4;}
                                $sql = "SELECT * FROM ". $dbname ." .cfs_user WHERE idUser = ANY( SELECT cfs_user_idUser FROM employee WHERE idEmployee = $emp_id);";
                                $finalsql=mysql_query($sql) or $sqlerror=' অজ্ঞাত ত্রুটি, সিস্টেম অ্যাডমিনের সাথে যোগাযোগ করুন';
                                $finalget=mysql_fetch_assoc($finalsql);
                                $emp_name=$finalget['account_name'];
                                $emp_mail=$finalget['email'];
                            }     
                        $countSeats = countSeat($value);
                        $countXseats = countXtra($value);
                        if($countXseats ==0 && $countSeats==0){?>
             <table  class="formstyle" style="color: #3333CC; font-weight:600;">          
                        <tr><th colspan="4" style="text-align: center;">টিকেট সেলিং</th></tr>
                        <tr><td colspan="2" style="padding-left: 0;"></br>
                                <span style="color: red;font-size: 15px; text-decoration: blink;padding-left: 200px;"><?php echo "দুঃখিত, এই প্রোগ্রামের সকল টিকেট বিক্রি হয়ে গিয়েছে "; ?></span>
                            </td></tr>
                        <tr>
                            <td style="padding-left: 300px; "></br></br><a href="selling_ticket.php" ><b>পুনরায় টিকেট সিলেক্ট করুন</b></a></br></td>
                        </tr>
             </table>
            <?php } 
             elseif($sqlerror !="") { QueryFailedMsg($sqlerror);}
                else{ ?>
            <div style="padding-left: 110px;"><a href="selling_ticket.php"><b>ফিরে যান</b></a></div> 
            <div> 
                <form method="POST" onsubmit="" action="selling_ticket.php?opt=accept_price">	
                    <table  class="formstyle" style="color: #3333CC; font-weight:600;">          
                        <tr><th colspan="4" style="text-align: center;">টিকেট সেলিং</th></tr>                                
                        <tr>
                            <td style="width: 40%;text-align: center" colspan="2">টিকেট প্রাইসঃ <span style="color: black;"><?php echo $ticket_prize;?> TK/Ticket</span><input type='hidden' name='ticket' value=<?php echo $ticket_prize;?> /></br></br></td>
                        </tr>
                        <tr>
                            <td style="width: 40%;text-align: center" colspan="2">টিকেট মেইকিং চার্জঃ <span style="color: black;"><?php echo $making_prize;?> TK/Ticket</span><input type='hidden' name='Maketicket' value=<?php echo $making_prize;?> /></br></br></td>
                        </tr>
                        <tr>  
                            <td colspan="2" style="padding-left: 0;">
                                <div id="front" style="width: 768px; height: 384px; border: blue dashed 2px; margin: 0 auto;background-image: url(images/watermark.png);background-repeat: no-repeat;background-size:100% 100%; ">
                                    <div id="front_left" style="width: 192px; height: 384px;border-right:blue dotted 1px; float: left;">
                                         <div style="width: 180px; float: left;padding-left: 4px;text-align: center;"><span style="font-family: SolaimanLipi;color: #3333CC;font-size: 20px;"><span style="color: black;"><?php echo $p_name;?></span></span></div>
                                         <div id="entry" style="width: 180px;float:left;padding-top: 5px;text-align: center;"><span style="font-family: SolaimanLipi;color: #3333CC;font-size: 20px;">এন্ট্রি পাস</span></div>
                                          <div id="owner_info" style="width: 180px; float: left;padding-left: 4px;padding-top: 10px;">
                                            <span>স্বত্তাধিকারীর নামঃ </span></br>
                                            <span>স্বত্তাধিকারীর মোবাইল নাম্বারঃ </span></br>
                                            <span style="text-align: right;">আসন নাম্বারঃ ০০</span></br>
                                            <span>তারিখঃ <span style="color: black;"><?php echo $p_date;?></span></span></br><span>সময়ঃ <span style="color: black;"><?php echo $p_time;?></span></span>
                                            </div>
                                    </div>
                                    <div id="front_ri8" style="width: 574px; height: 384px; float: left;">
                                       <div id="logo" style="width: 80px;height: 80px;float: left;background-image: url(images/logo.png);background-repeat: no-repeat;background-size:100% 80px;"><image /></div>
                                        <div style="width: 450px;height: 80px;float: left;padding-left: 9px;">
                                            <div><span style="font-family: SolaimanLipi;color: #3333CC;font-size: 35px;">রিপড ইউনিভার্সাল</span><span style="font-family: SolaimanLipi;color: #3333CC;font-size: 20px;"> লিমিটেড</span></div>
                                            <div><span style="font-family: SolaimanLipi;color: #8A8B8C;font-size: 20px;">রিলীভ এন্ড ইমপ্রুভমেন্ট প্ল্যান অব ডেপ্রাইভড</span></div>
                                        </div>
                                       <div style="width: 570px; float: left;padding-left: 4px;text-align: center;"><span style="font-family: SolaimanLipi;color: #3333CC;font-size: 20px;"><span style="color: black;"><?php echo $p_name;?></span></span></div>
                                        <div id="front_info" style="width: 570px; float: left;padding-left: 4px;">
                                            <span><?php if ($type==1) echo "প্রেজেন্টারের নামঃ "; elseif ($type==2) echo "প্রোগ্রামারের নামঃ "; elseif($type==3 ) echo "ট্রেইনারের নামঃ "; else { echo "ট্রাভেলারের নামঃ ";}?> <span style="color: black;"><?php echo $emp_name;?></span></span></br>
                                            <span><?php if ($type==1) echo "প্রেজেন্টারের ই-মেইলঃ "; elseif ($type==2) echo "প্রোগ্রামারের ই-মেইলঃ "; elseif($type==3) echo "ট্রেইনারের ই-মেইলঃ "; else { echo "ট্রাভেলারের ই-মেইলঃ ";}?><span style="color: black;"><?php echo $emp_mail;?></span></span></br>
                                            <span>স্থানঃ <span style="color: black;"><?php echo $p_place;?></span></span></br>
                                            <span>তারিখঃ <span style="color: black;"><?php echo $p_date;?></span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>সময়ঃ <span style="color: black;"><?php echo $p_time;?></span></span>
                                        </div>
                                        <div id="entry" style="width: 574px;float:left;padding-top: 5px;text-align: center;"><span style="font-family: SolaimanLipi;color: #3333CC;font-size: 20px;">এন্ট্রি পাস</span></div>
                                        <div id="owner_info" style="width: 570px; float: left;padding-left: 4px;">
                                            <span>স্বত্তাধিকারীর নামঃ </span></br>
                                            <span>স্বত্তাধিকারীর মোবাইল নাম্বারঃ </span></br>
                                            <span style="text-align: right;">আসন নাম্বারঃ ০০</span></br>
                                            </div>
                                    </div>
                                </div>
                            </td>
                        </tr>        
                        <tr>  
                            <td colspan="2" style="padding-left: 0;">
                                <div id="back" style="width: 768px; height: 384px;  border: blue dashed 2px;background-color: #fff; margin: 0 auto;">
                                    <div id="back_ri8" style="width: 574px; height: 384px; float: left;border-right: blue dotted 1px;">
                                        <div id="back_head" style="text-align: center;padding-top: 10px;">
                                        <span style="font-family: SolaimanLipi;color: #3333CC;font-size: 20px;"> কার্যবিবরণী</span>
                                        </div>
                                        </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 40%; color: darkblue;">ক্রেতার নাম</td>
                            <td>:   <input class="box" type="text" id="owner_name" name="owner_name" />                           
                        </tr>
                        <tr>
                            <td style="width: 40%;color: darkblue;"> ক্রেতার মোবাইল নাম্বার </td>
                            <td>:   <input class="box" type="text" id="owner_mbl" name="owner_mbl" /><em> (ইংরেজিতে লিখুন)</em></td>                           
                        </tr>
                        <tr>
                            <td style="width: 40%;color: darkblue;">খালি আসন সংখ্যা<input type='hidden' name='progID' value=<?php echo $value;?> /></td>
                            <td>:  <span style="color: black;"><?php echo countSeat($value);?></span></td>                           
                        </tr>
                          <tr>
                            <td style="width: 40%;color: darkblue;"> আসন নাম্বার</td>
                            <td>: <div id="showSeat" style="overflow: scroll; height:auto; width: 300px;border:gray inset 1px;padding: 3px;background-color:#CDE3FA"><?php showSeats($value);?></div>
                            </td>                           
                        </tr>
                        <?php $avaiable= countSeat($value); 
                        if($avaiable < 10)
                        {?>
                        <tr>
                            <td style="width: 40%;color: darkblue;">অতিরিক্ত খালি আসন সংখ্যা</td>
                            <td>: <span style="color: black;"><?php echo countXtra($value);?></span></td>                           
                        </tr>
                        <tr>
                            <td style="width: 40%;color: darkblue;">অতিরিক্ত খালি আসন নাম্বার</td>
                            <td>: <div id="showSeat" style="overflow: scroll; height:auto; width: 300px;border:gray inset 1px;padding: 3px;background-color:#CDE3FA"><?php showXtraSeats($value);?></div></td>                           
                        </tr>
                        <?php }?>
                        <tr>                    
                            <td colspan="2" style="padding-left: 290px; " >
                              <?php  echo '</br><input class="btn" style =" font-size: 12px; " type="button" name="ok" value="মূল্য দেখুন" onclick="showTotal('.$ticket_prize.',\' '.$making_prize.'\')" />' ?> </td>
                        </tr>  
                        <tr>
                            <td colspan="2" id="prize">
                            </td>                           
                        </tr>
                        </table>
                </form>
            </div>
        </div>      
    </div>

    <?php
   }} else if ($_GET['opt']=='accept_price') {   
?>
<div class="column6">
        <div class="main_text_box">
            <?php  if ($bookedmsg != "") {?>
             <table  class="formstyle" style="color: #3333CC; font-weight:600;">          
                        <tr><th colspan="4" style="text-align: center;">টিকেট সেলিং</th></tr>
                        <tr><td colspan="2" style="padding-left: 0;"></br>
                                <div style="color: red;font-size: 15px; text-decoration: none;padding: 10px 50px 10px 55px;">
                                    <?php 
                                            echo "দুঃখিত, আপনার সিলেক্টকৃত ";
                                           
                                            if(count($arr_matchSeat)!=0)
                                            {
                                            $str_matchSeat = implode(",", $arr_matchSeat);
                                            echo $str_matchSeat;
                                            }
                                            if (count($arr_matchXtra)!=0)
                                            {
                                                echo " এবং এক্সট্রা- ";
                                                $str_matchXtra = implode(",", $arr_matchXtra);
                                            echo $str_matchXtra;
                                            }
                                            echo " নং টিকেট ইতিমধ্যে ক্রয় করা হয়ে গিয়েছে।" ;
                                    ?>
                                </div>
                                </br>
                                <span style="color: red;font-size: 15px; text-decoration: none;padding-left: 250px;">
                                    <?php echo "দয়া করে আবার টিকেট সিলেক্ট করুন।"?>
                                </span>
                            </td></tr>
                        <tr>
                            <td style="padding-left: 300px; "></br></br><a href="selling_ticket.php?opt=submit_ticket&programID=<?php echo $value?>" ><b>পুনরায় টিকেট সিলেক্ট করুন</b></a></br></td>
                        </tr>
             </table>
            <?php } 
            elseif($sqlerror !="") { QueryFailedMsg($sqlerror);}
            else{ ?>
            <div id="noprint"style="padding-left: 110px;"><a href="selling_ticket.php"><b>ফিরে যান</b></a></div> 
            <div>
                <form method="POST" onsubmit="" action="selling_ticket.php?opt=submit_account">	
                    <table  class="formstyle" style="color: #3333CC; font-weight:600;">          
                        <tr><th colspan="4" style="text-align: center;">টিকেট সেলিং</th></tr>
                        <tr>  
                            <td colspan="2" style="padding-left: 0;">
                                <?php showTicket($TicketID);?>
                                </tr>
                                  <tr>                    
                            <td colspan="2" style="text-align: center" ></td>
                        </tr>    
                        <tr id="noprint">  
                            <td colspan="2" style="text-align: center" ><a class="btn" style="text-decoration: none" href="javascript: window.print()">পেইডআপ এন্ড প্রিন্ট</a>
                                <input class="btn" style =" font-size: 12px; width: auto" type="button" name="payment_by_account" value="পেমেন্ট বাই একাউন্ট" onclick="getAccount()" /></td>                           
                        </tr>
                        <tr id="noprint">
                            <td colspan="2" id="acount"></td>                           
                        </tr>
                    </table>
                </form>
            </div>
        </div>      
    </div>
<?php }}
elseif ($_GET['opt']=='submit_account') {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <?php if($sqlerror !="") { QueryFailedMsg($sqlerror);} else{ ?>
            <div style="padding-left: 110px;"><a href="selling_ticket.php"><b>ফিরে যান</b></a></div> 
            <div> 
                <form method="POST" onsubmit="" action="">	
                    <table  class="formstyle" style="color: #3333CC; font-weight:600;">          
                        <tr><th colspan="4" style="text-align: center;">টিকেট সেলিং</th></tr>
                        <tr>  
                            <td colspan="2" style="padding-left: 0;">
                                <?php echo "অ্যাকাউন্টধারীর অ্যাকাউন্ট-এর ভিসিবল এখানে থাকবে";?>
                                </br></br></br></td>
                                </tr> 
                                <tr>
                            <td style="width: 40%">ব্যালেন্স এমাউন্ট</td>
                            <td>: <span style="color: black;"> Taka </span> </td>                           
                        </tr>
                        <tr>
                            <td style="width: 40%">ইন এমাউন্ট</td>
                            <td>:  <input class="box" type="text" id="in_amount" name="in_amount" />Taka </span> </td>                           
                        </tr>
                        <tr>                    
                            <td colspan="2" style="text-align: center" ></td>
                        </tr>    
                        <tr>                    
                            <td colspan="2" style="text-align: center" ><a class="btn" style="text-decoration: none;padding: 5px;" href="javascript: window.print()"> প্রিন্ট</a></td>                           
                        </tr>
                        <tr>
                            <td colspan="2" id="acount">
                            </td>                           
                        </tr>
                    </table>
                </form>
                
            </div>
        </div>      
    </div>
<?php
            }} else {
    ?>
    <div class="column6">
        <div class="main_text_box">
            <div style="padding-left: 110px;"><a href="index.php?apps=CA"><b>ফিরে যান</b></a></div> 
            <div>
                <form method="POST" onsubmit="" action="selling_ticket.php?opt=submit_ticket">	
                    <table  class="formstyle">          
                        <tr><th colspan="4" style="text-align: center;">টিকেট সেলিং</th></tr>
                        <tr>  
                        </tr>
                        <tr>
                            <td style="width: 40%">বিষয়</td>
                            <td>: 
                                <select class="selectOption" name="type" id="type" onchange="getname(this.value)" style="width: 170px !important;">
                                    <option value=" ">----টাইপ সিলেক্ট করুন-----</option>
                                    <option value="1">প্রেজেন্টেশন</option>
                                    <option value="2">প্রোগ্রাম</option>
                                    <option value="3">ট্রেইনিং</option>
                                    <option value="4">ট্রাভেল</option>
                                </select>  
                            </td>      
                        </tr>         
                        <tr>
                        <td colspan="2" style="padding-left: 0px !important; ">  <span id="p_name"></span> </td>                      
                        </tr>
                    </table>
                </form>
            </div>
        </div>      
    </div>
    <?php
}
include 'includes/footer.php';
?>