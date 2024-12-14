@props([
    'name' => '',
    'label' => '',
    'labelClass' => '',
    'required' => false,
    ])

<div {{ $attributes->merge([
    'class' => 'w-full'
]) }}>
    <x-form.label
        :name="$label"
        :required="$required"
        :class="$labelClass"
    />
    {{ $slot }}
    <x-form.error name="{{ $name }}" />
</div>
