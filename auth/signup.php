<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $password = $_POST['password'];
        $lastname = $_POST['lastname'];
        $cpassword = $_POST['cpassword'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "insert into signup (username, firstname, password, lastname, cpassword, gender, contact, address) values ('$username', '$firstname', '$password', '$lastname', '$cpassword', '$gender', '$contact', '$address')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else
        {
          echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
  
        }

    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        
    <title>Sign Up</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo-container">
            <i class="fa-solid fa-arrow-left back" onclick="history.back()"></i>
            <img src="../img/logo.png" alt="" width="200" class="logo">
        </div>

    </nav>
    <section class="center">
        <section class="menu">
            <h2 class="center">Sign Up</h2>
            <div class="inputs">
                <form action="db.php" method="post">
                    <div class="row">
                        <div class=" col">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="" >
                        </div>
                        <div class="col">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="" >
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col">
                            <label for="password">Password</label>
                            <input type="password"  class="form-control" id="password" name="password" placeholder="">
                        </div>
                        <div class="col">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="cpassword">Confirm Password</label>
                            <input type="cpassword" class="form-control" id="cpassword" name="cpassword" placeholder=" " >
                        </div>
                        <div class="col">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-select" placeholder='' style="width: 100%">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <label for="contact">Contact</label>
                            <input type="number" class="form-control" id="contact" name="contact" placeholder="" \>
                        </div>
                        <div class="col">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="">
                        </div>
                    </div>

                    <div class="mt-3">
                        <button class="signup-btn" type="submit">
                        <a href="db.php">Sign Up</button>
                        
                    </div>
                    
                    
                        
            </form>
            </div>
        </section>
    </section>
</body>

</html>