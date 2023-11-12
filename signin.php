<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
        <form class="form" method="post">
            <h1>Sign In</h1>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your Email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
           <i class="fa fa-eye" id="eye-icon"           onclick="togglePassword()"></i>
            <button type="submit">Sign In</button>
            <a target="_blank" href="signup.php">Don't have an account? <span>Sign up</span></a>
</form>
        <div class="image-container">
    
           <img src="login.jpeg">
    
        </div>
      </div>
      <script src="signin.js"></script>
</body>
</html>



<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST['email'];
        $password = trim($_POST['password']);


        // Create a database connection (using config.php)
        include 'conn.php';

        $query = "SELECT * FROM signup WHERE email='$email'";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            // After fetching the user data from the database
            $dbHashedPassword = $user['password'];
            // echo "Database Hashed Password: $dbHashedPassword <br>";

            if (password_verify($password, $dbHashedPassword)) {
                // Successful login, redirect or set session
                echo "Login successful! <br>";
                $customer_id = $user['id'];
                //echo $customer_id ;

                // Store the customer ID in the session
                // session_start();
                // $_SESSION['customer_id'] = $customer_id;
                // echo  $_SESSION['customer_id'];
                header('location:e-commerce/ecommerce.php');
                exit();
            } else {
                echo "Incorrect password!";
            }
        } 
        
        else {
            echo "User not found!";
        }

        mysqli_close($connection);
    }
    ?>