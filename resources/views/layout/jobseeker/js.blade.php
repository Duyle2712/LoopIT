<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('public/js/readmore.js') }}"></script>
<script type="text/javascript">
    $('.catelog-list').readmore({
    speed: 75,
    maxHeight: 150,
    moreLink: '<a href="#">Xem thêm<i class="fa fa-angle-down pl-2"></i></a>',
    lessLink: '<a href="#">Rút gọn<i class="fa fa-angle-up pl-2"></i></a>'
    });
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ URL::asset('public/js/jquery-3.4.1.slim.min.js') }}"></script>
<script src="{{ URL::asset('public/js/popper.min.js') }}"></script>
<script src="{{ URL::asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('public/js/select2.min.js') }}"></script>
<script src="{{ URL::asset('public/js/jobdata.js') }}"></script>
<!-- <script type="text/javascript" src="js/pagination.js"></script> -->
<!-- Owl Stylesheets Javascript -->
<script src="{{ URL::asset('public/js/owlcarousel/owl.carousel.js') }}"></script>
<!-- Read More Plugin -->

<!-- Script Nav tab Job manage -->
<script type="text/javascript">
    var tabLinks = document.querySelectorAll(".tablinks");
    var tabContent =document.querySelectorAll(".tabcontent");

    tabLinks.forEach(function(el) {
    el.addEventListener("click", openTabs);
    });

    function openTabs(el) {
    var btn = el.currentTarget; // lắng nghe sự kiện và hiển thị các element
    var electronic = btn.dataset.electronic; // lấy giá trị trong data-electronic

    tabContent.forEach(function(el) {
        el.classList.remove("active");
    }); //lặp qua các tab content để remove class active

    tabLinks.forEach(function(el) {
        el.classList.remove("active");
    }); //lặp qua các tab links để remove class active

    document.querySelector("#" + electronic).classList.add("active");
    // trả về phần tử đầu tiên có id="" được add class active

    btn.classList.add("active");
    // các button mà chúng ta click vào sẽ được add class active
    }
</script>



