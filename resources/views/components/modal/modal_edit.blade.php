@props(['id', 'title', 'action' => '', 'size' => '', 'id_button' => '', 'id_form' => '', 'type_button' => 'submit'])

<x-modal.modal_base id="modalEdit{{ $id }}" title="{{ $title }}" action="{{ $action }}"
  size="{{ $size }}" method="PUT" id_button="{{ $id_button }}" id_form="{{ $id_form }}"
  type_button="{{ $type_button }}" moreClassButton="modal-edit-button">
  {{ $slot }}
</x-modal.modal_base>
