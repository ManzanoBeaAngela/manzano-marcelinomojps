<?php
include '../../DB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $middleName = mysqli_real_escape_string($conn, $_POST['middleName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    $sql = "INSERT INTO users (first_name, middle_name, last_name, email, username, password) 
            VALUES ('$firstName', '$middleName', '$lastName', '$email', '$username', '$password')";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success" role="alert">User added successfully!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $conn->error . '</div>';
    }

    $conn->close();
}
?>
