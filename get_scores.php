<?php
include 'db.php';

$sql = "SELECT * FROM matches ORDER BY match_time DESC";
$result = $conn->query($sql);

$scores = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $scores[] = $row;
    }
}

echo json_encode($scores);
?>
