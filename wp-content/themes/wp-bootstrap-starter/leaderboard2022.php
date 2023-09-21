<?php
/* 
 *   Template Name: Leaderboard-2022
 */
get_header();
$city_results = get_transient('city_results');
function get_results() {
  echo get_transient('city_results');
  die();
}
?>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
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
.icon {
  width:150px; margin:0 auto; height:150px; display:block; max-width: 40vw;
}



.row {
  justify-content: space-evenly;
}

.icon__container {
  max-width: 40vw;
}

/* ============= MEDIA BREAKPOINTS - MOBILE ============== */
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
	.dsk-view{ display: block; }
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
  .city {
  max-width: 25vw;
}
.observation {
  max-width: 25vw;
}
.people {
  max-width: 25vw;
}
.species {
  max-width: 25vw;
}

	tbody > tr:nth-child(1) { background-color:#dae7bf; }
	tbody > tr:nth-child(2) { background-color:#e8f1d8; }
	tbody > tr:nth-child(3) { background-color:#f5f9ee; }
	.mobile-title-header { font-size:1.6rem; }
	.text-middle { text-align: center; vertical-align: middle; color:#8dc248; }
	.mobile-center-result { line-height: 195px; }
	.mobile-center-result-small { line-height: 150px; }
	.mobile-center-place { line-height:35px; }
	.sub-circle { height: 40px; width: 40px; background-color: #fff; border: 2px solid #8dc248; border-radius:50%; margin:0 auto; display:block; }
	.sub-circle-small { height: 30px; width: 30px; background-color: #fff; border: 2px solid #8dc248;
		border-radius:50%; margin:0 auto; display:block; line-height:26px; font-size:16px; }
	.desktop-view {
		display:block;
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

@media (min-width: 300px) {
  .city {
    max-width: 40vw;
  }
  .observation {
    max-width: 20vw;
  }
  .people {
    max-width: 20vw;
  }
  .species {
    max-width: 20vw;
  }
} 
/* ============= MEDIA BREAKPOINTS - DESKTOP ============== */
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
<div class="city-results"></div>


<!-- TITLE -->
<div class="text-center">
  <h1 style="color:black; padding-top:5rem; padding-bottom:0px;">Collective Results 2022</h1>
</div>
<!-- LINE -->
<div class="green-underline-bar" style="width:150px; height:2px; border-bottom: 1px solid #fff; margin:0 auto; display:block; margin-top:-0px;"></div>

<!-- ============ DEKSTOP ============ -->
<section class="desktop-view">
	<div class="td-main-content-wrap dsk-view">
    <div class="container">
			<div class="row">
				<div class="icon__container">
					<div style="width:150px; margin:0 auto; height:150px; display:block;" class="icon">
						<img src="../wp-content/uploads/2018/08/observations-icon-150x150.png" style="">
					</div>
					<h2 class="total-observations" id="totalObservations" style="text-align:center;"></h2>
					<div style="max-width:200px; margin:0 auto; display:block; background-color:#8dc248; text-align: center;">
						<span style="line-height:35px; color:#fff;">Total Observations</span>
					</div>
				</div>
				<div class="icon__container">
					<div style="width:150px; margin:0 auto; height:150px; display:block;" class="icon">
						<img src="../wp-content/uploads/2018/08/species-icon-150x150.png" style="">
					</div>
					<h2 class="total-species 1 stat" id="totalSpecies" style="text-align:center;"></h2>
					<div style="max-width:200px; margin:0 auto; display:block; background-color:#8dc248; text-align: center;">
						<span style="line-height:35px; color:#fff;">Total Species</span>
					</div>
				</div>
				<div class="icon__container">
					<div class="icon">
						<img src="../wp-content/uploads/2018/08/people-icon-150x150.png" style="">
					</div>
					<h2 class="total-people 2 stat" id="totalPeople" style="text-align:center;"></h2>
					<div style="max-width:200px; margin:0 auto; display:block; background-color:#8dc248; text-align: center;">
						<span style="line-height:35px; color:#fff;">Total People</span>
					</div>

				</div>

			</div>
      <p style="padding-top:20px; text-align: center; margin: 1rem 0rem"><i>The unique number of species will be shown at the end of the challenge.</i></p>

		</div>
		<div class="row">
			<!-- LIST -->
			<div class="container mt-4 table-responsive">
				<table class="table " id ="table">
					<thead style="border-left: none; border-right: none;">
						<tr>
							<th class='srt-btn-header-city srt-btn-header-city-list titleHeader'>City</th>
							<th class='srt-btn-header-observations srt-btn-header-observations-list observation' id="obsHeader">Observations</th>
							<th class='srt-btn-header-species srt-btn-header-species-list' id="speciesHeader">Species</th>
							<th class='srt-btn-header-people srt-btn-header-people-list' id='peopleHeader'>People</th>
						</tr>
					</thead>
					<tbody id="tbody"></tbody>
				</table>
			</div>
		</div>
	</div>
</section>


<!-- ================================================================================ -->
<!-- ============================== ALL THE JAVASCRIPT ============================== -->
<!-- ================================================================================ -->
<script type="text/javascript">


// GLOBAS

var response = <?=$city_results?>;
var results = response.results;
var statIcons = [
	"../wp-content/uploads/2018/08/observations-icon-150x150.png",
	"../wp-content/uploads/2018/08/species-icon-150x150.png",
	"../wp-content/uploads/2018/08/people-icon-150x150.png"
];
var statIcon = document.getElementsByClassName('stat-icon')[0]; 
const obsButton = document.getElementById('obsHeader');
const speciesButton = document.getElementById('speciesHeader');
const peopleButton = document.getElementById('peopleHeader');

// INITIALIZE APP
sortSpecies();
updatePlaces();

// POPULATE TABLE
function populateTable() {
  const table = document.getElementById('tbody');
  table.innerHTML = '';
  results.forEach(result => {
    const row = document.createElement('tr');
    const title = document.createElement('td');
    const obs = document.createElement('td');
    const spec = document.createElement('td');
    const ppl = document.createElement('td');
    title.classList.add('city');
    obs.classList.add('observation');
    spec.classList.add('species');
    ppl.classList.add('people');
    title.innerHTML = result.title;
    obs.innerHTML = (result.observations).toLocaleString();
    spec.innerHTML = (result.species).toLocaleString();
    ppl.innerHTML = (result.people).toLocaleString();
    row.append(title, obs, spec, ppl);
    table.append(row);
  });
}

// UPDATE PLACES
function updatePlaces() {
  const people = document.getElementById('totalPeople');
  const observations = document.getElementById('totalObservations');
  const species = document.getElementById('totalSpecies');
  people.innerHTML = (response.totals.people).toLocaleString();
  observations.innerHTML = (response.totals.observations).toLocaleString();
  species.innerHTML = (response.totals.species).toLocaleString();
}

// SORT FUNCTIONS 
function sortObservations() {
  results.sort((b, a) => (a.observations - b.observations));
  populateTable();
  toggleButton(obsButton);
}
function sortSpecies() {
  results.sort((b, a) => (a.species - b.species));
  populateTable();
  toggleButton(speciesButton);
}
function sortPeople() {
  results.sort((b, a) => (a.people - b.people));
  populateTable();
  toggleButton(peopleButton);
}

// EVENT HANDLERS
obsButton.addEventListener('click', sortObservations);
speciesButton.addEventListener('click', sortSpecies);
peopleButton.addEventListener('click', sortPeople);

// UI FUNCTIONS
function toggleButton(button) {
  const buttons = [obsButton, speciesButton, peopleButton];
  buttons.forEach(b => {
    if (b === button) {
      b.classList.add('turn-green');
    } else {
      b.classList.remove('turn-green');
    }
  });
}

var intervalId = window.setInterval(getNewData, 10000);

// UPDATE UI WITH NEW DATA
function getNewData(){
  fetch('http://citynaturechallenge.org/?cnc=1')
  .then( r=>r.json())
  .then(data => {
    var data = JSON.parse(data);
    console.log(`Data retrieved: Response id ${data.totals.observations}`);
    if (!response.totals.observations !== data.totals.observations) {
      response = data;
      results = data.results;
      const currentlySorted = document.getElementsByClassName('turn-green')[0].innerHTML;
      const sort = (currentlySorted === 'Observations') ? sortObservations() :
                   (currentlySorted === 'Species') ? sortSpecies() : 
                   (currentlySorted === 'People') ? sortPeople() : sortObservations();
      populateTable();
      updatePlaces();
      const buttons = [obsButton, speciesButton, peopleButton];
    }
  });   
}


</script>
<!-- SLICK SLIDER JS //remember to download slick and call it locally -->


<?php get_footer(); ?>






