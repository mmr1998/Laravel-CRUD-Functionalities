<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('public/check/img/mdb-favicon.ico') }} " type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('public/check/css/mdb.min.css') }} " />
    <!-- Custom styles -->
    <style>
      body{
        background-color: #f6e0a2;
      }
      .icon-color {
        background-color:#94536d !important;
      }
    </style>
  </head>
  <body>
    <!-- Start your project here-->
    @include('layouts.navbar')
      @yield('contents')
    @include('layouts.footer')
    <!-- End your project here-->
  </body>

  <!-- MDB -->
  <script type="text/javascript" src="{{ asset('public/check/js/mdb.min.js') }} "></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</html>
