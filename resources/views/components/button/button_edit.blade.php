@props([
    'target' => '',
    'value' => '',
    'moreClass' => '',
])

<x-button.button_base variant="info" moreClass="{{ $moreClass }}" {{ $attributes }}>
  <i class="fa-solid fa-pen-to-square"></i> {{ $value }}
</x-button.button_base>
