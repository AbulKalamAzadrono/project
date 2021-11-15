<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    @include('layouts/backend/partials/styles')
    @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



    <!-- Navbar -->
   @include('layouts/backend/partials/navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layouts/backend/partials/sidebar')

    @yield('content')
    <!-- /.content-wrapper -->
   @include('layouts/backend/partials/footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('layouts/backend/partials/scripts')
@stack('js')
</body>
</html>
