<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300'>

  <!-- Font Icon -->
  <link rel="stylesheet" href="assets_main/fonts/material-icon/css/material-design-iconic-font.min.css" />
  <title>Upload</title>

  <!-- Additional CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="assets_main/css/font-awesome.css" />

  <link rel="stylesheet" href="assets_main/css/templatemo-klassy-cafe.css" />

  <link rel="stylesheet" href="assets_main/css/owl-carousel.css" />

  <!-- Main css -->
  <link rel="stylesheet" href="./assets_main/css/styleUpload.css">
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
              <img src="assets/images/ncl-logo.png" />
              <img src="assets/images/logo-new.jpeg" />
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
  <section class="section" id="upload">
    <div class="upload">
      <div class="upload-files">
        <div class="first">
          <p>
            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
            <span class="up">A-Eye&nbsp;</span>
            <span class="load">Diagnostics</span> <br>
            <button type="button" class="btn btn-primary">
              Images <span class="badge"></span>
            </button>
          </p>
        </div>
        <form method="POST" onsubmit="return formValidate()" enctype="multipart/form-data" action="./assets_main/php/file-upload.php">

          <div class="upload-section">

            <div class="body" id="drop">

              <div class="options row ">

                <div class="col-sm-4">
                  <label class="heading">MR Number</label>
                  <div class="option-body">
                    <input class="form-control form-control-sm mr-input" id="mrno" type="text" placeholder="MR07" aria-label=".form-control-sm example" name="mrno">
                  </div>
                  <div id='mrError' class='form-text invalid-feedback error'>cxvxvcasd
                  </div>
                </div>

                <div class="col-sm-4 ">
                  <label class="heading">Image Orientation</label>
                  <div class="option-body">
                    <div class="form-check orientation-check">
                      <input class="form-check-input orientation" type="radio" name="orientation" value="left" id="left">
                      <label class="form-check-label" for="left">
                        Left
                      </label>
                    </div>
                    <div class="form-check orientation-check">
                      <input class="form-check-input orientation" type="radio" name="orientation" value="right" id="right">
                      <label class="form-check-label" for="right">
                        Right
                      </label>
                    </div>

                  </div>
                  <div id='orientationError' class='form-text invalid-feedback error'>cxvxvcasd
                  </div>
                </div>


                <div class="col-sm-4">
                  <label class="heading">Device Type</label>
                  <div class="option-body">
                    <select name="device" id="device" class="form-select form-select-sm device-type" aria-label=".form-select-sm example">
                      <option value="0" selected>Type</option>
                      <option value="P">Portable</option>
                      <option value="F">Fundus</option>
                    </select>
                  </div>
                  <div id='deviceError' class='form-text invalid-feedback error'>cxvxvcasd
                  </div>
                </div>

                <div class="col-12">
                  <div id='imgError' class='form-text invalid-feedback error'>cxvxvcasd
                  </div>
                  <div id='extError' class='form-text invalid-feedback error'>cxvxvcasd
                  </div>
                </div>

              </div>
            </div>

            <div class="body-footer">
              <div>

                <input class="img-input" type="file" name="images[]" multiple />
              </div>
              <i class="fa fa-file-text-o pointer-none" aria-hidden="true"></i>
              <p class="pointer-none">
                <b>Drag and drop</b> files here <br />
                or
                <a href="" id="triggerFile">browse</a> to begin the upload
              </p>

            </div>
          </div>
          <div class="second">
            <div class="divider">
              <span>
                <AR>FILES</AR>
              </span>
            </div>
            <div class="list-files">
              <!--   template   -->
            </div>
            <div class="row justify-content-center">
              <div class="col-md-2">
                <button type="reset" class="importar reset">RESET</button>
              </div>

              <div class="col-md-2">
                <button type="submit" name='submit' id="submit" class="importar submit">UPLOAD</button>
              </div>
            </div>

          </div>
        </form>

      </div>
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
              <img src="assets/images/ncl-logo.png" />
              <img src="assets/images/logo-new.jpeg" /></a>
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
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

  <!-- Bootstrap -->
  <script src="assets_main/js/popper.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="assets_main/vendor/jquery/jquery.min.js"></script> -->

  <!-- Plugins -->
  <script src="assets_main/js/owl-carousel.js"></script>
  <script src="assets_main/js/accordions.js"></script>
  <script src="assets_main/js/scrollreveal.min.js"></script>
  <script src="assets_main/js/slick.js"></script>
  <script src="assets_main/js/isotope.js"></script>



  <!-- Global Init -->
  <!-- <script src="assets_main/js/uploadValidation.js"></script> -->
  <!-- <script src="assets_main/js/custom.js"></script> -->
  <script src="assets_main/js/scriptUpload.js"></script>
  <script src="assets_main/js/imageValidation.js"></script>



</body>

</html>