<?php
session_start();

?>
<?php
include("db_conection.php");
if(isset($_POST['register']))
{
$user_email = $_POST['ruser_email'];
$user_password = $_POST['ruser_password'];
$user_firstname = $_POST['ruser_firstname'];
$user_lastname = $_POST['ruser_lastname'];
$user_nid = $_POST['ruser_nid'];	
$user_address = $_POST['ruser_address'];
$user_province = $_POST['ruser_province'];
$user_district = $_POST['ruser_district'];
$user_sector = $_POST['ruser_sector'];
	$user_cell = $_POST['ruser_cell'];
	$user_streetno = $_POST['ruser_streetno'];
	$user_telephone=$_POST['ruser_tel'];
	



$check_user="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Customer is already exist, Please try another one!')</script>";
 echo"<script>window.open('index.php','_self')</script>";
exit();
    }
 
$saveaccount="insert into users (user_email,user_telephone,user_password,user_firstname,user_lastname,user_nid ,user_address,province,district,sector,cell,streetNo) VALUE ('$user_email','$user_telephone','$user_password','$user_firstname','$user_lastname',$user_nid,'$user_address','$user_province','$user_district','$user_sector','$user_cell','$user_streetno')";
mysqli_query($dbcon,$saveaccount);
echo "<script>alert('Data successfully saved, You may now login!')</script>";				
echo "<script>window.open('index.php','_self')</script>";


				
	
			
		
	
		

}

?>
