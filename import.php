<?php
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

require_once 'vendor/autoload.php';

require_once("auth.php");
require_once("constant.php");

$mysqli = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);

if (isset($_POST)) {

    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {

        $arr_file = explode('.', $_FILES['file']['name']);
        $extension = end($arr_file);

        if('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        $spreadsheet = $reader->load($_FILES['file']['tmp_name']);

        $sheetData = $spreadsheet->getActiveSheet()->toArray();


        if (!empty($sheetData)) {
            for ($i=0; $i<count($sheetData[0]); $i++) {
                $key[] = $sheetData[0][$i];
            }
            $key = '(' . implode(", ",  $key) . ')';

            for ($i=1; $i<count($sheetData); $i++) {
                for ($j=0; $j<count($sheetData[$i]); $j++) {
                    if ($sheetData[0][$j]=='date') {
                        $value[] = "DATE_FORMAT('" . $sheetData[$i][$j] . "', '%Y-%m-%d')" ?? 0;
                    } else {
                        $value[] = "'" . $sheetData[$i][$j] . "'" ?? 0;
                    }
                }
                $value2[] = '(' . implode(", ", $value) . ')';
                unset($value);
            }
            $value2 = implode(", ", $value2);

//            echo "<pre>"; print_r($value2);exit();


            $sql = "INSERT INTO " . $_POST['type'] . $key . " VALUES " . $value2;

            if ($mysqli->query($sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
        }
    }
}

$mysqli->close();
?>

<html>

<head>
</head>

<body>

<?php include("header.php"); ?>

<form method="post" enctype="multipart/form-data">
    <p>Nhập điểm:</p>
    <input type="hidden" name="type" value="diem" />
    <input type="file" name="file">
    <input type="submit" value="Import">
</form>

<form method="post" enctype="multipart/form-data">
    <p>Nhập học phí:</p>
    <input type="hidden" name="type" value="hocphi" />
    <input type="file" name="file">
    <input type="submit" value="Import">
</form>

<form method="post" enctype="multipart/form-data">
    <p>Nhập lịch học:</p>
    <input type="hidden" name="type" value="lichhoc" />
    <input type="file" name="file">
    <input type="submit" value="Import">
</form>

<form method="post" enctype="multipart/form-data">
    <p>Nhập sinh viên:</p>
    <input type="hidden" name="type" value="sinhvien" />
    <input type="file" name="file">
    <input type="submit" value="Import">
</form>

</body>

</html>