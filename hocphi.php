<?php

require_once("constant.php");

$mysqli = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);

?>

<html>

<head>
</head>

<body>
<?php include("header.html"); ?>

	<a href="hocphi.php?type=UDCNTT">Chứng chỉ UDCNTT</a> |
	<a href="hocphi.php?type=TXQM">Xét tuyển DTTX</a> |
	<a href="hocphi.php?type=CN1">Hệ Cử nhân 1</a> |
	<a href="hocphi.php?type=CN2">Hệ Cử nhân 2</a> |
	<a href="hocphi.php?type=HC.">Hệ Liên thông</a>

<?php
	if (isset($_GET['student_code'])) {
		$sql = "SELECT * FROM hocphi WHERE bank_note LIKE '%".$_GET['student_code']."%'";
		if ($result = $mysqli->query($sql)) {
		  while ($obj = $result->fetch_array(MYSQLI_ASSOC)) {
			$data[] = $obj;
		  }
		  $result -> free_result();
		}

?>
	<table cellspacing="0" cellpadding="5" border="1">
		<thead>
			<td>Ngày</td>
			<td>Thông tin chuyển khoản</td>
			<td>Số tiền</td>
		</thead>
		<tbody>
<?php
	if (isset($data)) {
	for ($i=0;$i<count($data);$i++) {
?>
			<tr>
				<td><?=$data[$i]['date'];?></td>
				<td><?=$data[$i]['bank_note'];?></td>
				<td><?=$data[$i]['amount'];?></td>
			</tr>
<?php
	}
}
?>

		</tbody>
	</table>
<?php
	} elseif (isset($_GET['class'])) {
		$sql_student = "SELECT * FROM sinhvien WHERE class='".$_GET['class']."'";
		if ($result = $mysqli->query($sql_student)) {
		  while ($obj = $result->fetch_array(MYSQLI_ASSOC)) {
			$student[] = $obj;
		  }
		  $result -> free_result();
		}

		$sql_hocphi = "SELECT * FROM hocphi";
		if ($result = $mysqli->query($sql_hocphi)) {
		  while ($obj = $result->fetch_array(MYSQLI_ASSOC)) {
			$hocphi[] = $obj;
		  }
		  $result -> free_result();
		}

		foreach ($student as $key => $value) {
			$tmp = $value;
			foreach ($hocphi as $subkey => $subvalue) {
				if (str_contains($subvalue['bank_note'], $value['student_code'])) { 
					$tmp2[] = $subvalue;
				}		
			}
			$data[] = array(
				'student' => $tmp,
				'hocphi' => @$tmp2
			);
			unset($tmp, $tmp2);
		}
//		echo "<pre>";print_r($data);
?>

	<table cellspacing="0" cellpadding="5" border="1">
		<thead>
			<td>Tên</td>
			<td>Mã sinh viên</td>
			<td>Ngày</td>
			<td>Thông tin chuyển khoản</td>
			<td>Số tiền</td>
		</thead>
		<tbody>
<?php
	for ($i=0;$i<count($data);$i++) {
?>
			<tr>
				<td>
					<?=$data[$i]['student']['last_name'] . ' ' . $data[$i]['student']['first_name'];?>
				</td>
				<td>
					<?=$data[$i]['student']['student_code'];?>
				</td>
				<td colspan="3"></td>
			</tr>
<?php
		if (isset($data[$i]['hocphi'])) {
			for ($j=0; $j<count($data[$i]['hocphi']); $j++) {
?>
			<tr>
				<td colspan=2></td>
				<td><?=$data[$i]['hocphi'][$j]['date'];?></td>
				<td><?=$data[$i]['hocphi'][$j]['bank_note'];?></td>
				<td><?=$data[$i]['hocphi'][$j]['amount'];?></td>
			</tr>
<?php
			}
		}
	}
	} elseif (isset($_GET['type'])) {
		$sql = "SELECT YEAR(date) AS year, date, bank_note, amount FROM hocphi WHERE bank_note LIKE '%".$_GET['type']."%'";
		if ($result = $mysqli->query($sql)) {
		  while ($obj = $result->fetch_array(MYSQLI_ASSOC)) {
			$data[] = $obj;
		  }
		  $result -> free_result();
		}		

//		echo "<pre>";print_r($data);

?>


	
	<table cellspacing="0" cellpadding="5" border="1">
		<thead>
			<td>Năm</td>
			<td>Ngày</td>
			<td>Thông tin chuyển khoản</td>
			<td>Số tiền</td>
		</thead>
		<tbody>
<?php
		for ($i=0;$i<count($data);$i++) {
?>
		<tr>
			<td><?=$data[$i]['year'];?></td>
			<td><?=$data[$i]['date'];?></td>
			<td><?=$data[$i]['bank_note'];?></td>
			<td><?=$data[$i]['amount'];?></td>
		</tr>
<?php
		}
	}

?>

		</tbody>
	</table>



</body>

</html>
<?php
	$mysqli -> close();
?>