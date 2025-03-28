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
    <title>My Account</title>
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/Contact.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.11.6, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "../images/knust_logo-removebg-preview1.png"
}</script>
    <meta name="theme-color" content="#ffc000">
    <meta property="og:title" content="Contact">
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="event.php ">Join Event</a>
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
<section class="u-clearfix u-palette-1-dark-1 u-section-2" id="sec-e35c">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">My​Account </h2>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="sec-cdfc">
      <div class="u-clearfix u-sheet u-sheet-1">
      <?php
        // Database connection
        $host = "localhost";
        $user = "root";
        $pass = ""; 
        $dbname = "quicksign";

        $conn = new mysqli($host, $user, $pass, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Ensure the user is logged in
        if (!isset($_SESSION['id'])) {
            die("User not logged in.");
        }

        $user_id = intval($_SESSION['id']); // Get logged-in user ID

        // Fetch registered events
        $sql = "SELECT e.id, e.event_name, e.start_date, e.location 
                FROM registrations r
                INNER JOIN events e ON r.event_id = e.id
                WHERE r.user_id = $user_id
                ORDER BY e.start_date ASC";

        $result = $conn->query($sql);
    ?>
    <h3 class="u-text u-text-default u-text-1">Registered Events</h3>
    <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <table class="u-table-entity u-table-entity-1">
            <colgroup>
                <col width="25%">
                <col width="35%">
                <col width="20%">
                <col width="20%">
            </colgroup>
            <thead>
                <tr style="height: 65px; background-color: #f2f2f2;">
                    <th class="u-table-cell">ID</th>
                    <th class="u-table-cell">Event Name</th>
                    <th class="u-table-cell">Date</th>
                    <th class="u-table-cell">Location</th>
                </tr>
            </thead>
            <tbody class="u-table-alt-palette-1-light-3 u-table-body">
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr style="height: 65px;">
                            <td class="u-table-cell"><?php echo htmlspecialchars($row['id']); ?></td>
                            <td class="u-table-cell"><?php echo htmlspecialchars($row['event_name']); ?></td>
                            <td class="u-table-cell"><?php echo htmlspecialchars($row['start_date']); ?></td>
                            <td class="u-table-cell"><?php echo htmlspecialchars($row['location']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="u-table-cell">No registered events found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php
$conn->close();
?>
      </div>
    </section>
    <!-- <hr style='width: 80%; margin-left: auto; margin-right: auto;'>
    <section class="u-align-center u-clearfix u-section-4" id="sec-7e83">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-default u-text-1">Attended Events </h3>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="33.3%">
              <col width="33.3%">
              <col width="33.400000000000006%">
            </colgroup>
            <tbody class="u-table-alt-palette-1-light-3 u-table-body">
              <tr style="height: 65px;">
                <td class="u-table-cell">ID </td>
                <td class="u-table-cell">Name </td>
                <td class="u-table-cell">Date </td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-table-cell">Row 1</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-table-cell">Row 2</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-table-cell">Row 3</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-table-cell">Row 4</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section> -->
    <!-- <hr style='width: 80%; margin-left: auto; margin-right: auto;'>
    <section class="u-align-center u-clearfix u-section-5" id="sec-9933">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-1">Attendees (My Event) </h3>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="19.999999999999993%">
              <col width="20.099999999999994%">
            </colgroup>
            <tbody class="u-table-alt-palette-1-light-3 u-table-body">
              <tr style="height: 65px;">
                <td class="u-table-cell">ID </td>
                <td class="u-table-cell">Name of Person </td>
                <td class="u-table-cell">Program </td>
                <td class="u-table-cell">Level</td>
                <td class="u-table-cell"> Arrival Time<br>
                </td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-table-cell">Row 1</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell"></td>
                <td class="u-table-cell"></td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-table-cell">Row 2</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell"></td>
                <td class="u-table-cell"></td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-table-cell">Row 3</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell"></td>
                <td class="u-table-cell"></td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-table-cell">Row 4</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell"></td>
                <td class="u-table-cell"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section> -->
<?php include_once 'footer.php'; ?>