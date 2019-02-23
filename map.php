<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'parts/head.php'; ?>
    <link href="css/map.css" rel="stylesheet">

    <!-- ArcGIS API for JavaScript -->
    <link rel="stylesheet" href="https://js.arcgis.com/4.4/esri/css/main.css">
    <script src="https://js.arcgis.com/4.4/"></script>
    <script>
        let map1;
        let mapview;
        //episode 1
        require (["esri/Map",
                "esri/views/MapView"], 
                function(Map, 
                    MapView,)
                {	
                    
                    map1 = new Map({basemap:"topo"})
        
                    mapview = new MapView({container: "mapview", map: map1, 
                    center: {latitude: 19.198714069291174,longitude: 82.44140961745379}, zoom: 4});
                })
    </script>
  
</head>

<body>

  <!-- Navigation -->
  <?php include_once 'parts/nav.php'; ?>

  <header class="text-center text-white">

      <div class="map-container">
        <div id="mapview"></div>
      </div>

  </header>

    <!-- Footer -->
    <?php include_once 'parts/footer.php' ; ?>



</body>

</html>
