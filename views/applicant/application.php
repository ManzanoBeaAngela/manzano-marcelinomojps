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

    <!-- Include header.php here -->
    <?php include 'header.php'; ?>

    <div class="d-flex">
        <!-- Include sidebar.php here -->
        <?php include 'sidebar.php'; ?>
        <div class="main-content p-4">
            <h4>My Job Applications</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Job Title</th>
                            <th scope="col">Company</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date Applied</th>
                            <th scope="col">Updates/Communications</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Software Engineer</td>
                            <td>Tech Solutions</td>
                            <td>Under Review</td>
                            <td>2024-05-01</td>
                            <td>Interview scheduled for 2024-05-10</td>
                        </tr>
                        <tr>
                            <td>Marketing Manager</td>
                            <td>Creative Agency</td>
                            <td>Accepted</td>
                            <td>2024-04-25</td>
                            <td>Offer letter sent</td>
                        </tr>
                        <tr>
                            <td>Data Analyst</td>
                            <td>Finance Corp</td>
                            <td>Rejected</td>
                            <td>2024-04-20</td>
                            <td>Position filled</td>
                        </tr>
                        <tr>
                            <td>Graphic Designer</td>
                            <td>Design Studio</td>
                            <td>Pending</td>
                            <td>2024-05-03</td>
                            <td>Portfolio review in progress</td>
                        </tr>
                        <tr>
                            <td>Customer Service Representative</td>
                            <td>Retail Solutions</td>
                            <td>Interview Scheduled</td>
                            <td>2024-05-02</td>
                            <td>Interview on 2024-05-15</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
