<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skyline Registration</title>
    <link rel="icon" href="image/PAGEICON.jpg">
    <link rel="stylesheet" href="signup.css">
     
</head>
<body>

    </div>
    <div class="registration-container">
        <h2>Sign Up</h2>
        <form action='db.php' method="POST">
            <input type="text" name="firstname" placeholder="First Name" required><br>
            <input type="text" name="lastname" placeholder="Last Name" required><br>
            <input type="email" name="email" placeholder="Email Address" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
            <input type="submit" value="Register"><br> 
            <p style="margin-top: 10px;"><a href="login.php">Back to login</a>.</p>
        </form>
        
    </div>

</body>
</html>