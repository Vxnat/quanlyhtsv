<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/form_login.css">
    <title>Hệ thống quản lý sinh viên</title>
</head>

<body>
    <?php
    require_once '../base_data/ketnoi.php';
    ?>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php include('../includes/sidebar_index.php') ?>
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <!-- Actions -->
                <div class="navbar-actions">
                    <h3>HỆ THỐNG QUẢN LÝ HỌC TẬP SINH VIÊN</h3>
                    <button class="btn" type="button" data-bs-theme="dark">
                        <i class="bx bx-menu"></i>
                    </button>
                    <button id="toggle-user" class="btn" type="button" data-bs-theme="dark">
                        <span class="bx bxs-user"></span>
                    </button>
                    <button id="full-screen" class="btn" type="button" data-bs-theme="dark">
                        <i class="bx bx-fullscreen"></i>
                    </button>
                </div>
                <!-- End -->

                <!-- Login -->
                <div class="navbar-login">
                    <button id="login"><i class="bx bx-log-in"></i> Đăng nhập</button>
                </div>
                <!-- End -->
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <?php include('../includes/form_statistics.php') ?>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php
    include('../includes/form_login.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
    <script src="../js/load_data_statistics.js"></script>
</body>

</html>