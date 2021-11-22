<!-- footer -->
<div class="container-fluid footer-wrap  clear-left clear-right">
  <div class="container footer">
    <div class="row">
      <div class="col-md-4 col-sm-8 col-12">
        <h2 class="footer-heading">
          <span>About</span>
        </h2>
        <p class="footer-content">
          Discover the best way to find houses, condominiums, apartments and HDBs for sale and rent in Singapore with JobsOnline, Singapore's Fastest Growing Jobs Portal.
        </p>
        <ul class="footer-contact">
          <li>
            <a href="#">
              <i class="fa fa-phone fticn"></i> +123 456 7890
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-envelope fticn"></i>
              hello@123.com
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-map-marker fticn"></i>
              33 Xô Viết Nghệ Tĩnh, Đà Nẵng
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-4 col-12">
        <h2 class="footer-heading">
          <span>Ngôn ngữ nổi bật</span>
        </h2>
        <ul class="footer-list">
          <li><a href="#">Javascript</a></li>
          <li><a href="#">Java</a></li>
          <li><a href="#">Frontend</a></li>
          <li><a href="#">SQL Server</a></li>
          <li><a href="#">.NET</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-6 col-12">
        <h2 class="footer-heading">
          <span>Tất cả ngành nghề</span>
        </h2>
        <ul class="footer-list">
          <li><a href="#">Lập trình viên</a></li>
          <li><a href="#">Kiểm thử phần mềm</a></li>
          <li><a href="#">Kỹ sư cầu nối</a></li>
          <li><a href="#">Quản lý dự án</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-6 col-12">
        <h2 class="footer-heading">
          <span>Tất cả hình thức</span>
        </h2>
        <ul class="footer-list">
          <li><a href="#">Nhân viên chính thức</a></li>
          <li><a href="#">Nhân viên bán thời gian</a></li>
          <li><a href="#">Freelancer</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-12 col-12">
        <h2 class="footer-heading">
          <span>Tất cả tỉnh thành</span>
        </h2>
        <ul class="footer-list">
          <li><a href="#">Hồ Chính Minh</a></li>
          <li><a href="#">Hà Nội</a></li>
          <li><a href="#">Đà Nẵng</a></li>
          <li><a href="#">Buôn Ma Thuột</a></li>
        </ul>
      </div>


    </div>
  </div>
</div>

<footer class="container-fluid copyright-wrap">
  <div class="container copyright">
    <p class="copyright-content">
      Copyright © 2021 <a href="#"> Loop<b>IT</b></a>. All Right Reserved.
    </p>
  </div>
</footer>


<!-- (end) footer -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ URL::asset('public/js/jquery-3.4.1.slim.min.js') }}"></script>
    <script src="{{ URL::asset('public/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('public/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('public/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('public/js/jobdata.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('public/js/main.js') }}"></script>
    <!-- Owl Stylesheets Javascript -->
    <script src="{{ URL::asset('public/js/owlcarousel/owl.carousel.js') }}"></script>
    <!-- Read More Plugin -->


  <!-- Page level plugins -->
  <script src="{{ URL::asset('public/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('public/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <script>
    $(document).ready(function() {
      $('#tableDichVuSapHetHan').DataTable( {

        // "language": {
        //   "paginate": {
        //     "previous": '<i class="fa fa-chevron-left"></i>',
        //     "next": '<i class="fa fa-chevron-right"></i>'
        //   }
        // },
        "oLanguage": {
          // "sLengthMenu": "Display _MENU_ records per page",
          // "sZeroRecords": "Nothing found - sorry",
          // "sInfo": "Showing _START_ to _END_ of _TOTAL_ records",
          // "sInfoEmpty": "Showing 0 to 0 of 0 records",
          // "sInfoFiltered": "(filtered from _MAX_ total records)"
        }
      });
    });
  </script>




</body>
</html>
