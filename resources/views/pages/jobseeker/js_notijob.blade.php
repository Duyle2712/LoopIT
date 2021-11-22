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
            <li>
                <a href="{{route('js_jobmana')}}">Việc Làm Của Tôi</a>
            </li>
            <li class="nav-active">
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
            <div class="card-deck mb-3">
                <div class="card">
                    <div class="card-header notijob-header">
                        <div class="notijob-title">Thông báo việc làm</div>
                        <div>
                            <a href="#" class="create-noti fa fa-plus-circle" data-toggle="modal" data-target="#createNoti">
                                Tạo thông báo việc làm
                            </a>
                        </div>
                    </div>
                    <div class="card-body" style="background-image: url({{ URL::asset('public/img/jobseeker/empty/notijob.jpg')}})"></div>
                </div>
            </div>

            {{-- <div class="card mb-3">
                <div class="card-header notijob-header">
                    <div class="notijob-title">Thông báo việc làm</div>
                    <div>
                        <a href="#" class="create-noti fa fa-plus-circle" data-toggle="modal" data-target="#exampleModalCenter">
                            Tạo thông báo việc làm
                        </a>
                    </div>
                </div>
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
                                <a href="#" class="btn btn-success">Ứng tuyển ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                @endfor
            </div> --}}
        </div>
    </div>
</div>

{{-- Modal tạo thông báo việc làm --}}
<div class="modal fade" id="createNoti" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">TẠO THÔNG BÁO VIỆC LÀM</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="col-sm-12">
                    <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên việc làm</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Cấp bậc</label>
                            <select class="form-control">
                                <option>Vui lòng chọn cấp bậc mong muốn</option>
                                <option>Thực tập sinh/sinh viên</option>
                                <option>Mới tốt nghiệp</option>
                                <option>Nhân viên</option>
                                <option>Trưởng phòng</option>
                                <option>Giám đốc và các cấp cao hơn</option>
                            </select>
                        </div>
                        <div class="form-group" >
                            <label>Khu vực</label>
                            <select class="form-control" name="calc_shipping_provinces" required="">
                                <option value="">Tỉnh / Thành phố</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Ngành nghề</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mức lương</label>
                            <input type="number" class="form-control">
                        </div>
                    </div>
                    </div>
                </div>
               <div class="btnForm-cretNoti">
                    <button type="submit" class="btn btn-success">Lưu</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
               </div>
              </form>
        </div>
      </div>
    </div>
</div>

@endsection
