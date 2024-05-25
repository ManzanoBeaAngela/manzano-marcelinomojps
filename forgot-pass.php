
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
            max-width: 900px;
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
            padding: 70px;
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

        .login-form input {
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
        .fpass, .ask-text{
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
            padding: 0.35rem 1.25rem;
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
                <h2 class="text-center">FORGOT PASSWORD</h2>

                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                    </div>
                    <button type="submit" class="btn btn-block">Submit</button>
                    <p class="text-center mt-3 ask-text">Remember Password? <a href="login.php">Log In</a></p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
