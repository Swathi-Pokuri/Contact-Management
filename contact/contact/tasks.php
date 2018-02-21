<!DOCTYPE html>
<html>
<head>
<title>Tasks to do after login</title>
<style>
body
{
	color:black;
	background: url("bg5.jpg") no-repeat;
	background-size:1500px 850px;
}	
.navbar
 {
    margin-left: 450px;
    margin-right: 500px;
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}
.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.dropdown 
{
    float: left;
    overflow: hidden;
}
.dropdown .dropbtn 
{
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn 
{
    background-color: red;
}
.dropdown-content 
{
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a 
{
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropdown-content a:hover
{
    background-color: #ddd;
}
.dropdown:hover .dropdown-content
{
    display: block;
}
</style>
</head>
<body>
<big><h1 align="center">Manage Contacts...</h1></big>
<div class="navbar">
 <div class="dropdown">
    <button class="dropbtn">Contacts 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="addcontact.php" target="_blank">Add Contact</a>
      <a href="deletecontact.php" target="_blank">Delete Contact</a>
      <a href="modifycontact.php" target="_blank">Modify Contact</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Contacts Group
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="createcontactgroup.php" target="_blank">Create Contact Group</a>
      <a href="deletecontactfromgroup.php" target="_blank">Delete Contact</a>
      <a href="deletecontactgroup.php" target="_blank">Delete Contact Group</a>
      <a href="active_inactive.php" target="_blank">Active/Inactive</a>
    </div>
  </div> 
  <a href="search.php" target="_blank">Search</a>
  <a href="sort.php" target="_blank">Sort</a>
</div>
<h1 align="center"> Here lies a table showing the contact list of employees in Inmar</h1>
<?php
include 'dbinfo.php'; 
?>  
<?php
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");
 $sql_query = "select fname,lname,email,aadhar from employee";  
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));
if ($result->num_rows > 0) {
	echo "<font size='5'><b>";
	echo "<table align='center' border='1'cellspacing='0' cellpadding='10'>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>FirstName: ". $row["fname"]. "</td><td>LastName: ". $row["lname"]. "</td><td>Email" . $row["email"] .
		"</td><td>Aadhar". $row["aadhar"] . "</td>";
		echo "</tr>";
    }
	echo "</table></font></b>";
	echo "</table></font></b>";
} else {
    echo "0 results";
}
?> 
</body>
</html>
