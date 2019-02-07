<?php
 include_once('header.php');
?>
<style type="text/css">
    header > .header_b > .container.inner1 > #main_menu > li.menu2 > a{
        color:#c03 !important;
    }
    header > .header_b > .container.inner1 > #main_menu > li.menu2 > a:after{
        content:'';
        clear:both;
        display:block;
        position:absolute;
        top:138px;
        width:100px;
        margin:0 auto; 
        border:solid 2px #c03;
    }
    header > .f-nav > .container.inner1 > #main_menu > li.menu2 > a:after{ 
        content:'';
        clear:both;
        display:block;
        position:absolute;
        top:98px;
        width:100px;
        margin:0 auto; 
        border:solid 2px #c03; 
    }
</style>
<section id="Point_Give">
    <div class="path"> 
            <div class="container">
                <div class="path_detail">
                    <a href="index.php">HOME</a>
                    <img src="./img/cursor.png"/>
                    <a href="#" class="currentpage">POINT GIVE</a>
                </div>
            </div>
    </div>
    <div class="main_title">
        <div class="container"> 
            <p class="main_title_txt01">포인트 선물</p>
            <p class="main_title_txt02">엔크린 포인트를 선물하여 현금처럼 사용해보세요</p>
        </div>
        <div class="visual"></div> 
        <a href="#" class="give_btn_wrap">
            <div class="give_btn">
                <p>포인트 선물하기</p>
            </div>
        </a>
    </div>
    <div class="using_guide">
        <div class="container">
            <img src="./img/pointgive/using_guide.jpg" />
        </div>
    </div>
</section>
<?php
 include_once('footer.php');
?>