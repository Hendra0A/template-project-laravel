{{-- @props(['id', 'action']) --}}

{{-- <x-modal.modal_base id="{{ $id }}" title="Hapus Data" action="{{ $action }}" method="DELETE">
  Apakah anda yakin ingin menghapus data ini?
</x-modal.modal_base> --}}

<script>
  $(document).on('click', '.hapus-data', function(event) {
    const id = $(event.currentTarget).attr('data-id');
    const action = $(event.currentTarget).attr('data-action');
    const url = action + '/' + id;
    swal({
      title: "Yakin ?",
      text: "Menghapus Data ?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        $.ajax({
          url: url,
          dataType: 'json',
          type: 'DELETE',
          success: function(response) {
            swal({
                title: "Berhasil",
                text: `${response.success}`,
                icon: "success",
                successMode: true,
              }),
              setTimeout(function() {
                window.location.reload();
              }, 1000);
          }
        });
      } else {
        return false;
      }
    });
  });
</script>
