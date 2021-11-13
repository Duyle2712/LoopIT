@extends('layout.jobseeker.main')
@section('content')

<!-- search section -->
<div class="container-fluid search-fluid">
    <div class="container">
      <div class="search-wrapper">

        <ul class="nav nav-tabs search-nav-tabs" id="myTab" role="tablist">
        <li class="nav-item search-nav-item">
          <a class="nav-link snav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tìm việc làm</a>
        </li>
        <li class="nav-item search-nav-item">
          <a class="nav-link snav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tìm công ty</a>
        </li>
      </ul>
      <div class="tab-content search-tab-content" id="myTabContent">
        <!-- content tab 1 -->
        <div class="tab-pane stab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <form class="bn-search-form">
            <div class="row">
              <div class="col-md-10 col-sm-12">
                <div class="row">
                  <div class="col-md-5">
                    <div class="input-group s-input-group">
                      <input type="text" class="form-control sinput" placeholder="Nhập kỹ năng, công việc,...">
                      <span><i class="fa fa-search"></i></span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <select id="computer-languages">
                      <option value="" selected hidden >Tất cả ngôn ngữ</option>
                      <option>Java</option>
                      <option>.NET</option>
                      <option>Javascript</option>
                      <option>Php</option>
                      <option>Python</option>
                      <option>QC QC</option>
                      <option>Business Analyst</option>
                      <option>Tester</option>
                      <option>Ruby</option>
                  </select>
                  <i class="fa fa-code sfa" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-3">
                    <select id="s-provinces">
                      <option value="" selected hidden >Tất cả địa điểm</option>
                      <option>Đà Nẵng</option>
                      <option>Hà Nội</option>
                      <option>Hồ Chí Minh</option>
                      <option>Buôn Ma Thuột</option>
                      <option>Quy Nhơn</option>
                      <option>Nha Trang</option>
                  </select>
                  <i class="fa fa-map-marker sfa" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-sm-12">
                <button type="submit" class="btn btn-primary btn-search col-sm-12">Tìm kiếm</button>
              </div>
            </div>
          </form>
        </div>
        <!-- (end) content tab 1 -->
        <!-- content tab 2 -->
        <div class="tab-pane stab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form class="bn-search-form">
            <div class="row">
              <div class="col-md-10 col-sm-12">
                    <div class="input-group s-input-group w-100">
                      <input type="text" class="form-control sinput" placeholder="Nhập kỹ năng, công việc,...">
                      <span><i class="fa fa-search"></i></span>
                    </div>
              </div>
              <div class="col-md-2 col-sm-12">
                <button type="submit" class="btn btn-primary btn-search col-sm-12">Tìm kiếm</button>
              </div>
            </div>
          </form>
        </div>
        <!-- (end) content tab 2 -->
      </div>

      </div>
    </div>
</div>
<!-- (end) search section -->

<div class="container-fluid">
    <div class="container search-wrapper">
      <div class="row">
        <div class="col-md-3 col-sm-12 col-12">
                      <a id="click_advance" class="btn btn-c-filter" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                  <i class="pr-2 fa fa-times" id="icon-s-sw" aria-hidden="true"></i>Filter &amp; Refind
                </a>

              <div class="collapse show" id="collapseExample" style="">
                <div class="card card-body bg-card-body-filter">
                  <div class="filter-bar">
                      <div class="filter-form">
                           <div class="filter-form-item">
                             <p>
                                <a id="clickc_advance" class="btnf btn-filter" data-toggle="collapse" href="#filter-topic" role="button" aria-expanded="false" aria-controls="collapseExample">
                                  Ngành nghề
                                  <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </a>
                              </p>
                              <div class="collapse show" id="filter-topic">
                                <div class="card o-card card-body">
                                  <div class="filter-panel">
                                      <div class="panel-content">
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Tất cả ngành nghề</a>
                                              <span class="filter-count">1,000</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Lập trình viên</a>
                                              <span class="filter-count">555</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Kiểm thử phần mềm</a>
                                              <span class="filter-count">233</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Thiết kế đồ họa</a>
                                              <span class="filter-count">100</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Tuyển dụng (HR)</a>
                                              <span class="filter-count">99</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Kĩ sư cầu nối</a>
                                              <span class="filter-count">95</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Kỹ sư mạng</a>
                                              <span class="filter-count">77</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Kỹ sư mạng</a>
                                              <span class="filter-count">50</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Kỹ sư mạng</a>
                                              <span class="filter-count">50</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Kỹ sư mạng</a>
                                              <span class="filter-count">50</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Kỹ sư mạng</a>
                                              <span class="filter-count">50</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Kỹ sư mạng</a>
                                              <span class="filter-count">50</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Kỹ sư mạng</a>
                                              <span class="filter-count">50</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Kỹ sư mạng</a>
                                              <span class="filter-count">50</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Kỹ sư mạng</a>
                                              <span class="filter-count">50</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Kỹ sư mạng</a>
                                              <span class="filter-count">50</span>
                                          </div>
                                      </div>
                                  </div>
                                 </div>
                              </div>

                              <p>
                                <a id="clickc2_advance" class="btnf btn-filter" data-toggle="collapse" href="#filter-price" role="button" aria-expanded="false" aria-controls="collapseExample">
                                  Mức Lương
                                  <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </a>
                              </p>
                              <div class="collapse show" id="filter-price">
                                <div class="card o-card card-body">
                                  <div class="filter-panel">
                                      <div class="panel-content">
                                          <div class="filter-topic filter-input-price">
                                              <form class="al-price-filter">
                                                  <span class="_fpblock">
                                                      <input type="number" class="if-price" id="" placeholder="50,000">
                                                  </span>
                                                  <span class="_fpblock _line">
                                                      <p>-</p>
                                                  </span>
                                                  <span class="_fpblock">
                                                      <input type="number" class="if-price" id="" placeholder="1,000,000">
                                                  </span>
                                                   <span class="_fpblock">
                                                       <button type="submit" class="sb-fprice"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                                   </span>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                                 </div>
                              </div>
                                  </div>
                                  <div class="filter-form-item">
                                      <p>
                                        <a id="clickc3_advance" class="btnf btn-filter" data-toggle="collapse" href="#filter-video-duration" role="button" aria-expanded="false" aria-controls="collapseExample">
                                          Đánh giá
                                          <i class="fa fa-angle-up" aria-hidden="true"></i>
                                        </a>
                                      </p>
                                      <div class="collapse show" id="filter-video-duration">
                                        <div class="card o-card card-body">
                                          <div class="filter-panel">
                                              <div class="panel-content">
                                                  <div class="filter-rating">
                                                      <a href="#">
                                                          <span class="rating-wrapper">
                                                              <i class="fa fa-star" aria-hidden="true"></i>
                                                              <i class="fa fa-star" aria-hidden="true"></i>
                                                              <i class="fa fa-star" aria-hidden="true"></i>
                                                              <i class="fa fa-star" aria-hidden="true"></i>
                                                              <i class="fa fa-star" aria-hidden="true"></i>
                                                          </span>
                                                          <span>(từ 5 sao)</span>
                                                      </a>
                                                  </div>
                                                  <div class="filter-rating">
                                                      <a href="#">
                                                          <span class="rating-wrapper">
                                                              <i class="fa fa-star" aria-hidden="true"></i>
                                                              <i class="fa fa-star" aria-hidden="true"></i>
                                                              <i class="fa fa-star" aria-hidden="true"></i>
                                                              <i class="fa fa-star" aria-hidden="true"></i>
                                                              <i class="fa fa-star-o" aria-hidden="true"></i>
                                                          </span>
                                                          <span>(từ 4 sao)</span>
                                                      </a>
                                                  </div>
                                                  <div class="filter-rating">
                                                      <a href="#">
                                                          <span class="rating-wrapper">
                                                              <i class="fa fa-star" aria-hidden="true"></i>
                                                              <i class="fa fa-star" aria-hidden="true"></i>
                                                              <i class="fa fa-star" aria-hidden="true"></i>
                                                              <i class="fa fa-star-o" aria-hidden="true"></i>
                                                              <i class="fa fa-star-o" aria-hidden="true"></i>
                                                          </span>
                                                          <span>(từ 3 sao)</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                         </div>
                                      </div>
                              <p>
                                <a id="clickc4_advance" class="btnf btn-filter" data-toggle="collapse" href="#filter-provider" role="button" aria-expanded="false" aria-controls="collapseExample">
                                  Cấp bậc
                                  <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </a>
                              </p>
                              <div class="collapse show" id="filter-provider">
                                <div class="card o-card card-body">
                                  <div class="filter-panel">
                                      <div class="panel-content">
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Tất cả cấp bậc</a>
                                              <span class="filter-count">2,450</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Thực tập sinh</a>
                                              <span class="filter-count">555</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Nhân viên</a>
                                              <span class="filter-count">233</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Trưởng nhóm</a>
                                              <span class="filter-count">100</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Trưởng phòng</a>
                                              <span class="filter-count">99</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Phó giám đốc</a>
                                              <span class="filter-count">95</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Giám đốc</a>
                                              <span class="filter-count">77</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Tổng giám đốc điều hành</a>
                                              <span class="filter-count">50</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Thư kí</a>
                                              <span class="filter-count">50</span>
                                          </div>
                                          <div class="filter-topic cotain-common-filter">
                                              <a href="#" class="filter-action">Khác</a>
                                              <span class="filter-count">50</span>
                                          </div>
                                      </div>
                                  </div>
                                 </div>
                              </div>
                                  </div>

                          </div>
                      </div> <!-- filter bar -->
                      <script type="text/javascript">
                          window.onload = function() {screenCollapse()};

                          let ele = document.getElementsByClassName("collapse");

                          function screenCollapse() {
                              if(window.innerWidth < 720) {
                                  $(".collapse").removeClass("show");
                                  $(".collapse").addClass("hide");
                              }
                          }
                      </script>
                </div>
              </div> <!-- ./ collapse -->
                  </div>
      <div class="col-md-9 col-sm-12 col-12">
        <h4 class="search-find">Tìm thấy 4 việc làm đang tuyển dụng</h4>
        <div class="job-board-wrap">
          <div class="job-group">
            <div class="job pagi">
                <div class="job-content">
                  <div class="job-logo">
                    <a href="#">
                      <img src="img/fpt-logo.png" class="job-logo-ima" alt="job-logo">
                    </a>
                  </div>

                  <div class="job-desc">
                    <div class="job-title">
                      <a href="#">[HCM] 02 Solution Architects–Up to $2000</a>
                    </div>
                    <div class="job-company">
                      <a href="#">Fpt Software</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
  Đà Nẵng</a>
                    </div>

                    <div class="job-inf">
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
                  <div class="wrap-btn-appl">
                    <a href="#" class="btn btn-appl">Apply Now</a>
                  </div>
                </div>
              </div>
              <div class="job pagi">
                <div class="job-content">
                  <div class="job-logo">
                    <a href="#">
                      <img src="img/alipay-logo.png" class="job-logo-ima" alt="job-logo">
                    </a>
                  </div>

                  <div class="job-desc">
                    <div class="job-title">
                      <a href="#">Fullstack .NET Developer (Angular/React)</a>
                    </div>
                    <div class="job-company">
                      <a href="#">Orient Software</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
  Hà Nội</a>
                    </div>

                    <div class="job-inf">
                      <div class="job-main-skill">
                        <i class="fa fa-code" aria-hidden="true"></i>  <a href="#"> .NET</a>
                      </div>
                      <div class="job-salary">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        <span class="salary-min">15<em class="salary-unit">triệu</em></span>
                        <span class="salary-max">35 <em class="salary-unit">triệu</em></span>
                      </div>
                      <div class="job-deadline">
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i>  Hạn nộp: <strong>31/02/2020</strong></span>
                      </div>
                    </div>
                  </div>
                  <div class="wrap-btn-appl">
                    <a href="#" class="btn btn-appl">Apply Now</a>
                  </div>
                </div>
              </div>
              <div class="job pagi">
                <div class="job-content">
                  <div class="job-logo">
                    <a href="#">
                      <img src="img/nvg-logo.png" class="job-logo-ima" alt="job-logo">
                    </a>
                  </div>

                  <div class="job-desc">
                    <div class="job-title">
                      <a href="#">Frontend Developer (JavaScript, ReactJS)</a>
                    </div>
                    <div class="job-company">
                      <a href="#">mgm technology</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
  Đà Nẵng</a>
                    </div>

                    <div class="job-inf">
                      <div class="job-main-skill">
                        <i class="fa fa-code" aria-hidden="true"></i>  <a href="#"> JavaScript, ReactJS</a>
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
                  <div class="wrap-btn-appl">
                    <a href="#" class="btn btn-appl">Apply Now</a>
                  </div>
                </div>
              </div>
              <div class="job pagi">
                <div class="job-content">
                  <div class="job-logo">
                    <a href="#">
                      <img src="img/luxoft-vietnam-logo.png" class="job-logo-ima" alt="job-logo">
                    </a>
                  </div>

                  <div class="job-desc">
                    <div class="job-title">
                      <a href="#">IVI System Test Engineer</a>
                    </div>
                    <div class="job-company">
                      <a href="#">NVG TECHNOLOGY</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
  Đà Nẵng</a>
                    </div>

                    <div class="job-inf">
                      <div class="job-main-skill">
                        <i class="fa fa-code" aria-hidden="true"></i>  <a href="#"> Javascript</a>
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
                  <div class="wrap-btn-appl">
                    <a href="#" class="btn btn-appl">Apply Now</a>
                  </div>
                </div>
              </div>
              <div class="job pagi">
                <div class="job-content">
                  <div class="job-logo">
                    <a href="#">
                      <img src="img/fpt-logo.png" class="job-logo-ima" alt="job-logo">
                    </a>
                  </div>

                  <div class="job-desc">
                    <div class="job-title">
                      <a href="#">[HCM] 02 Solution Architects–Up to $2000</a>
                    </div>
                    <div class="job-company">
                      <a href="#">Fpt Software</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
  Đà Nẵng</a>
                    </div>

                    <div class="job-inf">
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
                  <div class="wrap-btn-appl">
                    <a href="#" class="btn btn-appl">Apply Now</a>
                  </div>
                </div>
              </div>
              <div class="job pagi">
                <div class="job-content">
                  <div class="job-logo">
                    <a href="#">
                      <img src="img/fpt-logo.png" class="job-logo-ima" alt="job-logo">
                    </a>
                  </div>

                  <div class="job-desc">
                    <div class="job-title">
                      <a href="#">[HCM] 02 Solution Architects–Up to $2000</a>
                    </div>
                    <div class="job-company">
                      <a href="#">Fpt Software</a> | <a href="#" class="job-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
  Đà Nẵng</a>
                    </div>

                    <div class="job-inf">
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
                  <div class="wrap-btn-appl">
                    <a href="#" class="btn btn-appl">Apply Now</a>
                  </div>
                </div>
              </div>

  </div>
        </div>

      </div>
      </div>
    </div>
</div>

@endsection
