<?php
include('../../../db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Thêm bài viết vào cơ sở dữ liệu
    $sql = "INSERT INTO news (title, content) VALUES ('$title', '$content')";
    if ($conn->query($sql) === TRUE) {
        echo "Bài viết đã được thêm.";
    } else {
        echo "Lỗi: " . $conn->error;
    }
}

$conn->close();
?>

<form method="POST" action="">
    <input type="text" name="title" placeholder="Tiêu đề" required><br>
    <textarea name="content" placeholder="Nội dung" required></textarea><br>
    <button type="submit">Thêm bài viết</button>
</form>
