@if ($errors->any())
   <div class="border-s-4 border-red-700 bg-red-50 p-4" role="alert">
      <div class="flex items-center gap-2 text-red-700">
        <strong class="font-medium"> Something went wrong </strong>
      </div>

      <ul class="mt-2 text-sm text-red-700">
        @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach
      </ul>
   </div>
@endif

@if ($message = session('info'))
   <div class="border-s-4 border-blue-700 bg-blue-50 p-4" role="alert">
      <div class="flex items-center gap-2 text-blue-700">
        <strong class="font-medium"> Info </strong>
      </div>

      <p class="mt-2 text-sm text-blue-700">{{ $message }}</p>
   </div>
@endif

@if ($message = session('warning'))
   <div class="border-s-4 border-yellow-700 bg-yellow-50 p-4" role="alert">
      <div class="flex items-center gap-2 text-yellow-700">
        <strong class="font-medium"> Warning </strong>
      </div>

      <p class="mt-2 text-sm text-yellow-700">{{ $message }}</p>
   </div>
@endif

@if ($message = session('success'))
   <div class="border-s-4 border-green-700 bg-green-50 p-4" role="alert">
      <div class="flex items-center gap-2 text-green-700">
        <strong class="font-medium"> Success </strong>
      </div>

      <p class="mt-2 text-sm text-green-700">{{ $message }}</p>
   </div>
@endif

@if ($message = session('danger') ?: session('error'))
   <div class="border-s-4 border-red-700 bg-red-50 p-4" role="alert">
      <div class="flex items-center gap-2 text-red-700">
        <strong class="font-medium"> Error </strong>
      </div>

      <p class="mt-2 text-sm text-red-700">{{ $message }}</p>
   </div>
@endif