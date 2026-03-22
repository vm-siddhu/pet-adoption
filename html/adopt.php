<?php
session_start();
$pets = [
    ["id"=>1,
    "name"=>"Luna",
    "type"=>"dog",
    "breed"=>"Golden Retriever",
    "age"=>"2 years",
    "gender"=>"Female",
    "image"=>"../imgs/dog-6.avif",
    "description"=>"Luna is a friendly and energetic Golden Retriever."
    ],
    ["id"=>2,
    "name"=>"Max",
    "type"=>"cat",
    "breed"=>"Tabby",
    "age"=>"1 year",
    "gender"=>"Male",
    "image"=>"../imgs/cat-6.avif",
    "description"=>"Max is a curious and playful tabby cat who enjoys window watching."
    ],
    ["id"=>3,
    "name"=>"Bella",
    "type"=>"dog",
    "breed"=>"Husky",
    "age"=>"3 years",
    "gender"=>"Female",
    "image"=>"../imgs/dog-7.avif",
    "description"=>"Bella is a beautiful husky with lots of energy and love to give."
  ],
    ["id"=>4,
    "name"=>"Oliver",
    "type"=>"cat",
    "breed"=>"Persian",
    "age"=>"4 years",
    "gender"=>"Male",
    "image"=>"../imgs/cat-2.png",
    "description"=>"Oliver is a gentle Persian cat who loves to be pampered." 
    ],
    ["id"=>5,
    "name"=>"Rocky",
    "type"=>"dog",
    "breed"=>"German Shepherd",
    "age"=>"2 years",
    "gender"=>"Male",
    "image"=>"../imgs/dog-8.avif",
    "description"=>"Rocky is a smart and loyal German Shepherd."
    ],
    ["id"=>6,
    "name"=>"Simba",
    "type"=>"cat",
    "breed"=>"Siamese",
    "age"=>"2 years",
    "gender"=>"Male",
    "image"=>"../imgs/cat-3.png",
    "description"=>"Simba is a sleek Siamese cat who loves attention."
    ],
    ["id"=>7,
    "name"=>"Coco",
    "type"=>"cat",
    "breed"=>"Maine Coon",
    "age"=>"5 years",
    "gender"=>"Female",
    "image"=>"../imgs/cat-7.avif",
    "description"=>"Coco is a fluffy Maine Coon with a loving personality."
    ],
    ["id"=>8,
    "name"=>"Milo",
    "type"=>"cat",
    "breed"=>"British Shorthair",
    "age"=>"3 years",
    "gender"=>"Male",
    "image"=>"../imgs/cat-8.jpg",
    "description"=>"Milo is a calm and chubby British Shorthair who enjoys naps."
    ],
    ["id"=>9,"name"=>
    "Charlie",
    "type"=>"dog",
    "breed"=>"Beagle",
    "age"=>"1.5 years",
    "gender"=>"Male",
    "image"=>"../imgs/dog-9.jpg",
    "description"=>"Charlie is a cheerful Beagle who loves outdoor adventures."
    ],
    ["id"=>10,
    "name"=>"Daisy",
    "type"=>"dog",
    "breed"=>"Poodle",
    "age"=>"3 years",
    "gender"=>"Female",
    "image"=>"../imgs/dog-10.jpg",
    "description"=>"Daisy is a stylish and smart Poodle with a calm demeanor."
    ],
    ["id"=>11,
    "name"=>"Bruno",
    "type"=>"dog",
    "breed"=>"Boxer",
    "age"=>"4 years",
    "gender"=>"Male",
    "image"=>"../imgs/dog-5.png",
    "description"=>"Bruno is a strong and affectionate Boxer who enjoys playtime."
    ],
    ["id"=>12,
    "name"=>"Kiwi",
    "type"=>"bird",
    "breed"=>"Parakeet",
    "age"=>"1 year",
    "gender"=>"Female",
    "image"=>"../imgs/bird-1.jpg",
    "description"=>"Kiwi is a colorful parakeet who loves to chirp and sing."
    ],
    ["id"=>13,
    "name"=>"Sky",
    "type"=>"bird",
    "breed"=>"Lovebird",
    "age"=>"2 years",
    "gender"=>"Male",
    "image"=>"../imgs/bird-2.jpg",
    "description"=>"Sky is a sweet lovebird who enjoys flying around freely."
    ],
    [
        "id" => 14,
        "name" => "Chimtu",
        "type" => "dog",
        "breed" => "Desi Dog",
        "age" => "1.5 years",
        "gender" => "Male",
        "image" => "../imgs/dog-14.jpg",
        "description" => "Chimtu is a friendly and charming Desi dog with expressive eyes."
    ]
    
];


$type = isset($_GET['animal-type']) ? $_GET['animal-type'] : 'all';
$gender = isset($_GET['gender']) ? $_GET['gender'] : 'all';

$filteredPets = [];
foreach ($pets as $pet) {
    if (($type == 'all' || $pet['type'] == $type) &&
        ($gender == 'all' || $pet['gender'] == $gender)) {
        $filteredPets[] = $pet;
    }
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adopt a Pet - PetFinder</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/adopt.css">
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

    <section class="adoption-filters">
        <form class="container filters-container" method="GET">
            <div class="filter-group">
                <label for="animal-type">Animal Type</label>
                <select name="animal-type" id="animal-type">
                    <option value="all">All Animals</option>
                    <option value="dog">Dogs</option>
                    <option value="cat">Cats</option>
                    <option value="bird">Birds</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="filter-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="all">Any Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <button type="submit" class="apply-filters-btn">Apply Filters</button>
        </form>
    </section>

    <section class="pet-grid">
    <div class="container pets-container">
        <?php foreach ($filteredPets as $pet) { ?>
            <div class="pet-card">
                <div class="pet-image-container">
                    <img src="<?php echo $pet['image']; ?>" alt="pet-image" class="pet-image">
                </div>
                <div class="pet-info">
                    <h3 class="pet-name"><?php echo $pet['name']; ?></h3>
                    <div class="pet-details">
                        <div class="pet-detail"><strong>Breed:</strong> <?php echo $pet['breed']; ?></div>
                        <div class="pet-detail"><strong>Age:</strong> <?php echo $pet['age']; ?></div>
                        <div class="pet-detail"><strong>Gender:</strong> <?php echo $pet['gender']; ?></div>
                    </div>
                    <p class="pet-description"><?php echo $pet['description']; ?></p>
                    <a class="primary-btn meet-btn" href="pet.php?id=<?php echo $pet['id']; ?>">Meet <?php echo $pet['name']; ?></a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

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
