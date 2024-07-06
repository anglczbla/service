<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>
  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap')}}" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{url('css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('css/responsive.css')}}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <span>
              Esigned
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('about')}}"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('produk')}}">Produk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('service')}}">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('transaksi')}}">Transaksi</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="{{url('pengantaran')}}">Pengantaran</a>
                </li>
              </ul>
              <div class="user_option">
                <a href="">
                  <img src="{{url('images/user.png')}}" alt="">
                </a>
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        WELCOME TO

                      </h2>
                      <h1>
                        SERVICE MDP IT STORE
                      </h1>
                      <p>
                      </p>
                      <div class="">
                        <a href="">
                          Contact us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  {{-- <div class="main-panel">
    <div class="content-wrapper">
      @yield('content')
    </div>
  </div>
  <!-- do section --> --}}

  <section class="do_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What we do
        </h2>
        <p>
        </p>
      </div>
      <div class="do_container">
        <div class="box arrow-start arrow_bg">
          <div class="img-box">
            <img src="{{url('images/d-1.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Marketing
            </h6>
          </div>
        </div>
        <div class="box arrow-middle arrow_bg">
          <div class="img-box">
            <img src="{{url('images/d-2.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Development
            </h6>
          </div>
        </div>
        <div class="box arrow-middle arrow_bg">
          <div class="img-box">
            <img src="{{url('images/d-3.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Html5
            </h6>
          </div>
        </div>
        <div class="box arrow-end arrow_bg">
          <div class="img-box">
            <img src="{{url('images/d-4.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Css
            </h6>
          </div>
        </div>
        <div class="box ">
          <div class="img-box">
            <img src="{{url('images/d-5.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Wordpress
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>
 </div>
  <!-- do section -->
  <!-- end do section -->

  <!-- who section -->

   <div class="main-panel">
    <div class="content-wrapper">
      @yield('content')
    </div>

  <section class="who_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="{{url('images/who-img.jpg')}}" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                WHO WE ARE?
              </h2>
            </div>
            <p>
              MDP IT Store adalah platform layanan online yang menyediakan web service untuk pengantaran barang. 
              Pelanggan dapat dengan mudah memesan pengantaran secara online, memilih berbagai jenis layanan pengantaran, 
              dan melacak status pengiriman secara real-time. Layanan ini menawarkan fleksibilitas dalam waktu pengantaran, 
              keamanan barang yang dijamin, serta dukungan pelanggan yang responsif. 
              MDP IT Store membantu memenuhi kebutuhan pengantaran barang dengan efisien dan praktis bagi individu dan bisnis
            </p>
            <div>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end who section -->