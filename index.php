<!DOCTYPE html>
<html lang="en">
<head>
<title>Interior Design</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h1 class="w3-padding-64"><b>Q9<br>INTERIORS</b></h1>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Showcase</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Designers</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packages</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
    <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Login</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Interior Design</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Showcase.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) --> 
  <div class="w3-row-padding"> 
    <div class="w3-half">
      <img src="kitchenconcrete.jpg" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      <img src="livingroom.jpg" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
      <img src="diningroom.jpg" style="width:100%" onclick="onClick(this)" alt="White walls with designer chairs">
    </div>

    <div class="w3-half">
      <img src="atrium.jpg" style="width:100%" onclick="onClick(this)" alt="Windows for the atrium">
      <img src="bedroom.jpg" style="width:100%" onclick="onClick(this)" alt="Bedroom and office in one space">
      <img src="livingroom2.jpg" style="width:100%" onclick="onClick(this)" alt="Scandinavian design">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Services.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>We are a interior design service that focus on what's best for your home and what's best for you!</p>
    <p>Some text about our services - what we do and what we offer. We are very successful in the field of coaching, but this time we are faced with a lot of work and pain. For to come to the smallest detail, no one should practice any kind of work unless he derives some benefit from it. Or go home
    pain in reprimands in pleasure he wants to be a hair from pain and euphoria no one is born. Unless they are blinded by desire, they do not come out, they are in fault who abandon their duties, the mind softens, that is to say, it is the result of hardships, but I give such a time.
    They happened with some great labor and pain. For to come to the smallest detail, no one should practice any kind of work unless he derives some benefit from it.
    </p>
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Designers.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>The best team in the world.</p>
    <p>We are the real world, we are pursuing the education of the people, but we are going to have to deal with some great pain and suffering at the same time. For to come to the smallest detail, no one should practice any kind of work unless he derives some benefit from it. Do not be angry with the pain in the reprimand in the pleasure he wants to be a hair from the pain in the hope that there is no breeding. Unless they are blinded by desire, they do not come out, they are in fault who abandon their duties, the mind softens, that is, the result of the work is the education of the student.
    </p>
    <p><b>Our designers are thoughtfully chosen</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="4-1.jpg" alt="D'LIFE Interiors"  style="width:100%">
        <div class="w3-container">
          <h3> D'LIFE Interiors</h3>
          <button class="w3-button w3-white w3-padding-large w3-hover-black"><a href="https://dlifeinteriors.com/">VISIT</a></button>
          <p class="w3-opacity" >Designer</p>
          <p>CONTEMPORARY HOME INTERIOR DESIGNERS AND CONTRACTORS BANGALORE, KERALA, CHENNAI, COIMBATORE & MANGALORE</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="4.jpg" alt="VARAHA INTERIOR'S" style="width:100%">
        <div class="w3-container">
          <h3>VARAHA INTERIOR'S</h3>
          <button class="w3-button w3-white w3-padding-large w3-hover-black"><a href="https://www.instagram.com/varaha_associates/?hl=en">VISIT</a></button>
          <p class="w3-opacity">Designer</p>
          <p>Varaha Interior Mangalore is located at Bhavani Ganesh Complex, Main Rd, Bejei Bejei, Mangalore, Karnataka 575004, India.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="14.jpg" alt="Chavadi Interiors" style="width:100%">
        <div class="w3-container">
          <h3>Chavadi Interiors</h3>
           <button class="w3-button w3-white w3-padding-large w3-hover-black"><a href="https://www.chavadiinteriors.in/">VISIT</a></button>
          <p class="w3-opacity">Architect</p>
          <p>Chavadi is a Mangalore based interior designer firm which concentrates on providing our customers the ideal blend of artistic attitude and architect.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Packages / Pricing Tables -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Packages.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Some text our prices. The customer will be able to follow the customer's training, but it will happen at the same time as a lot of work and pain. For to come to the smallest detail, no one should practice any kind of work unless he derives some benefit from it. Or go home
    </p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">D'LIFE Interiors</li>
          <li class="w3-padding-16">FOYER</li>
        <li class="w3-padding-16">LIVING ROOM</li>
        <li class="w3-padding-16">DINING ROOM</li>
        <li class="w3-padding-16">MASTER BEDROOM</li>
        <li class="w3-padding-16">KIDS ROOM</li>
         <li class="w3-padding-16">GUEST BEDROOM</li>
          <li class="w3-padding-16">KITCHEN</li>
        <li class="w3-padding-16">
          <h2>₹6.8LAC*</h2>
          <span class="w3-opacity">per room</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-white w3-padding-large w3-hover-black"><a href="https://dlifeinteriors.com/offers/#essential">CHECK OUT</a></button>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Chavadi Interiors</li>
        <li class="w3-padding-16">FOYER</li>
        <li class="w3-padding-16">LIVING ROOM</li>
        <li class="w3-padding-16">DINING ROOM</li>
        <li class="w3-padding-16">MASTER BEDROOM</li>
        <li class="w3-padding-16">KIDS ROOM</li>
        <li class="w3-padding-16">GUEST BEDROOM</li>
          <li class="w3-padding-16">KITCHEN</li>
        <li class="w3-padding-16">
          <h2>₹9.77LAC*</h2>
          <span class="w3-opacity">per room</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-red w3-padding-large w3-hover-black"><a href="https://www.chavadiinteriors.in/portfolio/">CHECK OUT</a></button>
        </li>
      </ul>
    </div>
  </div>
  
  <!-- Contact -->
    <!--<div class="w3-container" id="contact" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
        <hr style="width:50px;border:5px solid red" class="w3-round">
        <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p>
        <form action="" method="post">
            <div class="w3-section">
                <label>Name</label>
                <input class="w3-input w3-border" type="text" name="Name" required>
            </div>
            <div class="w3-section">
                <label>Email</label>
                <input class="w3-input w3-border" type="text" name="Email" required>
            </div>
            <div class="w3-section">
                <label>Message</label>
                <input class="w3-input w3-border" type="text" name="Message" required>
            </div>
            <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
        </form>  
    </div> -->

    <!-- Contact -->
<div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="" method="post" onsubmit="return handleFormSubmission()">
        <div class="w3-section">
            <label>Name</label>
            <input class="w3-input w3-border" type="text" name="Name" required>
        </div>
        <div class="w3-section">
            <label>Email</label>
            <input class="w3-input w3-border" type="text" name="Email" required>
        </div>
        <div class="w3-section">
            <label>Message</label>
            <input class="w3-input w3-border" type="text" name="Message" required>
        </div>
        <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>
    <div id="success-message" style="display: none; color: green; margin-top: 10px;">
        Message sent successfully!
    </div>
</div>

<script>
    function handleFormSubmission() {
        // You can add AJAX code here to submit the form data to the server if needed.
        // For now, we will just show a success message and redirect to a new page.
        document.getElementById('success-message').style.display = 'block';
        setTimeout(function () {
            window.location.href = 'success-page.html'; // Change 'success-page.html' to the actual URL of your success page
        }, 2000); // Redirect after 2 seconds (you can adjust this value)
        return false; // Prevents the form from actually submitting
    }
</script>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost"; // This is usually 'localhost' for a local setup.
        $username = "root"; // Use your MySQL username.
        $password = ""; // Use your MySQL password, might be empty by default.
        $dbname = "database_name"; // Your database name in MySQL.

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $message = $_POST['Message'];

        $sql = "INSERT INTO interior (Name, Email, Message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>

