<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LoopIT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Roboto Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">

  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('resources/css/bootstrap.min.css') }}">



  <!-- Font Awesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- select 2 css -->
  <link rel="stylesheet" href="{{ URL::asset('resources/css/select2.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

   <!-- main css -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('resources/css/style.css') }}"> 
</head>
<body>
<!-- main nav -->
<div class="container-fluid fluid-nav another-page">
  <div class="container cnt-tnar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light tjnav-bar">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <a href="{{URL::to('/recruiter/home')}}" class="nav-logo">
    <img src="{{ URL::asset('resources/img/techjobs_bgw.png') }}">
  </a>
  <button class="navbar-toggler tnavbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon"></span> -->
    <i class="fa fa-bars icn-res" aria-hidden="true"></i>

  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto tnav-left tn-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Việc Làm IT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tin Tức</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav mr-auto my-2 my-lg-0 tnav-right tn-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-text">Tìm kiếm</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Đăng Ký</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Đăng Nhập</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          VI
        </a>
        <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">English</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-employers" href="#" tabindex="-1" aria-disabled="true" style="color: #fff!important">Nhà Tuyển Dụng</a>
      </li>
    </ul>
  </div>
</nav>
  </div>
</div>
<!-- (end) main nav -->

<div class="clearfix"></div>

<!-- recuiter Nav -->
<nav class="navbar navbar-expand-lg navbar-light nav-recuitment">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNava" aria-controls="navbarNava" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse container" id="navbarNava">
    <ul class="navbar-nav nav-recuitment-li">
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('/recruiter/job_posting')}}">Quản lý đăng tuyển</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Quản lý ứng viên</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Quản lý đăng tin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Quản lý hồ sơ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tài khoản</a>
      </li>
    </ul>
    <ul class="rec-nav-right">
      <li class="nav-item">
        <a class="nav-link" href="#">Tìm hồ sơ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Đăng tuyển</a>
      </li>
    </ul>
  </div>
</nav>
<!--  recuiter Nav -->