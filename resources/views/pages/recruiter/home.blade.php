@extends('layout.recruiter.main')
@section('recruiter_content')

<!-- widget recuitment  -->
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ads-above">
          <a href="#">
            <img src="{{ URL::asset('resources/img/hna2.jpg') }}">
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
          <div class="row recuitment-form bg-primary " >
            <p class="font-italic font-weight-light" style="font-size:30px; color:white; ">DASHBOARD</p>           
          </div>
          <div class="row recuitment-form">
            <div class="card text-white  mb-3 ml-4" style="max-width: 30rem; width:20rem;">
              <div class="card-header bg-secondary"><i class="fa fa-volume-down"></i> TIN TUYỂN DỤNG ĐANG CÓ</div>
              <div class="card-body" >
                <h5 class="card-title">0 - TIN TUYỂN DỤNG</h5>
                <p class="card-text">

                </p>
              </div>
            </div>

            <div class="card text-white  mb-3 ml-5" style="max-width: 30rem; width:20rem;">
              <div class="card-header bg-success"><i class="fa fa-id-card"></i> TIN TUYỂN DỤNG ĐANG HIỂN THỊ</div>
              <div class="card-body">
                <h5 class="card-title">0 - TIN ĐANG HIỂN THỊ</h5>
                <p class="card-text">
                    asd
                </p>
              </div>
            </div>

            <div class="card text-white  mb-3 ml-4" style="max-width: 30rem; width:20rem;">
              <div class="card-header bg-warning"><i class="fa fa-paper-plane"></i> CV ĐÃ TIẾP NHẬN</div>
              <div class="card-body" >
                <h5 class="card-title">0 - CV ĐÃ TIẾP NHẬN</h5>
                <p class="card-text">

                </p>
              </div>
            </div>

            <div class="card text-white  mb-3 ml-5" style="max-width: 30rem; width:20rem;">
              <div class="card-header bg-info"><i class="fa fa-archive"></i> CV ỨNG TUYỂN MỚI</div>
              <div class="card-body">
                <h5 class="card-title">0 - CV ỨNG TUYỂN MỚI</h5>
                <p class="card-text">

                </p>
              </div>
            </div>
            
                       
          </div>
          
          <div class="row card text-white  mb-3  recuitment-form">
            <h4></h4>
            <div class="card-header bg-primary">DỊCH VỤ SẮP HẾT HẠN</div>
              <div class="card-body">
                <h5 class="card-title">
                  HIỆN KHÔNG CÓ DỊCH VỤ NÀO SẮP HẾT HẠN
                  <table>
                    <tr>
                      <th>aaa</th>
                      <th>aaa</th>
                      <th>aaa</th>
                    </tr>
                    <tr>
                      <td>BBB</td>
                      <td>BBB</td>
                      <td>BBB</td>
                    </tr>   
                  </table>
                </h5>
                
                <p class="card-text">
                  <a href="" class="btn btn-outline-primary">QUẢN LÝ DỊCH VỤ</a>
                </p>
              </div>
          </div>
          

            
           
        

      </div>
      <!-- Side bar -->
      <div class="col-md-4 col-sm-12 col-12">
        <div class="recuiter-info">
          <div class="recuiter-info-avt">
            <img src="{{ URL::asset('resources/img/icon_avatar.jpg') }}">
          </div>
          <div class="clearfix list-rec">
            <h4>NESTLE Inc.</h4>
            <ul>
              <li><a href="#">Việc làm đang đăng <strong>(0)</strong></a></li>
              <li><a href="#">Follower <strong>(450)</strong></a></li>
            </ul>
          </div>
        </div>


        <div class="block-sidebar" style="margin-bottom: 20px;">
   <header>
      <h3 class="title-sidebar font-roboto bg-primary">
         Trung tâm quản lý
      </h3>
   </header>
   <div class="content-sidebar menu-trung-tam-ql menu-ql-employer">
      <h3 class="menu-ql-ntv">
         Quản lý tài khoản
      </h3>
      <ul>
         <li>
            <a href="#">
            Tài khoản
            </a>
         </li>
         <li>
            <a href="#">
            Giấy phép kinh doanh
            </a>
         </li>
      </ul>
      <h3 class="menu-ql-ntv">
         Quản lý dịch vụ
      </h3>
      <ul>
         <li>
            <a href="#">
            Lịch sử dịch vụ
            </a>
         </li>
         <li>
            <a href="#" target="_blank">
            Báo giá
            </a>
         </li>
      </ul>
      <h3 class="menu-ql-ntv">
         Quản lý tin tuyển dụng
      </h3>
      <ul>
         <li>
            <a href="#">
            Đăng tin tuyển dụng
            </a>
         </li>
         <li>
            <a href="#">
            Danh sách tin tuyển dụng
            </a>
         </li>
      </ul>
      <h3 class="menu-ql-ntv">
         Quản lý ứng viên
      </h3>
      <ul>
         <li>
            <a href="#">
            Tìm kiếm hồ sơ
            </a>
         </li>
         <li>
            <a href="#">
            Hồ sơ đã lưu
            </a>
         </li>
         <li>
            <a href="#">
            Hồ sơ đã ứng tuyển
            </a>
         </li>
         <li>
            <a href="#" title="Thông báo hồ sơ phù hợp">
            Thông báo hồ sơ phù hợp
            </a>
         </li>
      </ul>
      <h3 class="menu-ql-ntv">
         Hỗ trợ và thông báo
      </h3>
      <ul>
         <li>
            <a href="#" title="Gửi yêu cầu đến ban quản trị">
            Gửi yêu cầu đến ban quản trị
            </a>
         </li>
         <li>
            <a href="#" title="Ban quản trị thông báo">
            Ban quản trị thông báo
            </a>
         </li>
         <li>
            <a href="#" title="Hướng dẫn thao tác">
            Hướng dẫn thao tác
            </a>
         </li>
         <li>
            <a href="#" target="_blank">
            <span>Thông tin thanh toán</span>
            </a>
         </li>
         <li>
            <a target="_blank" href="#">
            <span>Cổng tra cứu lương</span>
            </a>
         </li>
         <li>
            <a target="_blank" href="#">
            <span> Cẩm nang tuyển dụng</span>
            </a>
         </li>
      </ul>
      <ul>
         <li class="logout">
            <a href="#" title="Đăng xuất">
            Đăng xuất
            </a>
         </li>
      </ul>
   </div>
</div>
      </div>
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




    