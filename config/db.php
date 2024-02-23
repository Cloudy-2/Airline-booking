<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "datas";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if ($conn->connect_error) {
        die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            die();
        }

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $SELECT = "SELECT Email FROM logindata WHERE Email = ? LIMIT 1";   
        $INSERT = "INSERT INTO logindata (firstname, lastname, Email, password) VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();  
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum == 0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssss", $firstname, $lastname, $email, $hashed_password);
            $stmt->execute();
            echo "Registration Complete";
        } else {
            echo "Email not Available!";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All Fields Are Required";
    die();
}
?>
