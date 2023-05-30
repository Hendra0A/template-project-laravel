@props([
    'target' => '',
    'value' => 'Data',
    'moreClass' => '',
])

<x-button.button_base data-bs-toggle="modal" data-bs-target="{{ $target }}" moreClass="{{ $moreClass }}">
  <i class="fa-solid fa-plus"></i> Tambah {{ $value }}
</x-button.button_base>
