<?php
include './dbinfo.php';
?>
<?php
session_start(); 

if(isset($_POST['username']) and isset($_POST['mname']))  { //check null
	$username = $_POST['username']; 
	$name = $_POST['mname']; 
    $_SESSION['username']=$username;
 

$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");


    $sql_query = "select * from $username where fname = '$name' ";  
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));  
    
			if($result == false)
				{
				echo 'The query failed.';
				exit();
			}
			if(mysqli_num_rows($result) == 1){ 
                        if($rowval = $result->fetch_assoc()){
                            $fname=$rowval['fname'];
                            $pnumber= $rowval['pnumber'];
                            $mnumber= $rowval['mnumber'];
                            $email= $rowval['email'];
                            $address= $rowval['address'];
                            $dob= $rowval['dob'];
                            $job= $rowval['job'];
                            $nickname= $rowval['nickname'];
							$others= $rowval['others'];
							$pic= $rowval['pic'];
                        }
                            
                            
                            
			}
                        else{ 
			//$err = 'Incorrect contact' ;
                         echo "<script type='text/javascript'>alert('Invalid contact');
                                window.location='modifycontact.php';
                                </script>"; 
         		} 
        }
?>	
<html>
<body bgcolor="orange">
<center><h2>Profile Update</h2>
<form action="update.php" method="post" id="update" value="Update">
    <table>
	<tr>	<td> Enter Username with which you have logged in </td><td><input type="text"  name="username1" />	</td>	</tr>
    <tr>	<td> Fname </td><td><input type="text"  name="fname" value="<?php  echo $fname;?>"/>	</td>	</tr>
    <tr>	<td>Phone Number</td><td><input type="text"  name="pnumber" value="<?php echo  $pnumber; ?> "/>	</td>	</tr>
	<tr>	<td>Mobile Number</td><td><input type="text"  name="mnumber" value="<?php echo  $mnumber; ?> "/>	</td>	</tr>
	<tr>	<td>Email</td><td><input type="email"  name="email" value="<?php echo  $email; ?> "/>	</td>	 </tr>
	<tr>	<td>Address</td><td><input type="text"  name="address" value="<?php echo  $address; ?> "/></td>	</tr>
    <tr>	<td>DOB</td><td><input type="dob" name="dob" value='<?php echo  $dob; ?>'/></td>	</tr>
	<tr>	<td>Job</td><td><input type="text"  name="job" value="<?php echo  $job; ?> "/></td>	</tr>
	<tr>	<td>Others</td><td><input type="text"  name="others" value="<?php echo  $others; ?> "/></td>	</tr>
   <!-- <tr>	<td>Image</td><td><input type="file"  name="pic" value="<?php echo  $pic; ?> "/></td>	</tr>-->
	
	</table>

        <input name="Update" type="Submit" id="update" value="Update">
   
</form>      
        
    </center>
</body>
</html>