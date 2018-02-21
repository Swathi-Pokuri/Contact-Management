<?php
include './dbinfo.php';
?>
<?php
if(isset($_POST['username']) and isset($_POST['password']))  { //check null
	$fname = $_POST['username'];
	$password = $_POST['password']; 
	$_SESSION['username']=$fname;
	
	$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
	mysqli_select_db($link, $database) or die( "Unable to select database");
    $sql_query = "select * from employee where fname = '$fname'  AND password = '$password' ";  
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));  
    
			if($result == false)
				{
				echo 'The query failed.';
				exit();
			}
			//this is where the actual verification happens 
			if(mysqli_num_rows($result) == 1){ 
				header('Location: tasks.php');
                                echo "hello";
			}
                        else{ 
			//$err = 'Incorrect username or password' ;
                         echo "<script type='text/javascript'>alert('Invalid Username or Password');
                                window.location='logging.php';
                                </script>"; 
         		} 
        }
?>	
