@extends('layout/main')

@section('title','Fasilitas')


@section('container')

<style>

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
    margin: 10px 0;
    }
    .kartu .content .tombol button{
    background: #e74c3c;
    color: #fff;
    border: none;
    outline: none;
    font-size: 10px;
    padding: 5px 8px;
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

         /* gallery */
      .portfolio {
         height: 600px;
         /* background-color: #eee; */
         background-image: url(../image/bg\ putihhh.png);
         background-attachment: fixed;
         background-size: cover;
         background-position: 0 -100px;
         background-color: white;
         color: black;
         margin-top: 60px;
         box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.25);
      }
      .portfolio h2 {
         font-family: "Open Sans", sans-serif;
         font-size: 25px;
         margin-bottom: 50px;
         margin-top: 20px;
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


</style>

<!-- gallery -->
<section class="portfolio" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2><i class="far fa-images" style="color: #68af03;"></i> Fasilitas</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="#gambar-1">
                            <img src="{{ ('img/ruangkelas.jpg') }}" class="img-thumbnail" />
                        </a>
                        <div class="overlay text-white" id="gambar-1">
                        <a>Ruang Kelas</a>
                            <a id="close" href="#">x close</a>
                            <a href="#gambar-6" id="prev"></a>
                            <img src="{{ ('img/ruangkelas.jpg') }}" />
                            <a href="#gambar-2" id="next"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="#gambar-2">
                            <img src="{{ ('img/uks.jpg') }}" class="img-thumbnail" />
                        </a>
                        <div class="overlay text-white" id="gambar-2">
                        <a>UKS</a>
                            <a id="close" href="#">x close</a>
                            <a href="#gambar-1" id="prev"></a>
                            <img src="{{ ('img/uks.jpg') }}" />
                            <a href="#gambar-3" id="next"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="#gambar-3">
                            <img src="{{ ('img/masjid.jpg') }}" class="img-thumbnail" />
                        </a>
                        <div class="overlay text-white" id="gambar-3">
                        <a>Masjid</a>
                            <a id="close" href="#">x close</a>
                            <a href="#gambar-2" id="prev"></a>
                            <img src="{{ ('img/masjid.jpg') }}" />
                            <a href="#gambar-4" id="next"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="#gambar-4">
                            <img src="{{ ('img/alhuda1.jpg') }}" class="img-thumbnail" />
                        </a>
                        <div class="overlay text-white" id="gambar-4">
                        <a>Lapangan Upacara</a>
                            <a id="close" href="#">x close</a>
                            <a href="#gambar-3" id="prev"></a>
                            <img src="{{ ('img/alhuda1.jpg') }}" />
                            <a href="#gambar-5" id="next"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="#gambar-5">
                            <img src="{{ ('img/oit.jpg') }}" class="img-thumbnail" />
                        </a>
                        <div class="overlay text-white" id="gambar-5">
                        <a>Lapangan Olahraga</a>
                            <a id="close" href="#">x close</a>
                            <a href="#gambar-4" id="prev"></a>
                            <img src="{{ ('img/oit.jpg') }}" />
                            <a href="#gambar-6" id="next"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="#gambar-6">
                            <img src="https://i.ibb.co/bXg0Cmn/6.jpg" class="img-thumbnail" />
                        </a>
                        <div class="overlay text-white" id="gambar-6">
                            <a id="close" href="#">x close</a>
                            <a href="#gambar-5" id="prev"></a>
                            <img src="https://i.ibb.co/bXg0Cmn/6.jpg" />
                            <a href="#gambar-1" id="next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- berita -->
<section>
  <div class="container-sm">
    <div class="gambar-bg">
      <img src="./image/bg putihhh.png" alt="">
    </div>
    <div id="berita">
     <!-- <span>
        <i class="far fa-newspaper" style="color: #68af03;"></i>Berita Terbaru
      </span> -->
    </div>
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

@endsection
