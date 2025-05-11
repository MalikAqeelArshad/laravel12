<form {{ $attributes(["class" => "max-w-2xl space-y-6", "method" => "POST"]) }}>
    @csrf
    {{ $slot }}
</form>