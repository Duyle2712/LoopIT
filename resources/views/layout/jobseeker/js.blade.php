<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('resources/js/readmore.js') }}"></script>
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
<script src="{{ URL::asset('resources/js/jquery-3.4.1.slim.min.js') }}"></script>
<script src="{{ URL::asset('resources/js/popper.min.js') }}"></script>
<script src="{{ URL::asset('resources/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('resources/js/select2.min.js') }}"></script>
<script src="{{ URL::asset('resources/js/jobdata.js') }}"></script>
<!-- <script type="text/javascript" src="js/pagination.js"></script> -->
<!-- Owl Stylesheets Javascript -->
<script src="{{ URL::asset('resources/js/owlcarousel/owl.carousel.js') }}"></script>
<!-- Read More Plugin -->
