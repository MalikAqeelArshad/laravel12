<x-layout>
   <x-card :$blog :readmore="false" />
   Author: <i>{{$blog->user->name}}</i>
</x-layout>