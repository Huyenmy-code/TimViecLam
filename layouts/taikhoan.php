<?php
session_start();
    if(isset($_SESSION['tentk'])){
        $name=$_SESSION['tentk'];
        echo "Xin chao.$name";
    }
    else {
        echo '<div class="col-4" style="font-size: 18px;">';
        echo ' <ul class="nav nav-pills nav-fill">';
            echo '<li class="nav-item">';
                echo '<a class="nav-link" href="./DK.php" style="float:right">Đăng Ký</a>';
            echo '</li>';
            echo '<li class="nav-item">';
                echo '<a class="nav-link" href="./DangNhap.php">Đăng Nhập</a>';
            echo '</li>';
        echo '</ul>';
        echo '</div>';
    }
?>