<?php
session_start();
include('connection.php');
$petId = $_GET['id'];
$petNames = [
    1 => "Luna",
    2 => "Max",
    3 => "Bella",
    4 => "Oliver",
    5 => "Rocky",
    6 => "Simba",
    7 => "Coco",
    8 => "Milo",
    9 => "Charlie",
    10 => "Daisy",
    11 => "Bruno",
    12 => "Kiwi",
    13 => "Sky",
    14 => "Chimtu"
];

$petName = $petNames[$petId];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $address = $_POST["address"];
    $housingType = $_POST["housingType"];
    $experience = $_POST["experience"];
    
    if(isset($_POST["adoptionForm"])){
            $data = "INSERT INTO adoptiondetails VALUES ('$name', '$email', '$number',
            '$address', '$housingType', '$experience', '$petName')";
            mysqli_query($conn, $data);
    }

    echo "<h2>Application Received!</h2>";
    echo "<p>Thank you, <strong>$name</strong>, for applying to adopt <strong>$petName</strong>.</p>";
    echo "<p>We will contact you soon at <strong>$email</strong>.</p>";
    echo "<p>You will be redirected to the <a href='../index.php'>homepage</a> in a few seconds...</p>";

    echo "<script>
        setTimeout(function() {
            window.location.href = '../index.php';
        }, 7000);
    </script>";

    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Details - PetFinder</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/adoptionform.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <img class="heart-icon" src="../imgs/heart-logo.png" alt="heart-icon">
                <a href="../index.php" class="logo-text">PetFinder</a>
            </div>
            <div class="nav-links">
                <a href="../index.php">Home</a>
                <a href="adopt.php">Adopt</a>
                <a href="about.php">About</a>
                <form action="<?php if(isset($_SESSION['name'])) { echo 'logout.php';}else{echo 'login.php';} ?>">
                <button class="sign-in-btn"><?php echo isset($_SESSION['name']) ? 'Logout' : 'Login'; ?></button>
                </form>
            </div>
        </div>
    </nav>
    <div class="adoption-container" id="adoption-container">
            <h2>Adoption Application</h2>
            <form id="adoptionForm" method="post">
                <div class="form-group">
                    <label for="name" >Full Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email"name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="number">Phone</label>
                    <input type="tel" name="number" id="phone" required>
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <textarea id="Address" name="address" required></textarea>
                </div>
                <div class="form-group">
                    <label for="housingType">Housing Type</label>
                    <select id="housingType" name="housingType" required>
                        <option value="">Select housing type</option>
                        <option value="house">House</option>
                        <option value="apartment">Apartment</option>
                        <option value="others">others</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="experience">Pet Care Experience</label>
                    <textarea  name="experience" id="experience" required></textarea>
                </div>
                <button type="submit" name="adoptionForm"  class="primary-btn">Submit Application</button>
            </form>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <div class="footer-logo">
                        <img class="heart-icon" src="../imgs/heart-logo.png" alt="">
                        <span>PetFinder</span>
                    </div>
                    <p>Making pet adoption easy, accessible, and enjoyable for everyone.</p>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="adopt.php">Adopt</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Resources</h3>
                    <ul>
                        <li><a href="#">Pet Care Tips</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-newsletter">
                    <h3>Newsletter</h3>
                    <p>Subscribe to get updates on new pets and success stories.</p>
                    <div class="newsletter-form">
                        <input type="email" placeholder="Enter your email">
                        <button type="submit">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 PetFinder. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
