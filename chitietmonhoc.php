<?php

require_once("auth.php");
require_once("constant.php");

$mysqli = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);

$sql = "SELECT * FROM lichhoc WHERE name='" . $_GET['name'] . "'";

if ($result = $mysqli->query($sql)) {
  while ($obj = $result->fetch_array(MYSQLI_ASSOC)) {
	$data[] = $obj;
  }
  $result->free_result();
}

$mysqli->close();
?>

<html>

<head>
</head>

<body>
<?php include("header.php"); ?>

	<table cellspacing="0" cellpadding="5" border="1" style="float:left;clear:both;">
		<thead>
			<td>Môn</td>
			<td>Mã</td>
			<td>Tín chỉ</td>
			<td>Giảng viên</td>
			<td>Lớp</td>
			<td>Ngày học</td>
			<td>Số buổi</td>
			<td>Giờ học</td>
		<tbody>
<?php
	for ($i=0;$i<count($data);$i++) {
?>
			<tr>
				<td><?=$data[$i]['name'];?></td>
				<td><?=$data[$i]['code'];?></td>
				<td><?=$data[$i]['credit'];?></td>
				<td><?=$data[$i]['lecturer'];?></td>
				<td><?=$data[$i]['class'];?></td>
				<td><?=$data[$i]['day'];?></td>
				<td><?=$data[$i]['day_count'];?></td>
				<td><?=$data[$i]['hour'];?></td>
			</tr>
<?php
	}
?>

		</tbody>
	</table>
</body>

</html>