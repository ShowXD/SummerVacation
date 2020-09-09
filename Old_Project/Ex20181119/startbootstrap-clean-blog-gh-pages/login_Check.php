<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

/**
 * 載入登入資訊。
 */
include ('db_connect_info.php');

/**
 * 從login.php獲取傳來的參數。
 */
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

/**
 * 從$sql抓取結果來判斷是否成功。
 */
$sql = "SELECT `name`, `password` FROM `login_info` WHERE `name` = '$username';";
$result = mysqli_query($link, $sql);
$rowNum = mysqli_num_rows($result);
$row = mysqli_fetch_row($result);

$_SESSION['username'] = $username;

if ($result != null && !empty($username) && !empty($password) && $row[0] == $username && $row[1] == $password) {
    echo "登入成功";
    echo "<meta http-equiv=\"refresh\" content=\"2;url=../light-bootstrap-dashboard-master/dashboard.php\" />";
} else {
    echo "帳號或密碼錯誤";
    echo "<meta http-equiv=\"refresh\" content=\"2;url=login.html\" />";
}