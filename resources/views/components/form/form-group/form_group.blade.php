@props(['id' => '', 'name', 'label', 'placeholder' => '', 'value' => null, 'error' => false, 'type' => 'text', 'typeInput' => 'input', 'options' => [], 'accepted' => null, 'isRequired' => false, 'rows' => 8])

<div class="form-group">
  <x-form.label for="{{ $name }}">{{ $label }}</x-form.label>
  @if ($typeInput === 'select')
    <x-form.select id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" :options="$options"
      placeholder="{{ $placeholder }}" :required="$isRequired" moreClass="{{ $error ? 'is-invalid' : '' }}" />
  @elseif ($typeInput === 'textarea')
    <x-form.textarea id="{{ $id }}" name="{{ $name }}" :value="$value" rows="{{ $rows }}"
      placeholder="{{ $placeholder }}" moreClass="{{ $error ? 'is-invalid' : '' }}" />
  @else
    <x-form.input id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
      moreClass="{{ $error ? 'is-invalid' : '' }}" value="{{ $value }}" type="{{ $type }}"
      accepted="{{ $accepted }}" :required="$isRequired" />
  @endif
  @if ($error)
    <div class="invalid-feedback">
      {{ $error }}
    </div>
  @endif
  <div class="invalid-feedback">

  </div>
</div>
