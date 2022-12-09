@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-white text-sm']) }}>
    {{ $value ?? $slot }}
</label>
