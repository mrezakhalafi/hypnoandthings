<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HYPNO and THINGS - Home</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" type="image/png" href="{{ asset('img/icon.png') }}"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
<body>

{{-- Awal Navbar --}}
<nav class="navbar navbar-light bg-light py-0">
  <div class="navbar-atas">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-11">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <i class="fas fa-user px-2"></i>Ir. Arief Nuryanto CH., CHt (IACT-USA)., MH.
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <i class="fas fa-envelope px-2"></i>Arief.nuryanto@gmail.com
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <i class="fas fa-phone px-2"></i>0811789108
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <i class="fas fa-map-marker-alt px-2"></i>Jl. Bangkil No.10, Kayu Putih, Jakarta
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-1 social-hide">
                <a href="https://www.instagram.com/ariefny/"><i class="fab fa-instagram px-2 social-media"></i></a>
                <a href="https://www.youtube.com/channel/UCF6zKx01hlq4XuQ8j4fpiUw"><i class="fab fa-youtube px-2 social-media"></i></a>
            </div>
        </div>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light py-4">
  <div class="container-fluid">
    <div class="col-12 col-md-3">
        <a href="{{ url('/') }}"><img class="logo" src="{{ asset('img/logo.png') }}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span></button>
    </div>
    <div class="col-12 col-md-2">
    {{-- Space --}}
    </div>
    <div class="col-12 col-md-7">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-3">
                    <a class="nav-link nav-aktif" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" id="features" href="#">Features</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" id="about" href="#">About</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" id="services" href="#">Services</a>
                </li>
                  <li class="nav-item px-3">
                    <a class="nav-link" id="testimonials" href="#">Testimonials</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" id="contact" href="#">Contact</a>
                </li>
                <li class="nav-item px-3">
                    <div class="btn btn-registrasi rounded-pill" id="registrasi">REGISTRASI</div>
                </li>
            </ul>
        </div>
    </div>
  </div>
</nav>
{{-- Akhir Navbar --}}

@if (session('pesan'))
<div class="alert alert-success text-center" role="alert">
  {{ session('pesan') }}
</div>
@endif

<div class="line">
{{-- Garis --}}
</div>



{{-- Awal Slider --}}
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ url('img/Wallpaper1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>I.A.C.T</h5>
        <p>International Association of Counselors & Therapists.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('img/Wallpaper1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>I.A.C.T</h5>
        <p>International Association of Counselors & Therapists.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('img/Wallpaper1.jpg') }}"" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>I.A.C.T</h5>
        <p>International Association of Counselors & Therapists..</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
{{-- Akhir Slider --}}

{{-- Awal Features --}}
<div class="hk-features">
    
    <div class="section-judul-2 text-center">
        Kenapa HYPNO and THINGS?
    </div>
    <div class="hk-features-wrap text-center">
        <div class="row">
            <div class="col-12 col-md-3 ">
                <div class="hk-features-box">
                    <i class="far fa-smile-wink color-1"></i>
                    <h3 class="mt-3">Efektif</h3>
                    <p class="mt-3 mb-0">
                        Hipnoterapi terbukti dapat membantu berbagai masalah pikiran, perasaan dan perilaku secara efektif.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-3 seperator">
                <div class="hk-features-box ">
                    <i class="far fa-grin-beam-sweat color-2"></i>
                    <h3 class="mt-3">Terapis Professional</h3>
                    <p class="mt-3 mb-0">
                        Bersama dengan Bapak Ir. Arief Nuryanto CH., CHt (IACT-USA)., MH. Terapis hipnoterapi profesional.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-3 seperator">
                <div class="hk-features-box ">
                    <i class="far fa-grin-hearts color-3"></i>
                    <h3 class="mt-3">Bersifat Rahasia</h3>
                    <p class="mt-3 mb-0">
                        Layanan kami bersifat pribadi dan aman. Apapun yang Anda bicarakan akan bersifat rahasia.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-3 seperator">
                <div class="hk-features-box">
                    <i class="far fa-laugh-squint color-4"></i>
                    <h3 class="mt-3">Biaya Terjangkau</h3>
                    <p class="mt-3 mb-0">
                       Kami menawarkan berbagai paket layanan yang sesuai dengan anggaran dan kebutuhan Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Akhir Features --}}

{{-- Awal About --}}
<div class="section-about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mt-5">
                <div class="about-title">
                <h2>Apa itu HYPNO and THINGS?</h2>
                </div>
                <p class="mt-3 mb-4">Kami adalah teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks teks</p>
                <a href="{{ url('/') }}"><div class="btn btn-brown">Read More</div></a>
            </div>
            <div class="col-12 col-md-1">

            </div>
            <div class="col-12 col-md-5">
                <img class="about-image" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-left: 2px solid #6C5840" src="{{ url('img/Wallpaper2.jpeg') }}">
            </div>
        </div>
    </div>
</div>
{{-- Akhir About --}}

<!-- Awal Modal About -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img class="about-image" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: 2px solid #6c757d" src="{{ url('img/Wallpaper2.jpeg') }}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
{{-- Akhir Modal About --}}

{{-- Awal Services --}}
<div class="section-services">
        <div class="section-judul text-center">
            PROMOTIONAL VIDEOS
            <hr>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 video-box rounded">
               <iframe src="https://www.youtube.com/embed/MYbcaMbVOmM" class="video" frameborder="0" allowfullscreen></iframe>
                <p class="video-title text-center"><a href="https://www.youtube.com/embed/MYbcaMbVOmM"><b>We Shall Overcome</b></a></p>
            </div>
            <div class="col-12 col-md-1">

            </div>
            <div class="col-12 col-md-5 video-box rounded">
                <iframe src="https://www.youtube.com/embed/yvRDv0sSjsI" class="video" frameborder="0" allowfullscreen></iframe>
                <p class="video-title text-center"><a href="https://www.youtube.com/embed/yvRDv0sSjsI"><b>Hypnosis is...</b></a></p>
            </div>
        </div>
</div>
{{-- Akhir Services --}}

{{-- Awal Form --}}
<div class="section-form">
    <div class="container">
        <div class="form-judul text-center">
            <h3>Formulir Registrasi Hipnoterapi</h3>
        </div>
        <form action="{{ url('/kirim_email') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <b>Nama Lengkap : </b><span style="color:red">*</span>
                    <div class="input-group mb-3">
                        <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap">
                    </div>
                    @error('nama_lengkap')
                    <div class="text-danger mb-3">{{ $message }}</div>   
                    @enderror
                    <b>Email : </b><span style="color:red">*</span>
                    <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                    @error('email')
                    <div class="text-danger mb-3">{{ $message }}</div>   
                    @enderror
                    <b>Status : </b><span style="color:red">*</span>              
                    <div class="input-group mb-3">
                        <select class="form-select" name="status" id="status">
                            <option value="" selected>Pilih Status</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Janda/Duda">Janda/Duda</option>
                        </select>
                    </div>
                    @error('status')
                    <div class="text-danger mb-3">{{ $message }}</div>   
                    @enderror
                    <b>Kondisi Dalam Keluarga : </b><span style="color:red">*</span>              
                    <div class="input-group mb-3">
                        <select class="form-select" name="kondisi_keluarga" id="kondisi_keluarga">
                            <option value="" selected>Pilih Kondisi</option>
                            <option value="Sangat Baik">Sangat Baik</option>
                            <option value="Baik">Baik</option>
                            <option value="Tidak Baik">Tidak Baik</option>
                            <option value="Sangat Tidak Baik">Sangat Tidak Baik</option>
                        </select>
                    </div>
                    @error('kondisi_keluarga')
                    <div class="text-danger mb-3">{{ $message }}</div>   
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <b>Nama Panggilan : </b><span style="color:red">*</span>
                    <div class="input-group mb-3">
                        <input type="text" name="nama_panggilan" class="form-control" id="nama_panggilan">
                    </div>
                    @error('nama_panggilan')
                    <div class="text-danger mb-3">{{ $message }}</div>   
                    @enderror
                    <b>Telepon : </b><span style="color:red">*</span>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">+62</span>
                        <input type="text" name="telepon" class="form-control" id="telepon">
                    </div>
                    @error('telepon')
                    <div class="text-danger mb-3">{{ $message }}</div>   
                    @enderror
                    <b>Jenis Kelamin : </b><span style="color:red">*</span>              
                    <div class="input-group mb-3">
                        <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="" selected>Pilih Jenis Kelamin</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    @error('jenis_kelamin')
                    <div class="text-danger mb-3">{{ $message }}</div>   
                    @enderror
                    <b>Agama : </b><span style="color:red">*</span>
                    <div class="input-group mb-3">
                        <input type="text" name="agama" class="form-control" id="agama">
                    </div>
                    @error('agama')
                    <div class="text-danger mb-3">{{ $message }}</div>   
                    @enderror
                </div>
                <b>Alamat : <span style="color:red">*</span></b>
                    <div class="input-group mb-3">
                        <input type="text" name="alamat" class="form-control" id="alamat">
                    </div>
                    @error('alamat')
                    <div class="text-danger mb-3">{{ $message }}</div>   
                    @enderror
                <div class="col-6">
                    <b>Kota : </b><span style="color:red">*</span>
                    <div class="input-group mb-3">
                        <input type="text" name="kota" class="form-control" id="kota">
                    </div>
                    @error('kota')
                    <div class="text-danger mb-3">{{ $message }}</div>   
                    @enderror
                </div>
                <div class="col-6">
                    <b>Provinsi : </b><span style="color:red">*</span>
                    <div class="input-group mb-3">
                        <input type="text" name="provinsi" class="form-control" id="provinsi">
                    </div>
                    @error('provinsi')
                    <div class="text-danger mb-3">{{ $message }}</div>   
                    @enderror
                </div>
                <hr>
                <br>Silahkan isi informasi terkait masalah anda. Informasi yang kami terima terjaga kerahasiaannya dan dilindungi oleh kode etik hipnoterapis internasional.<br><br>
                <hr>
                <div class="row mt-3 mb-3">
                    <div class="col-12 col-md-4">
                        <b>Mengetahui Kami Dari :</b>     
                        <div class="row mt-2">
                            <div class="col-12 col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" name="mengetahui_dari[]" type="checkbox" value="Google" id="mengetahui_dari_google">
                                    <label class="form-check-label" for="mengetahui_dari_google">
                                        Google
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" name="mengetahui_dari[]" type="checkbox" value="Referensi" id="mengetahui_dari_referensi">
                                    <label class="form-check-label" for="mengetahui_dari_referensi">
                                        Referensi
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" name="mengetahui_dari[]" type="checkbox" value="Workshop" id="mengetahui_dari_workshop">
                                    <label class="form-check-label" for="mengetahui_dari_workshop">
                                        Workshop
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                    <b>Mengikuti terapi atas kehendak :</b>   
                        <div class="row mt-2">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="mengikuti_atas[]" type="checkbox" value="Sendiri" id="mengikuti_atas_sendiri">
                                    <label class="form-check-label" for="mengikuti_atas_sendiri">
                                        Sendiri
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="mengikuti_atas[]" type="checkbox" value="Alasan Lain" id="mengikuti_atas_alasan_lain">
                                    <label class="form-check-label" for="mengikuti_atas_alasan_lain">
                                        Alasan Lain
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="mengikuti_atas[]" type="checkbox" value="Orang Lain" id="mengikuti_atas_orang_lain">
                                    <label class="form-check-label" for="mengikuti_atas_orang_lain">
                                        Orang Lain
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <b>Saat masih anak-anak bagaimana hubungan dengan orang tua?</b>
                        <div class="row mt-2">
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="hubungan_orangtua[]" type="checkbox" value="Baik" id="hubungan_orangtua_baik">
                                    <label class="form-check-label" for="hubungan_orangtua_baik">
                                        Baik
                                    </label>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-check">
                                    <input class="form-check-input" name="hubungan_orangtua[]" type="checkbox" value="Cukup Baik" id="hubungan_orangtua_cukupbaik">
                                    <label class="form-check-label" for="hubungan_orangtua_cukupbaik">
                                        Cukup Baik
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="hubungan_orangtua[]" type="checkbox" value="Buruk" id="hubungan_orangtua_buruk">
                                    <label class="form-check-label" for="hubungan_orangtua_buruk">
                                        Buruk
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-3 mb-3">
                    <b>Alasan mengikuti terapi :</b>
                    <div class="form-floating mt-1">
                        <textarea class="form-control" name="alasan_mengikuti" id="alasan_mengikuti" style="height: 200px"></textarea>
                        <small>Silahkan anda jelaskan, kenapa anda ingin mengikuti sesi terapi bersama kami.</small>
                    </div>
                </div>
                <b>Apakah sekarang sedang dalam penanganan dokter, psikiater atau lainnya?</b>
                <div class="row mt-2 mb-3">
                    <div class="col-6 col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_penanganan" value="Iya" id="dalam_penanganan_iya">
                            <label class="form-check-label" for="dalam_penanganan_iya">
                                Iya
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_penanganan" value="Tidak" id="dalam_penanganan_tidak">
                            <label class="form-check-label" for="dalam_penanganan_tidak">
                                Tidak
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-3">
                    <div class="col-12 col-md-6">
                        <b>Orang tua pernah mengalami hal ini?</b>
                        <div class="row mt-2 mb-3">
                            <div class="col-6 col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="orangtua_mengalami" value="Pernah" id="orangtua_mengalami_pernah">
                                    <label class="form-check-label" for="orangtua_mengalami_pernah">
                                        Pernah
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="orangtua_mengalami" value="Tidak" id="orangtua_mengalami_tidak">
                                    <label class="form-check-label" for="orangtua_mengalami_tidak">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="orangtua_mengalami" value="Tidak Tahu" id="orangtua_mengalami_tidaktahu">
                                    <label class="form-check-label" for="orangtua_mengalami_tidaktahu">
                                        Tidak tahu
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <b>Anda yakin masalah ini bisa selesai ?</b>
                        <div class="row mt-2 mb-3">
                            <div class="col-6 col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="yakin_selesai" value="Yakin" id="yakin_selesai_yakin">
                                    <label class="form-check-label" for="yakin_selesai_yakin">
                                        Yakin
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="yakin_selesai" value="Ragu" id="yakin_selesai_ragu">
                                    <label class="form-check-label" for="yakin_selesai_ragu">
                                        Ragu
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="yakin_selesai" value="Tidak" id="yakin_selesai_tidak">
                                    <label class="form-check-label" for="yakin_selesai_tidak">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-3 mb-3">
                    <div class="col-12 col-md-6">
                        <b>Apakah anda pernah berkonsultasi dengan :</b>
                        <div class="row mt-2">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="pernah_berkonsultasi[]" type="checkbox" value="Dokter" id="pernah_berkonsultasi_dokter">
                                    <label class="form-check-label" for="pernah_berkonsultasi_dokter">
                                        Dokter
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="pernah_berkonsultasi[]" type="checkbox" value="Psikolog" id="pernah_berkonsultasi_psikolog">
                                    <label class="form-check-label" for="pernah_berkonsultasi_psikolog">
                                        Psikolog
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="pernah_berkonsultasi[]" type="checkbox" value="Hipnoterapis" id="pernah_berkonsultasi_hipnoterapis">
                                    <label class="form-check-label" for="pernah_berkonsultasi_hipnoterapis">
                                        Hipnoterapis
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="pernah_berkonsultasi[]" type="checkbox" value="Psikiater" id="pernah_berkonsultasi_psikiater">
                                    <label class="form-check-label" for="pernah_berkonsultasi_psikiater">
                                        Psikiater
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="pernah_berkonsultasi[]" type="checkbox" value="Konselor" id="pernah_berkonsultasi_konselor">
                                    <label class="form-check-label" for="pernah_berkonsultasi_konselor">
                                        Konselor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="pernah_berkonsultasi[]" type="checkbox" value="Lainnya" id="pernah_berkonsultasi_lainnya">
                                    <label class="form-check-label" for="pernah_berkonsultasi_lainnya">
                                        Lainnya
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <b>Apakah anda pernah mengikuti sesi hipnoterapi?</b>
                        <div class="row mt-2">
                            <div class="col-6 col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pernah_hipnoterapi" value="Pernah" id="pernah_hipnoterapi_pernah">
                                    <label class="form-check-label" for="pernah_hipnoterapi_pernah">
                                        Pernah
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pernah_hipnoterapi" value="Belum" id="pernah_hipnoterapi_belum">
                                    <label class="form-check-label" for="pernah_hipnoterapi_belum">
                                        Belum
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-3 mb-3">
                    <b>Terkait masalah anda, perasaan apa saja yang anda rasakan?</b>
                    <div class="col-6 col-md-4 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Marah" id="perasaan_dirasakan_marah">
                            <label class="form-check-label" for="perasaan_dirasakan_marah">
                                Marah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Dendam" id="perasaan_dirasakan_dendam">
                            <label class="form-check-label" for="perasaan_dirasakan_dendam">
                                Dendam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Benci" id="perasaan_dirasakan_benci">
                            <label class="form-check-label" for="perasaan_dirasakan_benci">
                                Benci
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Takut" id="perasaan_dirasakan_takut">
                            <label class="form-check-label" for="perasaan_dirasakan_takut">
                                Takut
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Kesepian" id="perasaan_dirasakan_kesepian">
                            <label class="form-check-label" for="perasaan_dirasakan_kesepian">
                                Kesepian
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Merasa Putus Asa" id="perasaan_dirasakan_merasa_putus_asa">
                            <label class="form-check-label" for="perasaan_dirasakan_merasa_putus_asa">
                                Merasa putus asa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Merasa Tidak Diinginkan" id="perasaan_dirasakan_merasa_tidak_diinginkan">
                            <label class="form-check-label" for="perasaan_dirasakan_merasa_tidak_diinginkan">
                                Merasa tidak diinginkan
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Kecewa" id="perasaan_dirasakan_kecewa">
                            <label class="form-check-label" for="perasaan_dirasakan_kecewa">
                                Kecewa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Sakit Hati" id="perasaan_dirasakan_sakit_hati">
                            <label class="form-check-label" for="perasaan_dirasakan_sakit_hati">
                                Sakit hati
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Menyesal" id="perasaan_dirasakan_menyesal">
                            <label class="form-check-label" for="perasaan_dirasakan_menyesal">
                                Menyesal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Cemas" id="perasaan_dirasakan_cemas">
                            <label class="form-check-label" for="perasaan_dirasakan_cemas">
                                Cemas
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Sedih" id="perasaan_dirasakan_sedih">
                            <label class="form-check-label" for="perasaan_dirasakan_sedih">
                                Sedih
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Merasa Tidak Bahagia" id="perasaan_dirasakan_merasa_tidak_bahagia">
                            <label class="form-check-label" for="perasaan_dirasakan_merasa_tidak_bahagia">
                                Merasa tidak bahagia
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Terluka" id="perasaan_dirasakan_terluka">
                            <label class="form-check-label" for="perasaan_dirasakan_terluka">
                                Terluka
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Tersinggung" id="perasaan_dirasakan_tersinggung">
                            <label class="form-check-label" for="perasaan_dirasakan_tersinggung">
                                Tersinggung
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Frustasi" id="perasaan_dirasakan_frustasi">
                            <label class="form-check-label" for="perasaan_dirasakan_frustasi">
                                Frustasi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Malu" id="perasaan_dirasakan_malu">
                            <label class="form-check-label" for="perasaan_dirasakan_malu">
                                Malu
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Merasa Tidak Mampu" id="perasaan_dirasakan_merasa_tidak_mampu">
                            <label class="form-check-label" for="perasaan_dirasakan_merasa_tidak_mampu">
                                Merasa tidak mampu
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="perasaan_dirasakan[]" type="checkbox" value="Merasa Kecil" id="perasaan_dirasakan_merasa_kecil">
                            <label class="form-check-label" for="perasaan_dirasakan_merasa_kecil">
                                Merasa kecil
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-3 mb-3">
                    <b>Apakah anda mengalami kondisi kesehatan seperti :</b>
                    <div class="col-6 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" name="kondisi_kesehatan[]" type="checkbox" value="Jantung" id="kondisi_kesehatan_jantung">
                            <label class="form-check-label" for="kondisi_kesehatan_jantung">
                                Jantung
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="kondisi_kesehatan[]" type="checkbox" value="Stroke" id="kondisi_kesehatan_stroke">
                            <label class="form-check-label" for="kondisi_kesehatan_stroke">
                                Stroke
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="kondisi_kesehatan[]" type="checkbox" value="Hipertensi" id="kondisi_kesehatan_hipertensi">
                            <label class="form-check-label" for="kondisi_kesehatan_hipertensi">
                                Hipertensi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="kondisi_kesehatan[]" type="checkbox" value="Kehamilan" id="kondisi_kesehatan_kehamilan">
                            <label class="form-check-label" for="kondisi_kesehatan_kehamilan">
                                Kehamilan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="kondisi_kesehatan[]" type="checkbox" value="Cerebral Palsy" id="kondisi_kesehatan_cerebral_palsy">
                            <label class="form-check-label" for="kondisi_kesehatan_cerebral_palsy">
                                Cerebral Palsy
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="kondisi_kesehatan[]" type="checkbox" value="Merasa tidak diinginkan" id="kondisi_kesehatan_merasa_tidak_diinginkan">
                            <label class="form-check-label" for="kondisi_kesehatan_merasa_tidak_diinginkan">
                                Merasa tidak diinginkan
                            </label>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" name="kondisi_kesehatan[]" type="checkbox" value="Diabetes" id="kondisi_kesehatan_diabetes">
                            <label class="form-check-label" for="kondisi_kesehatan_diabetes">
                                Diabetes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="kondisi_kesehatan[]" type="checkbox" value="Epilepsi" id="kondisi_kesehatan_epilepsi">
                            <label class="form-check-label" for="kondisi_kesehatan_epilepsi">
                                Epilepsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="kondisi_kesehatan[]" type="checkbox" value="Hipotensi" id="kondisi_kesehatan_hipotensi">
                            <label class="form-check-label" for="kondisi_kesehatan_hipotensi">
                                Hipotensi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="kondisi_kesehatan[]" type="checkbox" value="Asma" id="kondisi_kesehatan_asma">
                            <label class="form-check-label" for="kondisi_kesehatan_asma">
                                Asma
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="kondisi_kesehatan[]" type="checkbox" value="Sedih" id="kondisi_kesehatan_sedih">
                            <label class="form-check-label" for="kondisi_kesehatan_sedih">
                                Sedih
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="kondisi_kesehatan[]" type="checkbox" value="Tidak ada/Tidak tahu" id="kondisi_kesehatan_tidakada_tidaktahu">
                            <label class="form-check-label" for="kondisi_kesehatan_tidakada_tidaktahu">
                                Tidak ada/Tidak tahu
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-3 mb-3">
                    <b>Apakah anda sering mengalami gangguan seperti dibawah ini?</b>
                    <div class="col-12 col-md-6 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Sinus" id="mengalami_gangguan_sinus">
                            <label class="form-check-label" for="mengalami_gangguan_sinus">
                                Sinus
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Leher belakang kaku" id="mengalami_gangguan_leher_belakang_kaku">
                            <label class="form-check-label" for="mengalami_gangguan_leher_belakang_kaku">
                                Leher belakang kaku
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Pundak kaku" id="mengalami_gangguan_pundak_kaku">
                            <label class="form-check-label" for="mengalami_gangguan_pundak_kaku">
                                Pundak kaku
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Punggung bawah/Pinggang kaku" id="mengalami_gangguan_punggung_bawah_pinggang_kaku">
                            <label class="form-check-label" for="mengalami_gangguan_punggung_bawah_pinggang_kaku">
                                Punggung bawah/Pinggang kaku
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Kram" id="mengalami_gangguan_kram">
                            <label class="form-check-label" for="mengalami_gangguan_kram">
                                Kram
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Sembelit" id="mengalami_gangguan_sembelit">
                            <label class="form-check-label" for="mengalami_gangguan_sembelit">
                                Sembelit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Tangan dingin" id="mengalami_gangguan_tangan_dingin">
                            <label class="form-check-label" for="mengalami_gangguan_tangan_dingin">
                                Tangan dingin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Kaki kaku" id="mengalami_gangguan__mengalami_gangguan_kaki_kaku">
                            <label class="form-check-label" for="mengalami_gangguan__mengalami_gangguan_kaki_kaku">
                                Kaki kaku
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-2">
                    <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Sakit kepala sebelah" id="mengalami_gangguan_sakit_kepala_sebelah">
                            <label class="form-check-label" for="mengalami_gangguan_sakit_kepala_sebelah">
                                Sakit kepala sebelah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Sariawan/Gusi luka" id="mengalami_gangguan_sariawan_gusi_luka">
                            <label class="form-check-label" for="mengalami_gangguan_sariawan_gusi_luka">
                                Sariawan/Gusi luka
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Punggung atas kaku" id="mengalami_gangguan_punggung_atas_kaku">
                            <label class="form-check-label" for="mengalami_gangguan_punggung_atas_kaku">
                                Punggung atas kaku
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Kram saat menstruasi" id="mengalami_gangguan_kram_saat_menstruasi">
                            <label class="form-check-label" for="mengalami_gangguan_kram_saat_menstruasi">
                                Kram saat menstruasi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Kaku pada tangan/Persendian" id="mengalami_gangguan_kaku_pada_tangan_persendian">
                            <label class="form-check-label" for="mengalami_gangguan_kaku_pada_tangan_persendian">
                                Kaku pada tangan/Persendian
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Asam lambung berlebih" id="mengalami_gangguan_asam_lambung_berlebih">
                            <label class="form-check-label" for="mengalami_gangguan_asam_lambung_berlebih">
                                Asam lambung berlebih
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Kaki dingin" id="mengalami_gangguan_kaki_dingin">
                            <label class="form-check-label" for="mengalami_gangguan_kaki_dingin">
                                Kaki dingin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="mengalami_gangguan[]" type="checkbox" value="Kaki bengkak" id="mengalami_gangguan_kaki_bengkak">
                            <label class="form-check-label" for="mengalami_gangguan_kaki_bengkak">
                                Kaki bengkak
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-3 mb-3">
                    <b>Perubahan positif yang anda harapkan setelah melewati sesi terapi :</b>
                    <div class="form-floating mt-1">
                        <textarea class="form-control" name="perubahan_diharapkan" id="perubahan_diharapkan" style="height: 100px"></textarea>
                    </div>
                </div>
                <div class="row mt-3 mb-3">
                    <b>Jadwal sesi terapi :</b>
                    <div class="form-group">
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                            <input type="text" class="form-control datepicker" id="jadwal_sesi" name="jadwal_sesi">
                        </div>
                    </div>
                </div>
                <div class="form-button text-center">
                    <button type="submit" class="btn btn-brown">SUBMIT</button>
                    <div id="reset" class="btn btn-grey">Reset</div>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- Akhir Form --}}

{{-- Awal Testimonials --}}
<div class="section-testimonials">
    <div class="container">
        <div class="section-judul text-center">
            TESTIMONIALS
        </div>
        <div class="row">
            <div class="text-testimoni text-center">
                Terima kasih untuk bantuannya pak Arief! Saya sekarang bisa bangkit dari depresi saya, rasanya hidup jauh lebih ringan dan menyenangkan! Demikian juga dalam bekerja juga jauh lebih mudah untuk fokus. Rasanya kembali bersemangat dan PD untuk menjalani hidup saya ini. Terima kasih sekali lagi!
            </div>
            <div class="text-center">
                <img class="foto-testimoni rounded" src="{{ asset('img/Testimoni.jpg') }}">
            </div>
            <div class="bintang-testimoni text-center mb-1">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="nama-testimoni text-center">
                <b>Wahyu Gunawan</b>
            </div>
            <div class="pekerjaan-testimoni text-center">
                Karyawan Swasta
            </div>
        </div>
    </div>
</div>
{{-- Akhir Testimonials --}}

{{-- Awal Contact --}}
<div class="section-contact">
        <div class="form-judul text-center">
            <h3>Hubungi Kami</h3>
            <hr>
        </div>
        <p class="text-center deskripsi-kontak">Bagi yang ingin bertanya dapat menghubungi melalui kontak di bawah ini.</p>
    <div class="row">
        <div class="col-12 col-md-5 contact">
            <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31731.597449952358!2d106.86891916813053!3d-6.204259912545876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4e9474d1fc1%3A0x7755552cf47cd33!2sArfi%20Store!5e0!3m2!1sid!2sid!4v1616755947335!5m2!1sid!2sid" allowfullscreen="true" loading="lazy"></iframe>
        </div>
        <div class="col-12 col-md-1">

        </div>
        <div class="col-12 col-md-5 contact">
            <div class="row p-3">
                <div class="col-2">
                    <i class="fas fa-phone fa-2x brown"></i>
                </div>
                <div class="col-10">
                    <div class="row">
                        <b>Ponsel</b>
                    </div>
                    <div class="row text-contact">
                       0811789108
                    </div>
                </div>
            </div>
            <div class="row p-3">
                 <div class="col-2">
                    <i class="fas fa-envelope fa-2x brown"></i>
                </div>
                <div class="col-10">
                    <div class="row">
                        <b>Email</b>
                    </div>
                    <div class="row text-contact">
                       Arief.nuryanto@gmail.com
                    </div>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-2">
                    &nbsp;<i class="fas fa-map-marker-alt fa-2x brown"></i>
                </div>
                <div class="col-10">
                    <div class="row">
                        <b>Alamat</b>
                    </div>
                    <div class="row text-contact">
                        Jl. Bangkil No.10, RT.2/RW.4, Kayu Putih, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13210
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Akhir Contact --}}

{{-- Awal Footer --}}
<div class="footer">
    <div class="text-center">
        Copyright © 2021 HYPNO and THINGS | Created by Ir. Arief Nuryanto CH., CHt (IACT-USA)., MH.
    </div>
</div>
{{-- Akhir Footer --}}

{{-- Button Whatsapp --}}
<a href="https://api.whatsapp.com/send?phone=0811789108" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

{{-- Button Up --}}
<button class="btn btn-up scroll-top" data-scroll="up" type="button">
<i class="fa fa-chevron-up"></i>



</body>
</html>

<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

@if($errors->any())
<script>
    $('html, body').animate({
        scrollTop: $(".section-form").offset().top
    }, 0);
</script>
@endif