<?php
include('../../../db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $content = $_POST['content'];

        // Cập nhật bài viết
        $sql = "UPDATE news SET title='$title', content='$content' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Bài viết đã được cập nhật.";
        } else {
            echo "Lỗi: " . $conn->error;
        }
    }

    // Lấy thông tin bài viết
    $sql = "SELECT * FROM news WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Bài viết không tồn tại.";
    }
}

$conn->close();
?>

<form method="POST" action="">
    <input type="text" name="title" value="<?= $row['title'] ?>" required><br>
    <textarea name="content"><?= $row['content'] ?></textarea><br>
    <button type="submit">Cập nhật bài viết</button>
</form>
