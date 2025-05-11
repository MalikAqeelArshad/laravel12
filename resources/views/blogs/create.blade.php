<x-layout>
   <x-forms.form action="{{ route('blogs.store') }}">
      <x-forms.input label="Title" name="title" />
      <x-forms.input label="Content" name="content" />

      <x-forms.button>Create new Blog</x-forms.button>
   </x-forms.form>
</x-layout>