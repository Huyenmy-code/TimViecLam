<?php
    session_start();
    require 'KetNoi.php';
    // if(isset($_SESSION["ten"])){
        
    // }
    // else{
    //     header("Location: index.php");
    // }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container{
            width: 100%;
            height: auto;
            /* background-color: rgba(248, 232, 83, 0.171); */
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
    <?php
        include './html/header.html';
    ?>
    <?php
        include './html/header_nganh.php';
    ?>
    <?php
        include './html/trangchinh.html';
    ?>
    <?php
        include './html/footer.html';
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>