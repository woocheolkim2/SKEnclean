<?php
    include_once('header.php');
?>
<style type="text/css">
    header > .header_b > .container.inner1 > #main_menu > li.menu3 > a{
        color:#c03 !important;
    }
    header > .header_b > .container.inner1 > #main_menu > li.menu3 > a:after{
        content:'';
        clear:both;
        display:block;
        position:absolute;
        top:138px;
        width:60px;
        margin:0 auto; 
        border:solid 2px #c03;
    }
    header > .f-nav > .container.inner1 > #main_menu > li.menu3 > a:after{ 
        content:'';
        clear:both;
        display:block;
        position:absolute;
        top:98px;
        width:60px;
        margin:0 auto; 
        border:solid 2px #c03; 
    }
</style>
<section id="Event">
     <div class="path">
        <div class="container">
            <div class="path_detail">
                <a href="index.php">HOME</a>
                <img src="./img/cursor.png"/>
                <a href="#" class="currentpage">EVENT</a>
            </div>
        </div>
    </div>
    <div class="page_header">
        <div class="container">
            <p class="page_title">진행중인 이벤트</p>
            <p class="page_desc">SK 엔크린 회원을 위한 이벤트에 지금 참여하세요</p>
            <a href="finished_event.php" class="go_finishedEvent_a"><div class="go_finishedEvent"><p>완료된 이벤트</p></div></a>
            <a href="#" class="go_prizeWinner_a"><div class="go_prizeWinner"><p>당첨자발표</p></div></a>
        </div>
    </div>
    <div class="event_list">
        <div class="container">
            <div class="event_01">
                <img src="./img/event/event_01_citibank.png"/>
                
            </div>
            <div class="event_01">
                <img src="./img/event/event_02_kakao.png"/>
            </div>
            <div class="event_01">
                <img src="./img/event/event_03_dongbu.png"/>
            </div>
            <div class="event_01">
                <img src="./img/event/event_04_sns.jpg"/>
            </div>
            <div class="event_01">
                <img src="./img/event/event_05_SKT.png"/>
            </div> 
            <div class="page_num">
                <div class="container">
                    <div class="double_courser_left"></div>
                    <div class="courser_left"></div>
                    <div><a href="#">1</a></div>
                    <div><a href="#">2</a></div>
                    <div><a href="#">3</a></div>
                    <div><a href="#">4</a></div>
                    <div><a href="#">5</a></div>
                    <div class="courser_right"></div>
                    <div class="double_courser_right"></div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<?php
    include_once('footer.php');
?>