<?php
session_start();
include_once('header.php'); 
?>
<section id="Contents">
    <div class="mainVisual_wrap swiper-container">
        <div class="mainVisual_wrapper swiper-wrapper">
            <div id="mainVisual" class="swiper-slide">1</div>
            <div id="mainVisual" class="swiper-slide">2</div>
            <div id="mainVisual" class="swiper-slide">3</div> 
        </div>
        <div class="swiper-pagination"></div>
    </div> 
    <div id="shortcut">
        <div class="container">
            <ul class="shtcut">
                <li class="SC1"><a href="#">카드등록안내</a></li>
                <li class="SC2"><a href="#" >포인트 적립처 안내</a></li>
                <li class="SC3"><a href="#">보너스포인트 안내</a></li>
                <li class="SC4"><a href="#">쿠폰 혜택 안내</a></li> 
            </ul>
        </div>
    </div>
    <div id="BNCard">
        <div class="container">
            <div class="textArea">
                <p class="title">BEST & NEW CARD</p>
                <p class="desc">전국 어디서나 SK 엔크린의 다양한 혜택을 누리실 수 있습니다</p>
            </div>
        </div>
        <div class="card">
            <div class="container">
                <div class="radio_btn">
                    <div class="radio_btn_checked">
                        <input type="radio" name="popular" class="btn_checked" checked/>
                    </div>
                    <p>최근 인기 카드</p>
                    <div class="radio_btn_nochecked"> 
                        <input type="radio" name="popular"/>  
                    </div>
                    <p>최근 인기 카드</p> 
                </div> 
                <div class="slide_wrap ">  
                    <div class="card_desc slider ">  
                        <div class="card_list">
                            <div class="card_list_01">
                                <div class="card_img"></div>
                                <p class="card_name"style="margin-top:20px;">SK THE YOU 신한카드</p>
                                <p class="card_purpose_01">SK 주유소 100원/ℓ 즉시할인</p> 
                            </div>
                            <div class="card_list_01">
                                <div class="card_img2"></div>
                                <p class="card_name"style="margin-top:20px;">OIL KING SK 롯데카드</p>
                                <p class="card_purpose_01">SK 주유소 최대 300원/ℓ 할인</p> 
                            </div>
                            <div class="card_list_01">
                                <div class="card_img3"></div>
                                <p class="card_name"style="margin-top:20px;">KB국민 다담카드</p>
                                <p class="card_purpose_01">SK 주유/충전소 60원/ℓ 할인</p> 
                            </div>
                            <div class="card_list_01">
                                <div class="card_img4"></div>
                                <p class="card_name"style="margin-top:20px;">신세계 씨티 리워드 카드</p>
                                <p class="card_purpose_01">SK 주유소 4% 적립</p> 
                            </div>
                            <div class="card_list_01">
                                <div class="card_img5"></div>
                                <p class="card_name"style="margin-top:20px;">CLUB SK 카드</p>
                                <p class="card_purpose_01">SK주유소 150원/ℓ 즉시할인</p> 
                            </div>
                        </div>
                        <div class="card_list">
                            <div class="card_list_01">
                                <div class="card_img6"></div>
                                <p class="card_name"style="margin-top:20px;">SK내트럭 유가보조금카드</p>
                                <p class="card_purpose_01">유가보조금 자동환급 및 할인</p> 
                            </div>
                            <div class="card_list_01">
                                <div class="card_img7"></div>
                                <p class="card_name"style="margin-top:20px;">SK 스마트 KB 국민카드</p>
                                <p class="card_purpose_01">SK 주유소 최고 100원 할인</p> 
                            </div>
                            <div class="card_list_01">
                                <div class="card_img8"></div>
                                <p class="card_name"style="margin-top:20px;">NH채움 하나로카드</p>
                                <p class="card_purpose_01">SK주유소 60원/ℓ 할인</p> 
                            </div>
                            <div class="card_list_01">
                                <div class="card_img9"></div>
                                <p class="card_name"style="margin-top:20px;">농협JOA카드</p>
                                <p class="card_purpose_01">주유시 40원 할인</p> 
                            </div>
                            <div class="card_list_01">
                                <div class="card_img10"></div>
                                <p class="card_name"style="margin-top:20px;">SK롯데카드</p>
                                <p class="card_purpose_01">SK주유소 80원/ℓ즉시할인</p> 
                            </div>
                        </div>
                        <div class="card_list">
                            <div class="card_list_01">
                                <div class="card_img11"></div>
                                <p class="card_name"style="margin-top:20px;">참신한 체크카드</p>
                                <p class="card_purpose_01">SK 주유소 60원/ℓ 할인</p> 
                            </div>
                            <div class="card_list_01">
                                <div class="card_img12"></div>
                                <p class="card_name"style="margin-top:20px;">KB국민 민체크카드</p>
                                <p class="card_purpose_01">SK 주유소 60원/ℓ 할인</p> 
                            </div>
                            <div class="card_list_01">
                                <div class="card_img13"></div>
                                <p class="card_name"style="margin-top:20px;">우리 다모아 체크카드</p>
                                <p class="card_purpose_01">SK 주유소 20원/ℓ 할인</p> 
                            </div>
                            <div class="card_list_01">
                                <div class="card_img14"></div>
                                <p class="card_name"style="margin-top:20px;">농협 OK체크카드</p>
                                <p class="card_purpose_01">SK 주유소 40원/ℓ 할인</p> 
                            </div>
                            <div class="card_list_01">
                                <div class="card_img15"></div>
                                <p class="card_name"style="margin-top:20px;">신한 S-Line체크카드</p>
                                <p class="card_purpose_01">SK 주유소 40원/ℓ 할인</p> 
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
    </div>
    <div id="HotEvent">
        <div class="container swiper-slider">
            <div class="textArea">
                <p class="title">HOT EVENT</p>
                <p class="desc">이벤트 참여하고 다양한 헤택을 마음껏 누리세요</p>
            </div>  
            <div class="slide_wrap swiper-container">
                <div class="event_cont swiper-wrapper"> 
                    <div class="event_cont_1 swiper-slide"></div>
                    <div class="event_cont_2 swiper-slide"></div>
                    <div class="event_cont_3 swiper-slide"></div>  
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div id="Hot_Items">
        <div class="container">
            <div class="textArea">
                <p class="title">HOT ITEMS</p>
                <p class="desc">전국 어디서나 SK엔크린의 다양한 혜택을 누리실 수 있습니다</p>
            </div>
            <div class="item_cont">
                <div class="item_01">
                    <p style="font-size:18px">[Havanianas] Freedom SL CF Black</p>
                    <p style="font-size:16px">39,900원&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#cc0033">[5%]</span></p>
                    <div class="item_image">
                        <img src="./img/main/item_01.gif"></img>
                    </div>
                    
                    <button class="go_detail">자세히보기</button>
                </div>
                <div class="item_02">
                    <div class="item_02_top">
                        <div class="item_02_image">
                            <img src="./img/main/items_02.png" alt="">
                        </div>
                        <div class="item_02_desc">
                            <p style="font-size:18px;">퓨넘/funum/섬유향수/방향</br>/답례/선물/신규2종추가/3+1</p>
                            <p>4,800원</p>
                            <p style="color:#ccc">배송비 2,500원</p>
                        </div>
                    </div>
                    <div class="item_02_top">
                         <div class="item_02_image">
                            <img src="./img/main/items_03.jpg" alt="">
                        </div>
                        <div class="item_02_desc">
                            <p style="font-size:18px;">[텐바이텐]</br>2017년형 이메텍 전기요</p>
                            <p><del>79,000원</del></p>
                            <p>SK엔크린 혜택 적용가 <span style="color:#cc0033">74,260원</span></p>
                        </div>
                    </div>
                </div>
                <div class="item_03">
                    <div class="item_03_top">
                        <div class="item_02_image">
                            <img src="./img/main/items_04.jpg" alt="">
                        </div>
                        <div class="item_02_desc">
                            <p style="font-size:18px;">[CJ 제일제당]</br>햇반 210g x 3EA x 10개</p>
                            <p><del>27,800원</del></p>
                            <p>SK엔크린 혜택 적용가 <span style="color:#cc0033">25,854원</span></p>
                        </div>
                    </div>
                    <div class="item_03_btm">
                        <div class="item_02_desc">
                            <p style="font-size:18px;">[CJ 제일제당]</br>햇반 210g x 3EA x 10개</p>
                            <p><del>27,800원</del></p>
                            <p>SK엔크린 혜택 적용가 <span style="color:#cc0033">25,854원</span></p>
                        </div>
                        <div class="item_02_image">
                            <img src="./img/main/items_05.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="item_04">
                    <p style="font-size:18px">포메 베이직스니커즈(3cm)</p>
                    <p style="font-size:16px">19,900원&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#cc0033">[3%]</span></p>
                    <div class="item_image">
                        <img src="./img/main/item_06.jpg"></img>
                    </div>
                    
                    <div class="go_detail" onclick="location.href='pointmall.php'">자세히 보기</div>
                </div>
            </div>
        </div>
    </div> 
    <a href="#" class="toUp">맨 위로</a> 
</section>    
<?php
    include_once('footer.php');
?>
 