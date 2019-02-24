<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once 'parts/head.php'; ?>
  <link href="css/lite.css" rel="stylesheet">
  <title>India Map</title>
 
 <!--  Scripts  -->
 <script type="text/javascript" src="lite/js/d3.min.js"></script>
 <script type="text/javascript" src="lite/js/d3.geo.min.js"></script>

 <!--  Styles  -->  
 <link type="text/css" rel="stylesheet" href="lite/css/index.css"/>
 <style type="text/css">

   
 #india {
   fill: steelblue;
   opacity: .8;
   stroke: #000000;
   stroke-width: .7;
   }
 </style>
  
</head>


<body>

  <!-- Navigation -->
  <?php include_once 'parts/nav.php'; ?>

   <header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <div id="chart"></div>
            </div>
            <div class="col-sm-4 section-filter">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-compass"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Meet nature</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                    </p>
                </div>
            </div>
        </div>
    </div>
   </header>
  
  <script type="text/javascript">
    var w = 600;
    var h = 650;
    var proj = d3.geo.mercator();
    var path = d3.geo.path().projection(proj);
    var t = proj.translate(); // the projection's default translation
    var s = proj.scale() // the projection's default scale

    var svg = d3.select("#chart")
             .append("svg:svg")
             .attr("width", w)
        .attr("height", h)
        .call(initialize);

    var map = svg.append("svg:g")
        

    var india = map.append("svg:g")
        .attr("id", "india");

    

    d3.json("lite/data/full_data-1.json", function (json) {
      india.selectAll("path")
          .data(json.features)
        .enter().append("path")
          .attr("d", path)
          .attr("fill", "#000")
          .append("title")
          .text(function(d){
          	return "district : " + d.properties.NAME_2 + " " + " state : " + d.properties.NAME_1;
          });
    });

    
    

    function initialize() {
      proj.scale(6700);
      proj.translate([-1240, 750]);
    }




  </script>



    <!-- Footer -->
    <?php include_once 'parts/footer.php' ; ?>



</body>

</html>