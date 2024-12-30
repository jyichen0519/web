<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="refresh" content="3;url=account1.php">

  <title>Document</title>
  <link rel="stylesheet" href="sample.css">
</head>
<body background="pngtree-purple-watercolor-landscape-computer-desktop-wallpaper-image_733323.jpg">
<style>
      body{
        background-size: cover;
      }
          </style>
<p align=center>
    <?php
    $id=$_GET['id'];
    $name=$_GET['name'];
    $password=$_GET['password'];
    $level=$_GET['level'];
    $link = mysqli_connect('localhost', 'root', '', 'temp');
    $sql="insert into account (id,name,password,level) values('$id','$name','$password','$level')";
    if(mysqli_query($link,$sql))
    {
        echo "新增完成";
    }
    else
    {
        echo "新增失敗";
    }
    ?>
    </p>
</body>
</html>