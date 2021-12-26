<?php
include "KetNoi.php";
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .menu{
            width: 100%;
            height: 70px;
            background-color: lightblue;
            top: 0;
            margin:0;
            padding: 12px;
        }
    </style>
</head>
<body>
  <div class="menu row" >
    <div class="col-8" class="tim" >
      <nav class="navbar navbar-light">
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Tìm công việc ..." aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
        </form>
      </nav>          
    </div>
    <!-- <div class="col-4" style="font-size: 18px;"> -->
      <!-- <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="nav-link" href="./DK.php" style="float:right">Đăng Ký</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="DangNhap.php">Đăng Nhập</a>
        </li>
      </ul> -->
      <?php
    //session_start();
    include "KetNoi.php";
    if(isset($_SESSION['ten'])){
        $name=$_SESSION['ten'];
        // echo "Xin chao $name";
        echo '<div class="dropdown show">';
        echo '<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';

        echo '<span>'. $_SESSION["ten"].'</span>';
        echo '</a>';
        echo '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
        if(isset($_SESSION["phanquyen"])){
          if($_SESSION["phanquyen"]!=0){
            echo '<a class="dropdown-item" href="Them.php">Thêm trọ</a>';
          }
        }
          
          echo '<a class="dropdown-item" href="../layout/Sua.php">Chỉnh sửa thông tin</a>';
          echo '<a class="dropdown-item" href="../layouts/DangXuat.php">'.'<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
          Đăng xuất
        </button>'.'</a>';

        echo '</div>';
    }
    else {
        echo '<div class="col-4" style="font-size: 18px;">';
        echo ' <ul class="nav nav-pills nav-fill">';
            echo '<li class="nav-item">';
                // echo '<a class="nav-link" href="./DK.php?dk=" style="float:right">Đăng Ký</a>';
                echo '<div class="dropdown">';
                echo '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Đăng Ký
                </button>';
                echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
                  echo '<a class="dropdown-item" href="./DK.php?dk=ntv">Người tìm việc</a>';
                  echo '<a class="dropdown-item" href="./DK.php?dk=ntd">Nhà tuyển dụng</a>';
                  echo'</div>';
                echo '</div>';
            echo '</li>';
            echo '<li class="nav-item">';
                echo '<a class="nav-link" href="./layouts/DangNhap.php">Đăng Nhập</a>';
            echo '</li>';
        echo '</ul>';
        echo '</div>';
    }
?>
    <!-- </div> -->
</div> 
</body>
</html>