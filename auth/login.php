<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Stardos+Stencil:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        
    <title>Job Seeker Website</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Stardos+Stencil:wght@400;700&display=swap');
    </style>
</head>

<body>
<body>
<nav class="navbar">
        <div class="logo-container">
            <i class="fa-solid fa-arrow-left back" onclick="history.back()"></i>
            <img src="../img/logo.png" alt="" width="200" class="logo">
        </div>

   
    </nav>
    <section class="center">
    <section class="login-form">
        <h2 class="center">Login</h2>
        <div class="center">
            <form action="" method="post">
                <div class="form">
                    <div class="input-container">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username"placeholder="">

                    </div>

                    <div class="input-container">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="">
                    </div>
                </div>
                <a href="forgot_pass.php">
                    <p>Forgot Password?</p>
                </a>
                <div class="">
                    <button type="button" id="btn" class="signup-btn">Log In</button> 
                </div>
            </form>
        </div>
    </section>

    </section>
  <script>
     document.getElementById("btn").addEventListener("click", btn);
    function btn() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        // Check if username and password are correct
        if (username === "bmanzano" && password === "bmanzano123") {
            alert("Login successful! Welcome to the Job Seeker dashboard.");
            // Redirect to the dashboard or display it here
            window.location.href = "../dashboard/landingpage.php";
        
        }
        else if (username === "employer" && password === "employer123") {
            alert("Login successful! Welcome to the employer dashboard.");
            // Redirect to the dashboard or display it here
            window.location.href = "../dashboard/postJob.php";
        
        }
        else if (username === "beidyadmin" && password === "admin123") {
            alert("Login successful! Welcome to the Admin dashboard.");
            // Redirect to the dashboard or display it here
            window.location.href = "../dashboard/adminDashboard.php";
        } 
        else {
            alert("Incorrect username or password. Please try again.");
        }
        }

  </script>
             
</body>

</html>