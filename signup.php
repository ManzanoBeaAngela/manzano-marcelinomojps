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
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.signup-container {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    max-width: 900px;
    width: 100%;
}

.signup-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.signup-form {
    padding: 30px;
}

.signup-form h2 {
    margin-bottom: 20px;
    font-weight: 700;
}

.signup-form .form-group {
    margin-bottom: 20px;
}

.signup-form .input-group .input-group-append .input-group-text {
    cursor: pointer;
}

.signup-form .btn {
    background-color: #007bff;
    border: none;
    padding: 10px;
}

.signup-form .btn:hover {
    background-color: #0056b3;
}

.signup-form a {
    color: #007bff;
    text-decoration: none;
}

.signup-form a:hover {
    text-decoration: underline;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .signup-container {
        flex-direction: column;
    }

    .signup-image, .signup-form {
        width: 100%;
    }

    .signup-form {
        padding: 20px;
    }
}

    </style>
</head>
<body>
    <div class="container signup-container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 signup-image">
                <img src="img/signup.jpg" alt="Sign Up Image"> <!-- Replace with your image path -->
            </div>
            <div class="col-md-6 signup-form">
                <h2 class="text-center">Sign Up</h2>
                <form>
                    <input type="hidden" name="role" value="applicant">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                            <div class="input-group-append">
                                <span class="input-group-text toggle-password" onclick="togglePassword('password')">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="confirm-password" placeholder="Confirm your password">
                            <div class="input-group-append">
                                <span class="input-group-text toggle-password" onclick="togglePassword('confirm-password')">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                    <p class="text-center mt-3">Already have an account? <a href="login.php">Log In</a></p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function togglePassword(id) {
            const passwordField = document.getElementById(id);
            const toggleIcon = passwordField.nextElementSibling.querySelector('i');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
