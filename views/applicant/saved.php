<?php
include '../../session.php';

$user_id = $_SESSION['user_id'];
$user_email = $_SESSION['email'];
$user_fullname = $_SESSION['fullname'];
$user_name = $_SESSION['username'];
$user_role = $_SESSION['role'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Jobs | MOJPS</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="d-flex">
        <?php include 'sidebar.php'; ?>
        <div class="main-content">
            <div class="content p-4">
                <h4>Saved Jobs</h4>
                <div class="list-group">
                    <!-- Sample saved jobs -->
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Frontend Developer</h5>
                            <small>Location: Boac, Marinduque</small>
                        </div>
                        <p class="mb-1">We are looking for a skilled Frontend Developer to join our team...</p>
                        <small>Saved on: April 10, 2024</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Data Scientist</h5>
                            <small>Location: Gasan, Marinduque</small>
                        </div>
                        <p class="mb-1">Join our data science team and help us extract insights from large datasets...</p>
                        <small>Saved on: April 5, 2024</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Marketing Specialist</h5>
                            <small>Location: Mogpog, Marinduque</small>
                        </div>
                        <p class="mb-1">We need a marketing specialist to boost our brand presence...</p>
                        <small>Saved on: March 30, 2024</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Product Manager</h5>
                            <small>Location: Santa Cruz, Marinduque</small>
                        </div>
                        <p class="mb-1">Looking for a product manager to oversee product development...</p>
                        <small>Saved on: March 25, 2024</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">HR Manager</h5>
                            <small>Location: Torrijos, Marinduque</small>
                        </div>
                        <p class="mb-1">We are hiring an HR manager to manage our recruitment and employee relations...</p>
                        <small>Saved on: March 20, 2024</small>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
