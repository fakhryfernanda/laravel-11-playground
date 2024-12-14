@props([
    'name',
    'required' => false,
])

<div class="form-label-wrapper">
    <label 
        for="{{ $name }}"
        {{ $attributes->merge([
            'class' => @class([
                'flex items-center text-sm font-medium',
                'mb-1.5' => $name,
            ])
        ]) }}
    >
        {!! $name !!}
        @if($required)
            <span class="text-red-600">*</span>
        @endif
        
    </label>
</div>
