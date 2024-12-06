<?php
require_once APP_ROOT.'/tlunews/model/User.php';

class UserService
{
    public function getallUser()
    {
        try
        {
            $conn = new PDO('mysql:host=localhost;dbname=tintuc','root','');
            $sql = "select * from users";
            $stmt = $conn->query($sql);

            $users = [];
            while($row = $stmt->fetch())
            {
                $users[] = new Users($row['ID'],$row['USERNAME'],$row['PASSWORD'],$row['ROLE']);
            }
            return $users;
        }catch(PDOException $e)
        {
            echo "Lỗi kết nối";
            return $users = [];
        }
    }
}

?>