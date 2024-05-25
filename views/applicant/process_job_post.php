<?php
include '../../DB.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $job_title = $_POST['job_title'];
    $job_description = $_POST['job_description'];
    $job_requirements = $_POST['job_requirements'];
    $job_location = $_POST['job_location'];
    $salary = $_POST['salary'];


    $sql = "INSERT INTO jobs (job_title, job_description, job_requirements, job_location, salary) 
            VALUES ('$job_title', '$job_description', '$job_requirements', '$job_location', '$salary')";

    if ($conn->query($sql) === TRUE) {
        sleep(2);
        header("Location: post_job.php?success");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
