<script type="module">
    import { saveData } from "{{ asset('assets/js/functions/ajax-crud-functions.js') }}";

  $('#myTable').on('click', '.edit_button', function() {
    let id = $(this).data('id');
    const modal = new bootstrap.Modal($('#modalEditProduct'));

    $.ajax({
      url: 'ajax/products/' + id + '/edit',
      type: 'GET',
      success: function(response) {
        modal.show();
        $('#product_name_edit').val(response.data.product_name);
        $('#product_description_edit').val(response.data.product_description);

        $('.modal-edit-button').on('click', function(e) {
          e.preventDefault;
          console.log(id)

          saveData(id);
        })
      }
    })
  })
</script>
