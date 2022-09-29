@php
  $styleLink="hover:text-blue-600 hover:underline "
@endphp
<nav class="bg-gray-100 py-4 shadow-lg shadow-blue-100">
		<div class="container flex justify-between items-center">
				<div class="">
						<a class="font-bold uppercase text-blue-500 text-xl" href="/">
								MitoBlog
						</a>
				</div>
				<div class="space-x-5 uppercase font-semibold flex items-center">
				@guest
          <a href="{{ route('login') }}" class="{{ $styleLink }}">Se connecter</a>
						<a href="{{ route('register') }}" class="{{ $styleLink }}">S'inscrire</a>
        @endguest

						@auth
						<div class="space-x-8 flex items-center">
						<span class="text-blue-500">Hello , {{ Auth::user()->name }}</span>
              	<x-btn-logout/>
            </div>
            @endauth
				</div>
		</div>
</nav>
