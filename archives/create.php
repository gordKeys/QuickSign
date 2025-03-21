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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve and sanitize form inputs
    $event = mysqli_real_escape_string($conn, $_POST['event']);
    $organizer = mysqli_real_escape_string($conn, $_POST['organizer']);
    $guests = mysqli_real_escape_string($conn, $_POST['guests']);
    $fday = mysqli_real_escape_string($conn, $_POST['fday']);
    $lday = mysqli_real_escape_string($conn, $_POST['lday']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $attendees = intval($_POST['attendees']);
    $created = date('Y-m-d H:i:s'); // Current timestamp

    // Convert dates to MySQL format
    $fday = date('Y-m-d', strtotime($fday));
    $lday = date('Y-m-d', strtotime($lday));

    // Handle Image Upload
    $image_path = NULL; // Default NULL in case no image is uploaded

    if (!empty($_FILES["image"]["name"])) {
        $target_dir = "uploads/"; // Folder to save images
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true); // Create folder if not exists
        }

        $image_name = basename($_FILES["image"]["name"]);
        $image_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
        $allowed_types = ["jpg", "jpeg", "png", "gif"];

        // Check if the file is an image
        if (in_array($image_ext, $allowed_types)) {
            $new_image_name = time() . "_" . uniqid() . "." . $image_ext; // Unique filename
            $target_file = $target_dir . $new_image_name;

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image_path = $target_file; // Store the image path for database
            } else {
                echo "<script>alert('Error uploading image.');</script>";
            }
        } else {
            echo "<script>alert('Invalid file format. Allowed: JPG, JPEG, PNG, GIF.');</script>";
        }
    }

    // SQL query using prepared statements
    $sql = "INSERT INTO events (event_name, organizer, start_date, end_date, guests, location, attendees, image, created) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssiss", $event, $organizer, $fday, $lday, $guests, $location, $attendees, $image_path, $created);

    if ($stmt->execute()) {
        echo "<script>alert('Event successfully added!');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Close connection
$conn->close();
?>


<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="My​Account​">
    <meta name="description" content="">
    <title>Create Event</title>
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
    <section class="u-align-center u-clearfix u-image u-section-1" style='  background-image: url("../images/photo_2025-03-20_22-04-03.jpg");' id="sec-dc4f" data-image-width="1280" data-image-height="766">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-body-alt-color u-text-default u-text-1">Create Event</h2>
        <div class="u-form u-form-1">
        <form action="" method="post" enctype="multipart/form-data" style="padding: 15px;">
            <div class="u-form-group u-label-none">
              <label for="name-6797" class="u-label">Event Name </label>
              <input type="text" id="name-6797" name="event" class="u-input u-input-rectangle" required="required" placeholder="Event Name">
            </div><br>
            <div class="u-form-group u-label-none">
              <label for="email-6797" class="u-label">Organizer (Event Host)</label>
              <input type="text" id="email-6797" name="organizer" class="u-input u-input-rectangle" required="required" placeholder="Organizer">
            </div><br>
            <div class="u-form-group u-label-none u-form-group-3">
              <label for="text-bd06" class="u-label">Expected Guests</label>
              <input type="text" id="text-bd06" name="guests" class="u-input u-input-rectangle" placeholder="Enter the names of Expected Guests">
            </div><br>
            <div class="u-form-group u-label-none u-form-group-4">
              <label for="text-4306" class="u-label">First Day</label>
              <input type="date" id="text-4306" name="fday" class="u-input u-input-rectangle" placeholder="Start Date">
            </div><br>
            <div class="u-form-group u-label-none u-form-group-5">
              <label for="text-6cc5" class="u-label">Last Day</label>
              <input type="date" placeholder="End Date" id="text-6cc5" name="lday" class="u-input u-input-rectangle">
            </div><br>
            <div class="u-form-group u-label-none u-form-group-6">
              <label for="text-526c" class="u-label">Location</label>
              <input type="text" id="text-526c" name="location" class="u-input u-input-rectangle" placeholder="Location">
            </div><br>
            <div class="u-form-group u-label-none u-form-group-7">
              <label for="text-f18c" class="u-label">Expected Attendees</label>
              <input type="number" value="100" id="text-f18c" name="attendees" class="u-input u-input-rectangle">
            </div><br>
            <div class="u-form-group u-label-none u-form-group-7">
              <label for="text-f18c" class="u-label">Image</label>
              <input type="file" id="file-upload" name="image" class="u-input u-input-rectangle" accept="image/*">
            </div><br>
            <button type="submit" name="submit" class="u-btn">Submit</button>
          </form>
        </div>
      </div>
    </section>    

    <?php include_once 'footer.php'; ?>