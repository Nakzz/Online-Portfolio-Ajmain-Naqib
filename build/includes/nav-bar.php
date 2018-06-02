<!-- =================
//// Begin header ////
======================
* Use class "header-show-hide-on-scroll" to hide header on scroll down and show on scroll up.
* Use class "header-fixed-top" to set header to fixed position.
* Use class "header-transparent" to set header to transparent.
* Use class "menu-align-left" to align menu to left.
* Use class "menu-align-right" to align menu to right.
* Use class "menu-align-center" to align menu to center (do not use with header classes!).
-->
<header id="header" class="header-transparent header-show-hide-on-scroll menu-align-right">

  <!-- Begin header inner -->
  <div class="header-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

    <!-- Begin logo
    ================
    <div id="logo">
      <a href="index.html" class="logo-dark"><img src="assets/img/logo.png" alt="logo"></a>
      <a href="index.html" class="logo-light"><img src="assets/img/logo-light.png" alt="logo"></a>

      <!-- for small screens 
      <a href="index.html" class="logo-dark-m"><img src="assets/img/logo-dark-m.png" alt="logo"></a>
      <a href="index.html" class="logo-light-m"><img src="assets/img/logo-light-m.png" alt="logo"></a>
    </div>
    <!-- End logo -->

    <!-- ====================
    //// Begin main menu ////
    ===================== -->
    <nav class="tt-main-menu">

      <!-- Begin mobile menu toggle button -->
      <div id="tt-m-menu-toggle-btn">
        <span></span>
      </div>
      <!-- End mobile menu toggle button -->

      <!-- Begin menu tools
      ====================== -->
      <div class="tt-menu-tools">
        <ul>
          <!-- Begin search
          <li>
            <a href="#" class="tt-clobal-search-trigger"><i class="fas fa-search"></i></a>
            <div class="tt-clobal-search">
              <div class="tt-clobal-search-inner">
                <span class="tt-clobal-search-title">Search</span>
                <form id="tt-clobal-search-form" class="form-btn-inside" method="get" action="search-results.html">
                  <input type="text" id="tt-clobal-search-input" name="search" placeholder="Type your keywords ...">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </form>
              </div> <!-- /.tt-clobal-search-inner
              <div class="tt-clobal-search-close"><i class="tt-close-btn tt-close-light"></i></div>
            </div> <!-- /.tt-clobal-search
          </li>
          <!-- End search -->


        </ul>
      </div>
      <!-- End menu tools -->

      <!-- Collect the nav links for toggling
      ========================================
      * Use class "tt-submenu-dark" to enable submenu dark style.
      -->
      <div class="tt-menu-collapse tt-submenu-dark">
        <ul class="tt-menu-nav">

          <!-- Begin submenu (submenu master)
          ==================================== -->
          <li class="tt-submenu-wrap tt-submenu-master">
            <a href="#0">Home</a>
            <ul class="tt-submenu">
              <li><a href="home-landing.html">Home Landing</a></li>
              <li><a href="home-intro-slideshow.html">Slideshow</a></li>

            </ul> <!-- /.tt-submenu -->
          </li>
          <!-- End submenu (sub-master) -->


          <!-- Begin submenu (submenu master)
          ==================================== -->
          <li class="tt-submenu-wrap tt-submenu-master">
            <a href="#0">Portfolio</a>
            <ul class="tt-submenu">

              <!-- Begin submenu
              =================== -->
              <li class="tt-submenu-wrap">
                <a href="#0">Albums</a>
                <ul class="tt-submenu">

                  <!-- Begin submenu
                  =================== -->
                  <li class="tt-submenu-wrap">
                    <a href="#0">Grid</a>
                    <ul class="tt-submenu">
                      <li><a href="albums-grid.html">Grid Default</a></li>
                      <li><a href="albums-grid-2.html">Grid 2</a></li>
                      <li><a href="albums-grid-fluid.html">Grid Fluid</a></li>
                      <li><a href="albums-grid-fluid-2.html">Grid Fluid 2</a></li>
                      <li><a href="albums-grid-fluid-3.html">Grid Fluid 3</a></li>
                      <li><a href="albums-grid-fluid-4.html">Grid Fluid 4</a></li>
                      <li><a href="albums-grid-no-crop.html">Grid No Crop</a></li>
                      <li><a href="albums-grid-simple.html">Grid Simple</a></li>
                      <li><a href="albums-grid-styles.html">Grid Item Styles</a></li>
                    </ul> <!-- /.tt-submenu -->
                  </li>
                  <!-- End submenu -->

                  <!-- Begin submenu
                  =================== -->
                  <li class="tt-submenu-wrap">
                    <a href="#0">Carousel</a>
                    <ul class="tt-submenu">
                      <li><a href="albums-carousel.html">Albums Carousel</a></li>
                      <li><a href="albums-carousel-no-crop.html">Carousel No Crop</a></li>
                      <li><a href="albums-carousel-split.html">Carousel Split</a></li>
                    </ul> <!-- /.tt-submenu -->
                  </li>
                  <!-- End submenu -->

                  <!-- Begin submenu
                  =================== -->
                  <li class="tt-submenu-wrap">
                    <a href="#0">Archive</a>
                    <ul class="tt-submenu">
                      <li><a href="albums-archive.html">Archive Default</a></li>
                      <li><a href="albums-archive-fluid.html">Archive Fluid</a></li>
                      <li><a href="albums-archive-fluid-2.html">Archive Fluid 2</a></li>
                    </ul> <!-- /.tt-submenu -->
                  </li>
                  <!-- End submenu -->

                  <li><a href="albums-one-column.html">One Column</a></li>
                  <li><a href="albums-one-column-fluid.html">One Column Fluid</a></li>
                  <li><a href="albums-slideshow.html">Slideshow + Thumb.</a></li>
                  <li><a href="albums-thumbnails-list.html">Thumbnails List</a></li>

                </ul> <!-- /.tt-submenu -->
              </li>
              <!-- End submenu -->

              <!-- Begin submenu
              =================== -->
              <li class="tt-submenu-wrap">
                <a href="#0">Gallery</a>
                <ul class="tt-submenu">

                  <!-- Begin submenu
                  =================== -->
                  <li class="tt-submenu-wrap">
                    <a href="#0">Gallery Carousel</a>
                    <ul class="tt-submenu">
                      <li><a href="gallery-single-carousel.html">Carousel Default</a></li>
                      <li><a href="gallery-single-carousel-2.html">Carousel + Info</a></li>
                      <li><a href="gallery-single-carousel-center.html">Carousel Center</a></li>
                    </ul> <!-- /.tt-submenu -->
                  </li>
                  <!-- End submenu -->

                  <!-- Begin submenu
                  =================== -->
                  <li class="tt-submenu-wrap">
                    <a href="#0">Gallery Grid</a>
                    <ul class="tt-submenu">
                      <li><a href="gallery-single-grid.html">Grid Default</a></li>
                      <li><a href="gallery-single-grid-2.html">Grid 2</a></li>
                      <li><a href="gallery-single-grid-cropped.html">Grid Cropped</a></li>
                      <li><a href="gallery-single-grid-fluid.html">Grid Fluid</a></li>
                      <li><a href="gallery-single-grid-fluid-2.html">Grid Fluid 2</a></li>
                      <li><a href="gallery-single-grid-fluid-2-cropped.html">Grid Fluid 2 Cropped</a></li>
                      <li><a href="gallery-single-grid-fluid-3.html">Grid Fluid 3</a></li>
                      <li><a href="gallery-single-grid-fluid-3-cropped.html">Grid Fluid 3 Cropped</a></li>
                      <li><a href="gallery-single-grid-simple.html">Grid Simple</a></li>
                    </ul> <!-- /.tt-submenu -->
                  </li>
                  <!-- End submenu -->

                  <!-- Begin submenu
                  =================== -->
                  <li class="tt-submenu-wrap">
                    <a href="#0">Gallery + Sidebar</a>
                    <ul class="tt-submenu">
                      <li><a href="gallery-single-sidebar-left.html">Sidebar Left</a></li>
                      <li><a href="gallery-single-sidebar-left-simple.html">Sidebar Left Simple</a></li>
                      <li><a href="gallery-single-sidebar-right.html">Sidebar Right</a></li>
                      <li><a href="gallery-single-sidebar-right-simple.html">Sidebar Right Simple</a></li>
                    </ul> <!-- /.tt-submenu -->
                  </li>
                  <!-- End submenu -->

                  <!-- Begin submenu
                  =================== -->
                  <li class="tt-submenu-wrap">
                    <a href="#0">Gallery Styles</a>
                    <ul class="tt-submenu">
                      <li><a href="gallery-single-grid-style-default.html">Default</a></li>
                      <li><a href="gallery-single-grid-style-colored.html">Colored</a></li>
                      <li><a href="gallery-single-grid-style-zoom-only.html">Zoom Only</a></li>
                    </ul> <!-- /.tt-submenu -->
                  </li>
                  <!-- End submenu -->

                </ul> <!-- /.tt-submenu -->
              </li>
              <!-- End submenu -->

              <!-- Begin submenu
              =================== -->
              <li class="tt-submenu-wrap">
                <a href="#0">Categories</a>
                <ul class="tt-submenu">
                  <li><a href="categories-carousel.html">Carousel</a></li>
                  <li><a href="categories-grid.html">Grid</a></li>
                  <li><a href="categories-grid-fluid.html">Grid Fluid</a></li>
                  <li><a href="categories-grid-fluid-2.html">Grid Fluid 2</a></li>
                  <li><a href="categories-grid-fluid-3.html">Grid Fluid 3</a></li>
                </ul> <!-- /.tt-submenu -->
              </li>
              <!-- End submenu -->

            </ul> <!-- /.tt-submenu -->
          </li>
          <!-- End submenu (sub-master) -->

          <!-- Begin submenu (submenu master)
          ==================================== -->
          <li class="tt-submenu-wrap tt-submenu-master">
            <a href="#0">Contact</a>
            <ul class="tt-submenu">
              <li><a href="contact.html">Contact Default</a></li>
              <li><a href="contact-fluid.html">Contact Fluid</a></li>
              <li><a href="contact-simple.html">Contact Simple</a></li>
            </ul> <!-- /.tt-submenu -->
          </li>
          <!-- End submenu (sub-master) -->


        </ul> <!-- /.tt-menu-nav -->
      </div> <!-- /.tt-menu-collapse -->

    </nav>
    <!-- End main menu -->

  </div>
  <!-- End header inner -->

</header>
<!-- End header -->
