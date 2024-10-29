<?php
include_once "db.php";

$id = $_POST['id'] ?? '';

if ($id) {
    $sql = "DELETE FROM message WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        echo "留言已成功刪除！";
    } else {
        echo "留言刪除失敗！";
    }
} else {
    echo "未提供有效的留言 ID！";
}
