<?php
session_start();
include "KetNoi.php";
$err="";
if(isset($_SESSION["tentk"])){
    header("Location: TrangChu.php");
}
else
{
        if(isset($_POST["dangnhap"])){
            $tk = $_POST["tk"];
            $matkhau = $_POST["matkhau"];
            
                include("KetNoi.php");
                $mk=md5(md5($matkhau));
                $sql ="select * from taikhoan where taikhoan='$tk' and matkhau='$mk' ";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($query);

                if (mysqli_num_rows($query) == 0) {
                    echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng!');</script>";
                   
                }                
                // elseif (($mk != $row['matkhau'])&&($mk != $rows['matkhau'])&&($mk != $rowsss['matkhau'])) {
                //     echo "<script>alert('Mật khẩu không đúng!');</script>";
                //     echo $mk;
                //     echo "aaa111";
                // }
                else {
                    $_SESSION['phanquyen']  = $row["phanquyen"];
                    if($row["phanquyen"]==0){
                        $_SESSION['tentk'] = $tk;
                        $_SESSION['IDtk']  = $row["IDtk"];
                        $_SESSION['taikhoan']  = $row["taikhoan"];
                        $_SESSION['email']  = $row["email"];
                        $_SESSION['sdt']  = $row["sdt"];
                        $_SESSION['phanquyen']  = $row["phanquyen"];
                        header ("Location: chuyennganh.php");echo "aa222a";
                    }
                    elseif ($row["phanquyen"]==2){
                        $_SESSION['tentk'] = $tk;
                        $_SESSION['IDtk']  = $row["IDtk"];
                        $_SESSION['taikhoan']  = $row["taikhoan"];
                        $_SESSION['phanquyen']  = $row["phanquyen"];
                        header ("Location: admin.php");echo "aa333a";
                    }
                    else{
                        $_SESSION['tentk'] = $tk;
                        $_SESSION['IDtk']  = $row["IDtk"];
                        $_SESSION['tenct']  = $row["tenct"];
                        $_SESSION['taikhoan']  = $row["taikhoan"];
                        $_SESSION['email']  = $row["email"];
                        $_SESSION['diachi']  = $row["diachi"];
                        $_SESSION['sdt']  = $row["sdt"];
                        $_SESSION['quymo']  = $row["quymo"];
                        $_SESSION['phanquyen']  = $row["phanquyen"];
                        $_SESSION['mota']  = $row["mota"];
                        $_SESSION['website']  = $row["website"];
                        header ("Location: NTD.php");echo "aa33334a";
                    }
                }
                mysqli_close($conn);    
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/trangchu.css">
    <style>
        .form-singin{
            padding:115px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
        include './html/header_nganh.php';
    ?>

    <div class="row style='height:auto;'">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <?php
            include './html/sidebar.html';
          ?>
        </nav>
        <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" style="background-color:rgb(218, 234, 240)">
            <form action="" method="POST" class="form-singin">
                
                <h2 align="center" >Đăng nhập</h2>
                    <table align="center" style="font-size: 20px" cellspacing="5px" class="form-floating">
                        <tr>
                            <td><input type="text" name="tk" class="bg" placeholder="Tài khoản"></td></br>
                        </tr>
                        <tr>
                            <td><input type="password" name="matkhau" class="bg" placeholder="Mật khẩu"></td>
                        </tr>
                        <tr>
                            <td align="center"><input type="checkbox" value="remember-me"> Ghi nhớ đăng nhập</td>
                        </tr>
                        <tr>
                            <td align="center"><input class="btn btn-lg btn-primary" type="submit" name="dangnhap" value="Đăng nhập"></td>
                        </tr>
                    </table>
                    <p class="mt-5 mb-3 text-muted" align="center">Bạn chưa có tài khoản?
                        <a href="./DK.php">Đăng ký</a>
                    </p>
            </form>
    </div>
            
</div>
    <?php
        include './html/footer.html';
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>