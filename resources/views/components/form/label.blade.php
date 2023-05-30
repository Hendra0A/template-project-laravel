@props([
    'for' => '',
    'value',
    'moreClass' => '',
])

<label {!! $for ? 'for="' . $for . '"' : '' !!} class="form-label text-black fw-semibold {{ $moreClass }}" {{ $attributes }}>
  {{ $value ?? $slot }}
</label>
