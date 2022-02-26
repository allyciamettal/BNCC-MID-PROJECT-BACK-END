@extends('layouts/app')

@section('title', 'Pengaturan Koleksi')

@section('content')
<div class="container">
<div class="col md-5 manage-wrapper1">
    <h3>Pengaturan Koleksi Perpustakaan</h1>
    <p>Tambah, Perbarui, atau Hapus Koleksi Perpustakaan</p>

    <a href="{{url('/collection/add')}}" class= "btn tombol-manage">Tambah Koleksi</a>
    <hr>

    @if(session('inputsuccess'))
    <div class="alert alert-light" role="alert">
      {{ session('inputsuccess')}}
  </div>
  @endif

    <div class="col md-5 manage-wrapper2">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Nama Penulis</th>
      <th scope="col">Jumlah Halaman</th>
      <th scope="col">Tahun Terbit</th>
      <th>Perubahan</th>
    </tr>
  </thead>
  <tbody>
      @php $id= 1; @endphp
  @foreach($library as $libraries)
  <tr>
        <td>{{$id++}}</td>
         <td>{{$libraries->judul}}</td>
         <td> {{$libraries->penulis}}</td>
         <td>{{$libraries->jumlah_halaman}}</td>
         <td>{{$libraries->tahun_terbit}}</td>
         <td>
        <a href="{{url('collection/'. $libraries->id)}}" class="text-danger"> <i class="uil uil-edit-alt"></i></a>
        </tr>
  @endforeach
  </tbody>
</table>
    </div>
</div>
@endsection