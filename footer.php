<footer>
    <div class="container">
        <div class="footer_wrap">
            <img src="./img/main/footer_logo.gif" alt="SK에너지 로고" class="footer_logo">
            <div class="footer_links">
                <ul>
                    <a href="#"><li class="individual_info_law">개인정보처리방침</li></a>
                    <a href="#"><li class="youth_protect_policy">청소년보호정책</li></a>
                </ul>
                <p class="copyright">SK에너지(주) / 고객행복센터 1599-0051 / 1588-0051 COPYRIGHTⓒSK ENERGY CO..LTD. ALL RIGHTS RESERVED.</p>
            </div>
            <select name="Family Site" id="familysites" onchange="fncSite(this.value);">
                <option value="selected">Family Site</option>
                <option value="1">SK에너지</option>
                <option value="2">I Promise</option>
                <option value="3">Netruck</option>
                <option value="4">ZIC</option>
                <option value="5">YUBASE</option>
                <option value="6">SK에너지 Asphalt</option>
                <option value="7">SK에너지 chem.com</option>
                <option value="8">SK에너지 해외 O&M사업</option>
                <option value="9">SK innovation</option>
                <option value="10">제주 Utd. 프로축구단</option>
            </select>
            <script type="text/javascript">
                function fncSite(val){
            		if(val == '1'){
            			window.open("http://www.skenergy.com/");
            		}else if(val == '2'){
            			window.open("https://www.i-promise.co.kr/index.jsp");
            		}else if(val == '3'){
            			window.open("https://www.netruck.co.kr/main.do");
            		}else if(val == '4'){
            			window.open("http://www.skzic.com/kor/index.asp");
            		}else if(val == '5'){
            			window.open("https://www.yubase.com/");
            		}else if(val == '6'){
            			window.open("http://www.skasphalt.com/");
            		}else if(val == '7'){
            			window.open("http://www.skchem.com/");
            		}else if(val == '8'){
            			window.open("http://www.skonm.com/");
            		}else if(val == '9'){
            			window.open("http://www.skinnovation.com/");
            		}else if(val == '10'){
            			window.open("http://www.jeju-utd.com/index.htm");
            		}
            	}
            </script>
        </div>
    </div>
</footer>