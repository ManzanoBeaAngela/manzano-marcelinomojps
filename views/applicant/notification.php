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
    <title>Notification | MOJPS</title>
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
                <h4>Notifications</h4>
                <div class="list-group">
                    <!-- Notifications -->
                    <div class="list-group-item list-group-item-action d-flex align-items-center">
                        <div class="notification-icon bg-primary text-white rounded-circle mr-3 p-3">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="notification-content">
                            <h5 class="mb-1">New Job Posted by LMD Peso</h5>
                            <p class="mb-0">LMD Peso has posted a new job: Software Developer.</p>
                            <small class="text-muted">10 minutes ago</small>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action d-flex align-items-center">
                        <div class="notification-icon bg-info text-white rounded-circle mr-3 p-3">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="notification-content">
                            <h5 class="mb-1">New Comment on Job Post</h5>
                            <p class="mb-0">A user commented on the job post: Marketing Manager.</p>
                            <small class="text-muted">15 minutes ago</small>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action d-flex align-items-center">
                        <div class="notification-icon bg-warning text-white rounded-circle mr-3 p-3">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <div class="notification-content">
                            <h5 class="mb-1">Job Listing Expired</h5>
                            <p class="mb-0">The job listing for Data Analyst has expired.</p>
                            <small class="text-muted">20 minutes ago</small>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action d-flex align-items-center">
                        <div class="notification-icon bg-danger text-white rounded-circle mr-3 p-3">
                            <i class="fas fa-ban"></i>
                        </div>
                        <div class="notification-content">
                            <h5 class="mb-1">User Account Suspended</h5>
                            <p class="mb-0">A user account has been suspended due to policy violations.</p>
                            <small class="text-muted">25 minutes ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
