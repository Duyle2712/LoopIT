<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin LoopIT</title>

    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset('public/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset('public/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.3.js" type="text/javascript"></script>

    @if (Session::get('error') != null)
    <script type="text/javascript">
     $(window).load(function(){
         $('#MyModal').modal('show');
      });
    </script>
    @endif  


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

<!-- Modal IsLoginAdmin -->
<div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-warning">
                <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"><strong>{{Session::get('error')}}</strong></div>
            
        </div>
    </div>
</div>
