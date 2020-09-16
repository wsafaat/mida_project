@extends('layout/main')

@section('title',' Visi & Misi MI Al-Huda')


@section('container')

<style>
    .card{
        margin-top: 50px;
    }
</style>


        <div class="container text-center">
            <div class="row">
                <div class="col-10">
                    <h1 class="mt-3"> VISI & MISI MADRASAH IBTIDAIYAH AL-HUDA</h1>
                </div>
            </div>
        </div>

        <section>
    <div class="card text-center" >
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="{{ url('/home') }}">VISI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=""></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Mewujudkan Madrasah Ibtidaiyah Al-Huda yang mandiri, profesional, proporsional dan berkarakter</h5>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <a href="{{ url('/home') }}" class="btn btn-primary"><- Kembali</a>
  </div>
</div>
    </section>

    <section>
    <div class="card text-center" >
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="{{ url('/home') }}">MISI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=""></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
        <ul>1. Implementasi sistem pendidikan terpadu</ul>
        <ul>2. Pelaksanaan proses pembelajaran yang komprehenship</ul>
        <ul>3. Penciptaan situasi belajar yang kondusif</ul>
        <ul>4. Pengamalan ajaran Islam dalam kehidupan sehari hari</ul>
    </h5>
    <a href="{{ url('/home') }}" class="btn btn-primary"><- Kembali</a>
  </div>
</div>
    </section>

        <!-- <section>  -->
    <!-- <div class="row" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">

        <h5 class="card-title">Visi</h5> 
        <p class="card-text"></p>
        <ul>Mewujudkan Madrasah Ibtidaiyah Al-Huda yang mandiri, profesional, proporsional dan berkarakter</ul>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" >
    <div class="card">
      <div class="card-body">
        
        <h5 class="card-title">Misi</h5> 
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <ul>1. Implementasi sistem pendidikan terpadu</ul>
        <ul>1. Implementasi sistem pendidikan terpadu</ul>
        <ul>1. Implementasi sistem pendidikan terpadu</ul>
        <ul>1. Implementasi sistem pendidikan terpadu</ul>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>  -->
        <!-- <div class="card" >
            <div class="card-header">
                Visi
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
            </div>
    </section> -->

    <!-- <section>
        <div class="card" style="width: 18rem;">
           <div class="card-header">
             Featured
           </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
       </div>

       <div class="card" style="width: 18rem;">
           <div class="card-header">
             Featured
           </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
       </div>
    </section> -->
@endsection
