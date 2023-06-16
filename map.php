<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="index.php"</script>';
	
	}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>

    <style>
    #map {
      height: 100vh;
      width: 100%;
    }

    .custom-info-window {
      background-color: #FFFFFF; /* Replace with your desired background color */
      color: #000000; /* Replace with your desired text color */
      padding: 10px;
      border-radius: 5px;
    }

    .warning{
        color:red;
    }


  </style>
 </head>
 <body>
    <section class="map">
        <div class="container">
            <div class="info_con">
            </div>
            <div class="map_con">
            <div id="map">
            <div id="map"></div>
            </div>
            </div>
        </div>
    </section>

   
   

  <!-- Load the Google Maps JavaScript API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBS9xwUmZg3c43LwMZQks6P4nem_QFSHIA&callback=initMap" async defer></script>





  <script>
    // Initialize and display the map
    function initMap() {
      // Specify the coordinates for the map center
      var myLatLng = { lat: 8.654605522164854, lng: 81.21239143212402 };

      // Create the map instance with custom map type
      var map = new google.maps.Map(document.getElementById("map"), {
        center: myLatLng,
        zoom: 18,
        mapTypeId: 'satellite',
        styles: [
          {
            featureType: "all",
            elementType: "labels",
            stylers: [
              { visibility: "off" }
            ]
          }
        ]
      });

      const iconBase =
    "http://maps.google.com/mapfiles/kml/shapes/";
  const icons = {
    parking: {
      icon: iconBase + "caution.png",
    },
    library: {
      icon: iconBase + "water.png",
    },
    info: {
      icon: iconBase + "info-i_maps.png",
    },
  };

  const features = [
    {
      position: new google.maps.LatLng(8.654605522164854, 81.21239143212402),
      type: "parking",
      content: "<div class='custom-info-window'><h2>Water In using</h2><p>Water in use In canteen Building</p> <h3>Water outlet count = 20</h3> <h3>Taps in use = 3</h3> <h3>Remaing Capacity on Tanks = 1000 Liters</h3> <h3>Total capacity = 2000 Liters</h3> <h3>Time to next Refil = 1 hour</h3></div>"
    },


    {
      position: new google.maps.LatLng(8.653928471171945, 81.2123633357786),
      type: "parking",
      content: "<div class='custom-info-window'><h2>Water In using</h2><p>Water in use In IT Building</p> <h3>Water outlet count = 30</h3> <h3>Taps in use = 2</h3> <h3>Remaing Capacity on Tanks = 1700 Liters</h3> <h3>Total capacity = 5000 Liters</h3> <h3>Time to next Refil = 1 hour</h3></div>"
    },
    {
      position: new google.maps.LatLng(8.6529379347793, 81.21287484287431),
      type: "library",
      content: "<div class='custom-info-window'><h2>Water In using</h2><p>Water in use In Library Building</p> <h3>Water outlet count = 30</h3> <h3>Taps in use = 2</h3> <h3>Remaing Capacity on Tanks = 4980 Liters</h3> <h3>Total capacity = 5000 Liters</h3> <h3>Time to next Refil = 1 hour</h3> <h3 class='warning'> Please turn off the water inlet </h3></div>"
    },

    {
      position: new google.maps.LatLng(
        8.654072443073929, 81.2112147964596
      ),
      type: "library",
      content: "<div class='custom-info-window'><h2>Water In using</h2><p>Water in use In FCBS Department Building</p> <h3>Water outlet count = 30</h3> <h3>Taps in use = 2</h3> <h3>Remaing Capacity on Tanks = 1700 Liters</h3> <h3>Total capacity = 5000 Liters</h3> <h3>Time to next Refil = 2 hour</h3></div>"
    }

];

      for (let i = 0; i < features.length; i++) {
    const marker = new google.maps.Marker({
      position: features[i].position,
      icon: icons[features[i].type].icon,
      map: map,
    });


    const infoWindow = new google.maps.InfoWindow({
          content: features[i].content,
        });


   marker.addListener("click", function() {
          infoWindow.open(map, marker);
        });
  }



    
    }
  </script>
</body>
</html>



   

 </body>


 </html>