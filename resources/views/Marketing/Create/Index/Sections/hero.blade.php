<section class="container pt-14 md:pt-32 pb-8 md:pb-24 mx-auto">
    <div class="w-full mx-auto text-center md:w-11/12 xl:w-9/12 fade-in fade-in-first">
		<div class="px-2">
			<h1 class="mb-6 text-3xl font-bold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">{{ $content['heroTitle'] }}</h1>
		</div>
		<div class="px-16 md:px-6">
			<p class="px-0 mb-6 text-lg text-gray-600 md:text-xl lg:px-24">{{ $content['heroSubTitle'] }}</p>
		</div>
		
		<div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
			<a class="inline-flex items-center justify-center md:mt-6 mb-2 btn-primary btn-lg rounded-full py-3 pl-6 pr-2 sm:w-auto sm:mb-0" @auth href="{{ route('home') }}" @else href="{{ route('register') }}" @endauth >
				<span class="text-xl mr-3">@auth Dashboard @else Get Started Now @endauth</span>
				<span class="fa-stack fa-lg">
				<i class="fas fa-circle fa-stack-2x"></i>
				<i class="fas fa-arrow-right fa-stack-1x fa-inverse text-primary"></i>
				</span>
			</a>
		</div>
		<a href="#intro" class="bg-transparent box-border cursor-pointer flex flex-col items-center justify-start text-xl leading-none mt-12 md:mt-16 max-w-full text-indigo-700 no-underline">
			<div class="cursor-pointer font-sans font-semibold text-sm text-gray-900" style="line-height: 1.42857; quotes: auto;">
    		Learn More Below
  			</div>
  			<img src="/img/down-arrow.svg" width="16" class="border-0 cursor-pointer inline-block leading-none mt-3 object-cover align-middle" alt="down arrow" />
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

