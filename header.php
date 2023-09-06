<div style="clear: both;float:left;width: 100%;">
	<a href="lop.php">Danh sách lớp</a> |
	<a href="monhoc.php">Danh sách môn</a>

    <?php
    if ($_COOKIE['auth']) {
    ?>
    <div style="float: right; ">
        <p><?=$_COOKIE['auth'];?> |
        <a href="auth.php?action=logout">Đăng xuất</a>
    </div>
    <?php
    }
    ?>
</div>