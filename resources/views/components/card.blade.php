@props(['blog', 'readmore' => true])

<article class="rounded-lg border border-gray-100 bg-white p-4 my-3 shadow-xs transition hover:shadow-lg sm:p-6">
   <h3 class="inline-flex items-center gap-3 text-lg font-medium text-gray-900">
      <span class="inline-block rounded-sm bg-blue-600 p-2 text-white">
         <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M12 14l9-5-9-5-9 5 9 5z" />
            <path
               d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
         </svg>
      </span>
      {{$blog->title}}
   </h3>

   <p class="my-2 line-clamp-3 text-sm/relaxed text-gray-500">
      {{$blog->content}}
      {{-- <br /> by <i>{{$blog->user->name}}</i> --}}
   </p>

   <div class="flex justify-between items-center">
      @auth
        <div class="flex gap-3 text-red-500">
          <a href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
          <x-forms.form action="{{ route('blogs.destroy', $blog->id) }}">
            @method('DELETE')
            <button class="cursor-pointer">Delete</button>
          </x-forms.form>
        </div>
     @endauth
      @if($readmore)
        <a href="{{ route('blogs.show', $blog->id) }}"
          class="group mt-4 ml-auto inline-flex items-center gap-1 text-xs font-medium text-blue-600">
          Read More
          <span class="block transition-all group-hover:ms-0.5 rtl:rotate-180">&rarr;</span>
        </a>
     @endif
   </div>
</article>