@props([
    'target' => '',
    'value' => 'Data',
    'moreClass' => '',
])

<x-button.button_base moreClass="{{ $moreClass }}" {{ $attributes }}>
  <i class="fa-solid fa-plus"></i> Tambah {{ $value }}
</x-button.button_base>
