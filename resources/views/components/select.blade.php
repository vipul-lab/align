@props([
    'label' => null,        // Label text (optional)
    'required' => false,    // true / false
    'name' => 'select_name',
    'placeholder' => 'Select Option',
    'optionsClass' => 'kt-scrollable overflow-auto max-h-[250px]',
    'multiple' => false,
])

@php
    $selectConfig = [
        'optionsClass' => $optionsClass
    ];
    
    if ($multiple) {
        $selectConfig['multiple'] = true;
        $selectConfig['closeOnSelect'] = false;
        $selectConfig['placeholder'] = $placeholder;
    }
@endphp
    

@if($label)
    <label class="kt-label {{ $required ? 'required' : '' }}">
        {{ $label }}
    </label>
@endif
<select name="{{ $multiple ? $name . '[]' : $name }}" 
        class="kt-select"
        data-kt-select="true"
data-kt-select-placeholder="{{ $attributes->get('data-kt-select-placeholder', $placeholder) }}"
        data-kt-select-config='@json($selectConfig)'
        {{ $multiple ? 'multiple' : '' }}
        {{ $attributes->merge(['class' => '']) }}>
        {{ $required ? 'required' : '' }}
    {{ $slot }}
</select>
