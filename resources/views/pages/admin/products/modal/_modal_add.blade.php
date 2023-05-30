<x-modal.modal_add id="Product" title="Tambah Product" type_button="button" id_form="form_add_product">
  <x-form.form-group.form_group id="product_name_add" name="product_name_add" label="Product Name"
    placeholder="Enter a product name..." value="{{ old('product_name_add') }}" />
  <x-form.form-group.form_group id="product_img_add" name="product_img_add" label="Product Image" type="file"
    value="{{ old('product_img_add') }}" accepted="image" />
  <x-form.form-group.form_group id="product_description_add" name="product_description_add" label="Product Description"
    typeInput="textarea" placeholder="Enter a product description..." value="{{ old('product_description_add') }}" />
</x-modal.modal_add>
