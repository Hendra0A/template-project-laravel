<script type="module">
    import { crud } from "{{ asset('assets/js/functions/ajax-crud-functions.js') }}";

    const columns = [
      { data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false },
      { data: "product_name", name: "Nama Produk" },
      { data: "product_img", name: "Gambar Produk" },
      { data: "product_description", name: "Deskripsi Produk" },
      { data: "aksi", name: "Aksi" }
    ];

    const columnDefs = [
    {
        targets: [0],
        width: "5%",
        className: "text-center",
    },
    {
        targets: [1],
        width: "28%",
    },
    {
        targets: [2],
        width: "25%",
        className: "text-center",
        render: function(data, type, row) {

        const storageUrl = "{{ asset('storage/') }}";

        return '<img src="' + storageUrl + '/' + data + '" alt="Product Image" class="w-50">';
        }
    },
    {
        targets: [1],
        width: "42%",
    },
  ];


    $(document).ready(function() {
      crud("products", "table-products", columns, columnDefs);
    });
  </script>
