<?php 

    include 'connection.php';

    if (isset($_POST['orientation'])){
        $mrno = $_POST['mrno'];
        $orientation = $_POST['orientation'];
        $device = $_POST['device'];

        $query_check = "SELECT * FROM uploads WHERE mr_no='$mrno' AND img_orientation='$orientation' AND device_type='$device'";
        $query_check_run = mysqli_query($conn, $query_check);
        if(mysqli_num_rows($query_check_run) > 0){
            echo "Image already exists";
        }
    }

    if (isset($_POST['submit']) && isset($_POST['mrno']) && isset($_POST['orientation']) && isset($_POST['device']))
    {
        $extension = array('jpeg', 'jpg', 'png', 'tiff');
        $createTime=date('Y-m-d h:i:s');

        $mrNo = $_POST['mrno'];
        $orientation = $_POST['orientation'];
        $device = $_POST['device'];

        foreach ($_FILES['images']['tmp_name'] as $key  => $value) {

            $finalimg = '';
            $img_dir= '';

            $filename = $_FILES['images']['name'][$key];
            $filename_tmp = $_FILES['images']['tmp_name'][$key];
            $ext=pathinfo($filename, PATHINFO_EXTENSION);

            $newname = $mrNo. "_" .$orientation. "_" .$device . "." .$ext;

            if(in_array($ext, $extension)){
                move_uploaded_file($filename_tmp, '../uploads/'.$newname);
                $finalimg=$newname;
                $img_dir='./assets_main/uploads/'.$newname;
                
            
                //insert
                $query = "INSERT INTO `uploads`(`image_name`, `mr_no`, `img_orientation`, `device_type`, `img_dir`, `image_create_time`) VALUES ('$finalimg', '$mrNo', '$orientation', '$device', '$img_dir', '$createTime')";
                mysqli_query($conn, $query);

                header('location: ../../tech.php');
            }
            else{
                echo "Extension not supported";
            }
        };
        
    }
?>