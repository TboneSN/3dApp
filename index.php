<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Assignment</title>

    <?php
    $baseURL = "http://example.com/"; // Replace with your actual base URL

    // Array of CSS files to include
    $cssFiles = [
        $baseURL . "css/bootstrap-4.4.1.css",
        $baseURL . "css/x3dom.css",
        $baseURL . "css/all.css",
        $baseURL . "css/jquery.fancybox.min.css",
        $baseURL . "css/custom.css",
    ];

    // Array of JavaScript files to include
    $jsFiles = [
        $baseURL . "scripts/js/jquery-3.4.1.js",
        $baseURL . "scripts/js/popper.min.js",
        $baseURL . "scripts/js/bootstrap-4.4.1.js",
        $baseURL . "scripts/js/x3dom.js",
        $baseURL . "scripts/js/custom.js",
        $baseURL . "scripts/js/swap_restyle.js",
        $baseURL . "scripts/js/gallery_generator.js",
        $baseURL . "scripts/js/getJsonData.js",
        $baseURL . "scripts/js/modelInteractions.js",
        $baseURL . "scripts/js/jquery.fancybox.min.js",
    ];
    ?>

    <?php foreach ($cssFiles as $cssFile) : ?>
        <link rel="stylesheet" href="<?= $cssFile ?>">
    <?php endforeach; ?>

</head>
<body id="bodyColor">
<nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      <div class="container-fluid d-flex justify-content-between">  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="logo">
          <a class="navbar-brand" href="index.html">
            <h3>My&nbsp;</h3>
            <h1>1</h1>
            <h1>oca</h1>
            <h2>Cola</h2>
            <h3>&nbsp;Brand</h3>
            <p>A Delicious and Refreshing Beverage</p>
          </a>
        </div>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto"> 
            <li class="nav-item">
              <a class="nav-link active" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
            </li>
            
            <li class="nav-item">
              <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    
    

    <div class="container-fluid main_contents"> 
        <div id="home">
          <div class="row"> 
            <div class ="col-sm-12">
              <div id="main_3d_image">
                  <div id="main_text" class="col-xs-12 col-sm-4">
                    <div id="title_home"></div>
                    <div id="subTitle_home"></div>
                    <div id="description_home"></div>
                  </div> 
              </div> 
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <a href="assets/images/render_images/coke.jpg" data-fancybox data-caption="My 3D Coke Can Render">
                        <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/coca_cola.jpg" alt="Coca Cola">
                    </a>
                    <div class="card-body">
                        <div id="title_left" class="card-title drinksText"></div>
                        <div id="subTitle_left" class="card-subtitle drinksText"></div>
                        <div id="description_left" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>          
                    </div>
                </div>
            </div>
        
            <div class="col-sm-12">
                <div class="card">
                    <a href="assets/images/render_images/sprite.jpg" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
                        <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/sprite.jpg" alt="Sprite">
                    </a>
                    <div class="card-body">
                        <div id="title_centre" class="card-title drinksText"></div>
                        <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                        <div id="description_centre" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
                      </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card">
                    <a href="assets/images/render_images/pepper.jpg" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">
                        <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/pepper.jpg" alt="Pepper">
                    </a>
                    <div class="card-body">
                        <div id="title_right" class="card-title drinksText"></div>
                        <div id="subTitle_right" class="card-subtitle drinksText"></div>
                        <div id="description_right" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Find out more ...</a>
                      </div>
                </div>
            </div>
          </div>
        </div>

        <div id="about" >
          The Coca-Cola Company (NYSE: KO) is a total beverage company with products sold in more than 200 countries and territories. Our company’s purpose is to refresh the world and make a difference. We sell multiple billion-dollar brands across several beverage categories worldwide. Our portfolio of sparkling soft drink brands includes Coca-Cola, Sprite and Fanta. Our water, sports, coffee and tea brands include Dasani, smartwater, vitaminwater, Topo Chico, BODYARMOR, Powerade, Costa, Georgia, Gold Peak and Ayataka. Our juice, value-added dairy and plant-based beverage brands include Minute Maid, Simply, innocent, Del Valle, fairlife and AdeS. We’re constantly transforming our portfolio, from reducing sugar in our drinks to bringing innovative new products to market. We seek to positively impact people’s lives, communities and the planet through water replenishment, packaging recycling, sustainable sourcing practices and carbon emissions reductions across our value chain. Together with our bottling partners, we employ more than 700,000 people, helping bring economic opportunity to local communities worldwide.
        </div> 

        <div id="models">
          <div class="row">
              <div class="col-sm-12">
                  <div class="card text-left">
                      <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                          <a id="navCoke" class="nav-link active" href="#">Coke</a>
                          </li>
                          <li class="nav-item">
                          <a id="navSprite" class="nav-link" href="#">Sprite</a>
                          </li>
                          <li class="nav-item">
                          <a id="navPepper" class="nav-link" href="#">Pepper</a>
                          </li>
                      </ul>
                      </div>
                      <div class="card-body">
                      <div id="coke">
                          <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                          <div class="model3D">
                              <x3d>
                                  <scene>
                                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/coke.x3d" > </inline>
                                  </scene>
                              </x3d>
                          </div> 
                      </div>
                      <div id="sprite" style="display:none;">
                          <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                          <div class="model3D">
                              <x3d id="model">
                                  <scene>
                                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/sprite.x3d"> </inline>
                                  </scene>
                              </x3d>
                          </div> 
                      </div>
                      <div id="pepper" style="display:none;">
                          <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                          <div class="model3D">
                              <x3d>
                                  <scene>
                                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/pepper.x3d"> </inline>
                                  </scene>
                              </x3d>
                          </div> 
                          </div>
                      </div>
                  </div>
              </div>
          </div> 
        </div> 
    
        <div id="interaction" class="row" >
                <div class="col-sm-6">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                          <div class="card-text x3dCameraDescription drinksText">
                          </div>
                        </div>
                      </div>
                </div>
            
                <div class="col-sm-6">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                              </div>
                            </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Default</a>
                                <a class="dropdown-item" href="#">Onmi On/Off</a>
                                <a class="dropdown-item" href="#">Target On/Off</a>
                                <a class="dropdown-item" href="#">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                          <div class="card-text x3dRenderDescription drinksText">
                          </div>
                        </div>
                      </div>
                </div>
        </div>  
        <div id="cokeDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_coke" class="card-title drinksText"></div>
                        <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                        <div id="description_coke" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                    </div>
                </div>
            </div>
        </div> 

        <div id="spriteDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_sprite" class="card-title drinksText"></div>
                        <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                        <div id="description_sprite" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
                    </div>
                </div>
            </div>
        </div> 
        <div id="pepperDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                    </div>
                </div>
            </div>
        </div> 
    </div>  
    <nav id="footerColor" class="navbar navbar-expand-sm footer">
        <div class="container-fluid">   
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline">&copy 2023 3D Apps </span></p>
            </div>
            <div class="navbar-text social">
                  <a href="#"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
            </div>
        </div>
    </nav> 

    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
            <div class="modal-content">
            
            <div class="modal-header">
                <h4 class="modal-title">3D App Contact Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <div class="modal-body">
                <p>Dr Martin White, Chichester 1, 126, Email: m.white@sussex.ac.uk</p>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
            
            </div>
        </div>
    </div>

<?php foreach ($jsFiles as $jsFile) : ?>
    <script src="<?= $jsFile ?>"></script>
<?php endforeach; ?>

</body>
</html>
