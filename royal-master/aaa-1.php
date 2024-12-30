<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sample.css">
</head>
<body background="pngtree-purple-watercolor-landscape-computer-desktop-wallpaper-image_733323.jpg">
<style>
      body{
        background-size: cover;
      }
          </style>

<div align=center>
<?php
$id=$_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'temp');
$sql="select * from account where id='$id'";
$result=mysqli_query($link,$sql);
if($row=mysqli_fetch_assoc($result))
{
    $id=$row['id'];
    $name=$row['name'];
    $level=$row['level'];
}
?>
<div align="center">
     <form action="aaa-2.php?method=" method="post">
        <table class="RedList" width="500" align="center">
         <caption class="RedListCap">修改權限</caption>
         <tbody><tr align="center">
           <td>ID:</td><td><input type="text" name="id" required=""></td>
         </tr>
         <tr align="center">
           <td>姓名:</td><td><input type="text" name="name" required=""></td>
         </tr>
         <tr align="center">
         <td>權限:</td>
                <td><input type="radio" name="level" value="admin">管理者</td>
                <td><input type="radio" name="level" value="user">教師</td>
        </tr>
         <tr align="center">
           <td colspan="2"><input type="submit"><input type="reset"></td>
         </tr>
</form>
</div>

</body>
</html>