<div>
	<div class="relative overflow-hidden">
		<div class="relative pt-6 pb-16 sm:pb-24">
			<div class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6">
				<div class="text-center">
					<h1 class="block mb-4 text-4xl text-gray-800 tracking-tight font-bold sm:text-5xl md:text-6xl">
						{{ $content['heroTitle1'] }}
						<span class="relative whitespace-nowrap text-blue-600">
							<svg aria-hidden="true" viewBox="0 0 418 42" class="absolute top-2/3 left-0 h-[0.58em] w-full fill-blue-300/50" preserveAspectRatio="none">
								<path d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z"></path>
							</svg>
							<span class="relative">{{ $content['heroTitle2'] }}</span>
						</span>
						{{ $content['heroTitle3'] }}
					</h1>
					
					<p class="mt-8 max-w-md mx-auto text-xl text-gray-700 font-light md:text-2xl md:max-w-3xl">
						{{ $content['heroSubTitle'] }}
					</p>
					<p class="mx-auto max-w-2xl block mt-12 text-3xl text-gray-800 rounded-md pb-2 pt-1">
						{{ $content['heroSubTitle2'] }}
						<span class="bg-red-500 px-2 py-0.5 rounded text-white text-2xl font-medium">{{ $content['heroSubTitle3'] }}</span> 
						{{ $content['heroSubTitle4'] }}
					</p>
				</div>
			</div>
		</div>
		
		<div>
			<div class="max-w-7xl mx-auto px-4 sm:px-6">
				<img class="relative rounded-lg shadow-lg" src="/img/{{ $content['heroImg'] }}" alt="{{ $content['heroImgAlt'] }}">
			</div>
			<!-- Works with -->
			<div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
				<h2 class="text-center text-gray-400 text-sm font-semibold uppercase tracking-wide">{{ $content['providerTitle'] }}</h2>
				<div class="mt-4 grid grid-cols-2 gap-4 md:grid-cols-6 lg:grid-cols-5">
					<div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
						<img src="/img/logos/social/{{ $content['providerLogo1'] }}" alt="{{ $content['providerLogo1Alt'] }}">
					</div>
					<div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
						<img src="/img/logos/social/{{ $content['providerLogo2'] }}" alt="{{ $content['providerLogo2Alt'] }}">
					</div>
					<div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
						<img src="/img/logos/social/{{ $content['providerLogo3'] }}" alt="{{ $content['providerLogo3Alt'] }}">
					</div>
					<div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
						<img src="/img/logos/social/{{ $content['providerLogo4'] }}" alt="{{ $content['providerLogo4Alt'] }}">
					</div>
					<div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
						<img class="pt-4" src="/img/logos/social/{{ $content['providerLogo5'] }}" alt="{{ $content['providerLogo5Alt'] }}">
					</div>
				</div>
			</div>
		</div>
	</div>

</div>