 <?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    // Redirect to login if not logged in or role is not set
    header("Location: ../../login.php");
    exit();
}$user_id = $_SESSION['user_id'];
$user_email = $_SESSION['email'];
$user_name = $_SESSION['fullname'];
$user_role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users | MOJPS</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="d-flex">
        <?php include 'sidebar.php'; ?>
        <div class="main-content">
    <div class="content">
        <h1>Users</h1>
                <div class="user-actions text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
    Add User
</button>
            <!-- Additional actions for managing users -->
        </div>
<?php
// Connect to the database
include '../../DB.php';

// Fetch users with role "Applicant" from the database
$sql = "SELECT * FROM users WHERE role = 'Applicant'";
$result = $conn->query($sql);

// Check if there are any users
if ($result->num_rows > 0) {
    // Output each user as a user card
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-lg-3 col-md-4 col-sm-6 mb-4">';
        echo '<div class="card user-card">';
        echo '<img src="../../img/user.png" class="card-img-top" alt="User Image">'; // Update image source
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['first_name'] . ' ' . $row['last_name'] . '</h5>';
        echo '<p class="card-text subtext">Email: ' . $row['email'] . '</p>';
        // Additional user details as needed
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
} else {
    // No users found
    echo '<p class="text-center">No users found.</p>';
}

// Close database connection
$conn->close();
?>


    </div>


    <!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- User input fields -->
                <form action="insert_user.php" method="POST" id="addUserForm" >
                    <div id="addUserMessage"></div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter first name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="middleName">Middle Name</label>
                        <input type="text" class="form-control" id="middleName" placeholder="Enter middle name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter last name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                    </div>
                </div>
                </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary cancel-btn" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addUserBtn" >Add</button>
            </div>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Handle form submission
    document.getElementById('addUserBtn').addEventListener('click', function() {
        // Validate form fields
        var firstName = document.getElementById('firstName').value.trim();
        var middleName = document.getElementById('middleName').value.trim();
        var lastName = document.getElementById('lastName').value.trim();
        var email = document.getElementById('email').value.trim();
        var username = document.getElementById('username').value.trim();
        var password = document.getElementById('password').value.trim();

        // Check if all fields are filled
        if (firstName === '' || lastName === '' || email === '' || username === '' || password === '') {
            document.getElementById('addUserMessage').innerHTML = '<div class="alert alert-danger" role="alert">Please fill in all fields.</div>';
            return;
        }

        // Send AJAX request to insert user into database
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'insert_user.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Display response from server
                document.getElementById('addUserMessage').innerHTML = xhr.responseText;
                // Clear form fields on success
                if (xhr.responseText.includes('success')) {
                    document.getElementById('addUserForm').reset();
                }
            }
        };
        xhr.send('firstName=' + firstName + '&middleName=' + middleName + '&lastName=' + lastName + '&email=' + email + '&username=' + username + '&password=' + password);
    });
</script>

</body>
</html>
