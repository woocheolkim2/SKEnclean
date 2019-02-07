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
<section id="Point_Exchange">
    <div class="path">
        <div class="container">
            <div class="path_detail">
                <a href="index.php">HOME</a>
                <img src="./img/cursor.png"/>
                <a href="#" class="currentpage">POINT EXCHANGE</a>
            </div>
        </div>
    </div>
    <div class="page_header" style="margin-top:40px;">
        <div class="container">
            <p class="page_title">포인트 교환</p>
            <p class="page_desc">엔크린 포인트를 교환하여 언제 어디서든 현금처럼 사용하세요</p> 
        </div>
    </div>
    <div class="container">
        <div class="exchangelist_01"></div>
        <div class="exchangelist_02"></div>
        <div class="exchangelist_03"></div>
        <div class="exchangelist_04"></div>
    </div>
</section>
<?php
    include_once('footer.php');
?>