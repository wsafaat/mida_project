@extends('layout/main')

@section('title','MI Al-Huda')


@section('container')

    <style>
        .card{
            margin-top: 50px;
            margin-bottom: 50px;
            margin-left: 200px;
            margin-right: 200px;
            width: 75%
            position: relative;
        }
    </style>
        <div class="container text-center">
            <div class="row">
                <div class="col-10">
                    <h1 class="mt-3">Sejarah Madrasah Ibtidaiyah Al-Huda</h1>
                </div>
            </div>
        </div>

        <section>
            <div class="card">
                <div class="card-header">
                    Sejarah berdirinya MI Al-Huda
                </div>
                <div class="card-body">
                    <blockquote class="blockquote ">
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> -->
                    <footer class="blockquote-footer">MI Al-Huda didirikan tanggal 23 Mei tahun 2009, awalnya MI Al-Huda beralamat di Desa Bakalan, Rowomarto, Patianrowo, dekat dengan TK Islam Al-Huda dengan hanya 3 kelas. Karena perlu tambahan kelas untuk kelas 4, 5, dan 6, diputuskan kelas 4, 5 dan 6 ditempatkan di Balongkyai (masih termasuk Desa Rowomarto Kecamatan Patianrowo.) <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
            </div>
        </section>

@endsection
