<section class="container pt-14 md:pt-32 pb-8 md:pb-24 mx-auto">
    <div class="w-full mx-auto text-center md:w-11/12 xl:w-9/12 fade-in fade-in-first">
		<div class="px-2">
			<h1 class="mb-6 text-3xl font-bold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">{{ $content['heroTitle'] }}</h1>
		</div>
		<div class="px-16 md:px-6">
			<p class="px-0 mb-6 text-lg text-gray-600 md:text-xl lg:px-24">{{ $content['heroSubTitle'] }}</p>
		</div>
		
		<div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
			<a class="inline-flex items-center justify-center w-full mb-2 bg-blue-600 text-white rounded-full py-3 pl-6 pr-2 sm:w-auto sm:mb-0" @auth href="{{ route('home') }}" @else href="{{ route('register') }}" @endauth >
				<span class="text-xl mr-3">@auth Dashboard @else Get Started Now @endauth</span>
				<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
				<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
				</svg>
			</a>
		</div>
		<a href="#intro" class="bg-transparent box-border cursor-pointer flex flex-col items-center justify-start text-xl leading-none mt-12 md:mt-16 max-w-full text-indigo-700 no-underline">
			<div class="cursor-pointer font-sans font-semibold text-sm text-gray-900" style="line-height: 1.42857; quotes: auto;">
    		Learn More Below
  			</div>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
			</svg>
		</a>

    </div>

    <div class="mt-20 text-center fade-in fade-in-second">
		<div class="">
			<div class="w-5/6 sm:col-4/6 w-4/5 lg:w-full mx-auto relative -mt-4">
				<img src="{{ $content['heroImage'] }}" alt="{{ $content['heroImageAlt'] }}" class="mx-auto z-10 relative"/>
			</div>
		</div>
	</div>
</section>

