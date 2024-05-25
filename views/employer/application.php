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
    <title>Job Applications | MOJPS</title>
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
                <h4>Job Applications</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Job Title</th>
                                <th>Applicant Name</th>
                                <th>Application Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Software Engineer</td>
                                <td>John Doe</td>
                                <td>2024-05-20</td>
                                <td>Pending</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Review</button>
                                    <button class="btn btn-danger btn-sm">Reject</button>
                                    <button class="btn btn-success btn-sm">Shortlist</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Data Analyst</td>
                                <td>Jane Smith</td>
                                <td>2024-05-21</td>
                                <td>Reviewed</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Review</button>
                                    <button class="btn btn-danger btn-sm">Reject</button>
                                    <button class="btn btn-success btn-sm">Shortlist</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Marketing Manager</td>
                                <td>Michael Johnson</td>
                                <td>2024-05-22</td>
                                <td>Shortlisted</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Review</button>
                                    <button class="btn btn-danger btn-sm">Reject</button>
                                    <button class="btn btn-success btn-sm">Shortlist</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Graphic Designer</td>
                                <td>Emily Brown</td>
                                <td>2024-05-23</td>
                                <td>Pending</td>                                
                                <td>
                                    <button class="btn btn-primary btn-sm">Review</button>
                                    <button class="btn btn-danger btn-sm">Reject</button>
                                    <button class="btn btn-success btn-sm">Shortlist</button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Customer Service</td>
                                <td>David Wilson</td>
                                <td>2024-05-24</td>
                                <td>Pending</td>                                
                                <td>
                                    <button class="btn btn-primary btn-sm">Review</button>
                                    <button class="btn btn-danger btn-sm">Reject</button>
                                    <button class="btn btn-success btn-sm">Shortlist</button>
                                </td>
                            </tr>
                            <!-- Add more rows for other job applications -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
