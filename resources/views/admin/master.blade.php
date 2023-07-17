<!doctype html>
<html lang="en" class="minimal-theme">
<!-- Mirrored from codervent.com/skodash/demo/tabular-menu/ltr/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 06:13:32 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('adminAsset') }}/assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="{{ asset('adminAsset') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="{{ asset('adminAsset') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{ asset('adminAsset') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('adminAsset') }}/assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="{{ asset('adminAsset') }}/assets/css/style.css" rel="stylesheet" />
  <link href="{{ asset('adminAsset') }}/assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- loader-->
  <link href="{{ asset('adminAsset') }}/assets/css/pace.min.css" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="{{ asset('adminAsset') }}/assets/css/dark-theme.css" rel="stylesheet" />
  <link href="{{ asset('adminAsset') }}/assets/css/light-theme.css" rel="stylesheet" />
  <link href="{{ asset('adminAsset') }}/assets/css/semi-dark.css" rel="stylesheet" />
  <link href="{{ asset('adminAsset') }}/assets/css/header-colors.css" rel="stylesheet" />

  <title class="text-capitalize"> {{auth()->user()->name}} Dashboard</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
    @include('admin.include.header')
    <!--end top header-->

    <!--start sidebar -->
    @include('admin.include.sidebar')
    <!--start sidebar -->

    <!--start content-->
    <main class="page-content">

      @yield('content')

    </main>
    <!--end page main-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('adminAsset') }}/assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="{{ asset('adminAsset') }}/assets/js/jquery.min.js"></script>
  <script src="{{ asset('adminAsset') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="{{ asset('adminAsset') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="{{ asset('adminAsset') }}/assets/js/pace.min.js"></script>
  <script src="{{ asset('adminAsset') }}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <!--app-->
  <script src="{{ asset('adminAsset') }}/assets/js/app.js"></script>
  <script src="{{ asset('adminAsset') }}/assets/js/index3.js"></script>

</body>

</html>