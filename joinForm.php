<?php 
    include_once('header.php');
?>
<style type="text/css">
    header{
        height:101px;
    }
    header .header_a{
        display:none;
    }
    header .header_b .main_menu{
        display:none;
    }
</style>
<section id="Join"> 
    <div class="container">
        <div class="page_header">
            <h1><span style="color:#c03">가입 정보</span> 입력</h1>
        </div>
        <form action="./database/outlet.php" onsubmit="return checkJoin(joinForm)" method="get" name="joinForm" class="JoinForm">
            <input type="hidden" name="outlet" value="memberjoin">
            <input type="hidden" name="point" value="0">
            <input type="hidden" id="grade" name="grade" value="1">
            
            <div class="input">
                <label for="name">이름</label>
                <input type="text" id="name" name="name" placeholder="이름"/>
            </div>
            <div class="input">
            <label for="pin">비밀번호</label>
            <input type="password" id="pin" name="pin" placeholder="비밀번호"/>
            </div>
            <p class="pin_info">비밀번호는 영문,숫자,특수문자를 포함하여 8자 이상 입력해주세요</p>
            <div class="input">
            <label for="mobile">전화번호</label>
            <input type="text" id="mobile" name="mobile" placeholder="전화번호"/>
            </div>
            <p class="pin_info">고객님의 전화번호는 아이디가 됩니다.</p>
            <div class="input">
                <label for="address">주소</label>
                <input type="text" id="address" name="address" placeholder="주소"/>
            </div>
            <div class="input">
                <label for="email">이메일</label>
                <input type="text" id="email" name="email" placeholder="이메일"/>
            </div>
            <button type="submit">가입하기</button>
        </form>
    </div>
</section>
<?php
    include_once('footer.php');
?>