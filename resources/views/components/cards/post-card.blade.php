@props(['url_img', 'title', 'content'])
<div class="max-w-md shadow-xl">
		<img alt="{{ $title }}" class="" src="{{ $url_img }}">
		<div class="min-h-[280px] p-4">
				<p class="pb-4 text-xl font-bold">{{ $title }}</p>
				<p>{{ Str::substr($content, 0, 90) }}...</p>
		</div>
</div>
