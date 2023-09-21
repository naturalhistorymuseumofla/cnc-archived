<?php
/*  
 *   Template Name: City-List-2019-Django
 */
get_header();
header('Content-type: text/html; charset=utf-8');
?>
<meta charset="utf-8">
<script>
if (location.protocol == 'https:'){
// window.location.href = "http://citynaturechallenge.org/city-list-2020/";
}
</script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script> 
<style type="text/css">
	table td, table th {
		padding: .75rem;
		vertical-align: top;
		border-top: 1px solid #dee2e6;
	}
	table th{
		border: none;
	}
	table td{
		border: none;
	}
	@media(max-width: 767px){
		.partner-list{
			max-width: 100px;
		    overflow: hidden;
		    text-overflow: ellipsis;
		    white-space: nowrap;
		}
              /*  .fix-scroll {
                   width:7; margin:0 auto; display:block; overflow-x:scroll;
                }*/
	}
	table {
	/*	table-layout: responsive;*/
		/*width:100%;*/
	}
	#map-canvas {
      height: 100%;
    } 
    tbody a {
    	color:#000;
    }
       
         .fix-scroll {
           overflow-x:scroll;
         }
    @media(min-width:1200px){
      .fix-scroll {
       width:1200px; margin:0 auto; display:block;
      }
    }
       
</style>
 
<section class="googleMap">
	<div class="container" style="margin-top:75px;">
		<div class="row">
			<iframe src="/wp-content/themes/wp-bootstrap-starter/GoogleMaps2.php" height="700" width="1280px"></iframe>
		</div>
	</div>
</section>

<div class="container">
  <div class="row" style="margin-top:100px; margin-bottom:30px;">
    <h2 class="weight-400" style="padding-left:0px;">2020 City List</h2>
    <p>The COVID-19 pandemic is causing cities to adapt to ever-changing circumstances. While this list is updated regularly, it may not reflect any last minute changes to a city’s participation. Please click on the link to your city for any changes to events in your area. We urge all participants to carefully follow public health guidelines provided by your local governments, as they are changing in real-time. Individual safety and public health are our utmost priority.</p>
  </div>
</div>
<div class="fix-scroll">
	<table class="table hover" class="table-hover mt-4" style="">
	  <thead>
	    <tr>
	      <th scope="col" style="">City</th>
	      <th scope="col" style="">State/Province</th>
	      <th scope="col" style="">Country/Region</th>
	      <th scope="col" style="width:300px;">City Organizer(s)</th>
	      <th scope="col" style="width:350px;">Collaborating Organizations(pending)</th>
	      <th scope="col" style="width:70px; text-align:center;">Project URL</th>
	    </tr>
	  </thead>
	  <tbody id="city-list"></tbody>
	</table>
</div>
<script>
function cityCallback(cncResults){
	for(var i=0; i<cncResults.length; i++){

		var tableBody = document.querySelector("#city-list");

		var row = document.createElement("tr");
		
		var cityCol = document.createElement("td");
		cityCol.innerHTML = cncResults[i].city;

		var stateCol = document.createElement("td");
		stateCol.innerHTML = cncResults[i].state;

		var countryCol = document.createElement("td");
		countryCol.innerHTML = cncResults[i].country

		var cityorgCol = document.createElement("td");
		cityorgCol.innerHTML = cncResults[i].city_organizers;

		var collabOrgCol = document.createElement("td");
		collabOrgCol.innerHTML = cncResults[i].collaborating_organizations;

		var link = cncResults[i].project_url;
		var projectURL = document.createElement("td");
		if(link != "" && link != "#"){
			projectURL.innerHTML = '<div style="width:100%; text-align:center;"><a class="getTDabove" href="'+cncResults[i].project_url+'" target="_blank">View</a></div>';
		} else {
			projectURL.innerHTML = '';
		}

		row.appendChild(cityCol);
		row.appendChild(stateCol);
		row.appendChild(countryCol);
		row.appendChild(cityorgCol);
		row.appendChild(collabOrgCol);
		row.appendChild(projectURL);

		tableBody.appendChild(row);
	}
}

function ajax(url, callbackFunction) {
	var xhr = new XMLHttpRequest();

	xhr.open('GET', url);
	xhr.send();

	xhr.onreadystatechange = function () {
		console.log(xhr.readyState);
		// 2 - headers received
		// 3 - data is loading
		// 4 - everything is done and ready

		if(xhr.readyState == XMLHttpRequest.DONE){
			if(xhr.status ==200){
				console.log(xhr.responseText);
				//JSON.parse converts string into JSON (aka js objects)
				console.log(JSON.parse(xhr.responseText));
				callbackFunction(JSON.parse(xhr.responseText) );
				addBootstrapClass();
			} else{
				alert("Error! Error Status: " + xhr.status);
			}
		}
	}
}

var url = "https://www.citynatureapi.com/profiles/?format=json";

ajax(url, cityCallback);

function addBootstrapClass(){
    $("td").addClass("col");
}

$('span[data-href]').on("click", function(){
	document.location= $(this).data('href');
});



</script>

<div style="width:100%; height:150px;"></div>
<?php get_footer(); ?>
