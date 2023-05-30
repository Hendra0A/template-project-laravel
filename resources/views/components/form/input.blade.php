@props(['name', 'type' => 'text', 'value' => null, 'accepted' => null, 'moreClass' => ''])

@if ($accepted === 'image')
  @php
    $accepted = '.jpg, .jpeg, .png';
  @endphp
@elseif ($accepted === 'video')
  @php
    $accepted = 'video/mp4';
  @endphp
@endif

<input class="form-control border-primary {{ $moreClass }}" type="{{ $type }}" name="{{ $name }}"
  value="{{ old($name, $value) }}" @if ($accepted) accept="{{ $accepted }}" @endif
  {{ $attributes }}>
