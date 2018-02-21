<!DOCTYPE html>
<html>
<head>
<title>LOGIN FORM</title>
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
input[type=password]{
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 30%;
    background-color: #FCAA50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>
</head>
<body>
<div class="log-form">
  <h2 align="center"><big>Login to your account</big></h2>
  <form align="center" method="post" action="loging.php">
    <input type="text" title="username" name="username" placeholder="username" />
    <br>
    <br>
    <input type="password" title="username" name="password" placeholder="password" />
    <br>
    <br>
    <input type="submit" value="Login">
    <br>
    <br>
    <a class="forgot" href="#">Forgot Username?</a>
  </form>
</div><!--end log form -->
</body>