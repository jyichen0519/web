<?php

$servername = "localhost";
$dbname = "temp"; //你要連接的資料庫名稱
$dbUsername = "root"; //你的資料庫管理者帳號
$dbPassword = ""; //你的資料庫管理者密碼，如果當初裝XAMPP沒有設定，預設是空值

try {

  $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);
  echo "成功連線!";
  // mysqli_close($conn); -->關閉連線

}

catch(Exception $e) {

  echo '無法連線:$e->getMessage()';

}

?>