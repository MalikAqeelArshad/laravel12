@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full'
    ];
@endphp

<x-forms.field :$label :$name>
    <select {{ $attributes($defaults) }}>
        {{ $slot }}
    </select>
</x-forms.field>

{{-- Example --}}
{{-- <select name="tag">
    @foreach ($blog->tags as $tag)
    <option value="{{ $tag }}" @selected(old('tag')==$tag)>
        {{ $tag }}
    </option>
    @endforeach
</select> --}}