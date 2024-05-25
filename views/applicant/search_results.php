<?php
session_start();
include '../../DB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $keyword = $_POST['keyword'];

    $stmt = $conn->prepare("SELECT DISTINCT job_title FROM jobs WHERE job_title LIKE ?");
    $likeKeyword = "%".$keyword."%";
    $stmt->bind_param("s", $likeKeyword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2>Search Results</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>".$row['job_title']."</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No results found for '$keyword'.</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
