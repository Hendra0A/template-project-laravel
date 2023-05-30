@props([
    'target' => '',
])

<x-button.button_base variant="warning" data-bs-toggle="modal" data-bs-target="{{ $target }}">
  <i class="fa-solid fa-eye"></i>
</x-button.button_base>
