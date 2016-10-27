
<link href="css/creative.min.css" rel="stylesheet">
<link href="css/css.css" rel="stylesheet">

<?php
session_start ();
// include 'encryption.php';

if (isset ( $_POST ["username"] ) && isset ( $_POST ["password"] )) {
    
    $user = $post->person_name;
    
    $_SESSION ["user"] = $user;
}

if (! isset ( $_SESSION ['user'] )) { // If session is not set that redirect to Login Page {
    header ( "Location:?controller=pages&action=login" );
} 

else {
    
    ?>


<header>
	<div class="header-content">
		<div class="header-content-inner">
			<h1 id="homeHeading">Hello there <?php echo $_SESSION["user"] ?>!</h1>
			<hr>
			<p>You successfully landed on the home page. Congrats!</p>

			<div id="map" style="width: 100%; height: 300px"></div>

			<script>
function myMap() {
   var uluru = {lat: 51.755495, lng: -8.782732};

  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: uluru,
    zoom: 14
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({
  position: uluru,
  map: map
});
}



</script>

			<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
		</div>
	</div>
</header>

<?php }?>