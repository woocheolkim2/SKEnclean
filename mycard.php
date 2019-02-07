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
<section id="MyCard">
    <div class="path">
        <div class="container">
            <div class="path_detail">
                <a href="index.php">HOME</a>
                <img src="./img/cursor.png"/>
                <a href="#" class="currentpage">My Card</a>
            </div>
        </div>
    </div>
    <div class="page_header">
        <div class="container">
            <p class="page_title">나의 카드</p>
            <p class="page_desc">카드 조회 및 등록, 비밀번호 변경이 가능합니다.</p> 
        </div>
    </div>
    <div class="new_card_view">
        <div class="container">
            <div class="card_enrollment">
                <p>
                    SK 엔크린 카드를 받으셨나요?</br>
                    <span style="font-size:12pt">간단하게 등록하고 자유롭게 포인트를 적립/사용해 보세요</span></br>
                    <button>카드 등록</button>
                </p>
                <div class="card_img_ico"></div>  
            </div>
            <div class="card_pwd_change">
                <p>
                    카드 비밀번호를 변경하실 건가요?</br>
                    <span style="font-size:12pt">새로운 카드 비밀번호 4자리 숫자를 입력해 주세요.</span></br>
                    <button>카드 비밀번호 변경</button>
                </p>
                <div class="card_pwd_change_img"></div>
            </div>
        </div>
    </div>
    <div class="owning_card">
        <div class="container">
            <p>보유한 SK 엔크린 카드 &nbsp;&nbsp;&nbsp;<span style="color:#c03;">총 3장</span></p>
            <div class="owning_card_list">
                <div class="owning_card_01">
                    <img src="./img/enclean.jpg" /> 
                    <dl>
                        <dt>일반카드</dt>
                        <dd>
                            <ul>
                                <li><strong>카드번호</strong><span>7701-****-****-8022</span></li> 
                                <li><strong>등록일</strong><span>2011.12.31</span></li> 
                                <li><strong>상태</strong><span>분실신고</span></li> 
                                <li><strong>카드종류</strong><span>마그네틱</span></li> 
                            </ul>
                        </dd>
                    </dl>
                </div>
                <div class="owning_card_01">
                    <img src="./img/enclean.jpg" /> 
                    <dl>
                        <dt>일반카드</dt>
                        <dd>
                            <ul>
                                <li><strong>카드번호</strong><span>7701-****-****-8022</span></li> 
                                <li><strong>등록일</strong><span>2011.12.31</span></li> 
                                <li><strong>상태</strong><span>분실신고</span></li> 
                                <li><strong>카드종류</strong><span>마그네틱</span></li> 
                            </ul>
                        </dd>
                    </dl>
                </div><div class="owning_card_01">
                    <img src="./img/enclean.jpg" /> 
                    <dl>
                        <dt>일반카드</dt>
                        <dd>
                            <ul>
                                <li><strong>카드번호</strong><span>7701-****-****-8022</span></li> 
                                <li><strong>등록일</strong><span>2011.12.31</span></li> 
                                <li><strong>상태</strong><span>분실신고</span></li> 
                                <li><strong>카드종류</strong><span>마그네틱</span></li> 
                            </ul>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    include_once('footer.php');
?>