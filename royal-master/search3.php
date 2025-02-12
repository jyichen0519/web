<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/fju_logo.jpg" type="image/png">
    <title>輔大貴重儀器預約系統</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        form{
                border: 1px solid gray;
                padding: 30px;
                margin: 50px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
        }

        h1 {
            color: #1F3A93;
            font-size: 1.5em;
        }

        label {
            font-weight: bold;
        }

        input, select {
            margin: 5px 0 15px 0;
            padding: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #1F3A93;
            color: white;
        }

        .available {
            color: green;
            font-weight: bold;
        }

        .reserved {
            color: red;
            font-weight: bold;
        }

        input[type="checkbox"] {
            cursor: pointer;
        }
    </style>
    </style>
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="image/FJU11/fju_logo.jpg" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <?php if ($_SESSION['level'] === 'admin'): ?>
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">首頁</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">預約教室</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="bookclass1.php">平時預約</a></li>
                                    <li class="nav-item"><a class="nav-link" href="bookclass2.php">學期預約</a></li>
                                </ul>
                            </li>  
                            <li class="nav-item"><a class="nav-link" href="record1.php">預約紀錄</a></li>
                            <li class="nav-item"><a class="nav-link" href="account1.php">帳號管理</a></li>
                            
                            <li class="nav-item"><a class="nav-link" href="contact.html">聯絡我們</a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">登出</a></li>
                            <p>歡迎管理員</p>
                        </ul>
                        
                        <?php elseif ($_SESSION['level'] === 'user'): ?>
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">首頁</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">預約教室</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="bookclass1.php">平時預約</a></li>
                                    <li class="nav-item"><a class="nav-link" href="bookclass2.php">學期預約</a></li>
                                </ul>
                            </li>  
                            <li class="nav-item"><a class="nav-link" href="record1.php">預約紀錄</a></li>
                            <li class="nav-item"><a class="nav-link" href="account1.php">帳號管理</a></li>
                            
                            <li class="nav-item"><a class="nav-link" href="contact.html">聯絡我們</a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">登出</a></li>
                            <p>歡迎教師</p>
                            <?php endif; ?>
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
    <!--================Header Area =================-->

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">預約儀器</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">首頁</a></li>
                    <li>預約</li>
                    <li class="active">預約儀器</li>
                </ol>
            </div>
        </div>
    </section>
    <?php
$searchtxt = isset($_GET["searchtxt"]) ? $_GET["searchtxt"] : ""; // 防止未定義變數錯誤
?>

    <div class="card card_style">
        <div class="card-body">
        <div class="form-row">
    <div class="form-group col-4">
            <label for="exampleFormControlSelect1">預約教室:</label>
            <input type="hidden" name="type" value="學期預約"></input>
            <select class="form-control" name="classroom">
            <option>LM200</option>
            <option>LM202</option>
            <option>SL201</option>
            <option>SL245</option>
            <option>SL246</option>
            <option>SL471</option>                      
            </select></br>
        </div>
        <div class="form-group col-4">
            <label for="exampleFormControlSelect1">預借時間:</label>
            <select class="form-control" name="during">
              <option>08:00-09:00</option>
              <option>09:00-10:00</option>
              <option>10:00-11:00</option>
              <option>11:00-12:00</option>
              <option>12:30-13:30</option>
              <option>13:30-14:30</option>                             
              <option>14:30-15:30</option>                             
              <option>15:30-16:30</option>                             
              <option>16:30-17:30</option>                             
              <option>19:30-20:30</option>                             
              <option>20:30-21:30</option>                             
            </select></br>
        </div><div class="form-group col-4">
            <label for="exampleFormControlSelect1">預約類別</label>
            <select class="form-control" name="type">
              <option>平時預約</option>
              <option>學期預約</option>
                                     
            </select></br>
        </div>
        <button align="center" name="button">搜尋</button>


           
            <table class="table table-striped table-hover table_style">
                <thead class="thead_style">
                    <tr align="center">
                        <td>no.</td>
                        <td>預約者帳號</td>
                        <td>預約類別</td>
                        <td>預約教室</td>
                        <td>預約時間</td>
                        <td>預約日期</td>
                        <td>預約學期</td>
                        <td>星期</td>
                        <td>操作</td>
                    </tr>
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
                                <td>{$record['id']}</td>
                                <td>{$record['type']}</td>
                                <td>{$record['classroom']}</td>
                                <td>{$record['during']}</td>
                                <td>{$record['date']}</td>
                                <td>{$record['semester']}</td>
                                <td>{$record['week']}</td>
                                <td>
                                    <a class='delete_btn' href='delete.php?method=delete&postid={$record['reservation_id']}'>[刪除]</a>
                                </td>
                              </tr>";
                    }

                    mysqli_close($link);
                    
                    ?>
                </tbody>
            </table>
            
        </div>
    </div>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>