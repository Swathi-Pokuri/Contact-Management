<?php
include 'dbinfo.php'; 
?>  
<?php
session_start(); 

if(isset($_POST['username']) and isset($_POST['cgname']))  {
	$username = $_POST['username']; 
	$cgname = $_POST['cgname']; 
    
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");
 $sql_query = "select * from $username";  
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));
if ($result->num_rows > 0) {
	echo "<h1 align='center'>The contacts in your list are</h1>";
	echo "<font size='5'><b>";
	echo "<table align='center' border='1'cellspacing='0' cellpadding='10'>";
	echo "<th>FirstName</th>";
	echo "<th>Phone Number </th>";
	echo "<th>Mobile Number</th>";
	echo "<th>Others</th>";
	echo "<th>Email</th>";
	echo "<th>Job</th>";
	echo "<th>Nickname</th>";
	echo "<th>Birthday</th>";
	echo "<th>Others</th>";
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
	 
}
}
?>
<html>
<head>
<style>
body
{
  background: url("bg4.jpg") no-repeat; 
  background-size: 1500px 680px;
}
.log-form
{
  margin-top:200px;
  margin-right: 150px;
  margin-left:150px;
  border:2px black;
}
input[type=text]{
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit]{
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

</head>
</style>
<body>
<br><br><br><br>
<form align="center" method="post" action="added.php">
	<input type="text" name="username" size="30"  placeholder="User Logged name"  />
    <br>
    <br>
	 <input type="text"  name="cgname" placeholder="contact group name" />
    <br>
    <br>
	<input type="text" name="contactname" size="30"  placeholder="Contact name"  />
    <br>
    <br>
	<input type="submit" placeholder="Add" >
</form>
</body>
</html> 