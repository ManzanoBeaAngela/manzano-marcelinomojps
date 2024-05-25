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
                        <h3>25</h3>
                        <p>Jobs Applied</p>
                    </div>
                </div>
                <div class="stat jobs">
                    <i class="fas fa-user"></i>
                    <div>
                        <h3>10</h3>
                        <p>Applications Reviewed</p>
                    </div>
                </div>
                <div class="stat applications">
                    <i class="fas fa-calendar-check"></i>
                    <div>
                        <h3>5</h3>
                        <p>Interviews Scheduled</p>
                    </div>
                </div>
                <div class="stat seekers">
                    <i class="fas fa-handshake"></i>
                    <div>
                        <h3>2</h3>
                        <p>Offers Received</p>
                    </div>
                </div>
            </div>

            <div class="charts">
                <div class="chart">
                    <h5 class="card-header">Applications by Status</h5>
                    <canvas id="applicationsByStatusChart"></canvas>
                </div>
                <div class="chart">
                    <h5 class="card-header">Interviews and Offers Overview</h5>
                    <canvas id="interviewsOffersOverviewChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx1 = document.getElementById('applicationsByStatusChart').getContext('2d');
        var applicationsByStatusChart = new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ['Applied', 'Reviewed', 'Interview Scheduled', 'Offer Received', 'Rejected'],
                datasets: [{
                    data: [25, 10, 5, 2, 3],
                    backgroundColor: ['#36A2EB', '#FFCE56', '#FF6384', '#4BC0C0', '#9966FF']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                }
            }
        });

        var ctx2 = document.getElementById('interviewsOffersOverviewChart').getContext('2d');
        var interviewsOffersOverviewChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Interviews Scheduled', 'Offers Received'],
                datasets: [{
                    label: 'Count',
                    data: [5, 2],
                    backgroundColor: ['#4BC0C0', '#FF6384']
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
</body>
</html>
