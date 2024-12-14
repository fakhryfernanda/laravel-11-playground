@props([
    'name' => '',
    'label' => '',
    'required' => false,
    'disabled' => false,
    'isDefer' => false,
])

<x-phub.form.input-group 
    :name="$name" 
    :label="$label" 
    :required="$required" 
>
    <div @class([
        'flex items-center border border-gray-300 rounded-lg px-4',
        'bg-gray-100' => $disabled,
        'bg-gray-50' => !$disabled,
    ])>        
        <select
            @class([
                'rounded-lg w-full mt-auto py-2.5',
                'focus:ring-0 focus:outline-none',
                'bg-gray-100' => $disabled,
                'bg-gray-50' => !$disabled
            ])
            wire:model{{ $isDefer ? '.defer' : '.live' }}="{{ $name }}"
            {{ $disabled ? 'disabled' : '' }}
        >
            {{ $slot }}
        </select>
    </div>
</x-phub.form.input-group>
