@props(['name', 'value' => '', 'options' => [], 'placeholder' => null, 'moreClass' => ''])

<select name="{{ $name }}" class="form-select border-primary {{ $moreClass }}" {{ $attributes }}>
  @if ($placeholder)
    <option value="">{{ $placeholder }}</option>
  @endif
  @foreach ($options as $optionValue => $optionLabel)
    <option value="{{ $optionValue }}" {{ $optionValue == $value ? 'selected' : '' }}>
      {{ $optionLabel }}
    </option>
  @endforeach
</select>
