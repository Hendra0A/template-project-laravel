<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('layouts.partials.head')
</head>

<body id="page-top">

  <div id="wrapper">

    @if ($page !== 'login')
      @include('layouts.partials.sidebar')
    @endif

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          @if ($page !== 'login')
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
              <h1 class="h3 mb-0 text-gray-800 text-capitalize">{{ $title ?? 'Vinz' }}</h1>
            </div>
          @endif
          <!-- content -->
          <div class="main-content">

            <section>
              <div class="card shadow-lg border-0 p-3">
                @yield('main-content')
              </div>
            </section>

          </div>
          <!-- end content -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @if ($page !== 'login')
        @include('layouts.partials.footer')
      @endif
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  @include('layouts.partials.script')
</body>

</html>
