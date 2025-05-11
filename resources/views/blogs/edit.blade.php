<x-layout>
   <x-forms.form action="{{ route('blogs.update', $blog->id) }}">
      @method('PUT')
      <x-forms.input label="Title" name="title" value="{{$blog->title}}" />
      <x-forms.input label="Content" name="content" value="{{$blog->content}}" />

      <x-forms.button>Update Blog</x-forms.button>
   </x-forms.form>
</x-layout>