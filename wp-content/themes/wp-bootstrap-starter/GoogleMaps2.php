<!DOCTYPE HTML>
<html>
<head>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
        width:100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .map-control {
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        font-family: 'Roboto','sans-serif';
        margin: 10px;
        /* Hide the control initially, to prevent it from appearing
           before the map loads. */
        display: none;
      }
      /* Display the control once it is inside the map. */
      #map .map-control { display: block; }
      .selector-control {
        font-size: 14px;
        line-height: 30px;
        padding-left: 5px;
        padding-right: 5px;
      }
    </style>
</head>
<body>
    <div id="map"></div>

<script type="text/javascript">

function initMap() {

    ajax(plotMap);

    var locations = [];

    function plotMap(cncMapResults){
        for(var i=0; i<cncMapResults.length; i++){
            var holder = [cncMapResults[i].city, parseFloat(cncMapResults[i].latitude), parseFloat(cncMapResults[i].longitude), i];
            locations.push(holder);
        }

        // MAKE THE MAP
        var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 2,
              center: {lat: 32.410043, lng: -174.310704}
            });

        var infowindow = new google.maps.InfoWindow;
        var marker, i;
        for (i = 0; i < locations.length; i++) {  
            marker = new google.maps.Marker({
                 position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                 map: map
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                 return function() {
                     infowindow.setContent(locations[i][0]);
                     infowindow.open(map, marker);
                 }
            })(marker, i));
        }
    }

    function ajax(callbackFunction){
       var url = "https://www.citynatureapi.com/profiles/?format=json";
       var xhr = new XMLHttpRequest();
       xhr.open('GET', url);
       xhr.send();
       xhr.onreadystatechange = function () {
         if(xhr.readyState == XMLHttpRequest.DONE){
           if(xhr.status ==200){
             callbackFunction( JSON.parse(xhr.responseText));
           }
           else{
             console.log("Error! Error Status: " + xhr.status);
           }
         }
       }
    }
}
</script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPPGcLNwTC4qbdFTTzxb4sVgxKHuVCYN4&callback=initMap">
    </script>

</body>

</html>
