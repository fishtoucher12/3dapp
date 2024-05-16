<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1, shrink-to-fit = no">
        
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="application/css/bootstrap.css">
        <!--X3dom-->
        <link rel="stylesheet" type="text/css" href="application/css/x3dom.css"></link>
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="application/css/all.css">
        <!-- Custom CSS-->
        <link rel="stylesheet" href="application/css/custom.css">
        <link rel="stylesheet" type="text/css" href="application/css/jquery.fancybox.min.css">
        

        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

        <title>Coca Cola 3D APP</title>
    </head>

    <body id="bodyColor">

        
        <!-- Logo and navigation bar -->
        <nav id="headerColor" class="navbar navbar-expand-sm navbar_coca_cola">
            <div class="container-fluid">
                <div class="logo">
                    <a class="navbar-brand" href="#">
                    <h1>1</h1>
                    <h1>oca</h1>
                    <h2>Cola</h2>
                    <h3>Journey</h3>
                    <p>Refreshing the world, one story at a time</p>
                    </a>
                </div>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a id='navHome' class="nav-link" href="#" data-toggle="popover" data-trigger="hover"
                            data-placement="bottom" title data-content="Home page of the websit" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover"
                            data-placement="bottom" title data-content="About Web 3D Applications" data-content="3D
                            Apps is a final year and postgraduate module ...">About</a>
                        </li>
                        <li class="nav-item">
                            <a id="navModels" class="nav-link" href="#" data-toggle="popover" data-trigger="hover"
                            data-placement="bottom" title data-content="There are three X3D models" data-original-title="X3D
                            3D Models">Models</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Start 3D App SPA Contents -->
        <div  class="container-fluid main_contents">
            <!-- Home page contents -->
            <div id="home">
                <!-- A row for the main 3D image-->
                <div class="row">
                    <div class="col-sm-12" >
                        <div id="main_3d_image">
                            <div id="main_text" class="col-xs-12 col-sm-6">
                                <div id="title_home"></div>
                                <div id="subTitle_home"></div>
                                <div id="description_home"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Coca cola-->
                <!-- A row to hold three cards for the Coke and onthers-->
                <div class="row">
                    <div class="col-sm-4">
                        <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste">
                            <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/site_images/coca_cola400.jpg" alt="Coca Cola" id="homeimg1">
                        </a>
                    </div>
                    <div class="col-sm-4 homeText">
                        <div class="card-title drinksText" id="title_left"></div>
                        <div class="card-subtitle drinksText" id="subTitle_left"></div>
                        <div class="card-text drinksText" id="description_left"></div>
                        
                    </div>
                    <div class="col-sm-4">
                        <a href="assets/images/renderImages/coke0.jpg" data-fancybox data-caption="My 3D Coke Can Render">
                            <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/site_images/home_coke.png" alt="Coca Cola" id="homeimg2">
                        </a>
                    </div>
                </div>

                <!--sprite-->
                <div class="row">
                    <div class="col-sm-4">
                        <a href="https://www.coca-cola.com/gb/en/brands/sprite">
                            <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/site_images/sprite400.jpg" alt="Sprite" id="homeimg1">
                        </a>
                    </div>
                    <div class="col-sm-4 homeText">
                        <div class="card-title drinksText" id="title_centre"></div>
                        <div class="card-subtitle drinksText" id="subTitle_centre"></div>
                        <div class="card-text drinksText" id="description_centre"></div>
                        
                    </div>
                    <div class="col-sm-4">
                        <a href="assets/images/renderImages/sprite0.png" data-fancybox data-caption="My 3D Sprite Render">
                            <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/site_images/home_sprite.png" alt="Sprite" id="homeimg2">
                        </a>
                    </div>
                </div>

                <!-- Dr Pepper-->
                <div class="row">
                    <div class="col-sm-4">
                        <a href="https://www.coca-cola.com/gb/en/brands/dr-pepper">
                            <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/site_images/dr_pepper400.jpg" alt="Dr pepper" id="homeimg1">
                        </a>
                    </div>
                    <div class="col-sm-4 homeText">
                        <div class="card-title drinksText" id="title_right"></div>
                        <div class="card-subtitle drinksText" id="subTitle_right"></div>
                        <div class="card-text drinksText" id="description_right"></div>
                        
                    </div>
                    <div class="col-sm-4">
                        <a href="assets/images/renderImages/pepper0.png" data-fancybox data-caption="My 3D Drpepper Render">
                            <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/site_images/home_pepper.png" alt="Dr pepper" id="homeimg2">
                        </a>
                    </div>
                </div>
            </div>
            <!-- End home page -->

            <!-- About page block element -->
            <div id="about">These web pages are submitted as part requirement for the degree of 
                Master of Science Computing with Digital Media at the University of Sussex.  
                They are the product of my own labour except where indicated in the web page content. 
                These web pages or contents may be freely copied and distributed provided the source is 
                acknowledged</div>
            <!-- End home page -->

            <!-- Start X3D models and 3D Image Gallery -->
            <div id="models">
                <!-- Row to hold two cards to hold 1) the X3D model and 2) the gallery-->
                <div class="row">
                    <!-- Coloumn to hold the X3D Model-->
                    <div class="col-sm-9">
                        <div class="card text-left">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a id="navCoke" class="nav-link" href="#">Coke</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="navSprite" class="nav-link" href="#">Sprite</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="navPepper" class="nav-link" href="#">Dr Pepper</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Bootstrap 4 card body to hold information about the X3D model-->
                            <div class="card-body">
                                <div id="coke">
                                    <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                                    <!-- Place the X3D code here-->
                                    <div class="model3D">
                                        <x3d>
                                            <scene>
                                                <inline id="cokeInline" nameSpaceName="cokeModel" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/coke.x3d"></inline>
                                            </scene>
                                        </x3d>
                                    </div>
                                    <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                                </div>

                                <!-- Sprite model-->
                                <div id="sprite" style="display: none;">
                                    <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                                    <!-- Place the X3D code here-->
                                    <div class="model3D">
                                        <x3d>
                                            <scene>
                                                <inline id="spriteInline" nameSpaceName="spriteModel" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/sprite.x3d"></inline>
                                            </scene>
                                        </x3d>
                                    </div>
                                    <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                                </div>

                                <!-- Dr Pepper model-->
                                <div id="pepper" style="display: none;">
                                    <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                                    <!-- Place the X3D code here-->
                                    <div class="model3D">
                                        <x3d>
                                            <scene>
                                                <inline id="pepperInline" nameSpaceName="pepperModel" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/pepper.x3d"></inline>
                                            </scene>
                                        </x3d>
                                    </div>
                                    <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Coloumn to hold the 3D Image gallery -->
                    <div class="col-sm-3">
                        <div class="card text-left">
                            <div class="card-header gallery-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Gallery</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="card-title title_gallery drinksText"></div>
                                <!-- Dynamically generated image gallery using JS and PHP -->
                                <div class="gallery" id="gallery"></div>
                                <div class="card-text description_gallery drinksText"></div>
                            </div>
                        </div>                   
                    </div>
                </div>
            </div>
            <!--End Coke page-->
            
            <!-- Start the interaction panels -->
            <div id="interaction" class="row">
                <!-- Column for the camera view controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                            <h3 class="interactionHeader">Cameras</h2>
                        </div>
                        <div class="card-body">
                            <div class="card-Title x3dCameraSubtitle drinksText"></div>
                            <div id="cokeCameraController">
                                <a id="cokeCameraDefaultButton" href="javascript:swapCokeCameraButton('cokeCameraDefaultButton')" class="btn btn-responsive controlButton" onclick="cokeCameraFront();">Default</a>
                                <a id="cokeCameraBackButton" href="javascript:swapCokeCameraButton('cokeCameraBackButton')" class="btn btn-responsive controlButton" onclick="cokeCameraBack();">Back</a>
                                <a id="cokeCameraLeftButton" href="javascript:swapCokeCameraButton('cokeCameraLeftButton')" class="btn btn-responsive controlButton" onclick="cokeCameraLeft();">Left</a>
                                <a id="cokeCameraRightButton" href="javascript:swapCokeCameraButton('cokeCameraRightButton')" class="btn btn-responsive controlButton" onclick="cokeCameraRight();">Right</a>
                            </div>
                            <div id="spriteCameraController">
                                <a id="spriteCameraDefaultButton" href="javascript:swapSpriteCameraButton('spriteCameraDefaultButton')" class="btn btn-responsive controlButton" onclick="spriteCameraFront();">Default</a>
                                <a id="spriteCameraBackButton" href="javascript:swapSpriteCameraButton('spriteCameraBackButton')" class="btn btn-responsive controlButton" onclick="spriteCameraBack();">Back</a>
                                <a id="spriteCameraLeftButton" href="javascript:swapSpriteCameraButton('spriteCameraLeftButton')" class="btn btn-responsive controlButton" onclick="spriteCameraLeft();">Left</a>
                                <a id="spriteCameraRightButton" href="javascript:swapSpriteCameraButton('spriteCameraRightButton')" class="btn btn-responsive controlButton" onclick="spriteCameraRight();">Right</a>
                            </div>
                            <div id="pepperCameraController">
                                <a id="pepperCameraDefaultButton" href="javascript:swapPepperCameraButton('pepperCameraDefaultButton')" class="btn btn-responsive controlButton" onclick="pepperCameraFront();">Default</a>
                                <a id="pepperCameraBackButton" href="javascript:swapPepperCameraButton('pepperCameraBackButton')" class="btn btn-responsive controlButton" onclick="pepperCameraBack();">Back</a>
                                <a id="pepperCameraLeftButton" href="javascript:swapPepperCameraButton('pepperCameraLeftButton')" class="btn btn-responsive controlButton" onclick="pepperCameraLeft();">Left</a>
                                <a id="pepperCameraRightButton" href="javascript:swapPepperCameraButton('pepperCameraRightButton')" class="btn btn-responsive controlButton" onclick="pepperCameraRight();">Right</a>
                            </div>
                            
                            <div class="card-text x3dCameraDescription drinksText"></div>

                        </div>
                    </div>
                </div>

                <!-- Column for the animation controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                            <h3 class="interactionHeader">Animation</h2>
                        </div>

                        <div class="card-body">
                            <div class="card-text x3dAnimationDescription drinksText"></div>
                        </div>
                    </div>
                </div>

                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                            <h3 class="interactionHeader">Lights</h2>
                        </div>

                        <div class="card-body">
                            <div class="card-Title x3dLightSubtitle drinksText"></div>
                            <div id="cokeHeadlightController">
                                <a id="cokeHeadlightButton" href="#" class="btn btn-responsive controlButton" onclick="cokeHeadlight();">Headlight</a>
                            </div>
                            <div id="spriteHeadlightController">
                                <a id="spriteHeadlightButton" href="#" class="btn btn-responsive controlButton" onclick="spriteHeadlight();">Headlight</a>
                            </div>
                            <div id="pepperHeadlightController">
                                <a id="pepperHeadlightButton" href="#" class="btn btn-responsive controlButton" onclick="pepperHeadlight();">Headlight</a>
                            </div>
                            
                            <div class="card-text x3dLightDescription drinksText"></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- End the interaction panels -->

            <!-- Row to hold one card to hold the coke descriptive text, etc.-->
            <div id="cokeDescription" class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="title_coke" class="card-title drinksText"></div>
                            <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                            <div id="description_coke" class="card-text drinksText"></div>   
                            <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                        </div>
                    </div>
                </div>
            </div>
            <!-- End coke description contents -->

            <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
            <div id="spriteDescription" class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="title_sprite" class="card-title drinksText"><h2>Sprite — Fanta Klare Zitrone</h2><h2></h2></div>
                            <div id="subTitle_sprite" class="card-subtitle drinksText"><h3>First introduced in 1961</h3></div>
                            <div id="description_sprite" class="card-text drinksText"><p>Crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of Coca Cola's no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.</p></div>  
                            <a href="https://www.coca-cola.com/gb/en/brands/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
                        </div>
                    </div>
                </div>
            </div>
            <!-- End sprite description contents -->

            <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
            <div id="pepperDescription" class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="title_pepper" class="card-title drinksText"><h2>Dr Pepper — Liquid Sunshine</h2><h2></h2></div>
                            <div id="subTitle_pepper" class="card-subtitle drinksText"><h3>23 fruit flavours</h3></div>
                            <div id="description_pepper" class="card-text drinksText"><p>Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.</p></div>  
                            <a href="https://www.coca-cola.com/gb/en/brands/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                        </div>
                    </div>
                </div>
            </div>
            <!-- End pepper description contents -->

        </div>
 

        <br>
        <!--Your 3D App footer-->
        <nav id="footerColor" class="navbar navbar-expand-sm footer">
            <div class="container">
                <div class="navbar-text float-left copyright">
                    <p><span class="align-baseline">&copy 2024 Mobile Web 3D Application
                        <a href="javascript:changeLook()">Restyle</a>
                        <a href="javascript:changeBack()">Reset</a>
                    </span></p>
                    
                </div>
                <div class="navbar-text social">
                    <a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right" style="font-size: 20px; color: red;"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-2x" style="font-size: 20px; color: green;"></i></a>
                    <a href="#"><i class="fab fa-google fa-2x" style="font-size: 20px; color: blue;"></i></a>
                    <a href="#"><i class="fab fa-github-square fa-2x" style="font-size: 20px; color: yellow;"></i></a>
                </div>
            </div>
        </nav>

        <div class="modal fade" id="contactModal" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">3D App Contact Details</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <p>Jiaxi Pan, Chichester 1, 126, Email: jp750@sussex.ac.uk</p>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                
                </div>
            </div>
        </div>
        
        


        <!-- jQuery first, then popper.js then Bootstrap JS-->
        <script src="application/js/jquery-3.4.1.js"></script>
        <script src="application/js/popper.min.js"></script>
        <script src="application/js/bootstrap.js"></script>

        <!--Font awesome Version 5-->
        <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>
        <!-- Include the x3dom JavaScript-->
        <script type="text/javascript" src="application/js/x3dom.js"></script>
        <!-- Custom JavaScript-->
        <script type="text/javascript" src="application/js/custom.js"></script>
        <!-- JavaScript to swap for SPA and restyle -->
        <script src="application/js/swap_restyle.js"></script>
        <!-- JavaScript and PHP based Gallery generator  -->
        <script src="application/js/gallery_generator.js"></script>
        <!-- JQuery code to get content data from a backend JSON file -->
        <script src="application/js/getJsonData.js"></script>
        <!-- JavaScript model interactions -->
        <script src="application/js/modelInteractions.js"></script>

        <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
        <script src="application/js/jquery.fancybox.min.js"></script>
        
    </body>
</html>