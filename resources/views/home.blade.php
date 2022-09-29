@extends('layouts.main')

@section('home')
<!-- box-intro -->
<section class="box-intro">
    <div class="table-cell">
        <h1 class="box-headline letters rotate-2">
            <div class="top-bar">
                <span class="box-words-wrapper">
                    <b class="is-visible">design.</b>
                    <b>&nbsp;coding.</b>
                    <b>graphic.</b>
                </span>
                <h5>everything you need to build your <strong>Digital Products</strong></h5>
            </div>
        </h1>
    </div>
</section>
<!-- end box-intro -->
</div>

<hr>
<!-- portfolio div -->
<div class="container main-container">
    <div class="portfolio-div">
        <div class="portfolio">
            <div class="no-padding portfolio_container">
                <!-- single work -->
                <div class="col-md-3 col-sm-6  fashion logo">
                    <a href="/logo" class="portfolio_item">
                        <img src="img/img-portofolio/logo.jpeg" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Logo Maker</span>
                                    <em>Details</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-3 col-sm-6  fashion logo">
                    <a href="/frontend" class="portfolio_item">
                        <img src="img/img-portofolio/frontend.png" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Front-End Dev</span>
                                    <em>Details</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-6 col-sm-12  fashion logo">
                    <a href="/mockup" class="portfolio_item">
                        <img src="img/img-portofolio/Mockup.png" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Mockup Web</span>
                                    <em>Details</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-3 col-sm-6  fashion logo">
                    <a href="/backend" class="portfolio_item">
                        <img src="img/img-portofolio/backend.png" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Back-End Dev</span>
                                    <em>Details</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-3 col-sm-6  fashion logo">
                    <a href="/design" class="portfolio_item">
                        <img src="img/img-portofolio/brosur.jpeg" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Design</span>
                                    <em>Details</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

            </div>
            <!-- end portfolio_container -->
        </div>
        <!-- portfolio -->
    </div>
    <!-- end portfolio div -->
</div>
<!-- end container -->

<hr>

<div class="container main-container">
    <h2 class="uppercase text-center">Our Services</h2>
    <div class="clearfix">
        <!-- service-box -->
        <div class="col-md-4 service-box">
            <i class="ion-android-favorite-outline size-50"></i>
            <h3>Custom Logo</h3>
            <div class="h-10"></div>
            <p>Banyak layanan jasa pembuatan Logo dengan harga yang relatif sangat mahal.
                Dengan layanan kami anda bisa mendapatkan harga yang terjangkau dengan desain sesuai kebutuhan. </p>
        </div>
        <!-- end service-box -->

        <!-- service-box -->
        <div class="col-md-4 service-box">
            <i class="ion-android-options size-50"></i>
            <h3>Website Service</h3>
            <div class="h-10"></div>
            <p>Ingin membuat website ? Tenang aja, kami memberikan pelayanan mulai dari membuat website dari nol sampai jadi. </p>
        </div>
        <!-- end service-box -->

        <!-- service-box -->
        <div class="col-md-4  service-box">
            <i class="ion-android-checkmark-circle size-50"></i>
            <h3>Creative Design</h3>
            <div class="h-10"></div>
            <p>Desain suka suka dan sepuasnya, sesuai dengan apa yang di inginkan dan kebutuhan anda. </p>
        </div>
        <!-- end service-box -->

    </div>
</div>

<div class="col-md-4">
    <img src="img/about.png" class="img-responsive" width="550" />
</div>

<div class="col-md-8">
    <h3 class="uppercase">About Us </h3>
    <h5>AA Creative Production</h5>
    <div class="h-30"></div>
    <p>
        Kami merupakan sekumpulan pelajar, yang membuka suatu usaha kecil-kecilan. Terdapat 2 orang yang mengelola usaha kami mulai dari jasa pembuatan design sampai dengan layanan pembuatan web.
        Kami membuka suatu usaha bertujuan untuk mendapatkan pengalaman kerja di bidang IT (Information Technology), yang dimana sudah sangat berkembang di kehidupan. Anda dapat mencari kami di sosial media dibawah ini
    </p>
    <div class="h-10"></div>
    <ul class="social-ul">
        <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
        <li class="box-social"><a href="#0"><i class="ion-social-instagram-outline"></i></a></li>
    </ul>
</div>

@endsection