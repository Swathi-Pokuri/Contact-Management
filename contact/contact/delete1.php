<?php
include 'dbinfo.php'; 
?>  
<?php
session_start(); 

if(isset($_POST['username']) and isset($_POST['cgname']))  {
	$username = $_POST['username']; 
	$cgname = $_POST['cgname']; 
	$cname = $_POST['cname']; 
    $tablename=$username.$username;
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");
 $sql_query = "delete from $tablename where contactname='$cname'";  
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));


if($result == false) 
	{
		echo "<script type='text/javascript'>alert('Cannot delete contact');
		window.location='deletecontactgroup.php';
		</script>"; 
//		exit();
	} 
	else
	{
	 echo "<script type='text/javascript'>alert('Contact deleted');
	window.location='deletecontactgroup.php';
	</script>";             
}}
?>
