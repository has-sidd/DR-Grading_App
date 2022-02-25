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
                        <ul class="nav">
                            <li class="scroll-to-section">
                                <a href="#top" class="active">Home</a>
                            </li>
                            <!-- <li class="scroll-to-section"><a href="#about">About</a></li> -->

                            <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Research</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Team</a></li>
                            <!-- <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section">
                                <a href="#reservation">Contact Us</a>
                            </li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Tech Dashboard Area Start ***** -->
    <section class="grader">
        <div class="col-10">
          
            <div class="row wrapper justify-content-around">
                <div class="col-lg-8 p-0">
                    <h1 class="heading text-center m-auto">Grader</h1>
                </div>


                <form method="POST" action="gradingdashboard.php">

                    <div class="form-group">
                        <div class="section-wrap ">
                            <input id="device_type" name="device_type" type="radio" value="P"
                                style="position: inherit;" checked="checked" class="flavors-radio"/>
                            <label class="form-check-label" for="inlineRadio1">Portable Device</label>
                            
                            <input id="device_type" name="device_type" type="radio" value="F"
                                style="position: inherit; " class=" flavors-radio"/>
                            <label class="form-check-label" for="inlineRadio2">Fundus Camera</label>
                            <div class="form-group form-button">
                                <input type="submit" name = "device" id = "device_type"
                                 class="btn btn-outline-primary" required= "required" value= "select"/>
                            </div>
                        </div>
                        </div>
                </form>
            </div>                                        

                
        </div>



               

        </div>
        </div>
        <div class="col-2"></div>
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