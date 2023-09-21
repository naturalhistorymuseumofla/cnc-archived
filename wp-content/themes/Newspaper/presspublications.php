<?php
/*  ----------------------------------------------------------------------------
    Template Name: press-publications
 */

get_header();
header('Content-type: text/html; charset=utf-8');



//set the template id, used to get the template specific settings - this was the old home.php template
$template_id = 'home';

//prepare the loop variables
global $loop_module_id, $loop_sidebar_position;
$loop_module_id = td_util::get_option('tds_' . $template_id . '_page_layout', 15); //module 1 is default
$loop_sidebar_position = td_util::get_option('tds_' . $template_id . '_sidebar_pos'); //sidebar right is default (empty)

// sidebar position used to align the breadcrumb on sidebar left + sidebar first on mobile issue
$td_sidebar_position = '';
if($loop_sidebar_position == 'sidebar_left') {
	$td_sidebar_position = 'td-sidebar-left';
}
?>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<style type="text/css">
		table th{
			border: none;
		}
		table td{
			border: none;
		}

		table:not(th):hover{
			cursor: pointer;
		}
		
		td:nth-child(n1 + 2){
			background-color: black;
			padding-left: 100px;
		}

		.publication {
			background-color: black;
		}
		#presswrap {
			max-width: 1068px;
			padding-left: 0;
			border-bottom: 1px solid #ccdc35;
		}

		#presswrap a{
			text-decoration: none;
			color: Black;
		}

		#presswrap a:hover{
			text-decoration: none;
			color: white;
		}

		#press-row {
			padding-top: 40px;
			padding-bottom: 40px;
		}

		#press-row:hover{
			background-color: #ccdc35 ;
		}

		.p-title {
			font-size: 50px;
			font-weight: bold;
			line-height: 70px;
		}

		.p-project {
			margin-top: 48px;
			font-size: 12px;
		}

		.p-pub {
			margin-top: 10px;
		}

		@media(max-width: 1140px){
			#presswrap{
				padding-left: 50px;
				padding-right: 50px;
			}

		}
	</style>
	<div class="td-main-content-wrap td-container-wrap">
		<div class="td-page-header td-container">
			<div class="td-crumb-container">
		            <?php echo td_page_generator::get_page_breadcrumbs(get_the_title()); ?>
	        </div>
			<h1 class="entry-title td-page-title">Press and Publications</h1>
			<div class="tdm-title-line"></div>
		</div>

		<div id="presswrap" class="container">
			<a href="http://www.sandiegouniontribune.com/communities/north-county/sd-me-natural-history-20180226-story.html" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						3/4/18 <br>
						Newspaper/Online
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						The San Diego Union-Tribune
					</div>

					<div class="p-title">
						San Diego Natural History Museum plans biodiversity blitz
					</div>
					
					<div class="p-date">
						<u>City Project</u> San Diego
					</div>

				</div>
			</div>
			</a>
		</div>
	

		<div id="presswrap" class="container">
			<a href="http://www.atlantidama.com/noticias/1/ecocampus-auna-colectivos-objeto-conocer-formula-participar-conservacion-biodiversidad" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						3/2/18 <br>
						Newspaper/Online
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						Atlántida
					</div>

					<div class="p-title">
						Ecocampus aúna a colectivos con objeto de conocer su fórmula para participar en la conservación de la biodiversidad
					</div>
					
					<div class="p-date">
						<u>City Project</u> 
						Bahia de Cadiz
					</div>

				</div>
			</div>
			</a>
		</div>
	

		<div id="presswrap" class="container">
			<a href="https://elguadarramista.com/2018/03/01/te-apuntas-al-city-nature-challenge-2018/" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						3/1/18 <br>
						Newspaper/Online
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						El Guadarramista
					</div>

					<div class="p-title">
						¿Te apuntas al City Nature Challenge 2018?
					</div>
					
					<div class="p-date">
						<u>City Project</u> 
						Madrid, Barcelona, Sevilla, Bahia de Cadiz
					</div>

				</div>
			</div>
			</a>
		</div>
	

		<div id="presswrap" class="container">
			<a href="http://www.efeverde.com/noticias/cuatro-ciudades-espanolas-biomaraton-observacion-naturaleza/" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						2/28/18 <br>
						Newspaper/Online
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						EFE: Verde
					</div>

					<div class="p-title">
						Cuatro ciudades españolas en el biomaratón para la observación de la naturaleza
					</div>
					
					<div class="p-date">
						<u>City Project</u> 
						Madrid
					</div>

				</div>
			</div>
			</a>
		</div>
	

		<div id="presswrap" class="container">
			<a href="http://www.lavanguardia.com/local/madrid/20180228/441145692228/biomaraton-busca-impulsar-observacion-de-naturaleza-en-4-ciudades-espanolas.html" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						2/28/18 <br>
						Newspaper/Online
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						La Vanguardia
					</div>

					<div class="p-title">
						Biomaratón busca impulsar observación de naturaleza en 4 ciudades españolas
					</div>
					
					<div class="p-date">
						<u>City Project</u> 
						Madrid, Barcelona, Sevilla, Bahia de Cadiz
					</div>

				</div>
			</div>
			</a>
		</div>
	

		<div id="presswrap" class="container">
			<a href="http://www.scmp.com/lifestyle/article/2123950/conservation-hong-kong-citizen-scientists-enlisted-record-and-safeguard" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						12/12/17 <br>
						Newspaper/Online
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						South China Morning Post
					</div>

					<div class="p-title">
						Conservation in Hong Kong: citizen scientists enlisted to record and safeguard city’s amazing biodiversity
					</div>
					
					<div class="p-date">
						<u>City Project</u> 
						Hong Kong
					</div>

				</div>
			</div>
			</a>
		</div>
	

		<div id="presswrap" class="container">
			<a href="https://www.amny.com/news/forest-hills-queensway-1.15053206" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						11/19/17 <br>
						Newspaper/Online
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						am New York
					</div>

					<div class="p-title">
						Forest Hills’ QueensWay teaches biodiversity, human impact to high school students
					</div>
					
					<div class="p-date">
						<u>City Project</u> 
						New York City
					</div>

				</div>
			</div>
			</a>
		</div>
	

		<div id="presswrap" class="container">
			<a href="http://upr.org/post/nature-calling-satisfy-your-curiosity-and-contribute-scientific-research-using-inaturalist" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						4/25/17 <br>
						Radio/Online
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						Utah Public Radio
					</div>

					<div class="p-title">
						Nature Is Calling: Satisfy Your Curiosity And Contribute To Scientific Research Using iNaturalist
					</div>
					
					<div class="p-date">
						<u>City Project</u> 
						Wasatch Front (Salt Lake City)
					</div>

				</div>
			</div>
			</a>
		</div>
	

		<div id="presswrap" class="container">
			<a href="https://www.voanews.com/a/youngsters-help-scientists-study-nature-sixteen-united-states-cities/3821089.html" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						4/21/17 <br>
						Radio/Online
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						Voice of America
					</div>

					<div class="p-title">
						Youngsters Help Scientists Study Nature in 16 US Cities
					</div>
					
					<div class="p-date">
						<u>City Project</u> 
						Los Angeles / All Cities
					</div>

				</div>
			</div>
			</a>
		</div>
	

		<div id="presswrap" class="container">
			<a href="http://www.marinij.com/article/NO/20170324/FEATURES/170329909" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						3/24/17 <br>
						Newspaper/Online
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						Marin Independent Journal
					</div>

					<div class="p-title">
						City Nature Challenge a fun way to become a naturalist
					</div>
					
					<div class="p-date">
						<u>City Project</u> 
						San Francisco / Los Angeles
					</div>

				</div>
			</div>
			</a>
		</div>
	

		<div id="presswrap" class="container">
			<a href="https://www.kcet.org/redefine/why-is-citizen-science-important" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						4/17/16 <br>
						TV/Online
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						KCET
					</div>

					<div class="p-title">
						Why is Citizen Science Important?
					</div>
					
					<div class="p-date">
						<u>City Project</u> 
						Los Angeles / San Francisco
					</div>

				</div>
			</div>
			</a>
		</div>
	

		<div id="presswrap" class="container">
			<a href="http://www.latimes.com/science/sciencenow/la-sci-sn-la-nature-challenge-20160414-story.html" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						4/14/16 <br>
						Newspaper/Online
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						Los Angeles Times
					</div>

					<div class="p-title">
						L.A. takes on San Francisco in the first City Nature Challenge
					</div>
					
					<div class="p-date">
						<u>City Project</u> 
						Los Angeles / San Francisco
					</div>

				</div>
			</div>
			</a>
		</div>
	

		<div id="presswrap" class="container">
			<a href="https://www.youtube.com/watch?v=FsUz4tt4cyY" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						4/14/16 <br>
						Video
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						YouTube
					</div>

					<div class="p-title">
						Mayor Garcetti Video
					</div>
					
					<div class="p-date">
						<u>City Project</u> 
						Los Angeles / San Francisco
					</div>

				</div>
			</div>
			</a>
		</div>
	

		<div id="presswrap" class="container">
			<a href="http://www.mapama.gob.es/es/ceneam/formacion-ambiental/congresos/04city-nature-challenge.aspx" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						Newspaper/Online
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						 Ministerio de Agricultura y Pesca, Alimentación y Medio Ambiente 
					</div>

					<div class="p-title">
						City Nature Challenge 2018
					</div>
					
					<div class="p-date">
						<u>City Project</u> 
						Madrid, Barcelona, Sevilla, Bahia de Cadiz
					</div>

				</div>
			</div>
			</a>
		</div>
	

		<div id="presswrap" class="container">
			<a href="https://texaslandconservancy.org/inaturalist-a-new-way-to-engage-with-nature/" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="p-project"> 
						Newspaper/Online
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-pub">
						Texas Land Conservancy
					</div>

					<div class="p-title">
						iNaturalist: A New Way to Engage with Nature
					</div>
					
					<div class="p-date">
						<u>City Project</u> 
						Texas cities
					</div>

				</div>
			</div>
			</a>
		</div>
	

		
	</div>


<?php
get_footer();
?>