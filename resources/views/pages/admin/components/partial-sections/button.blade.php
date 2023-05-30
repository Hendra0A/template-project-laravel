<section id="button">
  <h1>Button</h1>
  <div>
    <h5>Button Base</h5>
    <x-button.button_base>Normal</x-button.button_base>
    <x-button.button_base variant="danger">With Variant</x-button.button_base>
    <x-button.button_base variant="info" type="submit">Submit Type</x-button.button_base>
    <x-button.button_base variant="warning" size="sm">Small</x-button.button_base>
    <x-button.button_base moreClass="disabled" disabled>More Class Disabled</x-button.button_base>
    <x-button.button_base style="background-color: indigo">Custom Style Indigo</x-button.button_base>
  </div>

  <div>
    <h5>Button Add</h5>
    <x-button.button_add />
    <x-button.button_add value="Custom Value" />
  </div>

  <div>
    <h5>Button Delete</h5>
    <x-button.button_delete />
  </div>

  <div>
    <h5>Button Edit</h5>
    <x-button.button_edit />
  </div>

  <div>
    <h5>Button Detail</h5>
    <x-button.button_detail />
  </div>
</section>
