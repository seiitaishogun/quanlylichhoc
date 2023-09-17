<?php

require_once("auth.php");
include 'connect.php';
$class = $_GET['class'];
$sqlSchedule = "SELECT * FROM lichhoc WHERE class LIKE '%" . implode(" + ", explode(' , ', $class)) . "%'";
$resultSchedule = mysqli_query($connect, $sqlSchedule);
$sqlStudent = "SELECT * FROM sinhvien WHERE class IN ('" . implode("','", explode(' , ', $class)) . "')";
$resultStudent = mysqli_query($connect, $sqlStudent);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php include("header.php"); ?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Lịch học + Danh sách sinh viên</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <h2 class="text-center mt-3 mb-3">Lịch học</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Môn học</th>
                    <th>Giảng viên</th>
                    <th>Thời gian học</th>
                    <th>Số buổi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($resultSchedule) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($resultSchedule)): ?>
                        <tr>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['lecturer'] ?? 'N/A' ?></td>
                            <td><?= $row['day'] ?? 'N/A' ?></td>
                            <td><?= $row['day_count'] ?? 'N/A' ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" align="center">Không có dữ liệu</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <h2 class="text-center mt-3 mb-3">Danh sách sinh viên</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Lớp học</th>
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
					<th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($resultStudent) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($resultStudent)): ?>
                        <tr>
                            <td><?= $row['class'] ?></td>
                            <td><?= $row['student_code'] ?></td>
                            <td><?= $row['last_name'] . ' ' . $row['first_name'] ?></td>
                            <td><a href="hocphi.php?student_code=<?= $row['student_code'] ?>">Học phí</a></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" align="center">Không có dữ liệu</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>