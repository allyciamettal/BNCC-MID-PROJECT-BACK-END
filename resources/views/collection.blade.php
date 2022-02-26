@extends('layouts/app')

@section('title', 'Koleksi')

@section('content')

<div class="container mt-4">
    <h3>Koleksi Perpustakaan</h3>
    <hr>
    <div class="row">
         @foreach($library as $libraries)
             <div class="col-md-3 mt-3">
                 <div class="col-md-13 collection">
                 <h1 class="judul badge bg-light text-dark">{{$libraries->judul}}</h1>
                  <p class="penulis">Nama Penulis: {{$libraries->penulis}}</p>
                  <p class="halaman">Jumlah Halaman: {{$libraries->jumlah_halaman}}</p>
                  <p class="tahun">Tahun terbit: {{$libraries->tahun_terbit}}</p>

                  <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                 <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                 <label class="btn btn-outline-light" for="btnradio1">Sinopsis</label>
 
                 <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                 <label class="btn btn-outline-light" for="btnradio2">Pinjam</label>
 
                 <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                  <label class="btn btn-outline-light" for="btnradio3"><i class="uil uil-heart"></i></label>
                </div>
            </div>
        </div>
        @endforeach
</div>
@endsection