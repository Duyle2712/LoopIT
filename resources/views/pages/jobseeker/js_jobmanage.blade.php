@extends('layout.jobseeker.main')
@section('content')

<div class="clearfix"></div>

<!-- recuiter Nav -->
<nav class="navbar navbar-expand-lg navbar-light nav-recuitment">
    <div class="collapse navbar-collapse container nav-js" id="navbarNava">
        <ul class="navbar-nav">
            <li>
                <a href="{{route('js_dasboard')}}">Quản Lý Hồ Sơ</a>
            </li>
            <li class="nav-active">
                <a href="{{route('js_jobmana')}}">Việc Làm Của Tôi</a>
            </li>
            <li >
                <a href="{{route('js_jobnoti')}}">Thông Báo Việc Làm</a>
            </li>
            <li>
                <a href="{{route('js_rcsee')}}">Nhà tuyển dụng xem hồ sơ</a>
            </li>
            <li>
                <a href="{{url('/js/jobmana')}}">Bảo mật tài khoản</a>
            </li>
        </ul>
        <ul class="rec-nav-right">
            <li class="nav-item">
                <a class="nav-link" href="#">Tạo hồ sơ</a>
            </li>
        </ul>
    </div>
</nav>
<!--  recuiter Nav -->

<div class="container-fluid published-recuitment-wrapper">
    <div class="container published-recuitment-content">
        <div class="col-sm-12">
            <div class="card mb-3 nav-tab-job">
                <div class="card-header myjob-header">Công việc của tôi</div>
                <div class="tabs">
                    <button class="tablinks active" data-electronic="allproducts">Công việc đã lưu</button>
                    <button class="tablinks" data-electronic="Microcontrollers">Công việc đã ứng tuyển</button>
                </div>

                 <!-- Tab content -->
                <div id="allproducts" class="tabcontent active">
                    {{-- @for ($i = 0; $i < 5; $i++)
                    <div class="myjob">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="job-logo myjob-logo">
                                    <a href="#">
                                        <img src="{{ URL::asset('public/img/fpt-logo.png')}}" class="job-logo-ima" alt="job-logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="job-desc myjob-desc">
                                    <div class="job-title">
                                        <a href="#">[HCM] 02 Solution Architects–Up to $2000</a>
                                    </div>
                                    <div class="job-company myjob-inf">
                                        <a href="#">Fpt Software</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i> Đà Nẵng</a>
                                    </div>
                                    <div class="job-inf myjob-inf">
                                        <div class="job-main-skill">
                                            <i class="fa fa-code" aria-hidden="true"></i>  <a href="#"> Java</a>
                                        </div>
                                        <div class="job-salary">
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            <span class="salary-min">15<em class="salary-unit">triệu</em></span>
                                            <span class="salary-max">35 <em class="salary-unit">triệu</em></span>
                                        </div>
                                        <div class="job-deadline">
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>  Hạn nộp: <strong>31/12/2019</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="apply-btn">
                                    <a href="#" class="btn btn-success">Ứng tuyển ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endfor --}}
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-body" style="background-image: url({{ URL::asset('public/img/jobseeker/empty/myjob1.jpg')}})"></div>
                        </div>
                    </div>
                </div>
                <div id="Microcontrollers" class="tabcontent">
                    {{-- @for ($i = 0; $i < 5; $i++)
                    <div class="myjob">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="job-logo myjob-logo">
                                    <a href="#">
                                        <img src="{{URL::asset('public/img/alipay-logo.png')}}" class="job-logo-ima" alt="job-logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="job-desc myjob-desc">
                                    <div class="job-title">
                                        <a href="#">[HCM] 02 Solution Architects–Up to $2000</a>
                                    </div>
                                    <div class="job-company myjob-inf">
                                        <a href="#">Fpt Software</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i> Đà Nẵng</a>
                                    </div>
                                    <div class="job-inf myjob-inf">
                                        <div class="job-main-skill">
                                            <i class="fa fa-code" aria-hidden="true"></i>  <a href="#"> Java</a>
                                        </div>
                                        <div class="job-salary">
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            <span class="salary-min">15<em class="salary-unit">triệu</em></span>
                                            <span class="salary-max">35 <em class="salary-unit">triệu</em></span>
                                        </div>
                                        <div class="job-deadline">
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>  Hạn nộp: <strong>31/12/2019</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="apply-btn">
                                    <a href="#" class="btn btn-success">Ứng tuyển ngay</a>
                                    <a href="#" class="btn btn-danger">Xoá</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endfor --}}
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-body" style="background-image: url({{ URL::asset('public/img/jobseeker/empty/myjob2.jpg')}})"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



