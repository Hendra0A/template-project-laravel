{{-- custom js --}}
<script type="module" src="{{ asset('assets/js/app.js') }}"></script>

{{-- jquery --}}
<script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>

{{-- bootstrap 5.2.3 --}}
{{-- <script src="{{ asset('assets/js/bootstrap/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.js') }}"></script> --}}

@stack('scripts')
