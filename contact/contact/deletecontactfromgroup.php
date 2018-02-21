<html>
<head>
<title>Delete  Group</title>
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
input[type=submit]:hover {
    background-color: #45a049;
}
</head>
</style>
<body>
<div class="log-form">
  <h2 align="center"><big>Delete your group</big></h2>
  <form align="center" method="post" action="delete1.php">
    <input type="text" title="username" name="username" placeholder="username" />
    <br>
    <br>
    <input type="text" title="username" name="cgname" placeholder="contact group name" />
    <br>
    <br>
	<input type="text" title="username" name="cnname" placeholder="contact  name" />
    <br>
    <br>
    <input type="submit" value="Delete">
    <br>
    <br>
   
  </form>
</div><!--end log form -->
</form>
</body>
</html>