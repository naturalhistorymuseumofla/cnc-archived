<?php
/*  ----------------------------------------------------------------------------
    Template Name: resources
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
			color: black;
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

		.r-project {
			font-size: 12px;
			margin-top:21px;
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
			<h1 class="entry-title td-page-title">Identity Resources</h1>
			<div class="tdm-title-line"></div>
		</div>
                <div id="presswrap" class="container">
				<a href="https://www.dropbox.com/s/n7mdhek2xeslpqh/English%20%28no%20date%29.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						English
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						City Nature Challenge
					</div>
				</div>
			</div>
			</a>
		</div>
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/k9s57vbljmzuw4m/Catalan%20%28Spain%29.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Catalan (Spain)
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Biomarató
					</div>
				</div>
			</div>
			</a>
		</div>
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/1gnmo8vhy8cei10/Croatian%20%28Croatia%29.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Croatian (Croatia)
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Izazov urbane prirode
					</div>
				</div>
			</div>
			</a>
		</div>
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/t2n51jjf87a8e90/Euskera%20%28Spain%29.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Euskera (Spain)
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Biomaratoia Biziz beteriko hiriak
					</div>
				</div>
			</div>
			</a>
		</div>
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/x4fbsiqswc4pkx8/Maylay%20%28Malaysia%29.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Maylay (Malaysia)
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Cabaran Alam Bandar
					</div>
				</div>
			</div>
			</a>
		</div>
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/cmwy90x1emzah2i/Portuguese%20%28Brazil%29.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Portuguese (Brazil)
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Desafio Mundial da Natureza Urbana
					</div>
				</div>
			</div>
			</a>
		</div>
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/b6ri0f7kp55e3rz/Spanish%20%28Argentina%29.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Spanish (Argentina)
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Competencia Natural de la Ciudad
					</div>
				</div>
			</div>
			</a>
		</div>
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/caqdn3smqd1xtj6/Spanish%20%28Bolivia%29.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Spanish (Bolivia)
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Reto Ciudad Naturaleza
					</div>
				</div>
			</div>
			</a>
		</div>
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/d9sv5w7ctnjyglv/Spanish%20%28Chile%29.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Spanish (Chile)
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Desafío Naturalista Urbano
					</div>
				</div>
			</div>
			</a>
		</div>
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/480rng0coo6hknl/Spanish%20%28Columbia%3AMexico%3APeru%29.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Spanish (Columbia/Mexico/Peru)
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Reto Naturalista Urbano
					</div>
				</div>
			</div>
			</a>
		</div>
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/ro6ooifhf7x0mx8/Spanish%20%28Ecuador%3AMexico%29.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Spanish (Ecuador/Mexico)
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Desafío Naturaleza Urbana
					</div>
				</div>
			</div>
			</a>
		</div>
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/pa3tu5fkr2dhv5p/Spanish%20%28Spain%29%20v1.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Spanish (Spain) v1
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Biomaratón Ciudades llenas de vida
					</div>
				</div>
			</div>
			</a>
		</div>
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/x6y1nlb2r30v2p7/Spanish%20%28Spain%29%20v2.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Spanish (Spain) v2
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Biomaratón
					</div>
				</div>
			</div>
			</a>
		</div>
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/38j89uidjejzad8/Swahili%20%28Kenya%29.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Swahili (Kenya)
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Viumbe Hai Jijini
					</div>
				</div>
			</div>
			</a>
		</div>
                <div id="presswrap" class="container">
		<a href="https://www.dropbox.com/s/uvgvyrzue1gxe5r/Brazil.zip?dl=1" target="_blank">
		<div class="row" id="press-row">
			<div class="col-lg-2 d-none d-lg-block" >
				<div class="r-project"> 
					<br>
					Brazil
				</div>
			</div>
			<div class="col-lg-10 col-md-12">
				<div class="p-title">
					Desafio Natureza nas Cidades
				</div>
			</div>
		</div>
		</a>
	</div>
	<div id="presswrap" class="container">
		<a href="https://www.dropbox.com/s/p781nd7n839ee5x/Chinese.zip?dl=1" target="_blank">
		<div class="row" id="press-row">
			<div class="col-lg-2 d-none d-lg-block" >
				<div class="r-project"> 
					<br>
					Chinese
				</div>
			</div>
			<div class="col-lg-10 col-md-12">
				<div class="p-title">
					城市自然大挑戰
				</div>
			</div>
		</div>
		</a>
	</div>
	<div id="presswrap" class="container">
		<a href="https://www.dropbox.com/s/xw3so8qpxe6tdbv/Tel%20Aviv.zip?dl=1" target="_blank">
		<div class="row" id="press-row">
			<div class="col-lg-2 d-none d-lg-block" >
				<div class="r-project"> 
					<br>
					Tel Aviv
				</div>
			</div>
			<div class="col-lg-10 col-md-12">
				<div class="p-title">
					אתגר הטבע העירוני
				</div>
			</div>
		</div>
		</a>
	</div>
                <!-- 
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/evnkcqb2k8boh4o/English.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						English
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						City Nature Challenge 2018
					</div>
				</div>
			</div>
			</a>
		</div>


		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/qdn9jqs76jd8h27/Spanish.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Spanish
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Reto Naturalista Urbano 2018
					</div>
				</div>
			</div>
			</a>
		</div>


		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/ee2updl0l3o15rs/Portugues.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Portugues
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Desafio Natureza da Cidade 2018
					</div>
				</div>
			</div>
			</a>
		</div>
	
	
		<div id="presswrap" class="container">
			<a href="https://www.dropbox.com/s/pytaj1gy6u7ssfj/Catalan.zip?dl=1" target="_blank">
			<div class="row" id="press-row">
				<div class="col-lg-2 d-none d-lg-block" >
					<div class="r-project"> 
						<br>
						Catalan
					</div>
				</div>
				<div class="col-lg-10 col-md-12">
					<div class="p-title">
						Biomarató Ciutats amb vida 2018
					</div>
				</div>
			</div>
			</a>
		</div>
                -->
		<br> <br><br> <br>
	</div>


<?php
get_footer();
?>
