<html>
<head>
<title>SIGNUP FORM</title>
<link rel="stylesheet" href="signupstyle.css">
<script type="text/javascript">
function checkForm(form)
  {
    if(form.fname.value == "" || form.lname.value == "" || form.aadhar.value == "" || form.email.value == "" || form.password.value == "") {
      alert("Error: No field cannot be blank!");
      return false;
    }
	
	re = /[a-zA-Z]/;
    if(!re.test(form.fname.value)) {
      alert("Error: Firstname must contain only letters, numbers and underscores!");
      form.fname.focus();
      return false;
    }
	re = /[a-zA-Z]/;
    if(!re.test(form.lname.value)) {
      alert("Error: Lastname must contain only letters, numbers and underscores!");
      form.lname.focus();
      return false;
    }
	re=/[0-9]{12}$/
	if(!re.test(form.aadhar.value)) {
      alert("Error: Aadhar had to be 12 numbers!");
      form.aadhar.focus();
      return false;
    }
	re=/(?=^.{6,8}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&amp;*()_+}{&quot;:;'?/&gt;.&lt;,])(?!.*\s).*$/
	if(!re.test(form.password.value)) {
      alert("Error: Password should have at least one uppercase letter, one lowercase letter, one number and one special character:!");
      form.password.focus();
      return false;
    }
  }
</script
</head>
<body>
<div class="log-form">
  <h2 align="center"><big>Login to your account</big></h2>
  <form align="center" action="storedetails.php" method="post" onSubmit="return checkForm(this);">
    <input type="text" title="firstname" id="fname" name="fname" placeholder="FirstName" />
    <br>
    <br>
    <input type="text" title="lastname" name="lname" placeholder="Lastname" />
    <br>
    <br>
    <input type="email" title="email" name="email" pattern=".+@inmar.com" placeholder="Email Address(@inmar.com)"  />
    <br>
    <br>
    <input type="text" title="aadhar" name="aadhar" placeholder="Aadhar" />
    <br>
    <br>
    <input type="password" title="password" name="password" placeholder="Password" />
    <br>
    <br>
    <input type="submit" value="Signup">
  </form>
</div><!--end log form -->
</body>