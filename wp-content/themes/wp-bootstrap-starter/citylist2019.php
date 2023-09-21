<?php
/*  
 *   Template Name: City-List-2019
 */

get_header();
header('Content-type: text/html; charset=utf-8');

?>
	<meta charset="utf-8">

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

		@media(max-width: 767px){
			.partner-list{
				max-width: 100px;
			    overflow: hidden;
			    text-overflow: ellipsis;
			    white-space: nowrap;
			}
		}
	</style>

<div class="container">
  <div class="row" style="margin-top:50px; margin-bottom:30px;">
    <h2 class="weight-400" style="padding-left:15px;">2019 City List</h2>
  </div>
</div> 
<div class="td-main-content-wrap td-container-wrap">
	<div class="td-page-header td-container">
		<div class="td-crumb-container">
	            <?php //echo td_page_generator::get_page_breadcrumbs(get_the_title()); ?>
        </div>
		<h1 class="entry-title td-page-title">City List</h1>
		<div class="tdm-title-line"></div>
	</div>
	<div id="city_table" class="container table-responsive table-hover mt-4">
		<!-- <table class="table">
			<tr>
				<thead>
					<th>City</th>
					<th>State/Region</th>
					<th>Organization Name</th>
					<th>Partners</th>
				</thead>
			</tr>
		</table> -->
	</div>
</div>

<script type="text/javascript">
console.log('v6');
window.onload = function(){
	$.ajax({
		url: "../wp-content/uploads/2019/01/2019-citylist-feb.csv", //this file is a utf-8 encoded file
		dataType: "text",
		success:function(data){
			//console.log(data);
			var city_data = data.split('//'); 
			//console.log(city_data);
			var table_data = "<table class='table'><thead>"; 
			for(var i = 0; i <city_data.length; i++){
				var cell_data = city_data[i].split(","); //gets a row and splits it by commas. 
				//console.log(cell_data);
				if(i!=0){
					table_data += "<tr data-href='http://"+cell_data[0]+"'>";//fill data-href with corresponding website link. should be contents of cell_data[1]
				} else { //if header row
					table_data += "<tr>";
				}
				for( var j =1; j < cell_data.length; j++){ //iterates through row data
					if(i===0){ //table headers
						
							table_data += '<th>'+cell_data[j]+'</th>'; //inserts cell headers (first row of .csv)
					} else {
						if(j===cell_data.length-1){ //if its the last cell
							if(cell_data[j] != ""){ //if there are partners listed in cell
								var partners_data = cell_data[j].split('-'); //split by new line
								//console.log(partners_data);
								var new_partners_data = "";
								for(var k =0; k < partners_data.length; k++){
									new_partners_data+=partners_data[k];
									//console.log(partners_data[k]);
									if(k!=partners_data.length-1){
										new_partners_data+=', ';
									}
								}
								//console.log(new_partners_data);
								table_data += '<td class="partner-list">'+new_partners_data.replace('"','')+'</td>'; //otherwise inserts appropriate cell data
							} else {
								table_data += '<td>'+cell_data[j].replace('"','')+'</td>'
							}
						} else {
							table_data += '<td>'+cell_data[j].replace('"','')+'</td>'; //otherwise inserts appropriate cell data
						}
					}
				}
	
				if(i === 0){
					table_data+='</tr></thead>';
				} else{
					table_data+='</tr>'; //close row
				}
				//console.log(table_data);
			}
			table_data+='</table>';//end table
			$('#city_table').html(table_data);
			$('tr[data-href]').on("click", function(){
				//console.log('hello');
				document.location= $(this).data('href');
			});
		}
	});
};
</script>
<?php get_footer(); ?>
