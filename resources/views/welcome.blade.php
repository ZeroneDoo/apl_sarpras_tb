{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Schoolio</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .btn-primary-self {
            background-color: #009cea;
        }

    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.html"><span>Schoolio</span></a></h1>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="{{ route('index') }}#hero">Home</a></li>
                    <li class=""><a href="{{ route('about') }}#fitur">About Us</a></li>
                    <li class=""><a href="{{ route('faq') }}#fitur">FAQ</a></li>
                    <li class=""><a href="{{ route('login') }}"
                            class="btn btn-primary-self text-white">{{ Auth::user() ? 'Dashboard' : 'Sign In' }}</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="bg-gray-500 ">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                    data-aos="fade-up">
                    <div>
                        <h1>Schoolio is very easy for school payment management</h1>
                        <h2>Schoolio has features that are very helpful in managing school payments</h2>
                        <a href="{{ route('login') }}" class="btn-get-started">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="fitur" class="services ">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Service</h2>
                    <p>The features in schoolio are very helpful in paying for school including:</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
                        <div class="icon-box icon-box-pink">
                            <div class="icon"><i class='bx bxs-upvote'></i></div>
                            <h4 class="title"><a href="">Upgrade Class</a></h4>
                            <p class="description">In scoolio there is a class upgrade feature which is very useful for
                                long
                                term use</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <div class="icon"><i class='bx bxs-group'></i></div>
                            <h4 class="title"><a href="">Easy user management</a></h4>
                            <p class="description">In schoolio there are features that are very supportive for user
                                management</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><i class='bx bxs-file-pdf'></i></div>
                            <h4 class="title"><a href="">Export PDF</a></h4>
                            <p class="description">In schoolio there is an export feature for payments that have
                                occurred in
                                PDF form</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box icon-box-blue">
                            <div class="icon"><i class='bx bxs-layout'></i></div>
                            <h4 class="title"><a href="">Attractive design</a></h4>
                            <p class="description">Schoolio uses a very good UI design, so it's very pleasant to use</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>CodingRafi</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html> --}}

@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/landingpage.css') }}">
@endsection

@section('content')
<main>
    <div class="containers">
        <div class="text-header">
            <h1>Semua Informasi </h1>
            <h1 class="title-header2"> Tentang Alat/Barang</h1>
            <h1 class="title-header2"> Dalam Situs </h1>
            <p>Situs ini membantu anda untuk memudahkan dalam Mengatur/Mengelola Pemasukan dan Pengeluaran Barang yang terjadi di lingkungan sekolah</p>

        </div>
        <div class="image-bian">
            <img src="{{ asset('assets/img/dashboard-sarpras.png') }}" style="border-radius: 20px; border: solid 10px white" alt="">
        </div>
    </div>
    <div class="content-landing">
        <div class="content-1">
            <div class="img-content">
                <img src="{{ asset('assets/img/content-1.jpg') }}" alt="">
            </div>
            <div class="text-content">
                <ul>
                    <li>
                        <h1 class="subjudul">Mulai Dengan Sarpras</h1>
                    </li>
                    <li>
                        <p>Kami menghadirkan solusi modern dan intuitif untuk pengelolaan sarana prasarana di sekolah Anda. Dengan fitur-fitur yang lengkap dan mudah digunakan, Sarpras akan menjadi sahabat Anda dalam mengatur segala kebutuhan sekolah Anda.</p>
                    </li>
                    <li>
                        <ul>
                            <li><i class="bx bxs-check-circle"></i>Advance System</li>
                            <li><i class="bx bxs-check-circle"></i>Easy Acces</li>
                            <li><i class="bx bxs-check-circle"></i>Fully Integrated</li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <div class="content-2">
            <div class="text-content">
                <ul>
                    <li>
                        <h1 class="subjudul">Apa Itu Sarpras ?</h1>
                    </li>
                    <li>
                        <p>Sarpras adalah singkatan dari Sarana dan Prasarana, yang merujuk pada segala fasilitas dan
                            infrastruktur yang diperlukan dalam sebuah institusi atau organisasi, seperti gedung,
                            peralatan, mesin, dan lain sebagainya. Pada situs web Sarpras Taruna Bhakti ini, memberikan informasi dan pelayanan terkait dengan manajemen, pemeliharaan, dan peminjaman fasilitas dan
                            infrastruktur tersebut.</p>
                    </li>
                    <li><div class="more-button">
                      <a class="btn-more" href="">Lihat lebih banyak<div class="bx bx-chevron-down"></div></a>
                  </div></li>
                </ul>
            </div>
            <div class="img-content">
                <img src="{{ asset('assets/img/sarpras-info.jpg') }}" alt="" style="height: 674px; border-radius: 20px; width: 427px; object-fit: cover">
            </div>
        </div>
        <div class="content-3">
          <div class="img-content">
            <img src="{{ asset('assets/img/dashboard-sarpras.png') }}" alt="" style="border-radius: 20px; border: solid 10px black; width: 35vw">
          </div>
          <div class="text-content">
            <ul>
                <li>
                    <h1 class="subjudul">Kelola Dengan Situs</h1>
                </li>
                <li>
                    <p>Dengan Adanya Situs Sarana Prasarana (Sarpras) ini, Anda semua dapat melakukan pengelolaan Barang dan ruangan dengan mudah menggunakan situs ini yang bisa dijangkau oleh semua orang</p>
                </li>
                <li><div class="more-button">
                  <a class="btn-more" href="">Lihat lebih banyak<div class="bx bx-chevron-down"></div></a>
              </div></li>
            </ul>
          </div>
        </div>
        <div class="content-4">
          <div class="text-content">
              <ul>
                  <li>
                      <h1 class="subjudul">Peminjaman dengan Online</h1>
                  </li>
                  <li>
                      <p>Dengan Adanya Situs Sarana Prasarana (Sarpras) ini, Anda semua dapat melakukan peminjaman yang dilakukan secara online yang mana lebih praktis untuk dilakukan kapanpun dan dimana saja</p>
                  </li>
                  <li><div class="more-button">
                    <a class="btn-more" href="">Lihat lebih banyak<div class="bx bx-chevron-down"></div></a>
                </div></li>
              </ul>
          </div>
          <div class="img-content">
              <img src="{{ asset('assets/img/dashboard-mobile-sarpras.png') }}" alt=""  style="width:493px; height:674px; border-radius: 20px; border: solid 10px black">
          </div>
      </div>
    </div>

</main>
@endsection
