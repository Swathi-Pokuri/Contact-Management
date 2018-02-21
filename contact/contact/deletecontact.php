<html>
<head>
<title>Deleting the contact</title>
<style>
body
{
	background: url("bg5.jpg") no-repeat;
	background-size: 1400px 700px;
}	
input[type=text]{
	margin
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit]{
	margin
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
</style>
</head>
<body>
<br>
<br>
<br>
<br>
<h1 align="center">You can delete the contact...</h1>
<form align="center" action="deletecontactdb.php" method="post">
	<input type="text" name="username" title="Name" placeholder="Username Of You Used For Login"  />
    <br>
    <br>
	<input type="text" name="dname" placeholder="Enter name">
	<br>
	<br>
	<input type="submit" placeholder="Delete">
</form>
</body>

