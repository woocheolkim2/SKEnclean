<?php 
session_start();  
include_once('header.php');

if($_SESSION['userName'] == ''){
    echo '<script>alert("로그인이 필요합니다.")</script>';
    echo "<script>location.href='/web/llogin.php'</script>"; 
} 
?> 
<style type="text/css">
    header > .header_b > .container.inner1 > #main_menu > li.menu6 > a{
        color:#c03 !important;
    }
    header > .header_b > .container.inner1 > #main_menu > li.menu6 > a:after{
        content:'';
        clear:both;
        display:block;
        position:absolute;
        top:136px;
        width:100px;
        margin:0 auto; 
        border:solid 2px #c03;
    }
    header > .f-nav > .container.inner1 > #main_menu > li.menu6 > a:after{ 
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
<section id="MyEvent">
    <div class="path">
        <div class="container">
            <div class="path_detail">
                <a href="index.php">HOME</a>
                <img src="./img/cursor.png"/>
                <a href="#" class="currentpage">My Event</a>
            </div>
        </div>
    </div>
    <div class="page_header">
        <div class="container">
            <p class="page_title">응모한 이벤트</p>
            <p class="page_desc">참여한 이벤트의 당첨결과를 확인해보세요.
                <input type="button" name="진행중인 이벤트" value="진행중인 이벤트" style="margin-left: 20px;background:#fff; width:120px;height:30px; border:solid 1px #666; border-radius:5px;" onclick="location.href='./event.php'"/>
            </p> 
        </div>
    </div>
    <div class="container">
        <div class="applied_event">
            <div class="ap_event_01">
                <img src="./img/vips_event.png" />
                <div class="ap_event_desc">
                    <p style="font-size:16px; margin-top:40px; margin-left:40px;">VIPS 11월 14일 단 하루! 전 메뉴 50% 할인!</p>
                    <p style="font-size:14px; color:#666; margin-top:60px; margin-left:40px;">2017.11.08 ~ 2017.11.14</p>
                </div>
            </div>
            <div class="ap_event_01" style="margin-left:80px;">
                <img src="./img/vips_event.png" />
                <div class="ap_event_desc">
                    <p style="font-size:16px; margin-top:40px; margin-left:40px;">VIPS 11월 14일 단 하루! 전 메뉴 50% 할인!</p>
                    <p style="font-size:14px; color:#666; margin-top:60px; margin-left:40px;">2017.11.08 ~ 2017.11.14</p>
                </div>
            </div>
        </div>
        <div class="applied_event">
            <div class="ap_event_01">
                <img src="./img/vips_event.png" />
                <div class="ap_event_desc">
                    <p style="font-size:16px; margin-top:40px; margin-left:40px;">VIPS 11월 14일 단 하루! 전 메뉴 50% 할인!</p>
                    <p style="font-size:14px; color:#666; margin-top:60px; margin-left:40px;">2017.11.08 ~ 2017.11.14</p>
                </div>
            </div>
            <div class="ap_event_01" style="margin-left:80px;">
                <img src="./img/vips_event.png" />
                <div class="ap_event_desc">
                    <p style="font-size:16px; margin-top:40px; margin-left:40px;">VIPS 11월 14일 단 하루! 전 메뉴 50% 할인!</p>
                    <p style="font-size:14px; color:#666; margin-top:60px; margin-left:40px;">2017.11.08 ~ 2017.11.14</p>
                </div>
            </div>
        </div>
        <div class="page_num" style="margin-top:60px;">
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
</section>
<?php
    include_once('footer.php');
?>