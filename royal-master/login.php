<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;url=index1.php">
    <title></title>
</head>
<body background="pngtree-purple-watercolor-landscape-computer-desktop-wallpaper-image_733323.jpg">
<style>
body{
  background-size: cover;
}
    </style>
<?php
    // session_start();
    $id=$_POST['id'];
    $password=$_POST['password'];
      //Step 1
      $link = mysqli_connect('localhost', 'root', '', 'temp');
      //Step 3
	 $sql = "select distinct * from account where id='$id' and password='$password'";
	 $result = mysqli_query($link, $sql);
	 // Step 4
	 if($row = mysqli_fetch_assoc($result))
     {
       $_SESSION['id']=$row['id'];
       $_SESSION['level']=$row['level'];
       echo "<center><h1>登入完成</h1></center>";
     }
     else
     {
        echo "<center><h1>登入失敗，請確認帳號密碼</h1></center>";
     }
    ?>
    

    </body>
