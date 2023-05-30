@props(['id', 'title', 'action' => null, 'size' => '', 'method', 'id_button' => '', 'id_form' => null, 'type_button' => 'submit', 'moreClassButton' => ''])

<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $id }}_label"
  aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog {{ $size }}">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="{{ $id }}_label">{{ $title }}</h5>
      </div>
      <form action="{{ $action }}" method="post" enctype="multipart/form-data" id="{{ $id_form }}">
        <div class="modal-body">
          @csrf
          @if (isset($method))
            @method($method)
          @endif
          {{ $slot }}
        </div>
        <div class="modal-footer">
          <x-button.button_base variant="secondary" data-bs-dismiss="modal">Tutup</x-button.button_base>
          @if ($action || $id_form)
            <x-button.button_base id="{{ $id_button }}" type="{{ $type_button }}" variant="primary"
              moreClass="{{ $moreClassButton }}">Simpan
            </x-button.button_base>
          @endif
        </div>
      </form>
    </div>
  </div>
</div>
