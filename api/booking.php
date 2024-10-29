<?php
include_once "api/db.php";

$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];

$sql = "SELECT room FROM booking WHERE first-day <= ? AND end-day >= ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $endDate, $startDate);  

$stmt->execute();
$result = $stmt->get_result();

$bookedRooms = [];
while($row = $result->fetch_assoc()) {
    $bookedRooms[] = $row['room'];
}

echo json_encode($bookedRooms);

$stmt->close();
$conn->close();
?>
