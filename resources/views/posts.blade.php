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


    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('name'))
                    <input type="hidden" name="name" value="{{ request('name') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-info" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>


    @if ($posts->count())
                <div class="container-fluid">
                  <div class="row justify-content-center">
                    @foreach ($posts as $post)
                    <div class="col">
                      <div class="card mb-4" style="width: 18rem;">
                        @if ($post->poster_path)
                        <div style="max-height: 350px; overflow:hidden;">
                                <img src="{{ asset('storage/' . $post->poster_path) }}" alt="{{ $post->poster_path }}" class="img-fluid rounded">
                            </div>
                            @else
                                <img src="../film/{{ $post->poster_path }}" alt="{{ $post->poster_path }}}" class="img-fluid rounded">
                        @endif
                       
                        <div class="card-body">
                          <h4 class="card-title">{{ $post->title }}</h4>
                          <h6 class="card-text" style="text-align:right">{{ $post->genre }}</h6>
                          <hr>
                          {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                          <p class="card-text">Release Date : {{ $post->release_date }}</p>
                          <p class="card-text">Popularity : {{ $post->popularity }}</p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

    </body>
</html>