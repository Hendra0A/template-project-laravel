@props([
    'variant' => 'primary',
    'size' => 'md',
    'type' => 'button',
    'moreClass' => '',
])

<button type="{{ $type }}"
  class="btn btn-{{ $variant }} font-weight-bold text-xs mb-0 btn-{{ $size }} {{ $moreClass }}"
  {{ $attributes }}>
  {{ $slot }}
</button>
