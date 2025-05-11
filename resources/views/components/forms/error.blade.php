@props(['error' => false])

@if ($error)
    <p class="text-sm text-red-500 mt-1">{{ $error }}</p>
@endif

{{-- Example --}}
{{-- <input id="title" type="text" class="@error('title') is-invalid @enderror" /> --}}