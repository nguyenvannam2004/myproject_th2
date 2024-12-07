<?php
include('../../../db.php');

// Kiểm tra xem người dùng đã đăng nhập chưa
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$sql = "SELECT * FROM news";
$result = $conn->query($sql);

echo "<h1>Danh sách bài viết</h1>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p>" . substr($row['content'], 0, 150) . "...</p>";
        echo "<a href='edit.php?id=" . $row['id'] . "'>Sửa</a> | <a href='delete.php?id=" . $row['id'] . "'>Xóa</a><br>";
    }
} else {
    echo "Không có bài viết nào.";
}

$conn->close();
?>
