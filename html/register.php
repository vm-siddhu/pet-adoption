<?php 
session_start();
 include('connection.php');
 
 $nameerr = '';$emailerr = '';$passerr = '';$confpasserr = '';
 $name = '';$email =''; $pass =''; $confpass = '';

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confpass = $_POST['confpass'];
   
    if(empty($name)){
        $nameerr = 'Name is required';
    }else if(strlen($name) < 2 ){
        $nameerr = "Name must be at least 2 characters long.";
    }

     if(empty($email)){
         $emailerr = "Email is required.";
     }
     elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $emailerr = "Enter a valid email address (e.g., user@example.com).";
     }
 
     if(empty($pass)){
         $passerr = "Password is required.";
     }else if(strlen($pass) < 8){
         $passerr = 	"Password must be at least 8 characters long.";
     }else if(!preg_match("/[A-Z]/", $pass)){
         $passerr = 	"Password must contain at least one uppercase letter.";
     }else if(!preg_match("/[0-9]/", $pass)){
         $passerr = 		"Password must contain at least one number.";
     }

     if($pass != $confpass){
        $confpasserr = "Passwords do not match.";
     }
     
     $check = mysqli_query($conn, "SELECT * FROM usersdata WHERE email='$email'");
   
     if(isset($_POST['registration']) && empty($nameerr) && empty($emailerr) && empty($passerr) && empty($confpasserr)) {
         if(mysqli_num_rows($check) > 0){
            $emailerr = "Email already registered.";
         }
         else{
            $data = "INSERT INTO usersdata (name, email, password) VALUES ('$name', '$email', '$pass')";
            $re = mysqli_query($conn, $data);
            $_SESSION['name'] = $name;
            echo "<script>
            alert('Registered successfully')
            window.location.href = '../index.php'
         </script>";
      }
     }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - PetFinder</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/auth.css">
</head>

<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <img class="heart-icon" src="../imgs/heart-logo.png" alt="">
                <a href="../index.php" class="logo-text">PetFinder</a>
            </div>
            <button class="mobile-menu-btn">
                <button class="mobile-menu-btn">
                    <img  class="menu" src="../imgs/menu-icon.png" alt="menu">
                </button>
            </button>
            <div class="nav-links">
                <a href="../index.php">Home</a>
                <a href="adopt.php">Adopt</a>
                <a href="about.php">About</a>
            </div>
        </div>
    </nav>  
    <section class="auth-section">
        <div class="container">
            <div class="auth-container">
                <div class="auth-box">
                    <h1>Create Account</h1>
                    <p class="auth-subtitle">Join our community of pet lovers</p>

                    <form id="registerForm" method="post" class="auth-form">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name" value="<?php echo htmlspecialchars(isset($name) ? $name : ''); ?>">

                            <div class="error"><?php echo $nameerr; ?></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars(isset($email) ? $email : ''); ?>">
                            <div class="error"><?php echo $emailerr; ?></div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="password-input">
                                <input type="password" name="password" id="password">
                                <div class="error"><?php echo $passerr; ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <div class="password-input">
                                <input type="password" name="confpass" id="confirmPassword">
                                <div class="error"><?php echo $confpasserr; ?></div>
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="terms-checkbox">
                                <input type="checkbox">
                                <span>I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy
                                        Policy</a></span>
                            </label>
                        </div>
                        <input type="submit" name="registration" class="primary-btn" value="Create Account">
                    </form>

                    <p class="auth-footer">
                        Already have an account? <a href="login.php">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>