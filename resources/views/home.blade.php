@extends('layouts/app')

@section('title', 'Beranda')

@section('content')
    <div class="banner">
        <h1>Selamat Datang di Perpustakaan Online</h1>
        <p>24/7 Perpustakaan Online oleh Perusahaan Musang</p>
        <div class="dropdown">
  <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Hubungi Kami
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">Instagram</a></li>
    <li><a class="dropdown-item" href="#">LinkedIn</a></li>
    <li><a class="dropdown-item" href="#">Official Website</a></li>
  </ul>
</div>
    </div>

    <div class="row ms-3 me-3">
             <div class="col-md-7 mt-4">
             <div class="col-md-13 collection">

                 <h5>Pengenalan</h5>
                 <p>Literasi media dan literasi digital merupakan bagian yang tidak dapat dipisahkan dari
informasi. Informasi adalah suatu hal tidak bisa dilepaskan dari kehidupan manusia
karena informasi manusia dapat melakukan berbagai hal. Dari waktu ke waktu
informasi terus mengalami perkembangan yang diikuti dengan perkembangan media
elektronik atau digital dan telekomunikasi.  </p>



<p>Informasi bukan hanya berbentuk tercetak lagi, tetapi sudah dapat diakses dengan
media digitalisasi. Oleh karena itu, masyarakat diharapkan dapat mengikuti
perkembangan zaman agar tidak ketinggalan informasi. Maka, untuk mengatasi
masalah itu masyarakat harus memiliki kemampuan yang dikenal dengan istilah
literasi media dan literasi digital.</p>
              
                </div>
            
            </div>
            <div class="col-md-5 mt-4">
                <div class="col-md-13 collection">
                    <h5>Visi</h5>
                    <p>Terwujudnya Indonesia Cerdas Melalui Gemar Membaca Dengan Memberdayakan Perpustakaan </p>
                    <h5>Misi</h5>
                    <p>- Mengembangkan sarana dan prasarana perpustakaan online</p>
                    <p>- Menghadirkan referensi dan informasi tentang literasi terkini</p>
                    <p>- Terwujudnya perpustakaan sebagai pelestari khazanah budaya bangsa   </p>
              <p></p>
                
            </div>
        </div>
</div>
  
@endsection