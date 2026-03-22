<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetFinder - Find Your Forever Friend</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <img class="heart-icon" src="imgs/heart-logo.png" alt="">
                <a class="logo-text">PetFinder</a>
            </div>
            <div class="nav-links">
                <a href="#" class="active">Home</a>
                <a href="html/adopt.php">Adopt</a>
                <a href="html/about.php">About</a>
                <form action="<?php if(isset($_SESSION['name'])) { echo 'html/logout.php';}else{echo 'html/login.php';} ?>">
                <button class="sign-in-btn"><?php echo isset($_SESSION['name']) ? 'Logout' : 'Login'; ?></button>
                </form>
            </div>
        </div>
    </nav>
    <section class="hero">
        <div class="hero-content">
            <h1 class="username">Welcome, <span><?php echo (isset($_SESSION['name'])) ? $_SESSION['name'] : 'Guest'; ?></span></h1>
            <h1 class="h1">Find Your Perfect
                <span class="hero-text2">Furry Friend</span>
            </h1>
            <p>Give a loving home to a pet in need. Browse through our selection of adorable pets waiting to meet their
                forever families.</p>
            <div class="hero-buttons">
                <button id="adopt-now-btn" class="primary-btn">Browse Pets</button>
                <a href="https://en.wikipedia.org/wiki/Pet_adoption" target="_blank"><button class="secondary-btn" id="learn-more" target="_blank">Learn More</button></a>
            </div>
        </div>
        <div class="hero-img">
            <img src="imgs/img-hero.avif" alt="Dog">
        </div>
    </section>
    <section class="featured-pets">
        <div class="container">
            <h2>Featured Pets</h2>
            <p>Meet some of our adorable pets looking for their forever homes</p>
            <div class="pets-grid">
                <div class="pets-container">
                    <div class="pet-card">
                        <div class="pet-image-container pet-card-1">
                        </div>
                        <div class="pet-info">
                            <h3 class="pet-name">Luna</h3>
                            <div class="pet-details">
                                <div class="pet-detail">
                                    <span>2years </span>
                                    <span>* Golden Retriever</span>
                                    <span>Female</span>
                                </div>
                                <p class="pet-description">Luna is a friendly and energetic Golden Retriever who loves
                                    to
                                    play fetch</p>
                            </div>

                            <button class="primary-btn" onclick="viewPet(1)">Meet Luna</button>
                        </div>
                    </div>
                    <div class="pet-card">
                        <div class="pet-image-container pet-card-2">
                        </div>
                        <div class="pet-info">
                            <h3 class="pet-name">Max</h3>
                            <div class="pet-details">
                                <div class="pet-detail">
                                    <span>1 years </span>
                                    <span>* Tabby</span>
                                    <span>Male</span>
                                </div>
                                <p class="pet-description">Max is a curious and playful tabby cat who enjoys window
                                    watching</p>
                            </div>

                            <button class="primary-btn" onclick="viewPet(2)">Meet Max</button>
                        </div>
                    </div>
                    <div class="pet-card">
                        <div class="pet-image-container pet-card-3">
                        </div>
                        <div class="pet-info">
                            <h3 class="pet-name">Bella</h3>
                            <div class="pet-details">
                                <div class="pet-detail">
                                    <span>3 years </span>
                                    <span>* Husky</span>
                                    <span>Female</span>
                                </div>
                                <p class="pet-description">Bella is a beautiful husky with lots of energy and love to
                                    give.</p>
                            </div>

                            <button class="primary-btn" onclick="viewPet(3)">Meet Bella</button>
                        </div>
                    </div>
                </div>
                <div class="view-all">
                    <button class="primary-btn" id="adopt-btn">View All Pets</button>
                </div>
            </div>  
        </div>
    </section>

    <section class="statistics">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Pets Adopted</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Partner Shelters</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">1000+</div>
                    <div class="stat-label">Happy Families</div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <div class="footer-logo">
                        <img class="heart-icon" src="imgs/heart-logo.png" alt="">
                        <span>PetFinder</span>
                    </div>
                    <p>Making pet adoption easy, accessible, and enjoyable for everyone.</p>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="html/adopt.php">Adopt</a></li>
                        <li><a href="html/about.php">About Us</a></li>
                        <li><a href="html/adopt.php">Adopt</a></li>
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

    <script src="js/script.js"></script>
</body>
</html>


