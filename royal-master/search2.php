<?php
$searchtxt = isset($_GET["searchtxt"]) ? $_GET["searchtxt"] : ""; // 防止未定義變數錯誤
?>
<center>
    <div class="card card_style">
        <div class="card-body">
            <form action="index.php" method="get">
                <input type="hidden" name="method" value="query">
                <table align="center" style="margin: 25px;">
                    <tr>
                        <td><input class="form-control search_input" type="text" name="searchtxt" value="<?php echo htmlspecialchars($searchtxt); ?>"></td>
                        <td><input type="submit" value="搜尋" class="search_btn"></td>
                    </tr>
                </table>
            </form>
            <table class="table table-striped table-hover table_style">
                <thead class="thead_style">
                    <tr align="center">
                        <td>預約ID</td>
                        <td>教室</td>
                        <td>預約時間</td>
                        <td>功能</td>
                    </tr> <div class="form-row">
    <div class="form-group col-6">
            <label for="exampleFormControlSelect1">學期區間:</label>
            <input type="hidden" name="type" value="學期預約"></input>
            <select class="form-control" name="semester">
            <option>113學年度第一學期(113.8.1.至114.1.31.)</option>
          <option>113學年度第二學期(114.2.1.至114.7.31.)</option>
          <option>114學年度第一學期(114.8.1.至115.1.31.)</option>
          <option>114學年度第二學期(115.2.1.至115.7.31.)</option>                       
            </select></br>
        </div>
        <div class="form-group col-6">
            <label for="exampleFormControlSelect1">星期:</label>
            <select class="form-control" name="week">
              <option>一</option>
              <option>二</option>
              <option>三</option>
              <option>四</option>
              <option>五</option>
              <option>六</option>                             
              <option>日</option>                             
            </select></br>
        </div>
                </thead>
                <tbody>
                    <?php
                    $link = mysqli_connect("localhost", "root", "", "temp");
                    if (!$link) {
                        die("資料庫連線失敗：" . mysqli_connect_error());
                    }

                    // 建立 SQL 語句
                    if (empty($searchtxt)) {
                        $sql = "SELECT * FROM reservation";
                    } else {
                        // 使用 LIKE 搜尋符合條件的資料
                        $sql = "SELECT * FROM reservation WHERE 
                                id LIKE '%" . mysqli_real_escape_string($link, $searchtxt) . "%' OR 
                                type LIKE '%" . mysqli_real_escape_string($link, $searchtxt) . "%' OR
                                classroom LIKE '%" . mysqli_real_escape_string($link, $searchtxt) . "%'";
                    }

                    $rs = mysqli_query($link, $sql);
                    if (!$rs) {
                        die("查詢失敗：" . mysqli_error($link));
                    }

                    while ($record = mysqli_fetch_assoc($rs)) {
                        echo "<tr align='center'>
                                <td>{$record['reservation_id']}</td>
                                <td>{$record['classroom']}</td>
                                <td>{$record['during']}</td>
                                <td>
                                    <a class='update_btn' href='index.php?method=update&postid={$record['reservation_id']}'>更新</a>
                                    <a class='delete_btn' href='index.php?method=delete&postid={$record['reservation_id']}'>刪除</a>
                                </td>
                              </tr>";
                    }

                    mysqli_close($link);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</center>
</body>
