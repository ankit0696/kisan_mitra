<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once 'parts/head.php'; ?>
  <link href="css/lite.css" rel="stylesheet">
  <title>India Map</title>
 


 <!--  Styles  -->  
 <link type="text/css" rel="stylesheet" href="lite/css/index.css"/>

   


    <!-- Step 1 - Including the fusioncharts core library -->
    <script type="text/javascript" src="http://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <!-- Step 2 - Including the map renderer file -->
    <script type="text/javascript" src="http://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.maps.js "></script>
    <!-- Step 3 - Including the map definition file -->
    <script type="text/javascript" src="http://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.maps/india.js"></script>
    <!-- Step 4 - Including the fusion theme -->
    <script type="text/javascript" src="http://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.theme.fusion.js"></script>

    <script>
    FusionCharts.ready(function() {
            var annualPopulation = new FusionCharts({
                "type": "maps/india",
                "renderAt": "chart-container",
                "width": "900",
                "height": "600",
                "dataFormat": "json",
                "dataSource": {
                    // Map Configuration
                    "chart": {
                        "caption": "Average Annual Population Growth",
                        "subcaption": " 1955-2015",
                        "numbersuffix": "%",
                        "includevalueinlabels": "1",
                        "labelsepchar": ": ",
                        "entityFillHoverColor": "#FFF9C4",
                        "theme": "fusion"
                    },
                    // Aesthetics; ranges synced with the slider
                    "colorrange": {
                        "minvalue": "0",
                        "code": "#ffffff",
                        "gradient": "1",
                        "color": [{
                            "minvalue": "0.0",
                            "maxvalue": "33.3",
                            "color": "#8bc9a0"
                        }, {
                            "minvalue": "33.3",
                            "maxvalue": "66.6",
                            "color": "#6ac789"
                        }, {
                            "minvalue": "66.6",
                            "maxvalue": "100.0",
                            "color": "#55c57a"
                        }]
                    },
                    // Source data as JSON --> id represents countries of world.
                    "data":[
        {
            "id": "001",
            "value": "70",
            "showLabel": "1"
        },
        {
            "id": "002",
            "value": "87",
            "showLabel": "1"
        },
        {
            "id": "003",
            "value": "75",
            "showLabel": "1"
        },
        {
            "id": "004",
            "value": "42",
            "showLabel": "1"
        },
        {
            "id": "005",
            "value": "36",
            "showLabel": "1"
        },
        {
            "id": "006",
            "value": "12",
            "showLabel": "1"
        },
        {
            "id": "007",
            "value": "75",
            "showLabel": "1"
        },
        {
            "id": "008",
            "value": "8",
            "showLabel": "1"
        },
        {
            "id": "009",
            "value": "97",
            "showLabel": "1"
        },
        {
            "id": "010",
            "value": "36",
            "showLabel": "1"
        },
        {
            "id": "011",
            "value": "80",
            "showLabel": "1"
        },
        {
            "id": "012",
            "value": "41",
            "showLabel": "1"
        },
        {
            "id": "013",
            "value": "72",
            "showLabel": "1"
        },
        {
            "id": "014",
            "value": "78",
            "showLabel": "1"
        },
        {
            "id": "015",
            "value": "41",
            "showLabel": "1"
        },
        {
            "id": "016",
            "value": "87",
            "showLabel": "1"
        },
        {
            "id": "017",
            "value": "2",
            "showLabel": "1"
        },
        {
            "id": "018",
            "value": "79",
            "showLabel": "1"
        },
        {
            "id": "019",
            "value": "97",
            "showLabel": "1"
        },
        {
            "id": "020",
            "value": "60",
            "showLabel": "1"
        },
        {
            "id": "021",
            "value": "6",
            "showLabel": "1"
        },
        {
            "id": "022",
            "value": "26",
            "showLabel": "1"
        },
        {
            "id": "023",
            "value": "96",
            "showLabel": "1"
        },
        {
            "id": "024",
            "value": "32",
            "showLabel": "1"
        },
        {
            "id": "025",
            "value": "56",
            "showLabel": "1"
        },
        {
            "id": "026",
            "value": "34",
            "showLabel": "1"
        },
        {
            "id": "027",
            "value": "35",
            "showLabel": "1"
        },
        {
            "id": "028",
            "value": "90",
            "showLabel": "1"
        },
        {
            "id": "029",
            "value": "15",
            "showLabel": "1"
        },
        {
            "id": "030",
            "value": "42",
            "showLabel": "1"
        },
        {
            "id": "031",
            "value": "11",
            "showLabel": "1"
        },
        {
            "id": "032",
            "value": "46",
            "showLabel": "1"
        },
        {
            "id": "033",
            "value": "14",
            "showLabel": "1"
        },
        {
            "id": "034",
            "value": "68",
            "showLabel": "1"
        },
        {
            "id": "035",
            "value": "14",
            "showLabel": "1"
        },
        {
            "id": "036",
            "value": "84",
            "showLabel": "1"
        }
    ]
                }
            });
            annualPopulation.render();
        });
        </script>
</head>


<body>

  <!-- Navigation -->
  <?php include_once 'parts/nav.php'; ?>

   <header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                    <div id="chart-container">FusionMaps XT will load map here!</div>
            </div>
            <div class="col-sm-3 section-filter">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-compass"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Rice Rating</h3>
                    <p class="feature-box__text">
                        <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
   </header>



    <!-- Footer -->
    <?php include_once 'parts/footer.php' ; ?>



</body>

</html>