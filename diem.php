<?php

require_once("auth.php");
include 'connect.php';

$sql = "SELECT DISTINCT(code), name FROM lichhoc";
$result = mysqli_query($connect, $sql);
while ($row = $result->fetch_array(MYSQLI_ASSOC)):
    for ($i=0; $i<count($row); $i++) {
        $mon[$row['code']] = $row['name'];
    }
endwhile;
$result->free_result();

$class = $_GET['class'];
$sqlStudent = "SELECT * FROM sinhvien AS A 
    LEFT JOIN diem AS B ON (A.student_code=B.student_code) 
    WHERE A.class = '" . $class . "'";
$resultStudent = mysqli_query($connect, $sqlStudent);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
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
        <h2 class="text-center mt-3 mb-3">Danh sách sinh viên</h2>
        <table class="table table-bordered">
                <?php if (mysqli_num_rows($resultStudent) > 0): ?>
                    <?php
                    $x = 0;
                    while ($row = $resultStudent->fetch_array(MYSQLI_ASSOC)):
                        $key = array_keys($row);
//                        var_dump($key);exit();
                        if ($x==0) {
                    ?>
            <thead>
                <tr>
                    <th>Lớp học</th>
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
                    <?php
                    for ($i=5; $i<count($key); $i++) {
                    ?>
                    <th><?=$mon[$key[$i]] ?? $key[$i]; ?></th>
                    <?php
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                        }
                        $x++;
                ?>
                        <tr>
                            <td><?= $row['class'] ?></td>
                            <td><?= $row['student_code'] ?></td>
                            <td><?= $row['last_name'] . ' ' . $row['first_name'] ?></td>
                            <?php
                            for ($i=5; $i<count($key); $i++) {
                            ?>
                            <td><?=$row[$key[$i]]; ?></td>
                            <?php
                            }
                            ?>
<!--                            <td><a href="hocphi.php?student_code=--><?//= $row['student_code'] ?><!--">Học phí</a></td>-->

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