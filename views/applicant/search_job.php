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
    <title>Search Job | MOJPS</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .autocomplete-suggestions {
            border: 1px solid #ddd;
            max-height: 150px;
            overflow-y: auto;
            background: #fff;
            position: absolute;
            z-index: 1000;
            width: 100%;
        }
        .autocomplete-suggestion {
            padding: 10px;
            cursor: pointer;
        }
        .autocomplete-suggestion:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>
        <div class="main-content">
            <div class="content p-4">
                <h4>Search Jobs</h4>
                <form class="mb-4" method="GET" action="search_results.php">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="location">Location</label>
                            <select id="location" name="location" class="form-control">
                                <option value="">Choose...</option>
                                <option value="Boac">Boac</option>
                                <option value="Gasan">Gasan</option>
                                <option value="Mogpog">Mogpog</option>
                                <option value="Santa Cruz">Santa Cruz</option>
                                <option value="Torrijos">Torrijos</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="industry">Industry</label>
                            <select id="industry" name="industry" class="form-control">
                                <option value="">Choose...</option>
                                <option value="IT">IT</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Sales">Sales</option>
                                <option value="Human Resources">Human Resources</option>
                                <option value="Finance">Finance</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jobType">Job Type</label>
                            <select id="jobType" name="jobType" class="form-control">
                                <option value="">Choose...</option>
                                <option value="Full-time">Full-time</option>
                                <option value="Part-time">Part-time</option>
                                <option value="Contract">Contract</option>
                                <option value="Internship">Internship</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row position-relative">
                        <div class="form-group col-md-12">
                            <label for="keywords">Keywords</label>
                            <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Enter job title, skills, etc.">
                            <div id="autocomplete-suggestions" class="autocomplete-suggestions"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>

                <h5>Job Listings</h5>
                <div class="list-group">
    <!-- Sample job listings -->
    <a href="joblist1.php" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Frontend Developer</h5>
            <small>Location: Boac, Marinduque | Industry: IT | Job Type: Full-time</small>
        </div>
        <p class="mb-1">We are looking for a skilled Frontend Developer to join our team...</p>
        <small>Posted on: April 10, 2024</small>
        <!-- "See Details" button -->
    </a>
    <a href="joblist2.php" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Data Scientist</h5>
            <small>Location: Gasan, Marinduque | Industry: IT | Job Type: Full-time</small>
        </div>
        <p class="mb-1">Join our data science team and help us extract insights from large datasets...</p>
        <small>Posted on: April 5, 2024</small>
        <!-- "See Details" button -->
    </a>
    <!-- Add similar structure for other job listings -->
</div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#keywords').on('input', function() {
                var query = $(this).val();
                if (query.length > 2) {
                    $.ajax({
                        url: 'fetch_suggestions.php',
                        method: 'GET',
                        data: { query: query },
                        success: function(data) {
                            $('#autocomplete-suggestions').html(data);
                            $('#autocomplete-suggestions').show();
                        }
                    });
                } else {
                    $('#autocomplete-suggestions').hide();
                }
            });

            $(document).on('click', '.autocomplete-suggestion', function() {
                $('#keywords').val($(this).text());
                $('#autocomplete-suggestions').hide();
            });

            $(document).click(function(e) {
                if (!$(e.target).closest('#keywords, #autocomplete-suggestions').length) {
                    $('#autocomplete-suggestions').hide();
                }
            });
        });
    </script>
</body>
</html>
