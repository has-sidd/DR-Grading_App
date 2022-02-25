<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php
		require 'con.php';
		require 'sendemail.php';
		require 'vendor/autoload.php';
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$signin = 0;
		$role= $_REQUEST['role'];
		$pass = $_REQUEST['pass'];
		$subject ="Approval Notification";
		$to="dr.research2021@gmail.com";
		
		$message ="Hello, A-Eye Diagnostics administrator"." ".$name ." "."with"." ".$email." "."want to 
		login in DR grading System  as "."$role"."please approve the request if you know the person.Otherwise reject request ". " "."<html>
	
		<body>
		<a href='https://localhost/colorlib-regform-7/user_email_approve.php?email=".$email."&name=".$name."'>
		<button style =  'border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer; background-color: #4CAF50'  class='button button1' >Approve</button>

		</a>

		<a href='https://localhost/colorlib-regform-7/user_email_reject.php?email=".$email."&name=".$name."'>
		<button style = 'border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer; background-color: #008CBA' class='button button2'>Reject </button>
		</a>
		</body>
		</html>";
		
		$sql="select * from signIn where (name='$name' or email='$email');";

		$res=mysqli_query($conn,$sql);
		
		
		if (mysqli_num_rows($res) > 0) {
		  
		  $row = mysqli_fetch_assoc($res);
		  if($email==($row['email']))
		  {
			 echo "<script>
			 alert('Email Already Exist. Please Sign in to DR Grading System.');
			 window.location.href = 'signin.php';
			 </script>";
		  }
		  if($name==($row['name']))
		  {
			  echo "<script>
			  alert('User Name Already Exist. Please Sign in to DR Grading System.');
			  window.location.href = 'signin.php' 
			  </script>";
		  }
		  }
  else{

	
	$sql = "INSERT INTO signIn (`name`, `email`, `Password`, `signIn_check`, `role`) VALUES ('$name',
	'$email','$pass','0','$role');";
	$res=mysqli_query($conn,$sql);
	echo "<script>
	alert ('Your Information is shared with administrator. We will notify via email, if A-Eye Diagnostics allow you to login'); 
	window.location.href = 'thanks-3.html'
	</script>";
	send_email_attachment($to,$subject,$message,$fromEmail=DEFAULT_EMAIL,$fromName=DEFAULT_EMAIL_NAME);

  }	
 
		// Performing insert query execution
		// here our table name is college
		//$sql = "INSERT INTO signIn VALUES ('$name',
		//	'$email','$pass','$signin')";
		

		// if(mysqli_query($conn, $sql)){
		// 	echo "<h3>data stored in a database successfully."
		// 		. " Please browse your localhost php my admin"
		// 		. " to view the updated data</h3>";

		// 	echo nl2br("\n$name\n $email\n "
		// 		. "$pass\n");
		// } else{
		// 	echo "ERROR: Hush! Sorry $sql. "
		// 		. mysqli_error($conn);
		// }
		
		
		// Close connection
		mysqli_close($conn);
		?>
    </center>
</body>

</html>