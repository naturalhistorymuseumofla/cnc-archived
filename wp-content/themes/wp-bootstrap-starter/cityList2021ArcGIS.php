<?php
/*  
 *   Template Name: City-List-2021-ArcGIS
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

  #map {
    height: 700px;
    width: 1280px;
    background: #CFD3D4;
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
 

<div class="container" style="margin-top:75px;">
		<div class="row">
			<div id="map"></div>
		</div>
</div>


<div class="container">
  <div class="row" style="margin-top:100px; margin-bottom:30px;">
    <h2 class="weight-400" style="padding-left:0px;">2022 City List</h2>
    <p>
      The COVID-19 pandemic is causing cities to adapt to ever-changing circumstances. While this list is updated regularly, it may not reflect any last minute changes to a city’s participation. 
      Please click on the link to your city for any changes to events in your area.
    </p> 
	  <p>
      If your city is not listed here, we welcome you to join our 
      <a href="https://www.inaturalist.org/projects/city-nature-challenge-2022-global-project">global project </a>
      and take part wherever you live. Note: To participate in the global project you must first ‘join’ the project,
      using the link near the top right corner. For all other cities listed below, there is no need to join your local project, though you may choose to do so. 
      All observations made within the boundaries of participating cities between April 29 - May 2 will automatically be added.
    </p> 
    <p>
      We urge all participants to carefully follow current public health guidelines provided by your local governments. Public health and individual safety are our first priorities.
    </p>
  </div>
</div>
<div class="fix-scroll">
	<table class="table hover" class="table-hover mt-4" style="">
	  <thead>
	    <tr>
	      <th scope="col" style="">City</th>
	      <th scope="col" style="">Province/State</th>
	      <th scope="col" style="">Country/Region</th>
        <th scope="col" style="">Visit</th>
        <!--
	      <th scope="col" style="width:300px;">City Organizer(s)</th>
	      <th scope="col" style="width:350px;">Collaborating Organizations</th>
        
	      <th scope="col" style="width:70px; text-align:center;">Project URL</th>
        -->
	    </tr>
	  </thead>
	  <tbody id="city-list"></tbody>
	</table>
</div>
<script>

// Field names from City Nature Challenge feature (only update if they are subject to change)
const cityField = "city";
const stateField = "state";
const countryField = "country";
const urlField = "url";

// Callback for AJAX function that populates City List table elemnt with the response from the CNC API request
function populateCityTable(cities){
  cities.forEach(city => {
    // Get object of attributes of the city record
    const record = city.attributes;
    // Only add features that have a city
    if (record[cityField]) {
      // Create table elements
      const tableBody = document.querySelector("#city-list");
      const row = document.createElement("tr");

      // Populate table
      const cityCol = document.createElement("td");
      cityCol.innerHTML = record[cityField];

      const stateCol = document.createElement("td");
      stateCol.innerHTML = record[stateField];

      const countryCol = document.createElement("td");
      countryCol.innerHTML = record[countryField];

      const projectURL = document.createElement("td");
      
      const link = record[urlField];
      projectURL.innerHTML = (link && link != "#") ? 
        `<div style="width:100%; text-align:center;"><a class="getTDabove" href="${link}" target="_blank">View</a></div>` :
        '';

      /*

      const cityorgCol = document.createElement("td");
      cityorgCol.innerHTML = record.city_organizers;

      const collabOrgCol = document.createElement("td");
      collabOrgCol.innerHTML = record.collaborating_organizations;
      */

      //const projectURL = document.createElement("td");
      /*
      const link = record.project_url;

      projectURL.innerHTML = (link != "" && link != "#") ? 
        `<div style="width:100%; text-align:center;"><a class="getTDabove" href="${link}" target="_blank">View</a></div>` :
        '';
      */

      // Add column elements to the row
      row.appendChild(cityCol);
      row.appendChild(stateCol);
      row.appendChild(countryCol);
      row.appendChild(projectURL);
      //row.appendChild(cityorgCol);
      //row.appendChild(collabOrgCol);


      // Add row to table
      tableBody.appendChild(row);

    }  
  });
}



// ArcGIS functions wrapped in .ready() so that there are no conflicts between DOJO loader and WP JQuery
$(document).ready(() => {
  require([
      "esri/Map",
      "esri/views/MapView",
      "esri/layers/FeatureLayer",
    ], (
      Map,
      MapView,
      FeatureLayer,
      ) => {

      const mapDiv = document.getElementById('map');
      const map = new Map({
        basemap: "gray-vector" // Basemap layer service
      });

      const view = new MapView({
        map: map,
        center: [0, 40], // Longitude, latitude
        //zoom: 1, // Zoom level
        scale: 189000000,
        container: mapDiv, // Div element,
        highlightOptions: {
          color: "#729830",
        },
        constraints: {
          minZoom: 1,
          snapToZoom: false,
        },
        // Format all popups in mapview
        popup: {
          dockEnabled: false,
          dockOptions: {
            // Disables the dock button from the popup
            buttonEnabled: false,
            // Ignore the default sizes that trigger responsive docking
            breakpoint: true
          }
        },

      });

      // Feature layer created from JSON of participating cities
      const citiesLayer = new FeatureLayer({
        url: "https://services3.arcgis.com/pIjZlCuGxnW1cJpM/arcgis/rest/services/City_Nature_Challenge_Cities/FeatureServer",
        // Format cities popup content
        renderer: {
          type: "simple",
          symbol: {
            type: "simple-marker",
            path: "M43.37,17.78C43.37,8.14,35.15.33,25,.33S6.63,8.14,6.63,17.78a16.74,16.74,0,0,0,2.93,9.44h0L23.48,48.86a1.83,1.83,0,0,0,3,0L40.45,27.22h0A16.74,16.74,0,0,0,43.37,17.78ZM25,25.39a7.1,7.1,0,1,1,7.09-7.09A7.09,7.09,0,0,1,25,25.39Z",
            color: "#8dc248",
            outline: {
              color: "white",
              width:0.5,
            },
            height: "50px",
            width: "50px",
          },
        },
        popupTemplate: {
          title: `{${cityField}}, {${countryField}}`,
          //overwriteActions : true,
          //content: "{project_url}"
        }

      });

      map.add(citiesLayer);

      let query = { // autocasts as Query
        where: "1=1", // select all features
        returnGeometry: false,
        cacheHint: true,
        outFields: [
                    cityField,
                    stateField,
                    countryField,
                    urlField,
                  ],
        orderByFields: [countryField, stateField, cityField]
      };
  
      // Return all features with query and use the response to populate city list table
      citiesLayer.queryFeatures(query).then((r) => {
        console.log(r.features);
        populateCityTable(r.features);
      });
  });
});

/*

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

*/

function addBootstrapClass(){
    $("td").addClass("col");
}

$('span[data-href]').on("click", function(){
	document.location= $(this).data('href');
});



</script>

<div style="width:100%; height:150px;"></div>




<?php get_footer(); ?>

<link rel="stylesheet" href="https://js.arcgis.com/4.21/esri/themes/light/main.css">
<script src="https://js.arcgis.com/4.22/"></script>
 
