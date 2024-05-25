<?php
include '../../DB.php';
include '../../session.php';

$user_id = $_SESSION['user_id'];
$user_email = $_SESSION['email'];
$user_fullname = $_SESSION['fullname'];
$user_name = $_SESSION['username'];
$user_role = $_SESSION['role'];

// Fetch user data from the database based on user ID
$sql = "SELECT * FROM users WHERE id = '$user_id'";
$result = $conn->query($sql);

// Check if user data exists
if ($result->num_rows > 0) {
    // Fetch user data
    $user_data = $result->fetch_assoc();
    $first_name = $user_data['first_name'];
    $middle_name = $user_data['middle_name'];
    $last_name = $user_data['last_name'];
    $birthdate = $user_data['birthdate'];
    $username = $user_data['username'];
    $gender = $user_data['gender'];

} else {
    // Handle case where user data is not found
    $first_name = '';
    $middle_name = '';
    $last_name = '';
    $birthdate = '';
    $username = '';
    $gender = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile | MOJPS</title>
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
            <div class="container mt-4">
                <h2>User Profile</h2>
                <form action="update_profile.php" method="POST">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $first_name; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $last_name; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?php echo $middle_name; ?>">
                            </div>
                            <div class="form-group">
                                <label for="birthdate">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option value="" disabled selected>- Select Gender -</option>
                            <option value="Male" <?php if ($gender == 'Male') echo 'selected'; ?>>Male</option>
                            <option value="Female" <?php if ($gender == 'Female') echo 'selected'; ?>>Female</option>
                            <option value="prefer-not-to-say" <?php if ($gender == 'prefer-not-to-say') echo 'selected'; ?>>Prefer not to say</option>
                        </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="birthdate">Birthdate</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?php echo $birthdate; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

