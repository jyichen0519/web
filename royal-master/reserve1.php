<?php
// 獲取表單數據
$date = $_POST["date"] ?? ""; 
$reservations = $_POST["reservation"] ?? [];
$semester = $_POST["semester"] ?? "";
$week = $_POST["week"] ?? "";
$type = $_POST["type"] ?? "";

$id = $_SESSION['id'] ?? "";
$conn = new mysqli('localhost', 'root', '', 'temp');

// 檢查連接
if ($conn->connect_error) {
    die("連接失敗：" . $conn->connect_error);
}

// 設置編碼
$conn->set_charset("utf8");

// 確保 $reservations 有資料
if (!empty($reservations)) {
    foreach ($reservations as $classroom => $timeSlots) {
        foreach ($timeSlots as $time) {
            // 判斷 $type
            if ($type === '平時預約') {
                $sql = "INSERT INTO `reservation` (`id`, `type`, `classroom`, `during`, `date`)
                        VALUES ('$id', '$type', '$classroom', '$time', '$date')";
            } elseif ($type === '學期預約') {
                $sql = "INSERT INTO `reservation` (`id`, `type`, `classroom`, `during`, `semester`, `week`, `start_date`)
                        VALUES ('$id', '$type', '$classroom', '$time', '$semester', '$week', '$date')";
            } else {
                echo "無效的類型：$type";
                continue;
            }

            // 執行 SQL，並檢查是否成功
            if ($conn->query($sql) === TRUE) {
                echo "插入成功：教室 $classroom，時間段 $time<br>";
            } else {
                echo "插入失敗：" . $conn->error . "<br>";
            }
        }
    }
} else {
    echo "無有效的預約資料";
}

$conn->close();
?>
