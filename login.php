<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skyline Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="image/PAGEICON.jpg">
</head>
<body>
<header>
    <h1>Skyline Airways</h1>
    <p>Your trusted travel companion</p><hr><br>
</header>
<main>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm" action="db.php" method="post">
            <input type="text" id="username" name="username" placeholder="Email" required><br>
            <div style="position: relative;">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="checkbox" id="show-password">
                <label for="show-password">Show Password</label>
            </div><br>
            <input type="submit" value="Login">
            <p id="errorMessage" style="text-align: center; margin-top: 10px;"></p>
            <p style="text-align: center;"><a href="signup.php">No account? register here</a>.</p>
        </form>
    </div>
    <script>
    document.getElementById("show-password").addEventListener("change", function() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    });

    // Clear error message when the user starts typing again
    document.getElementById("username").addEventListener("input", function() {
        document.getElementById("errorMessage").textContent = "";
    });

    document.getElementById("password").addEventListener("input", function() {
        document.getElementById("errorMessage").textContent = "";
    });

    // Prevent default form submission
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        event.preventDefault();
        // Add your form validation and submission code here
        // For example, you can use JavaScript to validate the form fields before submitting
    });
</script>
</main>
</body>
</html>
