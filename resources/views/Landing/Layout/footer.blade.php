<footer class="bg-gray-800" aria-labelledby="footer-heading">
	<h2 id="footer-heading" class="sr-only">Footer</h2>
	<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
		<div class="xl:grid xl:grid-cols-3 xl:gap-8">
			<div class="space-y-8 xl:col-span-1">
				<img class="h-10" src="{{ $footer['footerLogo'] }}" alt="{{ $footer['footerLogoAlt'] }}">
				<p class="text-gray-500 text-base">{{ $footer['footerDescription'] }}</p>
				<div class="flex space-x-6">
					@foreach($footer['footerSocial'] as $item)
					<a href="{{ $item['link'] }}" class="text-gray-400 hover:text-gray-300">
						<span class="sr-only">{{ $item['service'] }}</span>
						<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
							<path fill-rule="evenodd" d="{{ $item['svg'] }}" clip-rule="evenodd" />
						</svg>
					</a>
					@endforeach
				</div>
			</div>
				
				<div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
					<div class="md:grid md:grid-cols-2 md:gap-8">
						<div>
							<h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">{{ $footer['colOne'] }}</h3>
							<ul role="list" class="mt-4 space-y-4">
								@foreach($footer['colOneList'] as $item)
								<li>
									<a href="{{ $item['link'] }}" class="text-base text-gray-300 hover:text-white"> {{ $item['page'] }} </a>
								</li>
								@endforeach
							</ul>
						</div>
						<div class="mt-12 md:mt-0">
							<h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">{{ $footer['colTwo'] }}</h3>
							<ul role="list" class="mt-4 space-y-4">
								@foreach($footer['colTwoList'] as $item)
								<li>
									<a href="{{ $item['link'] }}" class="text-base text-gray-300 hover:text-white"> {{ $item['page'] }} </a>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
					<div class="md:grid md:grid-cols-2 md:gap-8">
						<div>
							<h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">{{ $footer['colThree'] }}</h3>
							<ul role="list" class="mt-4 space-y-4">
								@foreach($footer['colThreeList'] as $item)
								<li>
									<a href="{{ $item['link'] }}" class="text-base text-gray-300 hover:text-white"> {{ $item['page'] }} </a>
								</li>
								@endforeach
							</ul>
						</div>
						<div class="mt-12 md:mt-0">
							<h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">{{ $footer['colFour'] }}</h3>
							<ul role="list" class="mt-4 space-y-4">
								@foreach($footer['colFourList'] as $item)
								<li>
									<a href="{{ $item['link'] }}" class="text-base text-gray-300 hover:text-white"> {{ $item['page'] }} </a>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			
		</div>
		<div class="mt-12 border-t border-gray-200 pt-8">
			<p class="text-base text-gray-400 xl:text-center">&copy; {{ now()->year }} {{ env('APP_NAME') }}. All rights reserved.</p>
		</div>
	</div>
</footer>

