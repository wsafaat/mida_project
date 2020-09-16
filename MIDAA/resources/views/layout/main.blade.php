<!doctype html>
<html lang="en">
   <head>
   
      <link rel="stylesheet" href="../views/CSSJS/style.css">
      <!-- <link href="style.css" rel="stylesheet" type="text/css"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
      <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <title>@yield('title')</title>

      <style>

body {
    margin: 0;
    padding: 0;
    font-family: "Open Sans",sans-serif;
    overflow-x: hidden;
}

/*footer*/
footer {
    background: #f1f1f1;
    padding: 70px 0;
}

.footer-container {
    max-width: 1300px;
    margin: auto;
    padding: 0 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap-reverse;
}

.logof {
    width: 180px;
}

.social-media {
    margin: 20px 0;
}

.social-media a {
    color: #001a21;
    margin-right: 25px;
    font-size: 22px;
    text-decoration: none;
    transition: 3s linear;
}

.social-media a:hover {
    color: #fc5c65;
}

.right-col h1 {
    font-size: 26px;
}

.border {
    width: 100px;
    height: 4px;
    background: #fc5c65;
}

.newsletter-form {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.txtb {
    flex: 1;
    padding: 18px 40px;
    font-size: 16px;
    color: #293043;
    background: #ddd;
    border: none;
    font-weight: 700;
    outline: none;
    border-radius: 30px;
    min-width: 260px;
}

.btn {
    padding: 18px 40px;
    font-size: 16px;
    color: #f1f1f1;
    background: #fc5c65;
    border: none;
    font-weight: 700;
    outline: none;
    border-radius: 30px;
    margin-left: 20px;
    cursor: pointer;
    transition: opacity .3s linear;
}

.btn:hover {
    opacity: .7;
}

.page-content {
    min-height: 100vh;
    font-size: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

@media screen and (max-width:960px) {
    .footer-container {
        max-width: 600px;
    }
    .right-col{
        width: 100%;
        margin-bottom: 60px;
    }

    .left-col {
        width: 100%;
        text-align: center;
    }
}


@media screen and (max-width:700px){
    btn {
        margin: 0;
        width: 100%;
        margin-top: 20px;
    }
}

/* navbar */

nav{
   dislay: flex;
   background-color: #fc5c65;
   justify-content: space-around;
   padding: 75px 0;
}
.navbar {
    width: 100%;
    height: 125px;
}

nav .logo {
   font family: 'Pacifico', cursive;
}

.logo {
    width: 75px;
}

.logo a {
    text-decoration: none;
    font-size: 20px;
    font-weight: bold;
    padding: 0px 0px 0px 40px;
    width: 2%;
    height: -10px;
}


.menu a{
    float: left;
    color: black;
    text-align: center;
    padding: 0px 40px;
    text-decoration: none;
    font-size: 20px;
    font-weight: bold;
}

.menu .active {
    color: #6699CB;
}

.menu a:hover {
    color: #6699CB;
    text-decoration: none;
    font-weight: bold;
}

.menu .icon {
    display: none;
}

/*sidebar*/
.sidebar-right .btn-circle{
   border-radius: 50px;
}

.sidebar-right .btn{
   margin: 12px 0px 22px 12px;
}

.sidebar-right{
   height: 100%;
   width: 300px;
   background-color: rgba(0, 0, 0, 0.9);
   right: 0px;
   z-index: 99;
   transform: translateX(300px);
   transition: 500ms;
   position: absolute;
}

.sidebar-right a{
   display: block;
   color: white;
   text-align: left;
   padding: 8px 0px 0px 24px;
   text-decoration: none;
   font-size: 20px;
   font-weight: bold;
}

.sidebar-right a:hover{
   color: #6699CB;
   text-decoration: none;
   font-size: 20px;
   font-weight: bold;
}

.sidebar-right .active{
   color: #6699CB;
}

/*Responsive nav*/
@media screen and (max-width: 600px){
   .menu .icon{
      display: block;
   }

   .menu a{
      display: none;
   }

   .image1{
      display: none;
   }

   .content-left{
      margin-left: 80px;
   }
}

@media screen and (max-width: 800px){
   .menu .icon{
      display: block;
   }

   .menu a{
      display: none;
   }

   .image1{
      display: none;
   }
}



      </style>

      <script>
      
      /*sidebar*/
      
      function sidebarOpen(){
         document.getElementById("sidebar").style.transform = "translate(0px)";
      }

      function sidebarClose(){
         document.getElementById("sidebar").style.transform = "translate(300px)";
      }

      </script>


   </head>
   
   <body>


    <!--Navbar-->

    <!-- Sidebar -->
   <div class="sidebar-right" id=sidebar>
      <button class="btn btn-primary btn-lg btn-circle" onclick="sidebarClose()">
         <i class="fa fa-times"></i>
      </button>
      <a href="{{ url('/') }}" class="active">MI Al-Huda</a>
      <a href="{{ url('/home') }}">Home</a>
      <a href="{{ url('/sejarah') }}">Sejarah</a>
      <a href="{{ url('/kegiatan') }}">Kegiatan</a>
      <a href="{{ url('/prestasi') }}">Prestasi</a>
      <a href="{{ url('/santri') }}">Santri</a>
      <a href="{{ url('/fasilitas') }}">Fasilitas</a>
   </div>


    <!-- Akhir sidebar -->

    <nav class="navbar justify-content-between">
                <div class="logo">
                  <!-- <h4>MI Al-Huda</h4> -->
                    <a href="{{ url('/') }}">
                        <img src="{{ ('img/midago.jpg') }}"  alt="" class="logo"> 
                    </a>
                </div>
                <div class="menu">
                    <!-- <a class="navbar-brand" href="{{ url('/') }}" class="active">MI Al-Huda</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span> -->
                     <!-- <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav"> -->
                    <a class="navbar-nav" href="{{ url('/home') }}">HOME</a>
                    <a href="{{ url('/sejarah') }}">SEJARAH<span class="sr-only">(current)</span></a>
                    <a href="{{ url('/kegiatan') }}">KEGIATAN<span class="sr-only">(current)</span></a>
                    <a href="{{ url('/prestasi') }}" >PRESTASI<span class="sr-only">(current)</span></a>
                    <a href="{{ url('/santri') }}" >SANTRI<span class="sr-only">(current)</span></a>
                    <a href="{{ url('/fasilitas') }}" >FASILITAS<span class="sr-only">(current)</span></a>
                    <button class="btn btn-primary btn-lg icon" onclick="sidebarOpen()">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </nav>

            <!--akhir navbar-->

  
      <!-- <nav class="navbar navbar-dark bg-primary"> -->
         <!-- Navbar content
            </nav>
              <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
         <!-- <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">MI Al-Huda</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar-nav">
                  <li class="nav-item active">
                     <a  href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a  href="{{ url('/prestasi') }}">Prestasi</a>
                  </li> -->
                  <!-- <li class="nav-item">
                     <a class="nav-link" href="{{ url('/ekstrakurikuler') }}">Ekstrakurikuler</a>
                  </li> -->
                  <!-- <li class="nav-item">
                     <a class="nav-link" href="{{ url('/kegiatan') }}">Kegiatan</a>
                  </li> -->
                  <!-- <li class="nav-item">
                     <a class="nav-link" href="{{ url('/kbm') }}">KBM</a>
                  </li> -->
                  <!-- <li class="nav-item">
                     <a  href="{{ url('/santri') }}">Santri</a>
                  </li>
                  <li class="nav-item">
                     <a  href="{{ url('/fasilitas') }}">Fasilitas</a>
                  </li>
               </ul>
               <button class="btn btn-primary btn-lg icon" onclick="sidebarOpen()">
               <i class="fa-bars"></i>
               </button>
            </div>
         </div>
      </nav> -->
      @yield('container')
     
     
      <footer>
      
         <div class="footer-container">
            <div class="left-col">
               <img src="{{ ('img/images.png') }}" alt="" class="logof">
               <div class="social-media">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.instagram.com/mialhuda123/"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
               </div>
               <p class="rights-text">© Copyright 2020 | MI Al-Huda Developper | 외타아난타풑리</p>
            </div>
            <div class="right-col">
               <h1>Our Newsletter</h1>
               <div class="border"></div>
               <p>Enter Your Email to get our news and updates.</p>
               <form action="" class="newsletter-form">
                  <input type="text" class="txtb" placeholder="Enter Your Email">
                  <input type="submit" class="btn" value="submit">
               </form>
            </div>
         </div>
         </div>
      </footer>
      <!-- <footer>
         <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2019 - 2020</p> -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   </body>
</html>