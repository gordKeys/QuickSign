<?php
session_start();
if (!isset($_SESSION['id'])) {
  header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="We Love All People, ​What we are doing now, ​Our Core Values, ​Explore Our Work for Children in Africa, ​What we do, ​Our vision and strategy, Our Gallery, Meet our team, Our Partners, Testimonials, Facts &amp;amp; Questions">
    <meta name="description" content="">
    <title>QuickSign 2025</title>
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.11.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "../images/knust_logo-removebg-preview1.png"
}</script>
    <meta name="theme-color" content="#ffc000">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-f130"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="431" data-image-height="579">
        <img src="../images/knust_logo-removebg-preview1.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 500;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-file-icon u-hamburger-link u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-base u-file-icon-1" href="#">
              <img src="../images/141930.png" alt="">
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1">
                <li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="index.php" style="padding: 10px 20px;">Home</a>
                <li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-base u-nav-link u-white" href="create.php">Create Event</a></li>
                <li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-base u-nav-link u-white" href="event.php">Join Event</a></li>
<!-- </div> -->
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="account.php" style="padding: 10px 20px;">My Account</a>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="includes/logout.inc.php" style="padding: 10px 20px;">Logout</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Home</a>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="create.php">Create Event</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="event.php">Join Event</a>
</li>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="account.php">My Account</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="includes/logout.inc.php">Logout</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
          <style class="menu-style">@media (max-width: 939px) {
                    [data-responsive-from="MD"] .u-nav-container {
                        display: none;
                    }
                    [data-responsive-from="MD"] .menu-collapse {
                        display: block;
                    }
                }</style>
        </nav>
        <!-- <h4 class="u-text u-text-default u-text-1">QuickSign </h4> -->
      </div></header> 
    <section class="skrollable skrollable-between u-align-center u-clearfix u-container-align-center u-image u-shading u-section-1" src="" style='background: url("../images/photo_2025-03-20_22-03-19.jpg");' id="carousel_6a69" data-image-width="1280" data-image-height="948">
      <div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
        <h1 class="u-align-center u-custom-font u-heading-font u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">Quicksign </h1>
        <p class="u-align-center u-large-text u-text u-text-variant u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">Fast and easy workshop registration for students. Find, register, and attend events with a few clicks </p>
        <div class="custom-expanded data-layout-selected u-clearfix u-layout-custom-sm u-layout-custom-xs u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-right u-container-align-center-xs u-container-align-right u-container-align-right-lg u-container-align-right-md u-container-align-right-sm u-container-align-right-xl u-container-style u-layout-cell u-left-cell u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xl u-size-60-xs u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <a href="create.php" class="u-active-white u-align-center-xs u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xl u-border-2 u-border-active-white u-border-hover-white u-border-palette-1-base u-btn u-button-style u-hover-white u-palette-1-base u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">CREATE EVENT </a>
                </div>
              </div>
              <div class="u-align-left u-container-align-center-xs u-container-align-left u-container-align-left-lg u-container-align-left-md u-container-align-left-sm u-container-align-left-xl u-container-style u-layout-cell u-right-cell u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xl u-size-60-xs u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <a href="event.php" class="u-active-white u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-white u-none u-radius-50 u-text-active-black u-text-hover-black u-btn-2">REGISTER FOR EVENT </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-fd09">
      <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout" style="">
          <div class="u-layout-row" style="">
            <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-white u-layout-cell-1" src="">
              <div class="u-container-layout u-container-layout-1">
                <h2 class="u-align-center u-text u-text-default u-text-1">UPCOMING <span style="font-size: 2.25rem;"></span>EVENTS 
                </h2>
                <div class="custom-expanded u-table u-table-responsive u-table-1">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="33.3%">
                      <col width="33.3%">
                      <col width="33.400000000000006%">
                    </colgroup>
                    <tbody class="u-table-alt-palette-1-light-3 u-table-body">
                      <tr style="height: 101px;">
                        <td class="u-table-cell">ID </td>
                        <td class="u-table-cell">EVENT NAME </td>
                        <td class="u-table-cell">EVENT DATE </td>
                      </tr>
                      <tr style="height: 101px;">
                        <td class="u-table-cell">1.</td>
                        <td class="u-table-cell">xxx xxx</td>
                        <td class="u-table-cell">xx xx xxx</td>
                      </tr>
                      <tr style="height: 101px;">
                        <td class="u-table-cell">2.</td>
                        <td class="u-table-cell">xxx xxx</td>
                        <td class="u-table-cell">xx xx xxx</td>
                      </tr>
                      <tr style="height: 101px;">
                        <td class="u-table-cell">3.</td>
                        <td class="u-table-cell">xxx xxx</td>
                        <td class="u-table-cell">xx xx xxx</td>
                      </tr>
                      <tr style="height: 101px;">
                        <td class="u-table-cell">4.</td>
                        <td class="u-table-cell">xxx xxx</td>
                        <td class="u-table-cell">xx xx xxx</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-style u-image u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-image-1" src="" data-image-width="1280" data-image-height="1094">
              <div class="u-container-layout u-valign-middle u-container-layout-2" src=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-image u-shading u-section-3" id="carousel_b6cd" data-image-width="1280" data-image-height="853">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-size-25-lg u-size-25-xl u-size-60-md u-size-60-sm u-size-60-xs u-white u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-align-left u-text u-text-1"> Key Features<br>
                  </h3>
                  <p class="u-align-left u-text u-text-default u-text-2">Discover and register for school events or create and manage your own workshops effectively </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-35-lg u-size-35-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                      <div class="u-container-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1" data-animation-name="flipIn" data-animation-duration="1500" data-animation-direction="X" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-align-left u-file-icon u-icon u-icon-circle u-palette-1-base u-icon-1"><img src="../images/3067260.png" alt=""></span>
                          <h4 class="u-align-left u-text u-text-3"> Seamless Workshop Registration</h4>
                          <p class="u-align-left u-text u-text-4"> Students can&nbsp;browse&nbsp;available workshops, view details, and register with&nbsp;one click.</p>
                        </div>
                      </div>
                      <div class="u-container-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-2" data-animation-name="flipIn" data-animation-duration="1500" data-animation-direction="X" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span class="u-align-left u-file-icon u-icon u-icon-circle u-palette-1-base u-icon-2"><img src="../images/4263759.png" alt=""></span>
                          <h4 class="u-align-left u-text u-text-5">Personalized Dashboard </h4>
                          <p class="u-align-left u-text u-text-6"> Users can see their&nbsp;registered workshops, upcoming events, and receive reminders.</p>
                        </div>
                      </div>
                      <div class="u-container-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-3" data-animation-name="flipIn" data-animation-duration="1500" data-animation-direction="X" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5"><span class="u-align-left u-file-icon u-icon u-icon-circle u-palette-1-base u-icon-3"><img src="../images/1581943.png" alt=""></span>
                          <h4 class="u-align-left u-text u-text-7"> Attendance Tracking &amp; Certificates</h4>
                          <p class="u-align-left u-text u-text-8"> Workshop organizers can&nbsp;track attendance&nbsp;digitally.</p>
                        </div>
                      </div>
                      <div class="u-container-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-4" data-animation-name="flipIn" data-animation-duration="1500" data-animation-delay="500" data-animation-direction="X">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6"><span class="u-align-left u-file-icon u-icon u-icon-circle u-palette-1-base u-icon-4"><img src="../images/1534388.png" alt=""></span>
                          <h4 class="u-align-left u-text u-text-9"> User Friendly</h4>
                          <p class="u-align-left u-text u-text-10"> Designed with the perfect UI for easy navigation</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-1-dark-1 u-section-4" id="carousel_5bb9">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"> NEVER MISS OUT ON ANY EVENT WITH <span style="font-size: 3rem;">Qu​​ickSign </span>
        </h1>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-grey-5 u-valign-middle u-section-5" id="carousel_2397">
      <div class="custom-expanded u-container-align-center u-container-style u-expanded-width-lg u-expanded-width-xl u-group u-palette-1-base u-shape-rectangle u-group-1" data-animation-name="flipIn" data-animation-duration="1500" data-animation-delay="0" data-animation-direction="X">
        <div class="u-container-layout u-valign-top u-container-layout-1">
          <h2 class="u-align-center u-text u-text-default u-text-1">Our Gallery</h2>
        </div>
      </div>
      <div class="u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
        <div class="u-gallery-inner u-gallery-inner-1">
          <div class="u-effect-fade u-effect-hover-zoom u-gallery-item" data-image-width="1280" data-image-height="853">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="../images/photo_2025-03-20_22-04-17.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-1"></div>
          </div>
          <div class="u-effect-fade u-effect-hover-zoom u-gallery-item" data-image-width="853" data-image-height="1280">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="../images/photo_2025-03-20_22-03-51.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-2"></div>
          </div>
          <div class="u-effect-fade u-effect-hover-zoom u-gallery-item" data-image-width="1280" data-image-height="1196">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="../images/photo_2025-03-20_22-03-27.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-3"></div>
          </div>
          <div class="u-effect-fade u-effect-hover-zoom u-gallery-item" data-image-width="1280" data-image-height="816">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="../images/photo_2025-03-20_22-01-32.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-4"></div>
          </div>
          <div class="u-effect-fade u-effect-hover-zoom u-gallery-item" data-image-width="1280" data-image-height="1280">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="../images/photo_2025-03-20_22-04-46.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-5"></div>
          </div>
          <div class="u-effect-fade u-effect-hover-zoom u-gallery-item" data-image-width="1280" data-image-height="921">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="../images/photo_2025-03-20_22-06-07.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-6"></div>
          </div>
        </div>
      </div>
    </section>
<?php include_once 'footer.php'; ?>