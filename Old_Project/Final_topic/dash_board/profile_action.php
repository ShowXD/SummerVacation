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
    $title_eng = $_POST['title_eng'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $add_id = $_POST['add_id'];
    $add_title_eng = $_POST['add_title_eng'];
    $add_title = $_POST['add_title'];
    $add_content = $_POST['add_content'];

    $delete_id = $_POST['delete_id'];

/**
 * 將新資料取代舊資料到資料庫
 */
$sql = "UPDATE `teacher_profile_info` SET `id`= '$id', `title`= '$title',`title_eng`= '$title_eng',`content`= '$content' WHERE `id` = '$id'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_row($result);

if ($result != null) {
    echo "成功修改";
    echo "<meta http-equiv=\"refresh\" content=\"0;url=../dash_board/dashboard.php\" />";
} else {
    echo "修改失敗";
    echo "<meta http-equiv=\"refresh\" content=\"0;url=../dash_board/dashboard.php\" />";
}

/**
 * 將新得到的資料輸入進去資料庫。
 */
if ($add_id != null) {
    $sql = "INSERT INTO `teacher_profile_info`(`id`, `title`, `title_eng`, `content`) VALUES ('$add_id' ,'$add_title','$add_title_eng','$add_content')";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_row($result);

    if ($result != null) {
        echo "成功修改";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=../dash_board/dashboard.php\" />";
    } else {
        echo "修改失敗";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=../dash_board/dashboard.php\" />";
    }
}

/**
 * 將指定的資料從資料庫刪除
 */
if ($delete_id != null) {
    $sql = "DELETE FROM `teacher_profile_info` WHERE `id` = '$delete_id'";
    $result = mysqli_query($link, $sql);
    if ($result != null) {
        echo "刪除成功";
    } else {
        echo "刪除失敗";
    }
}
