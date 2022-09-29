@php
  $styleLink="hover:text-blue-600 hover:underline block text-xl font-semibold"
@endphp
<x-layouts.main-layout title="Dashboard">


<div class="container">
  <h1 class="font-black text-3xl text-center mt-8 text-blue-600 uppercase">Bienvenue sur ton dashboard, <span class="text-blue-400 ">{{ Auth::user()->name }}</span> !</h1>
    <div class="py-12">
        <a href="{{ route('posts.create') }}" class="{{ $styleLink }}">Nouveau post</a>
        <a href="" class="{{ $styleLink }}">Liste des posts</a>
    </div>
  </div>
</x-layouts.main-layout>
