@extends('layout/main')

@section('title','home')


@section('container')

<header>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ ('img/OHAI.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-warning">
        <h5>BAPAK IBU GURU MI AL-HUDA</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ ('img/bapakibuguru.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block  text-warning">
        <h5>BAPAK IBU GURU BESERTA KETUA YAYASAN MI AL-HUDA</h5>
        <p> </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ ('img/bb.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<style>

/* .row{
  margin-top: 50px;
} */

.card{
  margin-top: 50px;
  margin-bottom: 50px;
  margin-left: 220px;
  margin-right: 220px;
  width: 75%
  position: relative;
}
/* carousel */
.carousel-item {
    height: 100vh;
    min-height: 350px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }


  /* gallery */
  .portfolio {
         height: 700px;
         /* background-color: #eee; */
         background-image: url(../image/bg\ putihhh.png);
         background-attachment: fixed;
         background-size: cover;
         background-position: 0 -100px;
         background-color: white;
         color: black;
         margin-top: 55px;
         box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.25);
      }
      .portfolio h2 {
         font-family: "Open Sans", sans-serif;
         font-size: 25px;
         margin-bottom: 50px;
         margin-top: 3px;
      }

  

      /*overlay*/
.overlay {
    width: 0;
    height: 0;
    overflow: hidden;
    position: fixed;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0);
    z-index: 9999;
    transition: 0.8s;
    text-align: center;
    padding: 80px 0;
}
.overlay:target {
    width: auto;
    height: auto;
    bottom: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.8);
}
.overlay img {
    max-height: 100%;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);
}
.overlay:target img {
    animation: zoomDanFade 1s;
}
.overlay #close {
    position: absolute;
    top: 50px;
    left: 50%;
    margin-left: -30px;
    color: #fff;
    font-family: Arial Rounded MT;
    font-size: 100%;
}

      /*navigasi*/
      #next,
      #prev {
         width: 52px;
         height: 52px;
         background-image: url(https://i.ibb.co/ggm7JcV/7.png);
         position: absolute;
         top: 40%;
         margin-left: 50px;
      }
      #prev {
         background-image: url(https://i.ibb.co/xg0WMV6/8.png);
         margin-left: -100px;
      }
      /*animasi*/
      @keyframes zoomDanFade {
         0% {
            transform: scale(0);
            opacity: 0;
         }
         100% {
            transform: scale(1);
            opacity: 1;
         }
      }
      .img-thumbnail {
         transition: 1.2s;
      }
      .img-thumbnail:hover {
         -ms-transform: scale(1.3);
         -webkit-transform: scale(1.3);
         transform: scale(1.3);
         z-index: 3;
      }
      @media only screen and (min-width: 207px) and (max-width: 1107px) {
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
      }

   /* berita */
   @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
  .gambar-bg{
    position: relative;
   width: 100%;
   height: 600px;
   left: -190px;
   bottom: 140px;
    z-index: -4;
/* 
	background-attachment: fixed;
	background-size: cover;
    background-position: 0 -100px; */
  }
  .sliders{
    max-width: 1100px;
    display: flex;
    margin-top: -550px;

}
    .sliders .kartu{
    flex: 1;
    margin: 0 10px;
    background: #fff;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.25);
    }
    .sliders .kartu #img{
    height: 200px;
    width: 100%;
    }
    .sliders .kartu #img img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    }
    .sliders .kartu .content{
    padding: 10px 20px;
    }
    .kartu .content .title{
    font-size: 20px;
    font-weight: 600;
    }
    .kartu .content .sub-title{
    font-size: 10px;
    font-weight: 600;
    color: #e74c3c;
    line-height: 20px;
    }
    .kartu .content p{
    text-align: justify;
    margin: 10px 0;
    }
    .kartu .content .tombol{
    display: block;
    text-align: left;
    margin: 0px 0;
    }
    .kartu .content .tombol button{
    background: #e74c3c;
    color: #fff;
    border: none;
    outline: none;
    font-size: 10px;
    padding: 1px 5px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.2s;
    }
    .kartu .content .tombol button:hover{
    transform: scale(0.9);
    }
        /* @media only screen and (min-width: 207px) and (max-width: 1107px){
        .sliders{
            top: 350px;
        }
            } */
    #berita{
        position: absolute;
        /* top: 10px; */
        font-family: 'Open Sans', sans-serif;
        font-size: 25px;
        }

       
</style>
</header>



    
<!-- <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="container text-center">
            <div class="row">
                <div class="col-10">
                <div class="container text-center">
                    <div class="jumbotron jumbotron-fluid">
                    <h1 class="display-4"></h1>
                        <div class="container text-center">
                            <img class="img-fluid img-thumbnail float-right" src="{{ ('img/alhuda1.jpg') }}" width="25%0" height="300%" class="rounded-circle">
                            <img class="background-image: linear-gradient(to top, rgba(0,0,0,1) rgba(0,0,0,0))" class="position-absolute">
                                <h1 class="display-4">MADRASAH IBTIDAIYAH AL-HUDA</h1>
                                    <p class="lead"> Bakalan-Rowomarto-Patianrowo, Kabupaten Nganjuk | 64391.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <section class="Portfolio" id="portfolio">
      <div class="container text-center">
          <div class="row ">
              <div class="col text-center">
                  <h2>Visi dan Misi</h2>

              </div>
          </div>

          <div class="row mb-4">
              <div class="col-md text-justify">
              
                    <div class="card">
                      <a href="" class="thumbnail">      -->
                      <!-- <img class="card-img-top" src="img/thumbs/comel.png" alt="card image cap"> -->
                          <!-- </a>
                            <div class="card-body"> -->
                              <!-- <p class="card-text">Visi</p> -->
                              <!-- <p class="card-text">Visi : </p>
                              <p class="card-text">Mewujudkan Madrasah yang BAIK (Berkarakter, Aktif, Inovatif dan Kompetitif dalam Ilmu dan Amal</p>
                            </div>
                          </div>
              </div>
                <div class="col-md">
                      <div class="card">
                              
                        <a href="" class="thumbnail"> -->
                          <!-- <img class="card-img-top" src="img/thumbs/hiya.jpg" alt="card image cap"> -->
                        <!-- </a>
                          <div class="card-body">
                                <p class="card-text">Misi : </p>
                                <p class="card-text">1. Implementasi sistem Pendidikan terpadu. </p>
                                <p class="card-text">2. Pelaksanaan proses pembelajaran yang komprehenship. </p>
                                <p class="card-text">3. Penciptaan situasi belajar yang kondusif. </p>
                                <p class="card-text">4. Pengamalan ajaran Islam dalam kehidupan sehari-hari. </p>
                              </div>
                            </div>
                </div>
  
            </div>
    
        </div>
    </section> -->
        
    <!-- <section>
    <div class="row" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">

        <h5 class="card-title">Visi</h5> -->
        <!-- <p class="card-text"></p> -->
        <!-- <ul>Mewujudkan Madrasah Ibtidaiyah Al-Huda yang mandiri, profesional, proporsional dan berkarakter</ul>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" >
    <div class="card">
      <div class="card-body">
        
        <h5 class="card-title">Misi</h5> -->
        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
        <!-- <ul>1. Implementasi sistem pendidikan terpadu</ul>
        <ul>1. Implementasi sistem pendidikan terpadu</ul>
        <ul>1. Implementasi sistem pendidikan terpadu</ul>
        <ul>1. Implementasi sistem pendidikan terpadu</ul>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div> -->
        <!-- <div class="card" >
            <div class="card-header">
                Featured
            </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <div class="card" >
          <div class="card-header">
                Featured
            </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div> -->
    </section>

    <section>
    <div class="card text-center" >
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="{{ url('/vismis') }}">Visi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/vismis') }}">Misi</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Visi dan Misi MI AL-HUDA</h5>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <a href="{{ url('/vismis') }}" class="btn btn-primary">Lihat Yuk -></a>
  </div>
</div>
    </section>


    <!-- gallery -->
<section class="portfolio" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2><i class="far fa-images" style="color: #68af03;"></i> Galeri</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="#gambar-1">
                            <img src="{{ ('img/gerakjalanpi.jpg') }}" class="img-thumbnail" />
                        </a>
                        <div class="overlay text-white" id="gambar-1">
                            <a id="close" href="#">x close</a>
                            <a href="#gambar-6" id="prev"></a>
                            <img src="{{ ('img/gerakjalanpi.jpg') }}" />
                            <a href="#gambar-2" id="next"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="#gambar-2">
                            <img src="{{ ('img/kelas6.jpg') }}" class="img-thumbnail" />
                        </a>
                        <div class="overlay text-white" id="gambar-2">
                            <a id="close" href="#">x close</a>
                            <a href="#gambar-1" id="prev"></a>
                            <img src="{{ ('img/kelas6.jpg') }}" />
                            <a href="#gambar-3" id="next"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="#gambar-3">
                            <img src="{{ ('img/yayasan.jpg') }}" class="img-thumbnail" />
                        </a>
                        <div class="overlay text-white" id="gambar-3">
                            <a id="close" href="#">x close</a>
                            <a href="#gambar-2" id="prev"></a>
                            <img src="{{ ('img/yayasan.jpg') }}" />
                            <a href="#gambar-4" id="next"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="#gambar-4">
                            <img src="{{ ('img/kuyy.jpg') }}" class="img-thumbnail" />
                        </a>
                        <div class="overlay text-white" id="gambar-4">
                            <a id="close" href="#">x close</a>
                            <a href="#gambar-3" id="prev"></a>
                            <img src="{{ ('img/kuyy.jpg') }}" />
                            <a href="#gambar-5" id="next"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="#gambar-5">
                            <img src="{{ ('img/dhuha.jpg') }}" class="img-thumbnail" />
                        </a>
                        <div class="overlay text-white" id="gambar-5">
                            <a id="close" href="#">x close</a>
                            <a href="#gambar-4" id="prev"></a>
                            <img src="{{ ('img/dhuha.jpg') }}" />
                            <a href="#gambar-6" id="next"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="#gambar-6">
                            <img src="{{ ('img/ccc.jpg') }}" class="img-thumbnail" />
                        </a>
                        <div class="overlay text-white" id="gambar-6">
                            <a id="close" href="#">x close</a>
                            <a href="#gambar-5" id="prev"></a>
                            <img src="{{ ('img/ccc.jpg') }}" />
                            <a href="#gambar-1" id="next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
  <div class="container-sm">
    <div class="gambar-bg">
      <img src="{{ ('img/logo.jpg') }}" alt="">
    </div>

    <!-- <div id="berita">
     <span>
        <i class="far fa-newspaper" style="color: #68af03;"></i>Berita Terbaru
      </span>
    </div> -->
      <div class="sliders owl-carousel">
        <div class="card kartu">
           <div id="img">
              <img src="https://awsimages.detik.net.id/community/media/visual/2020/03/17/17c31bfd-9957-4c1d-824f-f076e624302b.jpeg?w=700&q=90" alt="">
           </div>
           <div class="content">
              <div class="title">
                 Slamet Tumi
              </div>
              <div class="sub-title">
                 Graphic Designer
              </div>
              <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.
              </p>
              <div class="btn tombol">
                 <button>Read more</button>
              </div>
           </div>
        </div>
        <div class="card kartu">
           <div id="img">
              <img src="https://awsimages.detik.net.id/community/media/visual/2020/03/17/17c31bfd-9957-4c1d-824f-f076e624302b.jpeg?w=700&q=90" alt="">
           </div>
           <div class="content">
              <div class="title">
                 Pardi Sukidi
              </div>
              <div class="sub-title">
                 Web Developer
              </div>
              <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.
              </p>
              <div class="btn tombol">
                 <button>Read more</button>
              </div>
           </div>
        </div>
        <div class="card kartu">
           <div id="img">
              <img src="https://awsimages.detik.net.id/community/media/visual/2020/03/17/17c31bfd-9957-4c1d-824f-f076e624302b.jpeg?w=700&q=90" alt="">
           </div>
           <div class="content">
              <div class="title">
                 Abas Sori
              </div>
              <div class="sub-title">
                 App Developer
              </div>
              <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.
              </p>
              <div class="btn tombol">
                 <button>Read more</button>
              </div>
           </div>
        </div>
      </div>
   
  </div>
</section>

        
        

    <!-- <section id="contact" class="contact mb-5">
        <div class="container">
            <div class="row">
                <div class="col text-center pt-4 mb-4">
                    <h2>Contact Me</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4">
                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title">You can call me on: </h5>
                                  <p class="card-text">Wa : 08165403457</p>
                                </div>
                              </div>
                              <ul class="list-group">
                                    <li class="list-group-item"><h1>Location</h1></li>
                                    <li class="list-group-item">My Home</li>
                                    <li class="list-group-item">Bakalan, Rowomarto, Patianrowo, Nganjuk</li>
                                    <li class="list-group-item">East Java</li>
                                    
                                  </ul>
                </div>

                <div class="col-lg-6">
                        <form>
                                <div class="form-group">
                                  <label for="name">Name</label>
                                  <input type="text" class="form-control" id="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                  <label for="Email">Email</label>
                                  <input type="text" class="form-control" id="email" placeholder="Enter your email address">
                                </div>
                                <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" placeholder="Enter your number phone">
                                      </div>
                                <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="Message" id="Message" class="form-control" placeholder="Enter your message"> </textarea>
                                      </div>
                                      <div class="form-group">
                                          <button type="button" class="btn btn-dark">Send Message</button>

                                      </div>
                              </form>
                </div>  
            </div>
        </div>
    </section>
     -->
@endsection
