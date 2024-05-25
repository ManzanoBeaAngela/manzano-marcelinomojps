<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stardos+Stencil:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Stardos+Stencil:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">
   
    <title>Admin Dashboard</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo-container">
             <i class="fa-solid fa-arrow-left back" onclick="history.back()"></i>
            <img src="../img/logo.png" alt="" width="200" class="logo">
        </div>
        <div class="btn-container">
            
        </div>
    </nav>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm">
            <a href="landingpage.php">
            
            </a>
            </div>
            <div class="col-sm-11">
                <h1 class="admin-header text-center">ADMIN DASHBOARD</h1>
            </div>
        </div>
    </div>
    <div class="container card-container w-50 ">
        <div class="card-group m-5 gap-3 ">
            <a href="#" class="link-offset-2 link-underline link-underline-opacity-0">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Admin Profile</h5>
                    </div>
                </div>
            </a>
            <a href="adminApplication.php" class="link-offset-2 link-underline link-underline-opacity-0">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Analytics</h5>
                    </div>
                </div>
            </a>
            <a href="adminSupport.php" class="link-offset-2 link-underline link-underline-opacity-0">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Support</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="container bg-light p-5 mb-5">
        <form action="">
            <div class="row">
                <div class="col">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                <div class="col">
                    <label for="language" class="form-label">Language</label>
                    <input type="text" class="form-control" placeholder="Language" name="language">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <div class="col">
                    <label for="zip" class="form-label">Zip Code</label>
                    <input type="text" class="form-control" placeholder="Zip Code" name="zip">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="text" class="form-control" placeholder="Email Address" name="email">
                </div>
                <div class="col">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" class="form-control" placeholder="Role" name="role">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" placeholder="Address" name="address">
                </div>
                <div class="col">
                    <label for="education" class="form-label">Educational Background</label>
                    <input type="text" class="form-control" placeholder="Educational Background" name="education">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="birth" class="form-label">Birthday</label>
                    <input type="text" class="form-control" placeholder="Birthday" name="birth">
                </div>
                <div class="col">
                    <label for="contact-number" class="form-label">Contact Number</label>
                    <input type="number" class="form-control" placeholder="Contact Number" name="contact-number">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="gender" class="form-label">Gender</label>
                    <input type="text" class="form-control" placeholder="Gender" name="gender">
                </div>
                <div class="col">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" placeholder="Status" name="status">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="region" class="form-label">Region</label>
                    <input type="text" class="form-control" placeholder="Region" name="region">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <button class="btn btn-primary w-100">Submit</button>
                </div>
                <div class="col-6">
                    <button class="btn btn-outline-primary w-100">Edit Profile</button>
                </div>
            </div>
            
        </form>
    </div>
</body>

</html>