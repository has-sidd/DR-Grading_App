<!DOCTYPE html>
<html>
<div class="jumbotron text-center">
    <h1 class="display-3">Thank You!</h1>
    <p class="lead"><strong> Refusal request is sent to user.</strong></p>
    <hr>
  </div>
<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
		require 'connection.php';
		require 'sendemail.php';
		require 'vendor/autoload.php';
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		
		// Taking all 5 values from the form data(input)
		$name = $_GET['name'];
		$email = $_GET['email'];

		$sql = "UPDATE `signIn` SET `signIn_check` = '0' WHERE `email` ='$email';";

		if(mysqli_query($conn, $sql)){
			// echo "<h3>Flag is zero."
			// . " We will notify via email"
			// . " if A-Eye Diagnostics allow you to login</h3>";

			// echo nl2br("\n$name\n $email\n "
			// 	. "$pass\n");
			$to=$email;
			$subject ="Request Refused for DR Grading System";
			$message = " your request is rejected please concern to A-Eye Diagnostics team.";
			send_email_attachment($to,$subject,$message,$fromEmail=DEFAULT_EMAIL,$fromName=DEFAULT_EMAIL_NAME);
		} 
		else{
	echo "ERROR: Hush! Sorry $sql. "
		. mysqli_error($conn);
			}

// 		
// 		$to="mqmaarij@gmail.com";
//         
// 		$sql="select * from signIn where (name='$name' or email='$email');";

// 		$res=mysqli_query($conn,$sql);
  
// 		if (mysqli_num_rows($res) > 0) {
		  
// 		  $row = mysqli_fetch_assoc($res);
// 		  if($email==isset($row['email']))
// 		  {
// 			 echo "email already exists";
// 		  }
// 		  if($username==isset($row['username']))
// 		  {
// 			  echo "username  already exists";
// 		  }
// 		  }
//   else{
// 	$sql = "INSERT INTO signIn (`name`, `email`, `Password`, `signIn_check`) VALUES ('$name',
// 	'$email','$pass','0')";

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
// send_email_attachment($email,$subject,$message,$fromEmail=DEFAULT_EMAIL,$fromName=DEFAULT_EMAIL_NAME);

// Close connection
mysqli_close($conn);
  //do your insert code here or do something (run your code)
  
		
		?>
	</center>
</body>

</html>