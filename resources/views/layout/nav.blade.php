<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Emirate Life</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500&family=Poppins:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- CSS only -->


</head>

<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper navbar-brand valign">
                <a href="/">
                    <div class="logo"> <img src="img/eml.png" class="logo-img" alt=""> </div>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="icon-bar"><i class="ti-line-double"></i></span> </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown"> <span class="nav-link "> <a href="/"> Accueil </a></span>
                    </li>
                            <li class="nav-item dropdown"><span class="nav-link "><a href="/voituresport">Nos voitures </a> </span>   </li>

                    <li class="nav-item dropdown"> <span class="nav-link"> Nos activite <i class="ti-angle-down"></i></span>
                        <ul class="dropdown-menu last">
                            <li class="dropdown-item"><a href="/yacht">Yacht</a></li>
                            <li class="dropdown-item"><a href="/quad">Quad & Buggy</a></li>




                        </ul>
                    </li>
                  <!--  <li class="nav-item"><a class="nav-link" href="">Galerie</a></li>-->

                    </li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <body>
        @yield('content')
        <footer class="footer clearfix">
            <div class="container">
                <!-- First footer -->
                <div class="first-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="links dark footer-contact-links">
                                <div class="footer-contact-links-wrapper">
                                    <div class="footer-contact-link-wrapper">
                                        <div class="image-wrapper footer-contact-link-icon">
                                            <div class="icon-footer"> <i class="flaticon-phone-call"></i> </div>
                                        </div>
                                        <div class="footer-contact-link-content">
                                            <h6>Appelez-nous</h6>
                                            <p>+971 54 388 0817</p>
                                        </div>
                                    </div>
                                    <div class="footer-contact-links-divider"></div>
                                    <div class="footer-contact-link-wrapper">
                                        <div class="image-wrapper footer-contact-link-icon">
                                            <div class="icon-footer"> <i class="flaticon-message"></i> </div>
                                        </div>
                                        <div class="footer-contact-link-content">
                                            <h6>Écrivez-nous</h6>
                                            <p>info@Emiratelife.com</p>
                                        </div>
                                    </div>
                                    <div class="footer-contact-links-divider"></div>
                                    <div class="footer-contact-link-wrapper">
                                        <div class="image-wrapper footer-contact-link-icon">
                                            <div class="icon-footer"> <i class="flaticon-placeholder"></i> </div>
                                        </div>
                                        <div class="footer-contact-link-content">
                                            <h6>Adresse</h6>
                                            <p>Dubai</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second footer -->

                <!-- Bottom footer -->
                <div class="bottom-footer-text">
                    <div class="row copyright">
                        <div class="col-md-12">
                            <p class="mb-0">©2022 <a href="https://easyagency.be/">EasyAgency</a>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-bba8d03e-3d0f-4765-963e-8e857de19461"></div>
        <!-- jQuery -->
       <!-- <script src="js/jquery-3.6.0.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="js/jquery-migrate-3.0.0.min.js"></script>
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.isotope.v3.0.2.js"></script>
        <script src="js/pace.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scrollIt.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/YouTubePopUp.js"></script>
        <script src="js/select2.js"></script>
        <script src="js/datepicker.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/custom.js"></script>
        </body>

        </html>
    </body>
