<x-layouts.main-layout title="Accueil">
		<div class="container">
				<p class="pt-10 pb-10 text-center text-4xl font-black text-indigo-500">Blog Mito Laravel</p>
				<div class="grid gap-3 md:grid-cols-2 lg:grid-cols-4">
						@forelse ($posts as $post)
								<a href="posts/{{ $post->id }}">
										<x-cards.post-card :content="$post->content" :title="$post->title" :url_img="$post->url_img" />
								</a>
						@empty
								<p class="text-center">Pas d'article actuellement!</p>
						@endforelse
				</div>
		</div>
</x-layouts.main-layout>
