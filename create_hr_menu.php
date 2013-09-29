<?php
error_reporting(0);
include_once 'includes/';
?>
<style type="text/css">
    @import "css/domtab.css";
</style>
<?php
include_once 'includes/columnLeft.php';
?>
<div class="columnSld">
    <form method="POST" onsubmit="">	
        <table class="formstyle">  
            <tr><th style="text-align: center" colspan="2"><h1>একাউন্ট তৈরির ফর্মসমূহ</h1></th></tr>
            <tr>
                <td><a href="main_account.php?id=employee">ক্রিয়েট কর্মচারী একাউন্ট</a></td>
                <td><a href="#">আপডেট কর্মচারী একাউন্ট</a></td>
            </tr>
            <tr><th style="text-align: center" colspan="2"><h1>পোস্টিং </h1></th></tr>
            <tr>
                <td><a href="grade_position.php?iffimore=1m10a01i11n">গ্রেড পজিশন</a></td>
                <td><a href="settle_office.php?iffimore=1m10a01i11n">সেটেল অফিস</a></td>
            </tr>       
            <tr><th style="text-align: center" colspan="2"><h1>ছুটি</h1></th></tr>
            <tr>
                <td><a href="leave_policy.php?action=new">ছুটির পলিসি</a></td>
                <td><a href="employee_leave_policy.php">কর্মচারীর ছুটি</a></td>
            </tr>  
            <tr><th style="text-align: center" colspan="2"><h1>সেলারী সংক্রান্ত কার্যক্রম</h1></th></tr>               
            <tr>
                <td><a href="salary_making.php?iffimore=1m10a01i11n">সেলারী মেইকিং</a></td>
                <td><a href="#">সেলারী স্টেটমেন্ট</a></td>
            </tr>
            <tr>
                <td><a href="make_salary_range.php">কর্মচারী গ্রেড এবং সেলারী রেঞ্জ</a></td> 
                <td><a href="create_post.php">ক্রিয়েট পোস্ট</a></td>               
            </tr>
            <tr>
                <td><a href="terminate_employment.php">চাকুরী স্থগিতকরণ</a></td> 
                <td><a href="loan_given.php">লোন প্রদান</a></td>               
            </tr>
            <tr>
                <td><a href="charge_making.php">চার্জ তৈরী</a></td>
                <td><a href="reserve_employee.php">রিজার্ভ কর্মচারী</a></td>              
            </tr>     
            <tr>
                <td><a href="#">লোন মেইকিং</a></td>
            </tr>
            <tr><th style="text-align: center" colspan="2"><h1>কর্মচারী এটেন্ডেন্স</h1></th></tr>
            <tr>
                <td><a href="regular_emp_attendance.php">নিয়মিত কর্মচারী হাজিরা শিট</a></td>  
                <td><a href="offday_emp_attendance.php">অফ ডে কর্মচারী হাজিরা শিট</a></td>            
            </tr>
        </table>
    </form>
</div>