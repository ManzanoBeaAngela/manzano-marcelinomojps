<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../styles/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Job Seeker Website</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo-container"> 
            <i class="fa-solid fa-arrow-left back" onclick="history.back()">Back</i>
            <img src="../../img/logo.png" alt="" width="200" class="logo">
        </div>
    </nav>
    <section class="body mt-0">

        <h2>Job Seeker Dashboard</h2>
        <div class="center">
            <h5>Password & Security</h5>
        </div>
        <div class="center">
            <div class="menu p-4">
                <h6 class="fw-bold">Change Password</h6>
                <form action="#" method="post">
                    <div class='row'>
                        <div class="inputs">
                            <div class="form">
                                <div class="input-container">
                                    <label for="password">Old Password</label>
                                    <input type="text" name="password" placeholder="">
                                </div>
                                <div class="input-container">
                                    <label for="new-password">New Password</label>
                                    <input type="password" name="new-password" placeholder="">
                                </div>
                                <div class="input-container">
                                    <label for="cpassword">Confirm Password</label>
                                    <input type="password" name="cpassword" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="inputs">
                            <div class="form">
                                <h6 class="fw-bold">Auto Sign-In</h6>
                                <div class="center">
                                    <p>
                                        Automatically sign-in using stored credentials.
                                    </p>
                                    <input type="radio">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttons-left">
                        <button type="submit" class="signup-btn mt-3 m-1">Save Changes</button>
                        <button type="submit" class="signup-btn mt-3 m-1">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>