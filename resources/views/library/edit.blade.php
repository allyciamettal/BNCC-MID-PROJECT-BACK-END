@extends('layouts/app')

@section('title', 'Perubahan Koleksi')

@section('content')
<div class="container">
  <div class="col md-7 manage-wrapper1">
    <h3>Pengaturan Koleksi Perpustakaan</h1>
    <p>Perbarui atau Hapus Koleksi Perpustakaan</p>
    
  </div>
  <div class="col md-7 manage-wrapper2">
    <div class="mb-3">
      <form action= "{{ url ('collection/'. $library->id)}}" method="POST">
      @csrf
      @method('PUT')

    <label class="form-label">Judul Buku</label>
    <input type="text" class="form-control" placeholder= "Masukkan judul buku" name="judul" value="{{$library->judul}}">
   @error ('judul') <small class= "inputerror" >{{$message}}</small>
   @enderror
  </div>

    <div class="mb-3">
    <label class="form-label">Nama Penulis</label>
    <input type="text" class="form-control" placeholder= "Masukkan nama penulis" name="penulis" value="{{$library->penulis}}">
    @error ('penulis') <small class= "inputerror" >{{$message}}</small>
   @enderror
    </div>

    <div class="mb-3">
    <label class="form-label">Jumlah Halaman</label>
    <input type="number" class="form-control" placeholder= "Masukkan jumlah halaman" name="jumlah_halaman" value="{{$library->jumlah_halaman}}">
    @error ('jumlah_halaman') <small class= "inputerror" >{{$message}}</small>
   @enderror
    </div>

    <div class="mb-3">
    <label class="form-label">Tahun terbit</label>
    <input type="number" class="form-control" placeholder= "Masukkan tahun terbit" name="tahun_terbit" value="{{$library->tahun_terbit}}">
    @error ('tahun_terbit') <small class= "inputerror" >{{$message}}</small>
   @enderror
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{url ('collection/'. $library->id)}}">
<form action= "{{ url ('collection/'. $library->id)}}" method="POST" class="d-inline">
      @csrf    
      @method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</a>
</div>
</div>
@endsection