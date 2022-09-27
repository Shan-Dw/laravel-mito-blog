@props(['post'])
<div class="">
		<form action="{{ route('posts.destroy', $post->id) }}" method="POST"
				onsubmit="return confirm('Are you sure you want to delete this post ?')">
				@csrf
				@method('DELETE')
				<button class="bg-black btn" type="submit">Supprimer</button>
		</form>
</div>
