<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">


        <!-- Nucleo Icons -->
        <link href="/theme/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="/theme/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="/theme/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="/theme/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased g-sidenav-show  bg-gray-100">
        @inertia

     <!--   Core JS Files   -->
     <script src="/theme/assets/js/core/popper.min.js" defer></script>
     <script src="/theme/assets/js/core/bootstrap.min.js" defer></script>
     <script src="/theme/assets/js/plugins/perfect-scrollbar.min.js" defer></script>
     <script src="/theme/assets/js/plugins/smooth-scrollbar.min.js" defer></script>
     <script src="/theme/assets/js/plugins/chartjs.min.js" defer></script>
     <!-- Github buttons -->
     <script async defer src="https://buttons.github.io/buttons.js"></script>
     <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
     <script src="/theme/assets/js/soft-ui-dashboard.min.js?v=1.0.3" defer></script>
     <script>
          var win = navigator.platform.indexOf('Win') > -1;
          if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
              damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
          }
     </script>
    </body>
</html>
