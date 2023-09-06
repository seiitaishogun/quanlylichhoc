<?php

require_once("auth.php");
require_once("constant.php");

$mysqli = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);

$sql = "SELECT DISTINCT name FROM lichhoc";

if ($result = $mysqli->query($sql)) {
  while ($obj = $result->fetch_array(MYSQLI_ASSOC)) {
	$data[] = $obj;
  }
  $result -> free_result();
}

$mysqli -> close();
?>

<html>

<head>
</head>

<body>
<?php include("header.php"); ?>
	<table cellspacing="0" cellpadding="5" border="1">
		<thead>
			<td>Môn</td>
		</thead>
		<tbody>
<?php
	for ($i=0;$i<count($data);$i++) {
?>
			<tr>
				<td><a href="chitietmonhoc.php?name=<?=$data[$i]['name'];?>"><?=$data[$i]['name'];?></a></td>
			</tr>
<?php
	}
?>

		</tbody>
	</table>
</body>

</html>