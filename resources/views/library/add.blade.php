@extends('layouts/app')

@section('title', 'Penambahan')

@section('content')
<div class="container">
  <div class="col md-7 manage-wrapper1">
    <h3>Pengaturan Koleksi Perpustakaan</h1>
    <p>Tambah Koleksi Baru Perpustakaan</p>
    
  </div>
  <div class="col md-7 manage-wrapper2">
    <div class="mb-3">
      <form action= "{{ url('collection/add') }}" method="POST">
      @csrf
    <label class="form-label">Judul Buku</label>
    <input type="text" class="form-control" placeholder= "Masukkan judul buku" name="judul" value="{{old('judul')}}">
   @error ('judul') <small class= "inputerror" >{{$message}}</small>
   @enderror
  </div>

    <div class="mb-3">
    <label class="form-label">Nama Penulis</label>
    <input type="text" class="form-control" placeholder= "Masukkan nama penulis" name="penulis" value="{{old('penulis')}}">
    @error ('penulis') <small class= "inputerror" >{{$message}}</small>
   @enderror
    </div>

    <div class="mb-3">
    <label class="form-label">Jumlah Halaman</label>
    <input type="number" class="form-control" placeholder= "Masukkan jumlah halaman" name="jumlah_halaman" value="{{old('jumlah_halaman')}}">
    @error ('jumlah_halaman') <small class= "inputerror" >{{$message}}</small>
   @enderror
    </div>

    <div class="mb-3">
    <label class="form-label">Tahun terbit</label>
    <input type="number" class="form-control" placeholder= "Masukkan tahun terbit" name="tahun_terbit" value="{{old('tahun_terbit')}}">
    @error ('tahun_terbit') <small class= "inputerror" >{{$message}}</small>
   @enderror
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection