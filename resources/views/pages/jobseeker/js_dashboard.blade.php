@extends('layout.jobseeker.main')
@section('content')

<div class="clearfix"></div>

<!-- recuiter Nav -->
<nav class="navbar navbar-expand-lg navbar-light nav-recuitment">
    <div class="collapse navbar-collapse container nav-js" id="navbarNava">
        <ul class="navbar-nav">
            <li class="nav-active">
                <a href="{{route('js_dasboard')}}">Quản Lý Hồ Sơ</a>
            </li>
            <li>
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
        <div class="row">
            <div class="col-md-7 col-sm-12 col-12">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                              <div class="avatar-upload">
                                  <div class="avatar-edit">
                                      <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                      <label for="imageUpload"></label>
                                  </div>
                                  <div class="avatar-preview">
                                      <div id="imagePreview" style="background-image: url({{ URL::asset('public/img/jobseeker/AvtPreview.jpg')}})">
                                      </div>
                                  </div>
                              </div>
                        </div>
                        <div class="col-md-9">
                          <div class="card-body profile-card">
                            <h3 class="card-title">Usada Pekora</h3>
                            <hr>
                            <p class="card-content">
                                <h5 class="sub-text">Chức danh: </h5>
                                <p class="sub-text">Người sáng lập, CEO, kỹ sư trưởng</p>
                            </p>
                            <p class="card-content">
                                <h5 class="sub-text">Kinh nghiệm: </h5>
                                <p class="sub-text">3 năm</p>
                            </p>
                            <p class="card-content">
                                <h5 class="sub-text">Công ty gần đây nhất: </h5>
                                <p class="sub-text">Usada Kensetsu</p>
                            </p>
                            <p class="card-content">
                                <h5 class="sub-text">Bằng cắp cao nhất: </h5>
                                <p class="sub-text">Nousagi Approved</p>
                            </p>
                            <hr>
                            <div class="card-content">
                                <h5>Trạng thái hoàn thành hồ sơ</h5>
                                <p style="height: 10px"></p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p style="height: 10px"></p>
                                <button type="button" class="btn btn-outline-success">Cập nhật hồ sơ</button>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 col-12">
                <div class="card stats-card-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img class="stats-icon" src="{{ URL::asset('public/img/jobseeker/icon/recruitment.png')}}">
                            </div>
                            <div class="col-6">
                                <p class="stats-title"> Nhà tuyển dụng xem hồ sơ </p>
                            </div>
                            <div class="col-3">
                                <p class="stats-number">15</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card stats-card-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img class="stats-icon" src="{{ URL::asset('public/img/jobseeker/icon/notification.png')}}">
                            </div>
                            <div class="col-6">
                                <p class="stats-title"> Thông báo công việc  </p>
                            </div>
                            <div class="col-3">
                                <p class="stats-number">23</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card stats-card-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img class="stats-icon" src="{{ URL::asset('public/img/jobseeker/icon/work.png')}}">
                            </div>
                            <div class="col-6">
                                <p class="stats-title"> Công việc của tôi </p>
                            </div>
                            <div class="col-3">
                                <p class="stats-number">12</p>
                            </div>
                        </div>
                        <hr class="stats">
                        <div class="row">
                            <div class="col stats-small">
                                Đã gửi: 5
                            </div>
                            <div class="col stats-small">
                                Đã lưu: 6
                            </div>
                            <div class="col stats-small">
                                Đã huỷ: 1
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-header myjob-header">Công việc bạn sẽ yêu thích</div>
                    @for ($i = 0; $i < 5; $i++)
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
                                    <a href="#" class="btn">Ứng tuyển ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
