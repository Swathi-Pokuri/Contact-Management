<?php
include 'dbinfo.php'; 
?>  
<?php
session_start(); 

if(isset($_POST['username']) and isset($_POST['cgname']))  {
	$fname = $_POST['fname']; 
	$username = $_POST['username']; 
	$tablename=$username.$username;
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");
 $sql_query = "select * from $tablename where fname='$fname'";  
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));
while($row = $result->fetch_assoc()) {
        echo "<tr><td> ". $row["fname"]. "</td><td>". $row["pnumber"]. "</td><td>" . $row["mnumber"] .
		"</td><td>". $row["email"] ."</td><td>Address: ". $row["address"]."</td><td> ".
		$row["dob"]."</td><td> ". $row["job"]."</td><td>". $row["nickname"]. 
		"</td><td>". $row["others"]."</td>";
		echo "</tr>";
    }
	echo "</table></font></b>";
	echo "</table></font></b>";
} else {
    echo "0 results";

if($result == false) 
	{
		echo "<script type='text/javascript'>alert('Cannot search');
		window.location='search.php';
		</script>"; 
//		exit();
	} 
	else
	{
	 echo "<script type='text/javascript'>alert('Contact deleted');
	window.location='search.php';
	</script>";             
}}
?>
