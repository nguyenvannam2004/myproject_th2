<?php
include('../../db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM news WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h1>" . $row['title'] . "</h1>";
        echo "<p>" . $row['content'] . "</p>";
    } else {
        echo "Bài viết không tồn tại.";
    }
} else {
    echo "Không có ID bài viết.";
}
$conn->close();
?>
