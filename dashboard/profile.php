<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Job Seeker Website</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo-container">
        <i class="fa-solid fa-arrow-left back" onclick="history.back()"></i>

            <img src="../img/logo.png" alt="" width="200" class="logo">
        </div>
    </nav>
    <section class="body mt-0">

        <h2>Job Seeker Dashboard</h2>
        <div class="center">
            <h5>Profile</h5>
        </div>
        <div class="center">
            <div class="menu p-4">
                <form action="profile_pro.php" method="post">
                <div class='row'>
                    <div class="col">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" placeholder="" class="form-control">
                        </div>
                        <div class="col">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" placeholder="" class="form-control">
                        </div>
                        </div>
                    <div class="row">
                        <div class="col">
                            <label for="username">Username</label>
                            <input type="text" name="username" placeholder="" class="form-control">
                        </div>
                        <div class="col">
                            <label for="birthday">Birthday</label>
                            <input type="date" name="birthday" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="" class="form-control">
                        </div>
                        <div class="col">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" name="cpassword" placeholder=" " class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" placeholder=''class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="male">Others..</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="nationality">Nationality</label>
                            <input type="text" name="nationality" placeholder=" " class="form-control">
                        </div>

                    </div>
                    <div class='row'>
                        <div class="col">
                            <label for="contact">Contact</label>
                            <input type="number" name="contact" placeholder="" class="form-control">
                        </div>
                        <div class="col">
                            <label for="address">Address</label>
                            <input type="text" name="address" placeholder="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="">
                        <button type="submit" class="signup-btn mt-3">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>