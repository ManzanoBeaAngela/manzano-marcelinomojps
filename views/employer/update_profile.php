<?php
session_start();
include '../../DB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $user_id = $_SESSION['user_id']; 
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $birthdate = $_POST['birthdate'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];


    $sql = "UPDATE users SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', birthdate='$birthdate', username='$username', gender='$gender' WHERE id='$user_id'";

    if ($conn->query($sql) === TRUE) {

        $_SESSION['username'] = $username;
        $_SESSION['fullname'] = $first_name . ' ' . $last_name;

        sleep(2);

        header("Location: profile.php?success");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
