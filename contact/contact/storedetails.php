<?php
include 'dbinfo.php'; 
?>  

<?php
session_start(); 
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");

if(isset($_POST['fname']) and isset($_POST['lname']) and isset($_POST['email']) and isset($_POST['aadhar']) and isset($_POST['password']))  {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$aadhar = $_POST['aadhar'];
	$password = $_POST['password'];
	$fullname=$_POST['fname'];
	
	$insertStatement = "INSERT INTO  employee(fname,lname,email,password,aadhar) VALUES ('$fname', '$lname', '$email','$password','$aadhar')";
	$result = mysqli_query ($link, $insertStatement)  or die(mysqli_error($link)); 
	if($result == false)
		{
		echo "<script type='text/javascript'>alert('Already Registered with this email...');
		</script>"; 
		//exit();
		} 
		else
		{
		echo "<script type='text/javascript'>alert('Registered Successfull');
		
		</script>";
		}
		
		$query="CREATE TABLE $fullname(fname varchar(50),pnumber varchar(50) UNIQUE,mnumber varchar(50) UNIQUE,email varchar(50),address varchar(120),dob date ,job varchar(30),nickname varchar(30),others varchar(30),pic longblob)";
		$result1=mysqli_query($link , $query) or die(mysqli_error($link));
		if($result1 == false)
		{
		echo "<script type='text/javascript'>alert('Cannot create table with  this email...');
		window.location='signup.php';
		</script>"; 
		}
		else
		{
		echo "<script type='text/javascript'>alert('Table created');
		window.location='signup.php';
		</script>"; 
		}
}
?>