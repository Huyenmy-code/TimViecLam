<?php
session_start();
  include 'KetNoi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./layouts/nganh.css">
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
          require './html/header_nganh.php' ;
        ?>
        <!---------------------------------------------------------------------------------------------------->
      
         <!----Hiển thị-------------------------------------------------------------------------------------------------->
    <div class="row " style='height:auto;width:100%'>
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <?php
            include './html/sidebar.html';
          ?>
        </nav>
            <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
         <?php
         
            if(isset($_GET["nganh"])){
                
                if($_GET["nganh"] == "QTKD"){
                    echo "Quản trị Kinh doanh";
                    $sql = "SELECT * 
                      FROM congviec cv join nganhnghe nn on cv.IDnn=nn.IDnn join gioitinh gt on cv.IDgt=gt.IDgt order by cv.IDcv desc";
                      //  where nn.tennn='Kinh tế quốc tế' ";
                }
                if($_GET["nganh"] == "Marketing"){
                    echo "MARKETING";
                    $sql = "SELECT * 
                      FROM congviec cv join nganhnghe nn on cv.IDnn=nn.IDnn join gioitinh gt on cv.IDgt=gt.IDgt order by cv.IDcv desc";
                      //  where nn.tennn='Kinh tế quốc tế' ";
                }
                if($_GET["nganh"] == "TaiChinh"){
                    echo "MARKETING";
                    $sql = "SELECT * 
                      FROM congviec cv join nganhnghe nn on cv.IDnn=nn.IDnn join gioitinh gt on cv.IDgt=gt.IDgt order by cv.IDcv desc";
                      //  where nn.tennn='Kinh tế quốc tế' ";
                }
                if($_GET["nganh"] == "QuanLy"){
                    echo "MARKETING";
                    $sql = "SELECT * 
                      FROM congviec cv join nganhnghe nn on cv.IDnn=nn.IDnn join gioitinh gt on cv.IDgt=gt.IDgt order by cv.IDcv desc";
                      //  where nn.tennn='Kinh tế quốc tế' ";
                }
                if($_GET["nganh"] == "KTQT"){
                    echo "Kinh tế quốc tế";
                    $sql = "SELECT * 
                      FROM congviec cv join nganhnghe nn on cv.IDnn=nn.IDnn join gioitinh gt on cv.IDgt=gt.IDgt where nn.tennn='Kinh tế Quốc tế' ";
                }
            }  
            else{
                $sql = "SELECT * 
                FROM congviec cv join nganhnghe nn on cv.IDnn=nn.IDnn join gioitinh gt on cv.IDgt=gt.IDgt order by cv.IDcv desc";
            }

            echo "<div class='nganh container' >";
            echo "<h4 class='title'>VIỆC LÀM MỚI NHẤT</h4>";
          
              $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result) > 0){
                echo "<div class='grid-container'>";
                while($row = mysqli_fetch_assoc($result)){    
                  echo "<div class='item'>";
                    echo "<span style='font-weight:bold'>".$row['tencv']."</span>"."</br>";
                    echo $row['tennn']."</br>";
                    echo $row['tengt']."</br>";
                    echo $row['IDcv']."";
                  echo "</div>";
              }
              echo "</div>";
            } 
            echo '</div>'; 
        ?>
        </div>
    </div>
        <!---------------------------------------------------------------------------------------------------->
        <?php
          require './html/footer.html';
        ?>
        
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

        
