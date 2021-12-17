<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CTRL C | {{ $title }}</title>

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

</head>
<body>
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
    </header>

    <div class="container-fluid">
        <div class="row justify-content-center">
                <div class="card mb-4 bg-dark" style="max-width: 950px;">
                  <div class="row">
                    <div class="col-lg-5">
                      @if ($post->poster_path)
                      <div>
                              <img src="{{ asset('storage/' . $post->poster_path) }}" alt="{{ $post->poster_path }}" class="img-fluid rounded">
                          </div>
                          @else
                              <img src="../film/{{ $post->poster_path }}" alt="{{ $post->poster_path }}}" class="img-fluid rounded">
                      @endif
                    </div>
                    <div class="col-lg-7 mt-3 mb-3">
                      <h5 class="card-title text-light">Judul : {{ $post->title }}</h5>
                        
                        <article class="my-3 fs-5 text-light">Deskripsi : 
                        {!! $post->overview !!}
                        </article>
                        <p class="card-text text-light">Genre : {{ $post->genre }}</p>
                        <p class="card-text text-light">Release Date : {{ $post->release_date }}</p>
                        <p class="card-text text-light">Popularity : {{ $post->popularity }}</p>
                    </div>
                  </div>
                    </div>
                  </div>
                </div>       
              </div>
            </div>         
            </div> 
</body>
</html>