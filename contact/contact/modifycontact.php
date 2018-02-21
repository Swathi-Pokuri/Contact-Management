<html>
<head>
<title>Modify the contact</title>
<style>
body
{
	background: url("bg7.jpg") no-repeat;
	background-size: 1400px 700px;
}	
input, input[placeholder]{
font-weight:bold;
    text-align:center;
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
<h1 align="center"><font color="white">You can modify the contact...</font></h1>
<form align="center" method="post" action="modifycontactdb.php">
	<input type="text" name="username" size="30" title="Name" placeholder="Username Of You Used For Login"  />
    <br>
    <br>
	<input type="text" name="mname" placeholder="Enter name">
	<br>
	<br>
	<input type="submit" placeholder="Modify">
</form>
</body>