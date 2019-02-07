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
<section id="Card_Info">
    <div class="path">
        <div class="container">
            <div class="path_detail">
                <a href="index.php">HOME</a>
                <img src="./img/cursor.png"/>
                <a href="#" class="currentpage">Card Info</a>
            </div>
        </div>
    </div>
    <div class="page_header">
            <div class="container">
                <p class="page_title">제휴 카드 안내</p>
                <p class="page_desc">SK 엔크린과 함께하는 제휴카드를 소개합니다</p> 
            </div>
        </div>
    </div>
    <div class="card_category">
        <div class="container"> 
            <a href="#"><i class="whole"></i></a>  
            <i class="bar-1"></i>
            <i class="bonuscard"></i>
            <i class="bar-1"></i>
            <i class="discount"></i>
            <i class="bar-1"></i>
            <i class="mileage"></i>
            <i class="bar-1"></i>
            <i class="checkcard"></i> 
        </div> 
    </div>
    <div class="card_category_name">
        <p>전체</p>
        <p>보너스카드</p>
        <p>할인형</p>
        <p>적립형</p>
        <p>체크카드</p> 
    </div>
    <div class="container">
        <div class="card_list">
            <p style="font-size:16pt">전체 &nbsp;<span style="color:#c03">52 개</span></p> 
            <div class="card_cont">
                <div class="card_01">
                    <img src="./img/card_info/KBDadam.png" />
                    <div class="card_kinds">신용</div>
                    <p class="card_name">KB 국민 다담카드 </p> 
                    <p class="card_desc">SK 주유소/충전소 60원/ℓ 할인</p>  
                    <button class="card_detail">혜택보기</button>
                    <button class="card_request">카드신청</button> 
                </div>
                <div class="card_01">
                     <img src="./img/card_info/LotteEnclean.jpg" />
                    <div class="card_kinds">신용</div>
                    <p class="card_name">롯데 엔크린 카드 </p> 
                    <p class="card_desc">롯데포인트 70점 적립</p>  
                    <button class="card_detail">혜택보기</button>
                    <button class="card_request">카드신청</button>
                </div>
                <div class="card_01">
                     <img src="./img/card_info/NHOkcheck.jpg" />
                    <div class="card_kinds">신용</div>
                    <p class="card_name">농협 OK체크카드 
                    <p class="card_desc">SK 주유소/충전소 40원/ℓ 할인</p>  
                    <button class="card_detail">혜택보기</button>
                    <button class="card_request">카드신청</button>
                </div>
                <div class="card_01">
                     <img src="./img/card_info/bonuscard.jpg" />
                    <div class="card_kinds">B</div>
                    <p class="card_name">엔크린 보너스 카드</p>  
                    <p class="card_desc">주유소 : 0.1% 적립</p>
                    <button class="card_detail">혜택보기</button>
                    <button class="card_request">카드신청</button>
                </div>  
            </div>
            <div class="card_cont">
                <div class="card_01">
                    <img src="./img/main/card_01.png"/>
                    <div class="card_kinds">신용</div>
                    <p class="card_name">THE YOU 신한카드</p> 
                    <p class="card_desc">SK 주유소 100원/ℓ 즉시할인</p>  
                    <button class="card_detail">혜택보기</button>
                    <button class="card_request">카드신청</button> 
                </div>
                <div class="card_01">
                     <img src="./img/main/card_02.png" />
                    <div class="card_kinds">신용</div>
                    <p class="card_name">OIL KING 롯데카드</p> 
                    <p class="card_desc">SK 주유소 최대 300원/ℓ 적립</p>  
                    <button class="card_detail">혜택보기</button>
                    <button class="card_request">카드신청</button>
                </div>
                <div class="card_01">
                     <img src="./img/main/card_04.png" />
                    <div class="card_kinds">신용</div>
                    <p class="card_name">신세계 씨티 리워드카드 
                    <p class="card_desc">SK 주유소 4% 적립</p>  
                    <button class="card_detail">혜택보기</button>
                    <button class="card_request">카드신청</button>
                </div>
                <div class="card_01">
                     <img src="./img/main/card_05.png" />
                    <div class="card_kinds">신용</div>
                    <p class="card_name">CLUB SK 카드</p>  
                    <p class="card_desc">SK 주유소 150원/ℓ 적립</p>
                    <button class="card_detail">혜택보기</button>
                    <button class="card_request">카드신청</button>
                </div> 
            </div>
            <div class="card_cont">
                <div class="card_01">
                    <img src="./img/main/card_07.png" />
                    <div class="card_kinds">신용</div>
                    <p class="card_name">스마트 KB 국민카드</p> 
                    <p class="card_desc">SK 주유소 최고 100원 할인</p>  
                    <button class="card_detail">혜택보기</button>
                    <button class="card_request">카드신청</button> 
                </div>
                <div class="card_01">
                     <img src="./img/main/card_08.png" />
                    <div class="card_kinds">신용</div>
                    <p class="card_name">NH채움 하나로카드 </p> 
                    <p class="card_desc">SK 주유소 60원/ℓ 할인</p>  
                    <button class="card_detail">혜택보기</button>
                    <button class="card_request">카드신청</button>
                </div>
                <div class="card_01">
                     <img src="./img/main/card_09.png" />
                    <div class="card_kinds">신용</div>
                    <p class="card_name">NH 농협 JOA 카드</p> 
                    <p class="card_desc">주유시 40원 할인</p>  
                    <button class="card_detail">혜택보기</button>
                    <button class="card_request">카드신청</button>
                </div>
                <div class="card_01">
                     <img src="./img/main/card_10.png" />
                    <div class="card_kinds">체크</div>
                    <p class="card_name">SK 에너지 롯데카드</p>  
                    <p class="card_desc">SK 주유소 80원/ℓ 즉시 할인</p>
                    <button class="card_detail">혜택보기</button>
                    <button class="card_request">카드신청</button>
                </div> 
            </div>
        </div>
    </div>
</section>
<?php
    include_once('footer.php');
?>