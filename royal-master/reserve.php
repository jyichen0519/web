<?php
// 獲取表單數據
$date = $_POST["date"]??""; 
$reservations = $_POST["reservation"]??"";
$semester = $_POST["semester"]??"";
$week = $_POST["week"]??"";
$type = $_POST["type"]??"";


$id = $_SESSION['id']??"";
$conn = new mysqli('localhost', 'root', '', 'temp');

foreach ($reservations as $classroom => $timeSlots) {
    foreach ($timeSlots as $time) {
        // echo "教室：$classroom，時間段：$time，日期：$date<br>";

        // 插入資料庫的 SQL
        // 判斷 $type
        if ($type === '平時預約') {
            // 插入某類型1的 SQL
            $sql = "INSERT INTO `reservation` (`id`, `type`, `classroom`, `during`, `date`)
                    VALUES ('$id', '$type', '$classroom', '$time', '$date')";
            mysqli_query($conn,$sql);
            header("location:bookclass1.php?msg=預約成功");
        } elseif ($type === '學期預約') {
            // 插入某類型2的 SQL
            $sql = "INSERT INTO `reservation` (`id`,`type`, `classroom`, `during`,`semester`,`week`, `date`)
                    VALUES ('$id', '$type', '$classroom', '$time','$semester','$week','$date')";
            mysqli_query($conn,$sql);
            header("location:bookclass2.php?msg=預約成功");
        } else {
            // 如果 $type 不符合條件
            echo "無效的類型：$type";
            continue; // 跳過此次迴圈
        }

    }
}
?>
