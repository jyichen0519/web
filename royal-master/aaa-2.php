<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="3;url=account1.php">
    <title>Document</title>
</head>
<body background="pngtree-purple-watercolor-landscape-computer-desktop-wallpaper-image_733323.jpg">
<style>
      body{
        background-size: cover;
      }
          </style>
<p align=center>
    <?php
    $method=$_GET['method'];
    if(empty($method))
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $level=$_POST['level'];
        $link = mysqli_connect('localhost', 'root', '', 'temp');
        $sql ="update account set name='$name',level='$level'where id='$id'";

        if(mysqli_query($link, $sql))
        {
            echo "修改完成";
        }
        else
        {
            echo "修改失敗";

        }
    }
    elseif($method=="delete")
    {
        $id=$_GET['id'];
        $link = mysqli_connect('localhost', 'root', '', 'temp');
        $sql="delete from account where id='$id'";
        if(mysqli_query($link,$sql))
        {
            echo "刪除完成";
        }
        else
        {
            echo "刪除失敗";
        }
    }
    ?>
    
</body>
</html>
