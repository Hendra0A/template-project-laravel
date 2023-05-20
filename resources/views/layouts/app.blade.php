<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('layouts.partials.head')
</head>

<body>

  <main class="py-4">
    @yield('content')
  </main>

  @include('layouts.partials.footer')

  @include('layouts.partials.script')
</body>

</html>
