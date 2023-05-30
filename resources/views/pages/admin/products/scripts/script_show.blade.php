<script>
  $(document).ready(function() {
    $("#myTable").DataTable({
      processing: true,
      serverside: true,
      ajax: {
        url: "{{ route('admin.products.index') }}",
        type: "GET",
      },
      columns: [{
          data: "DT_RowIndex",
          name: "DT_RowIndex",
          orderable: false,
          searchable: false,
        },
        {
          data: "product_name",
          name: "Nama Produk",
        },
        {
          data: "product_img",
          name: "Gambar Produk",
        },
        {
          data: "product_description",
          name: "Deskripsi Produk",
        },
        {
          data: "aksi",
          name: "Aksi",
        },
      ],
    });
  });
</script>
