@extends('layouts.app', ['page' => 'components', 'title' => 'components'])
@section('components', 'active')

@section('main-content')
  <div>

    @include('pages.admin.components.partial-sections.button')

  </div>
@endsection
