<div class="container px-4 py-12 mx-auto max-w-6xl"
    x-data="{ selected: 'features' }"
    @scroll.window="selected = document.querySelector('#testimonials').getBoundingClientRect().top <= 2 ? 'testimonials' : (document.querySelector('#why').getBoundingClientRect().top <= 2 ? 'why': (document.querySelector('#how').getBoundingClientRect().top <= 2 ? 'how' : 'features'))"
    >
    {{-- Sticky Panel --}}
    <div class="wrap">
        {{-- Left Nav Panel --}}
        <div class="flex flex-wrap">
            <div class="w-4/12 hidden md:block">
                <div class="sticky top-0">
                    <div class="p-8">
                        <p class="text-2xl text-gray-900 mb-5">{{ $content['sideNavTitle'] }}</p>
                        <nav>
                            <a href="#features" x-bind:class="{ 'font-extrabold': selected === 'features' }" class="text-gray-900 font-medium py-1 block">Features</a>
                            <a href="#how" x-bind:class="{ 'font-extrabold': selected === 'how' }" class="text-gray-900 font-medium py-1 block">How?</a>
                            <a href="#why" x-bind:class="{ 'font-extrabold': selected === 'why' }" class="text-gray-900 font-medium py-1 block">Why?</a>
                            <a href="#testimonials" x-bind:class="{ 'font-extrabold': selected === 'testimonials' }" class="text-gray-900 font-medium py-1 block">Testimonials</a>
                            <a href="#more" class="text-gray-900 font-medium py-1 block">More</a>
                        </nav> 
                    </div>
                    <div class="pl-8 mt-5">
                        <a class="inline-flex items-center justify-center w-full mb-2 bg-blue-600 text-white rounded-full py-3 pl-6 pr-2 sm:w-auto sm:mb-0" @auth href="{{ route('home') }}" @else href="{{ route('register') }}" @endauth >
                            <span class="text-xl mr-3">@auth Dashboard @else Get Started Now @endauth</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Right Content Panel --}}
            <div class="md:w-8/12 sm:w-full">
                @include('Marketing.Create.Index.Sections.sidebar-features')
                @include('Marketing.Create.Index.Sections.sidebar-how')
                @include('Marketing.Create.Index.Sections.sidebar-why')
                @include('Marketing.Create.Index.Sections.sidebar-testimonials')
            </div>
        </div>
    </div>
</div>

{{-- Bottom nav button --}}
<div x-data="{ isShowing: false }">
    <section class="md:hidden block fixed inset-x-0 bottom-0 z-30 bg-white shadow py-2 transition duration-500 ease-in-out"
    x-show="isShowing"
    @scroll.window="isShowing = (window.pageYOffset > 300) ? true : false"
    x-transition:enter="transition ease-out duration-500" 
    x-transition:enter-start="opacity-0 transform scale-90" 
    x-transition:enter-end="opacity-100 transform scale-100" 
    x-transition:leave="transition ease-in duration-500" 
    x-transition:leave-start="opacity-100 transform scale-100" 
    x-transition:leave-end="opacity-0 transform scale-90"
    >    
        <div class="text-center">
            <a class="inline-flex items-center justify-center btn-primary btn-lg rounded-full py-3 pl-6 pr-2 sm:w-auto sm:mb-0" @auth href="{{ route('home') }}" @else href="{{ route('register') }}" @endauth >
                <span class="text-xl mr-3">@auth Dashboard @else Get Started Now @endauth</span>
                <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fas fa-arrow-right fa-stack-1x fa-inverse text-primary"></i>
                </span>
            </a>
        </div>
    </section>
</div>
