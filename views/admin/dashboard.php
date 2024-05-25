<?php
include '../../session.php';

$user_id = $_SESSION['user_id'];
$user_email = $_SESSION['email'];
$user_name = $_SESSION['fullname'];
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
                <h1>Dashboard</h1>
            </div>
            <div class="stats">
                <div class="stat users">
                    <i class="fas fa-users"></i>
                    <div>
                        <h3>150</h3>
                        <p>Total Users</p>
                    </div>
                </div>
                <div class="stat jobs">
                    <i class="fas fa-briefcase"></i>
                    <div>
                        <h3>75</h3>
                        <p>Job Listings</p>
                    </div>
                </div>
                <div class="stat applications">
                    <i class="fas fa-file-alt"></i>
                    <div>
                        <h3>200</h3>
                        <p>Applications</p>
                    </div>
                </div>
                <div class="stat seekers">
                    <i class="fas fa-search"></i>
                    <div>
                        <h3>100</h3>
                        <p>Active Seekers</p>
                    </div>
                </div>
            </div>
            <div class="charts">
                <div class="chart">
                    <h5 class="card-header">User Growth</h5>
                    <canvas id="userGrowthChart"></canvas>
                </div>
                <div class="chart">
                    <h5 class="card-header">Job Listings by Category</h5>
                    <canvas id="jobListingsChart"></canvas>
                </div>
                <div class="chart">
                    <h5 class="card-header">Applications Status</h5>
                    <canvas id="applicationsChart"></canvas>
                </div>
                <div class="chart">
                    <h5 class="card-header">Job Applications Trend</h5>
                    <div class="card-body cbody">
                        <canvas id="jobApplicationsChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>    
    <script>
    $(document).ready(function() {
        $('#sidebarToggle').on('click', function() {
            $('.sidebar').toggleClass('active');
        });
    });

    // Chart.js scripts to generate the charts
    const userGrowthCtx = document.getElementById('userGrowthChart').getContext('2d');
    const userGrowthChart = new Chart(userGrowthCtx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'User Growth',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: 'rgba(0, 123, 255, 0.2)',
                borderColor: 'rgba(0, 123, 255, 1)',
                borderWidth: 2
            }]
        }
    });

    const jobListingsCtx = document.getElementById('jobListingsChart').getContext('2d');
    const jobListingsChart = new Chart(jobListingsCtx, {
        type: 'bar',
        data: {
            labels: ['IT', 'Marketing', 'Finance', 'Sales', 'HR', 'Operations'],
            datasets: [{
                label: 'Job Listings',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: 'rgba(255, 69, 0, 0.2)',
                borderColor: 'rgba(255, 69, 0, 1)',
                borderWidth: 2
            }]
        }
    });

    const applicationsCtx = document.getElementById('applicationsChart').getContext('2d');
    const applicationsChart = new Chart(applicationsCtx, {
        type: 'pie',
        data: {
            labels: ['Pending', 'Approved', 'Rejected'],
            datasets: [{
                label: 'Applications Status',
                data: [12, 19, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 2
            }]
        }
    });
</script>
<script>
    const jobApplicationsCtx = document.getElementById('jobApplicationsChart').getContext('2d');
    const jobApplicationsChart = new Chart(jobApplicationsCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [{
                label: 'Job Applications',
                data: [30, 40, 50, 45, 55, 60, 65],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>


</body>
</html>
