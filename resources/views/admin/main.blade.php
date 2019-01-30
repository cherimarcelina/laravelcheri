<!DOCTYPE html>
<html lang="en">

  <head >

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') Tokap Admin</title>
    <link rel="icon" type="image/png" href="{{url('favicon3.png')}}">

    <!-- Bootstrap core CSS-->
    <link href="{{url('theme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{url('theme/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{url('theme/css/sb-admin.css')}}" rel="stylesheet">
    @stack('css')

  </head>

  <body id="page-top" style="background-color:pink;">

    @include('admin.navbar')

    <div id="wrapper">

      <!-- Sidebar -->
      @include('admin.sidebar')

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Page Content -->
          @yield('content')

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
       @include('admin.footer')

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal-->
    @stack('modal')

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('theme/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('theme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('theme/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('theme/js/sb-admin.min.js')}}"></script>
    <script type="text/javascript" src="{{url('theme/js/navbar-nav.js"></script>
    @stack('js')

  </body>

</html>
