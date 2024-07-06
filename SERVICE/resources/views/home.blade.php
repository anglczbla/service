@extends('layout.main')
@section('title', 'home')

@section('content')

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


  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <style>
              .image-container img {
                  height: 50px;
                  width: 100px;
              }   
            </style>
            <div class="image-container">
              <img src="images/mdp.jpeg" alt="">
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('about')}}">Tentang Kami</a>
                </li>
                @can('create', App\Transaksi::class)
                <li class="nav-item">
                  <a class="nav-link" href="{{url('produk')}}"> Produk </a>
                </li>
                @endcan
                <li class="nav-item">
                  <a class="nav-link" href="{{url('transaksi')}}"> Transaksi </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('service')}}"> Service </a>
                </li>
              </ul>
            </div>
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="me-3 text-light">
                         <i class="fa fa-sign-in-alt me-2"> {{ __('Log Out') }} </i>
                    </x-dropdown-link>
                </form>
          
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    
   
@endsection
