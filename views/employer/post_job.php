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
    <title>Post Job | MOJPS</title>
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
            <h4>Post a Job</h4>
            <form action="process_job_post.php" method="POST">
                <div class="form-group">
                    <label for="job_title">Job Title</label>
                    <input type="text" class="form-control" id="job_title" name="job_title" required>
                </div>
                <div class="form-group">
                    <label for="job_description">Job Description</label>
                    <textarea class="form-control" id="job_description" name="job_description" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="job_requirements">Job Requirements</label>
                    <textarea class="form-control" id="job_requirements" name="job_requirements" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="job_location">Job Location</label>
                    <input type="text" class="form-control" id="job_location" name="job_location" required>
                </div>
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="text" class="form-control" id="salary" name="salary" required>
                </div>
                <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Post Job</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
