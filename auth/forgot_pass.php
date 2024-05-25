<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Job Seeker Website</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo-container ">
            <i class="fa-solid fa-arrow-left back" onclick="history.back()"></i>
            <img src="../img/logo.png" alt="" width="200" class="logo">
        </div>
    </nav>
    <section class="center">
        <div class="menu">
            <div class="center">
                <h2>Forgot Password?</h2>
            </div>
            <div class="inputs">
                <form action="#" method="post">
                    <div class="form">
                        <div class="input-container">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="">
                        </div>
                        <div class="input-container">
                            <label for="password">New Password</label>
                            <input type="password" name="password" placeholder="">
                        </div>
                        <div class="input-container">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" name="cpassword" placeholder="">
                        </div>

                    </div>
                    <div class="">
                        <button type="submit" class="signup-btn">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>