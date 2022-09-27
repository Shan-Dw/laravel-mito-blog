<x-layouts.main-layout title="Création article">
<div class="container pb-24">
  <h1 class="pt-10 pb-10 text-4xl font-bold">Upload post</h1>
  <form action="{{ route('posts.update', $post->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="max-w-md">
          {{-- title --}}
          <input class="block w-full rounded-lg border-gray-400" name="title" placeholder="Titre du post" type="text" value="{{ old('title', $post->title) }}">
          <x-error-msg name="title"/>
          {{-- content --}}
          <textarea class="mt-5 block w-full rounded-lg border-gray-400" cols="30" name="content"
            placeholder="Votre contenu ...." rows="10">{{ old('content' , $post->content) }}</textarea>
          <x-error-msg name="content"/>
          {{-- is published ? --}}
          <div class="">
          <label for="">Publication</label>
          <input @checked(old('is_published', $post->is_published)) type="checkbox" value="is_published" name="is_published">
          </div>
          {{-- image  --}}
          <input class="mt-5 block w-full rounded-lg border-gray-400" name="url_img" placeholder="Url de votre image"
              type="text" value="https://source.unsplash.com/640x480/?dog?1">
          <button class="btn-primary btn mt-6 w-full" type="submit">Envoyer</button>
      </div>

  </form>

</div>
</x-layouts.main-layout>
