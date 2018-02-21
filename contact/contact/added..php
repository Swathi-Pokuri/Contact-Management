<?php
include 'dbinfo.php'; 
?>  

<?php
session_start(); 
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");

if(isset($_POST['contactname']))  {
	$contactname=$_POST['contactname'];
	$username=$_POST['username'];
	$tablename=$contactname.'_group';
	$insertStatement="create $tablename(contactname varchar(50))";
	
	$result = mysqli_query ($link, $insertStatement)  or die(mysqli_error($link)); 
	
	if($result == false) 
	{
		echo "<script type='text/javascript'>alert('Cannot add contact');
		window.location='create.php';
		</script>"; 
//		exit();
	} 
	else
	{
	 echo "<script type='text/javascript'>alert('Contact added');
	window.location='create.php';
	</script>";             
	}
} 
	
	?>