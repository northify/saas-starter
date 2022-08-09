<div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
	<div class="text-center">
		<h1 class="block mb-4 text-4xl text-gray-800 tracking-tight font-bold sm:text-5xl md:text-6xl">
			{{ $content['heroTitle1'] }}
			<span class="relative whitespace-nowrap text-gray-800">
				<svg aria-hidden="true" viewBox="0 0 281 40" class="absolute top-1/2 left-0 h-[1em] w-full fill-blue-300" preserveAspectRatio="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M240.172 22.994c-8.007 1.246-15.477 2.23-31.26 4.114-18.506 2.21-26.323 2.977-34.487 3.386-2.971.149-3.727.324-6.566 1.523-15.124 6.388-43.775 9.404-69.425 7.31-26.207-2.14-50.986-7.103-78-15.624C10.912 20.7.988 16.143.734 14.657c-.066-.381.043-.344 1.324.456 10.423 6.506 49.649 16.322 77.8 19.468 23.708 2.65 38.249 2.95 55.821 1.156 9.407-.962 24.451-3.773 25.101-4.692.074-.104.053-.155-.058-.135-1.062.195-13.863-.271-18.848-.687-16.681-1.389-28.722-4.345-38.142-9.364-15.294-8.15-7.298-19.232 14.802-20.514 16.095-.934 32.793 1.517 47.423 6.96 13.524 5.033 17.942 12.326 11.463 18.922l-.859.874.697-.006c2.681-.026 15.304-1.302 29.208-2.953 25.845-3.07 35.659-4.519 54.027-7.978 9.863-1.858 11.021-2.048 13.055-2.145a61.901 61.901 0 0 0 4.506-.417c1.891-.259 2.151-.267 1.543-.047-.402.145-2.33.913-4.285 1.707-4.635 1.882-5.202 2.07-8.736 2.903-3.414.805-19.773 3.797-26.404 4.829Zm40.321-9.93c.1-.066.231-.085.29-.041.059.043-.024.096-.183.119-.177.024-.219-.007-.107-.079ZM172.299 26.22c9.364-6.058 5.161-12.039-12.304-17.51-11.656-3.653-23.145-5.47-35.243-5.576-22.552-.198-33.577 7.462-21.321 14.814 12.012 7.205 32.994 10.557 61.531 9.831 4.563-.116 5.372-.288 7.337-1.559Z"></path>
				</svg>
				<span class="relative">{{ $content['heroTitle2'] }}</span>
			</span>
			{{ $content['heroTitle3'] }}
		</h1>
		<p class="mt-8 max-w-md mx-auto text-xl text-gray-700 font-light md:text-2xl md:max-w-3xl">
			{{ $content['heroSubTitle'] }}
		</p>
	</div>
	<div class="mt-12 space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-none xl:mx-0 xl:grid-cols-3">
		
		@foreach($content['plans'] as $plan)
		<div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
			<div class="p-6">
				<h2 class="text-lg leading-6 font-medium text-gray-900">{{ $plan['name'] }}</h2>
				<p class="mt-4 text-sm text-gray-500">{{ $plan['description'] }}</p>
				<p class="mt-8">
					<span class="text-4xl font-extrabold text-gray-900">${{ $plan['priceMonthly'] }}</span>
					<span class="text-base font-medium text-gray-500">/mo</span>
				</p>
				<a href="#" class="mt-8 block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Start Trial</a>
			</div>
			<div class="pt-6 pb-8 px-6">
				<h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">{{ $plan['itemsTitle'] }}</h3>
				<ul role="list" class="mt-6 space-y-4">
				
					@foreach($plan['planItems'] as $item)
					
					<li class="flex space-x-3">
						<svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="text-sm text-gray-500">{{ $item['item'] }}</span>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		@endforeach
	</div>
</div>