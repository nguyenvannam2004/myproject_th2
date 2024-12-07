<?php
include('db.php');
$sql = "SELECT * FROM news ORDER BY created_at DESC";
$result = $conn->query($sql);
echo "<h1>Chào mừng đến với website của tôi</h1>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p>" . substr($row['content'], 0, 150) . "...</p>";
        echo "<a href='news/detail.php?id=" . $row['id'] . "'>Xem chi tiết</a><br>";
    }
} else {
    echo "Không có bài viết nào.";
}
$conn->close();
?>
