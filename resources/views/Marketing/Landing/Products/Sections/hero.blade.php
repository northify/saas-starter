<div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8 text-center">
	<div class="text-center">
		<h1 class="block mb-4 text-4xl text-gray-800 tracking-tight font-bold sm:text-5xl md:text-6xl">
			{{ $content['heroTitle1'] }}
			<span class="relative whitespace-nowrap text-gray-800">
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
	</div>
	
	<div class="mt-12">
		<div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-5">
			@foreach($content['products'] as $product)
			<div class="pt-6">
				<div class="flow-root rounded-lg bg-gray-50 border">
					<div class="-mt-6 px-6 pb-6">
						<div>
							<span class="inline-flex items-center justify-center rounded-md bg-white p-2 shadow-xl">
								<img class="h-14 w-14 text-white" src="{{ $product['icon'] }}" alt="{{ $product['iconAlt'] }}">
							</span>
						</div>
					</div>
					<div class="bg-white text-left rounded-b-lg px-4 pb-8 pt-6">
						<h3 class="font-medium tracking-tight text-gray-900">{{ $product['title'] }}</h3>
						<p class="mt-2 text-base text-gray-500">{{ $product['description'] }}</p>
					</div>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</div>