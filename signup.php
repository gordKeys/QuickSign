<?php
session_start();
if (isset($_SESSION['id'])) {
  header("location: archives/index.php");
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>quicksign Signup</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/signup.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.11.6, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/knust_logo-removebg-preview1.png"
}</script>
    <meta name="theme-color" content="#ffc000">
    <meta property="og:title" content="signup">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-f130"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="431" data-image-height="579">
          <img src="images/knust_logo-removebg-preview1.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 500;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-file-icon u-hamburger-link u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-base u-file-icon-1" href="#">
              <img src="images/141930.png" alt="">
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1">
              <li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="index.php" style="padding: 10px 20px;">login</a>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="signup.php" style="padding: 10px 20px;">signup</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="signup.php">signup</a>
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
        <h4 class="u-text u-text-default u-text-1">QuickSign </h4>
      </div></header>
    <section class="u-clearfix u-image u-section-1" id="carousel_661d" data-image-width="1280" data-image-height="853">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-body-alt-color u-text-default u-text-1">SIGN UP </h3>
        <div class="u-form u-palette-5-light-3 u-form-1">
          <!-- <form action="archives/includes/signup.inc.php" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;"> -->
            <form action="archives/includes/signup.inc.php" method="post" style="padding: 15px;">
            <div class="u-form-group u-form-name u-label-top"><br>
              <label for="name-6797" class="u-label">First Name</label>
              <input type="text" placeholder="Enter your first name" id="name-6797" name="fname" class="u-input u-input-rectangle" required="">
            </div><br>
            <div class="u-form-group u-label-top">
              <label for="email-6797" class="u-label">Last Name</label>
              <input type="text" placeholder="Enter your last name" id="email-6797" name="lname" class="u-input u-input-rectangle" required="required">
            </div><br>
            <div class="u-form-email u-form-group u-label-top u-form-group-3">
              <label for="text-7e6c" class="u-label">Email Address</label>
              <input type="email" id="text-7e6c" name="email" class="u-input u-input-rectangle" placeholder="Please enter your school email">
            </div><br>
            <div class="u-form-group u-label-top u-form-group-4">
              <label for="text-d459" class="u-label">Program</label>
              <input type="text" placeholder="Enter program of study" id="text-d459" name="program" class="u-input u-input-rectangle">
            </div><br>
            <div class="u-form-group u-form-select u-label-top u-form-group-5">
              <label for="select-8660" class="u-label">Level</label>
              <div class="u-form-select-wrapper">
                <select id="select-8660" name="level" class="u-input u-input-rectangle">
                  <option value="Select year" selected="selected" disabled data-calc="">Select year</option>
                  <option value="100" data-calc="100">100</option>
                  <option value="200" data-calc="200">200</option>
                  <option value="300" data-calc="300">300</option>
                  <option data-calc="400" value="400">400</option>
                  <option data-calc="500" value="500">500</option>
                  <option data-calc="600" value="600">600</option>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div><br>
            <div class="u-form-group u-label-top u-form-group-6">
              <label for="text-05bc" class="u-label">Password</label>
              <input type="password" placeholder="Enter Password" id="text-05bc" name="pwd" class="u-input u-input-rectangle">
            </div><br>
            <div class="u-form-group u-label-top u-form-group-6">
              <label for="text-05bc" class="u-label">Repeat Password</label>
              <input type="password" placeholder="confirm your password" id="text-05bc" name="pwdConfirm" class="u-input u-input-rectangle">
            </div><br>

            <!-- <div class="u-align-left u-form-group u-form-submit u-label-top"> -->
              <!-- <button type="submit" class="u-btn u-btn-submit u-button-style" name="submit">Submit</button> -->
              <button type="submit" class="u-btn" name="submit">Submit</button>
            <!-- </div> -->
          </form>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center-sm u-align-center-xs u-black u-clearfix u-footer" id="sec-1a52"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-border-1 u-border-grey-75 u-expanded-width u-line u-line-horizontal u-line-1"></div>
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-custom-xs u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-size-30-xxl u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XS">
                    <div class="menu-collapse">
                      <a class="u-block-2219-103 u-button-style u-hamburger-link u-nav-link" aria-label="Open menu" aria-controls="e226" href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#svg-23e0"></use></svg>
                        <svg class="u-svg-content" version="1.1" id="svg-23e0" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                      </a>
                    </div>
                    <div class="u-nav-container">
                      <ul class="u-nav u-unstyled">
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="signup.php">signup</a>
</li></ul>
                    </div>
                    <div id="e226" role="region" aria-label="Menu panel" class="u-nav-container-collapse">
                      <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                          <div class="u-menu-close" aria-label="Close menu"></div>
                          <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="signup.php">signup</a>
</li></ul>
                        </div>
                      </div>
                      <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                    </div>
                    <style class="menu-style">@media (max-width: 539px) {
                    [data-responsive-from="XS"] .u-nav-container {
                        display: none;
                    }
                    [data-responsive-from="XS"] .menu-collapse {
                        display: block;
                    }
                }</style>
                  </nav>
                </div>
              </div>
              <div class="u-container-align-right-xxl u-container-style u-layout-cell u-size-30 u-size-30-xxl u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <img class="u-image u-image-contain u-image-default u-image-1" src="images/knust_logo-removebg-preview.png" alt="" data-image-width="431" data-image-height="579">
                  <h4 class="u-text u-text-default u-text-1">QuickSign 2025</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
</body></html>