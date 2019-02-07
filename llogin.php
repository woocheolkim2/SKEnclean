<?php
    include_once('header.php');
?>
<section id="Login">
    <div class="path">
        <div class="container">
            <div class="path_detail">
                <a href="index.php">HOME</a>
                <img src="./img/cursor.png"/>
                <a href="#" class="currentpage">Login</a>
            </div>
        </div> 
        <div class="container whole_area">
            <div class="form_area">
            <form action="database/outlet.php">
            <div class="container">
                <div class="login_area">
                    <input type="hidden" name="outlet" value="memberlogin" />
                    <p class="login_area_desc">
                        <span style="font-size:22px; color:#333;">아이디와 비밀번호를 입력해 주세요.</span></br>
                        정보보호를 위해 아이디, 비밀번호와 함께 자동 입력 방지 문자를 입력하셔야 합니다.
                    </p> 
                    <div class="input_area">
                        <label for="mobile" style="display:none;">아이디</label>
                        <input type="text" name="phone" id="phone" class="input_id" placeholder="아이디를 입력해주세요."/>  
                        <label for="pin" style="display:none;">비밀번호</label>
                        <input type="password" name="pin" id="pin" class="input_pw" placeholder="비밀번호를 입력해주세요."/>
                        <button class="login_btn" type="submit">
                            <p>로그인</p>
                        </button>
                    </div> 
                    <input type="checkbox" name="id_save" class="id_save"/><span style="color: #999; position:relative; left: 4px; ;bottom:4px;">아이디 저장</span>
                    <div class="autologin_prevent">
                        <div class="prevent_autologin_text">
                            <img src="./img/CaptChaImg.png" style="margin:0; padding:0;"/>
                        </div>
                        <div class="prevent_autologin_btns">
                            <button class="F5">새로고침</button>
                            <button class="sound" style="margin-top:6px;">음성듣기</button> 
                        </div> 
                        <input type="text" class="input_preventtxt" placeholder="자동 입력 방지 문자 입력해주세요.">
                        <div class="utils_menu"></div>
                    </div>  
                </div> 
                <div class="ad_area"> 
                </div>
            </div>
            </form>
            </div>
            <div class="advertise_area">
                
            </div>
        </div>
        
        
    </div>
</section> 
<?php
    include_once('footer.php');
?>