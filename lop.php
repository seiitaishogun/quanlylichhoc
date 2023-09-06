<?php
require_once("auth.php");

include 'connect.php';
$sql = "SELECT distinct(class) FROM sinhvien";
$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách lớp học</title>
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
                <a class="nav-link" href="index.php">Danh sách lớp học</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <h2 class="text-center mt-3 mb-3">Danh sách lớp học</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Lớp học</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= $row['class'] ?></td>
                            <td>
                                <a class="btn btn-primary" href="detail.php?class=<?= str_replace(' + ', ' , ', $row['class']) ?>">Lịch học + Sinh viên</a>
                                <a class="btn btn-primary" href="hocphi.php?class=<?=$row['class'];?>">Học phí</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" align="center">Không có dữ liệu</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>