@props([
    'label' => null,        // Label text (optional)
    'required' => false,    // true / false
    'name' => null,         // Input name
    'value' => value,       // Default value
    'class' => '',  // Default input class
])


<div class="flex items-center gap-2">
    <input type="checkbox" class="kt-checkbox kt-checkbox-sm {{ $class }}" name="{{ $name }}" id="{{ $id }}" value="{{ $value }}" />
    <label class="kt-label" for="{{ $id }}" >{{ $label }}</label>
</div>