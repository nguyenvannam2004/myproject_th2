<?php
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f1f4f9;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #6c63ff;
        }
        .sidebar {
            background-color: #6c63ff;
            color: white;
            min-height: 100vh;
        }
        .sidebar a {
            color: #d1d1ff;
            text-decoration: none;
            font-weight: 500;
        }
        .sidebar a:hover {
            background-color: #524cb3;
            color: white;
            border-radius: 5px;
        }
        .content {
            padding: 20px;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #6c63ff;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #524cb3;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="btn btn-danger btn-sm" onclick="window.location.href='index.php?controller=admin&action=logout'">
                Đăng Xuất
            </button>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar p-4">
                <h5 class="text-white">Menu</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link my-2" href="index.php?controller=admin&action=dashboard">🏠 Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link my-2" href="index.php?controller=news&action=index">📰 Quản Lý Tin Tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link my-2" href="index.php?controller=category&action=index">📂 Quản Lý Danh Mục</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link my-2" href="index.php?controller=user&action=index">👤 Quản Lý Người Dùng</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-10 content">
                <h2 class="mb-4">Xin chào, Quản trị viên!</h2>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center border-0">
                            <div class="card-body">
                                <h5 class="card-title">Tổng số tin tức</h5>
                                <p class="card-text fs-2"><strong>150</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center border-0">
                            <div class="card-body">
                                <h5 class="card-title">Tổng số danh mục</h5>
                                <p class="card-text fs-2"><strong>20</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center border-0">
                            <div class="card-body">
                                <h5 class="card-title">Tổng số người dùng</h5>
                                <p class="card-text fs-2"><strong>35</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <h4>Danh sách tin tức gần đây</h4>
                    <table class="table table-bordered bg-white">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Tiêu đề</th>
                                <th>Danh mục</th>
                                <th>Ngày đăng</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tin tức 1</td>
                                <td>Thời sự</td>
                                <td>2024-12-07</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Sửa</button>
                                    <button class="btn btn-sm btn-danger">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tin tức 2</td>
                                <td>Giải trí</td>
                                <td>2024-12-06</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Sửa</button>
                                    <button class="btn btn-sm btn-danger">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    <h4>Hành động nhanh</h4>
                    <button class="btn btn-custom me-2" onclick="window.location.href='index.php?controller=news&action=add'">Thêm Tin Tức</button>
                    <button class="btn btn-custom me-2" onclick="window.location.href='index.php?controller=category&action=add'">Thêm Danh Mục</button>
                    <button class="btn btn-custom me-2" onclick="window.location.href='index.php?controller=user&action=add'">Thêm Người Dùng</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


?>