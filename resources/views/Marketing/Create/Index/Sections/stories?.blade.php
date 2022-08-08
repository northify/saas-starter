<div class="container mx-auto">
	<div class="flex justify-center ">
		<div  class="w-full p-4 md:px-8 md:py-4 md:w-10/12 grid grid-cols-1 gap-6 md:grid-cols-2">
		@foreach($content['stories'] as $story)
			<div class="border-0 shadow-md rounded-3xl">
				<img class="rounded-t-3xl" src="{{ $story['image'] }}" alt="{{ $story['imageAlt'] }}" />
				<div class="p-10 md:pr-20 pb-20">
					<h2 class="mb-4 text-2xl md:text-3xl font-bold leading-tight text-gray-900">{{ $story['title'] }}</h2>
					<p class="text-gray-700 mb-6">{{ $story['subTitle1'] }} <span class="font-semibold">{{ $story['subTitle2'] }}</span></p>
					<p class="text-gray-700 mb-2">{{ $story['subTitle3'] }}</p>
					<div class="absolute bottom-10">
						<a href="{{ route('register') }}" class="text-gray-900 transition hover:text-primary hover:bg-white -ml-2.5">
							Try it now 
							<svg xmlns="http://www.w3.org/2000/svg" class="ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
							</svg>
						</a>
					</div>
				</div>
			</div>
		@endforeach
		</div>
	</div>
</div>