@props(['name', 'value' => null, 'rows' => 8, 'moreClass' => ''])

<textarea class="form-control {{ $moreClass }}" name="{{ $name }}" rows={{ $rows }}
  {{ $attributes }}>{{ old($name, $value) }}</textarea>
