<?php
/**
 * 載入登入資訊。
 */
include('../startbootstrap-clean-blog-gh-pages/db_connect_info.php');

/**
 * 從login.php獲取傳來的參數。
 */
    $username = $_POST['username'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $input_description = $_POST['input_description'];
    $output_description = $_POST['output_description'];
    $input1 = $_POST['input1'];
    $output1 = $_POST['output1'];
    $input2 = $_POST['input2'];
    $output2 = $_POST['output2'];
    $input3 = $_POST['input3'];
    $output3 = $_POST['output3'];

/**
 *  將資料加入伺服器。
 */
    if ($title != "" && $description != "" && $input1 != "" && $output1 != "" && $input2 != "" && $output2 != "" && $input3 != "" && $output3 != "") {
        $sql = "SELECT `title`, `description` FROM `test_list_info` WHERE `name` = '$username';";
        $result = mysqli_query($link, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "此項資料已經存在，請重新輸入。";
            echo "<meta http-equiv=\"refresh\" content=\"2;url=register.php\" />";
        } else {
            $sql = "INSERT INTO `test_list_info` (`id`, `title`, `userID`, `createData`, `description`, `inputDescription`, `outputDescription`, `input1`, `output1`, `intput2`, `output2`, `input3`, `output3`, `status`) VALUES ('2' , '$title', '$username', CURRENT_TIMESTAMP, '$description', '$input_description', '$output_description', '$input1', '$output1', '$input2', '$output2', '$input3', '$output3', 'N');";
            if (mysqli_query($link, $sql)) {
                echo "新增成功";
                echo "<meta http-equiv=\"refresh\" content=\"2;url=login.php\" />";
            } else {
                echo "資料寫入資料庫有問題，請洽系統管理員。";
                echo "<meta http-equiv=\"refresh\" content=\"2;url=index.php\" />";
            }
        }
    }