<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="./style.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./background/style.css">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets_main/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets_main/css/font-awesome.css">

    <link rel="stylesheet" href="assets_main/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets_main/css/owl-carousel.css">

    <link rel="stylesheet" href="assets_main/css/lightbox.css">
</head>

<body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo row">
                            <img src="assets_main/images/ncl-logo.png" style="float:right;"><span style="color: #33e0ff"
                                ;> DR Grading System </span>
                            <img src="assets_main/images/logo-new.jpeg" style="float:left;">
                            <!-- <h4 class="main-logohead"><b>A-Eye Diagnostics</b></h3> -->
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div id="particles-js"></div>

    <!-- stats - count particles -->
    <!-- <div class="count-particles">                                                                                                                       
            <span class="js-count-particles">--</span> particles
            </div> -->


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">



                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>

                        <form method="POST" class="register-form" id="register-form" action="insert.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"
                                    required="required" />
                            </div>


                            <div class="form-group">
                                <h2 class="form-title"> Select Role </h2>
                            


                                <div class="form-group">

                                    <input class="form-check-input" type="radio" name="role" id="role" value="admin" style="position: inherit;" />
                                    <label class="form-check-label" for="inlineRadio1">Admin</label>
                                </div>

                                <div class="form-group">
                                    <input class="form-check-input" type="radio" name="role" id="role" value="technician"
                                        checked="checked" style="position: inherit;"/>
                                    <label class="form-check-label" for="inlineRadio2">Technician</label>
                                </div>

                                <div class="form-group">
                                    <input class="form-check-input" type="radio" name="role" id="role" value="grader" style="position: inherit;" />
                                    <label class="form-check-label" for="inlineRadio3">Grader</label>
                                </div>

                                <div class="form-group form-button">
                                    <input type="submit" name="signup" id="signup" class="form-submit" value="Register"
                                        required="required" />
                                </div>
                                        
                               </form>
                        </div>                                                                          
                    </div>

                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="signin.php" class="signup-image-link">I am already member</a>

                    </div>

                </div>

            </div>

        </section>

    </div>

    <!-- particles.js lib (JavaScript CodePen settings): https://github.com/VincentGarreau/particles.js -->
    <!-- partial -->
    <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
    <script src='https://threejs.org/examples/js/libs/stats.min.js'></script>
    <script src="./background/script.js"></script>




    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>