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
            <!-- Add tabs or filters for different notification statuses -->
            <ul class="nav nav-tabs mb-4">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#active">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="javascript:void(0)" onclick="showTab('pending')">Pending</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="javascript:void(0)" onclick="showTab('closed')">Closed</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active" id="active">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Senior Software Engineer - Active</a>
                        <a href="#" class="list-group-item list-group-item-action">Marketing Manager - Active</a>
                        <a href="#" class="list-group-item list-group-item-action">Sales Representative - Active</a>
                    </div>
                </div>
                <div class="tab-pane container fade" id="pending">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Data Analyst - Pending</a>
                        <a href="#" class="list-group-item list-group-item-action">Graphic Designer - Pending</a>
                        <a href="#" class="list-group-item list-group-item-action">Customer Service Representative - Pending</a>
                    </div>
                </div>
                <div class="tab-pane container fade" id="closed">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Project Manager - Closed</a>
                        <a href="#" class="list-group-item list-group-item-action">Human Resources Specialist - Closed</a>
                        <a href="#" class="list-group-item list-group-item-action">Financial Analyst - Closed</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showTab(tabName) {
        $('.tab-pane').removeClass('active show');
        $('#' + tabName).addClass('active show');
    }
</script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
