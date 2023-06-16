<!DOCTYPE html>
<html>
<head>
  <title>Play Audio on Button Click</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>




<body>


  <button id="playButton">Play Audio</button>

  <audio id="audioPlayer">
    <source src="Ding-dong-intercom.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>


 <h2>Place of opened tap</h2>  
<div id="map" style="width:300px;height:300px;background:green"></div>  
  <script>
    $(document).ready(function() {
      $('#playButton').click(function() {
        var audio = document.getElementById('audioPlayer');
        audio.play();
      });
    });


function Map123() {  
var mapOptions = {  
    center:new google.maps.LatLng(51.508742,-0.120850),  
    zoom: 10,  
    mapTypeId: google.maps.MapTypeId.HYBRID  
}  
var map = new google.maps.Map(document.getElementById("map"), mapOptions);  
}  

  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=Map123"></script>
</body>
</html>