<?php
require_once 'models/User.php';
require_once 'models/News.php';

class AdminController {
    public function login() {
        require_once 'views/admin/login.php';
    }

    public function processLogin() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Kiểm tra tài khoản qua model
            $userModel = new UserService();
            $user = $userModel->checkLogin($username, $password);

            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user['ID'];
                $_SESSION['username'] = $user['USERNAME'];
                $_SESSION['role'] = $user['ROLE'];
                header("Location: index.php?controller=admin&action=dashboard");
            } else {
                echo "Invalid login!";
                require_once 'views/admin/login.php';
            }
        }
    }

    public function dashboard() {
        session_start();
        if (!isset($_SESSION['username'])) {
            header("Location: index.php?controller=admin&action=login");
            exit();
        }
        require_once 'views/admin/dashboard.php';
    }
}
