<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300" />

  <!-- Font Icon -->
  <link rel="stylesheet" href="assets_main/fonts/material-icon/css/material-design-iconic-font.min.css" />
  <title>Grader</title>

  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="assets_main/css/bootstrap.min.css" />

  <link rel="stylesheet" type="text/css" href="assets_main/css/font-awesome.css" />

  <link rel="stylesheet" href="assets_main/css/templatemo-klassy-cafe.css" />

  <link rel="stylesheet" href="assets_main/css/owl-carousel.css" />

  <!-- Main css -->
  <link rel="stylesheet" href="./assets_main/css/grader.css" />
</head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo row">
              <img src="assets_main/images/ncl-logo.png" />
              <img src="assets_main/images/logo-new.jpeg" />
              <!-- <h4 class="main-logohead"><b>A-Eye Diagnostics</b></h3> -->
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Tech Dashboard Area Start ***** -->
  <section class="grader">
    <div class="col-12">
      <div class="row wrapper justify-content-around">
        <div class="col-lg-8 p-0">
          <h2 class="heading text-center m-auto">Grader</h1>
          <form method="POST" >
        </div>
        <div class="mq-here">
  <h1 style = 'color:white; text-align: center' ><?php 
  session_start();
  include 'con.php';
   $login_email = $_SESSION["email"]; 
   $username= "SELECT * FROM signIn WHERE email = '$login_email'";
  $myuser= mysqli_query($conn,$username);
  $rowuser = mysqli_fetch_array($myuser);
  $user_Name  = $rowuser['name'];

  echo $user_Name;?></h1>
	<a class="logout_button" href="thanks_grading.html"  id='logout' type='submit' name='logout'  required='required'><?php 
  if(isset($_POST['logout'])){
    session_destroy();
  }
  ?>
  	<img class="img_logout" src="assets_main/images/capture.PNG">
    
  
  <div class="logoutmq">LOGOUT</div>

	</a>
  
</div>
            <?php 
            include 'con.php';

         
            
            
            If (isset($_POST['submit'])) {
              //session_start();
              $grade_mq_dr= $_REQUEST['grade'];
              $grade_mq_mo = $_REQUEST['mgrade'];
              $type= $_SESSION["device_type"];
              $grader_userid = $_SESSION["u_id"];
              $prev_id=$_REQUEST["image_previous"];
              $image_name_current =$_REQUEST['image_name'];

              $insert_grade= "INSERT INTO grading (`grader_id`, `image_name`, `mo`, `dr`,`device_type`,`original_image_id`) VALUES (
                '$grader_userid','$image_name_current','$grade_mq_mo','$grade_mq_dr','$type','$prev_id');";
                  $res=mysqli_query($conn,$insert_grade);

              //echo $_SESSION["email"];
             // echo $_SESSION["u_id"];
           //  echo $_SESSION["device_type"];
             
            
             $first_image = $_REQUEST["image_first"];
             $first_count = $_REQUEST["counter"];
             $first_count++;
                $mysqli = new mysqli('localhost', 'root', '', 'signIn'); 
            // mysqli query where the selected value is $_POST['owner']
            $sqlcount = "SELECT COUNT(*) FROM uploads WHERE device_type = '$type' and (`image_id`%2) =0";
            $count = mysqli_query($conn,$sqlcount);
            $row = mysqli_fetch_array($count);
           
          

            $total = $row[0];
            //echo $total;
           // echo $first_count;
            if($first_count==$total+1 || ($prev_id%2==1)){
                   
             //$first_image_odd = $_REQUEST["image_first_odd"];
             if(!isset($_REQUEST["image_first_odd"])){
              $sql_odd = "SELECT * FROM `uploads` WHERE device_type='$type' AND  (`image_id`%2) =1 limit 1";
              $mq_odd = mysqli_query($conn,$sql_odd);
              $row_odd = mysqli_fetch_array($mq_odd);
              $id_odd=$row_odd['image_id'];
              $first_image= $id_odd;
              
             }else{
               $first_image =$_REQUEST["image_first_odd"]+2;
             }
             //echo 'fist image odd ='. $first_image;
                    $sql56 = "SELECT * FROM `uploads` WHERE device_type='$type' AND  (`image_id`%2) =1 AND image_id=$first_image limit 1";
                  
                    $mq56 = mysqli_query($conn,$sql56);
                    $row56 = mysqli_fetch_array($mq56);
                    $DR_grade = $_REQUEST['grade'];
                    $MO_grade = $_REQUEST['mgrade'];
                    $image_name_current=$row56['image_name'];
                    $image_id_current=$row56['image_id'];
                    // echo 'starting oddy di';
                    // echo $prev_id;
                    // echo $first_image;

                    // $insert_grade_odd = "INSERT INTO grading (`grader_id`, `image_name`, `mo`, `dr`,`device_type`,`original_image_id`) VALUES (
                    //   '$grader_userid','$image_name_current','$MO_grade','$DR_grade','$type','$image_id_current');";
                    //     $res=mysqli_query($conn,$insert_grade_odd);
                   
                    if(!isset($row56['image_name'])){
                      echo "<script>
            alert('complete');
            window.location.href = 'thanks-3.html';
            </script>";
           
                    }
                    
            
                  
                    echo "
                  
                         <div class='col-md-5 image text-center'>
                  
                      <img src='{$row56['img_dir']}' ;class='card-img-top' alt='...' />
                      <div class='col-12'>
                        <span class='filename'>{$row56['image_id']}</span>
                      </div>
                      <input type='hidden' name='image_previous' value='{$row56['image_id']}'/>
                      <input type='hidden' name='image_first_odd' value='{$row56['image_id']}'/>
                      <input type='hidden' name='image_first' value='{$row56['image_id']}'/>
                      <input type='hidden' name='image_name' value='{$row56['image_name']}'/>
                      <input type='hidden' name='counter' value=' '/>
                        </div>
                        <div class='col-md-1 select text-center'>
                        <h5 class= 'form-title'>DR grades</h5>
                      <div class='form-group' >
                    
                        <input class='form-check-input grade' type='radio'  name='grade' id='grade1' required='required'  value='S0' style='position: inherit;'/>
                        <label class='form-check-label' for='grade1'>S0</label>
                      </div>
                      
                      <fieldset id='group1'>
                      <div class='form-group'>
                        <input class='form-check-input grade' type='radio'style='position: inherit;'name='grade' id='grade2' value='S1' />
                        <label class='form-check-label' for='grade2'>S1</label>
                      </div>
                      <div class='form-group'>
                        <input class='form-check-input grade' type='radio' style='position: inherit;'name='grade' id='grade3' value='S2' />
                        <label class='form-check-label' for='grade3'>S2</label>
                      </div>
                      <div class='form-group'>
                        <input class='form-check-input grade' type='radio' style='position: inherit;' name='grade' id='grade4' value='S3' />
                        <label class='form-check-label' for='grade4'>S3</label>
                      </div>
                      <div class='form-group'>
                        <input class='form-check-input grade' type='radio' style='position: inherit;' name='grade'  id='grade5' value='S4' />
                        <label class='form-check-label' for='grade5'>S4</label>
                      </div> 
                      </fieldset>
        
                      <h5 class= 'form-title'>Maculopathy grades</h5>
                      
                      <fieldset id='group2'>
                      <div class='form-check form-check-inline'>
                        <input class='form-check-input grade' type='radio' style='position: inherit;' name='mgrade' required='required'  id='M0' value='M0' />
                        <label class='form-check-label'  for='grade5'>M0</label>
                      </div> 
                      <div class='form-check form-check-inline'>
                        <input class='form-check-input grade' type='radio' style='position: inherit;' name='mgrade' id='M1' value='M1' />
                        <label class='form-check-label' for='grade5'>M1</label>
                      </div> 
                      </fieldset>
                      <div id='gradeError' class='form-text invalid-feedback error'>cxvxvcasd
                      </div>
                      <button id='submit' type='submit' name='submit'  required='required' class='btn btn-primary'>Next Image</button>
                      <h5>Others</h5>
                      <div class='section-ungrade section-flavors'>
                      <input id='r11' name='others' type='radio' value='radio_btn' onclick='clickHandler(this);' class='flavors-radio'> 
                 <label for='r11'><span>  </span>Ungradable</label>
                      <input id='r12' name='others' type='radio' value='radio_btn' onclick='clickHandler(this);'class='flavors-radio'>
                 <label for='r12'><span></span>Other Disease</label>
                 <button id='btnRate' type='submit' name='submit_1' required='required' class='btn btn-primary'>Next Image</button>
                 <script>
                let btn = document.getElementById('btnRate');
               
        
                btn.addEventListener('click', () => {
                    let others = document.getElementsByName('others');
                    others.forEach((others) => {
                        if (others.checked) {
                          $('#grade1').removeAttr('required');
                          $('#M0').removeAttr('required');
                        }
                    });
        
                });
            </script>
                      </div>";
                    }
                else{

              $sql12 = "SELECT * FROM `uploads` WHERE device_type='$type' AND  (`image_id`%2) =0 AND image_id>$prev_id limit 1";
              $mq12 = mysqli_query($conn,$sql12);
              $rowmq = mysqli_fetch_array($mq12);
             
              
           //   echo $first_image;
          
              $image_name_current=$rowmq['image_name'];
              $image_id_current=$rowmq['image_id'];
              $DR_grade = $_REQUEST['grade'];
              $MO_grade = $_REQUEST['mgrade'];
              //echo $DR_grade.$MO_grade.$image_name_current.$type.$grader_userid;

              // $insert_grade_even = "INSERT INTO grading (`grader_id`, `image_name`, `mo`, `dr`,`device_type`,`original_image_id`) VALUES (
              //       '$grader_userid','$image_name_current','$MO_grade','$DR_grade','$type','$image_id_current');";
              //         $res=mysqli_query($conn,$insert_grade_even);
              echo "
            
              <div class='col-md-5 image text-center'>
            
                <img src='{$rowmq['img_dir']}' ;class='card-img-top' alt='...' />
                <div class='col-12'>
                  <span class='filename'>{$rowmq['image_id']}</span>
                </div>
                <input type='hidden' name='image_previous' value='{$rowmq['image_id']}'/>
                <input type='hidden' name='image_first' value='{$rowmq['image_id']}'/>
                <input type='hidden' name='counter' value='{$first_count}'/>
                <input type='hidden' name='image_name' value='{$rowmq['image_name']}'/>
              </div>
              <div class='col-md-1 select text-center'>
              <h5 class= 'form-title'>DR grades</h5>
                <div class='form-group' >
              
                  <input class='form-check-input grade' type='radio' required='required' name='grade' id='grade1' value='S0' style='position: inherit;'/>
                  <label class='form-check-label' for='grade1'>S0</label>
                </div>
                
                <fieldset id='group1'>
                <div class='form-group'>
                  <input class='form-check-input grade' type='radio'style='position: inherit;'name='grade' id='grade2' value='S1' />
                  <label class='form-check-label' for='grade2'>S1</label>
                </div>
                <div class='form-group'>
                  <input class='form-check-input grade' type='radio' style='position: inherit;'name='grade' id='grade3' value='S2' />
                  <label class='form-check-label' for='grade3'>S2</label>
                </div>
                <div class='form-group'>
                  <input class='form-check-input grade' type='radio' style='position: inherit;' name='grade' id='grade4' value='S3' />
                  <label class='form-check-label' for='grade4'>S3</label>
                </div>
                <div class='form-group'>
                  <input class='form-check-input grade' type='radio' style='position: inherit;' name='grade' id='grade5' value='S4' />
                  <label class='form-check-label' for='grade5'>S4</label>
                </div> 
                </fieldset>
  
                <h5 class= 'form-title'>Maculopathy grades</h5>
                 
                <fieldset id='group2'>
                <div class='form-check form-check-inline'>
                  <input class='form-check-input grade' type='radio' style='position: inherit;' required='required' name='mgrade' id='M0' value='M0' />
                  <label class='form-check-label'  for='grade5'>M0</label>
                </div> 
                <div class='form-check form-check-inline'>
                  <input class='form-check-input grade' type='radio' style='position: inherit;' name='mgrade' id='M1' value='M1' />
                  <label class='form-check-label' for='grade5'>M1</label>
                </div> 
                </fieldset>
                <div id='gradeError' class='form-text invalid-feedback error'>cxvxvcasd
                </div>
                <button id='submit' type='submit' name='submit'  required='required' class='btn btn-primary'>Next Image</button>

                <h5>Others</h5>
                <div class='section-ungrade section-flavors'>
                <input id='r11' name='others' type='radio' value='radio_btn' onclick='clickHandler(this);' class='flavors-radio'> 
           <label for='r11'><span>  </span>Ungradable</label>
                <input id='r12' name='others' type='radio' value='radio_btn' onclick='clickHandler(this);'class='flavors-radio'>
           <label for='r12'><span></span>Other Disease</label>
           <button id='btnRate' type='submit' name='submit_1' required='required' class='btn btn-primary'>Next Image</button>
           <script>
          let btn = document.getElementById('btnRate');
         
  
          btn.addEventListener('click', () => {
              let others = document.getElementsByName('others');
              others.forEach((others) => {
                  if (others.checked) {
                    $('#grade1').removeAttr('required');
                    $('#M0').removeAttr('required');
                  }
              });
  
          });
      </script>
                </div>";}
              }
              
              
              else{
                $counter = 1;
                $grader_login_id = $_SESSION['u_id'];

                $loginsql= "SELECT graded_img FROM grading WHERE EXISTS (SELECT grader_id FROM grading WHERE grader_id = $grader_login_id) limit 1 "; 
                $login_check = mysqli_query($conn,$loginsql);

                if (mysqli_num_rows($login_check)>0){
                  
                 // echo 'user exist';
                  $latest_img = "SELECT * FROM grading WHERE grader_id= $grader_login_id ORDER BY graded_img DESC limit 1";
                  $latest = mysqli_query($conn,$latest_img);
                  $fetch = mysqli_fetch_array($latest);
                  $final_latest = $fetch['original_image_id'];
                  
                  
                  if (($final_latest%2)==0){
                  $type = $_REQUEST['device_type'];
                  $_SESSION["device_type"] = $type;
                  //echo $type;
                 // $mysqli = new mysqli('localhost', 'root', '', 'signIn');  
                 $image_type = $fetch['device_type'];
                 if ($image_type=='F'){
                  $final_latesti = $final_latest+2;
                  $sql27 = "SELECT * FROM uploads WHERE device_type= '$type' AND image_id= $final_latesti limit 1 ";     
                  $mq27 = mysqli_query($conn,$sql27);
                  $row = mysqli_fetch_array($mq27);
                  
      
                  $image_name_current_1st=$row['image_name'];
                  $image_id_current_1st=$row['image_id'];
                  echo "
            
                  <div class='col-md-5 image text-center'>
                
                    <img src='{$row['img_dir']}' ;class='card-img-top' alt='...' />
                    <div class='col-12'>
                      <span class='filename'>{$row['image_id']}</span>
                    </div>
                    <input type='hidden' name='image_previous' value='{$row['image_id']}'/>
                    <input type='hidden' name='image_first' value='{$row['image_id']}'/>
                    <input type='hidden' name='counter' value='{$counter}'/>
                    <input type='hidden' name='image_name' value='{$row['image_name']}'/>
                  </div>
                  <div class='col-md-1 select text-center'>
                  <h5 class= 'form-title'>DR grades</h5>
                    <div class='form-group' >
                  
                      <input class='form-check-input grade' type='radio' required='required' name='grade' id='grade1' value='S0' style='position: inherit;'/>
                      <label class='form-check-label' for='grade1'>S0</label>
                    </div>
                    
                    <fieldset id='group1'>
                    <div class='form-group'>
                      <input class='form-check-input grade' type='radio'style='position: inherit;'name='grade' id='grade2' value='S1' />
                      <label class='form-check-label' for='grade2'>S1</label>
                    </div>
                    <div class='form-group'>
                      <input class='form-check-input grade' type='radio' style='position: inherit;'name='grade' id='grade3' value='S2' />
                      <label class='form-check-label' for='grade3'>S2</label>
                    </div>
                    <div class='form-group'>
                      <input class='form-check-input grade' type='radio' style='position: inherit;' name='grade' id='grade4' value='S3' />
                      <label class='form-check-label' for='grade4'>S3</label>
                    </div>
                    <div class='form-group'>
                      <input class='form-check-input grade' type='radio' style='position: inherit;' name='grade' id='grade5' value='S4' />
                      <label class='form-check-label' for='grade5'>S4</label>
                    </div> 
                    </fieldset>
                    <h5 class= 'form-title'>Maculopathy grades</h5>
                     
                    <fieldset id='group2'>
                    <div class='form-check form-check-inline'>
                      <input class='form-check-input grade' type='radio' style='position:  inherit;' required='required'name='mgrade' id='M0' value='M0' />
                      <label class='form-check-label'  for='grade5'>M0</label>
                    </div> 
                    <div class='form-check form-check-inline'>
                      <input class='form-check-input grade' type='radio' style='position: inherit;' name='mgrade' id='M1' value='M1' />
                      <label class='form-check-label' for='grade5'>M1</label>
                    </div> 
                    </fieldset>
                    
                    <div id='gradeError' class='form-text invalid-feedback error'>cxvxvcasd
                    </div>
                    <button id='submit' type='submit' name='submit' required='required' class='btn btn-primary'>Next Image</button>

                    <h5>Others</h5>
                    <div class='section-ungrade section-flavors'>
                    <input id='r11' name='others' type='radio' value='radio_btn' onclick='clickHandler(this);' class='flavors-radio'> 
               <label for='r11'><span>  </span>Ungradable</label>
                    <input id='r12' name='others' type='radio' value='radio_btn' onclick='clickHandler(this);'class='flavors-radio'>
               <label for='r12'><span></span>Other Disease</label>
               <button id='btnRate' type='submit' name='submit_1' required='required' class='btn btn-primary'>Next Image</button>
               <script>
              let btn = document.getElementById('btnRate');
             
      
              btn.addEventListener('click', () => {
                  let others = document.getElementsByName('others');
                  others.forEach((others) => {
                      if (others.checked) {
                        $('#grade1').removeAttr('required');
                        $('#M0').removeAttr('required');
                      }
                  });
      
              });
          </script>
                </div>";
                 }else{
                  $final_latesti = $final_latest+2;
                  $sql27 = "SELECT * FROM uploads WHERE device_type= '$type' AND image_id= $final_latesti limit 1 ";     
                  $mq27 = mysqli_query($conn,$sql27);
                  $row = mysqli_fetch_array($mq27);
                  
      
                  $image_name_current_1st=$row['image_name'];
                  $image_id_current_1st=$row['image_id'];
                  echo "
            
                  <div class='col-md-5 image text-center'>
                
                    <img src='{$row['img_dir']}' ;class='card-img-top' alt='...' />
                    <div class='col-12'>
                      <span class='filename'>{$row['image_id']}</span>
                    </div>
                    <input type='hidden' name='image_previous' value='{$row['image_id']}'/>
                    <input type='hidden' name='image_first' value='{$row['image_id']}'/>
                    <input type='hidden' name='counter' value='{$counter}'/>
                    <input type='hidden' name='image_name' value='{$row['image_name']}'/>
                  </div>
                  <div class='col-md-1 select text-center'>
                  <h5 class= 'form-title'>DR grades</h5>
                    <div class='form-group' >
                  
                      <input class='form-check-input grade' type='radio' required='required' name='grade' id='grade1' value='S0' style='position: inherit;'/>
                      <label class='form-check-label' for='grade1'>S0</label>
                    </div>
                    
                    <fieldset id='group1'>
                    <div class='form-group'>
                      <input class='form-check-input grade' type='radio'style='position: inherit;'name='grade' id='grade2' value='S1' />
                      <label class='form-check-label' for='grade2'>S1</label>
                    </div>
                    <div class='form-group'>
                      <input class='form-check-input grade' type='radio' style='position: inherit;'name='grade' id='grade3' value='S2' />
                      <label class='form-check-label' for='grade3'>S2</label>
                    </div>
                    <div class='form-group'>
                      <input class='form-check-input grade' type='radio' style='position: inherit;' name='grade' id='grade4' value='S3' />
                      <label class='form-check-label' for='grade4'>S3</label>
                    </div>
                    <div class='form-group'>
                      <input class='form-check-input grade' type='radio' style='position: inherit;' name='grade' id='grade5' value='S4' />
                      <label class='form-check-label' for='grade5'>S4</label>
                    </div> 
                    </fieldset>
                    <h5 class= 'form-title'>Maculopathy grades</h5>
                     
                    <fieldset id='group2'>
                    <div class='form-check form-check-inline'>
                      <input class='form-check-input grade' type='radio' style='position:  inherit;' required='required'name='mgrade' id='M0' value='M0' />
                      <label class='form-check-label'  for='grade5'>M0</label>
                    </div> 
                    <div class='form-check form-check-inline'>
                      <input class='form-check-input grade' type='radio' style='position: inherit;' name='mgrade' id='M1' value='M1' />
                      <label class='form-check-label' for='grade5'>M1</label>
                    </div> 
                    </fieldset>
                    
                    <div id='gradeError' class='form-text invalid-feedback error'>cxvxvcasd
                    </div>
                    <button id='submit' type='submit' name='submit' required='required' class='btn btn-primary'>Next Image</button>
                    <h5>Others</h5>
                    <div class='section-ungrade section-flavors'>
                    <input id='r11' name='others' type='radio' value='radio_btn' onclick='clickHandler(this);' class='flavors-radio'> 
               <label for='r11'><span>  </span>Ungradable</label>
                    <input id='r12' name='others' type='radio' value='radio_btn' onclick='clickHandler(this);'class='flavors-radio'>
               <label for='r12'><span></span>Other Disease</label>
               <button id='btnRate' type='submit' name='submit_1' required='required' class='btn btn-primary'>Next Image</button>
               <script>
              let btn = document.getElementById('btnRate');
             
      
              btn.addEventListener('click', () => {
                  let others = document.getElementsByName('others');
                  others.forEach((others) => {
                      if (others.checked) {
                        $('#grade1').removeAttr('required');
                        $('#M0').removeAttr('required');
                      }
                  });
      
              });
          </script>
                </div>";
                 }
              
                  
      
                  }else{ 
                    
                    $type = $_REQUEST['device_type'];
                    $_SESSION["device_type"] = $type;
                    //echo $type;
                    $mysqli = new mysqli('localhost', 'root', '', 'signIn');  
                    $image_type_odd = $fetch['device_type'];
                  
                    
                    $sql = "SELECT * FROM `uploads` WHERE device_type= $type AND `image_id`= $final_latest +2 limit 1 ";     
                    $mq = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($mq);
                    
        
                    $image_name_current_1st=$row['image_name'];
                    $image_id_current_1st=$row['image_id'];
                    echo "
              
                    <div class='col-md-5 image text-center'>
                  
                      <img src='{$row['img_dir']}' ;class='card-img-top' alt='...' />
                      <div class='col-12'>
                        <span class='filename'>{$row['image_id']}</span>
                      </div>
                      <input type='hidden' name='image_previous' value='{$row['image_id']}'/>
                      <input type='hidden' name='image_first' value='{$row['image_id']}'/>
                      <input type='hidden' name='counter' value='{$counter}'/>
                      <input type='hidden' name='image_name' value='{$row['image_name']}'/>
                    </div>
                    <div class='col-md-1 select text-center'>
                    <h5 class= 'form-title'>DR grades</h5>
                      <div class='form-group' >
                    
                        <input class='form-check-input grade' type='radio' required='required' name='grade' id='grade1' value='S0' style='position: inherit;'/>
                        <label class='form-check-label' for='grade1'>S0</label>
                      </div>
                      
                      <fieldset id='group1'>
                      <div class='form-group'>
                        <input class='form-check-input grade' type='radio'style='position: inherit;'name='grade' id='grade2' value='S1' />
                        <label class='form-check-label' for='grade2'>S1</label>
                      </div>
                      <div class='form-group'>
                        <input class='form-check-input grade' type='radio' style='position: inherit;'name='grade' id='grade3' value='S2' />
                        <label class='form-check-label' for='grade3'>S2</label>
                      </div>
                      <div class='form-group'>
                        <input class='form-check-input grade' type='radio' style='position: inherit;' name='grade' id='grade4' value='S3' />
                        <label class='form-check-label' for='grade4'>S3</label>
                      </div>
                      <div class='form-group'>
                        <input class='form-check-input grade' type='radio' style='position: inherit;' name='grade' id='grade5' value='S4' />
                        <label class='form-check-label' for='grade5'>S4</label>
                      </div> 
                      </fieldset>
                      <h5 class= 'form-title'>Maculopathy grades</h5>
                       
                      <fieldset id='group2'>
                      <div class='form-check form-check-inline'>
                        <input class='form-check-input grade' type='radio' style='position:  inherit;'required='required' name='mgrade' id='M0' value='M0' />
                        <label class='form-check-label'  for='grade5'>M0</label>
                      </div> 
                      <div class='form-check form-check-inline'>
                        <input class='form-check-input grade' type='radio' style='position: inherit;' name='mgrade' id='M1' value='M1' />
                        <label class='form-check-label' for='grade5'>M1</label>
                      </div> 
                      </fieldset>
                      
                      <div id='gradeError' class='form-text invalid-feedback error'>cxvxvcasd
                      </div>
                      <button id='submit' type='submit' name='submit' required='required' class='btn btn-primary'>Next Image</button>
                      <h5>Others</h5>
                      <div class='section-ungrade section-flavors'>
                      <input id='r11' name='others' type='radio' value='radio_btn' onclick='clickHandler(this);' class='flavors-radio'> 
                 <label for='r11'><span>  </span>Ungradable</label>
                      <input id='r12' name='others' type='radio' value='radio_btn' onclick='clickHandler(this);'class='flavors-radio'>
                 <label for='r12'><span></span>Other Disease</label>
                 <button id='btnRate' type='submit' name='submit_1' required='required' class='btn btn-primary'>Next Image</button>
                 <script>
                let btn = document.getElementById('btnRate');
               
        
                btn.addEventListener('click', () => {
                    let others = document.getElementsByName('others');
                    others.forEach((others) => {
                        if (others.checked) {
                          $('#grade1').removeAttr('required');
                          $('#M0').removeAttr('required');
                        }
                    });
        
                });
            </script>
                  </div>";

                  }

                }

               
             

                else {
                  //echo '1st login';
                  $counter =1;
           
            $type = $_REQUEST['device_type'];
            $_SESSION["device_type"] = $type;
            //echo $type;
            $mysqli = new mysqli('localhost', 'root', '', 'signIn');  
            
            $sql = "SELECT * FROM `uploads` WHERE device_type='$type'AND(`image_id`%2) =0 limit 1";     
            $mq = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($mq);
            

            $image_name_current_1st=$row['image_name'];
            $image_id_current_1st=$row['image_id'];
            
         //  echo $_SESSION['device_type'];

            echo "
            
            <div class='col-md-5 image text-center'>
          
              <img src='{$row['img_dir']}' ;class='card-img-top' alt='...' />
              <div class='col-12'>
                <span class='filename'>{$row['image_id']}</span>
              </div>
              <input type='hidden' name='image_previous' value='{$row['image_id']}'/>
              <input type='hidden' name='image_first' value='{$row['image_id']}'/>
              <input type='hidden' name='counter' value='{$counter}'/>
              <input type='hidden' name='image_name' value='{$row['image_name']}'/>
            </div>
            <div class='col-md-1 select text-center'>
            <h5 class= 'form-title'>DR grades</h5>
              <div class='form-group' >
            
                <input class='form-check-input grade' type='radio' required='required' name='grade' id='grade1' value='S0' style='position: inherit;'/>
                <label class='form-check-label' for='grade1'>S0</label>
              </div>
              
              <fieldset id='group1'>
              <div class='form-group'>
                <input class='form-check-input grade' type='radio'style='position: inherit;'name='grade' id='grade2' value='S1' />
                <label class='form-check-label' for='grade2'>S1</label>
              </div>
              <div class='form-group'>
                <input class='form-check-input grade' type='radio' style='position: inherit;'name='grade' id='grade3' value='S2' />
                <label class='form-check-label' for='grade3'>S2</label>
              </div>
              <div class='form-group'>
                <input class='form-check-input grade' type='radio' style='position: inherit;' name='grade' id='grade4' value='S3' />
                <label class='form-check-label' for='grade4'>S3</label>
              </div>
              <div class='form-group'>
                <input class='form-check-input grade' type='radio' style='position: inherit;' name='grade' id='grade5' value='S4' />
                <label class='form-check-label' for='grade5'>S4</label>
              </div> 
              </fieldset>
              <h5 class= 'form-title'>Maculopathy grades</h5>
               
              <fieldset id='group2'>
              <div class='form-check form-check-inline'>
                <input class='form-check-input grade' type='radio' style='position:  inherit;' required='required' name='mgrade' id='M0' value='M0' />
                <label class='form-check-label'  for='grade5'>M0</label>
              </div> 
              <div class='form-check form-check-inline'>
                <input class='form-check-input grade' type='radio' style='position: inherit;' name='mgrade' id='M1' value='M1' />
                <label class='form-check-label' for='grade5'>M1</label>
              </div> 
              </fieldset>
              
              <div id='gradeError' class='form-text invalid-feedback error'>cxvxvcasd
              </div>
              <button id='submit' type='submit' name='submit' required='required' class='btn btn-primary'>Next Image</button>
              <div class='form-title'>
              <h5>Others</h5>
              <div class='section-ungrade section-flavors'>
              <input id='r11' name='others' type='radio' value='radio_btn' onclick='clickHandler(this);' class='flavors-radio'> 
         <label for='r11'><span>  </span>Ungradable</label>
              <input id='r12' name='others' type='radio' value='radio_btn' onclick='clickHandler(this);'class='flavors-radio'>
         <label for='r12'><span></span>Other Disease</label>
         <button id='btnRate' type='submit' name='submit_1' required='required' class='btn btn-primary'>Next Image</button>
         <script>
        let btn = document.getElementById('btnRate');
       

        btn.addEventListener('click', () => {
            let others = document.getElementsByName('others');
            others.forEach((others) => {
                if (others.checked) {
                  $('#grade1').removeAttr('required');
                  $('#M0').removeAttr('required');
                }
            });

        });
    </script>
       </div>
              </div>
             
         
          </div>
         ";

       
         
          }

        }
                //  session_start();
           // echo $_SESSION["email"];
           // echo $_SESSION["u_id"];
            
            ?>
          </form>  
    
      </div>
    </div>
    <div class="col-2">
      
    </div>
  </section>
  <!-- ***** Tech Dashboard Area End ***** -->

  <!-- ***** Footer Start ***** -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <div class="right-text-content">
            <ul class="social-icons">
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="logo row">
            <a href="index.html"><img class="resize" alt="" />
              <img src="assets_main/images/ncl-logo.png" />
              <img src="assets_main/images/logo-new.jpeg" /></a>
          </div>
        </div>
        <div class="col-lg-4 col-xs-12">
          <div class="left-text-content">
            <p>
              © Copyright NCAI.

              <br />NED UNIVERSITY
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ***** Footer Ends ***** -->

  <!-- jQuery -->
  <script src="assets_main/js/jquery-2.1.0.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets_main/js/popper.js"></script>
  <script src="assets_main/js/bootstrap.min.js"></script>
  <!-- JS -->
  <script src="assets_main/vendor/jquery/jquery.min.js"></script>

  <!-- Plugins -->
  <script src="assets_main/js/owl-carousel.js"></script>
  <script src="assets_main/js/accordions.js"></script>
  <script src="assets_main/js/scrollreveal.min.js"></script>
  <script src="assets_main/js/slick.js"></script>
  <script src="assets_main/js/isotope.js"></script>

  <!-- Global Init -->
  <script src="assets_main/js/grader.js"></script>
</body>

</html>