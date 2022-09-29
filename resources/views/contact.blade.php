@extends('layouts.main')

@section('contact')

<!-- top-bar -->
<div class="top-bar">
    <h1>Contact Me</h1>
    <p><a href="/">Home</a> </a> / Contact</p>
</div>
<!-- end top-bar -->

<!-- main-container -->
<div class="container main-container">

    <div id="mapid" style="height:500px"></div>
    <div class="col-md-12">

        <h3 class="text-uppercase">contact us</h3>
        <h5>Biography </h5>
        <div class="h-30"></div>
        <p>
            Diatas merupakan peta atau map lokasi usaha kami, lokasi kami bertempatan di Jember, Jawa Timur.
            Anda dapat menanyakan perihal tentang jasa yang kami tawarkan dengan menghubungi kontak yang tertera dibawah ini.
        </p>
        <div class="contact-info">
            <p><i class="ion-android-call"></i> 0812 5955 7129</p>
            <p><i class="ion-ios-email"></i> agnarizky88@gmail.com</p>
        </div>

    </div>
</div>
<script>
    //CARA NAMPILKAN MAP

    var mymap = L.map('mapid').setView([-8.191968291899, 113.70963324663164], 16);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        id: 'mapbox/streets-v11',
        maxZoom: 18
    }).addTo(mymap);

    //CARA MENDAPATKAN KOORDINAT LOKASI

    var latInput = document.querySelector("[name=latitude]");
    var lngInput = document.querySelector("[name=longitude]");

    var curLocation = [-8.191968291899, 113.70963324663164];

    mymap.attributionControl.setPrefix(false);

    var marker = new L.marker(curLocation, {
        draggable: 'true',
    });

    marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            draggable: 'true',
        }).bindPopup(position).update();
        $("#latitude").val(position.lat);
        $("#longitude").val(position.lng);
    });
    mymap.addLayer(marker);

    mymap.on("click", function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;

        if (!marker) {
            marker = L.marker(e.latlng).addTo(mymap);
        } else {
            marker.setLatLng(e.latlng);
        }
        latInput.value = lat;
        lngInput.value = lng;
    });
</script>

@endsection