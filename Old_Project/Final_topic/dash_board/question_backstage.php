<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

/**
 * 載入登入資訊。
 */
include ('../Login/db_connect_info.php');

/**
 * 從dashboard.php獲取傳來的參數。
 */
$id = $_POST['id'];
$content = $_POST['content'];

$add_id = $_POST['add_id'];
$add_content = $_POST['add_content'];

$delete_id = $_POST['delete_id'];

/**
 * 將新資料取代舊資料到資料庫
 */
if ($id != null && $content != null) {
    $sql = "UPDATE `teacher_course_info` SET `id`= '$id',`content`= '$content' WHERE `id` = '$id'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_row($result);

    if ($result != null) {
        echo "成功修改";
        echo "<meta http-equiv=\"refresh\" content=\"1;url=../dash_board/question.php\" />";
    } else {
        echo "修改失敗";
        echo "<meta http-equiv=\"refresh\" content=\"1;url=../dash_board/question.php\" />";
    }
}
/**
 * 將新得到的資料輸入進去資料庫。
 */
if ($add_id != null) {
    $sql = "INSERT INTO `teacher_course_info`(`id`, `content`) VALUES ('$add_id' ,'$add_content')";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_row($result);

    if ($result != null) {
        echo "新增成功";
        echo "<meta http-equiv=\"refresh\" content=\"1;url=../dash_board/question.php\" />";
    } else {
        echo "新增失敗";
        echo "<meta http-equiv=\"refresh\" content=\"1;url=../dash_board/question.php\" />";
    }
}

/**
 * 將指定的資料從資料庫刪除
 */
if ($delete_id != null) {
    $sql = "DELETE FROM `teacher_course_info` WHERE `id` = '$delete_id'";
    $result = mysqli_query($link, $sql);
    if ($result != null) {
        echo "刪除成功";
        echo "<meta http-equiv=\"refresh\" content=\"1;url=../dash_board/question.php\" />";
    } else {
        echo "刪除失敗";
        echo "<meta http-equiv=\"refresh\" content=\"1;url=../dash_board/question.php\" />";
    }
}
