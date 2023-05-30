<script type="module">
    import { saveData } from "{{ asset('assets/js/functions/ajax-crud-functions.js') }}";

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    })

    $('.modal-add-button').on('click', function(e) {
      e.preventDefault;

      saveData();
    })
</script>
