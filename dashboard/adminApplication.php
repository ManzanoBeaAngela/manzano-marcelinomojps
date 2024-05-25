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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Stardos+Stencil:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Admin Application Sent</title>
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
                

            </div>
            <div class="col-sm-11">
                <h1 class="admin-header text-center">ADMIN DASHBOARD</h1>
            </div>
        </div>
    </div>
    <div class="container card-container w-50 ">
        <div class="card-group m-5 gap-3 ">
            <a href="adminDashboard.php" class="link-offset-2 link-underline link-underline-opacity-0">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Admin Profile</h5>
                    </div>
                </div>
            </a>
            <a href="#" class="link-offset-2 link-underline link-underline-opacity-0">
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
        <div class="card-group gap-3 p-5 pb-0 pt-0">
            <div class="card application">
                <div class="card-body text-center">
                    <h5 class="card-title">Application Sent</h5>
                    <h1><i class="fa-regular fa-paper-plane"></i></h1>
                    
                </div>
            </div>
            <div class="card hired">
                <div class="card-body text-center">
            <a href="adminHired.php">    
                <h5 class="card-title">Hired</h5>
                    <h1><i class="fa-solid fa-phone"></i></h1>
                </div>
            </a>
            </div>

            <div class="card bg-warning">
                <div class="card-body text-center">
                    <a href="jobTrends.php">
                        <h5 class="card-title">Job Trends</h5>
                        <h1><i class="fa-solid fa-arrow-trend-up"></i></h1>
                    </a>
                </div>
            </div>
            <div class="card visibility">
                <div class="card-body text-center">
                    <a href="jobVisibility.php">
                        <h5 class="card-title">Job Visibility</h5>
                        <h1><i class="fa-solid fa-magnifying-glass"></i></h1>
                    </a>
                </div>
            </div>
        </div>
        <div class="container p-3 shadow-sm mt-3">
            <div class="d-flex justify-content-center ">
                <img src="../img/ss-app.png" class="img">
            </div>
        </div>
    </div>
</body>

</html>