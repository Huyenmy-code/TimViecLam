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
}
.nganh{
  padding: 15px;
}
.grid-container {
display: grid;
grid-template-columns: auto auto ;
grid-gap: 10px;  
padding: 10px;
}

.grid-container div {
text-align: left;
padding: 20px 0;
font-size: 18px;
border: 1px solid;
border-style: outset;
}
.item1{
grid-column: 1 / span 2;
text-align: center;
}
.title{
color: blue;
border-left: 6px solid blue;
padding: 15px;
background-color: lightblue;
}
.a{
    color: inherit;
    text-decoration: none;
}
.a:hover{
    background-color: gainsboro;
   
}
    </style>
</head>
<body>
 
  <h2>Quản trị kinh doanh</h2>
  <!----VIỆC LÀM MỚI NHẤT------------------------------------------------------------------------------------------------------------>
        <div class="nganh container" >
        <h4 class="title">VIỆC LÀM MỚI NHẤT</h4>
            <?php
              $sql = "SELECT * 
                      FROM congviec cv join nganhnghe nn on cv.IDnn=nn.IDnn join gioitinh gt on cv.IDgt=gt.IDgt order by cv.IDcv desc";
                      //  where nn.tennn='Kinh tế quốc tế' ";
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
              echo "<div class='item1'>";
                    echo "<a href='./ViecLamMoiNhat.php?nganh=Marketing'>+ Xem thêm việc làm mới nhất</a>";
                  echo "</div>";
              echo "</div>";
            }  
            ?>
  
      <!----------------------------------------------------------------------------------------------------------------------------------->
      <!----VIỆC LÀM CẦN GẤP------------------------------------------------------------------------------------------------------------>
        <div class="space">

        </div>
        <h4 class="title">VIỆC LÀM CẦN GẤP</h4>
            <?php
              $sql = "SELECT * FROM congviec cv join nganhnghe nn on cv.IDnn=nn.IDnn join gioitinh gt on cv.IDgt=gt.IDgt join hinhthuc ht ON cv.IDht=ht.IDht WHERE nn.tennn='quản trị kinh doanh' order by cv.IDcv desc";
              //             order by cv.IDcv desc limit 4  ";
              // $sql="select * from kinhnghiem kn order by kn.IDkn desc limit 4";
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0)
              {
                echo "<div class='grid-container'>";
                while($row = mysqli_fetch_assoc($result)){
                    
                  echo "<div class='item'>";
                  echo "<span style='font-weight:bold'>".$row['tencv']."</span>"."</br>";
                  echo $row['tennn']."</br>";
                  echo $row['tengt']."</br>";
                  echo $row['IDcv']."";
                  echo "</div>";
              }
                  echo "<div class='item1'>";
                    echo "<a href='./ViecLamCanGap.php?nganh=Marketing'>+ Xem thêm việc làm cần gấp</a>";
                  echo "</div>";
              echo "</div>";
            }
              
            ?>
 
      <!----------------------------------------------------------------------------------------------------------------------------------->
      <!----VIỆC LÀM LƯƠNG CAO------------------------------------------------------------------------------------------------------------>

        <h4 class="title">VIỆC LÀM LƯƠNG CAO</h4>
            <?php
              $sql = "SELECT * FROM congviec cv join nganhnghe nn on cv.IDnn=nn.IDnn join gioitinh gt on cv.IDgt=gt.IDgt join luong l on cv.IDluong=l.IDluong join hinhthuc ht on cv.IDht=ht.IDht join thanhpho tp on cv.IDtp=tp.IDtp join thuviec tv on cv.IDtv=tv.IDtv join trinhdo td on cv.IDtd=td.IDtd join kinhnghiem kn on cv.IDkn=kn.IDkn
              where nn.tennn='Quản trị kinh doanh'
              order by cv.IDcv desc limit 4  ";
              // $sql="select * from kinhnghiem kn order by kn.IDkn desc limit 4";
              $result = mysqli_query($conn,$sql);
              
              if(mysqli_num_rows($result)>0)
              {
                echo "<div class='grid-container'>";
                while($row = mysqli_fetch_assoc($result)){
  
                  echo "<div class='item'>";
                    echo $row['IDkn']."</br>";
                    echo $row['tenkn']."";
                  echo "</div>";
              }
                  echo "<div class='item1'>";
                    echo "<a href='./ViecLamLuongCao.php?nganh=Marketing'>+ Xem thêm việc làm lương cao</a>";
                  echo "</div>";
              echo "</div>";
            }
              
            ?>
          
  </div>
        <!---------------------------------------------------------------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

        
