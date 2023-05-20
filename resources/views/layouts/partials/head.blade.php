<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

{{-- custom css --}}
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

{{-- bootstrap 5.2.3 --}}
{{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.css') }}"> --}}

{{-- font-awesome 6.4.0 --}}
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome/css/all.css') }}">

<!-- Scripts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
