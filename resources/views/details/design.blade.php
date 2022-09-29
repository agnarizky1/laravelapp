@extends('layouts.main')

@section('design')
<!-- top-bar -->
<div class="top-bar">
    <h1>Graphic Design</h1>
    <p><a href="/">Home</a> </a> / Graphic Design</p>
</div>
<!-- end top-bar -->

<!-- main-container -->
<div class="container main-container">
    <div class="slide-container">
        <span class="slider-span" id="slider-span1"></span>
        <span class="slider-span" id="slider-span2"></span>
        <span class="slider-span" id="slider-span3"></span>
        <span class="slider-span" id="slider-span4"></span>

        <div class="image-slider">
            <div class="slides-div" id="slide-1">
                <img src="img/img-portofolio/brosur.jpeg" alt="" id="img1" class="img">
                <a href="#slider-span1" class="button-img" id="button-1"></a>
            </div>
            <div class="slides-div" id="slide-2">
                <img src="img/img-portofolio/brosur2.jpeg" alt="" id="img2" class="img">
                <a href="#slider-span2" class="button-img" id="button-2"></a>
            </div>
            <div class="slides-div" id="slide-3">
                <img src="img/img-portofolio/brosur3.jpg" alt="" id="img3" class="img">
                <a href="#slider-span3" class="button-img" id="button-3"></a>
            </div>
            <div class="slides-div" id="slide-4">
                <img src="img/img-portofolio/brosur4.jpg" alt="" id="img4" class="img">
                <a href="#slider-span4" class="button-img" id="button-4"></a>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <h3 class="text-uppercase">Graphic Design</h3>
        <div class="h-30"></div>
    </div>
    <p>
        Selain mengerjakan dalam pembuatan logo, kami juga menerima layanan dalam pembuatan desain grafis.
        Banyak sekali orang-orang mencari desainer grafis dalam membuat sebuah desain, tetapi dengan harga yang relatif mahal membuat client enggan dalam memesan sebuah desain.
    </p>
    <p>
        Tapi TENAAANGG!!!... Kami memberikan kualitas terbaik dengan harga yang relatif murah, di AA Creative Production pelayanan terhadap client yang utama.
    </p>

</div>
<!-- end main-container -->
@endsection