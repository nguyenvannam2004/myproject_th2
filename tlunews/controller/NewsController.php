<?php
require_once APP_ROOT.'/tlunews/service/NewsService.php'; // Gọi model tin tức

class NewsController {

    public function index() {
        // Lấy danh sách bài viết
        $newsModel = new NewService();
        $newsList = $newsModel->getallNews(); // Phương thức này lấy tất cả bài viết từ database

        // Hiển thị danh sách tin tức trong view
        require APP_ROOT.'/tlunews/views/news/index.php';
    }
}
?>
