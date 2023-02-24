@extends('layout.nav')
    <!-- Slider -->
   

    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="5" data-background="img/pexels-aleksandar-pasaric-2115367.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h2>Faites tout ce qui est possible a dubai avec nous</h2>
                                <h1>  Emirate Life</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </header>
    <!-- Tour Search -->

    <!-- About -->
    <section class="about cover section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">

                    <div class="section-title">Découvrez <span>nos locations</span> de voitures</div>
                    <p>Découvrez nos locations de voitures.</p>
                    <p>Service de qualité à bon prix</p>
                    <ul class="list-unstyled about-list mb-30">
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>5 ans d'experience</p>
                            </div>
                        </li>
                        
                    </ul>
                    <!-- Info -->
                    <div class="phone-call mb-30">
                        <div class="icon"><span class="flaticon-phone-call"></span></div>
                        <div class="text">
                            <p>Pour plus d'informations</p> <a href="tel: 971 54 388 0817">+971 54 388 0817</a>
                        </div>
                    </div>
                    <button type="button" class="button"> <a href="/voituresport">Voir nos locations</a></button>

                </div>
                <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                    <div class="img-exp">
                        <div class="about-img">
                            <div class="img"> <img src="img/600x750.jpg" class="img-fluid" alt=""> </div>
                        </div>
                        <div id="circle">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px"
                                viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                <defs>
                                    <path id="circlePath"
                                        d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                </defs>
                                <circle cx="150" cy="100" r="75" fill="none" />
                                <g>
                                    <use xlink:href="#circlePath" fill="none" />
                                    <text fill="#0f2454">
                                        <textPath xlink:href="#circlePath"> . travel agency . travel agency </textPath>
                                    </text>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tours 1 -->
    <section class="tours1 section-padding bg-lightnav" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>CHOISISSEZ VOTRE Activités
                        </span></div>
                    <div class="section-title">Activités <span>populaires</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="item">
                        <div class="position-re o-hidden"> <img
                                src="img/desert.jpg" alt="">
                        </div>
                        <div class="con">


                            <h5><a href="">Safari</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <br>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><img class="pad" src="img/jetski-accueil.jpg" alt=""></div>
                        <div class="con">
                            <h5><a href="">Jetski</a> </h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><img src="img/quels-sont-les-meilleurs-parcs-dattractions-en-france-scaled.jpeg" alt=""></div>
                        <div class="con">
                            <h5><a href="">Parc D'Attraction</a> </h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><img src="img/yacht.jpeg" alt=""></div>
                        <div class="con">
                            <h5><a href="">Yacht</a> </h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><img src="img/helicopter.jpg" alt=""></div>
                        <div class="con">
                            <h5><a href="">Helicopter</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Numbers -->

    <!-- Destination 1 -->

    <!-- Banner Tour Video -->
    <section class="dynamic-video-wrapper" data-overlay-dark="3">
        <video autoplay="autoplay" muted preload="auto" loop="loop">
            <source src="img/travel-video.mp4" type="video/mp4">
        </video>
        <div class="wrap-content v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1><a href="">Dubai</a></h1>
                        <h4><i class="ti-location-pin"></i> Emirate &nbsp;&nbsp;</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Italy & France Tours 1 -->
   
    <!-- Blog -->

    <!-- Testimonials -->
  
    


    <!-- Footer -->
@extends('layout.footer')