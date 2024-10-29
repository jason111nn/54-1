<?php
include_once "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$content = $_POST['content'];
$serial_number = $_POST['content'];
$show_email = isset($_POST['show-email']) ? 1 : 0;
$show_telephone = isset($_POST['show-telephone']) ? 1 : 0;
$issus_time = date('Y-m-d H:i:s');
$base64_image = null;
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $image = $_FILES['image']['tmp_name'];
    $image_data = file_get_contents($image);
    $base64_image = base64_encode($image_data);
}
$sql = "INSERT INTO `message` (`name`, email, telephone, serial_number, content, `image`, issus_time, edit_time, delete_time, `show_email`, `show_telephone`) 
VALUES ($name, $email, $telephone, $serial_number, $content, $base64_image,$issus_time,'','',$show_telephone, $show_telephone,)";
// $stmt = $conn->prepare($sql);
$conn->exec($sql);

// if ($stmt->execute()) {
//     echo "留言已成功新增！";
// } else {
//     echo "留言新增失敗！";
// }
