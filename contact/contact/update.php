<?php
include 'dbinfo.php'; 
?>  

<?php
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");
if(isset($_POST['username1']) and isset($_POST['fname'])){
		$username1=$_POST['username1'];
        $fname=$_POST['fname'];
        $pnumber= $_POST['pnumber'];
		$mnumber= $_POST['mnumber'];
		$email = $_POST['email'];
		 $address = $_POST['address'];
        $dob = $_POST['dob'];
		$job=$_POST['job'];
		$others = $_POST['others'];
		
        $insertStatement = "UPDATE $username1 SET fname = '$fname',pnumber='$pnumber',
		mnumber='$mnumber',email = '$email', address='$address',dob = '$dob',job='$job',others='$others' where $pnumber=11";
	
        $result = mysqli_query ($link, $insertStatement)  or die(mysqli_error($link)); 
	if($result == false) {
		echo 'The query failed.';
		echo "<script type='text/javascript'>alert('Cannot update');
		window.location='modifycontact.php'";
		exit();
	} else {
             echo "<script type='text/javascript'>alert('Update Successfull');
window.location='modifycontact.php';
</script>"; 
            
	}
}
?>