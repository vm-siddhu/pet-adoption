<?php 
session_start();
 include('connection.php');

 $emailerr = '';
 $passerr = '';
 $email = '';
 $pass = '';
 $loginerr = '';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

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
    
    if (empty($emailerr) && empty($passerr)) {
        if(isset($_POST['login'])){
            $sql = "SELECT * FROM usersdata WHERE email= '$email' AND password ='$pass'";
            $datalogin = mysqli_query($conn,  $sql);
            $checking = mysqli_num_rows($datalogin);
            if($checking){
                $user = mysqli_fetch_assoc($datalogin);
                $_SESSION['name'] = $user['name'];
                echo "<script>
               alert('Login successfully')
               window.location.href = '../index.php'
            </script>";
            }else{
                $loginerr = "Invalid email or password!";
            }
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PetFinder</title>
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
            <div class="nav-links">
                <a href="../index.php" class="active">Home</a>
                <a href="adopt.php">Adopt</a>
                <a href="about.php">About</a>
            </div>
        </div>
    </nav>

    <section class="auth-section">
        <div class="container">
                <div class="auth-box">
                    <h1>Welcome Back</h1>
                    <p class="auth-subtitle">Sign in to continue your pet adoption journey</p>

                    <form id="loginForm" method="post" class="auth-form">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email">
                            <div class="error"><?php echo $emailerr; ?></div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="password-input">
                                <input type="password" name="password" id="password">
                                <div class="error"><?php echo $passerr; ?></div>
                            </div>
                        </div>
                        <div class="form-options">
                            <label class="remember-me">
                                <input type="checkbox" id="remember">
                                <span>Remember me</span>
                            </label>
                            <a href="#" class="forgot-password">Forgot password?</a>
                        </div>
                        <div class="error"><?php echo $loginerr; ?></div>
                        <input type="submit"  name="login" class="primary-btn" value="Sign In">
                    </form>
                    <p class="auth-footer">
                        Don't have an account? <a href="register.php">Sign up</a>
                    </p>
                </div>
            </div>
    </section>
</body>
</html>