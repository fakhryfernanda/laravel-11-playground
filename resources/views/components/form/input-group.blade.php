@props([
    'name' => '',
    'label' => '',
    'required' => false,
    ])

<div {{ $attributes->merge([
    'class' => 'w-full'
]) }}>
    <x-form.label
        name="{{ $label }}"
        required="{{ $required }}"
    />
    {{ $slot }}
    <x-form.error name="{{ $name }}" />
</div>
