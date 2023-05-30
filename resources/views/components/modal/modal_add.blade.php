@props(['id', 'title', 'action' => '', 'size' => '', 'method', 'id_form' => '', 'type_button' => 'submit'])

<x-modal.modal_base id="modalAdd{{ $id }}" title="{{ $title }}" action="{{ $action }}"
  size="{{ $size }}" id_form="{{ $id_form }}" type_button="{{ $type_button }}"
  moreClassButton="modal-add-button">
  {{ $slot }}
</x-modal.modal_base>
