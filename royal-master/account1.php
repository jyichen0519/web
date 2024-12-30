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
    <link rel="stylesheet" href="sample.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
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
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">帳號管理</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">帳號管理</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================ Accomodation Area  =================-->
    

    
    <!--================Booking Tabel Area  =================-->
    <!--================ Accomodation Area  =================-->
    
    <div align="right"><a href="bbb.htm">[新增使用者]</a>&nbsp;&nbsp;</div>

  
    <center>
   <table class="table table-hover" width="500" align=center>
     <thead align="center" class="ListCap"><td colspan=4>帳號管理</td></thead>
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


<style>
    
    .table {
        border: 1px  gray;
        max-width: 800px;
        margin: 20px auto;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form{
    
    border: 1px solid gray;
    padding: 30px;
    margin: 50px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

}
</style>


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