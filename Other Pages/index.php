<!DOCTYPE html>
<html lang="en">
  <head>
    <title>College Campus Recruitment System</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="carousel.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      html,
      body {
        overflow-x: hidden; /* Prevent scroll on narrow devices */
      }

      /* since the navbar is fixed we need to add some space to the body */
      body {
        padding-top: 56px;
      }

      .offcanvas-collapse {
        position: fixed;
        top: 56px; /* Height of navbar */
        bottom: 0;
        right: 100%;
        left: -300px;
        width: 300px;
        padding-right: 1rem;
        padding-left: 1rem;
        overflow-y: auto;
        visibility: hidden;
        background-color: #343a40;
        transition-timing-function: ease-in-out;
        transition-duration: 0.3s;
        transition-property: left, visibility;
      }

      .offcanvas-collapse {
        align-items: start;
        /*   Adds a subtle drop shadow   */
        -moz-background-clip: padding; /* Firefox 3.6 */
        -webkit-background-clip: padding; /* Safari 4? Chrome 6? */
        background-clip: padding-box; /* Firefox 4, Safari 5, Opera 10, IE 9 */
        border-right: 5px solid rgba(0, 0, 0, 0.2);
      }

      /* Makes the nav visibile with the open class */
      .offcanvas-collapse.open {
        left: 0;
        visibility: visible;
      }

      .navbar-expand-lg .navbar-nav {
        -ms-flex-direction: column;
        flex-direction: column;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        color: rgba(255, 255, 255, 0.75);
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .nav-underline .nav-link {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        font-size: 0.875rem;
        color: #6c757d;
      }

      .nav-underline .nav-link:hover {
        color: #007bff;
      }

      .nav-underline .active {
        font-weight: 500;
        color: #343a40;
      }

      






      /* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#footer {
    padding: 60px 0;
    
    
}

#footer .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #007b5e !important;
}
#footer h5{
	padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
	padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.social li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
	color:#ffffff;
}
#footer ul.social li a:hover{
	color:#eeeeee;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
	margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}





/* cards flips*/
/* FontAwesome for working BootSnippet :> */

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

#team {
    padding: 60px 0;
}

#team .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
} 
div.scroll{ 
      background-color:white; 
      widows: auto;
      height: auto; 
      overflow: auto; 
      text-align: justify; 
      padding: 20px;
      } 
    </style>
  </head>
  <body>
    <section class="bg-primary">
      <div class="container">
        <!--  START NAVBAR   -->
        <nav
          class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark navbar-offcanvas" 
        >
          <a class="navbar-brand mr-auto" href="#"
            >College Campus Recruitment</a
          >

          <!--     If you want to show the button online on mobile use this toggle  
      
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>
       -->



          <!--      This toggle button is always visible  -->
          <button class="navbar-toggler d-block" type="button" id="navToggle">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse offcanvas-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#about">ABOUT<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/login.php">ADMIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="total_reg1.html">ALL COMPANY'S</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">LOGIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#support">HELP</a>!</a>
              </li>
           
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="https://example.com"
                  id="dropdown01"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Contact</a
                >
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="http://www.facebook.com/bmsce"><i class="fa fa-angle-double-right"></i>facebook</a>
                  <a class="dropdown-item" href="http://www.instagram.com/bmsce"><i class="fa fa-angle-double-right"></i>instagram</a>
                  <a class="dropdown-item" href="http://www.twitter.com/bmsce"><i class="fa fa-angle-double-right"></i>twitter</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <!--  END NAVBAR   -->
      </div>
      <!--/.container    -->
    </section>

    <!--carousal-->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="images/img1.jpg" alt="First slide"/>
          <div class="container">
            <div class="carousel-caption text-md-left"><br><br>
            <marquee><p> <h1 class="text-white">B.M.S College of Engineering,Benglore-19</h1></p></marquee>

            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="second-slide"
            src="images/img2.jpg"
            alt="Second slide"
          />
          <div class="container">
            <div class="carousel-caption">
             <h2><div class="p-3 mb-2 bg-primary text-white">CHOOSE A JOB YOU LOVE! </div></h1>
          
              <p>
                <a class="btn btn-lg btn-primary" href="https://www.thebalancecareers.com/steps-to-choosing-career-525506" role="button"
                  >Learn more</a
                >
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="third-slide"
            src="images/img3.jpg"
            alt="Third slide"
          />
          <div class="container">
            <div class="carousel-caption text-right">
              <h1 class="text-dark">One more for good measure.</h1>
              <p class="text-dark">
                “Whenever you are asked if you can do a job, tell ‘em, ‘Certainly I can!’ Then get busy and find out how to do it.”
              </p>
              <p>
                <a class="btn btn-lg btn-primary" href="gallary.html" role="button"
                  >Browse gallery</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#myCarousel"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#myCarousel"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!--DATA MAIN-->
    <span id="about">
    <div class="scroll"><h4>About Campus Recruitment</h4><br>B.M.S College of Engineering has authored and set many examples of yeomen student centric initiatives.
      One such initiative is the Department of Training and Placement. The Institution ﬁrmly believes that placements are the major benchmark to the performance of the institute.
      The placement cell is the nodal center and an integral part of the institution. Started during 1995 it has scaled great heights and touched about 18500+ cumulative offers since its inception.
      The Centre has very active linkages and collaborations with industry.
      The Centre helps students in pursuing their career interests and also assists the employers in achieving their hiring goals.
      The vital roles of the Centre is to groom and shape the students and make them industry ready by imparting necessary skills and training.
      More than 300 reputed National and Multinational companies visit our institution for campus recruitment annually.
      The Centre provides value added services like personal interview, analytical, quantitative, reasoning, mock tests, and team spirits and enterprise dynamics as part of their preplacement training.
      It also facilitates a web portal service to students to take up simulated online tests. The Centre offers complete state-of-the-art physical, communication and computing infrastructure for its effective functioning and best arrangement necessary to facilitate the ofﬁcials and companies visiting for placements.
      Our highly skilled and dedicated staff will deliver precisely planned services to the student community and companies.</div>


</span>
       <!--cards with photos-->
<span id="place_comm">
        <section id="team" class="pb-5">
          <div class="container">
              <h5 class="section-title h1">Placement Community</h5>
              <div class="row">
                  <!-- Team member -->
                  <div class="col-xs-12 col-sm-6 col-md-4">
                      <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                          <div class="mainflip">
                              <div class="frontside">
                                  <div class="card">
                                      <div class="card-body text-center">
                                          <p><img class=" img-fluid" src="" alt="card image"></p>
                                          <h4 class="card-title">Chandan C Bagan</h4>
                                          <a href="" class="btn btn-primary btn-sm">Placement Co-ordinator</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="backside">
                                  <div class="card">
                                      <div class="card-body text-center mt-4">
                                          <h4 class="card-title">more info</h4>
                                          <p class="card-text"> 
                                             Student:2nd year,CSE<br>
                                            Phone: +91-9741672080<br>
                                            Email: chandan.cs19@bmsce.ac.in.com</p>
                                          <ul class="list-inline">
                                              <li class="list-inline-item">
                                                  <a class="social-icon text-xs-center" target="_blank" href="#">
                                                      <i class="fa fa-facebook"></i>
                                                  </a>
                                              </li>
                                              <li class="list-inline-item">
                                                  <a class="social-icon text-xs-center" target="_blank" href="#">
                                                      <i class="fa fa-twitter"></i>
                                                  </a>
                                              </li>
                                              <li class="list-inline-item">
                                                  <a class="social-icon text-xs-center" target="_blank" href="http://www.github.com/Chiranjeevicc">
                                                      <i class="fa fa-github"></i>
                                                  </a>
                                              </li>
                                              <li class="list-inline-item">
                                                  <a class="social-icon text-xs-center" target="_blank" href="http://www.instagram.com/mysurien_kannadiga">
                                                      <i class="fa fa-youtube"></i>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- ./Team member -->
                  <!-- Team member -->
                  <div class="col-xs-12 col-sm-6 col-md-4">
                      <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                          <div class="mainflip">
                              <div class="frontside">
                                  <div class="card">
                                      <div class="card-body text-center">
                                          <p><img class=" img-fluid" src="" alt="card image"></p>
                                          <h4 class="card-title">Dr.Pradeepa S</h4>
                                          <p class="card-text"></p>
                                          <a href="#" class="btn btn-primary btn-sm">Professor & Placement officer</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="backside">
                                  <div class="card">
                                      <div class="card-body text-center mt-4">
                                          <h4 class="card-title">more info</h4>
                                          <p class="card-text">
    
                                            
                                            Years of experience: 26<br>
                                            Phone: +91-80-22423789,
                                            +91-80-26603936<br>
                                            Email: bmsceplacement@gmail.com</p>
                                          <ul class="list-inline">
                                              <li class="list-inline-item">
                                                  <a class="social-icon text-xs-center" target="_blank" href="#">
                                                      <i class="fa fa-facebook"></i>
                                                  </a>
                                              </li>
                                              <li class="list-inline-item">
                                                  <a class="social-icon text-xs-center" target="_blank" href="#">
                                                      <i class="fa fa-twitter"></i>
                                                  </a>
                                              </li>
                                              <li class="list-inline-item">
                                                  <a class="social-icon text-xs-center" target="_blank" href="#">
                                                      <i class="fa fa-skype"></i>
                                                  </a>
                                              </li>
                                              <li class="list-inline-item">
                                                  <a class="social-icon text-xs-center" target="_blank" href="#">
                                                      <i class="fa fa-google"></i>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- ./Team member -->
                  <!-- Team member -->
                  <div class="col-xs-12 col-sm-6 col-md-4">
                      <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                          <div class="mainflip">
                              <div class="frontside">
                                  <div class="card">
                                      <div class="card-body text-center">
                                          <p><img class=" img-fluid" src="" alt="card image"></p>
                                          <h4 class="card-title">Dr. J. Sharana Basavaraj</h4>
                                          <a href="" class="btn btn-primary btn-sm">Professor & Placement officer</a>
                                          
                                      </div>
                                  </div>
                              </div>
                              <div class="backside">
                                  <div class="card">
                                      <div class="card-body text-center mt-4">
                                          <h4 class="card-title">more info</h4>
                                          <p class="card-text">
                          
                                            Years of experience: 24<br>
                                            Phone: +91-80-22423789, +91-80-26603936<br>
                                            Email: bmsceplacement@gmail.com</p>
                                          <ul class="list-inline">
                                              <li class="list-inline-item">
                                                  <a class="social-icon text-xs-center" target="_blank" href="#">
                                                      <i class="fa fa-facebook"></i>
                                                  </a>
                                              </li>
                                              <li class="list-inline-item">
                                                  <a class="social-icon text-xs-center" target="_blank" href="#">
                                                      <i class="fa fa-twitter"></i>
                                                  </a>
                                              </li>
                                              <li class="list-inline-item">
                                                  <a class="social-icon text-xs-center" target="_blank" href="#">
                                                      <i class="fa fa-skype"></i>
                                                  </a>
                                              </li>
                                              <li class="list-inline-item">
                                                  <a class="social-icon text-xs-center" target="_blank" href="#">
                                                      <i class="fa fa-google"></i>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- ./Team member -->
                  
              </div>
          </div>
      </section>
    </span>
      <!-- Team -->
      <span id="support">
            <section id="team" class="pb-5">
            <div class="container">
               <h5 class="section-title h1">DEVELOPERS</h5>
                <div class="row">
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="images/dp1.jpeg" alt="card image"></p>
                                            <h4 class="card-title">Chiranjeevi</h4>
                                            
                                            <a href="#" class="btn btn-primary btn-sm">developer Head</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Support's</h4>
                                          <p class="card-text"> 
                                             Student:2nd year,CSE<br>
                                             Phone: +91-9066943894<br>
                                             Email: chiranjeevi.cs19@bmsce.ac.in.com</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="http://www.facebook.com/Chiranjeevi(arya)">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="http://www.instagram.com/mysurien_kannadiga">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="http://www.github.com/Chiranjeevicc">
                                                        <i class="fa fa-github"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                           <!-- Team member -->
                           <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                <div class="mainflip">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <p><img class=" img-fluid" src="dp1.jpeg" alt="card image"></p>
                                                <h4 class="card-title">Chiranjeevi</h4>
                                                
                                                <a href="#" class="btn btn-primary btn-sm">developer Head</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title">Support's</h4>
                                              <p class="card-text"> 
                                                 Student:2nd year,CSE<br>
                                                 Phone: +91-9066943894<br>
                                                 Email: chiranjeevi.cs19@bmsce.ac.in.com</p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="http://www.facebook.com/Chiranjeevi(arya)">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="http://www.instagram.com/mysurien_kannadiga">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="http://www.github.com/Chiranjeevicc">
                                                            <i class="fa fa-github"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./Team member -->
                               <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="dp1.jpeg" alt="card image"></p>
                                            <h4 class="card-title">Chiranjeevi</h4>
                                            
                                            <a href="#" class="btn btn-primary btn-sm">developer Head</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Support's</h4>
                                          <p class="card-text"> 
                                             Student:2nd year,CSE<br>
                                             Phone: +91-9066943894<br>
                                             Email: chiranjeevi.cs19@bmsce.ac.in.com</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="http://www.facebook.com/Chiranjeevi(arya)">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="http://www.instagram.com/mysurien_kannadiga">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="http://www.github.com/Chiranjeevicc">
                                                        <i class="fa fa-github"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    
                </div>
            ;</div>
        </section>
      </span>
        <!-- Team -->


    <!--footer code-->
    <!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="#about"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="#support"><i class="fa fa-angle-double-right"></i>Help</a></li>
						<li><a href="#place_comm"><i class="fa fa-angle-double-right"></i>more</a></li>
            <li><a href=""><i class="fa fa-angle-double-right"></i>Videos</a></li>
            <li><a href="#top"><i class="fa fa-angle-double-right"></i>Home</a></li><br>
					</ul>
        </div>
     
				
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u>B.M.S College Of Engineering,Benglore-19</p>
          <p class="336h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.BMSCE.com" target="_blank">Simple dam's</a></p><br>
          <ul class="list-unstyled list-inline social text-center">
  
           
            <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href=https://www.bmsce.ac.in"><i class="fa fa-youtube"></i></a></li>
            <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href=https://www.bmsce.ac.in"><i class="fa fa-google"></i></a></li>
            <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href=https://www.bmsce.ac.in"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href=https://www.bmsce.ac.in"><i class="fa fa-twitter"></i></a></li><br><br>
            <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" ><i class="fa fa-" aria-hidden="true">Contact <br>+91-80-26622130-35</i></a></li>
           
          </ul>
				</div>
				</hr>
      </div>

	</section>
    <!-- Footer -->

<script>
      $(document).ready(function() {
        // executes when HTML-Document is loaded and DOM is ready
        console.log("document is ready");

        $('[data-toggle="offcanvas"], #navToggle').on("click", function() {
          $(".offcanvas-collapse").toggleClass("open");
        });

        // document ready
      });

      window.onload = function() {
        // executes when complete page is fully loaded, including all frames, objects and images
        console.log("window is loaded");

        // window load
      };
    </script>
  </body>
</html>
