@extends('layout/main')

@section('title','MI Al-Huda')


@section('container')
        <!-- <div class="container text-center">
            <div class="row">
                <div class="col-10">
                    <h1 class="mt-3">MADRASAH IBTIDAIYAH AL-HUDA</h1>
                </div>
            </div>
        </div> -->

        <style>
        .card{
            margin-top: 50px;
            margin-bottom: 50px;
            margin-left: 350px;
            margin-right: 220px;
            width: 75%
            position: relative;
            
        }
        /* @media only screen and (min-width: 207px) and (max-width: 1107px) {
         .overlay img {
            height: 120px;
            position: relative;
            top: 190px;
         }
         #prev #next {
            margin-left: 5px;
         }
         #close {
            position: relative;
            margin-top: 190px;
         }
      }
            @media only screen and (min-width: 207px) and (max-width: 575px) {
         .img-thumbnail {
            width: 35%;
         }
            } */

        

        </style>

        <!-- <section>
            <div class="card" style="width: 18rem;">
                <img src="{{ ('img/kepalami.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/home" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
        </section> -->

        <section>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ ('img/keyayasan.jpg') }}" class="card-img" alt="gambar" height="100%">
                    </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-info">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                </div>
            </div>
                
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-info">Kepala MI Al-Huda</h5>
                                <p class="card-text">Bapak Khoirul Wafa, S.Sos.I., M.Pd.I. </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                            <div class="col-md-4">
                                <img src="{{ ('img/pakwafa.jpeg') }}" class="card-img" alt="gambar" height="100%">
                            </div>
                    </div>
                </div>
        </section>

        <section>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4 text-info">
                        <img src="{{ ('img/pakketut.jpeg') }}" class="card-img" alt="gambar" height="100%">
                    </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-info">Wali Kelas 4</h5>
                                <p class="card-text">Bapak Ketut Crus Pramono, S. Pd. </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                </div>
            </div>
                
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-info">Wali Kelas 6</h5>
                                <p class="card-text">Ibu Mujinah, S.Pd. </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                            <div class="col-md-4">
                                <img src="{{ ('img/bumuji.jpeg') }}" class="card-img" alt="gambar" height="100%">
                            </div>
                    </div>
                </div>
        </section>

        <section>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4 text-info">
                        <img src="{{ ('img/pakbahrul.jpeg') }}" class="card-img" alt="gambar" height="100%">
                    </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-info">Wali Kelas 3</h5>
                                <p class="card-text">Bapak Muhamamd Bahrul Ulum, S. Pd. I.  </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                </div>
            </div>
                
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-info">Wali Kelas 1</h5>
                                <p class="card-text">Ibu Siti Ainun Aisiyah, S.Pd.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                            <div class="col-md-4">
                                <img src="{{ ('img/buainun.jpeg') }}" class="card-img" alt="gambar" height="100%">
                            </div>
                    </div>
                </div>
        </section>

        <!-- <section>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="..." class="card-img" alt="...">
                    </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                </div>
            </div>
        </section> -->

        <!-- <section>
            <div class="card mb-3">
                <img src="{{ ('img/kepalami.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <div class="card-body text-info">
                        <h5 class="card-title">Kepala Madrasah Ibtidaiyah Al-Huda</h5>
                        <div class="card-body text-dark">
                        <p class="card-text">Beliau Bapak Khoirul Wafa, S.Sos.I., M.Pd.I. kepala dari MI Al-Huda</p> -->
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        <!-- <a href="/home" class="btn btn-primary">HOME</a>
                    </div>
            </div> -->
                <!-- <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                        <img src="..." class="card-img-bottom" alt="...">
                </div> -->

        <!-- </section> -->
@endsection


<!-- <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI Al-Huda</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
    html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
}


/* Jumbotron */
.jumbotron {
    background-image: url(img/mvvah.jpg);
    background-size: cover;
    height: 640px; 
    position: relative;
}
.jumbotron .container{
    z-index: 1;
    position: relative;
}

.jumbotron::after{
    
    display: block;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to top, rgba(0,0,0,1) rgba(0,0,0,0));
    position: absolute;
    bottom: 0;
}

.jumbotron .display-4{
    color: white;
    text-align: center;
    margin-top: 50px;
    font-weight: 200;
}
.jumbotron .display-4 span{
    font-weight: 500;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.7);

}

.jumbotron{
    background-image: url(img/black2.jpg);
    background-attachment: fixed;
    background-size: cover;
    background-position: 0 -100px;
    color: white;
    overflow: hidden;
}
.jumbotron img{
    width: 200px;
    border: 5 px solid #eaeaea;
    box-shadow: 1px 1px 10px rgba(0,0,0,0.5);;
}

.jumbotron h1, .jumbotron p{
    color: rgba(255,255,255,.8);
    text-shadow: 1px 1px 10px rgba(0,0,0,0.5);
}
hr{
    width: 250px;
    border-top: 3px solid #999;
}
section {
    min-height: 600px;
}

.kiri, .kanan {
    opacity: 0;
    transform: translate(-50px, 0);
    transition: 1.2s;
}

.kanan {
    transform: translate(50px, 0);
}

.kiri-go, .kanan-go {
    opacity: 1;
    transform: translate(0, 0);
}

.portfolio{
    background-color: #eee;
}
.portfolio .thumbnail{
    opacity: 0;
    transform: translate(0, -40px);
    transition: .3s;
}

.portfolio .thumbnail.muncul{
    opacity: 1;
    transform: translate(0,0);
}

.contact {
    min-height: 800px;
}

.bg{
    width: 100%;
    height: 100%;
    background-image: url("img/bg.png");
    background-repeat: repeat;
    background-size: cover;
}

.full-height {
    height: 100vh;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.navbar{
    position: relative;
}

.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}

.content {
    text-align: center;
    /* position: relative;
    top: 100px; */
}

.content-left {
    position: relative;
    top: 150px;
    right: 550px;
}

.text-blue {
    color: #6699CB;
    z-index: 100;
    
}

.description {
    max-width: 300px;
}

.btn-primary {
    background-color: #6699CB !important;
}

.btn {
    border-radius: 50px !important;
}

.title {
    font-size: 84px;
}

.links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.m-b-md {
    margin-bottom: 30px;
}
.image2{
    position: relative;
    bottom: 420px;
}
.image1{
    z-index: 100;
    position: relative;
    left: 1000px;
}
    </style>

    <script>
    // event pada saat link di klik
$('.page-scroll').on('click', function(e){

// ambil isi href
var tujuan = $(this).attr('href');
// tangkap elemen ybs
var elemenTujuan = $(tujuan);

// pindahkan scroll
$('body').animate({
    scrollTop: elemenTujuan.offset().top - 50
}, 1250, 'easeInOutExpo');

e.preventDefault();

});

// parallax
$(window).on('load', function(){
$('.kiri').addClass('kiri-go');
$('.kanan').addClass('kanan-go')
});

$(window).scroll(function(){
var wScroll = $(this).scrollTop();

$('.jumbotron img').css({
    'transform': 'translate(0px, '+ wScroll / 4 +'%)'
});

$('.jumbotron h1').css({
    'transform': 'translate(0px, '+ wScroll / 2 +'%)'
});

$('.jumbotron p').css({
    'transform': 'translate(0px, '+ wScroll / 1.2 +'%)'
});
    </script>
</head>

<body>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    <section>
        <div class="container-fluid">
            <div class="d-sm-flex justify-content-around content">
                <div class="content-left">
                    <br>
                    <h1 class="text-blue"><b>STUDY</b></h1>
                    <h1>ONLINE</h1>
                    <div class="description">
                        <p>MI AL - HUDA</p>
                    </div>
                    <br>
                    <a href="/home" class="btn btn-primary btn-lg">GET STARTED</a>
                </div>
            </div>
        </div>
        <div class="image1">
            <image src="miii.png" alt="" height="200px">
        </div>
        <div class="image2">
            <img src="bgblue.png" alt="" width="100%">

        </div>

    </div>

    </section>
</body>
</html> -->