@props([
    'name' => '',
    'label' => '',
    'labelClass' => '',
    'required' => false,
    'type' => 'text',
    'disabled' => false,
    'typeWire' => 'default',
    'placeholder' => '',
])

<x-form.input-group
    :name="$name"
    :label="$label"
    :required="$required"
    :labelClass="$labelClass"
>
    <input
        wire:model{{ $typeWire === 'default' ? '' : '.' . $typeWire }}="{{ $name }}"
        name="{{ $name }}"
        id="{{ $name }}"
        type="{{ $type }}"
        placeholder="{{ $placeholder }}"
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge([
            'value' => old($name),
            'class' => 'border-none shadow-md rounded-lg focus:ring-0'
        ]) }}
    >
</x-form.input-group>
