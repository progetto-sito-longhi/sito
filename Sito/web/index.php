<!DOCTYPE html>
<html lang="en">
<?php 
    include 'includes/head.php';
?>
<body data-spy="scroll" data-target=".fixed-top">
    
    <?php 
        include 'includes/navigation.php';
    ?>


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1>PILLOLE <br>PER <span id="js-rotating">PERSONE, ANIMALI, COSE</span></h1>
                        <p class="p-large">Vogliamo aiutare chi ogni giorno deve preoccuparsi della propria salute o di quella altrui, attraverso un dispositivo che semplifichi l’assunzione giornaliera di medicinali. Acquistalo ora!</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/header-smartphones.png" alt="alternative">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Testimonials -->
   <!-- <div class="slider-1 bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
              <!--      <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                <!--                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-1.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">I just finished my trial period and was so amazed with the support and good results that I purchased Leno.</p>
                                            <p class="testimonial-author">Jude Thorn - Designer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                     <!--           <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-2.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">I don't know how I managed to get work done without Leno. The speed of this application is amazing!</p>
                                            <p class="testimonial-author">Roy Smith - Developer</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                     <!--           <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">This app has the potential of becoming a mandatory tool in every marketer's day to day operations flow.</p>
                                            <p class="testimonial-author">Marsha Singer - Marketer</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                    <!--            <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Searching for a great marketing automation app was difficult but thankfully I found Leno.</p>
                                            <p class="testimonial-author">Tim Shaw - Designer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                     <!--           <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-5.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Leno's support team is amazing. They've helped me with some issues and I am so grateful for their fast response.</p>
                                            <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                       <!--         <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-6.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Who would have thought that Leno can provide such amazing results in just a few weeks with an easy learning curve.</p>
                                            <p class="testimonial-author">Ann Blake - Developer</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                            
                      <!--      </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                       <!--     <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                    <!--    </div> <!-- end of swiper-container -->
                 <!--   </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

              <!--  </div> <!-- end of col -->
          <!--  </div> <!-- end of row -->
       <!-- </div> <!-- end of container -->
    <!--</div> <!-- end of slider-1 -->
    <!-- end of testimonials -->


    <!-- Features -->
    <div class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">FEATURES</h2><br>
                    <!--<div class="p-heading">Leno was designed based on input from personal development coaches and popular trainers so it offers all required features</div> -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">

                <!-- Tabs Links -->
                <ul class="nav nav-tabs" id="templateTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-mobile-alt"></i>APP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-pills"></i>DISPOSITIVO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-search"></i>COMBO ???</a>
                    </li>
                </ul>
                <!-- end of tabs links -->


                <!-- Tabs Content-->
                <div class="tab-content" id="templateTabsContent">
                    
                    <!-- Tab -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="container">
                            <div class="row">
                                
                                <!-- Icon Cards Pane -->
                                <div class="col-lg-4">
                                    <ul class="list-unstyled li-space-lg first">
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="far fa-compass fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Goal Setting</h4>
                                                <p>Like any self improving process, everything starts with setting your goals and committing to them</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-code fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Visual Editor</h4>
                                                <p>Leno provides a well designed and ergonomic visual editor for you to edit your quick notes</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="far fa-gem fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Refined Options</h4>
                                                <p>Each option packaged in the app's menus is provided in order to improve you personally</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div> <!-- end of col -->
                                <!-- end of icon cards pane -->

                                <!-- Image Pane -->
                                <div class="col-lg-4">
                                    <img class="img-fluid" src="images/features-smartphone-1.png" alt="alternative">
                                </div> <!-- end of col -->
                                <!-- end of image pane -->
                                
                                <!-- Icon Cards Pane -->
                                <div class="col-lg-4">
                                    <ul class="list-unstyled li-space-lg">
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-calendar-alt fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Calendar Input</h4>
                                                <p>Schedule your appointments, meetings and periodical evaluations using the tools</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-book fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Easy Reading</h4>
                                                <p>Reading focus mode for long form articles, ebooks and other materials with long text</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-cube fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Good Foundation</h4>
                                                <p>Get a solid foundation for your self development efforts. Try Leno mobile app for devices</p>
                                            </div>
                                        </li>
                                    </ul> 
                                </div> <!-- end of col -->
                                <!-- end of icon cards pane -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                        <div class="container">
                            <div class="row">

                                <!-- Image Pane -->
                                <div class="col-lg-4">
                                    <img class="img-fluid" src="images/features-smartphone-2.png" alt="alternative">
                                </div> <!-- end of col -->
                                <!-- end of image pane -->
                                
                                <!-- Text And Icon Cards Area -->
                                <div class="col-lg-8">
                                    <h3>Track Result Based On Your</h3>
                                    <p class="sub-heading">After you've configured the app and settled on the data gathering techniques you can start the information trackers and begin collecting those long awaited interesting details.</p>
                                    <ul class="list-unstyled li-space-lg first">
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-cube fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Good Foundation</h4>
                                                <p>Get a solid foundation for your self development efforts. Try Leno mobile app now</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-book fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Easy Reading</h4>
                                                <p>Reading focus mode for long form articles, ebooks and other materials with long text</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="far fa-compass fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Goal Setting</h4>
                                                <p>Like any self improving process, everything starts with setting goals and comiting</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled li-space-lg">
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-calendar-alt fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Calendar Input</h4>
                                                <p>Schedule your appointments, meetings and periodical evaluations using the tools</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-code fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Visual Editor</h4>
                                                <p>Leno provides a well designed and ergonomic visual editor for you to edit your notes</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="far fa-gem fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Refined Options</h4>
                                                <p>Each option packaged in the app's menus is provided in order to improve you personally</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div> <!-- end of col -->
                                <!-- end of text and icon cards area -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                        <div class="container">
                            <div class="row">

                                <!-- Text And Icon Cards Area -->
                                <div class="col-lg-8">
                                    <ul class="list-unstyled li-space-lg first">
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-cube fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Good Foundation</h4>
                                                <p>Get a solid foundation for your self development efforts. Try Leno mobile app today</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-book fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Easy Reading</h4>
                                                <p>Reading focus mode for long form articles, ebooks and other materials with long text</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="far fa-compass fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Goal Setting</h4>
                                                <p>Like any self improving process, everything starts with setting your goals and comiting</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled li-space-lg">
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-calendar-alt fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Calendar Input</h4>
                                                <p>Schedule your appointments, meetings and periodical evaluations using the tools</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-code fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Visual Editor</h4>
                                                <p>Leno provides a well designed and ergonomic visual editor for you to edit your notes</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <span class="fa-stack">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="far fa-gem fa-stack-1x"></i>
                                            </span>
                                            <div class="media-body">
                                                <h4>Refined Options</h4>
                                                <p>Each option packaged in the app's menus is provided in order to improve you personally</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3>Monitoring Tools Evaluation</h3>
                                    <p class="sub-heading">Monitor the evolution of your finances and health state using tools integrated in Leno. The generated real time reports can be filtered based on any desired criteria.</p>
                                </div> <!-- end of col -->
                                <!-- end of text and icon cards area -->

                                <!-- Image Pane -->
                                <div class="col-lg-4">
                                    <img class="img-fluid" src="images/features-smartphone-3.png" alt="alternative">
                                </div> <!-- end of col -->
                                <!-- end of image pane -->
                                    
                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div><!-- end of tab-pane -->
                    <!-- end of tab -->

                </div> <!-- end of tab-content -->
                <!-- end of tabs content -->

            </div> <!-- end of row --> 
        </div> <!-- end of container --> 
    </div> <!-- end of tabs -->
    <!-- end of features -->


    <!-- Video -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">PRESENTAZIONE</h2>
                    <div class="p-heading">Di seguito il video dimostrativo del nostro dispositivo</div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">
                                <img class="img-fluid" src="images/video-frame.jpg" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of video -->


    <!-- Details 1 -->
    <div class="basic-2 bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-1.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>ACQUISTA LA VERSIONE COMPLETA</h2>
                        <p>Con la versione base potrai godere di tutte le funzionalità del nostro prodotto senza alcuna limtazione </p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-1-lightbox">Compra Ora</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->


    <!-- Details 1 Lightbox -->
    <!-- Lightbox -->
<!--	<div id="details-1-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
			<div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="images/details-1-lightbox.jpg" alt="alternative">
                </div>  end of image-container 
			</div>  end of col 
			<div class="col-lg-4">
                <h3>Goals Setting</h3>
				<hr>
                <p>The app can easily help you track your personal development evolution if you take the time to set it up.</p>
                <h4>User Feedback</h4>
                <p>This is a great app which can help you save time and make your live easier. And it will help improve your productivity.</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Splash screen panel</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Statistics graph report</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Events calendar layout</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Location details screen</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Onboarding steps interface</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#header">Download</a> <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
			</div>  end of col 
		</div>  end of row 
    </div>  end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details 1 lightbox -->


    <!-- Details 2 -->
    <div class="basic-3 bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>ACQUISTA LA VERSIONE COMPATTA</h2>
                        <p>Con questa versione potrai avere sempre con te il dispositvo</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-1-lightbox">Compra Ora</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-2.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of details 2 -->


    <!-- Statistics -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Counter -->
                    <div id="counter">
                        <div class="cell">
                            <i class="fas fa-users"></i>
                            <div class="counter-value number-count" data-count="231">1</div>
                            <p class="counter-info p-small">Happy Customers</p>
                        </div>
                        <div class="cell">
                            <i class="fas fa-code green"></i>
                            <div class="counter-value number-count" data-count="385">1</div>
                            <p class="counter-info p-small">Good Reviews</p>
                        </div>
                        <div class="cell">
                            <i class="fas fa-cog red"></i>
                            <div class="counter-value number-count" data-count="159">1</div>
                            <p class="counter-info p-small">Press Articles</p>
                        </div>
                        <div class="cell">
                            <i class="fas fa-comments yellow"></i>
                            <div class="counter-value number-count" data-count="127">1</div>
                            <p class="counter-info p-small">Solved Issues</p>
                        </div>
                        <div class="cell">
                            <i class="fas fa-rocket blue"></i>
                            <div class="counter-value number-count" data-count="211">1</div>
                            <p class="counter-info p-small">Future Updates</p>
                        </div>
                    </div>
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->


    <!-- Screenshots -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">SCREENS</h2>
                    <hr class="hr-heading">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-1.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-1.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-2.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-2.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-3.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-3.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-4.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-4.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-5.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-5.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-6.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-6.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-7.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-7.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-8.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-8.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-9.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-9.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-10.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-10.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->
                                
                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of screenshots -->


    <!-- Download -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h3>Scarica ora la nostra applicazione Helpills per sfruttare al meglio i nostri prodotti</h3>
                        <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>iOS</a>
                        <a class="btn-solid-lg" href="#your-link"><i class="fab fa-google-play"></i>Android</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/download.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of download -->

<?php
    include 'includes/footer.php';
?>

</body>
</html>