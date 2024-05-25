<?php
include 'DB.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $birthdate = $_POST['birthdate'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = $_POST['role'];

    $error_message = '';

    // Check if passwords match
    if ($password !== $confirm_password) {
        $_SESSION['error_message'] = "Passwords do not match.";
    }

    // Check if user is at least 18 years old
    $current_date = new DateTime();
    $birthdate_date = new DateTime($birthdate);
    $age = $current_date->diff($birthdate_date)->y;
    if ($age < 18) {
        $_SESSION['error_message'] = "You must be at least 18 years old to sign up.";
    }

    // Check if username or email already exists
    $query = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $query->bind_param('ss', $username, $email);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error_message'] = "Username or email already exists.";
    }

    // Check if combined name exists
    $combined_name = $first_name . $middle_name . $last_name;
    $query = $conn->prepare("SELECT * FROM users WHERE CONCAT(first_name, middle_name, last_name) = ?");
    $query->bind_param('s', $combined_name);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error_message'] = "A user with this name already exists.";
    }

    if (empty($error_message)) {

        // Insert the user into the database
        $query = $conn->prepare("INSERT INTO users (first_name, middle_name, last_name, email, role, username, birthdate, password, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())");
        $query->bind_param('ssssssss', $first_name, $middle_name, $last_name, $email, $role, $username, $birthdate, $password);

        if ($query->execute()) {
            header('Location: login.php');
            exit();
        } else {
            $_SESSION['error_message'] = "There was an error creating your account. Please try again.";
        }
    }
}
?>


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Poppins font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #202235;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;

        }

        .login-image {
            position: relative;
            text-align: left;
        }

        .login-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 50px; /* Adjust the width to make the logo smaller */
            height: auto; /* Maintain aspect ratio */
        }

        .login-form {
            padding: 20px 50px;
            background-color: #737272;
        }

        .login-form h2 {
            margin-bottom: 40px;
            font-weight: 700;
            color: #ffa811;
        }

        .login-form .form-group {
            margin-bottom: 20px;
        }

        .login-form label {
            font-size: 0.875rem; /* Smaller text */
            color: #ffffff;
        }

        .login-form input, .login-form select {
            font-size: 0.875rem; /* Smaller text */
        }

        .login-form .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .login-form .btn {
            background-color: #007bff;
            border: none;
            padding: 10px;
        }

        .login-form .btn:hover {
            background-color: #0056b3;
        }

        .login-form a {
            color: #c1c1c1;
            text-decoration: none;
        }

        .login-form a:hover {
            text-decoration: underline;
        }

        .fpass, .ask-text {
            font-size: 0.875rem;
        }

        .login-form .btn {
            background-color: #1f4167;
            border: none;
            padding: 10px;
            color: #ffffff;
        }

        .login-form .btn:hover {
            background-color: #173151;
        }

        .login-form .btn:focus {
            background-color: #12243c;
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(31, 65, 103, 0.25);
        }
        .alert-danger{
            font-size: 0.875rem;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .login-image {
                max-width: 50%;
            }

            .login-container {
                flex-direction: column;
                margin: 10px;
            }

            .login-image, .login-form {
                width: 100%;
            }

            .login-form {
                background-color: #ffffff;
                padding: 20px;
            }

            .login-form label {
                color: #2d3033;
            }

            .login-form a {
                color: #646464;
            }

            .logo {
                width: 40px; /* Adjust the width for smaller screens */
            }
        }
    </style>
</head>
<body>
    <div class="container login-container">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-6 login-image">
            <img src="img/logos.png" class="logo" alt="Logo"> <!-- Replace with your logo path -->
            <img src="img/login-img.jpg" class="login-img" alt="Login Image"> <!-- Replace with your image path -->
        </div>
        <div class="col-md-6 login-form">
            <h2 class="text-center">SIGN UP</h2>
<?php
                if (isset($_SESSION['error_message'])) {
        echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
    }
    ?>
            <form action="register.php" method="POST">
                <input type="hidden" name="role" value="employer">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="middle_name">Middle Name</label>
                        <input type="text" class="form-control" id="middle_name" name="middle_name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="birthdate">Birthdate</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option value="" disabled selected>- Gender -</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="prefer-not-to-say">Prefer not to say</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter at least 6 characters" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Re-enter password" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-block">Sign Up</button>
                <p class="text-center mt-3 ask-text">Already have an account? <a href="login.php">Log In</a></p>
            </form>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
