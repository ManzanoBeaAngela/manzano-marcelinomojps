 <?php
session_start();

if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>

<?php
// Connect to the database
include '../../DB.php';

// Fetch users with role "Applicant" from the database
$sql = "SELECT * FROM users WHERE role = 'Applicant'";
$result = $conn->query($sql);

// Check if there are any users
if ($result->num_rows > 0) {
    // Output each user as a user card
    echo '<div class="user-list">';
    $count = 0;
    while ($row = $result->fetch_assoc()) {
        if ($count % 4 == 0) {
            echo '<div class="user-row">';
        }
        echo '<div class="user-card">';
        echo '<img src="img/profile.png" alt="User Image">'; // Update image source
        echo '<div class="user-details">';
        echo '<h2>' . $row['first_name'] . ' ' . $row['last_name'] . '</h2>';
        echo '<p>Email: ' . $row['email'] . '</p>';
        echo '<p>Role: ' . $row['role'] . '</p>';
        // Additional user details as needed
        echo '</div>';
        echo '</div>';
        if (($count + 1) % 4 == 0 || ($count + 1) == $result->num_rows) {
            echo '</div>';
        }
        $count++;
    }
    echo '</div>';
} else {
    // No users found
    echo '<p>No users found.</p>';
}

// Close database connection
$conn->close();
?>