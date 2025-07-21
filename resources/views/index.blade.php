<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Masjid Al-Bakrie</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="{{ asset('depan/img/logo2.png') }}" rel="icon">
  <link href="{{ asset('depan/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('depan/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('depan/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('depan/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('depan/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('depan/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="{{ asset ('depan/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset ('depan/img/logo2.png') }}" alt="">
        <h1 class="sitename">Masjid Al-Bakrie</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Beranda</a></li>
          <li><a href="#tentangkami">Tentang Kami</a></li>
          <li><a href="#fasilitas">Fasilitas</a></li>
          <li><a href="#kegiatan">Kegiatan</a></li>
          <li><a href="#galeri">Galeri</a></li>
          <li><a href="#jadwalsholat">Jadwal Sholat</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="{{ asset('depan/img/hero-bg.jpg') }}" alt="" class="hero-bg">
      <div class="container">
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 order-lg-last hero-img hero-image-wrapper position-relative" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('depan/img/hero-img-mosque1.png') }}" class="img-fluid animated main-img" alt="Masjid 1">
            <img src="{{ asset('depan/img/hero-img-mosque2.jpeg') }}" class="img-fluid animated overlay-img" alt="Masjid 2">
          </div>
          <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
            <h3>اِنَّمَا يَعْمُرُ مَسٰجِدَ اللّٰهِ مَنْ اٰمَنَ بِاللّٰهِ وَالْيَوْمِ الْاٰخِرِ وَاَقَامَ الصَّلٰوةَ وَاٰتَى الزَّكٰوةَ وَلَمْ يَخْشَ اِلَّا اللّٰهَۗ فَعَسٰٓى اُولٰۤىِٕكَ اَنْ يَّكُوْنُوْا مِنَ الْمُهْتَدِيْنَ</h3>
            <p>Sesungguhnya yang (pantas) memakmurkan masjid-masjid Allah hanyalah orang yang beriman kepada Allah dan hari Akhir, mendirikan salat, menunaikan zakat, serta tidak takut (kepada siapa pun) selain Allah. Mereka itulah yang diharapkan termasuk golongan orang-orang yang mendapat petunjuk.</p>
            <p>QS.At - Taubah Ayat 18</p>
            <div class="d-flex">
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
        </div>
      </div>
      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>
    </section>


    <!-- Tentang Section -->
    <section id="tentangkami" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>Tentang Masjid Al-Bakrie</h3>
            <h2>Sejarah Singkat</h2>
            <p style="text-align: justify;">
              Masjid Al-Bakrie diresmikan pada tanggal 23 Februari 2004, dibangun di atas lahan milik Pemerintah Provinsi DKI Jakarta seluas 3.200 m². Diresmikan oleh Bapak Aburizal Bakrie bersama para tokoh dan masyarakat, masjid ini hadir sebagai pusat ibadah dan aktivitas sosial bagi warga sekitar dan lingkungan Bakrie Group.
              Dengan arsitektur yang terinspirasi dari gaya Masjid Medan dan prinsip desain islami, masjid ini memiliki luas bangunan 1.458 m² dan mampu menampung lebih dari 2.000 jamaah.
            </p>
            <!-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-binoculars"></i>
                  <h3>Visi</h3>
                  <p class="small mb-2">
                    Mewujudkan sarana ibadah dan pendidikan untuk meningkatkan ketaqwaan kepada Allah SWT serta memperkuat nilai-nilai ukhuwah Islamiyah.
                  </p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-binoculars"></i>
                  <!-- <h3>Visi</h3> -->
                  <p class="small mb-2">
                    Sesuai dengan Filosopi H. Achmad Bakrie bahwa setiap rupiah yang dihasilkan harus bermanfaat bagi orang banyak. Hal ini sejalan dengan Hadist Rasulullah SAW : “Sebaik-baik manusia adalah yang bermanfaat bagi orang lain”.
                  </p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-list-check"></i>
                  <h3>Misi</h3>
                  <p>Membina, memupuk serta menumbuh kembangkan ukhuwah Islamiyah dan rasa persaudaraaan menuju persatuan dan kesatuan nasional antar pribadi, keluarga dan masyarakat pada umumnya.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-list-check"></i>
                  <!-- <h3>Misi</h3> -->
                  <p>Menumbuhkan keimanan, ketakwaan, dan akhlakul karimah terutama bagi anak-anak dan generasi muda melalui dakwah, syiar Islam, serta amar ma’ruf nahi munkar.Memberikan pelayanan agama, pendidikan, dan sosial bagi masyarakat, khususnya yang kurang mampu.</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /Tentang Section -->

    <!-- Fasilitas Section -->
    <section id="fasilitas" class="features section">
      <div class="container">
        <div class="section-header text-center mb-5">
          <h2 style="color: #091c3a;">Fasilitas Masjid</h2>
          <p class="text-secondary">Berbagai sarana yang menunjang ibadah dan kegiatan jamaah</p>
        </div>
        <div class="row gy-4">
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="features-item">
              <i class="bi bi-building" style="color: #ffbb2c;"></i>
              <h3><a href="{{ asset('depan/img/fasilitas/ruang-ibadah-utama.png') }}" class="glightbox" data-gallery="fasilitas" class="stretched-link">Ruang Ibadah Utama</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="features-item">
                <i class="bi bi-person-fill" style="color: #5578ff;"></i>
                <h3><a href="{{ asset('depan/img/fasilitas/ruang-ibadah-wanita.png') }}" class="glightbox" data-gallery="fasilitas" class="stretched-link">Ruang Ibadah Wanita</a></h3>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="features-item">
              <i class="bi bi-droplet-half" style="color: #e80368;"></i>
              <h3><a href="#fasilitas" class="glightbox" data-gallery="fasilitas" class="stretched-link">Ruang Wudhu Pria</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="features-item">
              <i class="bi bi-droplet" style="color: #e361ff;"></i>
              <h3><a href="#fasilitas" class="glightbox" data-gallery="fasilitas" class="stretched-link">Ruang Wudhu Wanita</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="features-item">
              <i class="bi bi-universal-access" style="color: #47aeff;"></i> 
              <h3><a href="#fasilitas" class="glightbox" data-gallery="fasilitas" class="stretched-link">Akses Disabilitas</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="features-item">
              <i class="bi bi-car-front" style="color: #ffa76e;"></i>
              <h3><a href="{{ asset('depan/img/fasilitas/parkir.png') }}" class="glightbox" data-gallery="fasilitas" class="stretched-link">Area Parkir</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="features-item">
              <i class="bi bi-megaphone" style="color: #11dbcf;"></i>
              <h3><a href="#fasilitas" class="glightbox" data-gallery="fasilitas" class="stretched-link">Papan Pengumuman</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
            <div class="features-item">
              <i class="bi bi-grid-3x3-gap-fill" style="color: #4233ff;"></i>
              <h3><a href="{{ asset('depan/img/fasilitas/plaza-masjid.png') }}" class="glightbox" data-gallery="fasilitas" class="stretched-link">Plaza Masjid</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
            <div class="features-item">
              <i class="bi bi-people-fill" style="color: #b2904f;"></i>
              <h3><a href="#fasilitas" class="glightbox" data-gallery="fasilitas" class="stretched-link">Aula Serbaguna</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
            <div class="features-item">
              <i class="bi bi-book-fill" style="color: #b20969;"></i>
              <h3><a href="#fasilitas" class="glightbox" data-gallery="fasilitas" class="stretched-link">Ruang TK/TPA</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
            <div class="features-item">
              <i class="bi bi-journal-bookmark-fill" style="color: #ff5828;"></i>
              <h3><a href="{{ asset('depan/img/fasilitas/perpustakaan.png') }}" class="glightbox" data-gallery="fasilitas" class="stretched-link">Perpustakaan</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
            <div class="features-item">
              <i class="bi bi-boxes" style="color: #29cc61;"></i>
              <h3><a href="{{ asset('depan/img/fasilitas/mezanin.png') }}" class="glightbox" data-gallery="fasilitas" class="stretched-link">Lantai 2 (Mezanin)</a></h3>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Fasilitas Section -->

<!-- Kegiatan Section -->
  <section id="kegiatan" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h1 class="text-center mb-5">Kegiatan Masjid</h1>
        <div class="row gy-4 floating d-flex">

        <div class="col-lg-4 col-md-6 d-flex h-100 flex-column align-items-center">
          <!-- <div class="stats-item text-start mt-2"> -->
          <div class="stats-item text-start mt-2 w-100" style="min-height: 100%; padding: 20px; background-color: #fdfdfd; border-radius: 10px;">
            <p class="mb-2"><strong>Kegiatan Hari Besar Islam:</strong></p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Tahun Baru Islam (1 Muharram)</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Maulid Nabi Muhammad SAW</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Isra' Mi'raj Nabi Muhammad SAW</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Tarhib Ramadhan </p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Zakat, Infaq & Shadaqah (ZIS)</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Sholat Idul fitri</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Sholat Idul Adha</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Qurban</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex h-100 flex-column align-items-center">
          <div class="stats-item text-start mt-2 w-100" style="min-height: 100%; padding: 20px; background-color: #fdfdfd; border-radius: 10px;">
            <p class="mb-2"><strong>Kegiatan Bulan Ramadhan:</strong></p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Ta’jil & buka puasa bersama</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Sholat Tarawih & Tausiyah</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Tadarus Al-Qur’an</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Kuliah Dzuhur, Ashar & Subuh</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Peringatan Nuzulul Qur’an</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> I’tikaf 10 malam terakhir</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Santunan Yatim & Dhuafa</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Zakat, Infaq & Shadaqah (ZIS)</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex h-100 flex-column align-items-center">
          <div class="stats-item text-start mt-2 w-100" style="min-height: 100%; padding: 20px; background-color: #fdfdfd; border-radius: 10px;">
            <p class="mb-2"><strong>Kegiatan Sosial:</strong></p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Santunan Yatim Piatu & Dhuafa</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Sembako Murah</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Pemeriksaan Kesehatan Gratis</p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Donor Darah </p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Pelayanan Perpanjangan SIM Keliling malam hari </p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> KB Kes Manunggal TNI & Muspika </p>
            <p class="mb-2"><span class="iconify" data-icon="line-md:moon-rising-twotone-loop" data-width="20" data-height="20" style="color:#091c3a;"></span> Pemberdayaan Masyarakat </p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- /Stats Section -->

<!-- GALERI SECTION -->
  <section id="galeri" class="gallery section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Galeri</h2>
      <div><span class="description-title">Galeri kegiatan dan fasilitas Masjid Al Bakrie</span></div>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      @php
        $images = [
          ['file' => 'gallery-1.jpg', 'title' => 'Buka Puasa Bersama', 'desc' => 'Kegiatan Ramadhan bersama warga sekitar'],
          ['file' => 'gallery-2.jpg', 'title' => 'Kegiatan Donor Darah', 'desc' => 'Kerja sama dengan PMI Kota Bogor'],
          ['file' => 'gallery-3.jpg', 'title' => 'Kajian Malam Jumat', 'desc' => 'Kajian rutin setiap pekan'],
          ['file' => 'gallery-4.jpg', 'title' => 'Peringatan Maulid', 'desc' => 'Maulid Nabi Muhammad SAW'],
          ['file' => 'gallery-5.jpg', 'title' => 'I’tikaf', 'desc' => 'Malam penuh ibadah di 10 malam terakhir'],
          ['file' => 'gallery-6.jpg', 'title' => 'Santunan Yatim', 'desc' => 'Berbagi kasih bersama anak-anak yatim'],
          ['file' => 'gallery-7.jpg', 'title' => 'Qurban Idul Adha', 'desc' => 'Penyembelihan hewan qurban'],
          ['file' => 'gallery-8.jpg', 'title' => 'Pengajian Muslimah', 'desc' => 'Kajian rutin untuk ibu-ibu'],
          ['file' => 'gallery-9.jpg', 'title' => 'Gotong Royong', 'desc' => 'Bersih-bersih masjid bersama warga'],
          
        ];
      @endphp

      <div class="position-relative d-none d-md-block">
        <div class="swiper gallerySwiper">
          <div class="swiper-wrapper">
            @foreach(array_chunk($images, 8) as $chunk)
              <div class="swiper-slide">
                <div class="row g-0">
                  @foreach($chunk as $img)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                      <div class="gallery-item">
                        <a 
                          href="{{ asset('depan/img/gallery/' . $img['file']) }}"
                          class="glightbox"
                          data-gallery="images-gallery"
                          data-title="{{ $img['title'] }}"
                          data-description="{{ $img['desc'] }}"
                        >
                          <img src="{{ asset('depan/img/gallery/' . $img['file']) }}" class="img-fluid" alt="{{ $img['title'] }}">
                        </a>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            @endforeach
          </div>
          <div class="swiper-button-prev gallery-prev-desktop"></div>
          <div class="swiper-button-next gallery-next-desktop"></div>
          <div class="swiper-pagination gallery-pagination-desktop"></div>
        </div>
      </div>

      <!-- Mobile Swiper (1 image per slide) -->
      <div class="position-relative d-block d-md-none mt-4">
        <div class="swiper gallerySwiperMobile d-block d-md-none mt-4">
          <div class="swiper-wrapper">
            @foreach($images as $img)
              <div class="swiper-slide">
                <div class="gallery-item">
                  <a 
                    href="{{ asset('depan/img/gallery/' . $img['file']) }}"
                    class="glightbox"
                    data-gallery="images-gallery"
                    data-title="{{ $img['title'] }}"
                    data-description="{{ $img['desc'] }}"
                  >
                    <img src="{{ asset('depan/img/gallery/' . $img['file']) }}" class="img-fluid" alt="{{ $img['title'] }}">
                  </a>
                </div>
              </div>
            @endforeach
          </div>
          <div class="swiper-button-prev gallery-prev-mobile"></div>
          <div class="swiper-button-next gallery-next-mobile"></div>
          <div class="swiper-pagination gallery-pagination-mobile"></div>
        </div>
      </div>
    </div>
  </section>

<!-- JADWAL SHOLAT SECTION -->
  <section id="jadwalsholat" class="testimonials section dark-background">
    <video autoplay muted loop playsinline class="testimonials-bg">
      <source src="{{ asset('depan/vid/stars.mp4') }}" type="video/mp4">
      Browser kamu tidak mendukung tag video.
    </video>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper jadwalSholatSwiper">
        <div class="swiper-wrapper" id="jadwal-sholat-wrapper">
          <!-- Slide akan dimasukkan lewat JS -->
        </div>
        <div class="swiper-pagination"></div>
        </div>
      <div class="text-center text-white mt-2" id="lokasi-jadwal"></div>
    </div>
  </section>

<!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-12 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Pertanyaan yang Sering Diajukan</strong></h3>
              <p>
                Masjid bukan sekadar tempat ibadah, tapi juga pusat pembinaan umat. Temukan jawaban atas pertanyaan umum seputar kegiatan dan layanan Masjid Al-Bakrie di bawah ini.
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Berapa kapasitas Masjid Al-Bakrie?</h3>
                <div class="faq-content">
                  <p>Masjid ini mampu menampung lebih dari 2.000 jamaah, dan memiliki luas bangunan total 1.458 m² yang terdiri dari: Semi-basement 532m², Lantai dasar 464 m², Mezanin 419 m², Menara: 43 m²</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah tersedia kajian atau pendidikan keagamaan?</h3>
                <div class="faq-content">
                  <p>Masjid Al-Bakrie menyediakan berbagai program pendidikan keagamaan, terutama untuk anak-anak. Di antaranya adalah TPA/TPQ sebagai wadah pembelajaran dasar agama Islam, bimbingan membaca dan menghafal Al-Qur'an, serta program pendidikan diniyah non-formal yang dirancang untuk membentuk karakter islami sejak usia dini.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah Masjid Al-Bakrie dapat digunakan untuk menyelenggarakan acara atau kegiatan tertentu?</h3>
                <div class="faq-content">
                  <p>Ya, Masjid Al-Bakrie menyediakan fasilitas ruang serbaguna yang dapat dimanfaatkan untuk berbagai kegiatan, seperti akad nikah, syukuran, tasyakuran, hingga acara komunitas Islam seperti pengajian atau majelis taklim. Penggunaan fasilitas ini dapat dilakukan melalui koordinasi dan perizinan resmi dengan pihak pengurus masjid.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apa saja jadwal kegiatan kajian rutin di Masjid Al-Bakrie?</h3>
                <div class="faq-content">
                  <p>
                    Masjid Al-Bakrie menyelenggarakan berbagai kegiatan kajian rutin setiap minggu, di antaranya:
                  </p>
                  <ul>
                    <li><strong>Senin:</strong><br>
                      12.00 WIB – Kajian Dzuhur (Umum)<br>
                      18.00 WIB – Habib Mukhsin bin Zaed Al-Athos (Kitab Mukhtastar Al-Hadist)
                    </li>
                    <li><strong>Selasa:</strong><br>
                      08.00 WIB – Ustz. Dra. Hj. Romlah Adnan, Ustz. Dra. Hj. Nurma Nugraha, dll (Tafsir / Fiqih / Umum)
                    </li>
                    <li><strong>Rabu:</strong><br>
                      18.00 WIB – KH. Abdul Hakim Hadi (Kitab Tafsir Jalalain & Fiqih)
                    </li>
                    <li><strong>Kamis:</strong><br>
                      12.00 WIB – Kajian Dzuhur (Kitab Hadist Riyadlussalihin)<br>
                      18.00 WIB – Surat Yasin, Dzikir & Tahlil
                    </li>
                    <li><strong>Jumat:</strong><br>
                      12.00 WIB – Sholat Jumat (Umum)
                    </li>
                    <li><strong>Sabtu:</strong><br>
                      05.00 WIB – Kajian Subuh oleh Fajar Shodiq Madani (Umum)
                    </li>
                    <li><strong>Ahad:</strong><br>
                      08.00 WIB – Kajian Bulanan MT Rasuna (Fiqih / Aqidah / Hadist & Tafsir)
                    </li>
                  </ul>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->


            </div>

          </div>

          <!-- <div class="col-lg-5 order-1 order-lg-2">
            <img src="{{ asset ('depan/img/faq.jpg') }}"  class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div> -->
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <!-- <section id="contact" class="contact section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <div><span>Check Our</span> <span class="description-title">Contact</span></div>
      </div>

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div>

        </div>

      </div>

    </section> -->
    <!-- END /Contact Section -->

  </main>

  <footer id="kontak" class="footer dark-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-12 col-md-12 footer-about text-center">
          <div class="footer-hadith mb-3">
            <p class="text-white small fst-italic">
              <i class="bi bi-quote me-1"></i>
              Sebaik-baik manusia adalah yang paling bermanfaat bagi orang lain.
              <!-- <i class="bi bi-quote me-2"></i> -->
              <br>
              <span class="d-block mt-1">– HR. Ahmad</span>
            </p>
          </div>
          <a href="{{ url('/') }}" class="logo d-flex justify-content-center align-items-center">
            <span class="sitename">Masjid Al Bakrie</span>
          </a>
          <div class="footer-contact">
            <p>Komplek Rasuna Epicentrum</p>
            <p>Jl. HR. Rasuna Said, Kuningan, Setiabudi, Jakarta Selatan, DKI Jakarta, 12960</p>
            <p class="mt-3"><strong>Phone:</strong> <span>021-80868277</span></p>
            <!-- <p><strong>Email:</strong> <span>info@example.com</span></p> -->
          </div>
          <div class="social-links d-flex justify-content-center mt-4">
            <a href="https://web.facebook.com/masjidalbakrie.tamanrasuna.9/?_rdc=1&_rdr#" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/masjidalbakrie/" target="_blank"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© {{ date('Y') }} <span>Copyright | </span> <strong class="px-1 sitename">Masjid Al Bakrie | </strong> <span>All Rights Reserved</span></p>
      <!-- <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
      </div> -->
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('depan/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('depan/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('depan/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('depan/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('depan/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('depan/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('depan/js/main.js') }}"></script>
  <!-- swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


  </body>
</html>