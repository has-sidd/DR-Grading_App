<?php
    include 'connection.php';

    if (isset($_POST['submit']) && isset($_POST['grade']) && isset($_POST['id']) && isset($_POST['grader_id'])){
        $grade = $_POST['grade'];
        $img_id = $_POST['id'];
        $grader_id = $_POST['grader_id'];
        

        $query1="UPDATE `uploads` SET `graded`='1' WHERE `id` ='$img_id'";
        $result1 = mysqli_query($conn, $query1);

        if($result1){
            $query2 = "INSERT INTO `grade`(`grader_id`, `img_id`, `grade`) VALUES ('$grader_id','$img_id','$grade')";
            $result2 = mysqli_query($conn, $query2);
        }

        header('location: ../../grader.php');
    };
?>