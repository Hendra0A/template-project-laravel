@extends('layouts.app', ['page' => 'products', 'title' => 'products'])
@section('products', 'active')

@section('main-content')
  <div class="card-header mb-3">
    <x-button.button_add value="Product" moreClass="add_button" />
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped w-100" id="table-products">
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Product Name</th>
            <th class="text-center">Product Image</th>
            <th class="text-center">Product Description</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          {{-- @foreach ($data as $item)
            <tr>
              <td class="text-center" style="width: 5%">{{ $loop->iteration }}</td>
              <td style="width: 20%">{{ $item->product_name }}</td>
              <td class="text-center" style="width: 33%"><img src="{{ Storage::url($item->product_img) }}"
                  alt="product_img" class="w-75"></td>
              <td style="width: 42%">{{ $item->product_description }}</td>
            </tr>
          @endforeach --}}
        </tbody>
      </table>
    </div>
  </div>

  {{-- modal --}}
  <x-modal.modal_ajax_yajradatatables />

@endsection
@push('scripts')
  @include('pages.admin.products.script')
@endpush
