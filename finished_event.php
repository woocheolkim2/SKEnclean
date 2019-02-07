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
<section id="Finished_Event">
    <div class="path">
        <div class="container">
            <div class="path_detail">
                <a href="index.php">HOME</a>
                <img src="./img/cursor.png"/>
                <a href="#" class="currentpage">FINISHED EVENT</a>
            </div>
        </div>
    </div>
    <div class="page_header">
        <div class="container">
            <p class="page_title">완료된 이벤트</p>
            <p class="page_desc">SK 엔크린 회원을 위했던 지난 이벤트입니다</p> 
        </div>
    </div>
    <div class="container">
        <select name="kindofevent" id="event_option_01">
            <option value="asd">기간</option>
            <option value="zds">zds</option>
            <option value="agaa">agaa</option>
        </select>
        <select name="selectoption" id="event_option_02">
            <option value="asd">분류</option>
            <option value="zds">zds</option>
            <option value="agaa">agaa</option>
        </select>
    </div>
    <div class="finished_event_list">
        <div class="container">
            <div class="finished_event_01">
                <img src="./img/event/finished_event_01.png" alt="finished_event_01">
                <div class="finished_event_desc">
                    <p style="color:#333; font-size:18px;">SK 엔크린 두툼 포인트</p>
                    <p style="color:#ccc;">이벤트 기간 2017.10.01 ~ 2017.10.07 </p>
                </div>
            </div>
            <div class="finished_event_02"> 
                <img src="./img/event/finished_event_02.png" alt="finished_event_02">
                <div class="finished_event_desc">
                    <p style="color:#333; font-size:18px;">기아 레드 멤버스</p>
                    <p style="color:#ccc;">이벤트 기간 2017.10.01 ~ 2017.10.07 </p>
                </div>
            </div>
            <div class="finished_event_01">
                <img src="./img/event/finished_event_03.png" alt="finished_event_03">
                <div class="finished_event_desc">
                    <p style="color:#333; font-size:18px;">현대 블루 멤버스</p>
                    <p style="color:#ccc;">이벤트 기간 2017.10.01 ~ 2017.10.07 </p>
                </div>
            </div>
            <div class="finished_event_02">
                <img src="./img/event/finished_event_04.png" alt="finished_event_04">
                <div class="finished_event_desc">
                    <p style="color:#333; font-size:18px;">홈플러스 신한카드 발급</p>
                    <p style="color:#ccc;">이벤트 기간 2017.10.01 ~ 2017.10.07 </p>
                </div>
            </div>
            <div class="finished_event_01">
                <img src="./img/event/finished_event_01.png" alt="finished_event_01">
                <div class="finished_event_desc">
                    <p style="color:#333; font-size:18px;">SK 엔크린 두툼 포인트</p>
                    <p style="color:#ccc;">이벤트 기간 2017.10.01 ~ 2017.10.07 </p>
                </div>
            </div>
            <div class="finished_event_02">
                <img src="./img/event/finished_event_02.png" alt="finished_event_02">
                <div class="finished_event_desc">
                    <p style="color:#333; font-size:18px;">기아 레드 멤버스</p>
                    <p style="color:#ccc;">이벤트 기간 2017.10.01 ~ 2017.10.07 </p>
                </div>
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