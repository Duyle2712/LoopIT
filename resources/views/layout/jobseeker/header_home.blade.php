<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TechJobs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layout.jobseeker.css')
</head>

<body>

<div class="container-fluid fluid-nav">
    <div class="container cnt-tnar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light tjnav-bar">
            <a href="#" class="nav-logo">
                <img src="{{ URL::asset('public/img/techjobs_bgb.png') }}">
            </a>
            <button class="navbar-toggler tnavbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars icn-res" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto tnav-left tn-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Việc Làm IT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Công ty</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Công cụ
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
                    <a class="nav-link" href="{{URL::to('/login_employees')}}">Đăng Ký</a>
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
                    <a class="nav-link btn-employers" href="{{route('recruiter.home')}}" tabindex="-1" aria-disabled="true">Nhà Tuyển Dụng</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
