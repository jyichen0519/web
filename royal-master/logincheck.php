
<?php
session_start();
$id = $_POST["id"];
$password = $_POST["password"];
$link=mysqli_connect("localhost","root","","temp");
$sql="select * from account where id='$id' and password ='$password'";
$rs=mysqli_query($link, $sql);
If( $record=mysqli_fetch_assoc($rs))
{
    $_SESSION['user'] = $record['name'];
    $_SESSION['level'] = $record['level'];
    header('location:index.php?method=message&message=登入成功');
}
else
{    
    header('location:index.php?method=message&message=登入失敗');   }
?>
