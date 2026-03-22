<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Details - PetFinder</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/pet.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <img class="heart-icon" src="../imgs/heart-logo.png" alt="">
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
    <section class="pet-details-2">
        <div class="container">
            <div class="pet-details-grid">

                <div class="pet-images">
                    <div class="main-image">
                        <img src="" alt="" id="mainImage">
                    </div>
                    <div class="thumbnail-grid" id="thumbnailGrid">

                    </div>
                </div>

                <div class="pet-info-2">
                    <h1 id="petName"></h1>
                    <div class="pet-badges">
                        <span class="badge" id="petType"></span>
                        <span class="badge" id="petAge"></span>
                        <span class="badge" id="petGender"></span>
                    </div>
                    <p class="pet-description" id="petDescription"></p>
                    
                    <div class="pet-characteristics">
                        <h2>Characteristics</h2>
                        <div class="characteristics-grid" id="characteristics">
                        </div>
                    </div>

                    <div class="adoption-info">
                        <h2>Adoption Information</h2>
                        <ul class="adoption-requirements">
                            <li>Must be 18 years or older</li>
                            <li>Proof of residence required</li>
                            <li>All family members must meet the pet</li>
                            <li>Home check may be required</li>
                        </ul>
                    </div>
                    <button class="primary-btn" id="adoptButton">Start Adoption Process</button>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <div class="footer-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="heart-icon"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
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
                        <li><a href="care.html">Pet Care Tips</a></li>
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
                        <button>Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 PetFinder. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="../js/pet.js"></script>
</body>
</html>