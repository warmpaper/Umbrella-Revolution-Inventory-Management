<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD1QYfib921GH0nghTRW27B1bFso2rpoUk&sensor=false">
</script>

<script>
var map;
var infowindow;
function initialize()
{
var mapProp = {
  center:new google.maps.LatLng(<?php echo $district->lat; ?>,<?php echo $district->lng; ?>),
  zoom:17,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
map=new google.maps.Map(document.getElementById("googleMap")
  ,mapProp);

var marker=new google.maps.Marker({
  position:new google.maps.LatLng(22.3208021,114.1690685),
  animation:google.maps.Animation.BOUNCE,
  title:'This is Mong Kok'
  });

marker.setMap(map);

infowindow = new google.maps.InfoWindow({
  content:'<div class="infowindow">This is Mong Kok</div>'
  });

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });


var marker2=new google.maps.Marker({
  position:new google.maps.LatLng(22.2798575,114.1842325),
  animation:google.maps.Animation.BOUNCE,
  title:'This is Causeway Bay'
  });

marker2.setMap(map);

infowindow = new google.maps.InfoWindow({
  content:'<div class="infowindow">This is Causeway Bay</div>'
  });


  google.maps.event.addListener(marker2, 'click', function() {
    infowindow.open(map,marker2);
  });

var marker3=new google.maps.Marker({
  position:new google.maps.LatLng(22.31762,114.167598),
  animation:google.maps.Animation.BOUNCE,
  title:'This is Tsim Sha Tsui'
  });

marker3.setMap(map);

infowindow = new google.maps.InfoWindow({
  content:'<div class="infowindow">This is Tsim Sha Tsui</div>'
  });

  google.maps.event.addListener(marker3, 'click', function() {
    infowindow.open(map,marker3);
  });

var marker4=new google.maps.Marker({
  position:new google.maps.LatLng(22.2803294,114.1647682),
  animation:google.maps.Animation.BOUNCE,
  title:'This is Admiralty'
  });

marker4.setMap(map);

infowindow = new google.maps.InfoWindow({
  content:'<div class="infowindow">This is Admiralty</div>'
  });

  google.maps.event.addListener(marker4, 'click', function() {
    infowindow.open(map,marker4);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
<style>
html, body {
	margin: 0;
	padding: 0;
	width: 100%;
	height: 100%;
}

.infowindow {
	width: 200px;
}
</style>
</head>

<body>
<div id="googleMap" style="width:100%;height:100%;"></div>

</body>
</html>