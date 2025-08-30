<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
@include('admin.layouts.head')
</head>

<body>

  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
<header class="topbar" data-navbarbg="skin5">
@include('admin.layouts.header')
</header>

    <aside class="left-sidebar" data-sidebarbg="skin5">
        @include('admin.layouts.aside')
      <!-- End Sidebar scroll-->
    </aside>

    <div class="page-wrapper">
      <!-- Bread crumb -->
      <div class="page-breadcrumb">
        @yield('breadcrumb')
      </div>
      <!-- End Bread crumb -->

      <!-- Container fluid -->
      <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
          <div class="col-12">
            @yield('content')
          </div>
        </div>
        <!-- End Page Content -->

      </div>
      <!-- End Container fluid -->

      <!-- footer -->
      <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by
        <a href="https://www.wrappixel.com">WrapPixel</a>.
      </footer>
      <!-- End footer -->

    </div>
    <!-- End Page wrapper -->
  </div>
  <!-- End Wrapper -->

  <!-- All Jquery -->
   @include('admin.layouts.scripts')

</body>

</html>