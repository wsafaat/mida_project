@extends('layout/main')

@section('title','Prestasi')


@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/lib/bootstrap.min.css">
  <script src="/lib/jquery-1.12.2.min.js"></script>
  <script src="/lib/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
  <img src="{{ ('img/kepalami.jpg') }}" class="card-img-top" alt="...">
    <h1>My First Bootstrap Page</h1>
    <p>Resize this responsive page to see the effect!</p> 
  </div>
  <div class="row">
    <div class="col-sm-4 text-warning" >
    <img src="{{ ('img/yayasan.jpg') }}" class="card-img-top" alt="...">
      <h3>Olimpiade</h3>
      <p> YTP Kertosono</p>
      <p>Siswa siswi MI Al-Huda antusias dalam mengikuti Olimpiade Sains dalam acara YTP Fair 2019</p>
    </div>
    <div class="col-sm-4 text-warning">
    <img src="{{ ('img/kepalami.jpg') }}" class="card-img-top" alt="...">
      <h3></h3>
      <p></p>
      <p></p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

</body>
</html>
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

</style>

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
