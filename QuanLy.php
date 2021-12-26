<?php
  include 'KetNoi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--link rel="stylesheet" href="css/trangchu.css"-->
    <title>Tìm việc làm</title>
    <style>
        .container{
            width: 100%;
            height: auto;
            background-color: rgba(248, 232, 83, 0.171);
        }
        .menu{
            width: 100%;
            height: 70px;
            background-color: lightblue;
            top: 0;
            margin:0;
            padding: 12px;
        }
        .up{
            width: 80%;
            height: 60px;
            margin: 0 auto;
        }
        .up ul{
            list-style: none;
            margin-top: -105px;
            padding-left: 300px;
        }
        .up ul li{
            display: inline-block;
            padding: 10px;
        }
        .up ul li a{
            text-decoration: none;
            font-size: 20px;
            font-weight: bolder;
            color: indigo;
        }
        .up ul li a img{
            vertical-align: middle;
            margin-top: 0px;
        }
        .logo{
            padding-right: 40px;
        }
        .down{
            height: 50px;
            width: 80%;
            margin: 0 auto;
            padding-left: 400px;
        }
        .down ul {
            list-style: none;
            margin-top: 0px;
        }
        .down ul li{

            display: inline-block;  
        }
        .downlist{
            float: right;
            padding-left: 200px;
            padding-right: 30px;
        }
        .down ul li a{
            float: left;
            text-decoration: none;
            font-size: 20px;
            font-weight: bolder;
            color: indigo;
        }
        .image{
            width: 100%;
            height: 350px;
            
        }
        .image img{
            height: 350px;
            width: 100%;
            margin: 0;
        }
        .bar{
            position: absolute;
            width: 100%;
            padding-right: 30px;
        }
        .bar ul{
            list-style: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgb(91, 103, 114);
            color: snow;
            height: 50px;
            width: 100%;
        }
        .bar ul li{
            float: left;
            display: inline;
        }
        .bar ul li a{
            float: left;
            text-decoration: none;
            font-size: 18px;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
        }
        .bar ul li a:hover {
            background-color: #111;
        }.tim{
          padding: 12px;
          padding-left: 250px
        }
        .nganh{
          padding: 15px;
        }
    </style>
</head>
<body>
  <div style="background-color:rgba(199, 252, 245, 0.295);">
        <?php
          require './html/header.html' ;
        ?>
        <!---------------------------------------------------------------------------------------------------->
        <?php
                    if(isset($_GET["nganh"])){
                        if($_GET["nganh"] == "QTKD"){
                            $sqls = "SELECT * FROM congviec cv
                                        join nganhnghe nn on cv.IDnn=nn.IDnn
                                        where nn.tennn='Quản Trị Kinh Doanh' ";
                        }
                        if($_GET["nganh"] == "Marketing"){
                            $sqls = "SELECT * FROM congviec cv
                                        join nganhnghe nn on cv.IDnn=nn.IDnn
                                        where nn.tennn='Marketing' ";
                        }
                        if($_GET["nganh"] == "TaiChinh"){
                            $sqls = "SELECT * FROM congviec cv
                                        join nganhnghe nn on cv.IDnn=nn.IDnn
                                        where nn.tennn='Tài Chính' ";
                        }
                        if($_GET["nganh"] == "QuanLy"){
                            $sqls = "SELECT * FROM congviec cv
                                        join nganhnghe nn on cv.IDnn=nn.IDnn
                                        where nn.tennn='Quản Lý' ";
                        }
                        if($_GET["nganh"] == "KTQT"){
                            $sqls = "SELECT * FROM congviec cv
                                        join nganhnghe nn on cv.IDnn=nn.IDnn
                                        where nn.tennn='Kinh Tế Quốc Tế' ";
                        }
                    }
           ?>             
        <!--Bar tìm kiếm---------------------------------------------------------------------------------------------------->
        </div>
        
        <div class="menu row" >
                <div class="col-8" class="tim" >
                  <nav class="navbar navbar-light">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Tìm công việc ..." aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                    </form>
                  </nav>          
                </div>
                <div class="col-4" style="font-size: 18px;">
                  <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                      <a class="nav-link" href="DangKy.php" style="float:right">👉Việc làm mới nhất</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="DangNhap.php">👉Việc làm lương cao</a>
                    </li>
                  </ul>
                </div>
            </div> 
         <!----Hiển thị-------------------------------------------------------------------------------------------------->
         <div class="row">
         <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  bảng điều khiển </font></font><span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(hiện hành)</font></font></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  Đơn hàng
                </font></font></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  Các sản phẩm
                </font></font></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  Khách hàng
                </font></font></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  Báo cáo
                </font></font></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  Tích hợp
                </font></font></a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Báo cáo đã lưu</font></font></span>
              <a class="d-flex align-items-center text-muted" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  Tháng này
                </font></font></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  Quý trước
                </font></font></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  Tương tác xã hội
                </font></font></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  Giảm giá cuối năm
                </font></font></a>
              </li>
            </ul>
          </div>
        </nav>
            <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
         <?php
        //  $result = mysqli_query($conn,$sqls);
        //             if(mysqli_num_rows($result) > 0){
        //               echo "<table border='1'>";
        //               echo "<tr>";
        //                   echo "<th> id </th>";
        //                   echo "<th> ht </th>";
             
        //               echo "</tr>";
        //           while($row = mysqli_fetch_assoc($result)){
        //               echo "<tr>";
        //                   echo "<td>" .$row["IDcv"] ."</td>";
        //                   echo "<td>" .$row["tencv"] ."</td>";
                   
        //               echo "</tr>";
        //           }
        //           echo "</table>";
        //             }
                  
        //           mysqli_close($conn);
        // ?>
        <div style="height:20px">
        </div>
        <div class="nganh container" style="background: linear-gradient(rgb(175, 248, 244), white);">
        <h3>>>Việc làm mới nhất</h3>
        </br>
          <div class="row">

              <div class="col-lg-8">
                <img class="rounded-circle" src="images/kd.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Quản trị kinh doanh</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-secondary" href="QTKD.php" role="button">Tìm việc làm »</a></p>
              </div>

              <div class="col-lg-4">
                <img class="rounded-circle" src="images/tc.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Tài chính</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-secondary" href="TaiChinh.php" role="button">Tìm việc làm »</a></p>
              </div>

          </div>
      </div>
      <div class="nganh container" style="background: linear-gradient(rgb(175, 248, 244), white);">
          <h3>>>Việc làm lương cao</h3></br>
            <div class="row">

                <div class="col-lg-8">
                  <img class="rounded-circle" src="images/q2.jpg" alt="Generic placeholder image" width="140" height="140">
                  <h2>Quản lý</h2>
                  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                  <p><a class="btn btn-secondary" href="QuanLy.php" role="button">Tìm việc làm »</a></p>
                </div>

                <div class="col-lg-4">
                  <img class="rounded-circle" src="images/qt.jpg" alt="Generic placeholder image" width="140" height="140">
                  <h2>Kinh tế quốc tế</h2>
                  <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <p><a class="btn btn-secondary" href="KTQT.php" role="button">Tìm việc làm »</a></p>
                </div>

            </div>
        </div>
        </div>
        </div>
        <!---------------------------------------------------------------------------------------------------->
        <?php
          require './html/footer.html';
        ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

        
