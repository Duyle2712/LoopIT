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
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/bootstrap.min.css') }}">



  <!-- Font Awesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- select 2 css -->
  <link rel="stylesheet" href="{{ URL::asset('public/css/select2.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  <!-- Custom styles for this page -->
  <link href="{{ URL::asset('public/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

   <!-- main css -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/recruiter-old-style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/recruiter-new-style.css') }}">

  <script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.3.js" type="text/javascript"></script>
  @if (Session::get('error') != null)
    <script type="text/javascript">
     $(window).load(function(){
         $('#MyModal').modal('show');
      });
    </script>
    @endif 

</head>
<body>
<!-- Modal IsLoginRecruiter-->
<div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"><strong>{{Session::get('error')}}</strong></div>
            
        </div>
    </div>
</div>
<!-- main nav -->
<div class="container-fluid fluid-nav another-page">
  <div class="container cnt-tnar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light tjnav-bar">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <a href="{{ route('recruiter.home') }}" class="nav-logo">
    <img src="{{ URL::asset('public/img/techjobs_bgw.png') }}">
  </a>
  <button class="navbar-toggler tnavbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon"></span> -->
    <i class="fa fa-bars icn-res" aria-hidden="true"></i>

  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto tnav-left tn-nav">
      <li class="nav-item">
        <a class="nav-link btn-employers" href="{{route('Home')}}" tabindex="-1" aria-disabled="true" style="color: #fff!important">Ứng Viên</a>
      </li>
      
      
    </ul>
    <ul class="navbar-nav mr-auto my-2 my-lg-0 tnav-right tn-nav">     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          VI
        </a>
        <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">English</a>
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn-employers" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="true" style="color: #fff!important">       
            {{Session::get('recruiter_name')}}        
        </a>
        <div class="dropdown-menu tdropdown" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Tài Khoản</a>    
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('recruiter.logout')}}">Đăng Xuất</a>
        </div>
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
        <a class="nav-link" href="{{ route('recruiter.get_posting_job') }}">Quản lý đăng tuyển</a>
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
