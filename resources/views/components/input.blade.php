@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md bg-gray-800 text-white shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>
