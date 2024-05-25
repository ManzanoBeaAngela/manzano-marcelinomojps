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
    <title>Dashboard | MOJPS</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .job-listings {
    display: flex;
    flex-direction: column;
}

.job-item {
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    margin-bottom: 20px;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.job-title {
    margin-bottom: 10px;
}

.job-meta {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
}

.job-description {
    margin-bottom: 10px;
}

.job-requirements {
    margin-bottom: 10px;
}

.job-posted {
    font-size: 14px;
    color: #666;
}

.apply-button {
    align-self: flex-end;
}

</style>
<body>

    <?php include 'header.php'; ?>

    <div class="d-flex">
        <?php include 'sidebar.php'; ?>
        <div class="main-content">
            <div class="container">
                <h2 class="mt-4 mb-3">Job Listings</h2>
                <div class="job-listings">
                    <div class="job-item">
                        <div class="job-details">
                            <h4 class="job-title">Data Scientist</h4>
                            <p class="job-meta">
                                <span class="location">Location: Boac, Marinduque</span> |
                                <span class="industry">Industry: IT</span> |
                                <span class="job-type">Job Type: Full-time</span>
                            </p>
                            <p class="job-description">
                                We are looking for a skilled Frontend Developer to join our team. The ideal candidate should have:
                            </p>
                            <ul class="job-requirements">
                                <li>Strong proficiency in HTML, CSS, and JavaScript</li>
                                <li>Experience with modern JavaScript frameworks such as React or Vue.js</li>
                                <li>Knowledge of responsive web design principles</li>
                                <li>Excellent communication and collaboration skills</li>
                            </ul>
                            <p class="job-requirements">
                                Requirements:
                            </p>
                            <ul class="job-requirements">
                                <li>Bachelor's degree in Computer Science or a related field</li>
                                <li>Minimum of 2 years of experience in frontend development</li>
                                <li>Portfolio of previous work or projects</li>
                            </ul>
                            <p class="job-posted">Posted on: April 10, 2024</p>
                        </div>
                        <div class="apply-button">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#applyModal">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="applyModalLabel">Apply for Job</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="resume">Upload Resume</label>
                                <input type="file" class="form-control-file" id="resume">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm" onclick="apply()">Apply</button>            
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function apply() {
        window.location.href = 'applied.php';
    }
</script>


</body>
</html>
