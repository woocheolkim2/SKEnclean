<?php
    include_once('header.php'); 
?>
<style type="text/css">
    header > .header_b > .container.inner1 > #main_menu > li.menu5 > a{
        color:#c03 !important;
    }
    header > .header_b > .container.inner1 > #main_menu > li.menu5 > a:after{
        content:'';
        clear:both;
        display:block;
        position:absolute;
        top:138px;
        width:60px;
        margin:0 auto; 
        border:solid 2px #c03;
    }
    header > .f-nav > .container.inner1 > #main_menu > li.menu5 > a:after{ 
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
<section id="Gas_Station">
    <div class="path">
        <div class="container">
            <div class="path_detail">
                <a href="index.php">HOME</a>
                <img src="./img/cursor.png"/>
                <a href="#" class="currentpage">GAS STATION</a>
            </div>
        </div>
    </div>
    <div class="page_header" style="margin-top:20px;">
        <div class="container">
            <p class="page_title">주유소</p>
            <p class="page_desc">가까운 SK 엔크린 주유소를 검색하세요</p> 
        </div>
    </div>
    <div class="search_options">
        <div class="container">   
			<div class="location_select">
				<select name="gas_station_kind" id="gas_station_kind">
					<option value="SKEnclean">전국 SK엔크린</option>
					<option value="">공공조달 주유소</option>
					<option value="">고급휘발유(Solux)</option>
					<option value="">셀프</option>
					<option value="">경정비</option>
					<option value="">내트럭플러스</option>
					<option value="">세차</option>
					<option value="">편의점</option>
				</select>
				<select name="sido1" id="sido1"></select>
				<select name="gugun1" id="gugun1"></select>
				<input class="search_station_input" type="text" name="검색어 입력" placeholder="검색어 입력(예: SK주유소 / SK /모충동)" />
				<div id="search_run" class="search_run">
					<p>검색</p>
				</div>
			</div> 
    	</div>
	</div>
	<!-- Gas Station List -->
	<div class="container">
    	<table id="station_list" class="table tablesorter">
    	    <thead>
    	        <tr>
    	            <th>번호</th>
    	            <th>주유소명</th>
    	            <th>종류</th>
    	            <th>주소 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
    	            <th>지도보기</th>
    	        </tr>
    	    </thead> 
    	    <tbody>
    	        
    	    </tbody>
    	</table>
	</div>
	
	
	<!-- Google map load -->
	<div id="maps" class="maps"></div>
	<script>
      function initMap(latitude, longitude) {
        if(!latitude){
            var seoul = {lat:37.5536067, lng:126.96961950000002};
        }else{
        var seoul = {lat: latitude, lng: longitude};
        }
        var map = new google.maps.Map(document.getElementById('maps'), {
          zoom: 18,
          center: seoul
        }); 
        var marker = new google.maps.Marker({
          position: seoul,
          map: map
        });
      }
    </script>
	<script
    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7tnCKibNBg94sy_12MsFa5hx1e4MIP28&callback=initMap">
	</script>
	
	
	
	
	
</section>
<?php
    include_once('footer.php')
?>
