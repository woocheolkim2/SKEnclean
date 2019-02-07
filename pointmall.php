<?php
    include_once('header.php');
?>
<style type="text/css">
    header > .header_b > .container.inner1 > #main_menu > li.menu4 > a{
        color:#c03 !important;
    }
    header > .header_b > .container.inner1 > #main_menu > li.menu4 > a:after{
        content:'';
        clear:both;
        display:block;
        position:absolute;
        top:134px;
        width:70px;
        margin:0 auto; 
        border:solid 2px #c03;
    }
    header > .f-nav > .container.inner1 > #main_menu > li.menu4 > a:after{ 
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
<section id="PointMall"> 
    <div class="path">
        <div class="container">
            <div class="path_detail">
                <a href="index.php">HOME</a>
                <img src="./img/cursor.png"/>
                <a href="#" class="currentpage">POINTMALL</a>
            </div>
        </div>
        <div class="page_header">
            <div class="container">
                <p class="page_title">엔크린몰</p>
                <p class="page_desc">엔크린몰에서 구매하시고 포인트를 받아보세요!</p> 
            </div>
        </div>
        <div class="mall_category">
            <div class="container"> 
                <a href="#"><i class="whole"></i></a>  
                <i class="bar-1"></i>
                <i class="restaurant"></i>
                <i class="bar-1"></i>
                <i class="cafe"></i>
                <i class="bar-1"></i>
                <i class="shopping"></i>
                <i class="bar-1"></i>
                <i class="convinience"></i>
                <i class="bar-1"></i>
                <i class="education"></i> 
                <i class="bar-1"></i>
                <i class="movie"></i> 
            </div> 
        </div>
        <div class="mall_category_name">
            <p>전체</p>
            <p>외식</p>
            <p>카페</p>
            <p>쇼핑</p>
            <p>편의</p>
            <p>교육</p>
            <p>영화</p>
        </div>
    </div>
    <div class="mall_cont">
        <div class="container">
            <div class="mall_cont_header">
                <p class="mall_whole_amount">전체 &nbsp;<span style="color:#c03">191 개</span></p>
                <select name="인기순" id="product_sequence">
                    <option value="인기순">인기순</option>
                    <option value="할인률순">할인율순</option>
                    <option value="적립률순">적립율순</option>
                    <option value="낮은 가격순">낮은 가격순</option>
                    <option value="높은 가격순">높은 가격순</option>
                </select>
                <input class="search_product" type="text" name="search_product" value="전체 상품 검색"/> 
            </div>
            <ul class="product_kinds">
                <li>전체</li>
                <li class="bar-2"></li>
                <li>포인트 적립</li>
                <li class="bar-2"></li>
                <li>가격 할인</li>
            </ul>
            <div class="product_lists">
                <ul class="product_list_01">
                    <li class="item">
                        <img src="img/pointmall/product_item/item_01.jpg"></img>
                        <p class="item_desc">
                            더 프레스티지 골드 오일 에센스</br>
                            <span style="font-weight:bold; font-size:18px;">9,900원</span></br> 
                        </p>
                    </li>
                     <li class="item">
                        <img src="img/pointmall/product_item/item_02.jpg"></img>
                        <p class="item_desc">
                            스위트하트 무소음 몸던하우스 벽시계 220</br>
                            <span style="font-weight:bold; font-size:18px;">6,728원</span></br> 
                        </p>
                    </li> <li class="item">
                        <img src="img/pointmall/product_item/item_03.jpg"></img>
                        <p class="item_desc">
                            타이니러브 수더앤그루브 3종 세트</br>
                            <span style="font-weight:bold; font-size:18px;">55,478원</span></br> 
                        </p>
                    </li> <li class="item">
                        <img src="img/pointmall/product_item/item_04.jpg"></img>
                        <p class="item_desc">
                            하겐다즈 6종 25%</br>
                            <span style="font-weight:bold; font-size:18px;">7,935원</span></br> 
                        </p>
                    </li>
                </ul>
                <ul class="product_list_02">
                     <li class="item">
                        <img src="img/pointmall/product_item/item_05.jpg"></img>
                        <p class="item_desc">
                            텐바이텐 리플렉트 에코 히터</br>
                            <span style="font-weight:bold; font-size:18px;">149,460원</span></br> 
                        </p>
                    </li> <li class="item">
                        <img src="img/pointmall/product_item/item_06.jpg"></img>
                        <p class="item_desc">
                            지프 맨투맨</br>
                            <span style="font-weight:bold; font-size:18px;">36,975원</span></br> 
                        </p>
                    </li> <li class="item">
                        <img src="img/pointmall/product_item/item_07.jpg"></img>
                        <p class="item_desc">
                            갤럭시 TAB SM-T820</br>
                            <span style="font-weight:bold; font-size:18px;">573,960원</span></br> 
                        </p>
                    </li> <li class="item">
                        <img src="img/pointmall/product_item/item_08.jpg"></img>
                        <p class="item_desc">
                            아이 깨끗해 거품형</br>
                            <span style="font-weight:bold; font-size:18px;">5,900원</span></br> 
                        </p>
                    </li> 
                </ul>
                <ul class="product_list_03">
                     <li class="item">
                        <img src="img/pointmall/product_item/item_09.jpg"></img>
                        <p class="item_desc">
                            원목 미니서랍함</br>
                            <span style="font-weight:bold; font-size:18px;">12,900원</span></br> 
                        </p>
                    </li> <li class="item">
                        <img src="img/pointmall/product_item/item_10.jpg"></img>
                        <p class="item_desc">
                            설화수 자음생마스크 5매</br>
                            <span style="font-weight:bold; font-size:18px;">89,232원</span></br> 
                        </p>
                    </li> <li class="item">
                        <img src="img/pointmall/product_item/item_11.jpg"></img>
                        <p class="item_desc">
                            삼생삼세 십리도화</br>
                            <span style="font-weight:bold; font-size:18px;">120,900원</span></br> 
                        </p>
                    </li> <li class="item">
                        <img src="img/pointmall/product_item/item_12.jpg"></img>
                        <p class="item_desc">
                            하인즈 굿 갈릭마요 아이올리</br>
                            <span style="font-weight:bold; font-size:18px;">4,380원</span></br> 
                        </p>
                    </li>
                </ul>
                <ul class="product_list_03" style="display:none;">
                     <li class="item">
                        <img src="img/pointmall/product_item/item_09.jpg"></img>
                        <p class="item_desc">
                            원목 미니서랍함</br>
                            <span style="font-weight:bold; font-size:18px;">12,900원</span></br> 
                        </p>
                    </li> <li class="item">
                        <img src="img/pointmall/product_item/item_10.jpg"></img>
                        <p class="item_desc">
                            설화수 자음생마스크 5매</br>
                            <span style="font-weight:bold; font-size:18px;">89,232원</span></br> 
                        </p>
                    </li> <li class="item">
                        <img src="img/pointmall/product_item/item_11.jpg"></img>
                        <p class="item_desc">
                            삼생삼세 십리도화</br>
                            <span style="font-weight:bold; font-size:18px;">120,900원</span></br> 
                        </p>
                    </li> <li class="item">
                        <img src="img/pointmall/product_item/item_12.jpg"></img>
                        <p class="item_desc">
                            하인즈 굿 갈릭마요 아이올리</br>
                            <span style="font-weight:bold; font-size:18px;">4,380원</span></br> 
                        </p>
                    </li>
                </ul>
                <button class="item_more">더 보기</button>
            </div>
        </div> 
    </div>
</section>
<?php
    include_once('footer.php');
?>