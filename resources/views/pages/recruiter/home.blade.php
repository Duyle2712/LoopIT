@extends('layout.recruiter.main')
@section('recruiter_content')

<!-- widget recuitment  -->
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ads-above">
          <a href="#">
            <img src="{{ URL::asset('public/img/hna2.jpg') }}">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- (end) widget recuitment  -->

<!-- published recuitment -->
<div class="container-fluid published-recuitment-wrapper">
  <div class="container published-recuitment-content">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-12 recuitment-inner ">
          <div class="row  mt-2 sizeh1" >
            <h2 class="font-italic font-weight-light text-white page-header p-1 pl-2 img-header" >DASHBOARD </h2>
          </div>

          <div class="row card mb-3 mt-2">
            <div class="card-header bg-success text-light">THỐNG KÊ TUYỂN DỤNG</div>
            <div class="card-body row">

              <div class="col-md-6">
                <div class="card border-warning ml-4 border-left1" style="max-width: 25rem; width:18rem;">
                  <div class="card-header bg-warning text-light"><i class="fa fa-volume-down"></i> TIN TUYỂN DỤNG ĐANG CÓ</div>
                  <div class="card-body" >
                    <p class="card-text">
                      0 - TIN TUYỂN DỤNG
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card  ml-4 border-left2 border-primary" style="max-width: 25rem; width:18rem;">
                  <div class="card-header bg-primary text-light"><i class="fa fa-id-card"></i> TIN TUYỂN DỤNG ĐANG HIỂN THỊ</div>
                  <div class="card-body">
                    <p class="card-text">
                      0 - TIN ĐANG HIỂN THỊ
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card  ml-4 mt-3 border-left3 border-secondary" style="max-width: 25rem; width:18rem;">
                  <div class="card-header bg-secondary text-light"><i class="fa fa-paper-plane"></i> CV ĐÃ TIẾP NHẬN</div>
                  <div class="card-body" >
                    <p class="card-text">
                      0 - CV ĐÃ TIẾP NHẬN
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card  ml-4 mt-3 border-info" style="max-width: 25rem; width:18rem;">
                  <div class="card-header bg-info text-light"><i class="fa fa-archive"></i> CV ỨNG TUYỂN MỚI</div>
                  <div class="card-body">
                    <p class="card-text">
                      0 - CV ỨNG TUYỂN MỚI
                    </p>
                  </div>
                </div>
              </div>

            </div>

          </div>

          <div class="row card mb-3 ">
            <div class="card-header bg-success text-light">DỊCH VỤ SẮP HẾT HẠN</div>
              <div class="card-body">

                <table class="table table-bordered" id="tableDichVuSapHetHan">
                  <thead>
                      <tr>
                          <th>STT</th>
                          <th>Tên Dịch Vụ</th>
                          <th>Ngày Hết Hạn</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>System Architect</td>
                          <td>15/11/2021</td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>System Architect</td>
                          <td>15/11/2021</td>
                      </tr>
                  </tbody>
                </table>
                <a class="btn btn-outline-success float-right mt-2" href="#">Quản Lý Dịch Vụ</a>
              </div>
          </div>

      </div>
      <!-- Side bar -->
        @include('layout.recruiter.sidebar')
        <!-- End Side bar -->
    </div>
  </div>
</div>

<!-- (end) published recuitment -->

<div class="clearfix"></div>

<!-- job support -->
<div class="container-fluid job-support-wrapper">
 <div class="container-fluid job-support-wrap">
  <div class="container job-support">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-12">
        <ul class="spp-list">
          <li>
            <span><i class="fa fa-question-circle pr-2 icsp"></i>Hỗ trợ nhà tuyển dụng:</span>
          </li>
          <li>
            <span><i class="fa fa-phone pr-2 icsp"></i>0123.456.789</span>
          </li>
        </ul>
      </div>
      <div class="col-md-6 col-sm-12 col-12">
        <div class="newsletter">
            <span class="txt6">Đăng ký nhận bản tin việc làm</span>
            <div class="input-group frm1">
              <input type="text" placeholder="Nhập email của bạn" class="newsletter-email form-control">
              <a href="#" class="input-group-addon"><i class="fa fa-lg fa-envelope-o colorb"></i></a>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- (end) job support -->

@endsection




