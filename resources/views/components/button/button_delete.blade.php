@props([
    'class' => '',
    'id' => '',
])

<x-button.button_base variant="danger" moreClass="{{ $class }}" data-id="{{ $id }}">
  <i class="fa-solid fa-trash"></i>
</x-button.button_base>
