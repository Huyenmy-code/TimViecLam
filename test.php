
<?php
    session_start();
    require 'connect.php';
    $err="";
    if(isset($_SESSION["name"])){
        header("Location: home.php");
    }
    else
    {
        if(isset($_POST["submit"])){
            $user =  $_POST["username"];
            $pass =  $_POST["password"];
            if((strlen($user) < 4) || strlen($pass) < 4){
                $err="Vui lòng nhập tên người dùng !";
            }
            else{
                $sqls = "SELECT * FROM user WHERE username`='".$user."' AND password`='".md5($pass)."';";
                $result = mysqli_query($connect,$sqls);
                $rows = mysqli_num_rows($result);
                $value = mysqli_fetch_assoc($result);
                if($rows == 1){ 
                    $_SESSION['username'] = $user;
                    $_SESSION['id']  = $value["id"];
                    $_SESSION['name']  = $value["name"];
                    $_SESSION['email']  = $value["email"];
                    $_SESSION['phone']  = $value["phone"];
                    $_SESSION['avata']  = $value["avata"];
                    header("Location: home.php");
                }else{
                    $err =  "Tên đăng nhập hoặc mật khẩu không đúng!";
                }
            }
        }
    }
?>

<div class="avata"><img src="<?php echo $_SESSION['avata']; ?>" alt="">
             <a href=""><?php echo $_SESSION["name"]; ?></a>