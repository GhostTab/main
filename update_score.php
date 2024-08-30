<?php
include 'db.php';

$team1 = $_POST['team1'];
$team2 = $_POST['team2'];
$score1 = $_POST['score1'];
$score2 = $_POST['score2'];

$sql = "UPDATE matches SET score1='$score1', score2='$score2' WHERE team1='$team1' AND team2='$team2'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
