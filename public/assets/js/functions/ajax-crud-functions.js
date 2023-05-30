import { capitalize } from "./general-functions.js";

export function saveData(id = "") {
    let url, type, typeName;
    if (id == "") {
        url = "ajax/products";
        type = "POST";
        typeName = "add";
    } else {
        url = "ajax/products/" + id;
        type = "PUT";
        typeName = "edit";
    }
    $.ajax({
        url: url,
        type: type,
        data: {
            product_name: $("#product_name_" + typeName).val(),
            product_description: $("#product_description_" + typeName).val(),
        },
        success: function (response) {
            if (response.errors) {
                $(".is-invalid").removeClass("is-invalid");
                $(".invalid-feedback").html("");
                $.each(response.errors, function (key, value) {
                    $("#" + key + "_" + typeName).addClass("is-invalid");
                    $("#" + key + "_" + typeName)
                        .next()
                        .html(value);
                });
            } else {
                $("#modal" + capitalize(typeName) + "Product").modal("hide");
                $(".modal-backdrop").remove();
                $("#form_" + typeName + "_product")[0].reset();
                Swal.fire({
                    title: "Success",
                    text: response.success,
                    icon: "success",
                    confirmButtonText: "Ok",
                });
            }
            $("#myTable").DataTable().ajax.reload();
        },
    });
}
