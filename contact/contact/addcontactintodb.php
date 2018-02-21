<?php
include 'dbinfo.php'; 
?>  

<?php
session_start(); 
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");

if(isset($_POST['fname']) and isset($_POST['pnumber']) and isset($_POST['username']))  {
	$tablename=$_POST['username'];
	$fname = $_POST['fname'];
	$pnumber = $_POST['pnumber'];
    $mnumber = $_POST['mnumber'];
	$email = $_POST['email'];
	$address=$_POST['address'];
	$dob = $_POST['dob'];
	$job = $_POST['job'];
	$nickname = $_POST['nickname'];
	$others = $_POST['others'];
	$pic = $_POST['pic'];
	$insertStatement = "INSERT INTO $tablename(fname,pnumber,mnumber,email,address,dob,job,nickname,others,pic) VALUES 
	('$fname', '$pnumber', '$mnumber', '$email','$address', '$dob', '$job', '$nickname','$others', '$pic')";
	$result = mysqli_query ($link, $insertStatement)  or die(mysqli_error($link)); 
	
	if($result == false) 
	{
		echo "<script type='text/javascript'>alert('Cannot add contact');
		window.location='addcontact.php';
		</script>"; 
//		exit();
	} 
	else
	{
	 echo "<script type='text/javascript'>alert('Contact added');
	window.location='addcontact.php';
	</script>";             
	}
} 
?>
