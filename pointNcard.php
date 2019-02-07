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
    <section id="PointNCard">
        <div class="path">
            <div class="container">
                <div class="path_detail">
                    <a href="index.php">HOME</a>
                    <img src="./img/cursor.png"/>
                    <a href="#" class="currentpage">POINT INFO</a>
                </div>
            </div>
        </div>
        <div class="main_title">
            <div class="container"> 
                <p class="main_title_txt01">포인트 이용안내</p>
                <p class="main_title_txt02">제휴 브랜드 이용 금액에 따라 포인트를 적립 또는 현금처럼 사용하실 수 있습니다   </p>
            </div>
            <div class="visual">  
            </div> 
        </div>
        <div class="savingNuse">
            <div class="container">
                <div class="textArea">
                    <p class="title">적립 & 사용</p>
                    <p class="desc">제휴 브랜드 이용 시, 결제 금액의 <span style="color:#cc0033">0.1~10%</span>적립!</br>
                    <span style="color:#cc0033">보유 포인트 1000</span> 이상 시, 현금처럼 사용 가능!</p>
                </div>
                <div class="saveNuse"> 
                </div>
            </div>
        </div>
        <div class="service_info">
            <div class="container">
                <div class="textArea">
                    <p class="title">서비스 안내</p>
                    <p class="desc">포인트 적립, 사용, 상환, 이벤트 참여 등 다양한 혜택을</br>
                    누리실 수 있는 국내 <span style="color:#cc0033">최고의 멤버십</span>서비스</p>
                </div>
                <div class="service"></div>
            </div>
        </div>
        <div class="howtouse">
            <div class="container">
                <div class="textArea">
                    <p class="title">이용 방법</p>
                </div>
            </div>
            <div class="usingway"></div>
        </div>
    </section>
<?php
    include_once('footer.php');
?>