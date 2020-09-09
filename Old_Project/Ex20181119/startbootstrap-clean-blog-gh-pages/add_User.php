<?php
/**
 * 載入登入資訊。
 */
    include ('db_connect_info.php');

/**
 * 從login.php獲取傳來的參數。
 */
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

/**
 *  將資料加入伺服器。
 */
    if ($username != "" && $email != "" && $password != "") {
        $sql = "SELECT `name`, `password` FROM `login_info` WHERE `name` = '$username';";
        $result = mysqli_query($link, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "此帳號已經存在，請重新輸入。";
            echo "<meta http-equiv=\"refresh\" content=\"2;url=register.php\" />";
        } else {
            $sql = "INSERT INTO `login_info` (`id`, `name`, `email`, `type`, `password`) VALUES (NULL, '$username', '$email', '1', '$password');";
            if (mysqli_query($link, $sql)) {
                echo "新增成功";
                echo "<meta http-equiv=\"refresh\" content=\"2;url=login.html\" />";
            } else {
                echo "資料寫入資料庫有問題，請洽系統管理員。";
                echo "<meta http-equiv=\"refresh\" content=\"2;url=index.php\" />";
            }
        }
    }
