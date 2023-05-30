<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion position-relative" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center mt-4 mb-4" href="#!">
    <h1 style="color: #eddbdc; font-style: normal; font-weight: 800; font-size: 35px;">
      Vinz</h1>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0" />


  <li class="nav-item @yield('dashboard')">
    <a class="nav-link" href="{{ route('admin.dashboard') }}">
      <i class="fa-solid fa-gauge"></i>
      <span class="text-capitalize">dashboard</span></a>
  </li>

  <li class="nav-item @yield('components')">
    <a class="nav-link" href="{{ route('admin.components') }}">
      <i class="fa-solid fa-toolbox"></i>
      <span class="text-capitalize">components</span></a>
  </li>

  <li class="nav-item @yield('products')">
    <a class="nav-link" href="{{ route('admin.products') }}">
      <i class="fa-solid fa-cart-shopping"></i>
      <span class="text-capitalize">products</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" />

  <div class="mx-3 mt-3">
    <a class="btn btn-light w-100 font-weight-bold" href="{{ route('logout') }}"
      onclick="event.preventDefault();document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
  </div>

  <hr class="sidebar-divider d-none d-md-block" />
  <hr class="sidebar-divider d-none d-md-block" />

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
