<?php
/* 
 *   Template Name: T-Leaderboard-Test-Stable2
 */
get_header();
header('Content-type: text/html; charset=utf-8');
?>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<style type="text/css">
			.leader-thumbnails{
			}
			table th{
				border: none;
			}
			table td{
				border: none;
			}

			.img-thumbnail{
				width: 100%;
				float: left;
				height: 100%;
			}

			.leader-details{
				width: 50%;
			}
			.leader-details .row{
				height: 33%;

			}
			/*.leader-thumbnails{
				float:left;
				height: 100%;
				display: flex;
				align-items: center;
			}*/
			.title{
				width: 75%;
			}

			.sort-btn{
				border: 1px solid #8dc248;
				width: 60%;
				height: 100%;
				color: #8dc248;
			}

			th:hover{
				cursor: pointer;
			}

			.details{
			}

			.sort-select{
				display: none;
			}
			.img-cont{
				width: 15%;
			}
			.det-cont{
				width: 85%;
			}
			.holder{
				margin: auto;
			}
			.stat{
				width: 100%;
			}
			h2{
					font-size: 3rem;
			}

			.det-box{
				display: flex;
				align-items: center;
			}
			
			.mb-view{
				display: none;
			}
			@media(max-width: 767px){
				.mb-view{
					display: block;
				}

				.dsk-view{
					display: none;
				}

				.leader-thumbnails .title{
					font-size: 16px;
				}
				.sort-btn{
					display: none;
				}
				table{
					display: none;
				}
				.sort-select{
					display: block;
					background-color: #8dc248;
					color: white;
				}
				.form-control:focus{
					background-color:#8dc248;
					color: white;
				}

				 select:focus{
					background-color: #8dc248;
				}
				/*
				.img-cont{
					width: 45%;
					display: flex;
					/*justify-content: flex-start;*/
				}
				/*.img-thumbnail{
					display: block;
					height: auto;
					width: auto;
					max-width: 200px;	
					max-height: 150px;			
				}*/
				.leader-thumbnails{
					/*float: none;
					height: 33%;
					margin-left: 0px;
					margin-right: 0px;
					width: 100%;
				*/	display: flex;
				
					align-items: center;
					
				}

				.details{
					width: 100%;
					display: flex;
					display: flex;
					flex-direction: column;
				}
				.holder{
					margin: auto;
					margin-top: 50px;
					padding: 0px;
					display: flex;
					justify-content: flex-end;
				}
				.det-cont{
					width: 55%;
					padding-right: 0px;
					display: flex;
					flex-direction: column;
					flex-wrap: wrap;
					align-content: space-between;
				}
				
			}
</style>
<style type="text/css">
	.category-select > div {
		width:100%;
		margin:10px 0px;
	}	
	.first-place {
		padding-top:40px;
	}
	.second-third-place-row {
		margin: 80px 0px 100px 0px;
	}

	.rank-city-diaplay {
		font-weight:700;
	}


	@media (min-width: 768px) {
		.hide-state,
		.hide-country {
			display:none;
		}

		.rank-city-diaplay {
			font-size:1.2rem;
		}
	}
	tbody > tr:nth-child(1) {
		background-color:#dae7bf;
	}
	tbody > tr:nth-child(2) {
		background-color:#e8f1d8;
	}
	tbody > tr:nth-child(3) {
		background-color:#f5f9ee;
	}



	.mobile-title-header {
		font-size:1.6rem;
	}


	.text-middle {
		text-align: center;
		vertical-align: middle;
		color:#8dc248;
	}
	.mobile-center-result {
		line-height: 195px;
	}
	.mobile-center-result-small {
		line-height: 150px;
	}
	.mobile-center-place {
		line-height:35px;
	}

	.sub-circle {
		height: 40px;
		width: 40px;
		background-color: #fff;
		border: 2px solid #8dc248;
		border-radius:50%;
		margin:0 auto;
		display:block;
	}
	.sub-circle-small {
		height: 30px;
		width: 30px;
		background-color: #fff;
		border: 2px solid #8dc248;
		border-radius:50%;
		margin:0 auto;
		display:block;
		line-height:26px;
		font-size:16px;
	}

	.td-main-content-wrap {
		background-image: url('/wp-content/uploads/2018/09/CNC_Favicon.png');
		background-repeat:no-repeat;
		background-size:1100px 1100px;
		background-position: calc(50% - 50px) calc(50% - 400px);
		
	}
</style>

<!-- SLICK SLIDER CSS-->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


<!-- ============ MOBILE ============ -->
<div class="td-main-content-wrap mb-view" style="min-height:50px;">
<div class="container" style="padding-top:15px;">

	<!-- TITLE -->
	<div class="text-center">
		<h2 style="color:#fff; padding-top:20px; padding-bottom:0px;">Leaderbaord</h2>
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

				<!-- ROW 1 - SLIDE 1 -->
				<div class="mobile-first-circle" style="padding-top:15px;">
					<!-- 1st PLACE -->
					<div id="first" class="first">
						<!-- White Ball Result -->
						<div class="btn-circle-white">
						 	<h2 class="stat text-middle mobile-center-result"></h2>
						</div>
						<!-- 1 -->
						<div class="mobile-first-circle-sub sub-circle" style="margin-top:-37px;">
							<p class="text-middle mobile-center-place" style="font-size:18px;">1</p>
						</div>
						<!-- Title -->
						<div class="mobile-first-place-title text-center" style="margin-top:10px; margin-bottom:-10px;">
							<p class="display-8 title mx-auto" style="color:#fff;"></p>
						</div>
					</div>
				</div>
			
				<!-- ROW 2 - SLIDE 1 -->
				<div style="margin-top:50px; width:100%; height:500px;">

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
					<div style="width:49%; height:10px; float:right;">
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
	  	<!-- ***** SPECIES ***** -->
	  	<div style="width:80%;"><!-- SLICK SLIDE 2 -->

	  		<!-- ROW 1 - SLIDE 2 -->
				<div class="mobile-first-circle" style="padding-top:15px;">
					<!-- 1st PLACE -->
					<div id="first" class="first">
						<!-- White Ball Result -->
						<div class="btn-circle-white">
						 	<h2 class="stat text-middle mobile-center-result"></h2>
						</div>
						<!-- 1 -->
						<div class="mobile-first-circle-sub sub-circle" style="margin-top:-37px;">
							<p class="text-middle mobile-center-place" style="font-size:18px;">1</p>
						</div>
						<!-- Title -->
						<div class="mobile-first-place-title text-center" style="margin-top:10px; margin-bottom:-10px;">
							<p class="display-8 title mx-auto" style="color:#fff;"></p>
						</div>
					</div>
				</div>
			
				<!-- ROW 2 - SLIDE 2 -->
				<div style="margin-top:50px; width:100%; height:500px;">

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
					<div style="width:49%; height:10px; float:right;">
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
	  		<!-- ROW 1 - SLIDE 3 -->
				<div class="mobile-first-circle" style="padding-top:15px;">
					<!-- 1st PLACE -->
					<div id="first" class="first">
						<!-- White Ball Result -->
						<div class="btn-circle-white">
						 	<h2 class="stat text-middle mobile-center-result"></h2>
						</div>
						<!-- 1 -->
						<div class="mobile-first-circle-sub sub-circle" style="margin-top:-37px;">
							<p class="text-middle mobile-center-place" style="font-size:18px;">1</p>
						</div>
						<!-- Title -->
						<div class="mobile-first-place-title text-center" style="margin-top:10px; margin-bottom:-10px;">
							<p class="display-8 title mx-auto" style="color:#fff;"></p>
						</div>
					</div>
				</div>
			
				<!-- ROW 2 - SLIDE 3 -->
				<div style="margin-top:50px; width:100%; height:500px;">

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
					<div style="width:49%; height:10px; float:right;">
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
	<!-- old mobile -->
	<div style="display:none;">
		<!-- OLD DESIGN -->
		<!-- SORT -->
		<div class="container mb-2">
			<select class="sort-select form-control dropdown-toggle">
				<option >Observations</option>
				<option>Species</option>
				<option>People</option>
			</select>
		</div> 
		<!-- RESULTS -->
		<div class="container">
			<div class="row">
				<div class="col-4">
					<img class="img-thumbnail float-left stat-icon border-0">
				</div>
				<div class="col-3"></div>
				<div id= "first" class="first col-5 col-md-3 d-flex align-items-center text-center">
					<div class="container-fluid">
						<div class="row text-center">
							<h2 class="stat"></h2>
						</div>
						<div class="row text-center">
							<p class='title mx-auto'>
						</div>
					</div>
				</div>
			</div>  
			<div class="row">
				<div class="col-4"></div>
				<div class="col-3"></div>
				<div id= "second" class="second col-5 col-md-3 d-flex align-items-center">
					<div class="container-fluid">
						<div class="row text-center">
							<h2 class="stat"></h2>
						</div>
						<div class="row text-center">
							<p class='title mx-auto'></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4"></div>
				<div class="col-3"></div>
				<div id= "third" class="third col-5 d-flex align-items-center">
					<div class="container-fluid">
							<div class="row text-center">
								<h2 class="stat"></h2>
							</div>
							<div class="row text-center">
								<p class='title mx-auto'></p>
							</div>
					</div>
				</div>
			</div>
		</div> 
	</div><!-- //display:none -->


</div> <!-- //container -->
</div> <!-- /.td-main-content-wrap container-->




<!-- ============ DEKSTOP ============ -->
<div class="td-main-content-wrap container dsk-view">
<script>console.log("leaderboardT1TestStable2.php");</script>
	<?php //echo '<span style="opacity:0;">.</span>'; // Fixes space issue?>
	<div class="container" style="display:none;">
	  <div class="row" style="margin-top:50px; margin-bottom:30px;">
	    <h2 class="display-8 weight-500" style="margin-left:40px;">2018 LEADERBOARD</h2>
	  </div>
	</div>

	<!-- TOP ROW -->
	<div class="row">
		<!-- SORT BUTTONS -->
		<div class="col-lg-3 col-md-3 col-sm-12 offset-lg-1 offset-md-1">
			<div class="category-select" style="margin-top:10px;">
				<div class="sort-btn btn  rounded-0 obsHeader">Observations</div>
			</div>
			<div class="category-select">
				<div class="sort-btn btn rounded-0 speciesHeader">Species</div>
			</div>
			<div class="category-select">
				<div class="sort-btn btn  rounded-0 peopleHeader">People</div>
			</div>
		</div>
		<!-- 1st PLACE -->
		<div class="col-lg-4 col-md-4 col-sm-12 offset-lg-1 offset-md-1 text-center">
			<div class="first">
				<h2 class="stat mb-1 first-place"></h2>
			</div>
			<div class="first">
				<p class='title mx-auto'></p>
			</div>
		</div>
	</div><!-- //row -->

	<!-- MIDDLE ROW -->
	<div class="row second-third-place-row">
		<!-- ICON IMAGE -->
		<div class="col-lg-3 col-md-3 col-sm-12 offset-lg-1 offset-md-1">
			<img class="stat-icon border-0" style="width:150px; margin:0 auto; height:150px; display:block;">
		</div>

		<!-- 2ND PLACE -->
		<div class="col-lg-3 col-md-3 col-sm-12 text-center">
			<div class="second" style="margin-top:5px">
				<h2 class="stat mb-1"></h2>
			</div>
			<div class="second">
				<p class='title mx-auto'></p>
			</div>
		</div>

		<!-- 3RD PLACE -->
		<div class="col-lg-3 col-md-3 col-sm-12 text-center">
			<div class="third" style="margin-top:5px">
				<h2 class="stat mb-1"></h2>
			</div>
			<div class="third">
				<p class='title mx-auto'></p>
			</div>
		</div>
	</div>

	<!-- BOTTOM ROW -->
	<div class="row">
		<!-- LIST -->
		<div class="container mt-4 table-responsive">
			<table class="table " id ="table">
				<thead style="border-left: none; border-right: none;">
					<tr>
						<th class='srt-btn-header-city titleHeader'>City</th>
						<th class='srt-btn-header-observations obsHeader'>Observations</th>
						<th class='srt-btn-header-species speciesHeader'>Species</th>
						<th class='srt-btn-header-people peopleHeader'>People</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div> <!-- /.td-main-content-wrap container-->


<!-- SLICK SLIDER JS //remember to download slick and call it locally -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<?php get_footer(); ?>

<!-- SLICK JAVASCRIPT -->
<script type="text/javascript">
$(document).ready(function(){

	//SET DEFAULT
	$(".mobile-title-observations").addClass("mobile-title-header");

	//SET RULES
  	$('.mobile-leaderboard-results').slick({
    	swipeToSlide: true,
    	arrows: false
  	});

	// CHANGE FONT SIZE FOR EACH SLIDE
	$('.mobile-leaderboard-results').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		if(nextSlide == 0) {
			//OBSERVATIONS
			console.log("Observations slide 0!");
			$(".mobile-title-observations").addClass("mobile-title-header");
			$(".mobile-title-species").removeClass("mobile-title-header");
			$(".mobile-title-people").removeClass("mobile-title-header");
		} else if(nextSlide == 1) {
			//SPECIES
			console.log("Species slide 1!");
			$(".mobile-title-species").addClass("mobile-title-header");
			$(".mobile-title-observations").removeClass("mobile-title-header");
			$(".mobile-title-people").removeClass("mobile-title-header");
		} else if(nextSlide == 2){
			//PEOPLE
			console.log("People slide 2!");
			$(".mobile-title-people").addClass("mobile-title-header");
			$(".mobile-title-observations").removeClass("mobile-title-header");
			$(".mobile-title-species").removeClass("mobile-title-header");
		} else {
			//default is slide 0
			console.log(nextSlide);
		}
	});

});
</script>


<script type="text/javascript">
	// GLOBAL VARIABLES
	var stat_icons = [
		"../wp-content/uploads/2018/08/observations-icon-150x150.png",
		"../wp-content/uploads/2018/08/species-icon-150x150.png",
		"../wp-content/uploads/2018/08/people-icon-150x150.png"
	];
	var deferredObjs =[];
	var tableBody = $('tbody');
	//console.log(tableBody);



	// ***************** BUTTON FUNCTIONALITY ***************** //

	//CHANGE BUTTON COLOR ON CLICK 
	var sort_btns = document.querySelectorAll('.sort-btn');
	//console.log(sort_btns);
	for(var i =0; i < sort_btns.length; i++){
		sort_btns[i].onclick = function(){
			var parentNode = this.parentNode.parentNode.children;
			for(var j = 0; j < parentNode.length;j++){ //reverts previously selected btn to orginal format
				parentNode[j].children[0].style.backgroundColor = 'white';
				parentNode[j].children[0].style.color='#8dc248';
			}
			//for(var j =0; j < sort)
			this.style.color = 'white';
			this.style.backgroundColor='#8dc248';
		}
	}
	//MOBILE DROPDOWN - CHANGE FUNCTIONALITY
	$('select').change(function(){
		if(this.value == 'Observations'){
			processObs(deferredObjs);
			statUpdate('obs');
			$('.stat-icon').attr("src",stat_icons[0]); 
		}
		if(this.value == 'Species'){
			processSpec(deferredObjs);
			statUpdate('spec');
			$('.stat-icon').attr("src",stat_icons[1]);
		}
		if(this.value == 'People'){
			processPeople(deferredObjs);
			statUpdate('ppl');
			$('.stat-icon').attr("src",stat_icons[2]);
		}
		//console.log(this.value);
	})
	// ***************** SORTING TRIGGERS ***************** //
	// TRIGGERS SORTING BY CATEGORY 
	$('.obsHeader').click( function(){//triggers sorting by different categories
		$('#table > tbody').html("");
		processObs(deferredObjs);
		statUpdate('obs');
		$('.stat-icon').attr("src",stat_icons[0]); 
		$('.category').html('Observations');
	});

	$('.titleHeader').click( function(){
	console.log("header clicked");
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
	// ***************** SORTING FUNCTIONS ***************** //
	// SORTS > OBSERVATION
	function processObs(arr){
		arr = arr.sort(function(a,b){
			return a.observations - b.observations;
		});

		arr.reverse();
		// console.log('yo');
		//console.log(arr);
		tableBody.html('');
		for(var i = 0; i< arr.length; i++){
			var row = $('<tr> </tr>');
			var title = '<td>'+arr[i].title + '</td>';
			var obs = '<td>'+arr[i].observations+'</td>';
			var spec = '<td>'+arr[i].species+'</td>';
			var ppl = '<td>'+arr[i].people+'</td>';
			row.append(title);
			row.append(obs);
			row.append(spec);
			row.append(ppl);

			tableBody.append(row);
		}
	}
	// SORTS > SPECIES
	function processSpec(arr){
		arr = arr.sort(function(a,b){
			return a.species - b.species;
		});

		arr.reverse();

		//console.log(arr);
		tableBody.html('');
		for(var i = 0; i< arr.length; i++){
			var row = $('<tr> </tr>');
			var title = '<td>'+arr[i].title + '</td>';
			var obs = '<td>'+arr[i].observations+'</td>';
			var spec = '<td>'+arr[i].species+'</td>';
			var ppl = '<td>'+arr[i].people+'</td>';
			row.append(title);
			row.append(obs);
			row.append(spec);
			row.append(ppl);

			tableBody.append(row);

		}
	}
	// SORTS > PEOPLE
	var processPeople = function(arr){
		//console.log(deferredObjs.length);
		arr = arr.sort(function(a,b){
			return a.people - b.people;
		});

		arr.reverse();

		//console.log(arr);
		tableBody.html('');
		for(var i = 0; i< arr.length; i++){
			var row = $('<tr> </tr>');
			var title = '<td>'+arr[i].title + '</td>';
			var obs = '<td>'+arr[i].observations+'</td>';
			var spec = '<td>'+arr[i].species+'</td>';
			var ppl = '<td>'+arr[i].people+'</td>';
			row.append(title);
			row.append(obs);
			row.append(spec);
			row.append(ppl);

			tableBody.append(row);
		}
	};
	// SORTS > TITLE
	var processTitle = function(arr){
		arr = arr.sort(function(a,b){
			var lowerCaseA = a.title.toLowerCase();
			var lowerCaseB = b.title.toLowerCase();

			if(lowerCaseA > lowerCaseB){
				return 1;
			}

			else if(lowerCaseA < lowerCaseB){
				return -1;
			}

			return 0;
		});

		//console.log(arr);

		tableBody.html('');
		for(var i = 0; i< arr.length; i++){
			var row = $('<tr> </tr>');
			var title = '<td>'+arr[i].title + '</td>';
			var obs = '<td>'+arr[i].observations+'</td>';
			var spec = '<td>'+arr[i].species+'</td>';
			var ppl = '<td>'+arr[i].people+'</td>';
			row.append(title);
			row.append(obs);
			row.append(spec);
			row.append(ppl);

			tableBody.append(row);

		}
	};
	//SET GREEN COLOR ON BUTTONS WHEN FILTER HEADERS ARE CLICKED
	//OBSERVATIONS
	$('.srt-btn-header-observations').click( function(){
		//make observations green
		$(".category-select > .obsHeader").css("background-color", "rgb(141,194,72)").css("color", "white");
		//make species white
		$(".category-select > .speciesHeader").css("background-color", "#fff").css("color", "rgb(141,194,72");
		//make people white
		$(".category-select > .peopleHeader").css("background-color", "#fff").css("color", "rgb(141,194,72");
	});
	//SPECIES
	$('.srt-btn-header-species').click( function(){
		//make observations green
		$(".category-select > .speciesHeader").css("background-color", "rgb(141,194,72)").css("color", "white");
		//make species white
		$(".category-select > .obsHeader").css("background-color", "#fff").css("color", "rgb(141,194,72");
		//make people white
		$(".category-select > .peopleHeader").css("background-color", "#fff").css("color", "rgb(141,194,72");
	});
	//PEOPLE
	$('.srt-btn-header-people').click( function(){
		//make observations green
		$(".category-select > .peopleHeader").css("background-color", "rgb(141,194,72)").css("color", "white");
		//make species white
		$(".category-select > .obsHeader").css("background-color", "#fff").css("color", "rgb(141,194,72");
		//make people white
		$(".category-select > .speciesHeader").css("background-color", "#fff").css("color", "rgb(141,194,72");
	});




	// ***************** FETCH DATA ***************** //
	function getData(id){ //19126 ??
	console.log("Inside getData()");
		var def = $.Deferred();
		var project = $.get("https://api.inaturalist.org/v1/observations/umbrella_project_stats?project_id="+id);
		// var proj = $.get('https://api.inaturalist.org/v1/projects/'+id);
	    // var obs  = $.get("https://api.inaturalist.org/v1/observations?project_id="+id+"&per_page=0");
	    // console.log("https://api.inaturalist.org/v1/observations?project_id="+id+"&per_page=0");
	    // var specs =   $.get("https://api.inaturalist.org/v1/observations/species_counts?project_id="+id+"&per_page=0");
	    // var people =   $.get("https://api.inaturalist.org/v1/observations/observers?project_id="+id+"&per_page=1 ");
	    //console.log(project);
	   // console.log(obs);
	    // $.when(proj, obs, specs, people).done(function(proj, obs, specs, people){
	    // 	//console.log(specs);
	    // 	def.resolve(proj,obs,specs,people);
	    // });
	    $.when(project).done(function(project){
	console.log("Inside .done(function(project) - getData()");
	    	console.log(project);
	    	def.resolve(project);
	    });
	    return def.promise();
	};

	// RESULTS/STATS DISPLAY
	function statUpdate(type){
	// if you're looking for the on-load default results go to START PROJECT >> AJAX - WP CONTENT 'if' statement two functions down
	console.log("Inside statUpdate()");
		if(type == 'obs'){
			//1ST PLACE
			var placeTitleLong = deferredObjs[0].title;
			var placeTitle = placeTitleLong.split(",");
			$('.first .title').html(placeTitle[0]);
			$('.first .title').html("<span class=\"rank-city-diaplay\">" + placeTitle[0] + "</span><span class=\"hide-state\">,<br/> " + placeTitle[1] + "</span><span class=\"hide-country\">, " + placeTitle[2] + "</span>");


			// 2ND PLACE
			var placeTitleLong2 = deferredObjs[1].title;
			var placeTitle2 = placeTitleLong2.split(",");
			//$('.second  .title').html(deferredObjs[1].title);
			$('.second  .title').html("<span class=\"rank-city-diaplay\">" + placeTitle2[0] + "</span><span class=\"hide-state\">,<br/> " + placeTitle2[1] + "</span><span class=\"hide-country\">, " + placeTitle2[2] + "</span>");
			$('.second .stat').html(deferredObjs[1].observations);


			// 3RD PLACE
			var placeTitleLong3 = deferredObjs[2].title;
			var placeTitle3 = placeTitleLong3.split(",");
			//$('.third  .title').html(deferredObjs[2].title);
			$('.third  .title').html("<span class=\"rank-city-diaplay\">" + placeTitle3[0] + "</span><span class=\"hide-state\">,<br/> " + placeTitle3[1] + "</span><span class=\"hide-country\">, " + placeTitle3[2] + "</span>");
			$('.third .stat').html(deferredObjs[2].observations);
		}
		if(type == 'spec'){
			//1ST PLACE
			var placeTitleLong = deferredObjs[0].title;
			var placeTitle = placeTitleLong.split(",");
			$('.first .title').html("<span class=\"rank-city-diaplay\">" + placeTitle[0] + "</span><span class=\"hide-state\">,<br/> " + placeTitle[1] + "</span><span class=\"hide-country\">, " + placeTitle[2] + "</span>");
			$('.first .stat').html(deferredObjs[0].species);


			// 2ND PLACE
			var placeTitleLong2 = deferredObjs[1].title;
			var placeTitle2 = placeTitleLong2.split(",");
			$('.second  .title').html("<span class=\"rank-city-diaplay\">" + placeTitle2[0] + "</span><span class=\"hide-state\">,<br/> " + placeTitle2[1] + "</span><span class=\"hide-country\">, " + placeTitle2[2] + "</span>");
			$('.second .stat').html(deferredObjs[1].species);


			// 3RD PLACE
			var placeTitleLong3 = deferredObjs[2].title;
			var placeTitle3 = placeTitleLong3.split(",");
			$('.third  .title').html("<span class=\"rank-city-diaplay\">" + placeTitle3[0] + "</span><span class=\"hide-state\">,<br/> " + placeTitle3[1] + "</span><span class=\"hide-country\">, " + placeTitle3[2] + "</span>");
			$('.third .stat').html(deferredObjs[2].species);
		}
		if(type == 'ppl'){
			//1ST PLACE
			var placeTitleLong = deferredObjs[0].title;
			var placeTitle = placeTitleLong.split(",");
			$('.first .title').html("<span class=\"rank-city-diaplay\">" + placeTitle[0] + "</span><span class=\"hide-state\">,<br/> " + placeTitle[1] + "</span><span class=\"hide-country\">, " + placeTitle[2] + "</span>");
			$('.first .stat').html(deferredObjs[0].people);


			// 2ND PLACE
			var placeTitleLong2 = deferredObjs[1].title;
			var placeTitle2 = placeTitleLong2.split(",");
			$('.second  .title').html("<span class=\"rank-city-diaplay\">" + placeTitle2[0] + "</span><span class=\"hide-state\">,<br/> " + placeTitle2[1] + "</span><span class=\"hide-country\">, " + placeTitle2[2] + "</span>");
			$('.second .stat').html(deferredObjs[1].people);


			// 3RD PLACE
			var placeTitleLong3 = deferredObjs[2].title;
			var placeTitle3 = placeTitleLong3.split(",");
			$('.third  .title').html("<span class=\"rank-city-diaplay\">" + placeTitle3[0] + "</span><span class=\"hide-state\">,<br/> " + placeTitle3[1] + "</span><span class=\"hide-country\">, " + placeTitle3[2] + "</span>");
			$('.third .stat').html(deferredObjs[2].people);
		}
	}



	// ***************** START PROJECT ***************** //
	// START PROJECT - CALLS finalResults();  
	var projIds='';
	$(function(){
	console.log("Inside Anonymous function $(function()){");
		finalResults();
		//testUmbrellaApi();
			// api1();
			// setTimeout(api2(),60000);
			// setTimeout(api3(),60000);
			// setTimeout(api4(),60000);
			// noniNat();
			//processObs(deferredObjs);
			
			//console.log(projIds);
			// arrAPI();
	});

	// AJAX - GETS WP CONTENT
	function finalResults(){
	console.log("Inside finalResults()");
		$.ajax({
			url: "../wp-content/uploads/2018/08/cnc_final_results_5_16_18.csv", //this file is a utf-8 encoded file
			dataType: "text",
			success:function(data){
				//console.log(data);
				var city_data = data.split("//");
				//console.log(city_data);
				for(var i = 0; i < city_data.length-1;i++){
					var cell_data = city_data[i].split(",");
					//console.log(cell_data);
					// console.log(cell_data[0]);
					
						var projObj = { //creates project obj so that table can be sorted.

							'title' : cell_data[0].replace("-",", ").replace("- ",", "),
							'observations': cell_data[1],
							'species' : cell_data[2],
							'people' : cell_data[3]
						};

						//console.log(projObj);
						deferredObjs.push(projObj);

						if(deferredObjs.length === city_data.length-1){ 
							//console.log(deferredObjs);
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
				 //console.log(projObj);
				//console.log(deferredObjs.length); //commented this out
				processObs(deferredObjs);
			}
		}
		});
	}



	// ***************** API ***************** //
	// TESTING API
	function testUmbrellaApi(){
		console.log("Inside testUmbrellaApi()");
		getData(19126).done(function(projects){
		console.log("Inside .done(function(project) - testUmbrellaApi()");
			//console.log(projects.results.length);

			for(var i = 0; i < projects.results.length; i++){
				//console.log(projects.results[i].project.title);
				var projectObj ={
					'title': projects.results[i].project.title,
					'observations':projects.results[i].observation_count,
					'species':projects.results[i].species_count,
					'people':projects.results[i].observers_count
				};
				deferredObjs.push(projectObj);
				if(deferredObjs.length === projects.results.length-1){ 

					//console.log(deferredObjs);
					processObs(deferredObjs);
					$('.first .title').html(deferredObjs[0].title);
					$('.first .stat').html(deferredObjs[0].observations);
					$('.second  .title').html(deferredObjs[1].title);
					$('.second .stat').html(deferredObjs[1].observations);
					$('.third  .title').html(deferredObjs[2].title);
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
				else{
					//console.log(deferredObjs.length + " " + projects.results.length-1);
				}
			}
			//getFinalResults(deferredObjs);
		});
	}

	// x2
	function getFinalResults(deferredObjs){
	console.log("Inside getFinalResults()x2");
			const rows = deferredObjs;
			var roJoin;
			//console.log(rows.length);
			var csvContent = "data:text/csv;charset=utf-8,";
			for(var i = 0; i < rows.length; i++){
			//	console.log('1');
				var row = [];
				row.push(rows[i].title);
				row.push(rows[i].observations);
				row.push(rows[i].species);
				row.push(rows[i].people+"//");
			//	console.log("i = " + i);
				var join = '';
				for(var j = 0; j < row.length; j++){

					//console.log(j);
					if(j == 0){ //replaces commas in title column with semi colons
						var data= row[j].replace(",",";");
						console.log(data);
					}

					else{
						var data = row[j];
					}
					
					if(j != row.length-1){
						join += data+",";
					}
					else{
						join += data;
					}
					console.log(data);
				}
				
				csvContent +=  join + "\r\n";
				//console.log(csvContent);
			}

			var encodedUri = encodeURI(csvContent);
			var link = document.createElement("a");
			link.setAttribute("href", encodedUri);
			link.setAttribute("download", "my_data.csv");
			link.innerHTML= "Click Here to download";
			document.body.appendChild(link); // Required for FF

			link.click(); // This will download the data file named "my_data.csv".
	}
	
	function noniNat(){
	console.log("Inside noniNat()");
		$.ajax({
			url: "../wp-content/uploads/2018/08/non-iNat3.csv", //this file is a utf-8 encoded file
			dataType: "text",
			success:function(data){
				//console.log(data);
				var city_data = data.split("//");
				//console.log(city_data);
				for(var i = 1; i < city_data.length-1;i++){
					var cell_data = city_data[i].split(",");
					//console.log(cell_data);
					// console.log(cell_data[0]);
					var projObj = { //creates project obj so that table can be sorted.
						'date' : cell_data[0],
						'title' : "City Nature Challenge 2018: "+ cell_data[1],
						'observations': cell_data[2],
						'species' : cell_data[3],
						'people' : cell_data[4]
					};
					//console.log(projObj);
					deferredObjs.push(projObj);
				}
				 //console.log(projObj);
				//console.log(deferredObjs);
				processObs(deferredObjs);
			}
		});
	};
		

</script>





















































