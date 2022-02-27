<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Map</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		#map{
			height: 500px;
			width: 100%;
				}
	</style>
</head>
<body>
	<?php 
	$x = 12.1628466;
	$y = 6.6745042000001;
	?>
<div id="map"></div>
<script type="text/javascript">
	function initMap(){
			var location = {lat:<?php echo $x ?> , lng: <?php echo $y ?> };
			var map = new google.maps.Map(document.getElementById("map"), {
				zoom:4,
				center:location
			});
			var marker = new google.maps.Marker({
				position: location,
				map:map
			});
	}
	AIzaSyBYzXj5wF4L6mChyyc5xwfb2QT1QEZ9VN8
</script>
<script async defer src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBYzXj5wF4L6mChyyc5xwfb2QT1QEZ9VN8&callback=initMap"></script>
</body>
</html>