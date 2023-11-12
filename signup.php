<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>






    <div class="form-container">
        <form class="form" method="post" action="">
            <h1>Sign Up</h1>
            <label for="name"> Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your Email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
           <i class="fa fa-eye" id="eye-icon"           onclick="togglePassword()"></i>
            <input type="checkbox" class="term" id="terms" name="terms" required>
            <label for="terms">I agree to the Terms and Conditions</label>
            <button type="submit">Create Account</button>
            <a target="_blank" href="./signin.php">Already have an account? <span>Sign in</span></a>
  </form>
        <div class="image-container">
    
           <img src="login.jpeg">
    
        </div>
      </div>
      <script src="./signup.js"></script>
</body>
</html>


<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Create a database connection (using config.php)
        include 'conn.php';


        $query = "INSERT INTO signup (userame, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            echo "Registration successful!";
            header('Location:signin.php');
            exit;
        } else {
            echo "Registration failed!";
        }

        mysqli_close($connection);
    }
    ?>