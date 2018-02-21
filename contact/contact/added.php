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
		$cgname = $_POST['cgname'];
	$tablename=$username. $username;
	$insertStatement="create table $tablename(contactname varchar(50),cgname varchar(50))";

	$result = mysqli_query ($link, $insertStatement)  or die(mysqli_error($link)); 
	$stmt2="INSERT INTO $tablename(contactname,cgname) VALUES ('$contactname','$cgname')";
	$result2 = mysqli_query ($link, $stmt2)  or die(mysqli_error($link)); 
	if($result == false) 
	{
		echo "<script type='text/javascript'>alert('Cannot add contact1');
		window.location='createcontactgroup.php';
		</script>"; 
//		exit();
	} 
	else
	{
	 echo "<script type='text/javascript'>alert('Contact added1');
	window.location='createcontactgroup.php';
	</script>";             
	}
	if($result2 == false) 
	{
		echo "<script type='text/javascript'>alert('Cannot add contact2');
		window.location='create.php';
		</script>"; 
//		exit();
	} 
	else
	{
	 echo "<script type='text/javascript'>alert('Contact added2');
	window.location='create.php';
	</script>";             
	}
} 
	?>