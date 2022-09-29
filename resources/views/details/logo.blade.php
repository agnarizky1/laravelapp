@extends('layouts.main')

@section('logo')
<!-- top-bar -->
<div class="top-bar">
    <h1>Logo Maker</h1>
    <p><a href="/">Home</a> </a> / Logo Maker</p>
</div>
<!-- end top-bar -->

<!-- main-container -->
<div class="container main-container">
    <div class="slide-container">
        <span class="slider-span" id="slider-span1"></span>
        <span class="slider-span" id="slider-span2"></span>
        <span class="slider-span" id="slider-span3"></span>

        <div class="image-slider">
            <div class="slides-div" id="slide-1">
                <img src="img/img-portofolio/logo.jpeg" alt="" id="img1" class="img">
                <a href="#slider-span1" class="button-img" id="button-1"></a>
            </div>
            <div class="slides-div" id="slide-2">
                <img src="img/img-portofolio/logo2.jpeg" alt="" id="img2" class="img">
                <a href="#slider-span2" class="button-img" id="button-2"></a>
            </div>
            <div class="slides-div" id="slide-3">
                <img src="img/img-portofolio/logo3.jpeg" alt="" id="img3" class="img">
                <a href="#slider-span3" class="button-img" id="button-3"></a>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <h3>Logo Maker</h5>
            <div class="h-30"></div>
    </div>

    <div class="col-md-9">
        <p>Banyak sekali layanan jasa pembuatan logo secara online gratis atau berbayar maupun offline seperti di percetakan.
            Tetapi tidak semua layanan memberikan anda logo dengan tampilan secara profesional.
        </p>
        <p>Logo sangat penting dalam branding, seperti brand perusahaan ataupun merk dalam sebuah marketing. Percayalah, sebagai seorang desain grafis kami memberikan pelayanan terbaik serta kualitas tertinggi dengan harga terbaik</p>
    </div>

    <div class="col-md-3">
        <ul class="cat-ul">
            <li><i class="ion-ios-circle-filled"></i> Corel Draw</li>
            <li><i class="ion-ios-circle-filled"></i> Adobe Photoshop</li>
            <li><i class="ion-ios-circle-filled"></i> Figma</li>
        </ul>
        <div class="h-10"></div>
    </div>
</div>
<!-- end main-container -->
@endsection