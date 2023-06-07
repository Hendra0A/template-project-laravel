  <div class="modal-content">
    <form id="formAction"
      action="{{ $product->id ? route('admin.products.update', $product->id) : route('admin.products.store') }}"
      method="POST">
      @csrf
      @if ($product->id)
        @method('PUT')
      @endif
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalActionLabel">{{ $product->id ? 'Edit' : 'Tambah' }} Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <x-form.form-group.form_group id="product_name" value="{{ $product->product_name }}" name="product_name"
          label="Product Name" placeholder="Enter a product name..." />
        <x-form.form-group.form_group id="product_img" name="product_img" label="Product Image" type="file"
          accepted="image" />
        <x-form.form-group.form_group id="product_description" value="{{ $product->product_description }}"
          name="product_description" label="Product Description" typeInput="textarea"
          placeholder="Enter a product description..." />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
  </div>
