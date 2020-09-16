@extends('layout/main')

@section('title','Kegiatan')


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
        position: static;
        /* top: 10px; */
        font-family: 'Open Sans', sans-serif;
        font-size: 25px;
        }
</style>
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
              <img src="{{ ('img/drumband.jpg') }}" alt="">
           </div>
           <div class="content">
              <div class="title">
                 Drumb Band
              </div>
              <div class="sub-title">
                 Karnaval 17 Agustus, Hari Santri, dan perayaan lain
              </div>
              <p>
              MI Al-Huda memiliki group Drumband yang terdiri atas Santri  MI itu sendiri. setiap adanya kegiatan baik didalam Sekolah maupun luar sekolah, Drumband ini selalu ditampilkan
              </p>
              <div class="btn tombol">
                 <button>Drumband</button>
              </div>
           </div>
        </div>
        <div class="card kartu">
           <div id="img">
              <img src="{{ ('img/lomba.jpg') }}" alt="">
           </div>
           <div class="content">
              <div class="title">
                 Lomba antar siswa MI
              </div>
              <div class="sub-title">
                 Untuk memperingati 17 Agustus
              </div>
              <p>
                 Selain mengikuti pelajaran, MI Al-Huda juga mengikuti perayaan 17 Agustus dengan cara mengadakan perlombaan antar siswa
              </p>
              <div class="btn tombol">
                 <button>Lomba</button>
              </div>
           </div>
        </div>
        <div class="card kartu">
           <div id="img">
              <img src="{{ ('img/wisuda.jpg') }}" alt="">
           </div>
           <div class="content">
              <div class="title">
                 Haflah Muwada'ah
              </div>
              <div class="sub-title">
                 Pelepasan Santri MI Al-Huda
              </div>
              <p>
              Seperti sekolah lain pada umumnya, MI Al-Huda juga menggelar acara untuk Pelepasan (Haflah Muwada'ah) Santri Putra dan Santri Putri MI Al-Huda.
              </p>
              <div class="btn tombol">
                 <button>Haflah Muwada'ah</button>
              </div>
           </div>
        </div>
      </div>
   
  </div>
</section>

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
              <img src="{{ ('img/karnaval1.jpg') }}" alt="">
           </div>
           <div class="content">
              <div class="title">
                 Karnaval
              </div>
              <div class="sub-title">
                 Saat hari Santri Nasional dan perayaan Agustusan
              </div>
              <p>
              MI Al-Huda mengadakan karnaval dua kali dalam satu tahun. yaitu karnaval saat Agustusan juga saat Hari santri
              </p>
              <div class="btn tombol">
                 <button>Karnaval</button>
              </div>
           </div>
        </div>
        <div class="card kartu">
           <div id="img">
              <img src="{{ ('img/gerakjalanpi.jpg') }}" alt="">
           </div>
           <div class="content">
              <div class="title">
                 Gerak Jalan
              </div>
              <div class="sub-title">
                 Team gerak jalan putri
              </div>
              <p>
                 Selain memiliki team karnaval dan drumband, MI Al-Huda juga memiliki team gerak jalan putri
              </p>
              <div class="btn tombol">
                 <button>Gerak Jalan</button>
              </div>
           </div>
        </div>
        <div class="card kartu">
           <div id="img">
              <img src="{{ ('img/gerakjalanpa.jpg') }}" alt="">
           </div>
           <div class="content">
              <div class="title">
                 Gerak Jalan
              </div>
              <div class="sub-title">
                 Team gerak jalan Putra
              </div>
              <p>
              Selain memiliki team karnaval dan drumband, MI Al-Huda juga memiliki team gerak jalan putra
              </p>
              <div class="btn tombol">
                 <button>Gerak Jalan</button>
              </div>
           </div>
        </div>
      </div>
   
  </div>
</section>
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
              <img src="{{ ('img/upacara.jpg') }}" alt="">
           </div>
           <div class="content">
              <div class="title">
                 Upacara Bendera
              </div>
              <div class="sub-title">
                 Diikuti oleh seluruh warga MI Al-Huda
              </div>
              <p>
              MI Al-Huda mengadakan upacara bendera setiap hari senin yang diikuti oleh seluruh warga MI Al-Huda secara khidmat
              </p>
              <div class="btn tombol">
                 <button>Upacara</button>
              </div>
           </div>
        </div>
        <div class="card kartu">
           <div id="img">
              <img src="{{ ('img/manasik.jpg') }}" alt="">
           </div>
           <div class="content">
              <div class="title">
                 Manasik Haji
              </div>
              <div class="sub-title">
                 Diikuti oleh seluruh siswa MI Al-Huda
              </div>
              <p>
                 MI Al-Huda mengadakan manasik Haji satu kali dalam satu tahun yang diikuti oleh seluruh siswa MI Al-Huda 
              </p>
              <div class="btn tombol">
                 <button>Manasik Haji</button>
              </div>
           </div>
        </div>
        <div class="card kartu">
           <div id="img">
              <img src="{{ ('img/DHUHA.jpg') }}" alt="">
           </div>
           <div class="content">
              <div class="title">
                 Sholat Dhuha dan Istighosah
              </div>
              <div class="sub-title">
                 Diikuti oleh seluruh Siswa dan Guru MI Al-Huda
              </div>
              <p>
              Sholat Dhuha dan Istighosah dilakukan setiap hari masuk kecuali hari Senin dan diikuti seluruh siswa dan guru MI Al-Huda
              </p>
              <div class="btn tombol">
                 <button>Sholat Dhuha dan Istighosah</button>
              </div>
           </div>
        </div>
      </div>
   
  </div>
</section>

<!-- <section class="Kegiatan" id="kegiatan">
      <div class="container">
          <div class="row ">
              <div class="col text-center">
                  <h2>Kegiatan</h2>

              </div>
          </div>

          <div class="row mb-4">
              <div class="col-md text-justify">
              
                    <div class="card">
                      <a href="" class="thumbnail">     
                      <img class="card-img-top" src="{{ ('img/drumband.jpg') }}" alt="card image cap">
                          </a>
                            <div class="card-body">
                              <p class="card-text">MI Al-Huda memiliki group Drumband yang terdiri dari Santri dari MI sendiri. setiap adanya kegiatan baik didalam Sekolah maupun luar sekolah, Drumband ini selalu ditampilkan :)</p>
                            </div>
                          </div>
              </div>
              <div class="col-md text-justify">
                    <div class="card">
                      <a href="" class="thumbnail">
                            <img class="card-img-top" src="{{ ('img/lomba.jpg') }}" alt="card image cap">
                          </a>
                            <div class="card-body">
                              <p class="card-text">Name : Wita Ananta Putri (외타아난타풑리)</p>
                              <p class="card-text">Major: Informatics Engineering</p>
                              <p class="card-text"> Currently Studying in State Polytechnic of Banyuwangi  </p>
                            </div>
                          </div>
              </div>
              <div class="col-md text-justify">
                    <div class="card">
                      <a href="" class="thumbnail">
                            <img class="card-img-top" src="{{ ('img/gerakjalanpi.jpg') }}" alt="card image cap">
                          </a>
                            <div class="card-body">
                              <p class="card-text">Team gerak jalan Santri Putri MI Al-Huda :) </p>
                            </div>
                          </div>
              </div>

          </div>

          <div class="row mb-4">
                <div class="col-md text-justify">
                      <div class="card">
                        <a href="" class="thumbnail">
                        <img class="card-img-top" src="{{ ('img/gerakjalanpa.jpg') }}" alt="card image cap">
                              </a>
                        <div class="card-body">
                                <p class="card-text">Team gerak jalan Santri Putra MI Al-Huda :)</p>
                              </div>
                            </div>
                </div>
                <div class="col-md">
                      <div class="card">
                        <a href="" class="thumbnail">
                        <img class="card-img-top" src="{{ ('img/karnaval.jpg') }}" alt="card image cap">
                        </a>
                        <div class="card-body">
                                <p class="card-text">MI Al-Huda mengadakan karnaval dua kali dalam satu tahun. yaitu karnaval saat Agustusan juga saat Hari santri</p>
                                
                              </div>
                            </div>
                </div>
                <div class="col-md">
                      <div class="card">
                              
                        <a href="" class="thumbnail">
                          <img class="card-img-top" src="{{ ('img/wisuda.jpg') }}" alt="card image cap">
                        </a>
                          <div class="card-body">
                                <p class="card-text">Seperti sekolah lain pada umumnya, MI Al-Huda juga menggelar acara untuk Pelepasan Santri Putra dan Santri Putri MI Al-Huda.</p>
                              </div>
                            </div>
                </div>
  
            </div>
    
        </div>
    </section> -->
@endsection
