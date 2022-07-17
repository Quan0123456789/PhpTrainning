<?php
    session_start();
    require 'app/controller/home_controller.php';
    if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
		header("Location:login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="web/css/admin/home.css">
    <title>Trang chủ</title>
</head>

<body>

    <form action="" method="post">
        <input type="submit" name="logoutAction" value="Logout" class="alignright" id="btnLogout" />
    </form>
        <?php if ($_SESSION['sa'] == true) echo
            "<div>
                <a href='app/view/admin_reset_view.php'>Thông báo cấp lại mật khẩu</a>
            </div>"
        ?>
    <p> <?php echo "Tên login: " . $_SESSION['name']; ?></p>
    <p> <?php date_default_timezone_set('Asia/Bangkok');
        echo "Thời gian login: " . $_SESSION['time']; ?> </p>
</body>

</html>