<?php
/*  
 *   Template Name: City-List-2019-Django
 */
get_header();
header('Content-type: text/html; charset=utf-8');
?>
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script> 
	<style type="text/css">
                .table td, .table th {
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

		table:not(th):hover{
			cursor: pointer;
		}

		@media(max-width: 767px){
			.partner-list{
				max-width: 100px;
			    overflow: hidden;
			    text-overflow: ellipsis;
			    white-space: nowrap;
			}
		}
	</style>

<div class="container td-container">
  <div class="row" style="margin-top:100px; margin-bottom:30px;">
    <h2 class="weight-400" style="padding-left:32px;">2019 City List API</h2>
  </div>
</div>

<table class="table" id="city-list" class="container table-responsive table-hover mt-4" style="max-width:1015px; margin:0 auto;">
  <thead>
    <tr>
      <th scope="col">City</th>
      <th scope="col">State/Province</th>
      <th scope="col">Country</th>
      <th scope="col">City Organizer(s)</th>
      <th scope="col">Collaborating Organizations(pending)</th>
    </tr>
  </thead>
  <tbody></tbody>
</table>

<script>
function cityCallback(cncResults){
	for(var i=0; i<cncResults.length; i++){
		var table = document.querySelector("#city-list");
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

		row.appendChild(cityCol);
		row.appendChild(stateCol);
		row.appendChild(countryCol);
		row.appendChild(cityorgCol);
		row.appendChild(collabOrgCol);

		table.appendChild(row);
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
			}
			else{
				alert("Error! Error Status: " + xhr.status);
			}
		}
	}
}

var url = "http://138.68.1.184/profiles/?format=json";

// var url = "http://localhost:8000/profiles/?format=json";
ajax(url, cityCallback);
</script>
<div style="width:100%; height:150px;"></div>
<?php get_footer(); ?>

