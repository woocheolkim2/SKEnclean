<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
        <title>SK엔크린</title>
        <!--link css -->
        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link rel="stylesheet" href="js/bxslider-4-4.2.12/src/css/jquery.bxslider.css" type="text/css" />
        <link rel="stylesheet" href="js/Swiper-4.0.2/dist/css/swiper.css" type="text/css" />
        <link type="text/css" rel="stylesheet" href="css/tablesorter-themes/blue/style.css" />
        <link rel="stylesheet" href="css/main.css" type="text/css" />
        
        <!-- link font -->
        <link href='https://cdn.rawgit.com/openhiun/hangul/14c0f6faa2941116bb53001d6a7dcd5e82300c3f/nanumbarungothic.css' rel='stylesheet' type='text/css'>
        
        <!-- link js -->
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bxslider-4-4.2.12/src/js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/Swiper-4.0.2/dist/js/swiper.min.js"></script>
        <script type="text/javascript" src="js/jquery-tablesorter.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script> 
        <!-- link icon -->
        <link rel="shortcut icon" href="./img/sk_icon.ico" />
    </head>
    <body >
        <header>
           <div class="header_a">
               <div class="container">
                   <div class="utilMenu">
                       <?php
                       if($_SESSION['userName'] ==''){
                       ?>
                       <a class="util1" href="llogin.php">로그인</a>
                       <?php
                       }else{
                       ?>
                       <a class="util1" onclick="location.href='/web/database/outlet.php?outlet=memberlogout'" style="cursor:pointer">로그아웃</a>
                       <?php
                       }
                       ?>
                       <a href="joinForm.php">회원가입</a>
                       <a href="#">고객센터</a>
                       <a href="#">전체보기</a>
                       
                   </div>
               </div>
           </div>
           <div class="header_b">
               <div class="container inner1"> 
                   <h1 class="logo"><a href="index.php"><img src="./img/main/logo.jpg" alt="SKEnclean"></a></h1>
                   <ul id="main_menu" class="main_menu">
                       <li class="menu1">
                           <a href="enclean_intro.php">엔크린 소개</a>
                       </li>
                       <li class="menu2">
                           <a href="pointNcard.php">포인트/카드</a>
                       </li>
                       <li class="menu3">
                           <a href="event.php">이벤트</a>
                       </li>
                       <li class="menu4">
                           <a href="pointmall.php">포인트몰</a>
                       </li>
                       <li class="menu5">
                           <a href="gasstation.php">주유소</a>
                       </li>
                       <li class="menu6">
                           <a href="#">나의 엔크린</a>
                       </li>
                   </ul>
               </div> 
           </div>
           <div id="gnb_wrap" class="gnb_wrap">  
               <ul class="gnb_pointNcard" >
                   <li><a href="pointNcard.php">포인트 이용 안내</a></li>
                   <li><a href="alliance_brands.php">제휴 브랜드</a></li>
                   <li><a href="pointexchange.php">포인트 교환</a></li>
                   <li><a href="point_give.php">포인트 선물</a></li>
                   <li><a href="card_info.php">제휴 카드 안내</a></li>
               </ul>
               <ul class="gnb_myEnclean">
                   <li><a href="mypoint.php">나의 포인트</a></li>
                   <li><a href="mycard.php">나의 카드</a></li>
                   <li><a href="myevent.php">응모한 이벤트</a></li> 
               </ul> 
            </div>
        </header>
    