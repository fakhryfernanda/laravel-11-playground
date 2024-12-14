@props([
    'name' => '',
    'required' => false,
])

<div>
    <label 
        for="{{ $name }}"
        {{ $attributes->merge([
            'class' => 'block text-sm font-medium'
        ]) }}
    >
        {!! $name !!}
        @if($required)
            <span class="text-red-600">*</span>
        @endif
        
    </label>
</div>
