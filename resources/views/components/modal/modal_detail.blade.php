@props(['id', 'title', 'size' => ''])

<x-modal.modal_base id="{{ $id }}" title="{{ $title }}" size="{{ $size }}">
  {{ $slot }}
</x-modal.modal_base>
