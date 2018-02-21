<html>
<head>
<title>Add Contact</title>
<link rel="stylesheet" href="signupstyle.css">
</head>
<script type="text/javascript">
function checkForm(form)
  {
    if(form.Ename.value == "" || form.pnumber.value == "") {
      alert("Error: Name and Phone number cannot be blank!");
      return false;
    }
	
	re = /[a-zA-Z]/;
    if(!re.test(form.Ename.value)) {
      alert("Error: Name must contain only letters, numbers and underscores!");
      form.Ename.focus();
      return false;
    }
	re=/[0-9]{11}$/
	if(!re.test(form.pnumber.value)) {
      alert("Error: Phone number had to be 11 numbers!");
      form.pnumber.focus();
      return false;
    }
	re=/[0-9]{10}$/
	if(!re.test(form.mnumber.value)) {
      alert("Error: Mobile Number had to be 10 numbers!");
      form.mnumber.focus();
      return false;
    }
	re = /^\w+$/;
    if(!re.test(form.nickname.value)) {
      alert("Error: Ncikname must contain only letters, numbers and underscores!");
      form.nickname.focus();
      return false;
    }
    }
  }

</script>
<body>
<div class="log-form">
  <h2 align="center"><big>Add The Contact</big></h2>
  <form align="center" action="addcontactintodb.php" method="post" onSubmit="checkForm(this)">
	<input type="text" name="username" title="Name" placeholder="Username Of You Used For Login"  />
    <br>
    <br>
    <input type="text" name="fname" title="Name" placeholder="Name" />
    <br>
    <br>
    <input type="text" title="Phone Number" name="pnumber" placeholder="Phone Number" />
    <br>
    <br>
    <input type="text" title="Mobile Number" name="mnumber" placeholder="Mobile Number" />
    <br>
    <br>
    <input type="email" title="Email" name="email" placeholder="Email Address" />
    <br>
    <br>
    <input type="text" title="Address" name="address" placeholder="Address"/>
    <br>
    <br>
    <input type="date" title="Birthday" name="dob" placeholder="Birthday"/>
    <br>
    <br>
    <input type="text" title="Job" name="job" placeholder="Job"/>
    <br>
    <br>
    <input type="text" title="Nickname" name="nickname" placeholder="Nickname"/>
    <br>
    <br>
    <input type="text" title="Other Accounts" name="others" placeholder="Other Accounts"/>
    <br>
    <br>
    <input type="file" name="pic" accept="image/* placeholder="Choose some photo">
    <br>
    <br>
    <input type="submit" value="Add">
  </form>
</div><!--end log form -->
</body>