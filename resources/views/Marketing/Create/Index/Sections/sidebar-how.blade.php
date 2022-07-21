<section id="how" class="text-gray-600 py-8">
	<h3 class="mb-1 text-2xl md:text-3xl font-bold leading-tight text-gray-900">{{ $content['howToTitle'] }}</h3>
	<p class="mb-4 text-base text-gray-700">{{ $content['howToSubTitle'] }}</p>
							
	<div class="container px-5 py-8 mx-auto flex flex-wrap">
		<div class="flex flex-wrap w-full">
			<div class=" md:pr-10 md:py-6">
				@foreach($content['hoToSteps'] as $steps)
				<div class="flex relative pb-6 md:pb-20">
					@if(!$loop->last)
					<div class="h-full w-10 absolute inset-3 flex items-center justify-center">
						<div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
					</div>
					@endif
					<div class="flex-shrink-0 w-16 h-16 shadow-lg rounded-full bg-white inline-flex items-center justify-center text-white relative z-10">
						<i class="{{ $steps['icon'] }} fa-2x text-gray-500"></i>
					</div>
					@if(isset($steps['descriptionWithLinkLink']))
					<div class="flex-grow pl-8 md:pl-20">
						<p class="font-bold title-font text-2xl text-gray-900 mb-1 tracking-wider">{{ $steps['title'] }}</p>
						<p class="leading-relaxed">{{ $steps['descriptionWithLink1'] }} <a href="{{ $steps['descriptionWithLinkLink'] }}" class="transition hover:text-primary font-semibold" style="text-decoration:underline">{{ $steps['descriptionWithLink2'] }}</a>{{ $steps['descriptionWithLink3'] }}</p>
					</div>
					@else
					<div class="flex-grow pl-8 md:pl-20">
						<p class="font-bold title-font text-2xl text-gray-900 mb-1 tracking-wider">{{ $steps['title'] }}</p>
						<p class="leading-relaxed">{{ $steps['description'] }}</p>
					</div>
					@endif
				</div>
				@endforeach
			</div>
		
		</div>
	</div>
</section>