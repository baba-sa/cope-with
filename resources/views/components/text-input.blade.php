@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['type' => 'text', 'class' => 'input input-sm input-bordered ']) !!}>
