<?php
$GLOBALS['title'] = 'Home: Ajmain Naqib';

?>

<!DOCTYPE html>
<html>
<head>

  <script type="text/javascript">

  var bugs = [

    ""
  ];

  </script>


  <!-- DESCRIPTION -->
  <meta name="description" content="">

  <meta name="keywords"  content="" />

  <?php
  include 'includes/header.php';
  ?>

</head>

<!-- ===========
///// Body /////
================
* Use class "animsition" to enable page transition while page loads.
* Use class "tt-boxed" to enable page boxed layout globally (affects all elements containing class "tt-wrap").
* Use class "tt-dark-style" to enable theme dark style.
-->
<body id="body" class="animsition tt-boxed">





  <!-- *************************************
  *********** Begin body content ***********
  ************************************** -->
  <div id="body-content">


    <!-- ==========================
    ///// Begin intro section /////
    =========================== -->
    <section id="homeBanner" class="home img-bg" style="background: url(assets/img/bg.jpg) 0 0;background-size: cover;">

      <div class="overlay opacity5"></div>
      <div class="container">
        <div class="name-block">
          <div class="name-block-container">

            <h1><span>Hi, I'm</span>Ajmain Naqib</h1>
            <p>a <span id="typed"></span></p>

            <div class="bigIcons">
              <a href=""><i class="fab fa-github"></i></a>
              <a href=""><i class="fas fa-at"></i></a></li>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
            </div>



          </div>
        </div>
        <div class="menu-blocks">
          <div class="about-block menu-block">
            <div class="about-block-container">
              <h2 class="about menu-item">About Me</h2>
            </div>
          </div>
          <div class="portfolio-block  menu-block">
            <div class="portfolio-block-container">
              <h2 class="portfolio menu-item">Photography</h2>
            </div>
          </div>
          <div class="blog-block  menu-block">
            <div class="blog-block-container">
              <h2 class="blog menu-item">Web Development</h2>
            </div>
          </div>
          <div class="contact-block  menu-block">
            <div class="contact-block-container">
              <h2 class="contact menu-item">Graphics Design</h2>
            </div>
          </div>
        </div>



      </section>
      <!-- End intro section -->


      <!--Navbar-->

      <?php
      include 'includes/nav-bar.php';
      ?>

      <!-- =============================
      ///// Begin about me section /////
      ============================== -->
      <section id="about-me-section">
        <div class="about-me-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

          <!-- ======================
          ///// Begin split box /////
          based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height
          ======================= -->
          <div class="split-box about-me">
            <div class="container-fluid">
              <div class="row">
                <div class="row-lg-height">
                  <div class="full-cover for-light-style bg-gray-3 bg-image" style="background-image: url(assets/img/pattern/bg-pattern-1-light.png); background-position: 50% 50%;"></div>
                  <div class="full-cover for-dark-style bg-gray-3 bg-image" style="background-image: url(assets/img/pattern/bg-pattern-1-dark.png); background-position: 50% 50%;"></div>


                  <!-- Column -->
                  <div class="col-lg-2 col-lg-height col-lg-middle split-box-image no-padding bg-image" >

                    <img src="assets/img/misc/me-2.jpg" alt="">

                  </div> <!-- /.col -->

                  <!-- Column -->
                  <div class="col-lg-9 col-lg-height col-lg-middle no-padding">


                    <!-- Begin split box content
                    =============================
                    * Use class "shifted-left" or "shifted-right" to enable shifted content (do not use for long content).
                  -->
                  <div class="split-box-content sb-content-right" >

                    <div class="">       <!--About me -->
                      <div class="tt-heading">
                        <div class="tt-heading-inner">
                          <h1 class="tt-heading-title">About</h1>
                          <div class="tt-heading-subtitle">Who I am and what I do</div>
                          <hr class="hr-short">
                        </div> <!-- /.tt-heading-inner -->
                      </div>
                      <!-- End tt-heading -->

                      <div class="margin-top-20">
                        <p>Hi, my name is <strong>Ajmain Naqib</strong>. I am an artist and photographer.
                          Nemo enim ipsam voluptatem quia voluptas aspernatur aut odit aut fugit. Vivamus at nibh tincidunt,
                           bibendum ligula id. Nemo enim ipsam voluptatem quiatotam rem aperiam, eaque ipsa quae ab illo
                           inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                           <?php // TODO: Add skills with icon here. hover has animation. ?>

                           <div class="margin-top-20">
                             <a href="#contact" class="btn btn-default btn-lg page-scroll"><i class="fa fa-paper-plane"></i>Send Me Message</a>
                    <a href="#" class="btn btn-default btn_color btn-lg"><i class="fa fa-download"></i>Download My CV</a>
                           </div>
                      </div>
                    </div>

                    <!-- Begin signature -->
                    <!-- <div class="signature">
                    <img class="signature-dark" src="assets/img/signature-dark.png" alt="">
                    <img class="signature-light" src="assets/img/signature-light.png" alt="">
                  </div> -->
                  <!-- End signature -->

                </div>
                <!-- End split box content -->

              </div> <!-- /.col -->



            </div>
            <div style="position:relative; padding-left: 6%;padding-right: 6%;">


              <div class="col-lg-4 col-lg-offset-1">
                <div class="margin-top-40">       <!--Educaiton -->
                  <div class="tt-heading">
                    <div class="tt-heading-inner">
                      <h1 class="tt-heading-title">Education</h1>
                      <div class="tt-heading-subtitle">Where I got my diplomas</div>
                      <hr class="hr-short">
                    </div> <!-- /.tt-heading-inner -->
                  </div>
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default experience">
                      <div class="panel-heading" role="tab" id="heading1">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">
                          <p class="date">2017 - Present</p>
                          <p class="job"><strong>University of Wisconsin-Madison</strong><br>Madison, WI</p>
                          <p class="arrow-down css3Animate"><span aria-hidden="true" data-icon="3"></span></p>
                        </a>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                          <ul>
                            <li>Expected Graduation: May 2021 </li>
                            <li>Intended Major: Computer Science</li>
                            <li>Intended Minors: Mathematics, Entrepreneurship</li>
                          </ul>

                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default experience">
                      <div class="panel-heading" role="tab" id="heading2">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="collapsed">
                          <p class="date">2016 - 2017</p>
                          <p class="job"><strong>LaGuardia Community College</strong><br>Long Island City, NY</p>
                          <p class="arrow-down css3Animate"><span aria-hidden="true" data-icon="3"></span></p>
                        </a>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2" aria-expanded="false">
                        <div class="panel-body">

                          <p>Relevent Courses: </p>
                          <ul>
                            <li>Intro to Business (A)</li>
                          </ul>

                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default experience">
                      <div class="panel-heading" role="tab" id="heading3">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed">
                          <p class="date">2015 - 2017</p>
                          <p class="job"><strong>Queensborough Community College</strong><br>Flushing, NY</p>
                          <p class="arrow-down css3Animate"><span aria-hidden="true" data-icon="3"></span></p>
                        </a>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2" aria-expanded="false">
                        <div class="panel-body">
                          <p>Relevent Courses: </p>
                          <ul>
                            <li>Architecture Design Fundamentals (A)</li>
                            <li>Technical Graphics (A-)</li>
                            <li>Business Organization Management (A)</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default experience">
                      <div class="panel-heading" role="tab" id="heading4">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed">
                          <p class="date">2013 - 2017</p>
                          <p class="job"><strong>Newtown High School</strong><br>Queens, NY</p>
                          <p class="arrow-down css3Animate"><span aria-hidden="true" data-icon="3"></span></p>
                        </a>
                      </div>
                      <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2" aria-expanded="false">
                        <div class="panel-body">
                          <div class="col-lg-6">
                            <ul>
                              <li>Class <b>Salutatorian</b></li>
                              <li> National Honor Society based on academic performance and leadership skills</li>
                              <li>Mu Alpha Theta Honor Society based on mathematics performance</li>
                            </ul>
                          </div>
                          <div class="col-lg-6">
                            <p>Relevent Courses: </p>
                            <ul>
                              <li>AP Calculus BC</li>
                              <li>AP Human Geography</li>
                              <li>AP Literature</li>
                              <li>AP Biology</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="margin-top-40">       <!--Professional Experiences -->
                  <div class="tt-heading">
                    <div class="tt-heading-inner">
                      <h1 class="tt-heading-title">Highlighted Experiences</h1>
                      <div class="tt-heading-subtitle">A few of my jobs</div>
                      <hr class="hr-short">
                    </div> <!-- /.tt-heading-inner -->
                  </div>
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default experience">
                      <div class="panel-heading" role="tab" id="heading5">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5" class="collapsed">
                          <p class="date">Jan 2018 - Present</p>
                          <p class="job"><strong>Dairy Management</strong>, University of Wisconsin-Madison, WI
                          <br> <i>LAMP-stack Web Developer</i>
                          </p>
                          <p class="arrow-down css3Animate"><span aria-hidden="true" data-icon="3"></span></p>
                        </a>
                      </div>
                      <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                          <ul>
                            <li>Developing a new responsive website and migrating it’s content from old website</li>
                            <li>Developing new and refining pre-existing research web application in JavaScript and PHP </li>
                            <li>Managing a Linux based server with scheduled tasks for data retrieval, database, and overall performance to ensure fast user experience for researchers.</li>
                            <?php // TODO: ADD LINK TO WEBSITE AND PROJECTS I'VE DONE ?>
                          </ul>

                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default experience">
                      <div class="panel-heading" role="tab" id="heading6">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6" class="collapsed">
                          <p class="date">Aug 2017 - Present</p>
                          <p class="job"><strong>FPsc Genetics</strong>,University of Wisconsin-Madison, WI<br>
                            <i>Web Developer</i>
                          </p>
                          <p class="arrow-down css3Animate"><span aria-hidden="true" data-icon="3"></span></p>
                        </a>
                      </div>
                      <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6" aria-expanded="false">
                        <div class="panel-body">
                          <ul>
                            <li>Developing a responsive website in HTML, PHP, and SCSS for the biochemistry department which integrates with pre-existing applications based on an older website </li>
                            <li>Managing a Linux based server containing MySQL database based simulation applications and a WordPress blog </li>
                          </ul>

                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default experience">
                      <div class="panel-heading" role="tab" id="heading7">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7" class="collapsed">
                          <p class="date">2015 - 2017</p>
                          <p class="job"><strong>Picturesque Studio	</strong>, Queens, NY<br>
                            <i>Co-Founder</i> </p>
                          <p class="arrow-down css3Animate"><span aria-hidden="true" data-icon="3"></span></p>
                        </a>
                      </div>
                      <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7" aria-expanded="false">
                        <div class="panel-body">
                          <p>Tasks? Duties? </p> <?php // TODO: Better grammer ?>
                          <ul>
                            <li>Coordinate and manage studio team of 3 professionals in social (ex. wedding, birthdays) and corporate events</li>
                            <li>Assist in video field production and post-process the films to produce films for ten clients</li>
                            <li> <?php // TODO: Add another line ?> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default experience">
                      <div class="panel-heading" role="tab" id="heading8">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8" class="collapsed">
                          <p class="date">(2013 - 2017)</p>
                          <p class="job"><strong>Career and Technical Education</strong><br>Queens, NY</p>
                          <p class="arrow-down css3Animate"><span aria-hidden="true" data-icon="3"></span></p>
                        </a>
                      </div>
                      <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8" aria-expanded="false">
                        <div class="panel-body">
                          <div class="col-lg-6">
                            <ul>
                              <li>Develop and manage websites based on client’s need</li>
                              <li>Handle technical issues within an enterprise environment, including system crashes, slow-downs and data recoveries</li>
                              <li> <?php // TODO: Add another one ?></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>
          <!-- End split box content -->




        </div> <!-- /.container -->
      </div>
      <!-- End split box -->

    </div> <!-- /.about-me-inner -->
  </section>
  <!-- End about me section -->






  <!-- =================================
  ///// Begin gallery list section /////
  ================================== -->
  <section id="gallery-list-section">

    <!-- Begin tt-heading
    ======================
    * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
    * Use class "text-center" or "text-right" to align tt-heading.
    * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
  -->
  <div class="tt-heading tt-heading-lg padding-on text-center">
    <div class="tt-heading-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
      <h1 class="tt-heading-title">My Services</h1>
      <div class="tt-heading-subtitle">You can hire me as a freelancer / <a href="contact.php">Request a Custom Quota</a></div>
      <hr class="hr-short">
    </div> <!-- /.tt-heading-inner -->
  </div>
  <!-- End tt-heading -->



</section>
<!-- End gallery list section -->

<!-- =================================
///// Begin testimonials section /////
================================== -->
<section id="testimonials-section" class="bg-dark bg-image-fixed" style="background-image: url(assets/img/misc/misc-4.jpg); background-position: 50% 50%;">

  <!-- Element cover -->
  <span class="cover bg-transparent-7-dark"></span>

  <div class="testimonials-section-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

    <!-- Begin testimonials carousel
    =================================
    * Use class "tm-hide-image" to hide testimonial image.
    * Use class "tm-center" or "tm-right" to align testimonials.
  -->
  <div class="testimonials-carousel tm-center">

    <!-- Begin tt-heading
    ======================
    * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
    * Use class "text-center" or "text-right" to align tt-heading.
    * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
  -->
  <!-- <div class="tt-heading tt-heading-lg text-center">
  <div class="tt-heading-inner tt-wrap">
  <h1 class="tt-heading-title text-white">Testimonials</h1>
  <div class="tt-heading-subtitle text-gray-3">What customers say</div>
  <hr class="hr-short">
</div>
</div> -->
<!-- End tt-heading -->


<!-- Begin content carousel (https://owlcarousel2.github.io/OwlCarousel2/)
====================================================================
* Use class "nav-outside" for outside nav (requires boxed layout).
* Use class "nav-outside-top" for outside top nav (requires enough space at the top of the carousel).
* Use class "nav-bottom-right" for bottom right nav.
* Use class "nav-rounded" for rounded nav.
* Use class "nav-light" to enable nav light style.
* Use class "dots-outside" for outside dots (requires enough space at the bottom of the carousel).
* Use class "dots-left", "dots-right" or "dots-center-right" to align dots.
* Use class "dots-rounded" for rounded dots.
* Use class "owl-mousewheel" to enable mousewheel support.
* Use class "cursor-grab" to enable cursor grab icon (no effect on links!).
* Use class "cc-hover-light", "cc-hover-dark" or "cc-hover-zoom" to enable carousel items hover effect.
* Use class "cc-height-1", "cc-height-2", "cc-height-3", "cc-height-4", "cc-height-5", "cc-height-6" or "cc-height-full" to set carousel height (do not use with data-autoheight="true"!!!).
* Use class "cc-height-m" to set full height for small screens (do not use with data-autoheight="true"!!!).
================================================================
* Available carousel data attributes:
data-items="5".......................(items visible on desktop)
data-tablet-landscape="4"............(items visible on mobiles)
data-tablet-portrait="3".............(items visible on mobiles)
data-mobile-landscape="2"............(items visible on tablets)
data-mobile-portrait="1".............(items visible on tablets)
data-loop="true".....................(true/false)
data-margin="10".....................(space between items)
data-center="true"...................(true/false)
data-start-position="0"..............(item start position)
data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)
data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)
data-mouse-drag="false"..............(true/false)
data-touch-drag="false"..............(true/false)
data-autoheight="true"...............(true/false)
data-autoplay="true".................(true/false)
data-autoplay-timeout="5000".........(milliseconds)
data-autoplay-hover-pause="true".....(true/false)
data-autoplay-speed="800"............(milliseconds)
data-drag-end-speed="800"............(milliseconds)
data-nav="true"......................(true/false)
data-nav-speed="800".................(milliseconds)
data-dots="false"....................(true/false)
data-dots-speed="800"................(milliseconds)
-->
<div class="owl-carousel cursor-grab nav-outside dots-outside" data-items="1" data-loop="true" data-autoheight="true" data-nav="true" data-nav-speed="500" data-dots-speed="500" data-autoplay="true" data-autoplay-timeout="8000" data-autoplay-speed="500" data-autoplay-hover-pause="true">

  <!-- Begin carousel item
  ========================= -->
  <div class="cc-item">

    <!-- Begin testimonial item -->
    <div class="testimonial-item text-white">
      <div class="tm-image bg-image" style="background-image: url(assets/img/blog/small/avatar/avatar-2.jpg); background-position: 50% 50%;"></div>
      <blockquote>
        <p>"Duis vel ligula non neque varius eleifend quis id elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse lacus dui, pellentesque ut porta et, consequat sit amet."</p>
        <small>Anna Clarkson</small>
      </blockquote>
    </div>
    <!-- End testimonial item -->

  </div>
  <!-- End carousel item -->

  <!-- Begin carousel item
  ========================= -->
  <div class="cc-item">

    <!-- Begin testimonial item -->
    <div class="testimonial-item text-white">
      <div class="tm-image bg-image" style="background-image: url(assets/img/blog/small/avatar/avatar-3.jpg); background-position: 50% 50%;"></div>
      <blockquote>
        <p>"Maecenas sit amet diam iaculis, lobortis tortor sed, bibendum quam. Nam mauris odio, sodales interdum facilisis in, dignissim et massa. In suscipit quam nisi."</p>
        <small>John Smith</small>
      </blockquote>
    </div>
    <!-- End testimonial item -->

  </div>
  <!-- End carousel item -->

  <!-- Begin carousel item
  ========================= -->
  <div class="cc-item">

    <!-- Begin testimonial item -->
    <div class="testimonial-item text-white">
      <div class="tm-image bg-image" style="background-image: url(assets/img/blog/small/avatar/avatar-4.jpg); background-position: 50% 50%;"></div>
      <blockquote>
        <p>"Proin at tincidunt leo. Morbi ut metus sit amet purus molestie sollicitudin. Maecenas convallis est vitae neque feugiat, in accumsan odio vestibulum. Pellentesque sodales fermentum porttitor."</p>
        <small>Jack Paterson</small>
      </blockquote>
    </div>
    <!-- End testimonial item -->

  </div>
  <!-- End carousel item -->

</div>
<!-- End content carousel -->

</div>
<!-- End testimonials carousel -->

</div> <!-- /.tt-intro-inner -->
</section>
<!-- End testimonials section -->



<!-- ===================================
///// Begin call to action section /////
==================================== -->
<section class="call-to-action-section bg-gray-3 margin-top-60">

  <div class="full-cover for-light-style bg-image" style="background-image: url(assets/img/pattern/bg-pattern-2-light.png); background-position: 50% 50%;"></div>
  <div class="full-cover for-dark-style bg-image" style="background-image: url(assets/img/pattern/bg-pattern-2-dark.png); background-position: 50% 50%;"></div>

  <div class="call-to-action-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
    <div class="row">
      <div class="col-md-12 text-center">

        <!-- Begin tt-heading
        ======================
        * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
        * Use class "text-center" or "text-right" to align tt-heading.
        * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
      -->
      <div class="tt-heading tt-heading-lg text-center">
        <div class="tt-heading-inner tt-wrap">
          <h1 class="tt-heading-title">What Next?</h1>
          <div class="tt-heading-subtitle">Interested in working with me?</div>
          <hr class="hr-short">
        </div>
      </div>
      <!-- End tt-heading -->

      <div class="margin-top-30 max-width-1000 margin-auto">
        <p>Fusce et velit sed augue rhoncus tempor. Sed ac lacinia augue, nec lacinia felis. Sed sit amet diam leo. Praesent vel malesuada arcu. Donec mattis, arcu vel vehicula feugiat, sem turpis dignissim ex, eu sollicitudin neque.</p>

        <div class="margin-top-30">
          <a href="page-dummy-modern.html" class="btn btn-dark margin-top-5 margin-right-5">Read More</a>
          <a href="contact.html" class="btn btn-primary margin-top-5">Let's Work Together!</a>
        </div>
      </div>

    </div> <!-- /.col -->
  </div> <!-- /.row -->
</div> <!-- /.call-to-action-inner -->
</section>
<!-- End call to action section -->


<!-- =================================
///// Begin gallery list section /////
================================== -->
<section id="gallery-list-section">

  <!-- Begin tt-heading
  ======================
  * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
  * Use class "text-center" or "text-right" to align tt-heading.
  * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
-->
<div class="tt-heading tt-heading-lg padding-on text-center">
  <div class="tt-heading-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
    <h1 class="tt-heading-title">Latest Works</h1>
    <div class="tt-heading-subtitle">My latest photo projects / <a href="categories-grid.html">View All</a></div>
    <hr class="hr-short">
  </div> <!-- /.tt-heading-inner -->
</div>
<!-- End tt-heading -->

<div class="isotope-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

  <!-- Begin isotope
  ===================
  * Use class "gutter-1", "gutter-2" or "gutter-3" to add more space between items.
  * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
-->
<div class="isotope col-4">

  <!-- Begin isotope items wrap
  ==============================
  * Use class "gli-alter-1", "gli-alter-2", "gli-alter-3", "gli-alter-4" or "gli-alter-5" to change gallery list item style.
  * Use class "gli-dark" or "gli-colored" to enable colored hover overlay (effect only with default hover overlay and "gli-alter-4", "gli-alter-5" classes!).
  * Use class "gli-frame" to enable image frames.
-->
<div class="isotope-items-wrap gli-colored gli-alter-4">

  <!-- Grid sizer (do not remove!!!) -->
  <div class="grid-sizer"></div>


  <!-- =====================
  /// Begin isotope item ///
  ==========================
  * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
-->
<div class="isotope-item iso-height-1">

  <!-- Begin gallery list item -->
  <div class="gallery-list-item">

    <!-- Begin gallery list item image -->
    <div class="gl-item-image-wrap">

      <!-- Begin gallery list item image inner -->
      <a href="gallery-single-grid.html" class="gl-item-image-inner">
        <div class="gl-item-image bg-image" style="background-image: url(assets/img/gallery/gallery-list/gallery-list-1.jpg); background-position: 50% 50%"></div>

        <span class="gl-item-image-zoom"></span>
      </a>
      <!-- End gallery list item image inner -->

      <!-- Begin gallery list item meta -->
      <ul class="gli-meta">
        <li>
          <!-- Begin favorite button -->
          <div class="favorite-btn">
            <div class="fav-inner">
              <div class="icon-heart">
                <span class="icon-heart-empty"></span>
                <span class="icon-heart-filled"></span>
              </div>
            </div>
            <div class="fav-count">49</div>
          </div>
          <!-- End favorite button -->
        </li>
      </ul>
      <!-- End gallery list item meta -->

    </div>
    <!-- End gallery list item image -->

    <!-- Begin gallery list item info -->
    <div class="gl-item-info">
      <div class="gl-item-caption">
        <h2 class="gl-item-title"><a href="gallery-single-grid.html">The Old Man Dreams</a></h2>
        <span class="gl-item-category"><a href="albums-archive.html">Outdoor</a></span>
      </div>
    </div>
    <!-- End gallery list item info -->

  </div>
  <!-- End gallery list item -->

</div>
<!-- End isotope item -->

<!-- =====================
/// Begin isotope item ///
==========================
* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
-->
<div class="isotope-item iso-height-1">

<!-- Begin gallery list item -->
<div class="gallery-list-item">

  <!-- Begin gallery list item image -->
  <div class="gl-item-image-wrap">

    <!-- Begin gallery list item image inner -->
    <a href="gallery-single-grid.html" class="gl-item-image-inner">
      <div class="gl-item-image bg-image" style="background-image: url(assets/img/gallery/gallery-list/gallery-list-2.jpg); background-position: 50% 50%"></div>

      <span class="gl-item-image-zoom"></span>
    </a>
    <!-- End gallery list item image inner -->

    <!-- Begin gallery list item meta -->
    <ul class="gli-meta">
      <!-- <li>
      <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
    </li> -->
    <li>
      <!-- Begin favorite button -->
      <div class="favorite-btn">
        <div class="fav-inner">
          <div class="icon-heart">
            <span class="icon-heart-empty"></span>
            <span class="icon-heart-filled"></span>
          </div>
        </div>
        <div class="fav-count">85</div>
      </div>
      <!-- End favorite button -->
    </li>
  </ul>
  <!-- End gallery list item meta -->

</div>
<!-- End gallery list item image -->

<!-- Begin gallery list item info -->
<div class="gl-item-info">
  <div class="gl-item-caption">
    <h2 class="gl-item-title"><a href="gallery-single-grid.html">These Wonderful Freckles</a></h2>
    <span class="gl-item-category"><a href="albums-archive.html">Black &amp; White</a></span>
  </div>
</div>
<!-- End gallery list item info -->

</div>
<!-- End gallery list item -->

</div>
<!-- End isotope item -->

<!-- =====================
/// Begin isotope item ///
==========================
* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
-->
<div class="isotope-item iso-height-1">

<!-- Begin gallery list item -->
<div class="gallery-list-item">

  <!-- Begin gallery list item image -->
  <div class="gl-item-image-wrap">

    <!-- Begin gallery list item image inner -->
    <a href="gallery-single-grid.html" class="gl-item-image-inner">
      <div class="gl-item-image bg-image" style="background-image: url(assets/img/gallery/gallery-list/gallery-list-3.jpg); background-position: 50% 50%"></div>

      <span class="gl-item-image-zoom"></span>
    </a>
    <!-- End gallery list item image inner -->

    <!-- Begin gallery list item meta -->
    <ul class="gli-meta">
      <!-- <li>
      <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
    </li> -->
    <li>
      <!-- Begin favorite button -->
      <div class="favorite-btn">
        <div class="fav-inner">
          <div class="icon-heart">
            <span class="icon-heart-empty"></span>
            <span class="icon-heart-filled"></span>
          </div>
        </div>
        <div class="fav-count">7</div>
      </div>
      <!-- End favorite button -->
    </li>
  </ul>
  <!-- End gallery list item meta -->

</div>
<!-- End gallery list item image -->

<!-- Begin gallery list item info -->
<div class="gl-item-info">
  <div class="gl-item-caption">
    <h2 class="gl-item-title"><a href="gallery-single-grid.html">Paris Fashion Week</a></h2>
    <span class="gl-item-category"><a href="albums-archive.html">Fashion</a></span>
  </div>
</div>
<!-- End gallery list item info -->

</div>
<!-- End gallery list item -->

</div>
<!-- End isotope item -->

<!-- =====================
/// Begin isotope item ///
==========================
* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
-->
<div class="isotope-item iso-height-1">

<!-- Begin gallery list item -->
<div class="gallery-list-item">

  <!-- Begin gallery list item image -->
  <div class="gl-item-image-wrap">

    <!-- Begin gallery list item image inner -->
    <a href="gallery-single-grid.html" class="gl-item-image-inner">
      <div class="gl-item-image bg-image" style="background-image: url(assets/img/gallery/gallery-list/gallery-list-4.jpg); background-position: 50% 50%"></div>

      <span class="gl-item-image-zoom"></span>
    </a>
    <!-- End gallery list item image inner -->

    <!-- Begin gallery list item meta -->
    <ul class="gli-meta">
      <!-- <li>
      <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
    </li> -->
    <li>
      <!-- Begin favorite button -->
      <div class="favorite-btn">
        <div class="fav-inner">
          <div class="icon-heart">
            <span class="icon-heart-empty"></span>
            <span class="icon-heart-filled"></span>
          </div>
        </div>
        <div class="fav-count">12</div>
      </div>
      <!-- End favorite button -->
    </li>
  </ul>
  <!-- End gallery list item meta -->

</div>
<!-- End gallery list item image -->

<!-- Begin gallery list item info -->
<div class="gl-item-info">
  <div class="gl-item-caption">
    <h2 class="gl-item-title"><a href="gallery-single-grid.html">Afternoon Photoshoot</a></h2>
    <span class="gl-item-category"><a href="albums-archive.html">Outdoor</a></span>
  </div>
</div>
<!-- End gallery list item info -->

</div>
<!-- End gallery list item -->

</div>
<!-- End isotope item -->

<!-- =====================
/// Begin isotope item ///
==========================
* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
-->
<div class="isotope-item iso-height-1">

<!-- Begin gallery list item -->
<div class="gallery-list-item">

  <!-- Begin gallery list item image -->
  <div class="gl-item-image-wrap">

    <!-- Begin gallery list item image inner -->
    <a href="gallery-single-grid.html" class="gl-item-image-inner">
      <div class="gl-item-image bg-image" style="background-image: url(assets/img/gallery/gallery-list/gallery-list-5.jpg); background-position: 50% 50%"></div>

      <span class="gl-item-image-zoom"></span>
    </a>
    <!-- End gallery list item image inner -->

    <!-- Begin gallery list item meta -->
    <ul class="gli-meta">
      <!-- <li>
      <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
    </li> -->
    <li>
      <!-- Begin favorite button -->
      <div class="favorite-btn">
        <div class="fav-inner">
          <div class="icon-heart">
            <span class="icon-heart-empty"></span>
            <span class="icon-heart-filled"></span>
          </div>
        </div>
        <div class="fav-count">96</div>
      </div>
      <!-- End favorite button -->
    </li>
  </ul>
  <!-- End gallery list item meta -->

</div>
<!-- End gallery list item image -->

<!-- Begin gallery list item info -->
<div class="gl-item-info">
  <div class="gl-item-caption">
    <h2 class="gl-item-title"><a href="gallery-single-grid.html">Sit Back and Relax</a></h2>
    <span class="gl-item-category"><a href="albums-archive.html">Portraits</a></span>
  </div>
</div>
<!-- End gallery list item info -->

</div>
<!-- End gallery list item -->

</div>
<!-- End isotope item -->

<!-- =====================
/// Begin isotope item ///
==========================
* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
-->
<div class="isotope-item iso-height-1">

<!-- Begin gallery list item -->
<div class="gallery-list-item">

  <!-- Begin gallery list item image -->
  <div class="gl-item-image-wrap">

    <!-- Begin gallery list item image inner -->
    <a href="gallery-single-grid.html" class="gl-item-image-inner">
      <div class="gl-item-image bg-image" style="background-image: url(assets/img/gallery/gallery-list/gallery-list-6.jpg); background-position: 50% 50%"></div>

      <span class="gl-item-image-zoom"></span>
    </a>
    <!-- End gallery list item image inner -->

    <!-- Begin gallery list item meta -->
    <ul class="gli-meta">
      <!-- <li>
      <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
    </li> -->
    <li>
      <!-- Begin favorite button -->
      <div class="favorite-btn">
        <div class="fav-inner">
          <div class="icon-heart">
            <span class="icon-heart-empty"></span>
            <span class="icon-heart-filled"></span>
          </div>
        </div>
        <div class="fav-count">56</div>
      </div>
      <!-- End favorite button -->
    </li>
  </ul>
  <!-- End gallery list item meta -->

</div>
<!-- End gallery list item image -->

<!-- Begin gallery list item info -->
<div class="gl-item-info">
  <div class="gl-item-caption">
    <h2 class="gl-item-title"><a href="gallery-single-grid.html">Something In The Water vol.2</a></h2>
    <span class="gl-item-category"><a href="albums-archive.html">Fashion</a>, <a href="albums-archive.html">Outdoor</a></span>
  </div>
</div>
<!-- End gallery list item info -->

</div>
<!-- End gallery list item -->

</div>
<!-- End isotope item -->

<!-- =====================
/// Begin isotope item ///
==========================
* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
-->
<div class="isotope-item iso-height-1">

<!-- Begin gallery list item -->
<div class="gallery-list-item">

  <!-- Begin gallery list item image -->
  <div class="gl-item-image-wrap">

    <!-- Begin gallery list item image inner -->
    <a href="gallery-single-grid.html" class="gl-item-image-inner">
      <div class="gl-item-image bg-image" style="background-image: url(assets/img/gallery/gallery-list/gallery-list-7.jpg); background-position: 50% 50%"></div>

      <span class="gl-item-image-zoom"></span>
    </a>
    <!-- End gallery list item image inner -->

    <!-- Begin gallery list item meta -->
    <ul class="gli-meta">
      <!-- <li>
      <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
    </li> -->
    <li>
      <!-- Begin favorite button -->
      <div class="favorite-btn">
        <div class="fav-inner">
          <div class="icon-heart">
            <span class="icon-heart-empty"></span>
            <span class="icon-heart-filled"></span>
          </div>
        </div>
        <div class="fav-count">53</div>
      </div>
      <!-- End favorite button -->
    </li>
  </ul>
  <!-- End gallery list item meta -->

</div>
<!-- End gallery list item image -->

<!-- Begin gallery list item info -->
<div class="gl-item-info">
  <div class="gl-item-caption">
    <h2 class="gl-item-title"><a href="gallery-single-grid.html">Autumn Nights</a></h2>
    <span class="gl-item-category"><a href="albums-archive.html">Outdoor</a></span>
  </div>
</div>
<!-- End gallery list item info -->

</div>
<!-- End gallery list item -->

</div>
<!-- End isotope item -->

<!-- =====================
/// Begin isotope item ///
==========================
* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
-->
<div class="isotope-item iso-height-1">

<!-- Begin gallery list item -->
<div class="gallery-list-item">

  <!-- Begin gallery list item image -->
  <div class="gl-item-image-wrap">

    <!-- Begin gallery list item image inner -->
    <a href="gallery-single-grid.html" class="gl-item-image-inner">
      <div class="gl-item-image bg-image" style="background-image: url(assets/img/gallery/gallery-list/gallery-list-8.jpg); background-position: 50% 50%"></div>

      <span class="gl-item-image-zoom"></span>
    </a>
    <!-- End gallery list item image inner -->

    <!-- Begin gallery list item meta -->
    <ul class="gli-meta">
      <!-- <li>
      <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
    </li> -->
    <li>
      <!-- Begin favorite button -->
      <div class="favorite-btn">
        <div class="fav-inner">
          <div class="icon-heart">
            <span class="icon-heart-empty"></span>
            <span class="icon-heart-filled"></span>
          </div>
        </div>
        <div class="fav-count">71</div>
      </div>
      <!-- End favorite button -->
    </li>
  </ul>
  <!-- End gallery list item meta -->

</div>
<!-- End gallery list item image -->

<!-- Begin gallery list item info -->
<div class="gl-item-info">
  <div class="gl-item-caption">
    <h2 class="gl-item-title"><a href="gallery-single-grid.html">Beauty &amp; Fashion</a></h2>
    <span class="gl-item-category"><a href="albums-archive.html">Fashion</a></span>
  </div>
</div>
<!-- End gallery list item info -->

</div>
<!-- End gallery list item -->

</div>
<!-- End isotope item -->

<!-- =====================
/// Begin isotope item ///
==========================
* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
-->
<div class="isotope-item iso-height-1">

<!-- Begin gallery list item -->
<div class="gallery-list-item">

  <!-- Begin gallery list item image -->
  <div class="gl-item-image-wrap">

    <!-- Begin gallery list item image inner -->
    <a href="gallery-single-grid.html" class="gl-item-image-inner">
      <div class="gl-item-image bg-image" style="background-image: url(assets/img/gallery/gallery-list/gallery-list-9.jpg); background-position: 50% 50%"></div>

      <span class="gl-item-image-zoom"></span>
    </a>
    <!-- End gallery list item image inner -->

    <!-- Begin gallery list item meta -->
    <ul class="gli-meta">
      <!-- <li>
      <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
    </li> -->
    <li>
      <!-- Begin favorite button -->
      <div class="favorite-btn">
        <div class="fav-inner">
          <div class="icon-heart">
            <span class="icon-heart-empty"></span>
            <span class="icon-heart-filled"></span>
          </div>
        </div>
        <div class="fav-count">68</div>
      </div>
      <!-- End favorite button -->
    </li>
  </ul>
  <!-- End gallery list item meta -->

</div>
<!-- End gallery list item image -->

<!-- Begin gallery list item info -->
<div class="gl-item-info">
  <div class="gl-item-caption">
    <h2 class="gl-item-title"><a href="gallery-single-grid.html">No Colors This Time</a></h2>
    <span class="gl-item-category"><a href="albums-archive.html">Black &amp; White</a></span>
  </div>
</div>
<!-- End gallery list item info -->

</div>
<!-- End gallery list item -->

</div>
<!-- End isotope item -->

<!-- =====================
/// Begin isotope item ///
==========================
* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
-->
<div class="isotope-item iso-height-1">

<!-- Begin gallery list item -->
<div class="gallery-list-item">

  <!-- Begin gallery list item image -->
  <div class="gl-item-image-wrap">

    <!-- Begin gallery list item image inner -->
    <a href="gallery-single-grid.html" class="gl-item-image-inner">
      <div class="gl-item-image bg-image" style="background-image: url(assets/img/gallery/gallery-list/gallery-list-10.jpg); background-position: 50% 50%"></div>

      <span class="gl-item-image-zoom"></span>
    </a>
    <!-- End gallery list item image inner -->

    <!-- Begin gallery list item meta -->
    <ul class="gli-meta">
      <!-- <li>
      <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
    </li> -->
    <li>
      <!-- Begin favorite button -->
      <div class="favorite-btn">
        <div class="fav-inner">
          <div class="icon-heart">
            <span class="icon-heart-empty"></span>
            <span class="icon-heart-filled"></span>
          </div>
        </div>
        <div class="fav-count">32</div>
      </div>
      <!-- End favorite button -->
    </li>
  </ul>
  <!-- End gallery list item meta -->

</div>
<!-- End gallery list item image -->

<!-- Begin gallery list item info -->
<div class="gl-item-info">
  <div class="gl-item-caption">
    <h2 class="gl-item-title"><a href="gallery-single-grid.html">Monday's Monochromes</a></h2>
    <span class="gl-item-category"><a href="albums-archive.html">Outdoor</a></span>
  </div>
</div>
<!-- End gallery list item info -->

</div>
<!-- End gallery list item -->

</div>
<!-- End isotope item -->

<!-- =====================
/// Begin isotope item ///
==========================
* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
-->
<div class="isotope-item iso-height-1">

<!-- Begin gallery list item -->
<div class="gallery-list-item">

  <!-- Begin gallery list item image -->
  <div class="gl-item-image-wrap">

    <!-- Begin gallery list item image inner -->
    <a href="gallery-single-grid.html" class="gl-item-image-inner">
      <div class="gl-item-image bg-image" style="background-image: url(assets/img/gallery/gallery-list/gallery-list-11.jpg); background-position: 50% 50%"></div>

      <span class="gl-item-image-zoom"></span>
    </a>
    <!-- End gallery list item image inner -->

    <!-- Begin gallery list item meta -->
    <ul class="gli-meta">
      <!-- <li>
      <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
    </li> -->
    <li>
      <!-- Begin favorite button -->
      <div class="favorite-btn">
        <div class="fav-inner">
          <div class="icon-heart">
            <span class="icon-heart-empty"></span>
            <span class="icon-heart-filled"></span>
          </div>
        </div>
        <div class="fav-count">13</div>
      </div>
      <!-- End favorite button -->
    </li>
  </ul>
  <!-- End gallery list item meta -->

</div>
<!-- End gallery list item image -->

<!-- Begin gallery list item info -->
<div class="gl-item-info">
  <div class="gl-item-caption">
    <h2 class="gl-item-title"><a href="gallery-single-grid.html">Something In The Water</a></h2>
    <span class="gl-item-category"><a href="albums-archive.html">Fashion</a>, <a href="albums-archive.html">Portraits</a></span>
  </div>
</div>
<!-- End gallery list item info -->

</div>
<!-- End gallery list item -->

</div>
<!-- End isotope item -->

<!-- =====================
/// Begin isotope item ///
==========================
* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
-->
<div class="isotope-item iso-height-1">

<!-- Begin gallery list item -->
<div class="gallery-list-item">

  <!-- Begin gallery list item image -->
  <div class="gl-item-image-wrap">

    <!-- Begin gallery list item image inner -->
    <a href="gallery-single-grid.html" class="gl-item-image-inner">
      <div class="gl-item-image bg-image" style="background-image: url(assets/img/gallery/gallery-list/gallery-list-12.jpg); background-position: 50% 50%"></div>

      <span class="gl-item-image-zoom"></span>
    </a>
    <!-- End gallery list item image inner -->

    <!-- Begin gallery list item meta -->
    <ul class="gli-meta">
      <!-- <li>
      <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
    </li> -->
    <li>
      <!-- Begin favorite button -->
      <div class="favorite-btn">
        <div class="fav-inner">
          <div class="icon-heart">
            <span class="icon-heart-empty"></span>
            <span class="icon-heart-filled"></span>
          </div>
        </div>
        <div class="fav-count">11</div>
      </div>
      <!-- End favorite button -->
    </li>
  </ul>
  <!-- End gallery list item meta -->

</div>
<!-- End gallery list item image -->

<!-- Begin gallery list item info -->
<div class="gl-item-info">
  <div class="gl-item-caption">
    <h2 class="gl-item-title"><a href="gallery-single-grid.html">Beautiful Bride</a></h2>
    <span class="gl-item-category"><a href="albums-archive.html">Outdoor</a>, <a href="albums-archive.html">Fashion</a></span>
  </div>
</div>
<!-- End gallery list item info -->

</div>
<!-- End gallery list item -->

</div>
<!-- End isotope item -->

</div>
<!-- End isotope items wrap -->


<!-- Begin isotope pagination
============================== -->
<!-- <div class="isotope-pagination">
<div class="iso-load-more">
<a class="btn btn-dark-bordered btn-lg" href="">View More <i class="fas fa-refresh"></i></a>
</div>
</div> -->
<!-- End isotope pagination -->

</div>
<!-- End isotope -->

</div> <!-- /.isotope-wrap -->
</section>
<!-- End gallery list section -->



<!--FOOTER & scripts-->
<?php
include 'includes/footer.php';
?>
<!-- /FOOTER scripts-->
</div>
<!-- End body content -->

</body>

</html>
