const modal = new bootstrap.Modal($("#modalAction"));

export function crud(name, tableId, columns, columnDefs) {
    $(".add_button").on("click", function () {
        $.ajax({
            url: "ajax/" + name + "/create",
            type: "GET",
            success: function (res) {
                $("#modalAction").find(".modal-dialog").html(res);
                modal.show();
                store();
            },
        });
    });

    $("#" + tableId).on("click", ".action", function () {
        let data = $(this).data();
        let id = data.id;
        let jenis = data.jenis;

        if (jenis == "edit") {
            $.ajax({
                url: "ajax/" + name + "/" + id + "/edit",
                type: "GET",
                success: function (res) {
                    $("#modalAction").find(".modal-dialog").html(res);
                    modal.show();
                    store(id);
                },
            });
        } else if (jenis == "delete") {
            Swal.fire({
                title: "Apakah kamu yakin ingin menghapus data ini?",
                text: "Kamu tidak dapat lagi mengembalikan data ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus!",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "ajax/" + name + "/" + id,
                        type: "DELETE",
                        success: function (res) {
                            Swal.fire("Deleted!", res.success, "success");
                            $("#" + tableId)
                                .DataTable()
                                .ajax.reload();
                        },
                    });
                }
            });
        }
    });

    function store() {
        $("#formAction").on("submit", function (e) {
            e.preventDefault();

            const url = this.getAttribute("action");

            const formData = new FormData(this);

            $.ajax({
                url,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    modal.hide();
                    Swal.fire({
                        title: "Success",
                        text: res.success,
                        icon: "success",
                        confirmButtonText: "Ok",
                    });
                    $("#" + tableId)
                        .DataTable()
                        .ajax.reload();
                },
                error: function (res) {
                    let errors = res.responseJSON?.errors;
                    $(".is-invalid").removeClass("is-invalid");
                    $(".invalid-feedback").html("");
                    $.each(errors, function (key, value) {
                        $("#" + key).addClass("is-invalid");
                        $("#" + key)
                            .next()
                            .html(value);
                    });
                },
            });
        });
    }

    $("#" + tableId).DataTable({
        processing: true,
        serverside: true,
        ajax: {
            url: "ajax/products",
            type: "GET",
        },
        columns: columns,
        columnDefs: columnDefs,
    });
}
