<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  
  <title>Document</title>
  <link rel="stylesheet" href="sample.css">
 </head>
 <body>
   <div align="right"><a href="insert.htm">[新增公告]</a>&nbsp;&nbsp;</div>
   <br>
   <center>
   <table class="List" width="500" align=center>
     <caption class="ListCap">帳號管理</caption>
    <tr ><td>ID</td><td>姓名</td><td>權限</td><td>操作</td></tr>
   <?php
      //Step 1
     $link = mysqli_connect('localhost', 'root', '', 'temp');
      //Step 3
	 $sql = "select * from account";
	 $result = mysqli_query($link, $sql);
	 // Step 4
	 while($row = mysqli_fetch_assoc($result))
	 {
		 echo "<tr><td>", $row['id'], "</td><td>",$row['name'],"</td><td>",$row['level'],"</td><td>
     <a href=aaa-1.php?id=",
          $row['id'], ">[修改]</a>&nbsp;&nbsp;&nbsp;<a href=aaa-2.php?method=delete&id=",$row['id'],">[刪除]</a></td></tr>";
	 }
   ?>
   </table>
   </center>
 </body>
</html>
