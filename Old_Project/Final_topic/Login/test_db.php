<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>取得mysql資料庫中的資料</title>
</head>
<body>
<?php
//Step 1.引用db_mysql.inc.php檔,當引用後會去執行db_mysql.inc.php檔中所有程式碼
include('db_connect_info.php');
//執行sql指令,如查詢資料表
$result = mysqli_query('SELECT * FROM `teacher_profile_info`'); //執行sql指令;
$row_total = mysqli_num_rows($result);//取得資料表資料列數
$fields = mysqli_num_fields($result);//取得資料表欄位數

//取資料表欄位名稱
for ($x=0;$x<($fields);$x++){
    $meta=mysqli_fetch_field($result);//取得欄位資訊,使用mysql_fetch_field函數目的要取得資料表欄位名稱
    $fields_name[$x]=$meta->name; //將欄位名稱儲存到$fields_name陣列
}
echo "<br/>筆數=$row_total;欄位數=$fields<br />";

//先將資料存入二維資料表
for ($y=0;$y<($row_total);$y++){
    $row=mysqli_fetch_array($result);
    $db_data[$y]=$row;
}

//輸出資料
echo '<table border="1">';
for ($y=-1;$y<($row_total);$y++){
    echo '<tr>';
    for ($x=0;$x<($fields);$x++){
        //假如y等於-1就先輸出資料表欄位名稱
        if ($y==-1){
            echo '<td align="center">'.$fields_name[$x].'</td>';
        }else{
            echo '<td align="center">'.$db_data[$y][$x].'</td>';
        }
    }
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>