<!DOCTYPE html>
<html lang="en" class="skrollr skrollr-desktop"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/welcome.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <link type="text/css" rel="stylesheet" href="css/graph.css">
    <link type="text/css" rel="stylesheet" href="css/detail.css">
    <link type="text/css" rel="stylesheet" href="css/legend.css">
    <link type="text/css" rel="stylesheet" href="css/lines.css">

    <script src="js/d3.v3.js"></script>

    <script src="js/rickshaw.js"></script>


  </head>

  <body id="skrollr-body" data-spy="scroll" data-target=".navbar" class="layout-boxed" style="height: 8703px;"> <!-- "layout-boxed" class for boxed layout "layout-boxed-no" class for full size wrapper -->
    <section class="wrapper wrapper-navbar wrapper-no-padding wrapper-transparent">
      <nav class="navbar navbar-inverse navbar-transparent  wow fadeIn skrollable skrollable-after" data-0="background-color:rgba(0,0,0,0);" data-100="background-color:rgba(0,0,0,.9);" style="visibility: visible; animation-name: fadeIn; background-color: rgba(0, 0, 0, 0.901961);">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">real Eyes Exchange</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#hero">Start <span class="sr-only">(current)</span></a></li>
              <li><a href="#slider">Slider</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#app">App</a></li>
              <li><a href="#full">Background</a></li>
              <li><a href="#pricing">Pricing</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#footer">Footer</a></li>
              <li><a href="content.html">Content Page <i class="fa fa-external-link"></i>
</a></li>

            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </section>

<!-- Hero area -->
    <div class="wrapper-shadow">
        <section id="hero" class="wrapper wrapper-dark wrapper-lg wrapper-bg-gradient skrollable skrollable-after" style="padding-bottom: 0px; background-image: url(http://templatedeck.com/demos/obannon1_0_2_1/demo3/img/topo.png); background-position: 0% 0%;" data-start="background-position:0% 50%;" data-top-bottom="background-position:0% 0%;">
          <div class="container  wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="row">
                <button class="btn btn-info" onclick="convertXmlToJson();"> traer xml</button>
              <div class="col-md-8 col-md-offset-2 text-center">
                <div class="usuarios"></div>
                  
              </div>
              <div id="chart_container">
                <div id="chart"></div>
                <div id="legend_container">
                    <div id="smoother" title="Smoothing"></div>
                    <div id="legend"></div>
                </div>
                <div id="slider"></div>
              </div>
            </div>
          </div>
        </section>



        <!-- Footer section -->
        <section id="footer" class="wrapper wrapper-transparent wrapper-sm">
          <div class="container  wow fadeIn" style="visibility: hidden; animation-name: none;">

            <div class="row">
              <div class="col-md-2 col-xs-6">
                <h4>Menu</h4>
                    <ul class="nav subnav">
                      <li role="presentation" class="active"><a href="#">News</a></li>
                      <li role="presentation"><a href="#">Mobile</a></li>
                      <li role="presentation"><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-xs-6">
                  <h4>Menu</h4>
                  <ul class="nav subnav">
                      <li role="presentation" class="active"><a href="#">Imprint</a></li>
                      <li role="presentation"><a href="#">Twitter</a></li>
                      <li role="presentation"><a href="#">Facebook</a></li>
                      <li role="presentation"><a href="#">Google +</a></li>
                      <li role="presentation"><a href="#">Jobs</a></li>
                      <li role="presentation"><a href="#">Company</a></li>
                  </ul>
                </div>
                <div class="col-md-6 col-md-offset-2">
                  <h5>Sample Widget</h5>

                  <p>
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  <br>
                  Designed and developed by <a href="http://www.templatedeck.com" target="_blank">TemplateDeck</a>
                  </p>
                  <p>
                  </p>
                </div>
            </div>
          </div>
        </section>

    
    <script type="text/javascript">
        

    </script>

  
</body></html>
