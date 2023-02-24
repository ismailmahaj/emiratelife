@extends('layout.nav')
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="6" data-background="img/pexels-aleksandar-pasaric-2115367.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 caption mt-90">
                <h1>Notre  <span>Gallerie</span></h1>
            </div>
        </div>
    </div>
</div>
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">Images</div>
                <div class="section-title">Image <span>Gallery</span></div>
            </div>
            <div class="col-md-4 gallery-item">
                <a href="img/slider/2.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="img/galerie/1.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 gallery-item">
                <a href="img/slider/11.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="img/galerie/2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 gallery-item">
                <a href="img/slider/16.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="img/galerie/3.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 gallery-item">
                <a href="img/slider/15.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="img/galerie/4.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 gallery-item">
                <a href="img/slider/17.jpg" title="" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"> <img src="img/galerie/5.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
<section class="section-padding bg-lightnav">
    <div class="container">
        <div class="row">

            <!-- YouTubePopUp -->
            <div class="col-md-6">
                <div class="vid-area mb-30">
                    <div class="vid-icon"> <img src="img/galerie/6.jpg" alt="YouTube">

                            </span> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vid-area mb-30">
                    <div class="vid-icon"> <img src="img/galerie/7.jpg" alt="Vimeo">
                        <a class="video-gallery-button vid" href="img/galerie/17.mp4"> <span class="video-gallery-polygon">
                            <i class="ti-control-play"></i>
                            </span> </a>
                    </div>
                </div>
            </div>

            <!-- Magnific Popup {Custom, YouTube, Vimeo} -->
            <!-- custom -->
            <div class="col-md-4">
                <div class="vid-area mb-30">
                    <div class="vid-icon">
                        <img src="img/galerie/8.jpg" class="img-fluid" alt="Custom">

                    </div>
                </div>
            </div>
            <!-- youtube -->
            <div class="col-md-4">
                <div class="vid-area mb-30">
                    <div class="vid-icon">
                       <img src="img/galerie/9.jpg" class="img-fluid" alt="YouTube">
                        <a class="video-gallery-button vid" href="https://youtu.be/ODJgp1ITowg">

                        </a>
                    </div>
                </div>
            </div>
            <!-- vimeo -->
            <div class="col-md-4">
                <div class="vid-area mb-30">
                    <div class="vid-icon"> <img src="img/galerie/10.jpg" alt="Vimeo">


                            </span> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="vid-area mb-30">
                    <div class="vid-icon"> <img src="img/galerie/11.jpg" alt="Vimeo">


                            </span> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="vid-area mb-30">
                    <div class="vid-icon"> <img src="img/galerie/12.jpg" alt="Vimeo">


                            </span> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="vid-area mb-30">
                    <div class="vid-icon"> <img src="img/galerie/13.jpg" alt="Vimeo">


                            </span> </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
@extends('layout.footer')
