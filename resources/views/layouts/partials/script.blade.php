{{-- jquery --}}
<script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>

{{-- bootstrap 5.2.3 --}}
<script src="{{ asset('assets/js/bootstrap/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.js') }}"></script>

{{-- sbadmin --}}
<script src="{{ asset('assets/js/sbadmin/sb-admin-2.js') }}"></script>

{{-- datatables --}}
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

{{-- custom js --}}
<script type="module" src="{{ asset('assets/js/app.js') }}"></script>

{{-- sweetalert2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@stack('scripts')
