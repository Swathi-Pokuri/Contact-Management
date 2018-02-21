<?php
include 'dbinfo.php'; 
?>  

<?php
session_start(); 
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");

if(isset($_POST['dname']))  {
	$tablename=$_POST['username'];
	$name=$_POST['dname'];
	
	$insertStatement = "DELETE FROM $tablename where fname='$name'";
	$result = mysqli_query ($link, $insertStatement)  or die(mysqli_error($link)); 
	
	if($result == false) 
	{
		echo "<script type='text/javascript'>alert('Cannot delete contact');
		window.location='deletecontact.php';
		</script>"; 
//		exit();
	} 
	else
	{
	 echo "<script type='text/javascript'>alert('Contact deleted');
	window.location='deletecontact.php';
	</script>";             
	}
} 
?>