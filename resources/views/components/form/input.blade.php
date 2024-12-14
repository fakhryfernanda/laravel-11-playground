@props([
    'name' => '',
    'label' => '',
    'required' => false,
    'type' => 'text',
    'disabled' => false,
    'typeWire' => 'default',
    'placeholder' => '',
])

<x-form.input-group :name="$name" :label="$label" :required="$required" :description="$description">
    <input
        wire:model{{ $typeWire === 'default' ? '' : '.' . $typeWire }}="{{ $name }}"
        name="{{ $name }}"
        id="{{ $name }}"
        type="{{ $type }}"
        placeholder="{{ $placeholder }}"
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge([
            'value' => old($name),
            'class' => @class([
                'block w-full rounded-lg py-3 px-5',
                'bg-maui-mist',
                'border border-angel-hair',
                'text-gray-900 text-base font-normal',
                'placeholder:text-auro-metal placeholder:text-base',
                'disabled:bg-gray-50 readonly:bg-gray-50'
            ])
        ]) }}
    >
</x-form.input-group>
