<?php
/* 
 *   Template Name: Collective-2021-Covid-wo-SanSz
 */
get_header();
?>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- SLICK SLIDER CSS-->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<style type="text/css">
body, html {
    height: 100%;
}
.cnc-bg-image {
  background-image: url("/wp-content/uploads/2019/03/leaderboard-bg-768px.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
 }
.leader-mobile-view {
	display:block;
}
/* 
		============= MEDIA BREAKPOINTS - MOBILE ============== 
*/
@media (min-width: 100px) {
	.leader-thumbnails{}
	table th { border: none; }
	table td { border: none; }
	.img-thumbnail{ width: 100%; float: left; height: 100%;}
	.leader-details { width: 50%;}
	.leader-details .row { height: 33%; }
	/*.leader-thumbnails{ float:left; height: 100%; display: flex; align-items: center;}*/
	.title { width: 75%; }
	.sort-btn { border: 1px solid #8dc248; width: 60%; height: 100%; color: #8dc248;}
	th:hover { cursor: pointer; } 
	.details {}
	.sort-select { display: none; }
	.img-cont { width: 15%; }
	.det-cont{ width: 85%; }
	.holder{ margin: auto; }
	.stat{ width: 100%; }
	h2 { font-size: 3rem; }
	.det-box { display: flex; align-items: center;}
	.mb-view { display: none; }
	.category-select > div { width:100%; margin:10px 0px; }	
	.first-place { padding-top:40px; }
	.second-third-place-row { margin: 80px 0px 100px 0px; }
	.rank-city-diaplay { font-weight:700; }
	.td-main-content-wrap {
	}
	.sort-btn:hover {
		background-color:#666 !important;
		color:#fff !important;
		border:1px solid #fff !important;
	}
}
@media(max-width: 767px){
	.mb-view{ display: block; }
	.dsk-view{ display: none; }
	.leader-thumbnails .title{ font-size: 16px; }
	.sort-btn{ display: none; }
	/*table{ display: none; }*/
	.sort-select{ display: block; background-color: #8dc248; color: white; }
	.form-control:focus{ background-color:#8dc248; color: white; }
	 select:focus{ background-color: #8dc248; }
	/* .img-cont{ width: 45%; display: flex; /*justify-content: flex-start; }*/
	/*.img-thumbnail{ display: block; height: auto; width: auto; max-width: 200px; max-height:150px;}*/
	.leader-thumbnails{ /*float: none; height: 33%; margin-left: 0px; margin-right: 0px; width: 100%;*/display: flex; align-items: center; }
	.details { width: 100%; display: flex; display: flex; flex-direction: column; }
	.holder{ margin: auto; margin-top: 50px; padding: 0px; display: flex; justify-content: flex-end; }
	.det-cont{ width: 55%; padding-right: 0px; display: flex; flex-direction: column; flex-wrap: wrap;
		align-content: space-between; }
	.hide-state,
	.hide-country { display:none; }
	.rank-city-diaplay { font-size:1.2rem; }

	.obsMobile {
		display:block;
		text-align:center;
	}
	.specMobile {
		display:none;
		text-align:center;
	}
	.pplMobile {
		display:none;
		text-align:center;
	}
	.obsHeaderMobile {
		display:block;
		text-align:center;
	}
	.speciesHeaderMobile {
		display:none;
		text-align:center;
	}
	.peopleHeaderMobile {
		display:none;
		text-align:center;
	}
}
@media (min-width: 100px) {
	/* tbody > tr:nth-child(1) { background-color:#dae7bf; }
	tbody > tr:nth-child(2) { background-color:#e8f1d8; }
	tbody > tr:nth-child(3) { background-color:#f5f9ee; } */
	.mobile-title-header { font-size:1.6rem; }
	.text-middle { text-align: center; vertical-align: middle; color:#8dc248; }
	.mobile-center-result { line-height: 195px; }
	.mobile-center-result-small { line-height: 150px; }
	.mobile-center-place { line-height:35px; }
	.sub-circle { height: 40px; width: 40px; background-color: #fff; border: 2px solid #8dc248; border-radius:50%; margin:0 auto; display:block; }
	.sub-circle-small { height: 30px; width: 30px; background-color: #fff; border: 2px solid #8dc248;
		border-radius:50%; margin:0 auto; display:block; line-height:26px; font-size:16px; }
	.desktop-view {
		display:none;
	}
	.leaderboard-bg-container {
		width:100px;
		height:941px;
		position:absolute;
		top:0;
		z-index:-100;
	}
	.leaderboard-bg-image {
		height:941px;
		margin:0 auto;
		display:block;
		position:absolute;
	}
}
/* 
	============= MEDIA BREAKPOINTS - DESKTOP ============== 
*/
@media (min-width: 768px) {
	.leader-mobile-view {
		display:none;
	}
	.desktop-view {
		display:block;
	}
	.td-main-content-wrap {
		background-image: none; 
		background-size:none; 
	}
	section.desktop-view {
		margin-top:70px;
	}
	.turn-green {
		background-color:rgb(141,194,72);
		color:#fff;
	}
	.turn-white {
		background-color: #fff;
		color: rgb(141,194,72);
	}
	.turn-green:hover,
	.turn-white:hover {
		background-color:#666;
		border-color:#fff;
		color:#fff;
	}
}

.overlayContainer {
	display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  position: relative;
}
#leadOverlay {
  position: fixed; /* Sit on top of the page content */
  /* display: none;*/ /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0; 
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgb(140,194,72, .9); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
</style> 
<div class="overlayContainer">
<div id="leadOverlay">
	<div class="lds-roller" style="width:64px; margin:0 auto; display:block; margin-top:30%; "><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
	<p style="color:#fff; text-align:center; width:100%;">Collective Results 2021...</p>
</div>
</div>

<!-- ============ MOBILE ============ -->
<section class="leader-mobile-view">
	<div class="cnc-bg-image">
		<div class="td-main-content-wrap mb-view" style="min-height:50px;">
			<div class="container" style="padding-top:15px;">
				<!-- TITLE -->
				<div class="text-center">
					<h2 style="color:#fff; padding-top:20px; padding-bottom:0px;">Collective Results 2021</h2>
				</div>
				<!-- LINE -->
				<div style="width:150px; height:2px; border-bottom: 1px solid #fff; margin:0 auto; display:block; margin-top:-0px;"></div>
				<!-- NAVIGATINO INDICATOR -->
				<div class="text-center" style="width:100%; margin-top:30px; overflow:visible; margin-bottom:5px;">
					<!-- Observations -->
					<div style="width:33.3%; float:left; vertical-align: center; color:#fff; margin-bottom:20px; line-height:0px;">
						<p class="mobile-title-observations medium-transition">Observations</p>
					</div>
					<!-- Species -->
					<div style="width:33.3%; float:left; vertical-align: center; color:#fff; line-height:0px;">
						<p class="mobile-title-species medium-transition">Species</p>
					</div>
					<!-- People -->
					<div style="width:33.3%; float:left; vertical-align: center; color:#fff; line-height:0px;">
						<p class="mobile-title-people medium-transition">People</p>
					</div>
				</div>
				<span style="clear:both; width:100%; display:block;"></span>
				<!-- ===== RESULTS CIRCLES ===== -->
				<div class="mobile-leaderboard-results">


					<!-- ***** OBSERVATIONS ***** -->
				  	<div style="width:80%;"><!-- SLICK SLIDE 1 -->
							<!-- ROW 1 -->
							<div class="mobile-first-circle" style="padding-top:50px;">
								<!-- 1st PLACE -->
								<div id="first" class="first">
									<!-- White Ball Result -->
									<div class="btn-circle-white">
									 	<h2 class="text-middle mobile-center-result total-observations"></h2>
									</div>
									<!-- 1 -->
									<div class="mobile-first-circle-sub sub-circle" style="margin-top:-37px; display:none;">
										<p class="text-middle mobile-center-place" style="font-size:18px;">1</p>
									</div>
									<!-- Title -->
									<div class="mobile-first-place-title text-center" style="margin-top:10px; margin-bottom:-10px;">
										<span class="display-8" style="color:#fff;">Total Observations</span>
										<p style="padding-top:50px; color:#fff;">In light of the COVID-19 pandemic, this year's City Nature Challenge is no longer a competition. Instead, we want to embrace the healing power of nature and encourage the collaborative aspect of the CNC. The big three results, highlighted here, are for the total number of observations, species, and people who participated, all around the world. Below, you will find the contributions of each city to these total numbers. Participating cities have adjusted to rapidly changing circumstances and some of them have been under strict quarantine. We celebrate the ingenuity of CNC organizers and participants alike in documenting nature in their cities.</p>
									</div>
								</div>
							</div>
							<!-- ROW 2 -->
							<div style="margin-top:0px; width:100%; height:0px; opacity:0;">
								<div style="width:49%; height:10px; float:left;">
									<div id="second" class="second">
										<div class="btn-circle-white-medium">
										 	<h2 class="stat text-middle mobile-center-result-small"></h2>
										</div>
										<div class="mobile-second-circle-sub sub-circle-small" style="margin-top:-31px;">
											<p class="text-middle" style="font-size:18px;">2</p>
										</div>
										<div class="mobile-second-place-title text-center" style="margin-top:10px; margin-bottom:-10px;">
											<p class="display-13 title mx-auto" style="color:#fff;"></p>
										</div>
									</div>
								</div>
								<div style="width:49%; height:10px; float:right; opacity:0;">
									<div id="third" class="third">
										<div class="btn-circle-white-medium">
										 	<h2 class="stat text-middle mobile-center-result-small"></h2>
										</div>
										<div class="mobile-third-circle-sub sub-circle-small" style="margin-top:-31px;">
											<p class="text-middle" style="font-size:18px;">3</p>
										</div>
										<div class="mobile-third-place-title text-center" style="margin-top:10px; margin-bottom:-10px;">
											<p class="display-13 title mx-auto" style="color:#fff;"></p>
										</div>
									</div>
								</div>
								<span style="clear:both; width:100%; height:1px;"></span>
							</div>
				  	</div>


					<!-- ***** SPECIES ***** -->
				  	<div style="width:80%;"><!-- SLICK SLIDE 2 -->
				  		<!-- ROW 1  -->
							<div class="mobile-first-circle" style="padding-top:50px;">
								<!-- 1st PLACE -->
								<div id="first" class="first">
									<!-- White Ball Result -->
									<div class="btn-circle-white">
									 	<h2 class="text-middle mobile-center-result total-species"></h2>
									</div>
									<!-- 1 -->
									<div class="mobile-first-circle-sub sub-circle" style="margin-top:-37px; display:none;">
										<p class="text-middle mobile-center-place" style="font-size:18px;">1</p>
									</div>
									<!-- Title -->
									<div class="mobile-first-place-title text-center" style="margin-top:10px; margin-bottom:-10px;">
										<span class="display-8" style="color:#fff;">Total Species</span>
										<p style="padding-top:10px; color:#fff;"><i>The unique number of species will be shown at the end of the challenge.</i></p>
										<p style="padding-top:50px; color:#fff;">In light of the COVID-19 pandemic, this year's City Nature Challenge is no longer a competition. Instead, we want to embrace the healing power of nature and encourage the collaborative aspect of the CNC. The big three results, highlighted here, are for the total number of observations, species, and people who participated, all around the world. Below, you will find the contributions of each city to these total numbers. Participating cities have adjusted to rapidly changing circumstances and some of them have been under strict quarantine. We celebrate the ingenuity of CNC organizers and participants alike in documenting nature in their cities.</p>
									</div>
								</div>
							</div>
							<!-- ROW 2 -->
							<div style="margin-top:0px; width:100%; height:0px; opacity:0;">
								<!-- Column Left -->
								<div style="width:49%; height:10px; float:left;">
									<!-- 2nd PLACE -->
									<div id="second" class="second">
										<!-- White Ball Result -->
										<div class="btn-circle-white-medium">
										 	<h2 class="stat text-middle mobile-center-result-small"></h2>
										</div>
										<!-- 2 -->
										<div class="mobile-second-circle-sub sub-circle-small" style="margin-top:-31px;">
											<p class="text-middle" style="font-size:18px;">2</p>
										</div>
										<!-- Title -->
										<div class="mobile-second-place-title text-center" style="margin-top:10px; margin-bottom:-10px;">
											<p class="display-13 title mx-auto" style="color:#fff;"></p>
										</div>
									</div>
								</div><!-- // Column Left -->
								<!-- Column Right -->
								<div style="width:49%; height:10px; float:right; opacity:0;">
									<!-- 3rd PLACE -->
									<div id="third" class="third">
										<!-- White Ball Result -->
										<div class="btn-circle-white-medium">
										 	<h2 class="stat text-middle mobile-center-result-small"></h2>
										</div>
										<!-- 3 -->
										<div class="mobile-third-circle-sub sub-circle-small" style="margin-top:-31px;">
											<p class="text-middle" style="font-size:18px;">3</p>
										</div>
										<!-- Title -->
										<div class="mobile-third-place-title text-center" style="margin-top:10px; margin-bottom:-10px;">
											<p class="display-13 title mx-auto" style="color:#fff;"></p>
										</div>
									</div>
								</div>

								<span style="clear:both; width:100%; height:1px;"></span>
							</div>
				  	</div>


					<!-- ***** PEOPLE ***** -->
				  	<div style="width:80%;"><!-- SLICK SLIDE 3 -->
				  		<!-- ROW 1 -->
							<div class="mobile-first-circle" style="padding-top:50px;">
								<!-- 1st PLACE -->
								<div id="first" class="first">
									<!-- White Ball Result -->
									<div class="btn-circle-white">
									 	<h2 class="text-middle mobile-center-result total-people"></h2>
									</div>
									<!-- 1 -->
									<div class="mobile-first-circle-sub sub-circle" style="margin-top:-37px; display:none;">
										<p class="text-middle mobile-center-place" style="font-size:18px;">1</p>
									</div>
									<!-- Title -->
									<div class="mobile-first-place-title text-center" style="margin-top:10px; margin-bottom:-10px;">
										<span class="display-8" style="color:#fff;">Total People</span>
										<p style="padding-top:50px; color:#fff;">In light of the COVID-19 pandemic, this year's City Nature Challenge is no longer a competition. Instead, we want to embrace the healing power of nature and encourage the collaborative aspect of the CNC. The big three results, highlighted here, are for the total number of observations, species, and people who participated, all around the world. Below, you will find the contributions of each city to these total numbers. Participating cities have adjusted to rapidly changing circumstances and some of them have been under strict quarantine. We celebrate the ingenuity of CNC organizers and participants alike in documenting nature in their cities.</p>
									</div>
								</div>
							</div>
							<!-- ROW 2 -->
							<div style="margin-top:300px; width:100%; height:0px; opacity:0;">
								<!-- Column Left -->
								<div style="width:49%; height:10px; float:left;">
									<!-- 2nd PLACE -->
									<div id="second" class="second">
										<!-- White Ball Result -->
										<div class="btn-circle-white-medium">
										 	<h2 class="stat text-middle mobile-center-result-small"></h2>
										</div>
										<!-- 2 -->
										<div class="mobile-second-circle-sub sub-circle-small" style="margin-top:-31px;">
											<p class="text-middle" style="font-size:18px;">2</p>
										</div>
										<!-- Title -->
										<div class="mobile-second-place-title text-center" style="margin-top:10px; margin-bottom:-10px;">
											<p class="display-13 title mx-auto" style="color:#fff;"></p>
										</div>
									</div>
								</div><!-- // Column Left -->
								<!-- Column Right -->
								<div style="width:49%; height:10px; float:right; opacity:0;">
									<!-- 3rd PLACE -->
									<div id="third" class="third">
										<!-- White Ball Result -->
										<div class="btn-circle-white-medium">
										 	<h2 class="stat text-middle mobile-center-result-small"></h2>
										</div>
										<!-- 3 -->
										<div class="mobile-third-circle-sub sub-circle-small" style="margin-top:-31px;">
											<p class="text-middle" style="font-size:18px;">3</p>
										</div>
										<!-- Title -->
										<div class="mobile-third-place-title text-center" style="margin-top:10px; margin-bottom:-10px;">
											<p class="display-13 title mx-auto" style="color:#fff;"></p>
										</div>
									</div>
								</div>
								<span style="clear:both; width:100%; height:1px;"></span>
							</div>
				  	</div>
				</div>
			</div> 
		</div> 
	</div>
	<!-- LIST -->
	<div class="mt-4 table-responsive">
		<table class="table " id ="table-mobile" style="margin-top:100px;">
			<thead style="border-left: none; border-right: none;">
				<tr>
					<th class='srt-btn-header-city srt-btn-header-city-list titleHeader'>City</th>
					<th class='srt-btn-header-observations srt-btn-header-observations-list obsHeader obsHeaderMobile'>Observations</th>
					<th class='srt-btn-header-species srt-btn-header-species-list speciesHeader speciesHeaderMobile'>Species</th>
					<th class='srt-btn-header-people srt-btn-header-people-list peopleHeader peopleHeaderMobile'>People</th>
				</tr>
			</thead>
			<tbody class="tbody-mobile"></tbody>
		</table>
	</div>
</section>




<!-- ============ DEKSTOP ============ -->
<section class="desktop-view">
	<div class="td-main-content-wrap dsk-view">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 offset-xl-1 offset-lg-1 video-youtube-padding-top">
					<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/yO45mO9BUJM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				 	</div>
				</div>
			</div>
			<div class="row" style="margin-top:50px; margin-bottom:30px;">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<p style="text-align: left; padding-bottom:80px;">In light of the COVID-19 pandemic, this year's City Nature Challenge is no longer a competition. Instead, we want to embrace the healing power of nature and encourage the collaborative aspect of the CNC. The big three results, highlighted here, are for the total number of observations, species, and people who participated, all around the world. Below, you will find the contributions of each city to these total numbers. Participating cities have adjusted to rapidly changing circumstances and some of them have been under strict quarantine. We celebrate the ingenuity of CNC organizers and participants alike in documenting nature in their cities.</p>
					<h1 class="weight-500" style="text-align:center;">COLLECTIVE RESULTS 2021</h1>
					<div class="green-underline-bar"></div>
					<br/>
				</div>
		  	</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
					<div style="width:150px; margin:0 auto; height:150px; display:block;">
						<img src="../wp-content/uploads/2018/08/observations-icon-150x150.png" style=""/>
					</div>
					<h2 class="total-observations" style="text-align:center;">000</h2>
					<div style="width:200px; margin:0 auto; display:block; background-color:#8dc248; text-align: center;">
						<span style="line-height:35px; color:#fff;">Total Observations</span>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
					<div style="width:150px; margin:0 auto; height:150px; display:block;">
						<img src="../wp-content/uploads/2018/08/species-icon-150x150.png" style=""/>
					</div>
					<h2 class="total-species" style="text-align:center;">000</h2>
					<div style="width:200px; margin:0 auto; display:block; background-color:#8dc248; text-align: center;">
						<span style="line-height:35px; color:#fff;">Total Species</span>
					</div>
					<p style="padding-top:20px; text-align: center;"><i>The unique number of species will be shown at the end of the challenge.</i></p>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
					<div style="width:150px; margin:0 auto; height:150px; display:block;">
						<img src="../wp-content/uploads/2018/08/people-icon-150x150.png" style=""/>
					</div>
					<h2 class="total-people" style="text-align:center;">000</h2>
					<div style="width:200px; margin:0 auto; display:block; background-color:#8dc248; text-align: center;">
						<span style="line-height:35px; color:#fff;">Total People</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top:50px;">
			<!-- LIST -->
			<div class="container mt-4 table-responsive">
				<table class="table " id ="table">
					<thead style="border-left: none; border-right: none;">
						<tr>
							<th class='srt-btn-header-city srt-btn-header-city-list titleHeader'>City</th>
							<th class='srt-btn-header-observations srt-btn-header-observations-list obsHeader'>Observations</th>
							<th class='srt-btn-header-species srt-btn-header-species-list speciesHeader'>Species</th>
							<th class='srt-btn-header-people srt-btn-header-people-list peopleHeader'>People</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>
</section>


<!-- ================================================================================ -->
<!-- ============================== JAVASCRIPT ============================== -->
<!-- ================================================================================ -->
<script type="text/javascript">
// GLOBALS
var stat_icons = [
	"../wp-content/uploads/2018/08/observations-icon-150x150.png",
	"../wp-content/uploads/2018/08/species-icon-150x150.png",
	"../wp-content/uploads/2018/08/people-icon-150x150.png"
];
var deferredObjs =[];
var tableBody = $('tbody');
var totalObservations = 0;
var totalSpecies = 0;
var totalPeople = 0;
// ***************** BUTTON FUNCTIONALITY ***************** //
//CHANGE BUTTON COLOR ON CLICK 
var sort_btns = document.getElementsByClassName('.sort-btn');
for(var i =0; i < sort_btns.length; i++){
	sort_btns[i].onclick = function(){
		var parentNode = this.parentNode.parentNode.children;
		for(var j = 0; j < parentNode.length;j++){ //reverts previously selected btn to orginal format
			parentNode[j].children[0].style.backgroundColor = 'white';
			parentNode[j].children[0].style.color='#8dc248';
		}
		this.style.color = 'white';
		this.style.backgroundColor='#8dc248';
	}
}
// ***************** SORTING TRIGGERS DESKTOP ***************** //
// TRIGGERS SORTING BY CATEGORY 
$('.obsHeader').click( function(){
	$('#table > tbody').html("");

	processObs(deferredObjs);

	statUpdate('obs');
	$('.stat-icon').attr("src",stat_icons[0]); 
	$('.category').html('Observations');
});
$('.titleHeader').click( function(){
	$('#table > tbody').html("");
	processObs(deferredObjs);
	//1ST PLACE
	var placeTitleLong = deferredObjs[0].title;
	var placeTitle = placeTitleLong.split(",");
	$('.first .title').html(placeTitle[0]);
	//2ND PLACE
	var placeTitleLong2 = deferredObjs[1].title;
	var placeTitle2 = placeTitleLong2.split(",");
	$('.second .title').html(placeTitle2[0]);
	//3RD PLACE
	var placeTitleLong3 = deferredObjs[2].title;
	var placeTitle3 = placeTitleLong3.split(",");
	$('.third .title').html(placeTitle3[0]);
	$('#table > tbody').html("");
	processTitle(deferredObjs);
	$('.stat-icon').attr("src",stat_icons[0]); 
	$('.category').html('Observations');
});
$('.speciesHeader').click( function(){
	$('#table > tbody').html("");
	processSpec(deferredObjs);

	statUpdate('spec');
	$('.stat-icon').attr("src",stat_icons[1]);
});
$('.peopleHeader').click( function(){
	$('#table > tbody').html("");
	processPeople(deferredObjs);
	statUpdate('ppl');
	$('.stat-icon').attr("src",stat_icons[2]); 
	$('.category').html('People');
});

/* =================FILE EXTENSION CHECK ============== */
function isCSVCheck (fileName){
	let extName = fileName.substring(fileName.lastIndexOf('.')+1, fileName.length) || fileName;
	console.log(extName)
	if (extName === "csv"){
		return true
	} else {
		return false
	}

}


/* =================CSV TO JSON ======================= */


function csvJSON(response){

var array = response.toString().split(",//")
// console.log("this is initial array", array)
//our csv fetch has a new line charc that nees to be removed
let cleanArray = array.map(string => string.replace('\n',''))
// console.log("this is array", cleanArray)
array = cleanArray
// All the rows of the CSV will be 
// will be added to result in an array
let result = [];
  
// The array[0] contains all the 
// header columns so we store them 
// in headers array
let headers = array[0].split(",")
// console.log("Headers", headers)
  
// Since headers are separated, we 
// need to traverse remaining length-1 rows. 
for (let i = 1; i < array.length - 1; i++) {
  let obj = {}
  
  // Create an empty object to later add 
  // values of the current row to it
  // Declare string str as current array
  // value to change the delimiter and 
  // store the generated string in a new
  // string s content items
  let str = array[i] 
  // add a space between characters
  let s = ''
  
  // By Default, we get the comma seprated
  // values of a cell in quotes " " so we 
  // use flag to keep track of quotes and 
  // split the string accordingly
  // If we encounter opening quote (") 
  // then we keep commas as it is otherwise
  // we replace them with pipe |
  // We keep adding the characters we 
  // traverse to a String s
  // charc = characters / str = array of charcs
  let flag = 0
  for (let charc of str) {
	  //if the charc is a quote and the flag isn't set, set it.
    if (charc === '"' && flag === 0) {
      flag = 1
    }
	  // if the quote is flagged, unflag it
    else if (charc === '"' && flag == 1) flag = 0
    if (charc === ',' && flag === 0) charc = '|'
    if (charc !== '"') s += charc
  }
  
  // Split the string using pipe delimiter | 
  // and store the values in a properties array
  let properties = s.split("|")
//   console.log("This is properties", properties)
  
  // For each header, if the value contains
  // multiple comma separated data, then we
  // store it in the form of array otherwise
  // directly the value is stored
  for (let j in headers) {
    if (properties[j].includes(", ")) {
      obj[headers[j]] = properties[j]
        .split(", ").map(item => item.trim())
    }
    else obj[headers[j]] = properties[j]
  }
  
  // Add the generated object to our
  // result array 
  result.push(obj)
}
  
// return JSON array
return result
}




// ***************** SORTING FUNCTIONS ***************** //
// SORTS > OBSERVATION

function processObs(arr){
		// arr.forEach(function check(element) { console.log("testing each element", element)})
		//arr = arr.sort(function(a,b){
				//return a.observations - b.observations;
			//});
			//arr.reverse();
			// console.log("This is what came in to processObs",arr, arr.length)
			tableBody.html('');
			for(var i = 0; i< arr.length; i++){
				var row = $('<tr> </tr>');
				var title = '<td>'+arr[i].title + '</td>';
				var obs = '<td class="obsMobile">'+arr[i].observations+'</td>';
				var spec = '<td class="specMobile">'+arr[i].species+'</td>';
				var ppl = '<td class="pplMobile">'+arr[i].people+'</td>';
				row.append(title);
				row.append(obs);
				row.append(spec);
				row.append(ppl);
				tableBody.append(row);
			}

		$(".tbody-mobile > tr > .obsMobile").css("display", "block");
		$(".tbody-mobile > tr > .specMobile").css("display", "none");
		$(".tbody-mobile > tr > .pplMobile").css("display", "none");

	// IF IT'S FROM A CSV UNCOMMENT BELOW

	// arr = arr.sort(function(a,b){
	// 		return a.observations - b.observations;
	// });
	// arr.reverse();
	// tableBody.html('');
	// for(var i = 0; i< arr.length; i++){
	// 	var row = $('<tr> </tr>');
	// 	var title = '<td>'+arr[i].title + '</td>';
	// 	var obs = '<td class="obsMobile">'+arr[i].observations+'</td>';
	// 	var spec = '<td class="specMobile">'+arr[i].species+'</td>';
	// 	var ppl = '<td class="pplMobile">'+arr[i].people+'</td>';
	// 	row.append(title);
	// 	row.append(obs);
	// 	row.append(spec);
	// 	row.append(ppl);
	// 	tableBody.append(row);
	// }
}
// SORTS > SPECIES
function processSpec(arr){

	// arr = arr.sort(function(a,b){
	// 	return a.species - b.species;
	// });
	//arr.reverse();
	tableBody.html('');
	for(var i = 0; i< arr.length; i++){
		var row = $('<tr> </tr>');
		var title = '<td>'+arr[i].title + '</td>';
		var obs = '<td class="obsMobile">'+arr[i].observations+'</td>';
		var spec = '<td class="specMobile">'+arr[i].species+'</td>';
		var ppl = '<td class="pplMobile">'+arr[i].people+'</td>';
		row.append(title);
		row.append(obs);
		row.append(spec);
		row.append(ppl);
		tableBody.append(row);
	}

	$(".tbody-mobile > tr > .obsMobile").css("display", "none");
	$(".tbody-mobile > tr > .specMobile").css("display", "block");
	$(".tbody-mobile > tr > .pplMobile").css("display", "none");
}
// SORTS > PEOPLE
var processPeople = function(arr){

	// arr = arr.sort(function(a,b){
	// 	return a.people - b.people;
	// });
	//arr.reverse();
	tableBody.html('');
	for(var i = 0; i< arr.length; i++){
		var row = $('<tr> </tr>');
		var title = '<td>'+arr[i].title + '</td>';
		var obs = '<td class="obsMobile">'+arr[i].observations+'</td>';
		var spec = '<td class="specMobile">'+arr[i].species+'</td>';
		var ppl = '<td class="pplMobile">'+arr[i].people+'</td>';
		row.append(title);
		row.append(obs);
		row.append(spec);
		row.append(ppl);
		tableBody.append(row);
	}

	$(".tbody-mobile > tr > .obsMobile").css("display", "none");
	$(".tbody-mobile > tr > .specMobile").css("display", "none");
	$(".tbody-mobile > tr > .pplMobile").css("display", "block");
};
// SORTS > TITLE
var processTitle = function(arr){
	arr = arr.sort(function(a,b){
		var lowerCaseA = a.title.toLowerCase();
		var lowerCaseB = b.title.toLowerCase();
		if(lowerCaseA > lowerCaseB){
			return 1;
		} else if(lowerCaseA < lowerCaseB){
			return -1;
		}
		return 0;
	});
	tableBody.html('');
	for(var i = 0; i< arr.length; i++){
		var row = $('<tr> </tr>');
		var title = '<td>'+arr[i].title + '</td>';
		var obs = '<td class="obsMobile">'+arr[i].observations+'</td>';
		var spec = '<td class="specMobile">'+arr[i].species+'</td>';
		var ppl = '<td class="pplMobile">'+arr[i].people+'</td>';
		row.append(title);
		row.append(obs);
		row.append(spec);
		row.append(ppl);
		tableBody.append(row);
	}
};


// ***************** SORTING FUNCTIONS MOBILE ***************** //
// SORTS > OBSERVATION
function processObsMobile(arr){
	processObs(arr);
}

// SORTS > SPECIES
function processSpecMobile(arr){
	processSpec(arr);
}
// SORTS > PEOPLE
var processPeopleMobile = function(arr){
	processPeople(arr);
};
// SORTS > TITLE
var processTitleMobile = function(arr){
	// console.log("Inside processTitleMobile...");
	arr = arr.sort(function(a,b){
		var lowerCaseA = a.title.toLowerCase();
		var lowerCaseB = b.title.toLowerCase();
		if(lowerCaseA > lowerCaseB){
			return 1;
		} else if(lowerCaseA < lowerCaseB){
			return -1;
		}
		return 0;
	});
	tableBody.html('');
	for(var i = 0; i< arr.length; i++){
		var row = $('<tr> </tr>');
		var title = '<td>'+arr[i].title + '</td>';
		var obs = '<td class="obsMobile">'+arr[i].observations+'</td>';
		var spec = '<td class="specMobile">'+arr[i].species+'</td>';
		var ppl = '<td class="pplMobile">'+arr[i].people+'</td>';
		row.append(title);
		row.append(obs);
		row.append(spec);
		row.append(ppl);
		tableBody.append(row);
	}
};

//SET GREEN COLOR ON BUTTONS WHEN FILTER HEADERS ARE CLICKED
//OBSERVATIONS
$('.category-select-top > .srt-btn-header-observations').addClass("turn-green");//set this as default

$('.srt-btn-header-observations').click( function(){
	//make observations green
	$(".category-select.category-select-top > .obsHeader").removeClass("turn-white").addClass("turn-green");
	//make species white
	$(".category-select.category-select-top > .speciesHeader").removeClass("turn-green").addClass("turn-white");
	//make people white
	$(".category-select.category-select-top > .peopleHeader").removeClass("turn-green").addClass("turn-white");
});
//SPECIES
$('.srt-btn-header-species').click( function(){
	//make observations green
	$(".category-select.category-select-top > .speciesHeader").removeClass("turn-white").addClass("turn-green");
	//make species white
	$(".category-select.category-select-top > .obsHeader").removeClass("turn-green").addClass("turn-white");
	//make people white
	$(".category-select.category-select-top > .peopleHeader").removeClass("turn-green").addClass("turn-white");
});
//PEOPLE
$('.srt-btn-header-people').click( function(){
	//make observations green
	$(".category-select.category-select-top > .peopleHeader").removeClass("turn-white").addClass("turn-green");
	//make species white
	$(".category-select.category-select-top > .obsHeader").removeClass("turn-green").addClass("turn-white");
	//make people white
	$(".category-select.category-select-top > .speciesHeader").removeClass("turn-green").addClass("turn-white");
});
// RESULTS/STATS DISPLAY
function statUpdate(type){
	// console.log('Inside statUPdate(type)');
	if(type == 'obs'){

		//1ST PLACE
		var placeTitleLong = deferredObjs[0].title;
		var placeTitle = placeTitleLong.split(",");

		var fixObservations = deferredObjs[0].observations;
		var fixSpecies = deferredObjs[0].species;
		var fixPeople = deferredObjs[0].people;

		$('.first .stat').html(fixObservations);
		$('.first .title').html("<span class=\"rank-city-diaplay\">" + placeTitle[0]);
		// + "</span><span class=\"hide-state\">,<br/> " + placeTitle[1] + "</span>");

		// 2ND PLACE
		var placeTitleLong2 = deferredObjs[1].title;
		var placeTitle2 = placeTitleLong2.split(",");
		//$('.second  .title').html(deferredObjs[1].title);
		$('.second  .title').html("<span class=\"rank-city-diaplay\">" + placeTitle2[0]);
		// + "</span><span class=\"hide-state\">,<br/> " + placeTitle2[1] + "</span>");
		$('.second .stat').html(deferredObjs[1].observations);
		// 3RD PLACE
		var placeTitleLong3 = deferredObjs[2].title;
		var placeTitle3 = placeTitleLong3.split(",");
		//$('.third  .title').html(deferredObjs[2].title);
		$('.third  .title').html("<span class=\"rank-city-diaplay\">" + placeTitle3[0]);
		// + "</span><span class=\"hide-state\">,<br/> " + placeTitle3[1] + "</span>");
		$('.third .stat').html(deferredObjs[2].observations);
	}
	if(type == 'spec'){

		//1ST PLACE
		var placeTitleLong = deferredObjs[0].title;
		var placeTitle = placeTitleLong.split(",");
		$('.first .title').html("<span class=\"rank-city-diaplay\">" + placeTitle[0]);
		// + "</span><span class=\"hide-state\">,<br/> " + placeTitle[1] + "</span>");
		$('.first .stat').html(deferredObjs[0].species);
		// 2ND PLACE
		var placeTitleLong2 = deferredObjs[1].title;
		var placeTitle2 = placeTitleLong2.split(",");
		$('.second  .title').html("<span class=\"rank-city-diaplay\">" + placeTitle2[0]);
		// + "</span><span class=\"hide-state\">,<br/> " + placeTitle2[1] + "</span>");
		$('.second .stat').html(deferredObjs[1].species);
		// 3RD PLACE
		var placeTitleLong3 = deferredObjs[2].title;
		var placeTitle3 = placeTitleLong3.split(",");
		$('.third  .title').html("<span class=\"rank-city-diaplay\">" + placeTitle3[0]);
		// + "</span><span class=\"hide-state\">,<br/> " + placeTitle3[1] + "</span>");
		$('.third .stat').html(deferredObjs[2].species);
	}
	if(type == 'ppl'){

		//1ST PLACE
		var placeTitleLong = deferredObjs[0].title;
		var placeTitle = placeTitleLong.split(",");
		$('.first .title').html("<span class=\"rank-city-diaplay\">" + placeTitle[0]);
		// + "</span><span class=\"hide-state\">,<br/> " + placeTitle[1] + "</span>");
		$('.first .stat').html(deferredObjs[0].people);
		// 2ND PLACE
		var placeTitleLong2 = deferredObjs[1].title;
		var placeTitle2 = placeTitleLong2.split(",");
		$('.second  .title').html("<span class=\"rank-city-diaplay\">" + placeTitle2[0]);
		// + "</span><span class=\"hide-state\">,<br/> " + placeTitle2[1] + "</span>");
		$('.second .stat').html(deferredObjs[1].people);
		// 3RD PLACE
		var placeTitleLong3 = deferredObjs[2].title;
		var placeTitle3 = placeTitleLong3.split(",");
		$('.third  .title').html("<span class=\"rank-city-diaplay\">" + placeTitle3[0]);
		// + "</span><span class=\"hide-state\">,<br/> " + placeTitle3[1] + "</span>");
		$('.third .stat').html(deferredObjs[2].people);
	}
}




// ***************** START START START START START START START START ***************** //
var projIds='';
$(function(){
	apiCalls(); // Gets APIs data: iNaturalist, Natusfera and Amy's CSV (json)
	//getFinalResults(); // This creates the final CSV... fire this when CNC finishes.
	//finalResults(); // Displays Final Results from CSV > make json instead
});

// AJAX - GETS WP CONTENT FROM CSV
/*
function finalResults(){
	$.ajax({
		url: "../wp-content/uploads/2020/04/cnc_final_results_5_16_18.csv", 
		dataType: "text",
		success:function(data){
			var city_data = data.split("//");
			for(var i = 0; i < city_data.length-1;i++){
				var cell_data = city_data[i].split(",");
					var projObj = { 
						'title' : cell_data[0].replace("-",", ").replace("- ",", "),
						'observations': cell_data[1],
						'species' : cell_data[2],
						'people' : cell_data[3]
					};
					deferredObjs.push(projObj);
					if(deferredObjs.length === city_data.length-1){ 
						processObs(deferredObjs);
						//1ST PLACE
						var placeTitleLong = deferredObjs[0].title;
						var placeTitle = placeTitleLong.split(",");
						$('.first .title').html("<span class=\"rank-city-diaplay\">" + placeTitle[0] + "</span><span class=\"hide-state\">, " + placeTitle[1] + "</span><span class=\"hide-country\">,<br/> " + placeTitle[2] + "</span>");
						$('.first .stat').html(deferredObjs[0].observations);
						//2ND PLACE
						var placeTitleLong2 = deferredObjs[1].title;
						var placeTitle2 = placeTitleLong2.split(",");
						$('.second  .title').html("<span class=\"rank-city-diaplay\">" + placeTitle2[0] + "</span><span class=\"hide-state\">,<br/> " + placeTitle2[1] + "</span><span class=\"hide-country\">, " + placeTitle2[2] + "</span>");
						$('.second .stat').html(deferredObjs[1].observations);
						//3RD PLACE
						var placeTitleLong3 = deferredObjs[2].title;
						var placeTitle3 = placeTitleLong3.split(",");
						$('.third  .title').html("<span class=\"rank-city-diaplay\">" + placeTitle3[0] + "</span><span class=\"hide-state\">,<br/> " + placeTitle3[1] + "</span><span class=\"hide-country\">, " + placeTitle3[2] + "</span>");
						$('.third .stat').html(deferredObjs[2].observations);
						$('.stat-icon').attr("src",stat_icons[0]); 
						$('.category').html('Observations');
						for(var j =0; j < sort_btns.length; j++){
							if(sort_btns[j].innerHTML == 'Observations'){
								sort_btns[j].style.backgroundColor='#8dc248';
								sort_btns[j].style.color = 'white';
							}
						}	
					}
			processObs(deferredObjs);
			}
		}
	});
}
*/

function finalResults(){
	$.ajax({
		url: "../wp-content/uploads/2020/04/final_results_2020.json",
		dataType: "json",
		success:function(data){
			for(i = 0; i < data.length; i++){
				deferredObjs.push(data[i]);
			}
			//console.log(deferredObjs);

			/* https://ourcodeworld.com/articles/read/764/how-to-sort-alphabetically-an-array-of-objects-by-key-in-javascript */
			function dynamicSort(property) {
			    var sortOrder = 1;
			    if(property[0] === "-") {
			        sortOrder = -1;
			        property = property.substr(1);
			    }
			    return function (a,b) {
			        if(sortOrder == -1){
			            return b[property].localeCompare(a[property]);
			        } else{
			            return a[property].localeCompare(b[property]);
			        }        
			    }
			}
			deferredObjs.sort(dynamicSort("title"));
			//console.log(JSON.stringify(deferredObjs)); // Prints all of json data to console
			tableBody.html('');
			processObs(deferredObjs);

			// Add all of the results and show it 
			for(i=0; i < deferredObjs.length; i++){
				totalObservations = totalObservations + deferredObjs[i].observations;
				totalSpecies = totalSpecies //+ deferredObjs[i].species; removed to only use totalSpecies 04.09.21
				totalPeople = totalPeople + deferredObjs[i].people;
			}

			$(".total-observations").html(totalObservations);
			$(".total-species").html(totalSpecies);
			$(".total-people").html(totalPeople);

			// Hide overlay
			$("#leadOverlay").css("display", "none");
		} // end ajax success
	});
}

	/* >>>>>>> SANTIAGO  <<<<<<<< */
	/* 2019 
	const resources = [
	      { project_id: 720 },
	      { project_id: 727 },
	      { project_id: 734 },
	      { project_id: 717 },
	      { project_id: 721 },
	      { project_id: 718 }
	    ]
	*/

	/* 2020 last used const resources = [
	      { project_id: 1102 },
	      { project_id: 1106 },
	      { project_id: 1150 },
	      { project_id: 1123 },
	      { project_id: 1124 },
	      { project_id: 1125 },
	      { project_id: 1126 },
	      { project_id: 1127 },
	      { project_id: 1128 },
	      { project_id: 1129 },
	      { project_id: 1130 },
	]
		*/
	//resource.project_id

	/* 2020 
	const resources = [
	      { project_id: 1122 },
	      { project_id: 1131},
	      { project_id: 1102 },
	      { project_id: 1106 },
	    ]
	*/

	//2021 
	const resources = [
		  { project_id: 1243 },
	      { project_id: 1231 },
	      { project_id: 1232 },
	      { project_id: 1239 },
	      { project_id: 1236 },
	      { project_id: 1233 },
	      { project_id: 1237 },
	      { project_id: 1234 },
	      { project_id: 1238 }
	]


	
	async function getProject(id) {
      const projectUrl = `https://natusfera.gbif.es/projects/${id}.json`
      let results = await fetch(projectUrl)
		return results
    }


    function getDateSan(date) {
      return [
        date.getFullYear(),
        date.getMonth() + 1,
        date.getDate()
      ].join('-')
    }

    function getProjectParams (project) {
      return Object.entries({
        d1: getDateSan(new Date(project.start_time)),
        d2: getDateSan(new Date(project.end_time)),
        place_id: project.place_id
      }).map(([key, val]) => (val ? `${key}=${val}` : '')).join('&')
    }

    function getObservationsStats(project, params) {
      const url = `https://natusfera.gbif.es/observations.json?per_page=1&`
      return fetchErrCheck(url + params)
    }

    function getUserStats(project, params) {
      const url = `https://natusfera.gbif.es/observations/user_stats.json?`
      return fetchErrCheck(url + params)
    }

   function getTaxonStats(project, params) {
      const url = `https://natusfera.gbif.es/observations/taxon_stats.json?`
	  return fetchErrCheck(url+params)
	}
	

	/* 
		Resuable function for fetch checks 
	*/

 	async function fetchErrCheck (url) {
		try {
		const response =  await fetch(url)
		return response
		} catch (err) {
		console.log("Error Encountered", response.status, err)
		}
	}
	
    const aux = resources.map(async resource => {
      const project = await (await getProject(resource.project_id)).json()

	
      const params = getProjectParams(project)

      const observationsStats = await (await getObservationsStats(project, params)).json()

      const taxonStats = await (await getTaxonStats(project, params)).json()
	//   console.log("This is at the const taxonStats side", taxonStats)
	 
      speciesCount = taxonStats.rank_counts.leaves ? taxonStats.rank_counts.leaves : [
        (taxonStats.rank_counts.species || 0),
        (taxonStats.rank_counts.subspecies || 0),
        (taxonStats.rank_counts.variety || 0),
        (taxonStats.rank_counts.form || 0),
        (taxonStats.rank_counts.hybrid || 0)
      ].reduce((a, b) => a + b)

      const userStats = await (await getUserStats(project, params)).json()

      const projObj2 =  {
	    'title': project.title,
	    "observations": ((observationsStats || [])[0] || {total_count: "0"}).total_count || "0",
	    "species": speciesCount,
	    "people": userStats.total
	  }

	  return projObj2


    })
/* >>>>>>> END SANTIAGO <<<<<<<< */




$(document).ready(function(){
	//SET DEFAULT
	$(".mobile-title-observations").addClass("mobile-title-header");
	//SET RULES
  	$('.mobile-leaderboard-results').slick({
    	swipeToSlide: true,
    	arrows: false
  	});
	// Slick Slider for mobile: CHANGE FONT SIZE FOR EACH SLIDE AND HIDE COLUMNS ACCORDINGLY
	$('.mobile-leaderboard-results').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		if(nextSlide == 0) {
			//OBSERVATIONS
			//console.log("Observations slide 0!");
			$(".mobile-title-observations").addClass("mobile-title-header");
			$(".mobile-title-species").removeClass("mobile-title-header");
			$(".mobile-title-people").removeClass("mobile-title-header");
			//Hide all other titles and headers... show only observations
			$(".obsHeaderMobile").css("display", "block");
			$(".speciesHeaderMobile").css("display", "none");
			$(".peopleHeaderMobile").css("display", "none");

			$('#table-mobile > tbody').html("");
			processObsMobile(deferredObjs);
			statUpdate('obs');
			$('.stat-icon').attr("src",stat_icons[0]); 
			$('.category').html('Observations');
		} else if(nextSlide == 1) {
			//SPECIES
			//console.log("Species slide 1!");
			$(".mobile-title-species").addClass("mobile-title-header");
			$(".mobile-title-observations").removeClass("mobile-title-header");
			$(".mobile-title-people").removeClass("mobile-title-header");
			//Hide all other titles and headers... show only species
			$(".obsHeaderMobile").css("display", "none");
			$(".speciesHeaderMobile").css("display", "block");
			$(".peopleHeaderMobile").css("display", "none");
			//start
			$('#table-mobile > tbody').html("");
			processSpecMobile(deferredObjs);
			statUpdate('spec');
			$('.stat-icon').attr("src",stat_icons[1]);
		} else if(nextSlide == 2){
			//PEOPLE
			//console.log("People slide 2!");
			$(".mobile-title-people").addClass("mobile-title-header");
			$(".mobile-title-observations").removeClass("mobile-title-header");
			$(".mobile-title-species").removeClass("mobile-title-header");
			//Hide all other titles and headers... show only people
			$(".obsHeaderMobile").css("display", "none");
			$(".speciesHeaderMobile").css("display", "none");
			$(".peopleHeaderMobile").css("display", "block");
			//start
			$('#table-mobile > tbody').html("");
			processPeopleMobile(deferredObjs);
			statUpdate('ppl');
			$('.stat-icon').attr("src",stat_icons[2]); 
			$('.category').html('People');
		} else {
			//default is slide 0
			//console.log(nextSlide);
		}
	});
});



// ***************** GETS INATURALIST DATA *****************
function getData(id){ 
	var def = $.Deferred();
	var project = $.get("https://api.inaturalist.org/v1/observations/umbrella_project_stats?project_id="+id);
    $.when(project).done(function(project){
    	def.resolve(project);
    });
    return def.promise();
};

// async function getData(id) {
// 	const project = `https://api.inaturalist.org/v1/observations/umbrella_project_stats?project_id=${id}`;
// 	let response = await fetchErrCheck(project)
// 	console.log("This is getData Response", response)
// 	return response
	
// }




// API (iNaturalist, Natusfera, Local json)
function apiCalls(){
	//Test Nann
	
	// $.getJSON("https://sslapi.ibotany.cn/API/NEwx.ashx?a=cncstatis", function(JSONdata){
	// 	console.log("Nann");
	// 	console.log(JSONdata);
	// });
	/*
	$.getJSON("http://www.citynatureapi.com/profiles/?format=json", function(JSONdata){
		console.log("citynatureapi");
		//console.log(JSONdata);
	});
	$.getJSON("https://jsonplaceholder.typicode.com/todos/1", function(JSONdata){
		console.log("jsonplaceholder");
		console.log(JSONdata);
	});
	*/



	// Old is 19126
	// 2019 is 29625
	// 2020 is "city-nature-challenge-2020"

	/*
		Gets iNaturalist Data
	*/

	getData('city-nature-challenge-2021').done(function(projects){
		//console.log(projects.results.length);
		// console.log(projects.results[0].project.title);
		var testthisyo = 0;
		for(var i = 0; i < projects.results.length; i++){

			testthisyo = testthisyo + projects.results[i].species_count;
			totalSpecies = testthisyo 
			// console.log("testthisyocount " + testthisyo)
			// BEGIN REMOVING THE "2020/2021:"
			var theTitle = projects.results[i].project.title;
			var splitTitle;
			var fixedTitle;
			// If the title contains 2020: 
			if(theTitle.includes('2020:')){
				splitTitle = theTitle.split('2020:', 2);
				fixedTitle = splitTitle[1].trim();
			// If the title contains 2021:
			} else if (theTitle.includes('2021:')){
				splitTitle = theTitle.split('2021:', 2);
				fixedTitle = splitTitle[1].trim();
			} else {
				fixedTitle = projects.results[i].project.title;
			}			
			// END REMOVING 2020/2021:
			var projectObj = {
				'title': 'iNAT ' + fixedTitle,
				'observations':projects.results[i].observation_count,
				'species':projects.results[i].species_count,
				'people':projects.results[i].observers_count
			};
			 deferredObjs.push(projectObj); 

		}
		// console.log("deferredObjs ---- ");
		// console.log(deferredObjs);
		// console.log("testthisyo ---- ");
		// console.log(testthisyo);
	
		
		/*
			GET Santiago's Natusfera Data
		*/
		//if(deferredObjs.length === projects.results.length-1){ 
			// console.log("inside santiago's");
			// check for all promises is ok
			// console.log("//Promise Check is", Promise.all(aux))
			Promise.all(aux).then( data => {
				// console.log("This is Promise returned", data)
				// for(i = 0; i < data.length; i++){
				// 	var converter = {
				// 		"title": 'SPAIN ' + data[i].title,
				// 		"observations": parseInt(data[i].observations),
				// 		"species": data[i].species,
				// 		"people": data[i].people 
						
					}
					
					// deferredObjs.push(converter);
					// console.log("santiagos species");
					// console.log("title: " + data[i].title + "species: " + data[i].species + " observations: " + parseInt(data[i].observations));
				}
					//console.log("Added: " + data[i].title);
			// Chaining methods to promises so that each fetch call happens after the next sequentially - JC 04.13.21
			}).then(() => earthCall()).then(() => getAmyDataCall()).then(() => {
					
					/* https://ourcodeworld.com/articles/read/764/how-to-sort-alphabetically-an-array-of-objects-by-key-in-javascript */
					function dynamicSort(property) {
						    var sortOrder = 1;
						    if(property[0] === "-") {
						        sortOrder = -1;
						        property = property.substr(1);
						    }
						    return function (a,b) {
						        if(sortOrder == -1){
						            return b[property].localeCompare(a[property]);
						        } else{
						            return a[property].localeCompare(b[property]);
						        }        
						    }
						}
						deferredObjs.sort(dynamicSort("title"));
						//console.log("Prints all of json to console",JSON.stringify(deferredObjs)); // Prints all of json data to console
						tableBody.html('');
					
						processObs(deferredObjs);

						// Add all of the results and show it 
						for(i=0; i < deferredObjs.length; i++){
							totalObservations = totalObservations + deferredObjs[i].observations;
							totalSpecies = totalSpecies //+ deferredObjs[i].species;  Removed to only use iNaturalist
							totalPeople = totalPeople + deferredObjs[i].people;
						}
						

						$(".total-observations").html(totalObservations);
						$(".total-species").html(totalSpecies);  //totalSpecies
						$(".total-people").html(totalPeople);

						// Hide overlay
						$("#leadOverlay").css("display", "none");
				})

		/* 
			START EARTH GUARDIAN GET AUSTRALIA - ANDREW 
		*/
				const earthGuardianResource = [
	    		  { council_ids: 473 },
	    		  { council_ids: 571 },
	    		  { council_ids: 1 },
	    		  { council_ids: 6 },
	    		  { council_ids: 184 },
	    		  { council_ids: 4 },
	    		  { council_ids: 572 },
	    		  { council_ids: 7 },
	    		  { council_ids: 258 },
	    		  { council_ids: 8 },
	    		  { council_ids: 5 },
				  { council_ids: 514 },
				  { council_ids: 178 },
				  { council_ids: 221 }
				];
					
				//call URL and get JSON object and returns a formatted object
				async function getEarthProject(id) {
    			 const earthProjectUrl = `https://api.questagame.com/portal/council_infos?council_ids=${id}&contest_id=3`;
    			 let response = await fetch(earthProjectUrl);
				 let json = await response.json();
				// Check if json array is empty (fail)
				 	if (json.length == 0){
						console.log("Could not get",id);
				 	} else {
				// Create new object from JSON data(removing array bracket)
				 let results =  {
							"title":  json[0].title ?  'ANDREW '+ json[0].title : "n/a",
							"observations": json[0].observations ? json[0].observations : 0,
							"species": json[0].species ?  json[0].species : 0,
							"people": json[0].people ? json[0].people : 0
					};
				//  console.log("this is the new object", results);
				 return results;
					}
				};
					
				//map every earthGuardianResource array, and push it to deferredObjs
				function earthCall() {

				return Promise.all(    
					earthGuardianResource.map(async earthGuardianResource =>  {
				let mapResults = await getEarthProject(earthGuardianResource.council_ids)
					.then( results => {
					// console.log("Checking FOR ERROR with RESULTS", results)
					if (results != undefined){
					 deferredObjs.push(results)
                    }
					})

					.catch( err => {console.log("An error occurred with receiving Australia Results", err)
					})
					})
	
				)
			};
	
		/* 
			END EARTH CALL 
		*/

						
		/*
			START AMY CALL
		*/

				
				async function getAmyDataCall(){
					// You can now input your choice of CSV or JSON file.  However, CSV needs to follow format as leaderboard2020.csv on server
					const amyURL= "../wp-content/uploads/2020/01/leaderboard2021.json";
					//Injecting Filextension Check
					if (isCSVCheck(amyURL)) {
						let response = await fetchErrCheck(amyURL)
						.then (response => response.text())
						//Convert csv text to JSON and return
						.then (response => csvJSON(response))
						//map JSON file to make sure data looks right
						.then (response => { 
						response.map(json => {
							let results =  {
							"title":  json.title ?  'AMYCSV '+ json.title : "n/a",
							// the resultant CSV conversation observations/species/people are all string and needs to be parsed
							"observations": json.observations ? parseInt(json.observations) : 0,
							"species": json.species ?  parseInt(json.species) : 0,
							"people": json.people ? parseInt(json.people) : 0
							}
							// console.log("This is results", results)
							deferredObjs.push(results)
							//  console.log("I pushed AmyCSV", deferredObjs)
							})	
						})
						.catch((err)=> console.log("Could not get Leaderboard data", err))
						
					} else {
					let response = await fetchErrCheck(amyURL)
					.then(response => response.json())
					.then(response => {
						//map JSON file to make sure data looks correct
						response.map(json => {
							let results =  {
							"title":  json.title ?  'AMYJSN '+ json.title : "n/a",
							"observations": json.observations ? json.observations : 0,
							"species": json.species ?  json.species : 0,
							"people": json.people ? json.people : 0
							}
							deferredObjs.push(results)
							// console.log("I pushed Amy", deferredObjs)
						})	
					})
					.catch((err)=> console.log("Could not get Leaderboard data", err))
					}
				};	
	
		/*
			END AMY CALL 
		*/

		/* 
			START SHENZHEN Call
		*/

			 async function getSZCall(){
					const szURL= "https://conserve.ibotany.cn/API/NEwx.ashx?a=cnc2021statis";
					let response = await fetchErrCheck(szURL)
					.then(response => response.json())
					.then(object => {
						// console.log("did the object come through", object)
						deferredObjs.push(object)
							// console.log("I pushed SZ", deferredObjs)

					})
					.catch((err)=> console.log("Could not get SZ data", err)
					)
				}; 
	

			 

		/*
			END SHENZEN CALL
		*/

	}); //ends original
}


// x2
function getFinalResultssss(deferredObjs){
	const rows = deferredObjs;
	var roJoin;
	var csvContent = "data:text/csv;charset=utf-8,";
	for(var i = 0; i < rows.length; i++){
		var row = [];
		row.push(rows[i].title);
		row.push(rows[i].observations);
		row.push(rows[i].species);
		row.push(rows[i].people+"//");
		var join = '';
		for(var j = 0; j < row.length; j++){
			if(j == 0){ 
				var data= row[j].replace(",",";");
			} else {
				var data = row[j];
			}
			if(j != row.length-1){
				join += data+",";
			} else {
				join += data;
			}
		}
		csvContent +=  join + "\r\n";
	}
	var encodedUri = encodeURI(csvContent);
	var link = document.createElement("a");
	link.setAttribute("href", encodedUri);
	link.setAttribute("download", "my_data.csv");
	link.innerHTML= "Click Here to download";
	document.body.appendChild(link); 
	link.click();
}
</script>
<!-- SLICK SLIDER JS //remember to download slick and call it locally -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<?php get_footer(); ?>
