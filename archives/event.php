<?php
session_start();
if (!isset($_SESSION['id'])) {
  header("location: ../index.php");
}
?>
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

// Fetch all events
$sql = "SELECT * FROM events ORDER BY created DESC";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Join an event">
    <meta name="description" content="">
    <title>Join Event</title>
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/About.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.11.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "../images/knust_logo-removebg-preview1.png"
}</script>
    <meta name="theme-color" content="#ffc000">
    <meta property="og:title" content="About">
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
        <h4 class="u-text u-text-default u-text-1">QuickSign </h4>
      </div></header>
    <section class="u-clearfix u-palette-1-dark-2 u-section-1" id="sec-a593">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">Join an event</h2>
      </div>
    </section>
    <section class="u-clearfix u-grey-10 u-section-2" id="sec-bd2e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
          <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <h3 class="u-text u-text-default u-text-1"><?php echo $row['event_name']; ?></h3>
                <div class="u-border-4 u-border-palette-3-base u-expanded-width u-line u-line-horizontal u-line-1"></div>
                <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-1" data-image-width="2000" data-image-height="1333" src="<?php echo $row['image']; ?>">
                <p class="u-text u-text-default u-text-2">This event was organized by <strong><?php echo $row['organizer']; ?></strong> hosting guests such as <strong><?php echo $row['guests']; ?></strong>, from <strong><?php echo $row['start_date']; ?></strong> to <strong><?php echo $row['end_date']; ?></strong> at <strong><?php echo $row['location']; ?>.</strong> We expect about <strong><?php echo $row['attendees']; ?></strong> attendees.</p>
                <form action="" method="post">
                    <input type="hidden" name="event" value="<?php echo $row['id']; ?>">
                    <button type="submit" class="u-btn u-button-style u-palette-3-base u-btn-1" name="register">Register</button>    
                <!-- <a href="register.php?event=" class="u-btn u-button-style u-palette-3-base u-btn-1">Register</a> -->
                </form>
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

                    // Check if event_id is set
                    // if (!isset($_POST['event']) || empty($_POST['event'])) {
                    //     die("Invalid event ID.");
                    // }


                    // Handle form submission
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
                        $event_id = $_POST['event']; // Get event ID from URL

                        // Check if event exists
                        $event_check = $conn->query("SELECT * FROM events WHERE id = $event_id");
                        if ($event_check->num_rows == 0) {
                            die("Event not found.");
                        }
    
                        $user_id = $_SESSION['id']; // Assuming users are logged in and user ID is provided

                        // Check if user already registered for this event
                        $check_registration = $conn->query("SELECT * FROM registrations WHERE event_id = $event_id AND user_id = $user_id");

                        if ($check_registration->num_rows > 0) {
                            echo "<script>alert('You are already registered for this event.');</script>";
                        } else {
                            // Insert registration into the database
                            $sql = "INSERT INTO registrations (event_id, user_id) VALUES ($event_id, $user_id)";
                            
                            if ($conn->query($sql) === TRUE) {
                                echo "<script>alert('Registration successful!');</script>";
                            } else {
                                echo "Error: " . $conn->error;
                            }
                        }
                    }

                    $conn->close();
                ?>
            </div>
            </div>
            <?php
                }} else {
                    echo "No events found";
                }
            ?>
          </div>
        </div>
      </div>
    </section>
    <?php include_once 'footer.php'; ?>