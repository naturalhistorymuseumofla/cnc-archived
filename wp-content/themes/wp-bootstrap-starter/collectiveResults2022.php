<?php
/* 
 *   Template Name: Collective-Results-2022
 */
get_header();
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
  margin-top: 15px;
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
	h2 { font-size: 2.1rem; }
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
     
		</div>
		<div class="row">
			<!-- LIST -->
			<div class="container mt-4 table-responsive">
      <table class="table " id="table">
					<thead style="border-left: none; border-right: none;">
						<tr>
							<th class="srt-btn-header-city srt-btn-header-city-list" id="titleHeader">City</th>
							<th class="srt-btn-header-observations srt-btn-header-observations-list observation" id="obsHeader">Observations</th>
							<th class="srt-btn-header-species srt-btn-header-species-list" id="speciesHeader">Species</th>
							<th class="srt-btn-header-people srt-btn-header-people-list" id="peopleHeader">People</th>
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


// GLOBALS
var statIcons = [
	"../wp-content/uploads/2018/08/observations-icon-150x150.png",
	"../wp-content/uploads/2018/08/species-icon-150x150.png",
	"../wp-content/uploads/2018/08/people-icon-150x150.png"
];
var statIcon = document.getElementsByClassName('stat-icon')[0]; 
const obsButton = document.getElementById('obsHeader');
const speciesButton = document.getElementById('speciesHeader');
const peopleButton = document.getElementById('peopleHeader');
const cityButton = document.getElementById('titleHeader');

var results = [
  {"city":"Abbotsford, British Columbia, Canada","observations":"1,605","species":420,"people":45},{"city":"Abilene, Texas, USA","observations":"1,887","species":493,"people":50},{"city":"Acuña, Coahuila, México","observations":160,"species":111,"people":13},{"city":"Adelaide, South Australia, Australia","observations":"5,291","species":"1,059","people":186},{"city":"Agiabampo, Sonora, México","observations":3,"species":3,"people":1},{"city":"Aguascalientes, Aguascalientes, México","observations":223,"species":107,"people":19},{"city":"Ahome, Sinaloa, México","observations":386,"species":215,"people":17},{"city":"Alachua County, Florida, USA","observations":"3,930","species":"1,099","people":173},{"city":"Albert County, New Brunswick, Canada","observations":50,"species":26,"people":8},{"city":"Albuquerque, New Mexico, USA","observations":"13,319","species":"1,590","people":420},{"city":"Almería, Andalucía, Spain","observations":"1,519","species":815,"people":14},{"city":"Almirante Brown, Avellaneda, Berazategui, Florencio Varela, Esteban Echeverría, Lomas de Zamora, Lanús, Quilmes y San Vicente, Buenos Aires, Argentina","observations":894,"species":378,"people":38},{"city":"Alta Floresta e região, Mato Grosso, Brasil","observations":215,"species":169,"people":7},{"city":"Amanalco de Becerra, Estado de México, México","observations":620,"species":323,"people":4},{"city":"Amarillo, Texas, USA","observations":557,"species":250,"people":25},{"city":"Ángel R. Cabada, Veracruz, México","observations":0,"species":0,"people":0},{"city":"Apaxco, Apaxco, México","observations":147,"species":50,"people":11},{"city":"Arrecife Alacranes, Yucatán, México","observations":0,"species":0,"people":0},{"city":"Asheville, North Carolina, USA","observations":"7,136","species":"1,713","people":674},{"city":"Asunción, Central, Paraguay","observations":0,"species":0,"people":0},{"city":"Atenco, Estado de México, México","observations":292,"species":70,"people":4},{"city":"Athens, Athens, Greece","observations":425,"species":270,"people":44},{"city":"Atlanta, Georgia, USA","observations":"6,561","species":"1,733","people":503},{"city":"Austin Metro Area, Texas, USA","observations":"19,480","species":"2,872","people":"1,145"},{"city":"Badajoz, Extremadura, Spain","observations":0,"species":0,"people":0},{"city":"Bahía Blanca, Cabildo, Buenos Aires, Argentina","observations":22,"species":17,"people":3},{"city":"Baltimore Metropolitan Area, Maryland, USA","observations":"7,890","species":"1,393","people":709},{"city":"Bathurst, New Brunswick, Canada","observations":538,"species":226,"people":25},{"city":"Baton Rouge, Louisiana, USA","observations":"15,100","species":"2,436","people":398},{"city":"Berlin, Berlin, Germany","observations":"4,748","species":868,"people":105},{"city":"Birmingham & Black Country, West Midlands, UK","observations":"12,687","species":"1,211","people":163},{"city":"Blacksburg, Virginia, USA","observations":384,"species":187,"people":42},{"city":"Bloemfontein, Free State, South Africa","observations":614,"species":247,"people":25},{"city":"Boca Raton, Florida, USA","observations":162,"species":99,"people":19},{"city":"Bocas del Toro, Bocas del Toro, Panama","observations":937,"species":542,"people":28},{"city":"Bogotá, Cundinamarca, Bogotá D.C., Colombia","observations":"5,301","species":839,"people":236},{"city":"Boise, Idaho, USA","observations":"2,246","species":558,"people":143},{"city":"Bolton, Vermont , USA","observations":468,"species":163,"people":16},{"city":"Bonner County, Idaho, USA","observations":"1,684","species":465,"people":84},{"city":"Botswana Central, Botswana, Botswana","observations":799,"species":237,"people":2},{"city":"Botswana South, Botswana, Botswana","observations":0,"species":0,"people":0},{"city":"Boundary County, Idaho, USA","observations":6,"species":6,"people":2},{"city":"Brandon, Manitoba, Canada","observations":364,"species":117,"people":21},{"city":"Brasília e Região, Distrito Federal, Brasil","observations":"2,154","species":569,"people":167},{"city":"Bregenz, Vorarlberg, Austria","observations":13,"species":12,"people":6},{"city":"Brighton, Sussex, UK","observations":"7,097","species":"1,340","people":175},{"city":"Bristol and Bath City Region, Somerset and South Gloucestershire, UK","observations":"7,970","species":"1,290","people":392},{"city":"Brno, Jihomoravský kraj, Czech Republic","observations":"5,934","species":"1,013","people":247},{"city":"Bryan/College Station, Texas, USA","observations":"2,743","species":826,"people":123},{"city":"Bucaramanga, Santander, Colombia","observations":"8,399","species":"1,328","people":419},{"city":"Bulawayo, Bulawayo, Zimbabwe","observations":946,"species":384,"people":13},{"city":"Burgos, Burgos, Castile and León, Spain","observations":0,"species":0,"people":0},{"city":"Cacahoatán, Cacahotán, Chiapas, México","observations":183,"species":84,"people":9},{"city":"Cajamarca, Cajamarca, Perú","observations":"1,089","species":391,"people":45},{"city":"Calgary Metropolitan Region, Alberta, Canada","observations":"17,317","species":930,"people":410},{"city":"Cambridge, Ontario, Canada","observations":"2,019","species":464,"people":131},{"city":"Cancún, Quintana Roo, México","observations":180,"species":133,"people":16},{"city":"Cape Breton Regional Municipality, Nova Scotia, Canada","observations":"1,446","species":337,"people":21},{"city":"Cape Charles, Virginia, USA","observations":392,"species":284,"people":17},{"city":"Cape Town, Western Cape, South Africa","observations":"66,144","species":"4,388","people":"1,682"},{"city":"Carazo, Carazo, Nicaragua","observations":224,"species":60,"people":4},{"city":"Cardiff, Newport and Gwent, Wales, UK","observations":"1,284","species":487,"people":81},{"city":"Casa de Piedra, La Pampa, Argentina","observations":0,"species":0,"people":0},{"city":"Catania, Sicily, Italy","observations":13,"species":3,"people":4},{"city":"Celestún, Yucatán, México","observations":18,"species":15,"people":3},{"city":"Central Taiwan, Taiwan, Taiwan","observations":"1,722","species":837,"people":200},{"city":"České Budějovice, South Bohemia, Czech Republic","observations":"1,841","species":539,"people":82},{"city":"Charlotte, North Carolina, USA","observations":"2,956","species":843,"people":357},{"city":"Charlottesville, Virginia, USA","observations":"2,020","species":690,"people":217},{"city":"Charlottetown, Prince Edward Island, Canada","observations":282,"species":149,"people":8},{"city":"Chattanooga, Tennessee, USA","observations":"3,077","species":"1,162","people":231},{"city":"Chelyabinsk, Chelyabinsk Oblast, Russia","observations":"4,500","species":456,"people":17},{"city":"Chetumal, Quintana Roo, México","observations":42,"species":35,"people":28},{"city":"Chiayi, Yunlin, Taiwan, Taiwan","observations":"19,297","species":"2,598","people":209},{"city":"Chicago Metro, Illinois, Wisconsin, Indiana, USA","observations":"9,209","species":"1,311","people":874},{"city":"Chihuahua, Chihuahua, México","observations":243,"species":142,"people":10},{"city":"Chilliwack, British Columbia, Canada","observations":741,"species":343,"people":38},{"city":"Chiriquí , Chiriquí , Panama","observations":"5,559","species":"1,685","people":142},{"city":"Chur, Chur, Switzerland","observations":"10,404","species":905,"people":335},{"city":"Cincinnati, Ohio, USA","observations":"3,228","species":800,"people":196},{"city":"City of Johannesburg, GT, ZA; Ekurhuleni, GT, ZA; Sedibeng, GT, ZA; West Rand, GT, ZA, Gauteng, South Africa","observations":"1,212","species":487,"people":69},{"city":"City of Port Coquitlam, Coquitlam, Port Moody, British Columbia, Canada","observations":"2,790","species":628,"people":129},{"city":"Ciudad Autónoma de Buenos Aires, Ciudad Autónoma de Buenos Aires, Argentina","observations":913,"species":377,"people":38},{"city":"Ciudad de México, Ciudad de México, México","observations":"8,450","species":"1,514","people":440},{"city":"Ciudad del Carmen y sistema de localidades en el Área Natural Protegida de Flora y Fauna Laguna de Términos (ANP FFLT), Carmen, Campeche, México","observations":"1,898","species":364,"people":78},{"city":"Cleveland-Akron-Canton-Toledo, Ohio, Ohio, USA","observations":"37,368","species":"1,467","people":"1,088"},{"city":"Cochabamba, Cochabamba, Bolivia","observations":176,"species":103,"people":37},{"city":"Cocle, Cocle, Panama","observations":559,"species":356,"people":63},{"city":"Colima- VIlla de Álvarez, Colima / Colima, México","observations":77,"species":67,"people":6},{"city":"Colmenar Viejo, Madrid, Spain","observations":"4,713","species":620,"people":29},{"city":"Colon, Colón, Panama","observations":435,"species":281,"people":32},{"city":"Colorado Springs, Colorado, Colorado, USA","observations":759,"species":296,"people":80},{"city":"Columbus (Central Ohio), Ohio, USA","observations":"1,669","species":592,"people":348},{"city":"Comarca Embera Wounaan, Comarca Embera Wounaan, Panama","observations":2,"species":2,"people":2},{"city":"Comarca Guna Yala, Guna Yala, Panama","observations":11,"species":10,"people":1},{"city":"Comarca Ngäbe Bugle, Comarca Ngäbe Bugle, Panama","observations":1,"species":1,"people":1},{"city":"Copalita, Oaxaca, México","observations":49,"species":33,"people":4},{"city":"Copenhagen, Denmark, Denmark","observations":"1,951","species":646,"people":142},{"city":"Córdoba, Córdoba, Argentina","observations":31,"species":25,"people":9},{"city":"Corpus Christi & Sinton, Texas, USA","observations":674,"species":365,"people":58},{"city":"Corrientes, San Cosme, Corrientes, Argentina","observations":31,"species":25,"people":3},{"city":"Cosalá, Sinaloa, México","observations":"10,879","species":"1,695","people":106},{"city":"Coventry, West Midlands, UK","observations":"1,030","species":369,"people":54},{"city":"Coyotepec, Estado de México, México","observations":895,"species":313,"people":12},
  {"city":"Coyotepec, Teoloyucan y Huehuetoca, Estado de México, México","observations":"1,034","species":345,"people":24},{"city":"Cranbrook, Kimberley, British Columbia, Canada","observations":820,"species":297,"people":42},{"city":"Cuautitlán Izcalli, Estado de México, México","observations":483,"species":173,"people":20},{"city":"Cuernavaca, Morelos y área metropolitana, Morelos, México","observations":"4,368","species":"1,342","people":187},{"city":"Culiacan, Sinaloa, México","observations":"11,426","species":"1,281","people":240},{"city":"Dallas/Fort Worth, Texas, USA","observations":"42,398","species":"3,417","people":"1,324"},{"city":"Darien, Darien, Panama","observations":14,"species":13,"people":4},{"city":"Davao City, Davao del Sur, Philippines","observations":"3,515","species":738,"people":73},{"city":"Delicias/ Meoqui, Chihuahua, México","observations":669,"species":286,"people":8},{"city":"Delta, British Columbia, Canada","observations":"1,724","species":543,"people":39},{"city":"Denver-Boulder, Colorado, USA","observations":"3,007","species":631,"people":366},{"city":"Des Moines, Iowa, USA","observations":72,"species":52,"people":26},{"city":"Districts of Johor Bahru, Kulai, and Pontian, Johor, Malaysia","observations":727,"species":364,"people":26},{"city":"Dos Bocas, Tabasco, México","observations":2,"species":2,"people":1},{"city":"Dresden, Saxony, Germany","observations":424,"species":236,"people":27},{"city":"Duval County, Florida, USA","observations":388,"species":276,"people":67},{"city":"Edinburgh, Scotland","observations":"1,106","species":448,"people":101},{"city":"Edmonton, Alberta, Canada","observations":"1,263","species":377,"people":70},{"city":"Ekaterinburg, Sverdlovsk Oblast, Russia","observations":"4,703","species":602,"people":46},{"city":"El Álamo (x), Madrid, Spain","observations":"1,026","species":244,"people":7},{"city":"El Paso, Texas, USA","observations":"2,698","species":570,"people":220},{"city":"El Salvador, San Salvador, El Salvador","observations":"1,000","species":456,"people":69},{"city":"Ensenada, Baja California, México","observations":"7,884","species":"1,131","people":61},{"city":"Erie, Pennsylvania, USA","observations":"2,450","species":580,"people":200},{"city":"Esperanza, Santa Fé, Argentina","observations":318,"species":182,"people":5},{"city":"eThekwini Municipality, Kwa-Zulu Natal, South Africa","observations":"12,895","species":"2,180","people":131},{"city":"Eugene/Springfield, Oregon, USA","observations":"3,561","species":732,"people":282},{"city":"Fairfield and Westchester County, Connecticut and New York, USA","observations":"2,664","species":699,"people":333},{"city":"Formosa, Formosa, Argentina","observations":156,"species":98,"people":2},{"city":"Fort Collins, Colorado, USA","observations":641,"species":276,"people":96},{"city":"Fort Wayne, Indiana, USA","observations":"1,135","species":378,"people":135},{"city":"Francistown & NE, North East District, Botswana","observations":0,"species":0,"people":0},{"city":"Frankfurt am Main, Hessen, Germany","observations":"3,153","species":884,"people":59},{"city":"Gaborone & SE, Botswana, Botswana","observations":2,"species":2,"people":1},{"city":"Galápagos, Galápagos, Ecuador","observations":24,"species":20,"people":4},{"city":"GAM, San José, Costa Rica","observations":"2,800","species":926,"people":137},{"city":"Garden Route, Western Cape, South Africa","observations":"16,151","species":"2,757","people":273},{"city":"Geelong, Victoria, Australia","observations":"2,652","species":954,"people":86},{"city":"General Las Heras, Buenos Aires, Argentina","observations":29,"species":22,"people":3},{"city":"General Roca, Catriel, Río Negro, Argentina","observations":135,"species":97,"people":5},{"city":"General San Martín, Merlo, Moreno, Morón, Tres de Febrero y La Matanza, Buenos Aires, Argentina","observations":49,"species":36,"people":23},{"city":"Genova, Genova, Italy","observations":63,"species":57,"people":22},{"city":"Gesäuse, Styria, Austria","observations":"1,338","species":458,"people":24},{"city":"Glasgow, Scotland","observations":"1,863","species":553,"people":94},{"city":"Gloucestershire, Gloucestershire, UK","observations":544,"species":251,"people":71},{"city":"Görlitz, Saxony, Germany","observations":602,"species":313,"people":20},{"city":"Grande Curitiba, Paraná, Brasil","observations":"2,355","species":704,"people":118},{"city":"Grande Porto Alegre, Rio Grande do Sul, Brasil","observations":52,"species":48,"people":17},{"city":"Grande Rio e Baía de Guanabara, Rio de Janeiro, Brasil","observations":697,"species":365,"people":71},{"city":"Graz, Styria, Austria","observations":"16,844","species":"2,774","people":191},{"city":"Greater Boston, Massachusetts, USA","observations":"46,896","species":"2,731","people":"1,990"},{"city":"Greater Burlington, Vermont , USA","observations":"3,248","species":690,"people":250},{"city":"Greater Lansing Area, Michigan, USA","observations":932,"species":395,"people":68},{"city":"Greater Manhattan Area, Kansas, USA","observations":116,"species":88,"people":29},{"city":"Greater Melbourne, Victoria, Australia","observations":"12,599","species":"2,035","people":603},{"city":"Greater Portland-Vancouver Metro Area, Oregon, USA","observations":"3,512","species":829,"people":511},{"city":"Greater Sydney, New South Wales, Australia","observations":"2,911","species":"1,333","people":183},{"city":"Greater Vancouver, British Columbia, Canada","observations":"3,120","species":828,"people":355},{"city":"Greensboro, North Carolina, USA","observations":"1,874","species":710,"people":291},{"city":"Guadalix de la Sierra, Madrid, Spain","observations":922,"species":295,"people":34},{"city":"Guadarrama, Madrid, Spain","observations":215,"species":122,"people":13},{"city":"Guanajuato, Guanajuato, México","observations":31,"species":24,"people":8},{"city":"Guatemala, Guatemala","observations":"2,962","species":930,"people":280},{"city":"Guimarães, Braga, Portugal","observations":445,"species":200,"people":160},{"city":"Halifax Regional Municipality, Nova Scotia, Canada","observations":"5,909","species":888,"people":181},{"city":"Halle (Saale), Saxony-Anhalt, Germany","observations":165,"species":116,"people":14},{"city":"Hamburg, Hamburg, Germany","observations":512,"species":231,"people":36},{"city":"Hamilton, Ontario, Canada","observations":"2,102","species":646,"people":96},{"city":"Hampton Roads, Virginia, USA","observations":"2,618","species":841,"people":351},{"city":"Harare, Harare, Zimbabwe","observations":425,"species":247,"people":11},{"city":"Hawke's Bay, Hawke's Bay, New Zealand","observations":"1,086","species":395,"people":37},{"city":"Herrera, Herrera, Panama","observations":647,"species":227,"people":63},{"city":"Hollywood, Florida, USA","observations":"2,593","species":876,"people":101},{"city":"Hong Kong SAR, Hong Kong SAR, China","observations":"33,118","species":"4,355","people":723},{"city":"Honolulu, Hawaii, USA","observations":"1,318","species":552,"people":125},{"city":"Houston, Galveston, Texas, USA","observations":"31,676","species":"3,431","people":"1,567"},{"city":"Hsinchu, Taiwan, Taiwan","observations":"7,616","species":"1,778","people":141},{"city":"Huichapan, Hidalgo, México","observations":334,"species":154,"people":25},{"city":"Indianapolis, Indiana, USA","observations":"5,080","species":954,"people":258},{"city":"Ingeniero Juárez, Formosa, Argentina","observations":45,"species":36,"people":1},{"city":"Innsbruck Stadt und Land, Tyrol, Austria","observations":"2,080","species":730,"people":30},{"city":"Iowa City, Iowa, USA","observations":521,"species":187,"people":50},{"city":"Ipoh, Perak , Malaysia","observations":4,"species":4,"people":2},{"city":"Irkutsk, Irkutsk Oblast, Russia","observations":"1,636","species":514,"people":20},{"city":"Ithaca, New York, USA","observations":"1,596","species":563,"people":172},{"city":"Jeju Island, Jeju Island, South Korea","observations":"1,175","species":294,"people":39},{"city":"José C. Paz, Malvinas Argentinas, San Fernando, San Isidro, San Miguel, Tigre y Vicente López, Buenos Aires, Argentina","observations":64,"species":50,"people":20},{"city":"Kansas City, Missouri, USA","observations":"1,919","species":643,"people":229},{"city":"Kaohsiung, Taiwan, Taiwan","observations":"2,438","species":866,"people":131},{"city":"Karlovac, Karlovačka županija, Croatia","observations":269,"species":195,"people":2},{"city":"Kazan, Republic of Tatarstan, Russia","observations":"1,521","species":309,"people":24},{"city":"Kelowna, Vernon, British Columbia, Canada","observations":"2,515","species":597,"people":121},{"city":"Khanty-Mansiysk, Khanty-Mansi Autonomous Okrug, Russia","observations":"1,266","species":240,"people":12},{"city":"Kiel, Schleswig-Holstein, Germany","observations":"4,997","species":"1,023","people":150},{"city":"Kimberley, Northern Cape, South Africa","observations":444,"species":197,"people":8},{"city":"Kirikiriroa/Hamilton, Waikato, New Zealand","observations":393,"species":255,"people":19},{"city":"Klagenfurt, Carinthia, Austria","observations":301,"species":179,"people":9},{"city":"Knoxville, Tennessee, USA","observations":"3,233","species":917,"people":352},{"city":"Krems Wachau, Lower Austria, Austria","observations":"1,493","species":591,"people":34},{"city":"Kuala Lumpur, Kuala Lumpur, Malaysia","observations":"2,038","species":698,"people":85},{"city":"La Banda, Santiago del Estero, Argentina","observations":0,"species":0,"people":0},{"city":"La Cruz de Elota, Sinaloa, México","observations":"5,763","species":"1,023","people":224},{"city":"La Paz, La Paz, Bolivia","observations":"137,345","species":"5,320","people":"4,296"},{"city":"La Plata, Magdalena, Punta Indio, Buenos Aires, Argentina","observations":328,"species":199,"people":21},{"city":"La Rioja, La Rioja, Argentina","observations":0,"species":0,"people":0},
  {"city":"Lake Charles, Louisiana, USA","observations":111,"species":547,"people":72},{"city":"Lancashire, Lancashire, UK","observations":"3,845","species":979,"people":115},{"city":"Larissa, Larissa, Greece","observations":196,"species":134,"people":36},{"city":"Lecce, Puglia, Italy","observations":13,"species":1,"people":1},{"city":"Leipzig, Saxony, Germany","observations":221,"species":138,"people":30},{"city":"Lethbridge, Alberta, Canada","observations":392,"species":164,"people":23},{"city":"Lewiston Auburn, Maine, USA","observations":48,"species":39,"people":7},{"city":"Lexington - Fayette County, Kentucky, USA","observations":"2,601","species":845,"people":145},{"city":"Lexington, Massachusetts, USA","observations":920,"species":339,"people":50},{"city":"Lincoln (Lancaster County), Nebraska, USA","observations":"1,758","species":612,"people":79},{"city":"Lincoln County, Montana, USA","observations":86,"species":58,"people":8},{"city":"Linz, Upper Austria, Austria","observations":738,"species":400,"people":33},{"city":"Litoral do Pará, Pará, Brasil","observations":12,"species":8,"people":1},{"city":"Liverpool City Region, England, UK","observations":"7,747","species":"1,106","people":120},{"city":"Loja, Loja, Ecuador","observations":"2,488","species":400,"people":48},{"city":"London, Greater London, UK","observations":"4,436","species":"1,087","people":337},{"city":"Los Angeles County, California, USA","observations":"18,907","species":"2,575","people":"1,368"},{"city":"Los Santos, Los Santos, Panama","observations":37,"species":25,"people":12},{"city":"Louisville Metro, Kentucky, USA","observations":"2,338","species":691,"people":137},{"city":"Lower Rio Grande Valley, Texas, USA","observations":"10,948","species":"2,152","people":187},{"city":"Lubbock, Post, Crosbyton, Texas, USA","observations":"3,828","species":815,"people":60},{"city":"Luxembourg, Luxembourg","observations":"7,638","species":"1,340","people":401},{"city":"Lviv, Lvivska, Ukraine","observations":93,"species":59,"people":19},{"city":"Macachín, La Pampa, Argentina","observations":0,"species":0,"people":0},{"city":"Macao SAR, Macao SAR, China","observations":"1,201","species":518,"people":46},{"city":"Madison County, Kentucky, USA","observations":"2,031","species":804,"people":51},{"city":"Madison Metro Area, Wisconsin, USA","observations":"2,004","species":483,"people":206},{"city":"Madrid, Madrid, Spain","observations":404,"species":175,"people":9},{"city":"Manaus e Região, Amazonas, Brasil","observations":109,"species":68,"people":9},{"city":"Manchester, Greater Manchester, UK","observations":"2,250","species":523,"people":111},{"city":"Manduria, Puglia, Italy","observations":333,"species":86,"people":7},{"city":"Manzanillo-Armería, Colima / Manzanillo, México","observations":198,"species":106,"people":7},{"city":"Marine Protecte Area Regno di Nettuno (Procida, Ischia, Casamicciola Terme, Lacco Ameno, Forio, Serrara Fontana, Barano), Napoli, Italy","observations":192,"species":57,"people":8},{"city":"Marine Protected Area Punta Campanella (Massa Lubrense, Sorrento, Sant'Agnello, Piano di Sorrento, Vico Equense, Meta e Positano), Campania, Italy","observations":202,"species":5,"people":1},{"city":"Martinsville, Virginia, USA","observations":420,"species":258,"people":10},{"city":"Maui, Hawaii, USA","observations":193,"species":138,"people":33},{"city":"Mazatlán, Sinaloa, México","observations":"22,490","species":"2,039","people":348},{"city":"Memphis, Tennessee, Mississippi, Arkansas, USA","observations":"1,823","species":710,"people":113},{"city":"Mendoza, Mendoza, Argentina","observations":215,"species":145,"people":11},{"city":"Mercedes, Buenos Aires, Argentina","observations":10,"species":9,"people":3},{"city":"Mesorregião Oeste Catarinense, Santa Catarina, Brasil","observations":8,"species":8,"people":3},{"city":"Messina, Sicily, Italy","observations":"1,344","species":212,"people":31},{"city":"Metro Phoenix, Arizona, USA","observations":"17,785","species":"1,124","people":432},{"city":"Metropolitan Area of the Aburrá Valley, Antioquia, Colombia","observations":"10,218","species":"1,842","people":229},{"city":"Miguel Riglos, La Pampa, Argentina","observations":0,"species":0,"people":0},{"city":"Milazzo, Sicily, Italy","observations":"10,180","species":"1,502","people":242},{"city":"Milwaukee, Wisconsin, USA","observations":"1,630","species":491,"people":113},{"city":"Minneapolis-St. Paul, Minnesota, USA","observations":"5,065","species":779,"people":400},{"city":"Montecarlo, Misiones, Argentina","observations":49,"species":33,"people":5},{"city":"Monterrey, Nuevo León, México","observations":"21,865","species":"2,676","people":"1,008"},{"city":"Montréal, Québec, Canada","observations":"18,011","species":"1,162","people":749},{"city":"Morelia y Tarimbaro, Michoacán, México","observations":"3,554","species":"1,079","people":87},{"city":"Moscow, Moscow, Russia","observations":"10,604","species":777,"people":264},{"city":"Nanaimo, British Columbia, Canada","observations":"3,253","species":920,"people":112},{"city":"Napoli, Campania, Italy","observations":328,"species":150,"people":30},{"city":"Nashville, Tennessee, USA","observations":"2,243","species":840,"people":232},{"city":"Naucalpan, Estado de México, México","observations":93,"species":60,"people":15},{"city":"Navalcarnero (x), Madrid, Spain","observations":"1,026","species":244,"people":7},{"city":"Nelson Mandela Bay, Eastern Cape, South Africa","observations":"1,870","species":737,"people":22},{"city":"Nelson, British Columbia, Canada","observations":522,"species":309,"people":43},{"city":"Neuquén, Neuquén, Argentina","observations":7,"species":7,"people":2},{"city":"Neusiedler See/Seewinkel, Burgenland, Austria","observations":"1,370","species":537,"people":44},{"city":"New York City, New York, USA","observations":"16,295","species":"1,724","people":838},{"city":"Ngāmotu/New Plymouth, Taranaki, New Zealand","observations":"3,038","species":965,"people":31},{"city":"Nizhny Novgorod, Nizhny Novgorod Oblast, Russia","observations":"1,758","species":408,"people":37},{"city":"Norfolk (Madison County), Nebraska, USA","observations":0,"species":0,"people":0},{"city":"North East England, North East England, UK","observations":"4,038","species":"1,043","people":165},{"city":"North Platte (Lincoln County), Nebraska, USA","observations":29,"species":24,"people":3},{"city":"North Taiwan, Taiwan, Taiwan","observations":"8,063","species":"1,679","people":393},{"city":"Northcentral PA Region, Pennsylvania, USA","observations":152,"species":111,"people":23},{"city":"Northeast Tennessee, Tennessee, USA","observations":"3,307","species":984,"people":148},{"city":"Northern Botswana, Botswana, Botswana","observations":469,"species":303,"people":2},{"city":"Nottingham, Nottinghamshire, UK","observations":"2,943","species":792,"people":65},{"city":"Novosibirsk, Novosibirsk Oblast, Russia","observations":"3,325","species":541,"people":76},{"city":"Oberá, Misiones, Argentina","observations":38,"species":32,"people":4},{"city":"Omaha Metro Area, Nebraska, USA","observations":850,"species":328,"people":71},{"city":"Omsk, Omsk Oblast, Russia","observations":241,"species":120,"people":13},{"city":"Orange County (Orlando), Florida, USA","observations":"3,493","species":"1,042","people":247},{"city":"Orange County, California, USA","observations":"1,741","species":669,"people":240},{"city":"Osnabrück, Niedersachsen, NDS, Germany","observations":615,"species":295,"people":17},{"city":"Ōtautahi/Christchurch, Canterbury, New Zealand","observations":"9,573","species":"1,543","people":164},{"city":"Ottawa, Gatineau, Ontario, Canada","observations":"4,896","species":915,"people":339},{"city":"Overstrand, Western Cape, South Africa","observations":"19,832","species":"2,308","people":258},{"city":"Palouse Region, Washington/Idaho, USA","observations":"1,751","species":506,"people":147},{"city":"Pamplona / Iruña, Navarra, Spain","observations":"5,252","species":"1,025","people":244},{"city":"Panama Oeste, Panama Oeste, Panama","observations":"1,229","species":668,"people":86},{"city":"Panamá, Panamá, Panama","observations":"4,955","species":"1,325","people":358},{"city":"Paraná, Entre Ríos, Argentina","observations":75,"species":56,"people":7},{"city":"Paris, Paris - Île de France, France","observations":"5,718","species":"1,401","people":306},{"city":"Pend Oreille County, Washington, USA","observations":52,"species":35,"people":8},{"city":"Pereira, Pereira Municipality, Colombia","observations":"1,145","species":528,"people":58},{"city":"Perm, Perm Krai, Russia","observations":"1,070","species":328,"people":28},{"city":"Petropavlovsk-Kamchatsky, Kamchatka Region, Russia","observations":530,"species":185,"people":14},{"city":"Philadelphia, Pennsylvania, New Jersey, USA","observations":"19,030","species":"2,215","people":876},{"city":"Pierre and Fort Pierre, South Dakota, USA","observations":250,"species":155,"people":5},{"city":"Pioneer Valley, Massachusetts, USA","observations":"1,903","species":718,"people":207},{"city":"Pittsburgh Region, Pennsylvania, USA","observations":"5,834","species":"1,124","people":380},{"city":"Playa del carmen, Solidaridad, México","observations":"1,758","species":529,"people":73},{"city":"Poconé, Mato Grosso, Brasil","observations":434,"species":127,"people":37},{"city":"Port Aransas/Mustang Island, Texas, USA","observations":808,"species":383,"people":33},{"city":"Port Harcourt/Iwofe, Rivers State, Nigeria","observations":385,"species":99,"people":8},{"city":"Prague, Czech Republic, Czech Republic","observations":"12,053","species":"1,473","people":451},{"city":"Providence, Rhode Island, USA","observations":782,"species":355,"people":164},{"city":"PUEBLA, Puebla, México","observations":"1,771","species":690,"people":35},{"city":"Puelén, La Pampa, Argentina","observations":32,"species":22,"people":4},
  {"city":"Puerto Vallarta - Cabo Corrientes - San Sebastian del Oeste - Mascota - Talpa de Allende - Bahía de Banderas, Jalisco, México","observations":380,"species":216,"people":41},{"city":"Querétaro, Cadereyta de Montes/Querétaro, México","observations":11,"species":10,"people":2},{"city":"Querétaro, Querétaro, México","observations":56,"species":49,"people":20},{"city":"Quito, Pichincha, Ecuador","observations":"15,329","species":"1,202","people":254},{"city":"Raleigh, North Carolina, USA","observations":"13,364","species":"2,155","people":815},{"city":"Red Deer Area, Alberta, Canada","observations":"1,282","species":215,"people":19},{"city":"Red Lodge, Montana, USA","observations":499,"species":143,"people":59},{"city":"Redland City, Queensland, Australia","observations":112,"species":90,"people":25},{"city":"Regina and Area, Saskatchewan, Canada","observations":731,"species":209,"people":42},{"city":"Region Marchfeld, Lower Austria, Austria","observations":209,"species":159,"people":10},{"city":"Resistencia y Alrededores , Chaco, Argentina","observations":111,"species":84,"people":1},{"city":"Richmond, British Columbia, Canada","observations":"1,637","species":420,"people":59},{"city":"Richmond, Virginia, USA","observations":"3,262","species":980,"people":304},{"city":"Rio Branco e Leste do Acre, Acre, Brasil","observations":55,"species":41,"people":10},{"city":"Río Grande, Tierra del Fuego, Argentina","observations":23,"species":23,"people":3},{"city":"Rivadavia, Buenos Aires, Argentina","observations":333,"species":177,"people":1},{"city":"Rivadavia, San Juan, Argentina","observations":0,"species":0,"people":0},{"city":"Rochester , New York, USA","observations":331,"species":190,"people":60},{"city":"Rockford, Illinois, USA","observations":"7,369","species":856,"people":208},{"city":"Rosario, San Lorenzo, Santa Fé, Argentina","observations":7,"species":7,"people":3},{"city":"Sacramento, California, USA","observations":"7,067","species":"1,496","people":553},{"city":"Saint John, New Brunswick, Canada","observations":21,"species":18,"people":5},{"city":"Salta, Salta, Argentina","observations":350,"species":263,"people":6},{"city":"Saltillo, Coahuila, México","observations":564,"species":271,"people":25},{"city":"Salzburg, Salzburg, Austria","observations":"12,653","species":"2,272","people":186},{"city":"Samara, Samara Oblast, Russia","observations":120,"species":72,"people":12},{"city":"San Antonio, Texas, USA","observations":"16,785","species":"2,262","people":892},{"city":"San Bernardino, California, USA","observations":"6,961","species":"1,692","people":512},{"city":"San Cristóbal de las Casas, Chiapas, México","observations":"1,079","species":453,"people":30},{"city":"San Diego, California, USA","observations":"21,009","species":"2,644","people":924},{"city":"San Francisco Bay Area, California, USA","observations":"31,227","species":"3,008","people":"2,085"},{"city":"San Francisco de Macoris, Duarte, Republica Dominicana","observations":535,"species":105,"people":13},{"city":"San José Iturbide Guanajuato, Guanajuato, México","observations":123,"species":73,"people":9},{"city":"San José Iturbide Guanajuato, Santa Catarina, San José Iturbide, México","observations":123,"species":73,"people":9},{"city":"San Juan del Sur, Rivas, Nicaragua","observations":1,"species":1,"people":1},{"city":"San Luis Potosí, San Luis Potosi, México","observations":204,"species":84,"people":10},{"city":"San Luis, San Luis, Argentina","observations":0,"species":0,"people":0},{"city":"San Miguel de Tucumán y alrededores (Yerba Buena, Tafi Viejo, Lules), Tucumán, Argentina","observations":779,"species":406,"people":47},{"city":"San Miguel, Corrientes, Argentina","observations":0,"species":0,"people":0},{"city":"San Roque, Corrientes, Argentina","observations":10,"species":10,"people":2},{"city":"San Salvador de Jujuy, Jujuy, Argentina","observations":69,"species":43,"people":7},{"city":"Santa Catarina Guanajuato, Santa Catarina, San José Iturbide, México","observations":7,"species":7,"people":1},{"city":"Santa Fé, Santa Fé, Argentina","observations":751,"species":333,"people":16},{"city":"Santa Rosa, La Pampa, Argentina","observations":10,"species":6,"people":3},{"city":"Santiago de Cali, Valle del Cauca, Colombia","observations":"1,655","species":603,"people":96},{"city":"São Paulo, São Paulo, Brasil","observations":"1,993","species":704,"people":107},{"city":"Sarasota & Manatee County, Florida, USA","observations":"5,931","species":"1,494","people":151},{"city":"Saskatoon and Area, Saskatchewan, Canada","observations":"2,537","species":501,"people":113},{"city":"Savannah, Georgia, USA","observations":"1,678","species":549,"people":106},{"city":"Scottsbluff & Gering (Scotts Bluff County), Nebraska, USA","observations":352,"species":215,"people":11},{"city":"Scranton, Pennsylvania, USA","observations":"1,170","species":512,"people":43},{"city":"Seattle-Tacoma, Washington, USA","observations":"7,705","species":"1,280","people":654},{"city":"Sevilla, Sevilla, Spain","observations":"1,350","species":575,"people":85},{"city":"Shenzhen, Guangdong, China","observations":"19,010","species":"2,491","people":430},{"city":"Siena, Tuscany, Italy","observations":"1,304","species":478,"people":72},{"city":"Sierra de Guadalupe, Estado de México, México","observations":"4,760","species":820,"people":93},{"city":"Sinop e região, Mato Grosso, Brasil","observations":361,"species":155,"people":18},{"city":"Sisal, Sisal, México","observations":282,"species":114,"people":6},{"city":"South Florida, Florida, USA","observations":"11,320","species":"2,116","people":591},{"city":"South Tyrol, South Tyrol, Italy","observations":762,"species":432,"people":57},{"city":"Southcentral PA Region, Pennsylvania, USA","observations":"1,098","species":515,"people":118},{"city":"Southern Overberg, Agulhas Municipality, South Africa","observations":"4,097","species":768,"people":43},{"city":"St Petersburg, St Petersburg, Russia","observations":"2,506","species":384,"people":90},{"city":"St. Augustine, Florida, USA","observations":524,"species":220,"people":94},{"city":"St. Catharines, Ontario, Canada","observations":199,"species":151,"people":16},{"city":"St. John's, Newfoundland, Canada","observations":360,"species":165,"people":22},{"city":"St. Louis, Missouri, USA","observations":"6,699","species":"1,250","people":459},{"city":"St. Pölten Stadt, Lower Austria, Austria","observations":"2,574","species":660,"people":37},{"city":"Stellenbosch, Western Cape, South Africa","observations":"3,478","species":787,"people":96},{"city":"Summerside, Prince Edward Island, Canada","observations":215,"species":140,"people":4},{"city":"Surallah, South Cotabato, Philippines","observations":1,"species":1,"people":1},{"city":"Surrey, British Columbia, Canada","observations":"1,644","species":408,"people":75},{"city":"Swartland Municipal District, Saldanha Bay Municipality & Berg River Municipality, Western Cape, South Africa","observations":"2,299","species":790,"people":69},{"city":"Tagum City, Davao del Norte, Philippines","observations":"10,590","species":654,"people":61},{"city":"Tainan, Taiwan, Taiwan","observations":806,"species":410,"people":71},{"city":"Taitung, Taiwan, Taiwan","observations":579,"species":332,"people":35},{"city":"Tala, Entre Ríos, Argentina","observations":5,"species":5,"people":1},{"city":"Tāmaki Makaurau/Auckland, Auckland, New Zealand","observations":"1,118","species":555,"people":160},{"city":"Tapachula, Tapachula, Chiapas, México","observations":898,"species":390,"people":34},{"city":"Te Whanganui-a-Tara/ Wellington, Wellington, New Zealand","observations":"7,599","species":"1,639","people":125},{"city":"Teoloyucan, Estado de México, México","observations":193,"species":101,"people":9},{"city":"Tepotzotlán, Estado de México, México","observations":541,"species":139,"people":24},{"city":"Tequixquiac, Estado de México, México","observations":53,"species":46,"people":5},{"city":"Thailand, Thailand, Thailand","observations":"7,756","species":"2,109","people":284},{"city":"Thane District, Maharashtra, India","observations":158,"species":108,"people":18},{"city":"The Annapolis Valley, Nova Scotia, Canada","observations":"1,860","species":575,"people":87},{"city":"The Hague, Zuid-Holland, Netherlands","observations":715,"species":478,"people":30},{"city":"Thohoyandou, Limpopo, South Africa","observations":894,"species":296,"people":21},{"city":"Thompson-Nicola, British Columbia, Canada","observations":"1,248","species":317,"people":64},{"city":"Thunder Bay District, Ontario, Canada","observations":698,"species":230,"people":54},{"city":"Toay, La Pampa, Argentina","observations":6,"species":6,"people":2},{"city":"Tokyo, Tokyo, Japan","observations":"2,374","species":674,"people":79},{"city":"Toluca, Estado de México, México","observations":"9,345","species":"1,197","people":93},{"city":"Toronto and Greater Toronto Area, Ontario, Canada","observations":"5,060","species":825,"people":547},{"city":"Torti - Chiman, Panama, Panama","observations":24,"species":24,"people":6},{"city":"Toulouse, Occitanie, France","observations":"5,748","species":999,"people":146},{"city":"Trento, Trentino, Italy","observations":443,"species":144,"people":44},{"city":"Tres Cantos, Madrid, Spain","observations":"1,082","species":331,"people":21},{"city":"Trieste, Friuli Venezia Giulia, Italy","observations":30,"species":28,"people":8},{"city":"Trinitapoli, Barletta-Andria-Trani, Italy","observations":153,"species":39,"people":12},{"city":"Tshwane, Gauteng, South Africa","observations":"4,346","species":956,"people":120},{"city":"Tucson, Arizona, USA","observations":"5,959","species":"1,124","people":403},{"city":"Tyler (including Mineola, Longview, Jacksonville, Palestine and Athens), Texas, USA","observations":"4,863","species":"1,225","people":183},{"city":"Ufa, Republic of Bashkortostan, Russia","observations":900,"species":302,"people":22},
  {"city":"Uherské Hradiště, Kunovice & Staré Město, Zlín, Czech Republic","observations":"1,484","species":312,"people":95},{"city":"Ukraine, Ukraine","observations":"7,867","species":"1,698","people":240},{"city":"Ushuaia, Tierra del Fuego, Argentina","observations":803,"species":175,"people":9},{"city":"Utah's Wasatch, Utah, USA","observations":"5,073","species":"1,053","people":410},{"city":"Valencia de Don Juan, León, Spain","observations":103,"species":63,"people":5},{"city":"Veracruz(Alvarado, Boca del Río, Medellín y Veracruz), Veracruz, México","observations":"4,869","species":994,"people":154},{"city":"Veraguas, Veraguas, Panama","observations":694,"species":500,"people":29},{"city":"Victoria, Sidney, British Columbia, Canada","observations":"7,847","species":"1,368","people":392},{"city":"Villa María, Villa Nueva, Córdoba, Argentina","observations":1,"species":0,"people":1},{"city":"Villa Unión, La Rioja, Argentina","observations":0,"species":0,"people":0},{"city":"Volgograd & Volzhsky, Volgograd Oblast, Russia","observations":"1,804","species":247,"people":15},{"city":"Volusia County, Florida, USA","observations":"1,457","species":547,"people":116},{"city":"Voronezh, Voronezh Oblast, Russia","observations":"1,700","species":314,"people":16},{"city":"Waco, Temple, Belton, Killeen, Gatesville, Hamilton, Texas, USA","observations":"5,013","species":"1,551","people":177},{"city":"Waihōpai/Invercargill, Southland, New Zealand","observations":82,"species":76,"people":9},{"city":"Washington DC Metro area, Washington DC Metro Area, USA","observations":"38,143","species":"2,970","people":"2,114"},{"city":"Wellesley, Massachusetts , USA","observations":296,"species":143,"people":24},{"city":"West Palm Beach, Florida, USA","observations":"1,369","species":406,"people":31},{"city":"Westmorland County, New Brunswick, Canada","observations":760,"species":295,"people":25},{"city":"Whitehorse, Yukon, Canada","observations":115,"species":61,"people":11},{"city":"Wichita Falls and surrounding 10 county region, Texas, USA","observations":"3,794","species":"1,140","people":91},{"city":"Wien, Vienna, Austria","observations":"9,328","species":"1,851","people":242},{"city":"Williams Lake, British Columbia, Canada","observations":449,"species":93,"people":16},{"city":"Wilmington, North Carolina, USA","observations":"3,925","species":"1,118","people":333},{"city":"Winnipeg, Manitoba, Canada","observations":"1,751","species":289,"people":29},{"city":"Yellowknife, Northwest Territories, Canada","observations":70,"species":50,"people":3},{"city":"Yilan, Hualien, Taiwan, Taiwan","observations":"4,874","species":"1,283","people":135},{"city":"York County, New Brunswick, Canada","observations":128,"species":88,"people":30},{"city":"Zagreb, Zagreb, Croatia","observations":231,"species":159,"people":18}
]

var totals = {
  'observations': 1694877,
  'species': 50176,
  'people':67220,
};

// INITIALIZE APP
populateTable();
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
    title.innerHTML = result.city;
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
  people.innerHTML = (totals.people).toLocaleString();
  observations.innerHTML = (totals.observations).toLocaleString();
  species.innerHTML = (totals.species).toLocaleString();
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
function sortCities() {
  results.sort((b, a) => b.city.localeCompare(a.city));
  populateTable();
  toggleButton(cityButton);
}

// EVENT HANDLERS
obsButton.addEventListener('click', sortObservations);
speciesButton.addEventListener('click', sortSpecies);
peopleButton.addEventListener('click', sortPeople);
cityButton.addEventListener('click', sortCities);

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



</script>
<!-- SLICK SLIDER JS //remember to download slick and call it locally -->


<?php get_footer(); ?>


