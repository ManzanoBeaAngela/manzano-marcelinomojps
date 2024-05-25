<?php
session_start();
include '../../DB.php';

function sanitize_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $currentPassword = sanitize_input($_POST["currentPassword"]);
    $newPassword = sanitize_input($_POST["newPassword"]);
    $confirmPassword = sanitize_input($_POST["confirmPassword"]);
    

    $user_id = $_SESSION['user_id'];


    $sql = "SELECT password FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $currentPasswordDB = $user['password'];
        

        if ($currentPassword === $currentPasswordDB) {

            if ($newPassword === $confirmPassword) {

                $update_sql = "UPDATE users SET password = ? WHERE id = ?";
                $update_stmt = $conn->prepare($update_sql);
                $update_stmt->bind_param("si", $newPassword, $user_id);
                
                if ($update_stmt->execute()) {
                    $_SESSION['success_message'] = "Password updated successfully.";
                    header("Location: settings.php?success");
                    exit();
                } else {
                    $_SESSION['error_message'] = "Error updating password.";
                    header("Location: settings.php?error");
                    exit();
                }
            } else {
                $_SESSION['error_message'] = "New password and confirm password do not match.";
                header("Location: settings.php?password not match");
                exit();
            }
        } else {
            $_SESSION['error_message'] = "Incorrect current password.";
            header("Location: settings.php?incorrect current password");
            exit();
        }
    } else {
        $_SESSION['error_message'] = "User not found.";
        header("Location: settings.php?user not found");
        exit();
    }
}

// Close connection
$conn->close();
?>
