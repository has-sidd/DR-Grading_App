<?php

require 'con.php';

session_start();


$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$_SESSION["email"] = $email;
$_SESSION["password"] = $pass;
$usr_id = "select u_id, email from signIn where email like '$email' and password like '$pass';";
$user_id = mysqli_query($conn,$usr_id);
$row_id = mysqli_fetch_assoc($user_id);
$u_id_final = $row_id['u_id'];
$_SESSION['u_id'] = $u_id_final;

$sql="select * from signIn where (email='$email' );";

$res=mysqli_query($conn,$sql);


$row = mysqli_fetch_assoc($res);

if($email==($row['email'])){
    if($pass==($row['Password'])){
        if($row['signIn_check']=='1'){
            // role COndition
            if($row['role']=="admin"){
                header('Location:admin/index.html');
            }
            if($row['role']=="grader"){
                header('Location:grader.php');
                
            }
            if ($row['role']=="technician"){
                header('Location: tech.php');
            }
            
        }else{ echo "<script>
            alert('Your registration request is in pending. Please wait A-Eye Diagnostics will contact you via email');
            window.location.href = 'thanks-3.html';
            </script>";

        }
    }else{
        echo "<script>
        alert('Your password is incorrect. Please enter correct credentials.');
        window.location.href = 'signin.php';
        </script>";
    }
}else{
    echo "<script>
    alert('Your account is not register. Please Register your account');
    window.location.href = 'signup.php';
    </script>";
}



// Close connection
mysqli_close($conn);

?>