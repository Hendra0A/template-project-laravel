@props(['label', 'value' => null, 'type' => ''])

<div class="form-group">
  <x-form.label>{{ $label }}</x-form.label>
  @if ($type === 'image')
    </br>
    @if ($value)
      <img src="{{ $value }}" alt="{{ $label }}" class="img-fluid rounded" style="width: 100px;">
    @else
      <div style="width: 50px;">
        @include('assets.img.user-no-image')
      </div>
    @endif
  @else
    <p>{{ $value }}</p>
  @endif
</div>
