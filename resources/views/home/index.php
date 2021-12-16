<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ctrl + C</title>
  
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">



<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0" ><a href="#home">CTRL + C</a></h1>
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#home">Home</a></li>
          <li><a class="nav-link scrollto" href="#Search">Search Movie</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#events">Favorite</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#menu">About Us</a></li>
          <li><a class="nav-link scrollto" href="#dev">Develover</a></li>
          <li><a class="nav-link scrollto" href="#weather">Weather</a></li>
          </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="../login/" class="book-a-table-btn scrollto d-none d-lg-flex">Login</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Home Section ======= -->
  <section id="home" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>CTRL + C</span></h1>
          <h2>You can search any film!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">About Us</a>
            <a href="#Search" class="btn-menu animated fadeInUp scrollto">Let Search</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=c_fRtpQf4Oc" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Home -->

  <main id="main">

    
    <!-- !-- Search Section --> 
    <section id="Search" class="search">
    <div class="container"  data-aos="fade-up">
          <div class="row mt-3 justify-content-center">
                <div class="col-md-8">
                    <h1 class="text-center">Search Movie</h1>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Judul Film..." id="search-input">
                        <div class="input-group-append">
                        <!-- <button href="#book-a-table" class="bok-a-table-btn scrollto d-none d-lg-flex md-6" type="button" id="search-button">Search -->
                        </button>
                        <button href="#book-a-table" class="bok-a-table-btn" type="button" id="search-button">Search</button>
                      </div>
                    </div>
                </div>
          </div>

          <hr>

          <div class="row" id="movie-list">

          </div>
    </section><!-- End Search Section -->

    <section><!-- Bundel Section -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #cda45e;">Movie Search</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    </section><!-- Bundel Section -->




     <!-- ======= About Section ======= -->
     <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/a.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Deskripsi Kelompok CTRL+C</h3>
            <p class="fst-italic">
              Kelompok CTRL+C beranggota kan 5 orang, yaitu Hikmat, Ferry, Wahyu, Diva dan Chandra.
            </p>
            <p>
              Kelompok ini dibentuk dengan tujuan dapat menyelesaikan Tugas Besar terkait Mata Kuliah Praktikum
              Pemrograman Web. Pembagian tugas dilakukan dengan cara musyawarah agar tidak terjadi hal yang tidak
              mengenakan di dalam kelompok. Indikator keberhasilan dari kelompok kami yaitu dapat mengimplementasikan 
              penggunaan API pada web, web yang dibangun sudah bisa menggunakan fitur CRUDS, web yang dibangun sudah memiliki fitur Login dan registrasi,
              dan web yang dibangun harus memiliki field gambar yang nantinya bisa dikelola.
              Harapan kami web yang kami bangun dapat menjadi bahan pembelajaran yang mungkin nantinya bisa diterapkan di dunia kerja.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->




     <!-- ======= Events Section ======= -->
     <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Favorite</h2>
          <p>The Movies we like</p>
        </div>

        <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/gallery/7.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>SPIDERMAN</h3>
                  <div class="sub-judul">
                    <p><span>No Way Home</span></p>
                  </div>
                  <p class="fst-italic">
                  Identitas Spider-Man sekarang sudah terungkap, dan Peter meminta bantuan Doctor Strange. 
                  Namun sebuah kesalahan terjadi, dan itu justru mengundang musuh berbahaya dari dunia lain, mereka mulai bermunculan. 
                  Hal itu memaksa Peter mencari apa makna sebenarnya menjadi Spider-Man.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/gallery/2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>AVENGERS</h3>
                  <div class="sub-judul">
                    <p><span>End Game</span></p>
                  </div>
                  <p class="fst-italic">
                  Ketika musuh yang tak terduga muncul, mengancam keselamatan dan keamanan dunia, Nick Fury, direktur Badan Perdamaian Internasional, 
                  dikenal sebagai S.H.I.E.L.D. , membutuhkan tim untuk menyelamatkan dunia dari bencana. 
                  Usaha perekrutan pun dimulai Iron Man, Captain America, Hulk, Thor, Black Widow dan Hawkeye dikumpulkan untuk menaklukkan Dewa Kehancuran, 
                  Loki, dalam usahanya menghancurkan bumi. Dengan semua gabungan kekuatan, tugas nampak lebih mudah. Namun kenyatannya tidak demikian! 
                  Para pahlawan super justru saling melawan satu sama lain Hulk melawan Captain America, siapa yang akan menang? 
                  Apakah Iron Man dapat mengalahkan kekuatan super milik Thor? Bagaimana para pahlawan super ini secara bersama-sama menghadapi bencana, 
                  melindungi masyarakat dan yang terpenting, bertahan hidup?
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/gallery/3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>GUARDIANS OF THE GALAXY</h3>
                  <div class="sub-judul">
                    <p><span>Vol.2</span></p>
                  </div>
                  <p class="fst-italic">
                    Skuad Guardian disewa oleh Sovereign, ras alien, untuk mendapatkan kembali baterai mereka - tapi Rocket mencurinya. 
                  Kini, mereka harus segera beraksi untuk menyelamatkan galaxy sebelum terlambat.
                  </p>                 
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End our favorite Section -->



    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

<div class="container" data-aos="fade-up">
  <div class="section-title">
    <h2>Gallery</h2>
    <p>Some photos </p>
  </div>
</div>

<div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

  <div class="row g-0">

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/1.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="assets/img/gallery/1.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/5.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="assets/img/gallery/5.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/8.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="assets/img/gallery/8.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/4.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="assets/img/gallery/4.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/9.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="assets/img/gallery/9.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/6.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="assets/img/gallery/6.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/7.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="assets/img/gallery/7.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/10.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="assets/img/gallery/10.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

  </div>

</div>
</section><!-- End Gallery Section -->





     <!-- ======= Why Us Section ======= -->
     <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Mengapa Kami Memilih Nama CTRL + C ?</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Enak Didengar</h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Mudah Diingat</h4>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>Sangat Informatika</h4>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Check Our Job Desk</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-ketua">Ketua</li>
              <li data-filter=".filter-anggota">Anggota</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-ketua">
            <img src="/img/hikmat.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Ketua</a>
            </div>
            <div class="menu-ingredients">
            Perkenalkan nama saya Hikmat Fadrial dengan NRP 193040138 mahasiswa Teknik Informatika UNPAS.
                    Pada project kali ini Hikmat Fadrial berperan sebagai Ketua di kelompok CTRL+C
                    dengan jobdesk yang diambil yaitu membuat halaman Login dan Fitur Registrasi.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-anggota">
            <img src="/img/diva.jpeg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Anggota</a>
            </div>
            <div class="menu-ingredients">
            Perkenalkan nama saya Diva Amwal dengan NRP 193040126 mahasiswa Teknik Informatika UNPAS.
                    Pada project kali ini Diva Amwal berperan sebagai Anggota di kelompok CTRL+C
                    dengan jobdesk yang diambil yaitu membuat halaman About dan Navbar.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-anggota">
            <img src="/img/chandra.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Anggota</a>
            </div>
            <div class="menu-ingredients">
              Perkenalkan nama saya Chandra Dwi dengan NRP 193040133 mahasiswa Teknik Informatika UNPAS.
                    Pada project kali ini Chandra Dwi berperan sebagai Anggota di kelompok CTRL+C
                    dengan jobdesk yang diambil yaitu membuat halaman Genre.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-anggota">
            <img src="/img/wahyu.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Anggota</a>
            </div>
            <div class="menu-ingredients">
            Perkenalkan nama saya Wahyu Aprian dengan NRP 193040141 mahasiswa Teknik Informatika UNPAS.
                    Pada project kali ini Wahyu Aprian berperan sebagai Anggota di kelompok CTRL+C
                    dengan jobdesk yang diambil yaitu membuat halaman Film.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-anggota">
            <img src="/img/ferry1.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Anggota</a>
            </div>
            <div class="menu-ingredients">
            Perkenalkan nama saya Ferry Syamsul Ma'arif dengan NRP 193040145 mahasiswa Teknik Informatika UNPAS.
                    Pada project kali ini Ferry Syamsul berperan sebagai Anggota di kelompok CTRL+C
                    dengan jobdesk yang diambil yaitu membuat halaman Home.
            </div>
          </div>
  
        </div>

      </div>
    </section><!-- End Menu Section -->

    

   

    
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Word</h2>
          <p>words of wisdom</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  You can create beautiful things by code - Vania Radmila.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/img/hikmat.png" class="testimonial-img" alt="">
                <h3>Hikmat</h3>
                <h4>Login</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Jika kemaren bukan hari ini, maka besok pun bukan kemaren - Diva
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/img/diva.jpeg" class="testimonial-img" alt="">
                <h3>Diva A</h3>
                <h4>About</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/img/chandra.png" class="testimonial-img" alt="">
                <h3>Chandra</h3>
                <h4>Dashboard</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Whenever you encounter an error and you have tried to fix it but failed, pray because with prayer, speak on earth and be heard by the heavens.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/img/wahyu.png" class="testimonial-img" alt="">
                <h3>Wahyu</h3>
                <h4>Dashboard</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Life is a question and how we live it is our answer. Be yourself, do whatever based on your life principles.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/img/ferry1.png" class="testimonial-img" alt="">
                <h3>Ferri SM</h3>
                <h4>Home</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

   

    <!-- ======= Developer Section ======= -->
    <section id="dev" class="dev">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Develover</h2>
          <p>Our Proffesional Develover</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="img/profil-hikmat.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Hikmat Fadrial</h4>
                  <span>Ketua</span>
                </div>
                <div class="social">
                <a class="sosmed-link" href="https://www.instagram.com/fadrial_r/" target="_blank">
                        <i class="bi bi-instagram"></i>
                        
                    </a> 
                    <a class="sosmed-link" href="https://github.com/HikmatFadrialR" target="_blank">
                        <i class="bi bi-github"></i>
                        
                    </a>  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="img/profil-diva.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Diva Amwal</h4>
                  <span>Anggota</span>
                </div>
                <div class="social">
                <a class="sosmed-link" href="https://www.instagram.com/divaamwall/" target="_blank">
                        <i class="bi bi-instagram"></i>
                        
                    </a> 
                    <a class="sosmed-link" href="https://github.com/193040126" target="_blank">
                        <i class="bi bi-github"></i>
                        
                    </a> 
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="/img/profil-wahyu.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Wahyu Aprian</h4>
                  <span>Anggota</span>
                </div>
                <div class="social">
                <a class="sosmed-link" href="https://www.instagram.com/wahyuaprian490/" target="_blank">
                        <i class="bi bi-instagram"></i>
                        
                    </a> 
                    <a class="sosmed-link" href="https://github.com/WahyuAprian-193040141" target="_blank">
                        <i class="bi bi-github"></i>
                        
                    </a> 
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="/img/profil-chandra.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Chandra Ramadhan</h4>
                  <span>Anggota</span>
                </div>
                <div class="social">
                <a class="sosmed-link" href="https://www.instagram.com/chandrarmdhn_/" target="_blank" target="_blank">
                        <i class="bi bi-instagram"></i>
                      
                    </a> 
                    <a class="sosmed-link" href="https://github.com/Chandrarmdhn" target="_blank">
                        <i class="bi bi-github"></i>
                        
                    </a> 
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="/img/ferry.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ferri Syamsul Ma'arif</h4>
                  <span>Anggota</span>
                </div>
                <div class="social">
                <a class="sosmed-link" href="https://www.instagram.com/ferryqiulz/" target="_blank">
                        <i class="bi bi-instagram"></i>
                        
                    </a> 
                    <a class="sosmed-link" href="https://github.com/FerriSyamsulMaarif" target="_blank">
                        <i class="bi bi-github"></i>
                       
                    </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Developer Section -->


    <!-- ======= Weather Section ======= -->
    <section id="weather" class="weather">
    <link rel="stylesheet" href="css/weater.css">
    </head>
    <body>
    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="col-md-4">
                <h1 class="weather-text" style="color: #cda45e;">Check the Weather</h1>
            </div>
        </div>
    

        <div class="row mt-3 justify-content-center">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control input-keyword" placeholder="Enter City's or country's Name" aria-label="Recipient's username" aria-describedby="">
                    <!-- <button class="btn btn-primary" type="button" id="button-addon2">Search</button> -->
                    <button href="#book-a-table" class="bok-a-table-btn" type="button" id="button-addon2">Search</button>
                </div>
            </div>    
        </div>
    </div>
        

    <div class="container mt-5 result">

    </div>
    </section><!-- End Weather Section -->



    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

        <div class="col-lg-5 col-md-6">
            <div class="footer-info">
              <h4>REFERENSI</h4>
              <div class="social-links mt-3">
                <ul><a href="https://www.youtube.com/watch?v=HqAMb6kqlLs&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a> YouTube</ul>
                <ul><a href="https://www.instagram.com/sandhikagalih/" target="_blank" class="facebook"><i class="bx bxl-instagram"></i></a> Instagram</ul>
                <ul><a href="https://github.com/sandhikagalih" target="_blank" class="instagram"><i class="bx bxl-github"></i></a> Github</ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#events">Our Favorite</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#menu">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#dev">Develover</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#Search">Search Movie</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#weather">Search Weather</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CTRL + C</span></strong>. All Rights Reserved
      </div>
      <div class="credits">Designed by CRTL + C</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/weater.js"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="js/script.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>