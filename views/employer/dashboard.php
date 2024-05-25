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
<body>

    <?php include 'header.php'; ?>

    <div class="d-flex">
        <?php include 'sidebar.php'; ?>
        <div class="main-content">
            <div class="content-header">
                <h2>Dashboard</h2>
            </div>
            <div class="stats">
                <div class="stat users">
                    <i class="fas fa-briefcase"></i>
                    <div>
                        <h3>254</h3>
                        <p>Job Posted</p>
                    </div>
                </div>
                <div class="stat jobs">
                    <i class="fas fa-user"></i>
                    <div>
                        <h3>200</h3>
                        <p>Applicants</p>
                    </div>
                </div>
                <div class="stat applications">
                    <i class="fas fa-times-circle"></i>
                    <div>
                        <h3>15</h3>
                        <p>Job Closed</p>
                    </div>
                </div>
                <div class="stat seekers">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <h3>70%</h3>
                        <p>Hired Success</p>
                    </div>
                </div>
            </div>

            <div class="charts">
                <div class="chart">
                    <h5 class="card-header">Job Posting Summary</h5>
                    <canvas id="jobPostingSummaryChart"></canvas>
                </div>

                <div class="chart">
                    <h5 class="card-header">Overview of Received Applications</h5>
                    <canvas id="receivedApplicationsChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Sample data for job posting summary
        const jobPostingSummaryData = {
            labels: ['Active', 'Pending', 'Closed'],
            datasets: [{
                label: 'Job Posting Summary',
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1,
                data: [20, 10, 5] // Replace with actual data
            }]
        };

        // Get the context of the canvas element
        const jobPostingSummaryCtx = document.getElementById('jobPostingSummaryChart').getContext('2d');

        // Create the job posting summary chart
        const jobPostingSummaryChart = new Chart(jobPostingSummaryCtx, {
            type: 'bar',
            data: jobPostingSummaryData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <script>
        // Sample data for overview of received applications
        const receivedApplicationsData = {
            labels: ['New', 'Reviewed', 'Shortlisted'],
            datasets: [{
                label: 'Overview of Received Applications',
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1,
                data: [15, 20, 10] // Replace with actual data
            }]
        };

        // Get the context of the canvas element
        const receivedApplicationsCtx = document.getElementById('receivedApplicationsChart').getContext('2d');

        // Create the overview of received applications chart
        const receivedApplicationsChart = new Chart(receivedApplicationsCtx, {
            type: 'bar',
            data: receivedApplicationsData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
