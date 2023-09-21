<?php
/* 
 *   Template Name: T-Leaderboard-Test
 */
get_header();
header('Content-type: text/html; charset=utf-8');

// ========== Notes ========== //
// After Original
// Old


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

				.leader-thumbnails{
					display: flex;
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

			/* MINE */
			.category-select > div {
				width:100%;
				float:left;
				margin:10px 0px;
			}			
			.place-number {
				max-width:50%;
				margin:0 auto;
				display:block;
				border-bottom:4px solid #8dc248;
			}
			.place-number > p {
				color:#8dc248;
				text-align:center;
				font-size:3rem;
			}
			.results-numbers {
				text-align:center;
			}

			.first > p,
			.second > p,
			.third > p {
				font-weight:600;
				font-size:1.5em;
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
</style>












<div class="container">
<div class="row">
	<div style="width:100%; height:100px;"></div>
</div>
</div>



<!-- DESKTOP VIEW -->
<div class="td-main-content-wrap container dsk-view">


<p class="display-5 weight-700 icon-title-name" style="margin-top:-14px;text-transform: uppercase; display:none;"></p>

	<!-- BUTTONS ROW -->
	<div class="row tdc-row text-center">
		<!-- Icon Column -->
		<div class="col-lg-3 col-md-3 col-sm-12 offset-lg-3 offset-md-3">
			<img class="stat-icon border-0" style="width:200px; margin:0 auto; height:200px; display:block;">
		</div>
		<!-- Selector Buttons Column -->
		<div class="col-lg-4 col-md-4 col-sm-12">
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
	</div><!-- //BUTTONS -->



	<div class="row" style="margin-top:100px;">
		<!-- 1st PLACE -->
		<div class="col-lg-4 col-md-4 col-sm-12 results-numbers">
			<div class="place-number">
				<p>1<sup>st</sup></p>
			</div>
			<div class="first" style="margin-top:30px;">
				<h2 class="stat mb-1"></h2>
			</div>
			<div class="first">
				<p class='title mx-auto'>
			</div>
		</div>
		<!-- 2nd PLACE -->
		<div class="col-lg-4 col-md-4 col-sm-12 results-numbers">
			<div class="place-number">
				<p>2<sup>nd</sup></p>
			</div>
			<div class="second" style="margin-top:30px;">
				<h2 class="stat mb-1"></h2>
			</div>
			<div class="second">
				<p class='title mx-auto'></p>
			</div>
		</div>
		<!-- 3rd PLACE -->
		<div class="col-lg-4 col-md-4 col-sm-12 results-numbers">
			<div class="place-number">
				<p>3<sup>rd</sup></p>
			</div>
			<div class="third" style="margin-top:30px;">
				<h2 class="stat mb-1"></h2>
			</div>
			<div class="third">
				<p class='title mx-auto'></p>
			</div>
		</div>
	</div>


</div><!-- //container -->
<div style="clear:both; width:100%; height:50px;"></div><!-- *** ^^^ Mine ^^^ *** -->







<!-- DESKTOP DISPLAY -->

<div class="td-main-content-wrap container">
	
<?php 
// Fix-
// space issue: there's a huge gap between the <h2>Leaderboard</h2> and the data... 
//When debugging, I found that echoing out something fixes the space issue ?>
<?php echo '<span style="opacity:0;">.</span>'; ?>

		





<!-- MOBILE DISPLAY -->
	<div class="container mb-view">

		<div class="container mb-2">
			<select class="sort-select form-control dropdown-toggle">
				<option >Mobile Observations</option>
				<option>Mobile Species</option>
				<option>Mobile People</option>
			</select>
		</div> <!--SORT SELECT-->



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
						<p class='title mx-auto'>
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
							<p class='title mx-auto'>
						</div>
				</div>
			</div>
		</div>
	</div> 
	
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
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</div> <!-- /.td-main-content-wrap -->

<?php
get_footer();
?>





<script>
	var stat_icons = [
		"../wp-content/uploads/2018/08/observations-icon-150x150.png",
		"../wp-content/uploads/2018/08/species-icon-150x150.png",
		"../wp-content/uploads/2018/08/people-icon-150x150.png"
	];

	//CHANGE BUTTON COLOR ON CLICK =D
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

	//MOBILE SELECT CHANGE FUNCTIONALITY //MOBILE DROPDOWN =D
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

		var deferredObjs =[];
		var tableBody = $('tbody');
		//console.log(tableBody);

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

// *** === GET DATA === *** // // // // // // //
//getData();    //19126 ??
		function getData(id){
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

		// UPDATES TOP 3 NEXT TO ICON IMAGE =D
		function statUpdate(type){
console.log("Inside statUpdate()");
			if(type == 'obs'){
				//1ST PLACE
				var placeTitleLong = deferredObjs[0].title;
				var placeTitle = placeTitleLong.split(",");
				//$('.first .title').html(deferredObjs[0].title);
				$('.first .title').html(placeTitle[0]);
				$('.first .stat').html(deferredObjs[0].observations);

				// 2ND PLACE
				var placeTitleLong2 = deferredObjs[1].title;
				var placeTitle2 = placeTitleLong2.split(",");
				//$('.second  .title').html(deferredObjs[1].title);
				$('.second  .title').html(placeTitle2[0]);
				$('.second .stat').html(deferredObjs[1].observations);

				// 3RD PLACE
				var placeTitleLong3 = deferredObjs[2].title;
				var placeTitle3 = placeTitleLong3.split(",");
				//$('.third  .title').html(deferredObjs[2].title);
				$('.third  .title').html(placeTitle3[0]);
				$('.third .stat').html(deferredObjs[2].observations);

				$('.icon-title-name').html('Observations');
			}
			if(type == 'spec'){
				//1ST PLACE
				var placeTitleLong = deferredObjs[0].title;
				var placeTitle = placeTitleLong.split(",");
				$('.first .title').html(placeTitle[0]);
				$('.first .stat').html(deferredObjs[0].species);

				// 2ND PLACE
				var placeTitleLong2 = deferredObjs[1].title;
				var placeTitle2 = placeTitleLong2.split(",");
				$('.second  .title').html(placeTitle2[0]);
				$('.second .stat').html(deferredObjs[1].species);

				// 3RD PLACE
				var placeTitleLong3 = deferredObjs[2].title;
				var placeTitle3 = placeTitleLong3.split(",");
				$('.third  .title').html(placeTitle3[0]);
				$('.third .stat').html(deferredObjs[2].species);

				$('.icon-title-name').html('Species');
			}
			if(type == 'ppl'){
				//1ST PLACE
				var placeTitleLong = deferredObjs[0].title;
				var placeTitle = placeTitleLong.split(",");
				$('.first .title').html(placeTitle[0]);
				$('.first .stat').html(deferredObjs[0].people);

				// 2ND PLACE
				var placeTitleLong2 = deferredObjs[1].title;
				var placeTitle2 = placeTitleLong2.split(",");
				$('.second  .title').html(placeTitle2[0]);
				$('.second .stat').html(deferredObjs[1].people);

				// 3RD PLACE
				var placeTitleLong3 = deferredObjs[2].title;
				var placeTitle3 = placeTitleLong3.split(",");
				$('.third  .title').html(placeTitle3[0]);
				$('.third .stat').html(deferredObjs[2].people);

				$('.icon-title-name').html('People');
			}
			
		}
// *** === END GET DATA === *** // // // // // // //


		// SORTING BY CATEGORY =D
		function processObs(arr){ //sorts by observation #
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

		function processSpec(arr){ //sorts by species #
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

		var processPeople = function(arr){ //sorts by people #
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

		}
		var processTitle = function(arr){ //sorts by title
			
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

// *** === START PROJECT === *** // // // // // // //

		// START =D  >> CALL finalResults();  
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

				$('.icon-title-name').html('Observations');
		});

		// ajax >> wp-content =D
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
								$('.first .title').html(placeTitle[0]);
								$('.first .stat').html(deferredObjs[0].observations);

								//2ND PLACE
								var placeTitleLong2 = deferredObjs[1].title;
								var placeTitle2 = placeTitleLong2.split(",");
								$('.second  .title').html(placeTitle2[0]);
								$('.second .stat').html(deferredObjs[1].observations);

								//3RD PLACE
								var placeTitleLong3 = deferredObjs[2].title;
								var placeTitle3 = placeTitleLong3.split(",");
								$('.third  .title').html(placeTitle3[0]);
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

// *** === END PROJECT === *** // // // // // // //


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

		// second
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
		//	console.log('HERE');
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
























