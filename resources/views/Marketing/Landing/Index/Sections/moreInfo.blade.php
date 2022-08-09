<div class="relative bg-white pt-16 pb-32 overflow-hidden">
	<div class="relative">
		<div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
			<div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
				<div>
					<div class="mt-6">
						<h2 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $content['moreInfo1Title'] }}</h2>
						<p class="mt-4 text-lg text-gray-500">{{ $content['moreInfo1SubTitle'] }}</p>
						<div class="mt-6">
							<a href="{{ $content['moreInfo1ButtonLink'] }}" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700"> {{ $content['moreInfo1ButtonText'] }} </a>
						</div>
					</div>
				</div>
				<div class="mt-8 border-t border-gray-200 pt-6">
					<blockquote>
						<div>
							<p class="text-base text-gray-500">&ldquo;Cras velit quis eros eget rhoncus lacus ultrices sed diam. Sit orci risus aenean curabitur donec aliquet. Mi venenatis in euismod ut.&rdquo;</p>
						</div>
						<footer class="mt-3">
							<div class="flex items-center space-x-3">
								<div class="flex-shrink-0">
								<img class="h-6 w-6 rounded-full" src="">
								</div>
								<div class="text-base font-medium text-gray-700">Marcia Hill, Digital Marketing Manager</div>
							</div>
						</footer>
					</blockquote>
				</div>
			</div>
			<div class="mt-12 sm:mt-16 lg:mt-0">
				<div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
					<img src="{{ $content['moreInfo1Img'] }}" alt="{{ $content['moreInfo1ImgAlt'] }}" class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none">
				</div>
			</div>
		</div>
	</div>
	<div class="mt-24">
		<div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
			<div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
				<div>
					<div class="mt-6">
						<h2 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $content['moreInfo2Title'] }}</h2>
						<p class="mt-4 text-lg text-gray-500">{{ $content['moreInfo2SubTitle'] }}</p>
						<div class="mt-6">
							<a href="{{ $content['moreInfo2ButtonLink'] }}" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700"> {{ $content['moreInfo2ButtonText'] }} </a>
						</div>
					</div>
				</div>
			</div>
			<div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
				<div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
					<img src="{{ $content['moreInfo2Img'] }}" alt="{{ $content['moreInfo2Img'] }}" class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none">
				</div>
			</div>
		</div>
	</div>
</div>
