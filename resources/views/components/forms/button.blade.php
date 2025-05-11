<button {{ $attributes(['class' => 'bg-blue-800 hover:bg-blue-900 text-white font-bold rounded-lg py-2 px-6 cursor-pointer']) }}>
   {{ $slot }}
</button>

{{-- Example --}}
{{-- <button type="submit" @disabled($errors->isNotEmpty())>Submit</button> --}}