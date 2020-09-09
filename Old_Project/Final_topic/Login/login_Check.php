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
    $password = sha1($_POST['pass']);

/**
 * 從$sql抓取結果來判斷是否成功。
 */
$sql = "SELECT `username`, `password` FROM `teacher_login_info` WHERE `username` = '$username';";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_row($result);

$_SESSION['username'] = $username;

if ($result != null && !empty($username) && !empty($password) && $row[0] == $username && $row[1] == $password) {
    echo "<meta http-equiv=\"refresh\" content=\"0;url=../dash_board/dashboard.php\" />";
} else {
    echo "<meta http-equiv=\"refresh\" content=\"0;url=login.html\" />";
}