<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>


        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="/css/theme.css">
        <link rel="stylesheet" href="/theme/ui/icons.css">

        <!-- plugins:css -->
        <link rel="stylesheet" href="theme/vendors/feather/feather.css">
        <link rel="stylesheet" href="theme/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="theme/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="theme/vendors/typicons/typicons.css">
        <link rel="stylesheet" href="theme/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="theme/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="theme/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="theme/js/select.dataTables.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="theme/css/vertical-layout-light/style.css">
        <!-- endinject -->

        <link href="/theme/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet" />
        <link href="/theme/fontawesome-free-5.15.4-web/js/all.js" rel="stylesheet" /> 
        <link href="/theme/fontawesome-free-5.15.4-web/less/fontawesome.less" rel="stylesheet" />    
        <link href="/theme/fontawesome-free-5.15.4-web/scss/fontawesome.scss" rel="stylesheet" /> 
        <link href="/theme/fontawesome-free-5.15.4-web/sprites/solid.svg" rel="stylesheet" /> 

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!--<script src="/assets/plugins/canvas/html2canvas.js" defer></script>
        <script src="/assets/plugins/canvas/html2canvas.min.js" defer></script>-->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
    </head>
    <body id="app-body" class="font-sans antialiased g-sidenav-show ">
        @inertia


    <!--<script src="https://www.paypal.com/sdk/js?client-id=AUkQg30QDB-YINKU1DaZpVKQrye-fFPOkVldJUAlAiRrH2E77d0uwCxHi2w42Mi6Mrr4cOHWhBY_EBWU&components=buttons"></script>-->

  <!-- plugins:js -->
  <script src="theme/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="theme/vendors/chart.js/Chart.min.js"></script>
  <script src="theme/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="theme/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="theme/js/off-canvas.js"></script>
  <script src="theme/js/hoverable-collapse.js"></script>
  <script src="theme/js/template.js"></script>
  <script src="theme/js/settings.js"></script>
  <script src="theme/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="theme/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="theme/js/dashboard.js"></script>
  <script src="theme/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
    </body>
</html>
