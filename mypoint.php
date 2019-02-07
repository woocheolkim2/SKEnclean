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
<section id="My_Point"> 
    <div class="path">
        <div class="container">
            <div class="path_detail">
                <a href="index.php">HOME</a>
                <img src="./img/cursor.png"/>
                <a href="#" class="currentpage">My Point</a>
            </div>
        </div>
    </div>  
    <div class="page_header">
        <div class="container">
            <p class="page_title">나의 포인트</p>
            <p class="page_desc">내가 가진 SK 엔크린 포인트의 사용과 적립 내용을 확인할 수 있습니다.</p> 
        </div>
    </div>
    <div class="point_view">
        <div class="container">
            <div class="point_left">
                <p style="font-size:18pt; color:#c03;">나의 엔크린 포인트</p>
                <p style="margin-top:20px; font-size:20pt; color:#c03; font-weight:bold;">23P</p>
                <p style="margin-top:100px; font-size:14pt;">사용 가능 포인트&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>23P</span></p> 
                <p style="margin-top:20px; font-size:14pt;">사용 예정 포인트&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>3P</span></p>   
                <p style="margin-top:20px; font-size:14pt;">소멸 예정 포인트&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:#c03">3P</span></p>   
            </div>
            <div class="point_right">
                <p style="padding-left:40px; font-size:18pt; color:#c03;">보너스포인트 적립현황&nbsp;&nbsp;&nbsp;<span class="dddaf" style="font-size:12pt;color:#333;">2017년 11월 기준</span></p>
                <p style="margin-top:140px; padding-left:40px; font-size:14pt;">복지 포인트&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>비동의회원</span></p> 
                <p style="margin-top:20px; padding-left:40px; font-size:14pt;">현대증권 able 포인트&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>비동의회원</span></p>   
                <p style="margin-top:20px; padding-left:40px; font-size:14pt;">우리다모아 포인트&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>비동의회원</span></p>   
                <p style="margin-top:20px; padding-left:40px; font-size:14pt;">삼성전자 포인트&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>비동의회원</span></p>   
            </div>
        </div>
    </div>
    <div class="period_search">
        <div class="container">
            <div class="period_select">
                <p>기간선택</p>
                <button>1주일</button>
                <button>1개월</button>
                <button>3개월</button>
                <button>6개월</button>
                <input type="text" name="start_date" placeholder="2017.11.07"/>
                <input type="text" name="last_date" placeholder="2017.11.14"/>
                <button class="inquiry_btn">조회</button>
                <p style="font-size:10pt; margin-top:46px; ">* 최근 2년 이내로 조회 가능</p>
            </div>
            <div class="point_list_board">
                <div class="list_header">
                    <p style="width:80px;">조회 기간 내</p>
                    <p>사용 포인트&nbsp;&nbsp;<span style="font-size:14pt; color:#c03; font-weight:bold;">0P</span></p>
                    <p>적립 포인트&nbsp;&nbsp;<span style="font-size:14pt; color:#c03; font-weight:bold;">0P</span></p> 
                </div>
                <div class="list_content">
                    <p>조회 결과가 없습니다.</p>
                </div>
            </div> 
        </div>
        <div class="using_guide_info">
            <div class="container">
                <p>＊최근 적립된 포인트 중 일부는 승인절차를 거쳐 사용가능 포인트로 전환되기까지 1~2개월정도 소요됩니다.</p>
                <p>＊표시된 적립포인트는 제 22조 서비스 이용 수수료에 명기된 바와 같이 실제 적립하신 포인트의 1/10에 해당하는 서비스 이용수수료가 차감된 포인트입니다.</p>
                <p>＊충전포인트 환급은 마지막 충전 직후 잔액의 80%를 사용한 경우에만 가능합니다.</p>
                <p>＊SK엔크린 포인트는 기본 최근 3개월 내역이 조회되며, 최대 6개월까지 조회 가능합니다.</p>
                <p>＊3~4주 후에도 카드 및 포인트 적립 내역이 조회되지 않는 경우 고객센터(1599-0512)로 연락주시기 바랍니다.</p> 
            </div>
        </div>
    </div>
    
</section>
<?php
    include_once('footer.php');
?>