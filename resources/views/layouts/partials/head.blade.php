<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

{{-- bootstrap 5.2.3 --}}
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.css') }}">

{{-- font-awesome 6.4.0 --}}
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome/css/all.css') }}">

{{-- sbadmin --}}
<link href="{{ asset('assets/css/sbadmin/sbadmin.css') }}" rel="stylesheet" />

{{-- datatables --}}
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

{{-- custom css --}}
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<!-- Scripts -->
{{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
{{-- @vite([]) --}}
