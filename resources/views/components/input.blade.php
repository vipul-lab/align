@props([
    'label' => null,        // Label text (optional)
    'required' => false,    // true / false
    'type' => 'text',       // Input type
    'name' => null, // Input name
    'value' => null,        // Default value
    'class' => '',  // Default input class
])

{{-- Show label only if provided --}}
@if($label)
    <label class="kt-label {{ $required ? 'required' : '' }}">
        {{ $label }}
    </label>
@endif

<input 
    type="{{ $type }}" 
    name="{{ $name }}" 
    value="{{ $value }}" 
    {{ $attributes->merge(['class' => "kt-input $class"]) }}
/>
