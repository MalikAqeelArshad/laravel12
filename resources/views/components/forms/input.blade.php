@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white border border-gray-300 px-5 py-4 w-full',
        'value' => old($name)
    ];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>

{{-- Example --}}
{{-- <input name="email" value="email@laravel.com" @checked(old('active', $user->active))
@required($user->isAdmin()) @readonly($user->isNotAdmin())
@style([ 'background-color: red' , 'font-weight: bold'=> $isActive])
@class(['p-4', 'font-bold' => $isActive, 'text-gray-500' => ! $isActive, 'bg-red' => $hasError])
/> --}}