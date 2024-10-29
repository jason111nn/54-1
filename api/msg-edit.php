<?php
include_once "db.php";

$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM message WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$message = $stmt->fetch(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($message);
