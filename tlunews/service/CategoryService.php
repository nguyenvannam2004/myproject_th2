<?php
require_once APP_ROOT.'/tlunews/model/Category.php';
class CategoryService
{
    public function getallCategory()
    {
        try
        {
            $conn = new PDO('mysql:host=localhost;dbname=tintuc','root','');
            $sql = "select * from categories";
            $stmt = $conn->query($sql);

            $Category = [];
            while($row = $stmt->fetch())
            {
                $Category[] = new Category($row['id'],$row['name']);
            }
            return $Category;
        }catch(PDOException $e)
        {
            echo "Lỗi kết nối";
            return $Category = [];
        }
    }
}

?>