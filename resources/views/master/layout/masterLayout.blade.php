<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" type="image/png" href="/assets/images/logos/seodashlogo.png" />
    <link rel="stylesheet" href="/assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            @include("master.layout.sidebar")
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header starts -->
            @include('master.layout.header')
            <!--  Header End -->
            <div class="container-fluid">
            {{ $slot }}
            </div>
        </div>
        <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src="/assets/libs/simplebar/dist/simplebar.js"></script>
        <script src="/assets/js/sidebarmenu.js"></script>
        <script src="/assets/js/app.min.js"></script>
        <script src="/assets/js/dashboard.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
