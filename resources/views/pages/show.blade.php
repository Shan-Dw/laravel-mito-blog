<x-layouts.main-layout :title="$post->title">
		<div class="mx-[34.5rem] my-10">
				<img alt="{{ $post->title }}" class="max-w-lg" src="{{ $post->url_img }}">
				<div class="text-center">
						<p class="py-8 text-3xl font-black">{{ $post->title }}</p>
						<p>{!! nl2br(e($post->content))  !!}</p>
						@auth
              <div class="pt-6 flex space-x-4 justify-center">
								<x-btn-delete :post="$post" />
								<a href="{{ $post->id }}/edit" class="btn bg-black">Modifier</a>
						</div>
            @endauth
				</div>
		</div>
</x-layouts.main-layout>
