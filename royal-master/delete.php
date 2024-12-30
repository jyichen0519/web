<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="3;url=search4.php">
    <title>刪除</title>
</head>
<body>
<?php
// 連接資料庫
$link = mysqli_connect("localhost", "root", "", "temp");
if (!$link) {
    die("資料庫連線失敗：" . mysqli_connect_error());
}

// 檢查是否收到刪除請求
if (isset($_GET['method']) && $_GET['method'] === 'delete' && isset($_GET['postid'])) {
    // 接收要刪除的 reservation_id
    $reservation_id = mysqli_real_escape_string($link, $_GET['postid']);

    // 檢查 reservation_id 是否存在
    $check_sql = "SELECT * FROM reservation WHERE reservation_id = '$reservation_id'";
    $check_result = mysqli_query($link, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        // 刪除資料
        $delete_sql = "DELETE FROM reservation WHERE reservation_id = '$reservation_id'";
        if (mysqli_query($link, $delete_sql)) {
            echo "<script>alert('刪除成功！'); window.location.href = 'search4.php';</script>";
        } else {
            echo "<script>alert('刪除失敗：" . mysqli_error($link) . "'); window.location.href = 'search4.php';</script>";
        }
    } else {
        echo "<script>alert('找不到對應的資料！'); window.location.href = 'search4.php';</script>";
    }
} else {
    echo "<script>alert('非法操作！'); window.location.href = 'search4.php';</script>";
}

// 關閉資料庫連線
mysqli_close($link);
?>

    
</body>
</html>
