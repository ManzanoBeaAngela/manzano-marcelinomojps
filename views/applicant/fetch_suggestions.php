<?php
session_start();
include '../../DB.php';

$query = $_GET['query'];
$suggestions = [];

if ($query) {
    $stmt = $conn->prepare("SELECT DISTINCT job_title FROM jobs WHERE job_title LIKE ?");
    $likeQuery = "%" . $query . "%";
    $stmt->bind_param("s", $likeQuery);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $suggestions[] = $row['job_title'];
    }

    $stmt->close();
    $conn->close();
}

foreach ($suggestions as $suggestion) {
    echo "<div class='autocomplete-suggestion'>" . htmlspecialchars($suggestion) . "</div>";
}
?>
