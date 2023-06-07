@props([
    'moreClass' => '',
])

<x-button.button_base variant="danger" moreClass="{{ $moreClass }}" {{ $attributes }}>
  <i class="fa-solid fa-trash"></i>
</x-button.button_base>
