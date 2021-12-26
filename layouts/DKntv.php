<?php
    $errtk=$errmatkhau=$errnhaplai=$erremail=$errten=$errdt="";
        if(isset($_POST["them"])){
            $tk = $_POST["tk"];
            $matkhau = $_POST["matkhau"];
            $nhaplai = $_POST["nhaplai"];
            $email = $_POST["email"];
            $ten = $_POST["ten"];
            echo "<script>function();</script>";
            if(empty($tk)==true) {
                $errtk=  "Lỗi : Xin vui lòng nhập tên của bạn.";               
              }
              elseif(empty($matkhau)==true){
                $erremail=  "Lỗi : Xin vui lòng nhập mật khẩu.";
              } 
              elseif(empty($email)==true){
                $erremail=  "Lỗi : Xin vui lòng nhập Email.";
              }   
              elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
                $erremail= 'Lỗi : Email của bạn không đúng.';
                
              }
              elseif($nhaplai!=$matkhau){
                $errnhaplai= 'Lỗi: Nhập lại mật khẩu.';
              }
              else{
                include("KetNoi.php");
                $sql="select * from taikhoan where taikhoan='$tk'";
                $kt=mysqli_query($conn,$sql);
                if(mysqli_num_rows($kt)>0)
                {
                    echo "<script>alert('Đã tồn tại tài khoản này!');</script>";
                }
                else {
                    $mk=md5(md5($matkhau));
                    $sqlThem = "insert into taikhoan(ten,taikhoan,email,matkhau,phanquyen) values('$ten','$tk','$email', '$mk',0)";
                    $result = mysqli_query($conn, $sqlThem);
                    if($result == true){
                        echo "<script>alert('Đăng ký thành công!');</script>";
                        header ('location: ../TrangChu.php');
                    }
                    else{
                        echo "<script>alert('Đăng ký không thành công!');</script>";
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
    <style>
       
        .bg{
            background-color: rgba(231, 245, 250, 0.692);
            border: 1px solid lightblue;
        }
        .body{
            height: 700px;
            background: linear-gradient(45deg, lightblue, transparent);
        }
        .form-singin{
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: auto;
            padding-top:115px ;
        }
        .t{
            max-width: 568px;
    background: rgb(255, 255, 255);
    border: 1px solid rgb(234, 240, 246);
    border-radius: 6px;
    box-shadow: rgb(47 47 47 / 12%) 0px 0px 24px;
    padding: 1rem 3rem;
    margin: auto;
    display: block;
        }
    </style>
    <title>Đăng ký tài khoản</title>
</head>
<body>
    
    <div class="body t">
    <form action="./TrangChu.php" method="POST" class="form-singin">
        <h3 align="center" style="color:blue;padding: 30px;">Đăng ký tài khoản</h3>
        <table align="center" style="font-size: 18px">
                    <tr>
                        <td>Tài khoản<span style="color:red"> *</span></td>
                        <td><input type="text" name="tk" class="bg">
                        </br><span style="color:red"><?php echo $errtk; ?></span></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu<span style="color:red"></td>
                        <td><input type="password" name="matkhau" class="bg">
                        </br><span style="color:red"><?php echo $errmatkhau; ?></span> </td>
                    </tr>
                    <tr>
                        <td>Nhập lại mật khẩu<span style="color:red"></td>
                        <td><input type="password" name="nhaplai" class="bg">
                        </br><span style="color:red"><?php echo $errnhaplai; ?></span></td>
                    </tr>
                    <tr>
                        <td>Email<span style="color:red"></td>
                        <td><input type="text" name="email" class="bg"><span style="color:red">
                        </br><span style="color:red"><?php echo $erremail; ?></span></td>
                    </tr>
                    <tr>
                        <td>Tên hiển thị<span style="color:red"></td>
                        <td><input type="text" name="ten"class="bg">
                        </br><span style="color:red"><?php echo $errten; ?></span></td>
                    </tr>
                    <tr>
                        <td colspan='2' align="center" style="font-size: 20px"></br><input type="submit" class="btn btn-lg btn-primary" name="them" value="Đăng ký"></td>
                    </tr>
                </table>
                <p class="mt-5 mb-3 text-muted" align="center">Bạn đã có tài khoản?
                        <a href="./DangNhap.php">Đăng nhập</a>
                </p>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>


