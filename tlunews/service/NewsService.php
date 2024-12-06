<?php
require_once APP_ROOT.'/tlunews/model/News.php';

class NewService
{
    public function getallNews()
    {
        try
        {
            $conn = new PDO('mysql:host=localhost;dbname=tintuc','root','');
            $sql = "select * from news";
            $stmt = $conn->query($sql);

            $news = [];
            while($row = $stmt->fetch())
            {
                $news[] = new News($row['id'],$row['title'],$row['content'],$row['image'],$row['created_at'],$row['category_id']);
            }
            return $news;
        }catch(PDOException $e)
        {
            echo "Lỗi kết nối";
            return $news = [];
        }
    }
}

?>